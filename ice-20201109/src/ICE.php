<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddCategoryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddCategoryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddFavoritePublicMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddFavoritePublicMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AlterSearchIndexRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AlterSearchIndexResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelDNAJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelDNAJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelFavoritePublicMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelFavoritePublicMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAuditRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAuditResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateDNADBRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateDNADBResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveSnapshotTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveSnapshotTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSearchIndexRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSearchIndexResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadStreamRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadStreamResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DecryptKMSDataKeyRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DecryptKMSDataKeyResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteDNADBRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteDNADBResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteDNAFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteDNAFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotFilesShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaFromSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaFromSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePlayInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePlayInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSmartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSmartJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsEditUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsEditUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUHDUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUHDUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMpsAiUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMpsAiUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsSummaryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsSummaryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeRtcRobotInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeRtcRobotInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DetectAudioForCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DetectAudioForCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DropSearchIndexRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DropSearchIndexResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DropSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DropSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GenerateKMSDataKeyResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetContentAnalyzeConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDefaultStorageLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEventCallbackResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingIndexFileRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingIndexFileResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotUrlsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotUrlsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetStorageListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetStorageListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSystemTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSystemTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateParamsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateParamsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVideoListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVideoListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\InsertMediaToSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\InsertMediaToSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarTrainingJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarTrainingJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListBatchMediaProducingJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListBatchMediaProducingJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoiceJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoiceJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoicesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoicesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNADBRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNADBResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNAFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNAFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListEditingProjectsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListEditingProjectsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPublicMediaBasicInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPublicMediaBasicInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartSysAvatarModelsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartSysAvatarModelsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSystemTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSystemTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaIndexJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaIndexJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySearchIndexRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySearchIndexResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySmarttagJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySmarttagJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RefreshUploadMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RefreshUploadMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaStreamRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaStreamResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByFaceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByFaceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByHybridRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByHybridResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByMultimodalRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByMultimodalResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveSnapshotJobCommandRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveSnapshotJobCommandResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveTranscodeJobCommandRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveTranscodeJobCommandResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetContentAnalyzeConfigRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetContentAnalyzeConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultStorageLocationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultStorageLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetEventCallbackRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetEventCallbackResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartRtcRobotInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartRtcRobotInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartRtcRobotInstanceShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartWorkflowRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartWorkflowResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopRtcRobotInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopRtcRobotInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitASRJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitASRJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAudioProduceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAudioProduceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAvatarVideoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAvatarVideoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitBatchMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitBatchMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDNAJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDNAJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDNAJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicChartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicChartJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveEditingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveEditingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaAiAnalysisJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaAiAnalysisJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPackageJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPackageJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPackageJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitStandardCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitStandardCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTextGenerateJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTextGenerateJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitVideoTranslationJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitVideoTranslationJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomizedVoiceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomizedVoiceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveRecordTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveRecordTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveRecordTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveSnapshotTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveSnapshotTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaToSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaToSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateRtcRobotInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateRtcRobotInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateRtcRobotInstanceShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadMediaByURLRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadMediaByURLResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadStreamByURLRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadStreamByURLResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ICE extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
            'ap-northeast-1'              => 'ice.aliyuncs.com',
            'ap-northeast-2-pop'          => 'ice.aliyuncs.com',
            'ap-south-1'                  => 'ice.aliyuncs.com',
            'ap-southeast-1'              => 'ice.aliyuncs.com',
            'ap-southeast-2'              => 'ice.aliyuncs.com',
            'ap-southeast-3'              => 'ice.aliyuncs.com',
            'ap-southeast-5'              => 'ice.aliyuncs.com',
            'cn-beijing'                  => 'ice.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ice.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ice.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ice.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ice.aliyuncs.com',
            'cn-chengdu'                  => 'ice.aliyuncs.com',
            'cn-edge-1'                   => 'ice.aliyuncs.com',
            'cn-fujian'                   => 'ice.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ice.aliyuncs.com',
            'cn-hangzhou'                 => 'ice.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ice.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ice.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ice.aliyuncs.com',
            'cn-hongkong'                 => 'ice.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ice.aliyuncs.com',
            'cn-huhehaote'                => 'ice.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'ice.aliyuncs.com',
            'cn-north-2-gov-1'            => 'ice.aliyuncs.com',
            'cn-qingdao'                  => 'ice.aliyuncs.com',
            'cn-qingdao-nebula'           => 'ice.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ice.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ice.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ice.aliyuncs.com',
            'cn-shanghai-inner'           => 'ice.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ice.aliyuncs.com',
            'cn-shenzhen'                 => 'ice.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ice.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ice.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ice.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ice.aliyuncs.com',
            'cn-wuhan'                    => 'ice.aliyuncs.com',
            'cn-wulanchabu'               => 'ice.aliyuncs.com',
            'cn-yushanfang'               => 'ice.aliyuncs.com',
            'cn-zhangbei'                 => 'ice.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ice.aliyuncs.com',
            'cn-zhangjiakou'              => 'ice.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ice.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ice.aliyuncs.com',
            'eu-central-1'                => 'ice.aliyuncs.com',
            'eu-west-1'                   => 'ice.aliyuncs.com',
            'eu-west-1-oxs'               => 'ice.aliyuncs.com',
            'me-east-1'                   => 'ice.aliyuncs.com',
            'rus-west-1-pop'              => 'ice.aliyuncs.com',
            'us-east-1'                   => 'ice.aliyuncs.com',
            'us-west-1'                   => 'ice.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建媒资分类
     *  *
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
            'version'     => '2020-11-09',
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
     * @summary 创建媒资分类
     *  *
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
     * @summary 剪辑工程增加素材
     *  *
     * @param AddEditingProjectMaterialsRequest $request AddEditingProjectMaterialsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddEditingProjectMaterialsResponse AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->materialMaps)) {
            $query['MaterialMaps'] = $request->materialMaps;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddEditingProjectMaterials',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 剪辑工程增加素材
     *  *
     * @param AddEditingProjectMaterialsRequest $request AddEditingProjectMaterialsRequest
     *
     * @return AddEditingProjectMaterialsResponse AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @summary 收藏公共媒资
     *  *
     * @param AddFavoritePublicMediaRequest $request AddFavoritePublicMediaRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddFavoritePublicMediaResponse AddFavoritePublicMediaResponse
     */
    public function addFavoritePublicMediaWithOptions($request, $runtime)
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
            'action'      => 'AddFavoritePublicMedia',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFavoritePublicMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 收藏公共媒资
     *  *
     * @param AddFavoritePublicMediaRequest $request AddFavoritePublicMediaRequest
     *
     * @return AddFavoritePublicMediaResponse AddFavoritePublicMediaResponse
     */
    public function addFavoritePublicMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFavoritePublicMediaWithOptions($request, $runtime);
    }

    /**
     * @summary 为媒资增加标注信息
     *  *
     * @param AddMediaMarksRequest $request AddMediaMarksRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMediaMarksResponse AddMediaMarksResponse
     */
    public function addMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarks)) {
            $query['MediaMarks'] = $request->mediaMarks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为媒资增加标注信息
     *  *
     * @param AddMediaMarksRequest $request AddMediaMarksRequest
     *
     * @return AddMediaMarksResponse AddMediaMarksResponse
     */
    public function addMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary AddTemplate
     *  *
     * @param AddTemplateRequest $request AddTemplateRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTemplateResponse AddTemplateResponse
     */
    public function addTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coverUrl)) {
            $query['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->previewMedia)) {
            $query['PreviewMedia'] = $request->previewMedia;
        }
        if (!Utils::isUnset($request->relatedMediaids)) {
            $query['RelatedMediaids'] = $request->relatedMediaids;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary AddTemplate
     *  *
     * @param AddTemplateRequest $request AddTemplateRequest
     *
     * @return AddTemplateResponse AddTemplateResponse
     */
    public function addTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新搜索索引
     *  *
     * @param AlterSearchIndexRequest $request AlterSearchIndexRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AlterSearchIndexResponse AlterSearchIndexResponse
     */
    public function alterSearchIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexConfig)) {
            $query['IndexConfig'] = $request->indexConfig;
        }
        if (!Utils::isUnset($request->indexStatus)) {
            $query['IndexStatus'] = $request->indexStatus;
        }
        if (!Utils::isUnset($request->indexType)) {
            $query['IndexType'] = $request->indexType;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AlterSearchIndex',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AlterSearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新搜索索引
     *  *
     * @param AlterSearchIndexRequest $request AlterSearchIndexRequest
     *
     * @return AlterSearchIndexResponse AlterSearchIndexResponse
     */
    public function alterSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->alterSearchIndexWithOptions($request, $runtime);
    }

    /**
     * @summary 批量获取媒资信息
     *  *
     * @param BatchGetMediaInfosRequest $request BatchGetMediaInfosRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetMediaInfosResponse BatchGetMediaInfosResponse
     */
    public function batchGetMediaInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additionType)) {
            $query['AdditionType'] = $request->additionType;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetMediaInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量获取媒资信息
     *  *
     * @param BatchGetMediaInfosRequest $request BatchGetMediaInfosRequest
     *
     * @return BatchGetMediaInfosResponse BatchGetMediaInfosResponse
     */
    public function batchGetMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @summary 取消DNA作业
     *  *
     * @param CancelDNAJobRequest $request CancelDNAJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelDNAJobResponse CancelDNAJobResponse
     */
    public function cancelDNAJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
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
            'action'      => 'CancelDNAJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelDNAJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消DNA作业
     *  *
     * @param CancelDNAJobRequest $request CancelDNAJobRequest
     *
     * @return CancelDNAJobResponse CancelDNAJobResponse
     */
    public function cancelDNAJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDNAJobWithOptions($request, $runtime);
    }

    /**
     * @summary 取消收藏公共媒资
     *  *
     * @param CancelFavoritePublicMediaRequest $request CancelFavoritePublicMediaRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelFavoritePublicMediaResponse CancelFavoritePublicMediaResponse
     */
    public function cancelFavoritePublicMediaWithOptions($request, $runtime)
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
            'action'      => 'CancelFavoritePublicMedia',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelFavoritePublicMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消收藏公共媒资
     *  *
     * @param CancelFavoritePublicMediaRequest $request CancelFavoritePublicMediaRequest
     *
     * @return CancelFavoritePublicMediaResponse CancelFavoritePublicMediaResponse
     */
    public function cancelFavoritePublicMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelFavoritePublicMediaWithOptions($request, $runtime);
    }

    /**
     * @summary 提交人工审核
     *  *
     * @param CreateAuditRequest $request CreateAuditRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAuditResponse CreateAuditResponse
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
            'version'     => '2020-11-09',
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
     * @summary 提交人工审核
     *  *
     * @param CreateAuditRequest $request CreateAuditRequest
     *
     * @return CreateAuditResponse CreateAuditResponse
     */
    public function createAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuditWithOptions($request, $runtime);
    }

    /**
     * @summary 创建数字人训练任务
     *  *
     * @param CreateAvatarTrainingJobRequest $request CreateAvatarTrainingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAvatarTrainingJobResponse CreateAvatarTrainingJobResponse
     */
    public function createAvatarTrainingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarDescription)) {
            $query['AvatarDescription'] = $request->avatarDescription;
        }
        if (!Utils::isUnset($request->avatarName)) {
            $query['AvatarName'] = $request->avatarName;
        }
        if (!Utils::isUnset($request->avatarType)) {
            $query['AvatarType'] = $request->avatarType;
        }
        if (!Utils::isUnset($request->portrait)) {
            $query['Portrait'] = $request->portrait;
        }
        if (!Utils::isUnset($request->thumbnail)) {
            $query['Thumbnail'] = $request->thumbnail;
        }
        if (!Utils::isUnset($request->transparent)) {
            $query['Transparent'] = $request->transparent;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数字人训练任务
     *  *
     * @param CreateAvatarTrainingJobRequest $request CreateAvatarTrainingJobRequest
     *
     * @return CreateAvatarTrainingJobResponse CreateAvatarTrainingJobResponse
     */
    public function createAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 创建媒体处理自定义模板
     *  *
     * @param CreateCustomTemplateRequest $request CreateCustomTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomTemplateResponse CreateCustomTemplateResponse
     */
    public function createCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->subtype)) {
            $query['Subtype'] = $request->subtype;
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
            'action'      => 'CreateCustomTemplate',
            'version'     => '2020-11-09',
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
     * @summary 创建媒体处理自定义模板
     *  *
     * @param CreateCustomTemplateRequest $request CreateCustomTemplateRequest
     *
     * @return CreateCustomTemplateResponse CreateCustomTemplateResponse
     */
    public function createCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 创建人声克隆任务
     *  *
     * @param CreateCustomizedVoiceJobRequest $request CreateCustomizedVoiceJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomizedVoiceJobResponse CreateCustomizedVoiceJobResponse
     */
    public function createCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gender)) {
            $query['Gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->scenario)) {
            $query['Scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->voiceDesc)) {
            $query['VoiceDesc'] = $request->voiceDesc;
        }
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        if (!Utils::isUnset($request->voiceName)) {
            $query['VoiceName'] = $request->voiceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建人声克隆任务
     *  *
     * @param CreateCustomizedVoiceJobRequest $request CreateCustomizedVoiceJobRequest
     *
     * @return CreateCustomizedVoiceJobResponse CreateCustomizedVoiceJobResponse
     */
    public function createCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary 创建指纹库
     *  *
     * @param CreateDNADBRequest $request CreateDNADBRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDNADBResponse CreateDNADBResponse
     */
    public function createDNADBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
            'action'      => 'CreateDNADB',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDNADBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建指纹库
     *  *
     * @param CreateDNADBRequest $request CreateDNADBRequest
     *
     * @return CreateDNADBResponse CreateDNADBResponse
     */
    public function createDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDNADBWithOptions($request, $runtime);
    }

    /**
     * @summary 创建云剪辑工程
     *  *
     * @param CreateEditingProjectRequest $request CreateEditingProjectRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEditingProjectResponse CreateEditingProjectResponse
     */
    public function createEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessConfig)) {
            $query['BusinessConfig'] = $request->businessConfig;
        }
        if (!Utils::isUnset($request->clipsParam)) {
            $query['ClipsParam'] = $request->clipsParam;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->materialMaps)) {
            $query['MaterialMaps'] = $request->materialMaps;
        }
        if (!Utils::isUnset($request->projectType)) {
            $query['ProjectType'] = $request->projectType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->timeline)) {
            $body['Timeline'] = $request->timeline;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEditingProject',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建云剪辑工程
     *  *
     * @param CreateEditingProjectRequest $request CreateEditingProjectRequest
     *
     * @return CreateEditingProjectResponse CreateEditingProjectResponse
     */
    public function createEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 创建直播录制模板
     *  *
     * @param CreateLiveRecordTemplateRequest $tmpReq  CreateLiveRecordTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLiveRecordTemplateResponse CreateLiveRecordTemplateResponse
     */
    public function createLiveRecordTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLiveRecordTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->recordFormat)) {
            $request->recordFormatShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recordFormat, 'RecordFormat', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->recordFormatShrink)) {
            $body['RecordFormat'] = $request->recordFormatShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveRecordTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建直播录制模板
     *  *
     * @param CreateLiveRecordTemplateRequest $request CreateLiveRecordTemplateRequest
     *
     * @return CreateLiveRecordTemplateResponse CreateLiveRecordTemplateResponse
     */
    public function createLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 创建直播截图模板
     *  *
     * @param CreateLiveSnapshotTemplateRequest $request CreateLiveSnapshotTemplateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLiveSnapshotTemplateResponse CreateLiveSnapshotTemplateResponse
     */
    public function createLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->overwriteFormat)) {
            $body['OverwriteFormat'] = $request->overwriteFormat;
        }
        if (!Utils::isUnset($request->sequenceFormat)) {
            $body['SequenceFormat'] = $request->sequenceFormat;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->timeInterval)) {
            $body['TimeInterval'] = $request->timeInterval;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveSnapshotTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建直播截图模板
     *  *
     * @param CreateLiveSnapshotTemplateRequest $request CreateLiveSnapshotTemplateRequest
     *
     * @return CreateLiveSnapshotTemplateResponse CreateLiveSnapshotTemplateResponse
     */
    public function createLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 创建转码模版
     *  *
     * @param CreateLiveTranscodeTemplateRequest $tmpReq  CreateLiveTranscodeTemplateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLiveTranscodeTemplateResponse CreateLiveTranscodeTemplateResponse
     */
    public function createLiveTranscodeTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLiveTranscodeTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateConfigShrink)) {
            $query['TemplateConfig'] = $request->templateConfigShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveTranscodeTemplate',
            'version'     => '2020-11-09',
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
     * @summary 创建转码模版
     *  *
     * @param CreateLiveTranscodeTemplateRequest $request CreateLiveTranscodeTemplateRequest
     *
     * @return CreateLiveTranscodeTemplateResponse CreateLiveTranscodeTemplateResponse
     */
    public function createLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 添加用户管道配置
     *  *
     * @param CreatePipelineRequest $request CreatePipelineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePipelineResponse CreatePipelineResponse
     */
    public function createPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePipeline',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加用户管道配置
     *  *
     * @param CreatePipelineRequest $request CreatePipelineRequest
     *
     * @return CreatePipelineResponse CreatePipelineResponse
     */
    public function createPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPipelineWithOptions($request, $runtime);
    }

    /**
     * @summary 创建搜索索引
     *  *
     * @param CreateSearchIndexRequest $request CreateSearchIndexRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSearchIndexResponse CreateSearchIndexResponse
     */
    public function createSearchIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexConfig)) {
            $query['IndexConfig'] = $request->indexConfig;
        }
        if (!Utils::isUnset($request->indexStatus)) {
            $query['IndexStatus'] = $request->indexStatus;
        }
        if (!Utils::isUnset($request->indexType)) {
            $query['IndexType'] = $request->indexType;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSearchIndex',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建搜索索引
     *  *
     * @param CreateSearchIndexRequest $request CreateSearchIndexRequest
     *
     * @return CreateSearchIndexResponse CreateSearchIndexResponse
     */
    public function createSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSearchIndexWithOptions($request, $runtime);
    }

    /**
     * @summary 创建库
     *  *
     * @param CreateSearchLibRequest $request CreateSearchLibRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSearchLibResponse CreateSearchLibResponse
     */
    public function createSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建库
     *  *
     * @param CreateSearchLibRequest $request CreateSearchLibRequest
     *
     * @return CreateSearchLibResponse CreateSearchLibResponse
     */
    public function createSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary 本地媒资上传
     *  *
     * @param CreateUploadMediaRequest $request CreateUploadMediaRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUploadMediaResponse CreateUploadMediaResponse
     */
    public function createUploadMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->fileInfo)) {
            $query['FileInfo'] = $request->fileInfo;
        }
        if (!Utils::isUnset($request->mediaMetaData)) {
            $query['MediaMetaData'] = $request->mediaMetaData;
        }
        if (!Utils::isUnset($request->postProcessConfig)) {
            $query['PostProcessConfig'] = $request->postProcessConfig;
        }
        if (!Utils::isUnset($request->uploadTargetConfig)) {
            $query['UploadTargetConfig'] = $request->uploadTargetConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadMedia',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 本地媒资上传
     *  *
     * @param CreateUploadMediaRequest $request CreateUploadMediaRequest
     *
     * @return CreateUploadMediaResponse CreateUploadMediaResponse
     */
    public function createUploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadMediaWithOptions($request, $runtime);
    }

    /**
     * @summary 本地上传媒体流
     *  *
     * @param CreateUploadStreamRequest $request CreateUploadStreamRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUploadStreamResponse CreateUploadStreamResponse
     */
    public function createUploadStreamWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadStream',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 本地上传媒体流
     *  *
     * @param CreateUploadStreamRequest $request CreateUploadStreamRequest
     *
     * @return CreateUploadStreamResponse CreateUploadStreamResponse
     */
    public function createUploadStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadStreamWithOptions($request, $runtime);
    }

    /**
     * @summary 解密KMS密钥DataKey
     *  *
     * @param DecryptKMSDataKeyRequest $request DecryptKMSDataKeyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DecryptKMSDataKeyResponse DecryptKMSDataKeyResponse
     */
    public function decryptKMSDataKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ciphertextBlob)) {
            $query['CiphertextBlob'] = $request->ciphertextBlob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DecryptKMSDataKey',
            'version'     => '2020-11-09',
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
     * @summary 解密KMS密钥DataKey
     *  *
     * @param DecryptKMSDataKeyRequest $request DecryptKMSDataKeyRequest
     *
     * @return DecryptKMSDataKeyResponse DecryptKMSDataKeyResponse
     */
    public function decryptKMSDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decryptKMSDataKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 更新数字人训练任务信息
     *  *
     * @param DeleteAvatarTrainingJobRequest $request DeleteAvatarTrainingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAvatarTrainingJobResponse DeleteAvatarTrainingJobResponse
     */
    public function deleteAvatarTrainingJobWithOptions($request, $runtime)
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
            'action'      => 'DeleteAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数字人训练任务信息
     *  *
     * @param DeleteAvatarTrainingJobRequest $request DeleteAvatarTrainingJobRequest
     *
     * @return DeleteAvatarTrainingJobResponse DeleteAvatarTrainingJobResponse
     */
    public function deleteAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 删除媒资分类
     *  *
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
            'version'     => '2020-11-09',
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
     * @summary 删除媒资分类
     *  *
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
     * @summary 删除媒体处理自定义模板
     *  *
     * @param DeleteCustomTemplateRequest $request DeleteCustomTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomTemplateResponse DeleteCustomTemplateResponse
     */
    public function deleteCustomTemplateWithOptions($request, $runtime)
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
            'action'      => 'DeleteCustomTemplate',
            'version'     => '2020-11-09',
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
     * @summary 删除媒体处理自定义模板
     *  *
     * @param DeleteCustomTemplateRequest $request DeleteCustomTemplateRequest
     *
     * @return DeleteCustomTemplateResponse DeleteCustomTemplateResponse
     */
    public function deleteCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 删除用户的专属人声任务
     *  *
     * @param DeleteCustomizedVoiceJobRequest $request DeleteCustomizedVoiceJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomizedVoiceJobResponse DeleteCustomizedVoiceJobResponse
     */
    public function deleteCustomizedVoiceJobWithOptions($request, $runtime)
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
            'action'      => 'DeleteCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除用户的专属人声任务
     *  *
     * @param DeleteCustomizedVoiceJobRequest $request DeleteCustomizedVoiceJobRequest
     *
     * @return DeleteCustomizedVoiceJobResponse DeleteCustomizedVoiceJobResponse
     */
    public function deleteCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary 删除DNA库
     *  *
     * @param DeleteDNADBRequest $request DeleteDNADBRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDNADBResponse DeleteDNADBResponse
     */
    public function deleteDNADBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBId)) {
            $query['DBId'] = $request->DBId;
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
            'action'      => 'DeleteDNADB',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDNADBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除DNA库
     *  *
     * @param DeleteDNADBRequest $request DeleteDNADBRequest
     *
     * @return DeleteDNADBResponse DeleteDNADBResponse
     */
    public function deleteDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDNADBWithOptions($request, $runtime);
    }

    /**
     * @summary 删除DNA文件
     *  *
     * @param DeleteDNAFilesRequest $request DeleteDNAFilesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDNAFilesResponse DeleteDNAFilesResponse
     */
    public function deleteDNAFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBId)) {
            $query['DBId'] = $request->DBId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->primaryKeys)) {
            $query['PrimaryKeys'] = $request->primaryKeys;
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
            'action'      => 'DeleteDNAFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDNAFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除DNA文件
     *  *
     * @param DeleteDNAFilesRequest $request DeleteDNAFilesRequest
     *
     * @return DeleteDNAFilesResponse DeleteDNAFilesResponse
     */
    public function deleteDNAFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDNAFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除剪辑工程关联素材
     *  *
     * @param DeleteEditingProjectMaterialsRequest $request DeleteEditingProjectMaterialsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEditingProjectMaterialsResponse DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->materialIds)) {
            $query['MaterialIds'] = $request->materialIds;
        }
        if (!Utils::isUnset($request->materialType)) {
            $query['MaterialType'] = $request->materialType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEditingProjectMaterials',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除剪辑工程关联素材
     *  *
     * @param DeleteEditingProjectMaterialsRequest $request DeleteEditingProjectMaterialsRequest
     *
     * @return DeleteEditingProjectMaterialsResponse DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @summary 删除云剪辑工程
     *  *
     * @param DeleteEditingProjectsRequest $request DeleteEditingProjectsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEditingProjectsResponse DeleteEditingProjectsResponse
     */
    public function deleteEditingProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectIds)) {
            $query['ProjectIds'] = $request->projectIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEditingProjects',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEditingProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除云剪辑工程
     *  *
     * @param DeleteEditingProjectsRequest $request DeleteEditingProjectsRequest
     *
     * @return DeleteEditingProjectsResponse DeleteEditingProjectsResponse
     */
    public function deleteEditingProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary 实时媒体服务-删除录制文件
     *  *
     * @param DeleteLiveRecordFilesRequest $request DeleteLiveRecordFilesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveRecordFilesResponse DeleteLiveRecordFilesResponse
     */
    public function deleteLiveRecordFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recordIds)) {
            $query['RecordIds'] = $request->recordIds;
        }
        if (!Utils::isUnset($request->removeFile)) {
            $query['RemoveFile'] = $request->removeFile;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveRecordFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveRecordFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实时媒体服务-删除录制文件
     *  *
     * @param DeleteLiveRecordFilesRequest $request DeleteLiveRecordFilesRequest
     *
     * @return DeleteLiveRecordFilesResponse DeleteLiveRecordFilesResponse
     */
    public function deleteLiveRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除直播录制模板
     *  *
     * @param DeleteLiveRecordTemplateRequest $request DeleteLiveRecordTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplateResponse
     */
    public function deleteLiveRecordTemplateWithOptions($request, $runtime)
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
            'action'      => 'DeleteLiveRecordTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除直播录制模板
     *  *
     * @param DeleteLiveRecordTemplateRequest $request DeleteLiveRecordTemplateRequest
     *
     * @return DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplateResponse
     */
    public function deleteLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 批量删除直播截图文件
     *  *
     * @param DeleteLiveSnapshotFilesRequest $tmpReq  DeleteLiveSnapshotFilesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveSnapshotFilesResponse DeleteLiveSnapshotFilesResponse
     */
    public function deleteLiveSnapshotFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteLiveSnapshotFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createTimestampList)) {
            $request->createTimestampListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createTimestampList, 'CreateTimestampList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->createTimestampListShrink)) {
            $query['CreateTimestampList'] = $request->createTimestampListShrink;
        }
        if (!Utils::isUnset($request->deleteOriginalFile)) {
            $query['DeleteOriginalFile'] = $request->deleteOriginalFile;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveSnapshotFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveSnapshotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量删除直播截图文件
     *  *
     * @param DeleteLiveSnapshotFilesRequest $request DeleteLiveSnapshotFilesRequest
     *
     * @return DeleteLiveSnapshotFilesResponse DeleteLiveSnapshotFilesResponse
     */
    public function deleteLiveSnapshotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSnapshotFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除直播截图模板
     *  *
     * @param DeleteLiveSnapshotTemplateRequest $request DeleteLiveSnapshotTemplateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveSnapshotTemplateResponse DeleteLiveSnapshotTemplateResponse
     */
    public function deleteLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveSnapshotTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除直播截图模板
     *  *
     * @param DeleteLiveSnapshotTemplateRequest $request DeleteLiveSnapshotTemplateRequest
     *
     * @return DeleteLiveSnapshotTemplateResponse DeleteLiveSnapshotTemplateResponse
     */
    public function deleteLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 删除指定转码任务
     *  *
     * @param DeleteLiveTranscodeJobRequest $request DeleteLiveTranscodeJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveTranscodeJobResponse DeleteLiveTranscodeJobResponse
     */
    public function deleteLiveTranscodeJobWithOptions($request, $runtime)
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
            'action'      => 'DeleteLiveTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定转码任务
     *  *
     * @param DeleteLiveTranscodeJobRequest $request DeleteLiveTranscodeJobRequest
     *
     * @return DeleteLiveTranscodeJobResponse DeleteLiveTranscodeJobResponse
     */
    public function deleteLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary 删除指定转码模版
     *  *
     * @param DeleteLiveTranscodeTemplateRequest $request DeleteLiveTranscodeTemplateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveTranscodeTemplateResponse DeleteLiveTranscodeTemplateResponse
     */
    public function deleteLiveTranscodeTemplateWithOptions($request, $runtime)
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
            'action'      => 'DeleteLiveTranscodeTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定转码模版
     *  *
     * @param DeleteLiveTranscodeTemplateRequest $request DeleteLiveTranscodeTemplateRequest
     *
     * @return DeleteLiveTranscodeTemplateResponse DeleteLiveTranscodeTemplateResponse
     */
    public function deleteLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 删除媒资从搜索
     *  *
     * @param DeleteMediaFromSearchLibRequest $request DeleteMediaFromSearchLibRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaFromSearchLibResponse DeleteMediaFromSearchLibResponse
     */
    public function deleteMediaFromSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->msgBody)) {
            $query['MsgBody'] = $request->msgBody;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaFromSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaFromSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除媒资从搜索
     *  *
     * @param DeleteMediaFromSearchLibRequest $request DeleteMediaFromSearchLibRequest
     *
     * @return DeleteMediaFromSearchLibResponse DeleteMediaFromSearchLibResponse
     */
    public function deleteMediaFromSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaFromSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary 删除媒资信息
     *  *
     * @param DeleteMediaInfosRequest $request DeleteMediaInfosRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaInfosResponse DeleteMediaInfosResponse
     */
    public function deleteMediaInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletePhysicalFiles)) {
            $query['DeletePhysicalFiles'] = $request->deletePhysicalFiles;
        }
        if (!Utils::isUnset($request->inputURLs)) {
            $query['InputURLs'] = $request->inputURLs;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除媒资信息
     *  *
     * @param DeleteMediaInfosRequest $request DeleteMediaInfosRequest
     *
     * @return DeleteMediaInfosResponse DeleteMediaInfosResponse
     */
    public function deleteMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @summary 删除媒资标注信息
     *  *
     * @param DeleteMediaMarksRequest $request DeleteMediaMarksRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaMarksResponse DeleteMediaMarksResponse
     */
    public function deleteMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarkIds)) {
            $query['MediaMarkIds'] = $request->mediaMarkIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除媒资标注信息
     *  *
     * @param DeleteMediaMarksRequest $request DeleteMediaMarksRequest
     *
     * @return DeleteMediaMarksResponse DeleteMediaMarksResponse
     */
    public function deleteMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary 删除管道配置
     *  *
     * @param DeletePipelineRequest $request DeletePipelineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePipelineResponse DeletePipelineResponse
     */
    public function deletePipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePipeline',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除管道配置
     *  *
     * @param DeletePipelineRequest $request DeletePipelineRequest
     *
     * @return DeletePipelineResponse DeletePipelineResponse
     */
    public function deletePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePipelineWithOptions($request, $runtime);
    }

    /**
     * @summary 删除播放信息
     *  *
     * @param DeletePlayInfoRequest $request DeletePlayInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePlayInfoResponse DeletePlayInfoResponse
     */
    public function deletePlayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletePhysicalFiles)) {
            $query['DeletePhysicalFiles'] = $request->deletePhysicalFiles;
        }
        if (!Utils::isUnset($request->fileURLs)) {
            $query['FileURLs'] = $request->fileURLs;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePlayInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除播放信息
     *  *
     * @param DeletePlayInfoRequest $request DeletePlayInfoRequest
     *
     * @return DeletePlayInfoResponse DeletePlayInfoResponse
     */
    public function deletePlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePlayInfoWithOptions($request, $runtime);
    }

    /**
     * @summary DeleteSmartJob
     *  *
     * @param DeleteSmartJobRequest $request DeleteSmartJobRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSmartJobResponse DeleteSmartJobResponse
     */
    public function deleteSmartJobWithOptions($request, $runtime)
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
            'action'      => 'DeleteSmartJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSmartJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeleteSmartJob
     *  *
     * @param DeleteSmartJobRequest $request DeleteSmartJobRequest
     *
     * @return DeleteSmartJobResponse DeleteSmartJobResponse
     */
    public function deleteSmartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmartJobWithOptions($request, $runtime);
    }

    /**
     * @summary DeleteTemplate
     *  *
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeleteTemplate
     *  *
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImsEditUsageRequest $request DescribeMeterImsEditUsageRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsEditUsageResponse DescribeMeterImsEditUsageResponse
     */
    public function describeMeterImsEditUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsEditUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterImsEditUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterImsEditUsageRequest $request DescribeMeterImsEditUsageRequest
     *
     * @return DescribeMeterImsEditUsageResponse DescribeMeterImsEditUsageResponse
     */
    public function describeMeterImsEditUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsEditUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImsMediaConvertUHDUsageRequest $request DescribeMeterImsMediaConvertUHDUsageRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsMediaConvertUHDUsageResponse DescribeMeterImsMediaConvertUHDUsageResponse
     */
    public function describeMeterImsMediaConvertUHDUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsMediaConvertUHDUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterImsMediaConvertUHDUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterImsMediaConvertUHDUsageRequest $request DescribeMeterImsMediaConvertUHDUsageRequest
     *
     * @return DescribeMeterImsMediaConvertUHDUsageResponse DescribeMeterImsMediaConvertUHDUsageResponse
     */
    public function describeMeterImsMediaConvertUHDUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMediaConvertUHDUsageWithOptions($request, $runtime);
    }

    /**
     * @summary 智能媒体服务点播转码用量
     *  *
     * @param DescribeMeterImsMediaConvertUsageRequest $request DescribeMeterImsMediaConvertUsageRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsMediaConvertUsageResponse DescribeMeterImsMediaConvertUsageResponse
     */
    public function describeMeterImsMediaConvertUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsMediaConvertUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterImsMediaConvertUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 智能媒体服务点播转码用量
     *  *
     * @param DescribeMeterImsMediaConvertUsageRequest $request DescribeMeterImsMediaConvertUsageRequest
     *
     * @return DescribeMeterImsMediaConvertUsageResponse DescribeMeterImsMediaConvertUsageResponse
     */
    public function describeMeterImsMediaConvertUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMediaConvertUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImsMpsAiUsageRequest $request DescribeMeterImsMpsAiUsageRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsMpsAiUsageResponse DescribeMeterImsMpsAiUsageResponse
     */
    public function describeMeterImsMpsAiUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsMpsAiUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterImsMpsAiUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterImsMpsAiUsageRequest $request DescribeMeterImsMpsAiUsageRequest
     *
     * @return DescribeMeterImsMpsAiUsageResponse DescribeMeterImsMpsAiUsageResponse
     */
    public function describeMeterImsMpsAiUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMpsAiUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImsSummaryRequest $request DescribeMeterImsSummaryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsSummaryResponse DescribeMeterImsSummaryResponse
     */
    public function describeMeterImsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsSummary',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterImsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterImsSummaryRequest $request DescribeMeterImsSummaryRequest
     *
     * @return DescribeMeterImsSummaryResponse DescribeMeterImsSummaryResponse
     */
    public function describeMeterImsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayListRequest $request DescribePlayListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlayListResponse DescribePlayListResponse
     */
    public function describePlayListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->orderName)) {
            $query['OrderName'] = $request->orderName;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->playType)) {
            $query['PlayType'] = $request->playType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->traceId)) {
            $query['TraceId'] = $request->traceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePlayListRequest $request DescribePlayListRequest
     *
     * @return DescribePlayListResponse DescribePlayListResponse
     */
    public function describePlayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询实例
     *  *
     * @param DescribeRtcRobotInstanceRequest $request DescribeRtcRobotInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRtcRobotInstanceResponse DescribeRtcRobotInstanceResponse
     */
    public function describeRtcRobotInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRtcRobotInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实例
     *  *
     * @param DescribeRtcRobotInstanceRequest $request DescribeRtcRobotInstanceRequest
     *
     * @return DescribeRtcRobotInstanceResponse DescribeRtcRobotInstanceResponse
     */
    public function describeRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 本接口用来检测用户的朗读是否有明显的发音错误、嘈杂的环境等
     *  *
     * @param DetectAudioForCustomizedVoiceJobRequest $request DetectAudioForCustomizedVoiceJobRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectAudioForCustomizedVoiceJobResponse DetectAudioForCustomizedVoiceJobResponse
     */
    public function detectAudioForCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioRecordId)) {
            $query['AudioRecordId'] = $request->audioRecordId;
        }
        if (!Utils::isUnset($request->recordUrl)) {
            $query['RecordUrl'] = $request->recordUrl;
        }
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectAudioForCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectAudioForCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 本接口用来检测用户的朗读是否有明显的发音错误、嘈杂的环境等
     *  *
     * @param DetectAudioForCustomizedVoiceJobRequest $request DetectAudioForCustomizedVoiceJobRequest
     *
     * @return DetectAudioForCustomizedVoiceJobResponse DetectAudioForCustomizedVoiceJobResponse
     */
    public function detectAudioForCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectAudioForCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary 删除搜索索引
     *  *
     * @param DropSearchIndexRequest $request DropSearchIndexRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DropSearchIndexResponse DropSearchIndexResponse
     */
    public function dropSearchIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexType)) {
            $query['IndexType'] = $request->indexType;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DropSearchIndex',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DropSearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除搜索索引
     *  *
     * @param DropSearchIndexRequest $request DropSearchIndexRequest
     *
     * @return DropSearchIndexResponse DropSearchIndexResponse
     */
    public function dropSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSearchIndexWithOptions($request, $runtime);
    }

    /**
     * @summary 删除库
     *  *
     * @param DropSearchLibRequest $request DropSearchLibRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DropSearchLibResponse DropSearchLibResponse
     */
    public function dropSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DropSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DropSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除库
     *  *
     * @param DropSearchLibRequest $request DropSearchLibRequest
     *
     * @return DropSearchLibResponse DropSearchLibResponse
     */
    public function dropSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary 生成KMS密钥DataKey
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateKMSDataKeyResponse GenerateKMSDataKeyResponse
     */
    public function generateKMSDataKeyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GenerateKMSDataKey',
            'version'     => '2020-11-09',
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
     * @summary 生成KMS密钥DataKey
     *  *
     * @return GenerateKMSDataKeyResponse GenerateKMSDataKeyResponse
     */
    public function generateKMSDataKey()
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateKMSDataKeyWithOptions($runtime);
    }

    /**
     * @summary 查询单个数字人
     *  *
     * @param GetAvatarRequest $request GetAvatarRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAvatarResponse GetAvatarResponse
     */
    public function getAvatarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarId)) {
            $query['AvatarId'] = $request->avatarId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAvatar',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个数字人
     *  *
     * @param GetAvatarRequest $request GetAvatarRequest
     *
     * @return GetAvatarResponse GetAvatarResponse
     */
    public function getAvatar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvatarWithOptions($request, $runtime);
    }

    /**
     * @summary 查询单个数字人训练任务
     *  *
     * @param GetAvatarTrainingJobRequest $request GetAvatarTrainingJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAvatarTrainingJobResponse GetAvatarTrainingJobResponse
     */
    public function getAvatarTrainingJobWithOptions($request, $runtime)
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
            'action'      => 'GetAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个数字人训练任务
     *  *
     * @param GetAvatarTrainingJobRequest $request GetAvatarTrainingJobRequest
     *
     * @return GetAvatarTrainingJobResponse GetAvatarTrainingJobResponse
     */
    public function getAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 一键成片-批量获取剪辑任务
     *  *
     * @param GetBatchMediaProducingJobRequest $request GetBatchMediaProducingJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBatchMediaProducingJobResponse GetBatchMediaProducingJobResponse
     */
    public function getBatchMediaProducingJobWithOptions($request, $runtime)
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
            'action'      => 'GetBatchMediaProducingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBatchMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 一键成片-批量获取剪辑任务
     *  *
     * @param GetBatchMediaProducingJobRequest $request GetBatchMediaProducingJobRequest
     *
     * @return GetBatchMediaProducingJobResponse GetBatchMediaProducingJobResponse
     */
    public function getBatchMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询媒资分类
     *  *
     * @param GetCategoriesRequest $request GetCategoriesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCategoriesResponse GetCategoriesResponse
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
            'version'     => '2020-11-09',
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
     * @summary 查询媒资分类
     *  *
     * @param GetCategoriesRequest $request GetCategoriesRequest
     *
     * @return GetCategoriesResponse GetCategoriesResponse
     */
    public function getCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCategoriesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取内容分析搜索配置
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetContentAnalyzeConfigResponse GetContentAnalyzeConfigResponse
     */
    public function getContentAnalyzeConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetContentAnalyzeConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetContentAnalyzeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取内容分析搜索配置
     *  *
     * @return GetContentAnalyzeConfigResponse GetContentAnalyzeConfigResponse
     */
    public function getContentAnalyzeConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContentAnalyzeConfigWithOptions($runtime);
    }

    /**
     * @summary 获取单个媒体处理自定义模板
     *  *
     * @param GetCustomTemplateRequest $request GetCustomTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomTemplateResponse GetCustomTemplateResponse
     */
    public function getCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subtype)) {
            $query['Subtype'] = $request->subtype;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomTemplate',
            'version'     => '2020-11-09',
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
     * @summary 获取单个媒体处理自定义模板
     *  *
     * @param GetCustomTemplateRequest $request GetCustomTemplateRequest
     *
     * @return GetCustomTemplateResponse GetCustomTemplateResponse
     */
    public function getCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户的专属人声
     *  *
     * @param GetCustomizedVoiceRequest $request GetCustomizedVoiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomizedVoiceResponse GetCustomizedVoiceResponse
     */
    public function getCustomizedVoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomizedVoice',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomizedVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户的专属人声
     *  *
     * @param GetCustomizedVoiceRequest $request GetCustomizedVoiceRequest
     *
     * @return GetCustomizedVoiceResponse GetCustomizedVoiceResponse
     */
    public function getCustomizedVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizedVoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询单个人声克隆训练任务
     *  *
     * @param GetCustomizedVoiceJobRequest $request GetCustomizedVoiceJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomizedVoiceJobResponse GetCustomizedVoiceJobResponse
     */
    public function getCustomizedVoiceJobWithOptions($request, $runtime)
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
            'action'      => 'GetCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个人声克隆训练任务
     *  *
     * @param GetCustomizedVoiceJobRequest $request GetCustomizedVoiceJobRequest
     *
     * @return GetCustomizedVoiceJobResponse GetCustomizedVoiceJobResponse
     */
    public function getCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户默认存储地址
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDefaultStorageLocationResponse GetDefaultStorageLocationResponse
     */
    public function getDefaultStorageLocationWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetDefaultStorageLocation',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDefaultStorageLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户默认存储地址
     *  *
     * @return GetDefaultStorageLocationResponse GetDefaultStorageLocationResponse
     */
    public function getDefaultStorageLocation()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultStorageLocationWithOptions($runtime);
    }

    /**
     * @summary 通过本接口来获取需要给用户朗读的文本及示例音频
     *  *
     * @param GetDemonstrationForCustomizedVoiceJobRequest $request GetDemonstrationForCustomizedVoiceJobRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDemonstrationForCustomizedVoiceJobResponse GetDemonstrationForCustomizedVoiceJobResponse
     */
    public function getDemonstrationForCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scenario)) {
            $query['Scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDemonstrationForCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDemonstrationForCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过本接口来获取需要给用户朗读的文本及示例音频
     *  *
     * @param GetDemonstrationForCustomizedVoiceJobRequest $request GetDemonstrationForCustomizedVoiceJobRequest
     *
     * @return GetDemonstrationForCustomizedVoiceJobResponse GetDemonstrationForCustomizedVoiceJobResponse
     */
    public function getDemonstrationForCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDemonstrationForCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询动图任务详情接口
     *  *
     * @param GetDynamicImageJobRequest $request GetDynamicImageJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDynamicImageJobResponse GetDynamicImageJobResponse
     */
    public function getDynamicImageJobWithOptions($request, $runtime)
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
            'action'      => 'GetDynamicImageJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询动图任务详情接口
     *  *
     * @param GetDynamicImageJobRequest $request GetDynamicImageJobRequest
     *
     * @return GetDynamicImageJobResponse GetDynamicImageJobResponse
     */
    public function getDynamicImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDynamicImageJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个云剪辑工程
     *  *
     * @param GetEditingProjectRequest $request GetEditingProjectRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEditingProjectResponse GetEditingProjectResponse
     */
    public function getEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->requestSource)) {
            $query['RequestSource'] = $request->requestSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEditingProject',
            'version'     => '2020-11-09',
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
     * @summary 获取单个云剪辑工程
     *  *
     * @param GetEditingProjectRequest $request GetEditingProjectRequest
     *
     * @return GetEditingProjectResponse GetEditingProjectResponse
     */
    public function getEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 获取剪辑工程关联素材
     *  *
     * @param GetEditingProjectMaterialsRequest $request GetEditingProjectMaterialsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEditingProjectMaterialsResponse GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEditingProjectMaterials',
            'version'     => '2020-11-09',
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
     * @summary 获取剪辑工程关联素材
     *  *
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
     * @summary 获取事件回调地址
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEventCallbackResponse GetEventCallbackResponse
     */
    public function getEventCallbackWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetEventCallback',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取事件回调地址
     *  *
     * @return GetEventCallbackResponse GetEventCallbackResponse
     */
    public function getEventCallback()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventCallbackWithOptions($runtime);
    }

    /**
     * @summary 获取直播剪辑m3u8索引文件
     *  *
     * @param GetLiveEditingIndexFileRequest $request GetLiveEditingIndexFileRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveEditingIndexFileResponse GetLiveEditingIndexFileResponse
     */
    public function getLiveEditingIndexFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveEditingIndexFile',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveEditingIndexFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取直播剪辑m3u8索引文件
     *  *
     * @param GetLiveEditingIndexFileRequest $request GetLiveEditingIndexFileRequest
     *
     * @return GetLiveEditingIndexFileResponse GetLiveEditingIndexFileResponse
     */
    public function getLiveEditingIndexFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveEditingIndexFileWithOptions($request, $runtime);
    }

    /**
     * @summary 获取直播剪辑任务
     *  *
     * @param GetLiveEditingJobRequest $request GetLiveEditingJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveEditingJobResponse GetLiveEditingJobResponse
     */
    public function getLiveEditingJobWithOptions($request, $runtime)
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
            'action'      => 'GetLiveEditingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveEditingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取直播剪辑任务
     *  *
     * @param GetLiveEditingJobRequest $request GetLiveEditingJobRequest
     *
     * @return GetLiveEditingJobResponse GetLiveEditingJobResponse
     */
    public function getLiveEditingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveEditingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询录制任务明细
     *  *
     * @param GetLiveRecordJobRequest $request GetLiveRecordJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveRecordJobResponse GetLiveRecordJobResponse
     */
    public function getLiveRecordJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveRecordJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveRecordJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询录制任务明细
     *  *
     * @param GetLiveRecordJobRequest $request GetLiveRecordJobRequest
     *
     * @return GetLiveRecordJobResponse GetLiveRecordJobResponse
     */
    public function getLiveRecordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRecordJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询直播录制模板详情
     *  *
     * @param GetLiveRecordTemplateRequest $request GetLiveRecordTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveRecordTemplateResponse GetLiveRecordTemplateResponse
     */
    public function getLiveRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveRecordTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播录制模板详情
     *  *
     * @param GetLiveRecordTemplateRequest $request GetLiveRecordTemplateRequest
     *
     * @return GetLiveRecordTemplateResponse GetLiveRecordTemplateResponse
     */
    public function getLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 查询直播截图任务
     *  *
     * @param GetLiveSnapshotJobRequest $request GetLiveSnapshotJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveSnapshotJobResponse GetLiveSnapshotJobResponse
     */
    public function getLiveSnapshotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveSnapshotJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播截图任务
     *  *
     * @param GetLiveSnapshotJobRequest $request GetLiveSnapshotJobRequest
     *
     * @return GetLiveSnapshotJobResponse GetLiveSnapshotJobResponse
     */
    public function getLiveSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询直播截图模板
     *  *
     * @param GetLiveSnapshotTemplateRequest $request GetLiveSnapshotTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveSnapshotTemplateResponse GetLiveSnapshotTemplateResponse
     */
    public function getLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveSnapshotTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播截图模板
     *  *
     * @param GetLiveSnapshotTemplateRequest $request GetLiveSnapshotTemplateRequest
     *
     * @return GetLiveSnapshotTemplateResponse GetLiveSnapshotTemplateResponse
     */
    public function getLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 查询转码任务详情
     *  *
     * @param GetLiveTranscodeJobRequest $request GetLiveTranscodeJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveTranscodeJobResponse GetLiveTranscodeJobResponse
     */
    public function getLiveTranscodeJobWithOptions($request, $runtime)
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
            'action'      => 'GetLiveTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询转码任务详情
     *  *
     * @param GetLiveTranscodeJobRequest $request GetLiveTranscodeJobRequest
     *
     * @return GetLiveTranscodeJobResponse GetLiveTranscodeJobResponse
     */
    public function getLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询转码模版详情
     *  *
     * @param GetLiveTranscodeTemplateRequest $request GetLiveTranscodeTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveTranscodeTemplateResponse GetLiveTranscodeTemplateResponse
     */
    public function getLiveTranscodeTemplateWithOptions($request, $runtime)
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
            'action'      => 'GetLiveTranscodeTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询转码模版详情
     *  *
     * @param GetLiveTranscodeTemplateRequest $request GetLiveTranscodeTemplateRequest
     *
     * @return GetLiveTranscodeTemplateResponse GetLiveTranscodeTemplateResponse
     */
    public function getLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 获取媒资内容信息
     *  *
     * @param GetMediaInfoRequest $request GetMediaInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaInfoResponse GetMediaInfoResponse
     */
    public function getMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->outputType)) {
            $query['OutputType'] = $request->outputType;
        }
        if (!Utils::isUnset($request->returnDetailedInfo)) {
            $query['ReturnDetailedInfo'] = $request->returnDetailedInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取媒资内容信息
     *  *
     * @param GetMediaInfoRequest $request GetMediaInfoRequest
     *
     * @return GetMediaInfoResponse GetMediaInfoResponse
     */
    public function getMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaInfoJobRequest $request GetMediaInfoJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaInfoJobResponse GetMediaInfoJobResponse
     */
    public function getMediaInfoJobWithOptions($request, $runtime)
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
            'action'      => 'GetMediaInfoJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaInfoJobRequest $request GetMediaInfoJobRequest
     *
     * @return GetMediaInfoJobResponse GetMediaInfoJobResponse
     */
    public function getMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取媒资标注信息
     *  *
     * @param GetMediaMarksRequest $request GetMediaMarksRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaMarksResponse GetMediaMarksResponse
     */
    public function getMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarkIds)) {
            $query['MediaMarkIds'] = $request->mediaMarkIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取媒资标注信息
     *  *
     * @param GetMediaMarksRequest $request GetMediaMarksRequest
     *
     * @return GetMediaMarksResponse GetMediaMarksResponse
     */
    public function getMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary GetMediaProducingJob
     *  *
     * @param GetMediaProducingJobRequest $request GetMediaProducingJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaProducingJobResponse GetMediaProducingJobResponse
     */
    public function getMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaProducingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetMediaProducingJob
     *  *
     * @param GetMediaProducingJobRequest $request GetMediaProducingJobRequest
     *
     * @return GetMediaProducingJobResponse GetMediaProducingJobResponse
     */
    public function getMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个打包任务信息
     *  *
     * @param GetPackageJobRequest $request GetPackageJobRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPackageJobResponse GetPackageJobResponse
     */
    public function getPackageJobWithOptions($request, $runtime)
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
            'action'      => 'GetPackageJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPackageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个打包任务信息
     *  *
     * @param GetPackageJobRequest $request GetPackageJobRequest
     *
     * @return GetPackageJobResponse GetPackageJobResponse
     */
    public function getPackageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPackageJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个管道配置
     *  *
     * @param GetPipelineRequest $request GetPipelineRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPipelineResponse GetPipelineResponse
     */
    public function getPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPipeline',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个管道配置
     *  *
     * @param GetPipelineRequest $request GetPipelineRequest
     *
     * @return GetPipelineResponse GetPipelineResponse
     */
    public function getPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineWithOptions($request, $runtime);
    }

    /**
     * @summary 获取播放信息
     *  *
     * @param GetPlayInfoRequest $request GetPlayInfoRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPlayInfoResponse GetPlayInfoResponse
     */
    public function getPlayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPlayInfo',
            'version'     => '2020-11-09',
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
     * @summary 获取播放信息
     *  *
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
     * @summary 获取公共媒资内容信息
     *  *
     * @param GetPublicMediaInfoRequest $request GetPublicMediaInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPublicMediaInfoResponse GetPublicMediaInfoResponse
     */
    public function getPublicMediaInfoWithOptions($request, $runtime)
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
            'action'      => 'GetPublicMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPublicMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共媒资内容信息
     *  *
     * @param GetPublicMediaInfoRequest $request GetPublicMediaInfoRequest
     *
     * @return GetPublicMediaInfoResponse GetPublicMediaInfoResponse
     */
    public function getPublicMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary GetSmartHandleJob
     *  *
     * @param GetSmartHandleJobRequest $request GetSmartHandleJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSmartHandleJobResponse GetSmartHandleJobResponse
     */
    public function getSmartHandleJobWithOptions($request, $runtime)
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
            'action'      => 'GetSmartHandleJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSmartHandleJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetSmartHandleJob
     *  *
     * @param GetSmartHandleJobRequest $request GetSmartHandleJobRequest
     *
     * @return GetSmartHandleJobResponse GetSmartHandleJobResponse
     */
    public function getSmartHandleJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmartHandleJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询单个截图任务
     *  *
     * @param GetSnapshotJobRequest $request GetSnapshotJobRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSnapshotJobResponse GetSnapshotJobResponse
     */
    public function getSnapshotJobWithOptions($request, $runtime)
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
            'action'      => 'GetSnapshotJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个截图任务
     *  *
     * @param GetSnapshotJobRequest $request GetSnapshotJobRequest
     *
     * @return GetSnapshotJobResponse GetSnapshotJobResponse
     */
    public function getSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取截图文件URL
     *  *
     * @param GetSnapshotUrlsRequest $request GetSnapshotUrlsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSnapshotUrlsResponse GetSnapshotUrlsResponse
     */
    public function getSnapshotUrlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSnapshotUrls',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSnapshotUrlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取截图文件URL
     *  *
     * @param GetSnapshotUrlsRequest $request GetSnapshotUrlsRequest
     *
     * @return GetSnapshotUrlsResponse GetSnapshotUrlsResponse
     */
    public function getSnapshotUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSnapshotUrlsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取存储地址列表
     *  *
     * @param GetStorageListRequest $request GetStorageListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStorageListResponse GetStorageListResponse
     */
    public function getStorageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStorageList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStorageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取存储地址列表
     *  *
     * @param GetStorageListRequest $request GetStorageListRequest
     *
     * @return GetStorageListResponse GetStorageListResponse
     */
    public function getStorageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个媒体处理系统模板
     *  *
     * @param GetSystemTemplateRequest $request GetSystemTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSystemTemplateResponse GetSystemTemplateResponse
     */
    public function getSystemTemplateWithOptions($request, $runtime)
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
            'action'      => 'GetSystemTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSystemTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个媒体处理系统模板
     *  *
     * @param GetSystemTemplateRequest $request GetSystemTemplateRequest
     *
     * @return GetSystemTemplateResponse GetSystemTemplateResponse
     */
    public function getSystemTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSystemTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary GetTemplate
     *  *
     * @param GetTemplateRequest $request GetTemplateRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->relatedMediaidFlag)) {
            $query['RelatedMediaidFlag'] = $request->relatedMediaidFlag;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetTemplate
     *  *
     * @param GetTemplateRequest $request GetTemplateRequest
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 获取模板关联素材信息
     *  *
     * @param GetTemplateMaterialsRequest $request GetTemplateMaterialsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateMaterialsResponse GetTemplateMaterialsResponse
     */
    public function getTemplateMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileList)) {
            $query['FileList'] = $request->fileList;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateMaterials',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取模板关联素材信息
     *  *
     * @param GetTemplateMaterialsRequest $request GetTemplateMaterialsRequest
     *
     * @return GetTemplateMaterialsResponse GetTemplateMaterialsResponse
     */
    public function getTemplateMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateMaterialsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取模板参数信息
     *  *
     * @param GetTemplateParamsRequest $request GetTemplateParamsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateParamsResponse GetTemplateParamsResponse
     */
    public function getTemplateParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateParams',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取模板参数信息
     *  *
     * @param GetTemplateParamsRequest $request GetTemplateParamsRequest
     *
     * @return GetTemplateParamsResponse GetTemplateParamsResponse
     */
    public function getTemplateParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateParamsWithOptions($request, $runtime);
    }

    /**
     * @param GetTranscodeJobRequest $request GetTranscodeJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTranscodeJobResponse GetTranscodeJobResponse
     */
    public function getTranscodeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->parentJobId)) {
            $query['ParentJobId'] = $request->parentJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTranscodeJobRequest $request GetTranscodeJobRequest
     *
     * @return GetTranscodeJobResponse GetTranscodeJobResponse
     */
    public function getTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取URL上传信息
     *  *
     * @param GetUrlUploadInfosRequest $request GetUrlUploadInfosRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUrlUploadInfosResponse GetUrlUploadInfosResponse
     */
    public function getUrlUploadInfosWithOptions($request, $runtime)
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
            'action'      => 'GetUrlUploadInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUrlUploadInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取URL上传信息
     *  *
     * @param GetUrlUploadInfosRequest $request GetUrlUploadInfosRequest
     *
     * @return GetUrlUploadInfosResponse GetUrlUploadInfosResponse
     */
    public function getUrlUploadInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUrlUploadInfosWithOptions($request, $runtime);
    }

    /**
     * @summary 获取媒资新增列表
     *  *
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoList',
            'version'     => '2020-11-09',
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
     * @summary 获取媒资新增列表
     *  *
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
     * @summary 获取工作流任务
     *  *
     * @param GetWorkflowTaskRequest $request GetWorkflowTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkflowTaskResponse GetWorkflowTaskResponse
     */
    public function getWorkflowTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkflowTask',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkflowTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作流任务
     *  *
     * @param GetWorkflowTaskRequest $request GetWorkflowTaskRequest
     *
     * @return GetWorkflowTaskResponse GetWorkflowTaskResponse
     */
    public function getWorkflowTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 插入媒资到搜索
     *  *
     * @param InsertMediaToSearchLibRequest $request InsertMediaToSearchLibRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertMediaToSearchLibResponse InsertMediaToSearchLibResponse
     */
    public function insertMediaToSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->msgBody)) {
            $query['MsgBody'] = $request->msgBody;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertMediaToSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertMediaToSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 插入媒资到搜索
     *  *
     * @param InsertMediaToSearchLibRequest $request InsertMediaToSearchLibRequest
     *
     * @return InsertMediaToSearchLibResponse InsertMediaToSearchLibResponse
     */
    public function insertMediaToSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertMediaToSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary 列出公共素材库所有标签
     *  *
     * @param ListAllPublicMediaTagsRequest $request ListAllPublicMediaTagsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAllPublicMediaTagsResponse ListAllPublicMediaTagsResponse
     */
    public function listAllPublicMediaTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAllPublicMediaTags',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAllPublicMediaTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出公共素材库所有标签
     *  *
     * @param ListAllPublicMediaTagsRequest $request ListAllPublicMediaTagsRequest
     *
     * @return ListAllPublicMediaTagsResponse ListAllPublicMediaTagsResponse
     */
    public function listAllPublicMediaTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllPublicMediaTagsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询数字人训练任务列表，列出当前用户的所有数字人训练任务
     *  *
     * @param ListAvatarTrainingJobsRequest $request ListAvatarTrainingJobsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvatarTrainingJobsResponse ListAvatarTrainingJobsResponse
     */
    public function listAvatarTrainingJobsWithOptions($request, $runtime)
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
            'action'      => 'ListAvatarTrainingJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvatarTrainingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询数字人训练任务列表，列出当前用户的所有数字人训练任务
     *  *
     * @param ListAvatarTrainingJobsRequest $request ListAvatarTrainingJobsRequest
     *
     * @return ListAvatarTrainingJobsResponse ListAvatarTrainingJobsResponse
     */
    public function listAvatarTrainingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvatarTrainingJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询数字人列表，列出当前用户的所有数字人
     *  *
     * @param ListAvatarsRequest $request ListAvatarsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvatarsResponse ListAvatarsResponse
     */
    public function listAvatarsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarType)) {
            $query['AvatarType'] = $request->avatarType;
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
            'action'      => 'ListAvatars',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvatarsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询数字人列表，列出当前用户的所有数字人
     *  *
     * @param ListAvatarsRequest $request ListAvatarsRequest
     *
     * @return ListAvatarsResponse ListAvatarsResponse
     */
    public function listAvatars($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvatarsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取一键成片任务列表
     *  *
     * @param ListBatchMediaProducingJobsRequest $request ListBatchMediaProducingJobsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBatchMediaProducingJobsResponse ListBatchMediaProducingJobsResponse
     */
    public function listBatchMediaProducingJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBatchMediaProducingJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBatchMediaProducingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一键成片任务列表
     *  *
     * @param ListBatchMediaProducingJobsRequest $request ListBatchMediaProducingJobsRequest
     *
     * @return ListBatchMediaProducingJobsResponse ListBatchMediaProducingJobsResponse
     */
    public function listBatchMediaProducingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchMediaProducingJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取媒体处理自定义模板列表
     *  *
     * @param ListCustomTemplatesRequest $request ListCustomTemplatesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomTemplatesResponse ListCustomTemplatesResponse
     */
    public function listCustomTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subtype)) {
            $query['Subtype'] = $request->subtype;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取媒体处理自定义模板列表
     *  *
     * @param ListCustomTemplatesRequest $request ListCustomTemplatesRequest
     *
     * @return ListCustomTemplatesResponse ListCustomTemplatesResponse
     */
    public function listCustomTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询人声克隆训练任务列表，列出当前用户的所有人声克隆训练任务
     *  *
     * @param ListCustomizedVoiceJobsRequest $request ListCustomizedVoiceJobsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomizedVoiceJobsResponse ListCustomizedVoiceJobsResponse
     */
    public function listCustomizedVoiceJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomizedVoiceJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomizedVoiceJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询人声克隆训练任务列表，列出当前用户的所有人声克隆训练任务
     *  *
     * @param ListCustomizedVoiceJobsRequest $request ListCustomizedVoiceJobsRequest
     *
     * @return ListCustomizedVoiceJobsResponse ListCustomizedVoiceJobsResponse
     */
    public function listCustomizedVoiceJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizedVoiceJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户的专属人声列表
     *  *
     * @param ListCustomizedVoicesRequest $request ListCustomizedVoicesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomizedVoicesResponse ListCustomizedVoicesResponse
     */
    public function listCustomizedVoicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomizedVoices',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomizedVoicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户的专属人声列表
     *  *
     * @param ListCustomizedVoicesRequest $request ListCustomizedVoicesRequest
     *
     * @return ListCustomizedVoicesResponse ListCustomizedVoicesResponse
     */
    public function listCustomizedVoices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizedVoicesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询DNA库
     *  *
     * @param ListDNADBRequest $request ListDNADBRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDNADBResponse ListDNADBResponse
     */
    public function listDNADBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBIds)) {
            $query['DBIds'] = $request->DBIds;
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
            'action'      => 'ListDNADB',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDNADBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询DNA库
     *  *
     * @param ListDNADBRequest $request ListDNADBRequest
     *
     * @return ListDNADBResponse ListDNADBResponse
     */
    public function listDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDNADBWithOptions($request, $runtime);
    }

    /**
     * @summary 查询DNA文件
     *  *
     * @param ListDNAFilesRequest $request ListDNAFilesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDNAFilesResponse ListDNAFilesResponse
     */
    public function listDNAFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBId)) {
            $query['DBId'] = $request->DBId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDNAFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDNAFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询DNA文件
     *  *
     * @param ListDNAFilesRequest $request ListDNAFilesRequest
     *
     * @return ListDNAFilesResponse ListDNAFilesResponse
     */
    public function listDNAFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDNAFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询截图任务列表接口
     *  *
     * @param ListDynamicImageJobsRequest $request ListDynamicImageJobsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDynamicImageJobsResponse ListDynamicImageJobsResponse
     */
    public function listDynamicImageJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startOfCreateTime)) {
            $query['StartOfCreateTime'] = $request->startOfCreateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDynamicImageJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDynamicImageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询截图任务列表接口
     *  *
     * @param ListDynamicImageJobsRequest $request ListDynamicImageJobsRequest
     *
     * @return ListDynamicImageJobsResponse ListDynamicImageJobsResponse
     */
    public function listDynamicImageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicImageJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取云剪辑工程列表
     *  *
     * @param ListEditingProjectsRequest $request ListEditingProjectsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEditingProjectsResponse ListEditingProjectsResponse
     */
    public function listEditingProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createSource)) {
            $query['CreateSource'] = $request->createSource;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->projectType)) {
            $query['ProjectType'] = $request->projectType;
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
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEditingProjects',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEditingProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取云剪辑工程列表
     *  *
     * @param ListEditingProjectsRequest $request ListEditingProjectsRequest
     *
     * @return ListEditingProjectsResponse ListEditingProjectsResponse
     */
    public function listEditingProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEditingProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询录制文件
     *  *
     * @param ListLiveRecordFilesRequest $request ListLiveRecordFilesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveRecordFilesResponse ListLiveRecordFilesResponse
     */
    public function listLiveRecordFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRecordFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRecordFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询录制文件
     *  *
     * @param ListLiveRecordFilesRequest $request ListLiveRecordFilesRequest
     *
     * @return ListLiveRecordFilesResponse ListLiveRecordFilesResponse
     */
    public function listLiveRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询录制任务
     *  *
     * @param ListLiveRecordJobsRequest $request ListLiveRecordJobsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveRecordJobsResponse ListLiveRecordJobsResponse
     */
    public function listLiveRecordJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRecordJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRecordJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询录制任务
     *  *
     * @param ListLiveRecordJobsRequest $request ListLiveRecordJobsRequest
     *
     * @return ListLiveRecordJobsResponse ListLiveRecordJobsResponse
     */
    public function listLiveRecordJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询直播录制模板
     *  *
     * @param ListLiveRecordTemplatesRequest $request ListLiveRecordTemplatesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveRecordTemplatesResponse ListLiveRecordTemplatesResponse
     */
    public function listLiveRecordTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRecordTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRecordTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播录制模板
     *  *
     * @param ListLiveRecordTemplatesRequest $request ListLiveRecordTemplatesRequest
     *
     * @return ListLiveRecordTemplatesResponse ListLiveRecordTemplatesResponse
     */
    public function listLiveRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询直播截图文件列表
     *  *
     * @param ListLiveSnapshotFilesRequest $request ListLiveSnapshotFilesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveSnapshotFilesResponse ListLiveSnapshotFilesResponse
     */
    public function listLiveSnapshotFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveSnapshotFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveSnapshotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播截图文件列表
     *  *
     * @param ListLiveSnapshotFilesRequest $request ListLiveSnapshotFilesRequest
     *
     * @return ListLiveSnapshotFilesResponse ListLiveSnapshotFilesResponse
     */
    public function listLiveSnapshotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询直播截图任务列表
     *  *
     * @param ListLiveSnapshotJobsRequest $request ListLiveSnapshotJobsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveSnapshotJobsResponse ListLiveSnapshotJobsResponse
     */
    public function listLiveSnapshotJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveSnapshotJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveSnapshotJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播截图任务列表
     *  *
     * @param ListLiveSnapshotJobsRequest $request ListLiveSnapshotJobsRequest
     *
     * @return ListLiveSnapshotJobsResponse ListLiveSnapshotJobsResponse
     */
    public function listLiveSnapshotJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询直播截图模板列表
     *  *
     * @param ListLiveSnapshotTemplatesRequest $request ListLiveSnapshotTemplatesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveSnapshotTemplatesResponse ListLiveSnapshotTemplatesResponse
     */
    public function listLiveSnapshotTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveSnapshotTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveSnapshotTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播截图模板列表
     *  *
     * @param ListLiveSnapshotTemplatesRequest $request ListLiveSnapshotTemplatesRequest
     *
     * @return ListLiveSnapshotTemplatesResponse ListLiveSnapshotTemplatesResponse
     */
    public function listLiveSnapshotTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询转码任务列表
     *  *
     * @param ListLiveTranscodeJobsRequest $request ListLiveTranscodeJobsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveTranscodeJobsResponse ListLiveTranscodeJobsResponse
     */
    public function listLiveTranscodeJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
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
        if (!Utils::isUnset($request->startMode)) {
            $query['StartMode'] = $request->startMode;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveTranscodeJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询转码任务列表
     *  *
     * @param ListLiveTranscodeJobsRequest $request ListLiveTranscodeJobsRequest
     *
     * @return ListLiveTranscodeJobsResponse ListLiveTranscodeJobsResponse
     */
    public function listLiveTranscodeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询转码模版列表
     *  *
     * @param ListLiveTranscodeTemplatesRequest $request ListLiveTranscodeTemplatesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveTranscodeTemplatesResponse ListLiveTranscodeTemplatesResponse
     */
    public function listLiveTranscodeTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
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
        if (!Utils::isUnset($request->videoCodec)) {
            $query['VideoCodec'] = $request->videoCodec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveTranscodeTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveTranscodeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询转码模版列表
     *  *
     * @param ListLiveTranscodeTemplatesRequest $request ListLiveTranscodeTemplatesRequest
     *
     * @return ListLiveTranscodeTemplatesResponse ListLiveTranscodeTemplatesResponse
     */
    public function listLiveTranscodeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveTranscodeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary 列出符合条件的媒资基础信息
     *  *
     * @param ListMediaBasicInfosRequest $request ListMediaBasicInfosRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaBasicInfosResponse ListMediaBasicInfosResponse
     */
    public function listMediaBasicInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->includeFileBasicInfo)) {
            $query['IncludeFileBasicInfo'] = $request->includeFileBasicInfo;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
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
            'action'      => 'ListMediaBasicInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出符合条件的媒资基础信息
     *  *
     * @param ListMediaBasicInfosRequest $request ListMediaBasicInfosRequest
     *
     * @return ListMediaBasicInfosResponse ListMediaBasicInfosResponse
     */
    public function listMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaInfoJobsRequest $request ListMediaInfoJobsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaInfoJobsResponse ListMediaInfoJobsResponse
     */
    public function listMediaInfoJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startOfCreateTime)) {
            $query['StartOfCreateTime'] = $request->startOfCreateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMediaInfoJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaInfoJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMediaInfoJobsRequest $request ListMediaInfoJobsRequest
     *
     * @return ListMediaInfoJobsResponse ListMediaInfoJobsResponse
     */
    public function listMediaInfoJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaInfoJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取媒资的标注信息
     *  *
     * @param ListMediaMarksRequest $request ListMediaMarksRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaMarksResponse ListMediaMarksResponse
     */
    public function listMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarkIds)) {
            $query['MediaMarkIds'] = $request->mediaMarkIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取媒资的标注信息
     *  *
     * @param ListMediaMarksRequest $request ListMediaMarksRequest
     *
     * @return ListMediaMarksResponse ListMediaMarksResponse
     */
    public function listMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary 列出合成任务列表
     *  *
     * @param ListMediaProducingJobsRequest $request ListMediaProducingJobsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaProducingJobsResponse ListMediaProducingJobsResponse
     */
    public function listMediaProducingJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->masterJobId)) {
            $query['MasterJobId'] = $request->masterJobId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMediaProducingJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaProducingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出合成任务列表
     *  *
     * @param ListMediaProducingJobsRequest $request ListMediaProducingJobsRequest
     *
     * @return ListMediaProducingJobsResponse ListMediaProducingJobsResponse
     */
    public function listMediaProducingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaProducingJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取打包任务列表
     *  *
     * @param ListPackageJobsRequest $request ListPackageJobsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPackageJobsResponse ListPackageJobsResponse
     */
    public function listPackageJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startOfCreateTime)) {
            $query['StartOfCreateTime'] = $request->startOfCreateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPackageJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPackageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取打包任务列表
     *  *
     * @param ListPackageJobsRequest $request ListPackageJobsRequest
     *
     * @return ListPackageJobsResponse ListPackageJobsResponse
     */
    public function listPackageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPackageJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取管道配置列表
     *  *
     * @param ListPipelinesRequest $request ListPipelinesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPipelinesResponse ListPipelinesResponse
     */
    public function listPipelinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelines',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取管道配置列表
     *  *
     * @param ListPipelinesRequest $request ListPipelinesRequest
     *
     * @return ListPipelinesResponse ListPipelinesResponse
     */
    public function listPipelines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPipelinesWithOptions($request, $runtime);
    }

    /**
     * @summary 列出公共素材库素材的基础信息
     *  *
     * @param ListPublicMediaBasicInfosRequest $request ListPublicMediaBasicInfosRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicMediaBasicInfosResponse ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->includeFileBasicInfo)) {
            $query['IncludeFileBasicInfo'] = $request->includeFileBasicInfo;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->mediaTagId)) {
            $query['MediaTagId'] = $request->mediaTagId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
            'action'      => 'ListPublicMediaBasicInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublicMediaBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出公共素材库素材的基础信息
     *  *
     * @param ListPublicMediaBasicInfosRequest $request ListPublicMediaBasicInfosRequest
     *
     * @return ListPublicMediaBasicInfosResponse ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @summary ListSmartJobs
     *  *
     * @param ListSmartJobsRequest $request ListSmartJobsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSmartJobsResponse ListSmartJobsResponse
     */
    public function listSmartJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSmartJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSmartJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListSmartJobs
     *  *
     * @param ListSmartJobsRequest $request ListSmartJobsRequest
     *
     * @return ListSmartJobsResponse ListSmartJobsResponse
     */
    public function listSmartJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 列出虚拟人官方模特配置
     *  *
     * @param ListSmartSysAvatarModelsRequest $request ListSmartSysAvatarModelsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSmartSysAvatarModelsResponse ListSmartSysAvatarModelsResponse
     */
    public function listSmartSysAvatarModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sdkVersion)) {
            $query['SdkVersion'] = $request->sdkVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSmartSysAvatarModels',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSmartSysAvatarModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出虚拟人官方模特配置
     *  *
     * @param ListSmartSysAvatarModelsRequest $request ListSmartSysAvatarModelsRequest
     *
     * @return ListSmartSysAvatarModelsResponse ListSmartSysAvatarModelsResponse
     */
    public function listSmartSysAvatarModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartSysAvatarModelsWithOptions($request, $runtime);
    }

    /**
     * @summary 列出智能语音发音人信息
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSmartVoiceGroupsResponse ListSmartVoiceGroupsResponse
     */
    public function listSmartVoiceGroupsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListSmartVoiceGroups',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSmartVoiceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出智能语音发音人信息
     *  *
     * @return ListSmartVoiceGroupsResponse ListSmartVoiceGroupsResponse
     */
    public function listSmartVoiceGroups()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartVoiceGroupsWithOptions($runtime);
    }

    /**
     * @summary 查询截图任务列表接口
     *  *
     * @param ListSnapshotJobsRequest $request ListSnapshotJobsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSnapshotJobsResponse ListSnapshotJobsResponse
     */
    public function listSnapshotJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startOfCreateTime)) {
            $query['StartOfCreateTime'] = $request->startOfCreateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSnapshotJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询截图任务列表接口
     *  *
     * @param ListSnapshotJobsRequest $request ListSnapshotJobsRequest
     *
     * @return ListSnapshotJobsResponse ListSnapshotJobsResponse
     */
    public function listSnapshotJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取媒体处理系统模板列表
     *  *
     * @param ListSystemTemplatesRequest $request ListSystemTemplatesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSystemTemplatesResponse ListSystemTemplatesResponse
     */
    public function listSystemTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subtype)) {
            $query['Subtype'] = $request->subtype;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSystemTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSystemTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取媒体处理系统模板列表
     *  *
     * @param ListSystemTemplatesRequest $request ListSystemTemplatesRequest
     *
     * @return ListSystemTemplatesResponse ListSystemTemplatesResponse
     */
    public function listSystemTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary ListTemplates
     *  *
     * @param ListTemplatesRequest $request ListTemplatesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createSource)) {
            $query['CreateSource'] = $request->createSource;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListTemplates
     *  *
     * @param ListTemplatesRequest $request ListTemplatesRequest
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListTranscodeJobsRequest $request ListTranscodeJobsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTranscodeJobsResponse ListTranscodeJobsResponse
     */
    public function listTranscodeJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentJobId)) {
            $query['ParentJobId'] = $request->parentJobId;
        }
        if (!Utils::isUnset($request->startOfCreateTime)) {
            $query['StartOfCreateTime'] = $request->startOfCreateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTranscodeJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTranscodeJobsRequest $request ListTranscodeJobsRequest
     *
     * @return ListTranscodeJobsResponse ListTranscodeJobsResponse
     */
    public function listTranscodeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询DNA作业
     *  *
     * @param QueryDNAJobListRequest $request QueryDNAJobListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDNAJobListResponse QueryDNAJobListResponse
     */
    public function queryDNAJobListWithOptions($request, $runtime)
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
            'action'      => 'QueryDNAJobList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDNAJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询DNA作业
     *  *
     * @param QueryDNAJobListRequest $request QueryDNAJobListRequest
     *
     * @return QueryDNAJobListResponse QueryDNAJobListResponse
     */
    public function queryDNAJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDNAJobListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询智能生产作业
     *  *
     * @param QueryIProductionJobRequest $request QueryIProductionJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryIProductionJobResponse QueryIProductionJobResponse
     */
    public function queryIProductionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryIProductionJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询智能生产作业
     *  *
     * @param QueryIProductionJobRequest $request QueryIProductionJobRequest
     *
     * @return QueryIProductionJobResponse QueryIProductionJobResponse
     */
    public function queryIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaCensorJobDetailRequest $request QueryMediaCensorJobDetailRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaCensorJobDetailResponse QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
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
            'action'      => 'QueryMediaCensorJobDetail',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaCensorJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaCensorJobDetailRequest $request QueryMediaCensorJobDetailRequest
     *
     * @return QueryMediaCensorJobDetailResponse QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaCensorJobListRequest $request QueryMediaCensorJobListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaCensorJobListResponse QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfJobCreatedTimeRange)) {
            $query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startOfJobCreatedTimeRange)) {
            $query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaCensorJobList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaCensorJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaCensorJobListRequest $request QueryMediaCensorJobListRequest
     *
     * @return QueryMediaCensorJobListResponse QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询索引任务
     *  *
     * @param QueryMediaIndexJobRequest $request QueryMediaIndexJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaIndexJobResponse QueryMediaIndexJobResponse
     */
    public function queryMediaIndexJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaIndexJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaIndexJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询索引任务
     *  *
     * @param QueryMediaIndexJobRequest $request QueryMediaIndexJobRequest
     *
     * @return QueryMediaIndexJobResponse QueryMediaIndexJobResponse
     */
    public function queryMediaIndexJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaIndexJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询搜索索引
     *  *
     * @param QuerySearchIndexRequest $request QuerySearchIndexRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySearchIndexResponse QuerySearchIndexResponse
     */
    public function querySearchIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexType)) {
            $query['IndexType'] = $request->indexType;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySearchIndex',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询搜索索引
     *  *
     * @param QuerySearchIndexRequest $request QuerySearchIndexRequest
     *
     * @return QuerySearchIndexResponse QuerySearchIndexResponse
     */
    public function querySearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySearchIndexWithOptions($request, $runtime);
    }

    /**
     * @summary 查询库
     *  *
     * @param QuerySearchLibRequest $request QuerySearchLibRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySearchLibResponse QuerySearchLibResponse
     */
    public function querySearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询库
     *  *
     * @param QuerySearchLibRequest $request QuerySearchLibRequest
     *
     * @return QuerySearchLibResponse QuerySearchLibResponse
     */
    public function querySearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySearchLibWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmarttagJobRequest $request QuerySmarttagJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySmarttagJobResponse QuerySmarttagJobResponse
     */
    public function querySmarttagJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmarttagJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySmarttagJobRequest $request QuerySmarttagJobRequest
     *
     * @return QuerySmarttagJobResponse QuerySmarttagJobResponse
     */
    public function querySmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmarttagJobWithOptions($request, $runtime);
    }

    /**
     * @summary 刷新媒资上传凭证
     *  *
     * @param RefreshUploadMediaRequest $request RefreshUploadMediaRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshUploadMediaResponse RefreshUploadMediaResponse
     */
    public function refreshUploadMediaWithOptions($request, $runtime)
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
            'action'      => 'RefreshUploadMedia',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshUploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 刷新媒资上传凭证
     *  *
     * @param RefreshUploadMediaRequest $request RefreshUploadMediaRequest
     *
     * @return RefreshUploadMediaResponse RefreshUploadMediaResponse
     */
    public function refreshUploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshUploadMediaWithOptions($request, $runtime);
    }

    /**
     * @summary 注册内容库资源
     *  *
     * @param RegisterMediaInfoRequest $request RegisterMediaInfoRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterMediaInfoResponse RegisterMediaInfoResponse
     */
    public function registerMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
        if (!Utils::isUnset($request->mediaTags)) {
            $query['MediaTags'] = $request->mediaTags;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $query['Overwrite'] = $request->overwrite;
        }
        if (!Utils::isUnset($request->referenceId)) {
            $query['ReferenceId'] = $request->referenceId;
        }
        if (!Utils::isUnset($request->registerConfig)) {
            $query['RegisterConfig'] = $request->registerConfig;
        }
        if (!Utils::isUnset($request->smartTagTemplateId)) {
            $query['SmartTagTemplateId'] = $request->smartTagTemplateId;
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
            'action'      => 'RegisterMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 注册内容库资源
     *  *
     * @param RegisterMediaInfoRequest $request RegisterMediaInfoRequest
     *
     * @return RegisterMediaInfoResponse RegisterMediaInfoResponse
     */
    public function registerMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 注册媒体流
     *  *
     * @param RegisterMediaStreamRequest $request RegisterMediaStreamRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterMediaStreamResponse RegisterMediaStreamResponse
     */
    public function registerMediaStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterMediaStream',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterMediaStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 注册媒体流
     *  *
     * @param RegisterMediaStreamRequest $request RegisterMediaStreamRequest
     *
     * @return RegisterMediaStreamResponse RegisterMediaStreamResponse
     */
    public function registerMediaStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaStreamWithOptions($request, $runtime);
    }

    /**
     * @summary SearchEditingProject
     *  *
     * @param SearchEditingProjectRequest $request SearchEditingProjectRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchEditingProjectResponse SearchEditingProjectResponse
     */
    public function searchEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createSource)) {
            $query['CreateSource'] = $request->createSource;
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
        if (!Utils::isUnset($request->projectType)) {
            $query['ProjectType'] = $request->projectType;
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
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchEditingProject',
            'version'     => '2020-11-09',
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
     * @summary SearchEditingProject
     *  *
     * @param SearchEditingProjectRequest $request SearchEditingProjectRequest
     *
     * @return SearchEditingProjectResponse SearchEditingProjectResponse
     */
    public function searchEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about media assets based on the request parameters.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
     * @param SearchMediaRequest $request SearchMediaRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaResponse SearchMediaResponse
     */
    public function searchMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
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
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMedia',
            'version'     => '2020-11-09',
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
     * @summary Queries information about media assets based on the request parameters.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
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
     * @summary 智能标签搜索
     *  *
     * @param SearchMediaByAILabelRequest $request SearchMediaByAILabelRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaByAILabelResponse SearchMediaByAILabelResponse
     */
    public function searchMediaByAILabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->multimodalSearchType)) {
            $query['MultimodalSearchType'] = $request->multimodalSearchType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->specificSearch)) {
            $query['SpecificSearch'] = $request->specificSearch;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaByAILabel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMediaByAILabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 智能标签搜索
     *  *
     * @param SearchMediaByAILabelRequest $request SearchMediaByAILabelRequest
     *
     * @return SearchMediaByAILabelResponse SearchMediaByAILabelResponse
     */
    public function searchMediaByAILabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByAILabelWithOptions($request, $runtime);
    }

    /**
     * @summary 人脸搜粗搜接口，输入一张人脸图片，搜索该人物所在媒资的相关信息
     *  *
     * @param SearchMediaByFaceRequest $request SearchMediaByFaceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaByFaceResponse SearchMediaByFaceResponse
     */
    public function searchMediaByFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->faceSearchToken)) {
            $query['FaceSearchToken'] = $request->faceSearchToken;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->personImageUrl)) {
            $query['PersonImageUrl'] = $request->personImageUrl;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaByFace',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMediaByFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 人脸搜粗搜接口，输入一张人脸图片，搜索该人物所在媒资的相关信息
     *  *
     * @param SearchMediaByFaceRequest $request SearchMediaByFaceRequest
     *
     * @return SearchMediaByFaceResponse SearchMediaByFaceResponse
     */
    public function searchMediaByFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByFaceWithOptions($request, $runtime);
    }

    /**
     * @summary 混合搜索
     *  *
     * @param SearchMediaByHybridRequest $request SearchMediaByHybridRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaByHybridResponse SearchMediaByHybridResponse
     */
    public function searchMediaByHybridWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaByHybrid',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMediaByHybridResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 混合搜索
     *  *
     * @param SearchMediaByHybridRequest $request SearchMediaByHybridRequest
     *
     * @return SearchMediaByHybridResponse SearchMediaByHybridResponse
     */
    public function searchMediaByHybrid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByHybridWithOptions($request, $runtime);
    }

    /**
     * @summary 多模态搜索
     *  *
     * @param SearchMediaByMultimodalRequest $request SearchMediaByMultimodalRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaByMultimodalResponse SearchMediaByMultimodalResponse
     */
    public function searchMediaByMultimodalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaByMultimodal',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMediaByMultimodalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 多模态搜索
     *  *
     * @param SearchMediaByMultimodalRequest $request SearchMediaByMultimodalRequest
     *
     * @return SearchMediaByMultimodalResponse SearchMediaByMultimodalResponse
     */
    public function searchMediaByMultimodal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByMultimodalWithOptions($request, $runtime);
    }

    /**
     * @summary 人脸搜精搜接口，基于粗搜结果返回该人物所在媒资的相关人物片段信息
     *  *
     * @param SearchMediaClipByFaceRequest $request SearchMediaClipByFaceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaClipByFaceResponse SearchMediaClipByFaceResponse
     */
    public function searchMediaClipByFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->faceSearchToken)) {
            $query['FaceSearchToken'] = $request->faceSearchToken;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaClipByFace',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMediaClipByFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 人脸搜精搜接口，基于粗搜结果返回该人物所在媒资的相关人物片段信息
     *  *
     * @param SearchMediaClipByFaceRequest $request SearchMediaClipByFaceRequest
     *
     * @return SearchMediaClipByFaceResponse SearchMediaClipByFaceResponse
     */
    public function searchMediaClipByFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaClipByFaceWithOptions($request, $runtime);
    }

    /**
     * @summary 搜索公共媒资信息
     *  *
     * @param SearchPublicMediaInfoRequest $request SearchPublicMediaInfoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchPublicMediaInfoResponse SearchPublicMediaInfoResponse
     */
    public function searchPublicMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorized)) {
            $query['Authorized'] = $request->authorized;
        }
        if (!Utils::isUnset($request->dynamicMetaDataMatchFields)) {
            $query['DynamicMetaDataMatchFields'] = $request->dynamicMetaDataMatchFields;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->favorite)) {
            $query['Favorite'] = $request->favorite;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchPublicMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchPublicMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 搜索公共媒资信息
     *  *
     * @param SearchPublicMediaInfoRequest $request SearchPublicMediaInfoRequest
     *
     * @return SearchPublicMediaInfoResponse SearchPublicMediaInfoResponse
     */
    public function searchPublicMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPublicMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 发送实时截图任务指令
     *  *
     * @param SendLiveSnapshotJobCommandRequest $request SendLiveSnapshotJobCommandRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SendLiveSnapshotJobCommandResponse SendLiveSnapshotJobCommandResponse
     */
    public function sendLiveSnapshotJobCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->command)) {
            $body['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendLiveSnapshotJobCommand',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendLiveSnapshotJobCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发送实时截图任务指令
     *  *
     * @param SendLiveSnapshotJobCommandRequest $request SendLiveSnapshotJobCommandRequest
     *
     * @return SendLiveSnapshotJobCommandResponse SendLiveSnapshotJobCommandResponse
     */
    public function sendLiveSnapshotJobCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendLiveSnapshotJobCommandWithOptions($request, $runtime);
    }

    /**
     * @summary 给指定转码任务发实时命令
     *  *
     * @param SendLiveTranscodeJobCommandRequest $request SendLiveTranscodeJobCommandRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SendLiveTranscodeJobCommandResponse SendLiveTranscodeJobCommandResponse
     */
    public function sendLiveTranscodeJobCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendLiveTranscodeJobCommand',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendLiveTranscodeJobCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 给指定转码任务发实时命令
     *  *
     * @param SendLiveTranscodeJobCommandRequest $request SendLiveTranscodeJobCommandRequest
     *
     * @return SendLiveTranscodeJobCommandResponse SendLiveTranscodeJobCommandResponse
     */
    public function sendLiveTranscodeJobCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendLiveTranscodeJobCommandWithOptions($request, $runtime);
    }

    /**
     * @summary 设置内容分析搜索配置
     *  *
     * @param SetContentAnalyzeConfigRequest $request SetContentAnalyzeConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetContentAnalyzeConfigResponse SetContentAnalyzeConfigResponse
     */
    public function setContentAnalyzeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auto)) {
            $query['Auto'] = $request->auto;
        }
        if (!Utils::isUnset($request->saveType)) {
            $query['SaveType'] = $request->saveType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetContentAnalyzeConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetContentAnalyzeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置内容分析搜索配置
     *  *
     * @param SetContentAnalyzeConfigRequest $request SetContentAnalyzeConfigRequest
     *
     * @return SetContentAnalyzeConfigResponse SetContentAnalyzeConfigResponse
     */
    public function setContentAnalyzeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setContentAnalyzeConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 设置默认媒体处理模板
     *  *
     * @param SetDefaultCustomTemplateRequest $request SetDefaultCustomTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDefaultCustomTemplateResponse SetDefaultCustomTemplateResponse
     */
    public function setDefaultCustomTemplateWithOptions($request, $runtime)
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
            'action'      => 'SetDefaultCustomTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDefaultCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置默认媒体处理模板
     *  *
     * @param SetDefaultCustomTemplateRequest $request SetDefaultCustomTemplateRequest
     *
     * @return SetDefaultCustomTemplateResponse SetDefaultCustomTemplateResponse
     */
    public function setDefaultCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 设置默认存储路径
     *  *
     * @param SetDefaultStorageLocationRequest $request SetDefaultStorageLocationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDefaultStorageLocationResponse SetDefaultStorageLocationResponse
     */
    public function setDefaultStorageLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultStorageLocation',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDefaultStorageLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置默认存储路径
     *  *
     * @param SetDefaultStorageLocationRequest $request SetDefaultStorageLocationRequest
     *
     * @return SetDefaultStorageLocationResponse SetDefaultStorageLocationResponse
     */
    public function setDefaultStorageLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultStorageLocationWithOptions($request, $runtime);
    }

    /**
     * @summary 配置事件回调地址
     *  *
     * @param SetEventCallbackRequest $request SetEventCallbackRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetEventCallbackResponse SetEventCallbackResponse
     */
    public function setEventCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authKey)) {
            $query['AuthKey'] = $request->authKey;
        }
        if (!Utils::isUnset($request->authSwitch)) {
            $query['AuthSwitch'] = $request->authSwitch;
        }
        if (!Utils::isUnset($request->callbackQueueName)) {
            $query['CallbackQueueName'] = $request->callbackQueueName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetEventCallback',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetEventCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 配置事件回调地址
     *  *
     * @param SetEventCallbackRequest $request SetEventCallbackRequest
     *
     * @return SetEventCallbackResponse SetEventCallbackResponse
     */
    public function setEventCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEventCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary 开启一个机器人实例
     *  *
     * @param StartRtcRobotInstanceRequest $tmpReq  StartRtcRobotInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return StartRtcRobotInstanceResponse StartRtcRobotInstanceResponse
     */
    public function startRtcRobotInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartRtcRobotInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->authToken)) {
            $query['AuthToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->configShrink)) {
            $query['Config'] = $request->configShrink;
        }
        if (!Utils::isUnset($request->robotId)) {
            $query['RobotId'] = $request->robotId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRtcRobotInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启一个机器人实例
     *  *
     * @param StartRtcRobotInstanceRequest $request StartRtcRobotInstanceRequest
     *
     * @return StartRtcRobotInstanceResponse StartRtcRobotInstanceResponse
     */
    public function startRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 启动工作流
     *  *
     * @param StartWorkflowRequest $request StartWorkflowRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartWorkflowResponse StartWorkflowResponse
     */
    public function startWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskInput)) {
            $query['TaskInput'] = $request->taskInput;
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
            'action'      => 'StartWorkflow',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动工作流
     *  *
     * @param StartWorkflowRequest $request StartWorkflowRequest
     *
     * @return StartWorkflowResponse StartWorkflowResponse
     */
    public function startWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startWorkflowWithOptions($request, $runtime);
    }

    /**
     * @summary 停止一个机器人实例
     *  *
     * @param StopRtcRobotInstanceRequest $request StopRtcRobotInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StopRtcRobotInstanceResponse StopRtcRobotInstanceResponse
     */
    public function stopRtcRobotInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopRtcRobotInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止一个机器人实例
     *  *
     * @param StopRtcRobotInstanceRequest $request StopRtcRobotInstanceRequest
     *
     * @return StopRtcRobotInstanceResponse StopRtcRobotInstanceResponse
     */
    public function stopRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary SubmitASRJob
     *  *
     * @param SubmitASRJobRequest $request SubmitASRJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitASRJobResponse SubmitASRJobResponse
     */
    public function submitASRJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->inputFile)) {
            $query['InputFile'] = $request->inputFile;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
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
            'action'      => 'SubmitASRJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitASRJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary SubmitASRJob
     *  *
     * @param SubmitASRJobRequest $request SubmitASRJobRequest
     *
     * @return SubmitASRJobResponse SubmitASRJobResponse
     */
    public function submitASRJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitASRJobWithOptions($request, $runtime);
    }

    /**
     * @summary SubmitAudioProduceJob
     *  *
     * @param SubmitAudioProduceJobRequest $request SubmitAudioProduceJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAudioProduceJobResponse SubmitAudioProduceJobResponse
     */
    public function submitAudioProduceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->editingConfig)) {
            $query['EditingConfig'] = $request->editingConfig;
        }
        if (!Utils::isUnset($request->inputConfig)) {
            $query['InputConfig'] = $request->inputConfig;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $query['Overwrite'] = $request->overwrite;
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
            'action'      => 'SubmitAudioProduceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAudioProduceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary SubmitAudioProduceJob
     *  *
     * @param SubmitAudioProduceJobRequest $request SubmitAudioProduceJobRequest
     *
     * @return SubmitAudioProduceJobResponse SubmitAudioProduceJobResponse
     */
    public function submitAudioProduceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAudioProduceJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交数字人训练任务
     *  *
     * @param SubmitAvatarTrainingJobRequest $request SubmitAvatarTrainingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAvatarTrainingJobResponse SubmitAvatarTrainingJobResponse
     */
    public function submitAvatarTrainingJobWithOptions($request, $runtime)
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
            'action'      => 'SubmitAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交数字人训练任务
     *  *
     * @param SubmitAvatarTrainingJobRequest $request SubmitAvatarTrainingJobRequest
     *
     * @return SubmitAvatarTrainingJobResponse SubmitAvatarTrainingJobResponse
     */
    public function submitAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交虚拟人视频合成任务
     *  *
     * @param SubmitAvatarVideoJobRequest $request SubmitAvatarVideoJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAvatarVideoJobResponse SubmitAvatarVideoJobResponse
     */
    public function submitAvatarVideoJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->editingConfig)) {
            $query['EditingConfig'] = $request->editingConfig;
        }
        if (!Utils::isUnset($request->inputConfig)) {
            $query['InputConfig'] = $request->inputConfig;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
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
            'action'      => 'SubmitAvatarVideoJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAvatarVideoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交虚拟人视频合成任务
     *  *
     * @param SubmitAvatarVideoJobRequest $request SubmitAvatarVideoJobRequest
     *
     * @return SubmitAvatarVideoJobResponse SubmitAvatarVideoJobResponse
     */
    public function submitAvatarVideoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAvatarVideoJobWithOptions($request, $runtime);
    }

    /**
     * @summary SubmitBatchMediaProducingJob
     *  *
     * @param SubmitBatchMediaProducingJobRequest $request SubmitBatchMediaProducingJobRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitBatchMediaProducingJobResponse SubmitBatchMediaProducingJobResponse
     */
    public function submitBatchMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->editingConfig)) {
            $body['EditingConfig'] = $request->editingConfig;
        }
        if (!Utils::isUnset($request->inputConfig)) {
            $body['InputConfig'] = $request->inputConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitBatchMediaProducingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitBatchMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary SubmitBatchMediaProducingJob
     *  *
     * @param SubmitBatchMediaProducingJobRequest $request SubmitBatchMediaProducingJobRequest
     *
     * @return SubmitBatchMediaProducingJobResponse SubmitBatchMediaProducingJobResponse
     */
    public function submitBatchMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitBatchMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交人声克隆训练任务
     *  *
     * @param SubmitCustomizedVoiceJobRequest $request SubmitCustomizedVoiceJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitCustomizedVoiceJobResponse SubmitCustomizedVoiceJobResponse
     */
    public function submitCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->demoAudioMediaURL)) {
            $query['DemoAudioMediaURL'] = $request->demoAudioMediaURL;
        }
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交人声克隆训练任务
     *  *
     * @param SubmitCustomizedVoiceJobRequest $request SubmitCustomizedVoiceJobRequest
     *
     * @return SubmitCustomizedVoiceJobResponse SubmitCustomizedVoiceJobResponse
     */
    public function submitCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交DNA作业
     *  *
     * @param SubmitDNAJobRequest $tmpReq  SubmitDNAJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDNAJobResponse SubmitDNAJobResponse
     */
    public function submitDNAJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitDNAJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->DBId)) {
            $query['DBId'] = $request->DBId;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->primaryKey)) {
            $query['PrimaryKey'] = $request->primaryKey;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDNAJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDNAJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交DNA作业
     *  *
     * @param SubmitDNAJobRequest $request SubmitDNAJobRequest
     *
     * @return SubmitDNAJobResponse SubmitDNAJobResponse
     */
    public function submitDNAJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDNAJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交动态图表任务
     *  *
     * @param SubmitDynamicChartJobRequest $request SubmitDynamicChartJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDynamicChartJobResponse SubmitDynamicChartJobResponse
     */
    public function submitDynamicChartJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->axisParams)) {
            $query['AxisParams'] = $request->axisParams;
        }
        if (!Utils::isUnset($request->background)) {
            $query['Background'] = $request->background;
        }
        if (!Utils::isUnset($request->chartConfig)) {
            $query['ChartConfig'] = $request->chartConfig;
        }
        if (!Utils::isUnset($request->chartTitle)) {
            $query['ChartTitle'] = $request->chartTitle;
        }
        if (!Utils::isUnset($request->chartType)) {
            $query['ChartType'] = $request->chartType;
        }
        if (!Utils::isUnset($request->dataSource)) {
            $query['DataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->subtitle)) {
            $query['Subtitle'] = $request->subtitle;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->unit)) {
            $query['Unit'] = $request->unit;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDynamicChartJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDynamicChartJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交动态图表任务
     *  *
     * @param SubmitDynamicChartJobRequest $request SubmitDynamicChartJobRequest
     *
     * @return SubmitDynamicChartJobResponse SubmitDynamicChartJobResponse
     */
    public function submitDynamicChartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDynamicChartJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交异步动图任务接口
     *  *
     * @param SubmitDynamicImageJobRequest $tmpReq  SubmitDynamicImageJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDynamicImageJobResponse SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitDynamicImageJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->templateConfigShrink)) {
            $query['TemplateConfig'] = $request->templateConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDynamicImageJob',
            'version'     => '2020-11-09',
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
     * @summary 提交异步动图任务接口
     *  *
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
     * @summary 提交智能生产作业
     *  *
     * @param SubmitIProductionJobRequest $tmpReq  SubmitIProductionJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitIProductionJobResponse SubmitIProductionJobResponse
     */
    public function submitIProductionJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitIProductionJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->jobParams)) {
            $query['JobParams'] = $request->jobParams;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
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
            'action'      => 'SubmitIProductionJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交智能生产作业
     *  *
     * @param SubmitIProductionJobRequest $request SubmitIProductionJobRequest
     *
     * @return SubmitIProductionJobResponse SubmitIProductionJobResponse
     */
    public function submitIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交直播剪辑任务
     *  *
     * @param SubmitLiveEditingJobRequest $request SubmitLiveEditingJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitLiveEditingJobResponse SubmitLiveEditingJobResponse
     */
    public function submitLiveEditingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clips)) {
            $query['Clips'] = $request->clips;
        }
        if (!Utils::isUnset($request->liveStreamConfig)) {
            $query['LiveStreamConfig'] = $request->liveStreamConfig;
        }
        if (!Utils::isUnset($request->mediaProduceConfig)) {
            $query['MediaProduceConfig'] = $request->mediaProduceConfig;
        }
        if (!Utils::isUnset($request->outputMediaConfig)) {
            $query['OutputMediaConfig'] = $request->outputMediaConfig;
        }
        if (!Utils::isUnset($request->outputMediaTarget)) {
            $query['OutputMediaTarget'] = $request->outputMediaTarget;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitLiveEditingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitLiveEditingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交直播剪辑任务
     *  *
     * @param SubmitLiveEditingJobRequest $request SubmitLiveEditingJobRequest
     *
     * @return SubmitLiveEditingJobResponse SubmitLiveEditingJobResponse
     */
    public function submitLiveEditingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveEditingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交录制任务
     *  *
     * @param SubmitLiveRecordJobRequest $tmpReq  SubmitLiveRecordJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitLiveRecordJobResponse SubmitLiveRecordJobResponse
     */
    public function submitLiveRecordJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitLiveRecordJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->recordOutput)) {
            $request->recordOutputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recordOutput, 'RecordOutput', 'json');
        }
        if (!Utils::isUnset($tmpReq->streamInput)) {
            $request->streamInputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $body['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->recordOutputShrink)) {
            $body['RecordOutput'] = $request->recordOutputShrink;
        }
        if (!Utils::isUnset($request->streamInputShrink)) {
            $body['StreamInput'] = $request->streamInputShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitLiveRecordJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitLiveRecordJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交录制任务
     *  *
     * @param SubmitLiveRecordJobRequest $request SubmitLiveRecordJobRequest
     *
     * @return SubmitLiveRecordJobResponse SubmitLiveRecordJobResponse
     */
    public function submitLiveRecordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveRecordJobWithOptions($request, $runtime);
    }

    /**
     * @summary 创建直播截图任务
     *  *
     * @param SubmitLiveSnapshotJobRequest $tmpReq  SubmitLiveSnapshotJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitLiveSnapshotJobResponse SubmitLiveSnapshotJobResponse
     */
    public function submitLiveSnapshotJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitLiveSnapshotJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->snapshotOutput)) {
            $request->snapshotOutputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->snapshotOutput, 'SnapshotOutput', 'json');
        }
        if (!Utils::isUnset($tmpReq->streamInput)) {
            $request->streamInputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->jobName)) {
            $body['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->snapshotOutputShrink)) {
            $body['SnapshotOutput'] = $request->snapshotOutputShrink;
        }
        if (!Utils::isUnset($request->streamInputShrink)) {
            $body['StreamInput'] = $request->streamInputShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitLiveSnapshotJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitLiveSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建直播截图任务
     *  *
     * @param SubmitLiveSnapshotJobRequest $request SubmitLiveSnapshotJobRequest
     *
     * @return SubmitLiveSnapshotJobResponse SubmitLiveSnapshotJobResponse
     */
    public function submitLiveSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交转码任务
     *  *
     * @param SubmitLiveTranscodeJobRequest $tmpReq  SubmitLiveTranscodeJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitLiveTranscodeJobResponse SubmitLiveTranscodeJobResponse
     */
    public function submitLiveTranscodeJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitLiveTranscodeJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamInput)) {
            $request->streamInputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }
        if (!Utils::isUnset($tmpReq->timedConfig)) {
            $request->timedConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timedConfig, 'TimedConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->transcodeOutput)) {
            $request->transcodeOutputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transcodeOutput, 'TranscodeOutput', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->startMode)) {
            $query['StartMode'] = $request->startMode;
        }
        if (!Utils::isUnset($request->streamInputShrink)) {
            $query['StreamInput'] = $request->streamInputShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->timedConfigShrink)) {
            $query['TimedConfig'] = $request->timedConfigShrink;
        }
        if (!Utils::isUnset($request->transcodeOutputShrink)) {
            $query['TranscodeOutput'] = $request->transcodeOutputShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitLiveTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交转码任务
     *  *
     * @param SubmitLiveTranscodeJobRequest $request SubmitLiveTranscodeJobRequest
     *
     * @return SubmitLiveTranscodeJobResponse SubmitLiveTranscodeJobResponse
     */
    public function submitLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交媒资结构化分析任务
     *  *
     * @param SubmitMediaAiAnalysisJobRequest $request SubmitMediaAiAnalysisJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaAiAnalysisJobResponse SubmitMediaAiAnalysisJobResponse
     */
    public function submitMediaAiAnalysisJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisParams)) {
            $query['AnalysisParams'] = $request->analysisParams;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaAiAnalysisJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaAiAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交媒资结构化分析任务
     *  *
     * @param SubmitMediaAiAnalysisJobRequest $request SubmitMediaAiAnalysisJobRequest
     *
     * @return SubmitMediaAiAnalysisJobResponse SubmitMediaAiAnalysisJobResponse
     */
    public function submitMediaAiAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaAiAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaCensorJobRequest $tmpReq  SubmitMediaCensorJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaCensorJobResponse SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitMediaCensorJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->barrages)) {
            $query['Barrages'] = $request->barrages;
        }
        if (!Utils::isUnset($request->coverImages)) {
            $query['CoverImages'] = $request->coverImages;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->output)) {
            $query['Output'] = $request->output;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
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
            'action'      => 'SubmitMediaCensorJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaCensorJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitMediaCensorJobRequest $request SubmitMediaCensorJobRequest
     *
     * @return SubmitMediaCensorJobResponse SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaCensorJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaInfoJobRequest $tmpReq  SubmitMediaInfoJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaInfoJobResponse SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitMediaInfoJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaInfoJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitMediaInfoJobRequest $request SubmitMediaInfoJobRequest
     *
     * @return SubmitMediaInfoJobResponse SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @summary SubmitMediaProducingJob
     *  *
     * @param SubmitMediaProducingJobRequest $request SubmitMediaProducingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaProducingJobResponse SubmitMediaProducingJobResponse
     */
    public function submitMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clipsParam)) {
            $query['ClipsParam'] = $request->clipsParam;
        }
        if (!Utils::isUnset($request->editingProduceConfig)) {
            $query['EditingProduceConfig'] = $request->editingProduceConfig;
        }
        if (!Utils::isUnset($request->mediaMetadata)) {
            $query['MediaMetadata'] = $request->mediaMetadata;
        }
        if (!Utils::isUnset($request->outputMediaConfig)) {
            $query['OutputMediaConfig'] = $request->outputMediaConfig;
        }
        if (!Utils::isUnset($request->outputMediaTarget)) {
            $query['OutputMediaTarget'] = $request->outputMediaTarget;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectMetadata)) {
            $query['ProjectMetadata'] = $request->projectMetadata;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->timeline)) {
            $body['Timeline'] = $request->timeline;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaProducingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary SubmitMediaProducingJob
     *  *
     * @param SubmitMediaProducingJobRequest $request SubmitMediaProducingJobRequest
     *
     * @return SubmitMediaProducingJobResponse SubmitMediaProducingJobResponse
     */
    public function submitMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交打包任务
     *  *
     * @param SubmitPackageJobRequest $tmpReq  SubmitPackageJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitPackageJobResponse SubmitPackageJobResponse
     */
    public function submitPackageJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitPackageJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputs)) {
            $request->inputsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputs, 'Inputs', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputsShrink)) {
            $query['Inputs'] = $request->inputsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitPackageJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitPackageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交打包任务
     *  *
     * @param SubmitPackageJobRequest $request SubmitPackageJobRequest
     *
     * @return SubmitPackageJobResponse SubmitPackageJobResponse
     */
    public function submitPackageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPackageJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSmarttagJobRequest $tmpReq  SubmitSmarttagJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSmarttagJobResponse SubmitSmarttagJobResponse
     */
    public function submitSmarttagJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSmarttagJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentAddr)) {
            $query['ContentAddr'] = $request->contentAddr;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
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
            'action'      => 'SubmitSmarttagJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSmarttagJobRequest $request SubmitSmarttagJobRequest
     *
     * @return SubmitSmarttagJobResponse SubmitSmarttagJobResponse
     */
    public function submitSmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmarttagJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交异步截图任务
     *  *
     * @param SubmitSnapshotJobRequest $tmpReq  SubmitSnapshotJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSnapshotJobResponse SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSnapshotJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->templateConfigShrink)) {
            $query['TemplateConfig'] = $request->templateConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSnapshotJob',
            'version'     => '2020-11-09',
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
     * @summary 提交异步截图任务
     *  *
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
     * @summary 提交标准版人声克隆训练任务
     *  *
     * @param SubmitStandardCustomizedVoiceJobRequest $request SubmitStandardCustomizedVoiceJobRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitStandardCustomizedVoiceJobResponse SubmitStandardCustomizedVoiceJobResponse
     */
    public function submitStandardCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audios)) {
            $query['Audios'] = $request->audios;
        }
        if (!Utils::isUnset($request->authentication)) {
            $query['Authentication'] = $request->authentication;
        }
        if (!Utils::isUnset($request->demoAudioMediaURL)) {
            $query['DemoAudioMediaURL'] = $request->demoAudioMediaURL;
        }
        if (!Utils::isUnset($request->gender)) {
            $query['Gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->voiceName)) {
            $query['VoiceName'] = $request->voiceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitStandardCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitStandardCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交标准版人声克隆训练任务
     *  *
     * @param SubmitStandardCustomizedVoiceJobRequest $request SubmitStandardCustomizedVoiceJobRequest
     *
     * @return SubmitStandardCustomizedVoiceJobResponse SubmitStandardCustomizedVoiceJobResponse
     */
    public function submitStandardCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitStandardCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSyncMediaInfoJobRequest $tmpReq  SubmitSyncMediaInfoJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSyncMediaInfoJobResponse SubmitSyncMediaInfoJobResponse
     */
    public function submitSyncMediaInfoJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSyncMediaInfoJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSyncMediaInfoJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSyncMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSyncMediaInfoJobRequest $request SubmitSyncMediaInfoJobRequest
     *
     * @return SubmitSyncMediaInfoJobResponse SubmitSyncMediaInfoJobResponse
     */
    public function submitSyncMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSyncMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交文本生成任务
     *  *
     * @param SubmitTextGenerateJobRequest $request SubmitTextGenerateJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTextGenerateJobResponse SubmitTextGenerateJobResponse
     */
    public function submitTextGenerateJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->generateConfig)) {
            $query['GenerateConfig'] = $request->generateConfig;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTextGenerateJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTextGenerateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交文本生成任务
     *  *
     * @param SubmitTextGenerateJobRequest $request SubmitTextGenerateJobRequest
     *
     * @return SubmitTextGenerateJobResponse SubmitTextGenerateJobResponse
     */
    public function submitTextGenerateJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTextGenerateJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTranscodeJobRequest $tmpReq  SubmitTranscodeJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTranscodeJobResponse SubmitTranscodeJobResponse
     */
    public function submitTranscodeJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTranscodeJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputGroup)) {
            $request->inputGroupShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputGroup, 'InputGroup', 'json');
        }
        if (!Utils::isUnset($tmpReq->outputGroup)) {
            $request->outputGroupShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outputGroup, 'OutputGroup', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->inputGroupShrink)) {
            $query['InputGroup'] = $request->inputGroupShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputGroupShrink)) {
            $query['OutputGroup'] = $request->outputGroupShrink;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTranscodeJobRequest $request SubmitTranscodeJobRequest
     *
     * @return SubmitTranscodeJobResponse SubmitTranscodeJobResponse
     */
    public function submitTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交视频翻译任务
     *  *
     * @param SubmitVideoTranslationJobRequest $request SubmitVideoTranslationJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitVideoTranslationJobResponse SubmitVideoTranslationJobResponse
     */
    public function submitVideoTranslationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->editingConfig)) {
            $query['EditingConfig'] = $request->editingConfig;
        }
        if (!Utils::isUnset($request->inputConfig)) {
            $query['InputConfig'] = $request->inputConfig;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
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
            'action'      => 'SubmitVideoTranslationJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitVideoTranslationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交视频翻译任务
     *  *
     * @param SubmitVideoTranslationJobRequest $request SubmitVideoTranslationJobRequest
     *
     * @return SubmitVideoTranslationJobResponse SubmitVideoTranslationJobResponse
     */
    public function submitVideoTranslationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoTranslationJobWithOptions($request, $runtime);
    }

    /**
     * @summary 更新数字人训练任务信息
     *  *
     * @param UpdateAvatarTrainingJobRequest $request UpdateAvatarTrainingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAvatarTrainingJobResponse UpdateAvatarTrainingJobResponse
     */
    public function updateAvatarTrainingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarDescription)) {
            $query['AvatarDescription'] = $request->avatarDescription;
        }
        if (!Utils::isUnset($request->avatarName)) {
            $query['AvatarName'] = $request->avatarName;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->portrait)) {
            $query['Portrait'] = $request->portrait;
        }
        if (!Utils::isUnset($request->thumbnail)) {
            $query['Thumbnail'] = $request->thumbnail;
        }
        if (!Utils::isUnset($request->transparent)) {
            $query['Transparent'] = $request->transparent;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数字人训练任务信息
     *  *
     * @param UpdateAvatarTrainingJobRequest $request UpdateAvatarTrainingJobRequest
     *
     * @return UpdateAvatarTrainingJobResponse UpdateAvatarTrainingJobResponse
     */
    public function updateAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 更新媒资分类
     *  *
     * @param UpdateCategoryRequest $request UpdateCategoryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCategoryResponse UpdateCategoryResponse
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
            'version'     => '2020-11-09',
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
     * @summary 更新媒资分类
     *  *
     * @param UpdateCategoryRequest $request UpdateCategoryRequest
     *
     * @return UpdateCategoryResponse UpdateCategoryResponse
     */
    public function updateCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary 更新媒体处理自定义模板
     *  *
     * @param UpdateCustomTemplateRequest $request UpdateCustomTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomTemplateResponse UpdateCustomTemplateResponse
     */
    public function updateCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateConfig)) {
            $query['TemplateConfig'] = $request->templateConfig;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新媒体处理自定义模板
     *  *
     * @param UpdateCustomTemplateRequest $request UpdateCustomTemplateRequest
     *
     * @return UpdateCustomTemplateResponse UpdateCustomTemplateResponse
     */
    public function updateCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新用户的专属人声
     *  *
     * @param UpdateCustomizedVoiceRequest $request UpdateCustomizedVoiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomizedVoiceResponse UpdateCustomizedVoiceResponse
     */
    public function updateCustomizedVoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->demoAudioMediaId)) {
            $query['DemoAudioMediaId'] = $request->demoAudioMediaId;
        }
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomizedVoice',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomizedVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新用户的专属人声
     *  *
     * @param UpdateCustomizedVoiceRequest $request UpdateCustomizedVoiceRequest
     *
     * @return UpdateCustomizedVoiceResponse UpdateCustomizedVoiceResponse
     */
    public function updateCustomizedVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomizedVoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 修改云剪辑工程
     *  *
     * @param UpdateEditingProjectRequest $request UpdateEditingProjectRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEditingProjectResponse UpdateEditingProjectResponse
     */
    public function updateEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessStatus)) {
            $query['BusinessStatus'] = $request->businessStatus;
        }
        if (!Utils::isUnset($request->clipsParam)) {
            $query['ClipsParam'] = $request->clipsParam;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->timeline)) {
            $body['Timeline'] = $request->timeline;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEditingProject',
            'version'     => '2020-11-09',
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
     * @summary 修改云剪辑工程
     *  *
     * @param UpdateEditingProjectRequest $request UpdateEditingProjectRequest
     *
     * @return UpdateEditingProjectResponse UpdateEditingProjectResponse
     */
    public function updateEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 修改直播录制模板
     *  *
     * @param UpdateLiveRecordTemplateRequest $tmpReq  UpdateLiveRecordTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLiveRecordTemplateResponse UpdateLiveRecordTemplateResponse
     */
    public function updateLiveRecordTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveRecordTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->recordFormat)) {
            $request->recordFormatShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recordFormat, 'RecordFormat', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->recordFormatShrink)) {
            $body['RecordFormat'] = $request->recordFormatShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveRecordTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改直播录制模板
     *  *
     * @param UpdateLiveRecordTemplateRequest $request UpdateLiveRecordTemplateRequest
     *
     * @return UpdateLiveRecordTemplateResponse UpdateLiveRecordTemplateResponse
     */
    public function updateLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新直播截图模板
     *  *
     * @param UpdateLiveSnapshotTemplateRequest $request UpdateLiveSnapshotTemplateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLiveSnapshotTemplateResponse UpdateLiveSnapshotTemplateResponse
     */
    public function updateLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->overwriteFormat)) {
            $body['OverwriteFormat'] = $request->overwriteFormat;
        }
        if (!Utils::isUnset($request->sequenceFormat)) {
            $body['SequenceFormat'] = $request->sequenceFormat;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->timeInterval)) {
            $body['TimeInterval'] = $request->timeInterval;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveSnapshotTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新直播截图模板
     *  *
     * @param UpdateLiveSnapshotTemplateRequest $request UpdateLiveSnapshotTemplateRequest
     *
     * @return UpdateLiveSnapshotTemplateResponse UpdateLiveSnapshotTemplateResponse
     */
    public function updateLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新转码任务配置
     *  *
     * @param UpdateLiveTranscodeJobRequest $tmpReq  UpdateLiveTranscodeJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLiveTranscodeJobResponse UpdateLiveTranscodeJobResponse
     */
    public function updateLiveTranscodeJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveTranscodeJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamInput)) {
            $request->streamInputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }
        if (!Utils::isUnset($tmpReq->timedConfig)) {
            $request->timedConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timedConfig, 'TimedConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->transcodeOutput)) {
            $request->transcodeOutputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transcodeOutput, 'TranscodeOutput', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->streamInputShrink)) {
            $query['StreamInput'] = $request->streamInputShrink;
        }
        if (!Utils::isUnset($request->timedConfigShrink)) {
            $query['TimedConfig'] = $request->timedConfigShrink;
        }
        if (!Utils::isUnset($request->transcodeOutputShrink)) {
            $query['TranscodeOutput'] = $request->transcodeOutputShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新转码任务配置
     *  *
     * @param UpdateLiveTranscodeJobRequest $request UpdateLiveTranscodeJobRequest
     *
     * @return UpdateLiveTranscodeJobResponse UpdateLiveTranscodeJobResponse
     */
    public function updateLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary 更新转码模版
     *  *
     * @param UpdateLiveTranscodeTemplateRequest $tmpReq  UpdateLiveTranscodeTemplateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLiveTranscodeTemplateResponse UpdateLiveTranscodeTemplateResponse
     */
    public function updateLiveTranscodeTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveTranscodeTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateConfigShrink)) {
            $query['TemplateConfig'] = $request->templateConfigShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveTranscodeTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新转码模版
     *  *
     * @param UpdateLiveTranscodeTemplateRequest $request UpdateLiveTranscodeTemplateRequest
     *
     * @return UpdateLiveTranscodeTemplateResponse UpdateLiveTranscodeTemplateResponse
     */
    public function updateLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary UpdateMediaInfo
     *  *
     * @param UpdateMediaInfoRequest $request UpdateMediaInfoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaInfoResponse UpdateMediaInfoResponse
     */
    public function updateMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appendTags)) {
            $query['AppendTags'] = $request->appendTags;
        }
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaTags)) {
            $query['MediaTags'] = $request->mediaTags;
        }
        if (!Utils::isUnset($request->referenceId)) {
            $query['ReferenceId'] = $request->referenceId;
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
            'action'      => 'UpdateMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary UpdateMediaInfo
     *  *
     * @param UpdateMediaInfoRequest $request UpdateMediaInfoRequest
     *
     * @return UpdateMediaInfoResponse UpdateMediaInfoResponse
     */
    public function updateMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 为媒资修改标注信息
     *  *
     * @param UpdateMediaMarksRequest $request UpdateMediaMarksRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaMarksResponse UpdateMediaMarksResponse
     */
    public function updateMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarks)) {
            $query['MediaMarks'] = $request->mediaMarks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为媒资修改标注信息
     *  *
     * @param UpdateMediaMarksRequest $request UpdateMediaMarksRequest
     *
     * @return UpdateMediaMarksResponse UpdateMediaMarksResponse
     */
    public function updateMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary 更新媒资到搜索
     *  *
     * @param UpdateMediaToSearchLibRequest $request UpdateMediaToSearchLibRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaToSearchLibResponse UpdateMediaToSearchLibResponse
     */
    public function updateMediaToSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->msgBody)) {
            $query['MsgBody'] = $request->msgBody;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaToSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaToSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新媒资到搜索
     *  *
     * @param UpdateMediaToSearchLibRequest $request UpdateMediaToSearchLibRequest
     *
     * @return UpdateMediaToSearchLibResponse UpdateMediaToSearchLibResponse
     */
    public function updateMediaToSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaToSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary 更新管道配置
     *  *
     * @param UpdatePipelineRequest $request UpdatePipelineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePipelineResponse UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipeline',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新管道配置
     *  *
     * @param UpdatePipelineRequest $request UpdatePipelineRequest
     *
     * @return UpdatePipelineResponse UpdatePipelineResponse
     */
    public function updatePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePipelineWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例的配置
     *  *
     * @param UpdateRtcRobotInstanceRequest $tmpReq  UpdateRtcRobotInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRtcRobotInstanceResponse UpdateRtcRobotInstanceResponse
     */
    public function updateRtcRobotInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateRtcRobotInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->configShrink)) {
            $query['Config'] = $request->configShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRtcRobotInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例的配置
     *  *
     * @param UpdateRtcRobotInstanceRequest $request UpdateRtcRobotInstanceRequest
     *
     * @return UpdateRtcRobotInstanceResponse UpdateRtcRobotInstanceResponse
     */
    public function updateRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary UpdateTemplate
     *  *
     * @param UpdateTemplateRequest $request UpdateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coverUrl)) {
            $query['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->previewMedia)) {
            $query['PreviewMedia'] = $request->previewMedia;
        }
        if (!Utils::isUnset($request->relatedMediaids)) {
            $query['RelatedMediaids'] = $request->relatedMediaids;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary UpdateTemplate
     *  *
     * @param UpdateTemplateRequest $request UpdateTemplateRequest
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary URL拉取上传
     *  *
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
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->mediaMetaData)) {
            $query['MediaMetaData'] = $request->mediaMetaData;
        }
        if (!Utils::isUnset($request->postProcessConfig)) {
            $query['PostProcessConfig'] = $request->postProcessConfig;
        }
        if (!Utils::isUnset($request->uploadTargetConfig)) {
            $query['UploadTargetConfig'] = $request->uploadTargetConfig;
        }
        if (!Utils::isUnset($request->uploadURLs)) {
            $query['UploadURLs'] = $request->uploadURLs;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadMediaByURL',
            'version'     => '2020-11-09',
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
     * @summary URL拉取上传
     *  *
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
     * @summary URL拉取上传媒体流
     *  *
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
            'version'     => '2020-11-09',
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
     * @summary URL拉取上传媒体流
     *  *
     * @param UploadStreamByURLRequest $request UploadStreamByURLRequest
     *
     * @return UploadStreamByURLResponse UploadStreamByURLResponse
     */
    public function uploadStreamByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadStreamByURLWithOptions($request, $runtime);
    }
}
