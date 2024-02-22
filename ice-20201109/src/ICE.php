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
use AlibabaCloud\SDK\ICE\V20201109\Models\StartWorkflowRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartWorkflowResponse;
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
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobShrinkRequest;
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
     * @param AddCategoryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddCategoryResponse
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
     * @param AddEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddEditingProjectMaterialsResponse
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
     * @param AddFavoritePublicMediaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddFavoritePublicMediaResponse
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
     * @param AddFavoritePublicMediaRequest $request
     *
     * @return AddFavoritePublicMediaResponse
     */
    public function addFavoritePublicMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFavoritePublicMediaWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaMarksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddMediaMarksResponse
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
     * @param AddMediaMarksRequest $request
     *
     * @return AddMediaMarksResponse
     */
    public function addMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @param AddTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddTemplateResponse
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
     * @param AddTemplateRequest $request
     *
     * @return AddTemplateResponse
     */
    public function addTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AlterSearchIndexRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AlterSearchIndexResponse
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
     * @param AlterSearchIndexRequest $request
     *
     * @return AlterSearchIndexResponse
     */
    public function alterSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->alterSearchIndexWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetMediaInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchGetMediaInfosResponse
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
     * @param CancelDNAJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CancelDNAJobResponse
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
     * @param CancelDNAJobRequest $request
     *
     * @return CancelDNAJobResponse
     */
    public function cancelDNAJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDNAJobWithOptions($request, $runtime);
    }

    /**
     * @param CancelFavoritePublicMediaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelFavoritePublicMediaResponse
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
     * @param CancelFavoritePublicMediaRequest $request
     *
     * @return CancelFavoritePublicMediaResponse
     */
    public function cancelFavoritePublicMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelFavoritePublicMediaWithOptions($request, $runtime);
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
     * @param CreateAvatarTrainingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAvatarTrainingJobResponse
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
     * @param CreateAvatarTrainingJobRequest $request
     *
     * @return CreateAvatarTrainingJobResponse
     */
    public function createAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAvatarTrainingJobWithOptions($request, $runtime);
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
     * @param CreateCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCustomizedVoiceJobResponse
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
     * @param CreateCustomizedVoiceJobRequest $request
     *
     * @return CreateCustomizedVoiceJobResponse
     */
    public function createCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateDNADBRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateDNADBResponse
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
     * @param CreateDNADBRequest $request
     *
     * @return CreateDNADBResponse
     */
    public function createDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDNADBWithOptions($request, $runtime);
    }

    /**
     * @param CreateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEditingProjectResponse
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
     * @param CreateEditingProjectRequest $request
     *
     * @return CreateEditingProjectResponse
     */
    public function createEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveRecordTemplateRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateLiveRecordTemplateResponse
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
     * @param CreateLiveRecordTemplateRequest $request
     *
     * @return CreateLiveRecordTemplateResponse
     */
    public function createLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveSnapshotTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateLiveSnapshotTemplateResponse
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
     * @param CreateLiveSnapshotTemplateRequest $request
     *
     * @return CreateLiveSnapshotTemplateResponse
     */
    public function createLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveTranscodeTemplateRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateLiveTranscodeTemplateResponse
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
     * @param CreatePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
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
     * @param CreatePipelineRequest $request
     *
     * @return CreatePipelineResponse
     */
    public function createPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPipelineWithOptions($request, $runtime);
    }

    /**
     * @param CreateSearchIndexRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSearchIndexResponse
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
     * @param CreateSearchIndexRequest $request
     *
     * @return CreateSearchIndexResponse
     */
    public function createSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSearchIndexWithOptions($request, $runtime);
    }

    /**
     * @param CreateSearchLibRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSearchLibResponse
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
     * @param CreateSearchLibRequest $request
     *
     * @return CreateSearchLibResponse
     */
    public function createSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSearchLibWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadMediaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateUploadMediaResponse
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
     * @param CreateUploadMediaRequest $request
     *
     * @return CreateUploadMediaResponse
     */
    public function createUploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadMediaWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadStreamRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateUploadStreamResponse
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
     * @param CreateUploadStreamRequest $request
     *
     * @return CreateUploadStreamResponse
     */
    public function createUploadStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadStreamWithOptions($request, $runtime);
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
     * @param DeleteAvatarTrainingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAvatarTrainingJobResponse
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
     * @param DeleteAvatarTrainingJobRequest $request
     *
     * @return DeleteAvatarTrainingJobResponse
     */
    public function deleteAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAvatarTrainingJobWithOptions($request, $runtime);
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
     * @param DeleteCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCustomTemplateResponse
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
     * @param DeleteCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCustomizedVoiceJobResponse
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
     * @param DeleteCustomizedVoiceJobRequest $request
     *
     * @return DeleteCustomizedVoiceJobResponse
     */
    public function deleteCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDNADBRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteDNADBResponse
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
     * @param DeleteDNADBRequest $request
     *
     * @return DeleteDNADBResponse
     */
    public function deleteDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDNADBWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDNAFilesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDNAFilesResponse
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
     * @param DeleteDNAFilesRequest $request
     *
     * @return DeleteDNAFilesResponse
     */
    public function deleteDNAFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDNAFilesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEditingProjectMaterialsResponse
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
     * @param DeleteEditingProjectsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEditingProjectsResponse
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
     * @param DeleteEditingProjectsRequest $request
     *
     * @return DeleteEditingProjectsResponse
     */
    public function deleteEditingProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveRecordFilesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteLiveRecordFilesResponse
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
     * @param DeleteLiveRecordFilesRequest $request
     *
     * @return DeleteLiveRecordFilesResponse
     */
    public function deleteLiveRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveRecordTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteLiveRecordTemplateResponse
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
     * @param DeleteLiveRecordTemplateRequest $request
     *
     * @return DeleteLiveRecordTemplateResponse
     */
    public function deleteLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveSnapshotFilesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteLiveSnapshotFilesResponse
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
     * @param DeleteLiveSnapshotFilesRequest $request
     *
     * @return DeleteLiveSnapshotFilesResponse
     */
    public function deleteLiveSnapshotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSnapshotFilesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveSnapshotTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteLiveSnapshotTemplateResponse
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
     * @param DeleteLiveSnapshotTemplateRequest $request
     *
     * @return DeleteLiveSnapshotTemplateResponse
     */
    public function deleteLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveTranscodeJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteLiveTranscodeJobResponse
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
     * @param DeleteLiveTranscodeJobRequest $request
     *
     * @return DeleteLiveTranscodeJobResponse
     */
    public function deleteLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveTranscodeTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteLiveTranscodeTemplateResponse
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
     * @param DeleteLiveTranscodeTemplateRequest $request
     *
     * @return DeleteLiveTranscodeTemplateResponse
     */
    public function deleteLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaFromSearchLibRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteMediaFromSearchLibResponse
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
     * @param DeleteMediaFromSearchLibRequest $request
     *
     * @return DeleteMediaFromSearchLibResponse
     */
    public function deleteMediaFromSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaFromSearchLibWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMediaInfosResponse
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
     * @param DeleteMediaInfosRequest $request
     *
     * @return DeleteMediaInfosResponse
     */
    public function deleteMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaMarksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMediaMarksResponse
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
     * @param DeleteMediaMarksRequest $request
     *
     * @return DeleteMediaMarksResponse
     */
    public function deleteMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @param DeletePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePipelineResponse
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
     * @param DeletePipelineRequest $request
     *
     * @return DeletePipelineResponse
     */
    public function deletePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePipelineWithOptions($request, $runtime);
    }

    /**
     * @param DeletePlayInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePlayInfoResponse
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
     * @param DeletePlayInfoRequest $request
     *
     * @return DeletePlayInfoResponse
     */
    public function deletePlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePlayInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmartJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSmartJobResponse
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
     * @param DeleteSmartJobRequest $request
     *
     * @return DeleteSmartJobResponse
     */
    public function deleteSmartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmartJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
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
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImsEditUsageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMeterImsEditUsageResponse
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
     * @param DescribeMeterImsEditUsageRequest $request
     *
     * @return DescribeMeterImsEditUsageResponse
     */
    public function describeMeterImsEditUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsEditUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImsMediaConvertUHDUsageRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeMeterImsMediaConvertUHDUsageResponse
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
     * @param DescribeMeterImsMediaConvertUHDUsageRequest $request
     *
     * @return DescribeMeterImsMediaConvertUHDUsageResponse
     */
    public function describeMeterImsMediaConvertUHDUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMediaConvertUHDUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImsMediaConvertUsageRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeMeterImsMediaConvertUsageResponse
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
     * @param DescribeMeterImsMediaConvertUsageRequest $request
     *
     * @return DescribeMeterImsMediaConvertUsageResponse
     */
    public function describeMeterImsMediaConvertUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMediaConvertUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImsMpsAiUsageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMeterImsMpsAiUsageResponse
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
     * @param DescribeMeterImsMpsAiUsageRequest $request
     *
     * @return DescribeMeterImsMpsAiUsageResponse
     */
    public function describeMeterImsMpsAiUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMpsAiUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterImsSummaryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMeterImsSummaryResponse
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
     * @param DescribeMeterImsSummaryRequest $request
     *
     * @return DescribeMeterImsSummaryResponse
     */
    public function describeMeterImsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePlayListResponse
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
     * @param DescribePlayListRequest $request
     *
     * @return DescribePlayListResponse
     */
    public function describePlayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayListWithOptions($request, $runtime);
    }

    /**
     * @param DetectAudioForCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DetectAudioForCustomizedVoiceJobResponse
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
     * @param DetectAudioForCustomizedVoiceJobRequest $request
     *
     * @return DetectAudioForCustomizedVoiceJobResponse
     */
    public function detectAudioForCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectAudioForCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @param DropSearchIndexRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DropSearchIndexResponse
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
     * @param DropSearchIndexRequest $request
     *
     * @return DropSearchIndexResponse
     */
    public function dropSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSearchIndexWithOptions($request, $runtime);
    }

    /**
     * @param DropSearchLibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DropSearchLibResponse
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
     * @param DropSearchLibRequest $request
     *
     * @return DropSearchLibResponse
     */
    public function dropSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSearchLibWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GenerateKMSDataKeyResponse
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
     * @return GenerateKMSDataKeyResponse
     */
    public function generateKMSDataKey()
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateKMSDataKeyWithOptions($runtime);
    }

    /**
     * @param GetAvatarRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetAvatarResponse
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
     * @param GetAvatarRequest $request
     *
     * @return GetAvatarResponse
     */
    public function getAvatar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvatarWithOptions($request, $runtime);
    }

    /**
     * @param GetAvatarTrainingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAvatarTrainingJobResponse
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
     * @param GetAvatarTrainingJobRequest $request
     *
     * @return GetAvatarTrainingJobResponse
     */
    public function getAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @param GetBatchMediaProducingJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetBatchMediaProducingJobResponse
     */
    public function getBatchMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['Signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->signatureMehtod)) {
            $query['SignatureMehtod'] = $request->signatureMehtod;
        }
        if (!Utils::isUnset($request->signatureNonce)) {
            $query['SignatureNonce'] = $request->signatureNonce;
        }
        if (!Utils::isUnset($request->signatureType)) {
            $query['SignatureType'] = $request->signatureType;
        }
        if (!Utils::isUnset($request->signatureVersion)) {
            $query['SignatureVersion'] = $request->signatureVersion;
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
     * @param GetBatchMediaProducingJobRequest $request
     *
     * @return GetBatchMediaProducingJobResponse
     */
    public function getBatchMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchMediaProducingJobWithOptions($request, $runtime);
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
     * @param RuntimeOptions $runtime
     *
     * @return GetContentAnalyzeConfigResponse
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
     * @return GetContentAnalyzeConfigResponse
     */
    public function getContentAnalyzeConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContentAnalyzeConfigWithOptions($runtime);
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
     * @param GetCustomizedVoiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCustomizedVoiceResponse
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
     * @param GetCustomizedVoiceRequest $request
     *
     * @return GetCustomizedVoiceResponse
     */
    public function getCustomizedVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizedVoiceWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomizedVoiceJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetCustomizedVoiceJobResponse
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
     * @param GetCustomizedVoiceJobRequest $request
     *
     * @return GetCustomizedVoiceJobResponse
     */
    public function getCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetDefaultStorageLocationResponse
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
     * @return GetDefaultStorageLocationResponse
     */
    public function getDefaultStorageLocation()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultStorageLocationWithOptions($runtime);
    }

    /**
     * @param GetDemonstrationForCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GetDemonstrationForCustomizedVoiceJobResponse
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
     * @param GetDemonstrationForCustomizedVoiceJobRequest $request
     *
     * @return GetDemonstrationForCustomizedVoiceJobResponse
     */
    public function getDemonstrationForCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDemonstrationForCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @param GetDynamicImageJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDynamicImageJobResponse
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
     * @param GetDynamicImageJobRequest $request
     *
     * @return GetDynamicImageJobResponse
     */
    public function getDynamicImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDynamicImageJobWithOptions($request, $runtime);
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
     * @param RuntimeOptions $runtime
     *
     * @return GetEventCallbackResponse
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
     * @return GetEventCallbackResponse
     */
    public function getEventCallback()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventCallbackWithOptions($runtime);
    }

    /**
     * @param GetLiveEditingIndexFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetLiveEditingIndexFileResponse
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
     * @param GetLiveEditingIndexFileRequest $request
     *
     * @return GetLiveEditingIndexFileResponse
     */
    public function getLiveEditingIndexFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveEditingIndexFileWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveEditingJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetLiveEditingJobResponse
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
     * @param GetLiveEditingJobRequest $request
     *
     * @return GetLiveEditingJobResponse
     */
    public function getLiveEditingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveEditingJobWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveRecordJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLiveRecordJobResponse
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
     * @param GetLiveRecordJobRequest $request
     *
     * @return GetLiveRecordJobResponse
     */
    public function getLiveRecordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRecordJobWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveRecordTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetLiveRecordTemplateResponse
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
     * @param GetLiveRecordTemplateRequest $request
     *
     * @return GetLiveRecordTemplateResponse
     */
    public function getLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveSnapshotJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetLiveSnapshotJobResponse
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
     * @param GetLiveSnapshotJobRequest $request
     *
     * @return GetLiveSnapshotJobResponse
     */
    public function getLiveSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveSnapshotTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetLiveSnapshotTemplateResponse
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
     * @param GetLiveSnapshotTemplateRequest $request
     *
     * @return GetLiveSnapshotTemplateResponse
     */
    public function getLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveTranscodeJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetLiveTranscodeJobResponse
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
     * @param GetLiveTranscodeJobRequest $request
     *
     * @return GetLiveTranscodeJobResponse
     */
    public function getLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveTranscodeTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLiveTranscodeTemplateResponse
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
     * @param GetLiveTranscodeTemplateRequest $request
     *
     * @return GetLiveTranscodeTemplateResponse
     */
    public function getLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetMediaInfoResponse
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
     * @param GetMediaInfoRequest $request
     *
     * @return GetMediaInfoResponse
     */
    public function getMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaInfoJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMediaInfoJobResponse
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
     * @param GetMediaInfoJobRequest $request
     *
     * @return GetMediaInfoJobResponse
     */
    public function getMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaMarksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetMediaMarksResponse
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
     * @param GetMediaMarksRequest $request
     *
     * @return GetMediaMarksResponse
     */
    public function getMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaProducingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMediaProducingJobResponse
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
     * @param GetMediaProducingJobRequest $request
     *
     * @return GetMediaProducingJobResponse
     */
    public function getMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @param GetPackageJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPackageJobResponse
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
     * @param GetPackageJobRequest $request
     *
     * @return GetPackageJobResponse
     */
    public function getPackageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPackageJobWithOptions($request, $runtime);
    }

    /**
     * @param GetPipelineRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPipelineResponse
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
     * @param GetPipelineRequest $request
     *
     * @return GetPipelineResponse
     */
    public function getPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineWithOptions($request, $runtime);
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
     * @param GetPublicMediaInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPublicMediaInfoResponse
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
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPublicMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPublicMediaInfoRequest $request
     *
     * @return GetPublicMediaInfoResponse
     */
    public function getPublicMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetSmartHandleJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSmartHandleJobResponse
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
     * @param GetSmartHandleJobRequest $request
     *
     * @return GetSmartHandleJobResponse
     */
    public function getSmartHandleJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmartHandleJobWithOptions($request, $runtime);
    }

    /**
     * @param GetSnapshotJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSnapshotJobResponse
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
     * @param GetSnapshotJobRequest $request
     *
     * @return GetSnapshotJobResponse
     */
    public function getSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param GetSnapshotUrlsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSnapshotUrlsResponse
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
     * @param GetSnapshotUrlsRequest $request
     *
     * @return GetSnapshotUrlsResponse
     */
    public function getSnapshotUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSnapshotUrlsWithOptions($request, $runtime);
    }

    /**
     * @param GetSystemTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSystemTemplateResponse
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
     * @param GetSystemTemplateRequest $request
     *
     * @return GetSystemTemplateResponse
     */
    public function getSystemTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSystemTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
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
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateMaterialsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetTemplateMaterialsResponse
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
     * @param GetTemplateMaterialsRequest $request
     *
     * @return GetTemplateMaterialsResponse
     */
    public function getTemplateMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateParamsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTemplateParamsResponse
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
     * @param GetTemplateParamsRequest $request
     *
     * @return GetTemplateParamsResponse
     */
    public function getTemplateParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateParamsWithOptions($request, $runtime);
    }

    /**
     * @param GetTranscodeJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTranscodeJobResponse
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
     * @param GetTranscodeJobRequest $request
     *
     * @return GetTranscodeJobResponse
     */
    public function getTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param GetUrlUploadInfosRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUrlUploadInfosResponse
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
     * @param GetUrlUploadInfosRequest $request
     *
     * @return GetUrlUploadInfosResponse
     */
    public function getUrlUploadInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUrlUploadInfosWithOptions($request, $runtime);
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
     * @param GetWorkflowTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWorkflowTaskResponse
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
     * @param InsertMediaToSearchLibRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return InsertMediaToSearchLibResponse
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
     * @param InsertMediaToSearchLibRequest $request
     *
     * @return InsertMediaToSearchLibResponse
     */
    public function insertMediaToSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertMediaToSearchLibWithOptions($request, $runtime);
    }

    /**
     * @param ListAllPublicMediaTagsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAllPublicMediaTagsResponse
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
     * @param ListAllPublicMediaTagsRequest $request
     *
     * @return ListAllPublicMediaTagsResponse
     */
    public function listAllPublicMediaTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllPublicMediaTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListAvatarTrainingJobsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAvatarTrainingJobsResponse
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
     * @param ListAvatarTrainingJobsRequest $request
     *
     * @return ListAvatarTrainingJobsResponse
     */
    public function listAvatarTrainingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvatarTrainingJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListAvatarsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListAvatarsResponse
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
     * @param ListAvatarsRequest $request
     *
     * @return ListAvatarsResponse
     */
    public function listAvatars($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvatarsWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCustomTemplatesResponse
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
     * @param ListCustomTemplatesRequest $request
     *
     * @return ListCustomTemplatesResponse
     */
    public function listCustomTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomizedVoiceJobsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListCustomizedVoiceJobsResponse
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
     * @param ListCustomizedVoiceJobsRequest $request
     *
     * @return ListCustomizedVoiceJobsResponse
     */
    public function listCustomizedVoiceJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizedVoiceJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomizedVoicesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListCustomizedVoicesResponse
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
     * @param ListCustomizedVoicesRequest $request
     *
     * @return ListCustomizedVoicesResponse
     */
    public function listCustomizedVoices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizedVoicesWithOptions($request, $runtime);
    }

    /**
     * @param ListDNADBRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListDNADBResponse
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
     * @param ListDNADBRequest $request
     *
     * @return ListDNADBResponse
     */
    public function listDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDNADBWithOptions($request, $runtime);
    }

    /**
     * @param ListDNAFilesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDNAFilesResponse
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
     * @param ListDNAFilesRequest $request
     *
     * @return ListDNAFilesResponse
     */
    public function listDNAFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDNAFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListDynamicImageJobsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDynamicImageJobsResponse
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
     * @param ListDynamicImageJobsRequest $request
     *
     * @return ListDynamicImageJobsResponse
     */
    public function listDynamicImageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicImageJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRecordFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListLiveRecordFilesResponse
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
     * @param ListLiveRecordFilesRequest $request
     *
     * @return ListLiveRecordFilesResponse
     */
    public function listLiveRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRecordJobsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListLiveRecordJobsResponse
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
     * @param ListLiveRecordJobsRequest $request
     *
     * @return ListLiveRecordJobsResponse
     */
    public function listLiveRecordJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRecordTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListLiveRecordTemplatesResponse
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
     * @param ListLiveRecordTemplatesRequest $request
     *
     * @return ListLiveRecordTemplatesResponse
     */
    public function listLiveRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveSnapshotFilesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListLiveSnapshotFilesResponse
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
     * @param ListLiveSnapshotFilesRequest $request
     *
     * @return ListLiveSnapshotFilesResponse
     */
    public function listLiveSnapshotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveSnapshotJobsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListLiveSnapshotJobsResponse
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
     * @param ListLiveSnapshotJobsRequest $request
     *
     * @return ListLiveSnapshotJobsResponse
     */
    public function listLiveSnapshotJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveSnapshotTemplatesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListLiveSnapshotTemplatesResponse
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
     * @param ListLiveSnapshotTemplatesRequest $request
     *
     * @return ListLiveSnapshotTemplatesResponse
     */
    public function listLiveSnapshotTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveTranscodeJobsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListLiveTranscodeJobsResponse
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
     * @param ListLiveTranscodeJobsRequest $request
     *
     * @return ListLiveTranscodeJobsResponse
     */
    public function listLiveTranscodeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveTranscodeTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListLiveTranscodeTemplatesResponse
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
     * @param ListLiveTranscodeTemplatesRequest $request
     *
     * @return ListLiveTranscodeTemplatesResponse
     */
    public function listLiveTranscodeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveTranscodeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaBasicInfosRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMediaBasicInfosResponse
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
     * @param ListMediaBasicInfosRequest $request
     *
     * @return ListMediaBasicInfosResponse
     */
    public function listMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaInfoJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListMediaInfoJobsResponse
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
     * @param ListMediaInfoJobsRequest $request
     *
     * @return ListMediaInfoJobsResponse
     */
    public function listMediaInfoJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaInfoJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaMarksRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListMediaMarksResponse
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
     * @param ListMediaMarksRequest $request
     *
     * @return ListMediaMarksResponse
     */
    public function listMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @param ListPackageJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPackageJobsResponse
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
     * @param ListPackageJobsRequest $request
     *
     * @return ListPackageJobsResponse
     */
    public function listPackageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPackageJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListPipelinesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
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
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPipelinesWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicMediaBasicInfosRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPublicMediaBasicInfosResponse
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
     * @param ListPublicMediaBasicInfosRequest $request
     *
     * @return ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListSmartJobsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSmartJobsResponse
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
     * @param ListSmartJobsRequest $request
     *
     * @return ListSmartJobsResponse
     */
    public function listSmartJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListSmartSysAvatarModelsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSmartSysAvatarModelsResponse
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
     * @param ListSmartSysAvatarModelsRequest $request
     *
     * @return ListSmartSysAvatarModelsResponse
     */
    public function listSmartSysAvatarModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartSysAvatarModelsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListSmartVoiceGroupsResponse
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
     * @return ListSmartVoiceGroupsResponse
     */
    public function listSmartVoiceGroups()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartVoiceGroupsWithOptions($runtime);
    }

    /**
     * @param ListSnapshotJobsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSnapshotJobsResponse
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
     * @param ListSnapshotJobsRequest $request
     *
     * @return ListSnapshotJobsResponse
     */
    public function listSnapshotJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListSystemTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSystemTemplatesResponse
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
     * @param ListSystemTemplatesRequest $request
     *
     * @return ListSystemTemplatesResponse
     */
    public function listSystemTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
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
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListTranscodeJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListTranscodeJobsResponse
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
     * @param ListTranscodeJobsRequest $request
     *
     * @return ListTranscodeJobsResponse
     */
    public function listTranscodeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @param QueryDNAJobListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDNAJobListResponse
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
     * @param QueryDNAJobListRequest $request
     *
     * @return QueryDNAJobListResponse
     */
    public function queryDNAJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDNAJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryIProductionJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIProductionJobResponse
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
     * @param QueryIProductionJobRequest $request
     *
     * @return QueryIProductionJobResponse
     */
    public function queryIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaCensorJobDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMediaCensorJobDetailResponse
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
     * @param QueryMediaCensorJobDetailRequest $request
     *
     * @return QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaCensorJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMediaCensorJobListResponse
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
     * @param QueryMediaCensorJobListRequest $request
     *
     * @return QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaIndexJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryMediaIndexJobResponse
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
     * @param QueryMediaIndexJobRequest $request
     *
     * @return QueryMediaIndexJobResponse
     */
    public function queryMediaIndexJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaIndexJobWithOptions($request, $runtime);
    }

    /**
     * @param QuerySearchIndexRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySearchIndexResponse
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
     * @param QuerySearchIndexRequest $request
     *
     * @return QuerySearchIndexResponse
     */
    public function querySearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySearchIndexWithOptions($request, $runtime);
    }

    /**
     * @param QuerySearchLibRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QuerySearchLibResponse
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
     * @param QuerySearchLibRequest $request
     *
     * @return QuerySearchLibResponse
     */
    public function querySearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySearchLibWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmarttagJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmarttagJobResponse
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
     * @param QuerySmarttagJobRequest $request
     *
     * @return QuerySmarttagJobResponse
     */
    public function querySmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmarttagJobWithOptions($request, $runtime);
    }

    /**
     * @param RefreshUploadMediaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RefreshUploadMediaResponse
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
     * @param RefreshUploadMediaRequest $request
     *
     * @return RefreshUploadMediaResponse
     */
    public function refreshUploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshUploadMediaWithOptions($request, $runtime);
    }

    /**
     * @param RegisterMediaInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RegisterMediaInfoResponse
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
     * @param RegisterMediaInfoRequest $request
     *
     * @return RegisterMediaInfoResponse
     */
    public function registerMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param RegisterMediaStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RegisterMediaStreamResponse
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
     * @param RegisterMediaStreamRequest $request
     *
     * @return RegisterMediaStreamResponse
     */
    public function registerMediaStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaStreamWithOptions($request, $runtime);
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
     * @param SearchMediaByAILabelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchMediaByAILabelResponse
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
     * @param SearchMediaByAILabelRequest $request
     *
     * @return SearchMediaByAILabelResponse
     */
    public function searchMediaByAILabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByAILabelWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaByFaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchMediaByFaceResponse
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
     * @param SearchMediaByFaceRequest $request
     *
     * @return SearchMediaByFaceResponse
     */
    public function searchMediaByFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByFaceWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaByMultimodalRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchMediaByMultimodalResponse
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
     * @param SearchMediaByMultimodalRequest $request
     *
     * @return SearchMediaByMultimodalResponse
     */
    public function searchMediaByMultimodal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByMultimodalWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaClipByFaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SearchMediaClipByFaceResponse
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
     * @param SearchMediaClipByFaceRequest $request
     *
     * @return SearchMediaClipByFaceResponse
     */
    public function searchMediaClipByFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaClipByFaceWithOptions($request, $runtime);
    }

    /**
     * @param SearchPublicMediaInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SearchPublicMediaInfoResponse
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
     * @param SearchPublicMediaInfoRequest $request
     *
     * @return SearchPublicMediaInfoResponse
     */
    public function searchPublicMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPublicMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param SendLiveSnapshotJobCommandRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SendLiveSnapshotJobCommandResponse
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
     * @param SendLiveSnapshotJobCommandRequest $request
     *
     * @return SendLiveSnapshotJobCommandResponse
     */
    public function sendLiveSnapshotJobCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendLiveSnapshotJobCommandWithOptions($request, $runtime);
    }

    /**
     * @param SendLiveTranscodeJobCommandRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SendLiveTranscodeJobCommandResponse
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
     * @param SendLiveTranscodeJobCommandRequest $request
     *
     * @return SendLiveTranscodeJobCommandResponse
     */
    public function sendLiveTranscodeJobCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendLiveTranscodeJobCommandWithOptions($request, $runtime);
    }

    /**
     * @param SetContentAnalyzeConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetContentAnalyzeConfigResponse
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
     * @param SetContentAnalyzeConfigRequest $request
     *
     * @return SetContentAnalyzeConfigResponse
     */
    public function setContentAnalyzeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setContentAnalyzeConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultCustomTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDefaultCustomTemplateResponse
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
     * @param SetDefaultCustomTemplateRequest $request
     *
     * @return SetDefaultCustomTemplateResponse
     */
    public function setDefaultCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultStorageLocationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetDefaultStorageLocationResponse
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
     * @param SetDefaultStorageLocationRequest $request
     *
     * @return SetDefaultStorageLocationResponse
     */
    public function setDefaultStorageLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultStorageLocationWithOptions($request, $runtime);
    }

    /**
     * @param SetEventCallbackRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetEventCallbackResponse
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
     * @param SetEventCallbackRequest $request
     *
     * @return SetEventCallbackResponse
     */
    public function setEventCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEventCallbackWithOptions($request, $runtime);
    }

    /**
     * @param StartWorkflowRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartWorkflowResponse
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
     * @param StartWorkflowRequest $request
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param SubmitASRJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitASRJobResponse
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
     * @param SubmitASRJobRequest $request
     *
     * @return SubmitASRJobResponse
     */
    public function submitASRJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitASRJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAudioProduceJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitAudioProduceJobResponse
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
     * @param SubmitAudioProduceJobRequest $request
     *
     * @return SubmitAudioProduceJobResponse
     */
    public function submitAudioProduceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAudioProduceJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAvatarTrainingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitAvatarTrainingJobResponse
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
     * @param SubmitAvatarTrainingJobRequest $request
     *
     * @return SubmitAvatarTrainingJobResponse
     */
    public function submitAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAvatarVideoJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitAvatarVideoJobResponse
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
     * @param SubmitAvatarVideoJobRequest $request
     *
     * @return SubmitAvatarVideoJobResponse
     */
    public function submitAvatarVideoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAvatarVideoJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitBatchMediaProducingJobRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitBatchMediaProducingJobResponse
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
     * @param SubmitBatchMediaProducingJobRequest $request
     *
     * @return SubmitBatchMediaProducingJobResponse
     */
    public function submitBatchMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitBatchMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitCustomizedVoiceJobResponse
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
     * @param SubmitCustomizedVoiceJobRequest $request
     *
     * @return SubmitCustomizedVoiceJobResponse
     */
    public function submitCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDNAJobRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitDNAJobResponse
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
     * @param SubmitDNAJobRequest $request
     *
     * @return SubmitDNAJobResponse
     */
    public function submitDNAJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDNAJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDynamicChartJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDynamicChartJobResponse
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
     * @param SubmitDynamicChartJobRequest $request
     *
     * @return SubmitDynamicChartJobResponse
     */
    public function submitDynamicChartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDynamicChartJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDynamicImageJobRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDynamicImageJobResponse
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
     * @param SubmitIProductionJobRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitIProductionJobResponse
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
     * @param SubmitIProductionJobRequest $request
     *
     * @return SubmitIProductionJobResponse
     */
    public function submitIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitLiveEditingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitLiveEditingJobResponse
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
     * @param SubmitLiveEditingJobRequest $request
     *
     * @return SubmitLiveEditingJobResponse
     */
    public function submitLiveEditingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveEditingJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitLiveRecordJobRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitLiveRecordJobResponse
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
     * @param SubmitLiveRecordJobRequest $request
     *
     * @return SubmitLiveRecordJobResponse
     */
    public function submitLiveRecordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveRecordJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitLiveSnapshotJobRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitLiveSnapshotJobResponse
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
     * @param SubmitLiveSnapshotJobRequest $request
     *
     * @return SubmitLiveSnapshotJobResponse
     */
    public function submitLiveSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitLiveTranscodeJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitLiveTranscodeJobResponse
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
     * @param SubmitLiveTranscodeJobRequest $request
     *
     * @return SubmitLiveTranscodeJobResponse
     */
    public function submitLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaCensorJobRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitMediaCensorJobResponse
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
     * @param SubmitMediaCensorJobRequest $request
     *
     * @return SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaCensorJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaInfoJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitMediaInfoJobResponse
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
     * @param SubmitMediaInfoJobRequest $request
     *
     * @return SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaProducingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitMediaProducingJobResponse
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
     * @param SubmitMediaProducingJobRequest $request
     *
     * @return SubmitMediaProducingJobResponse
     */
    public function submitMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitPackageJobRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitPackageJobResponse
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
     * @param SubmitPackageJobRequest $request
     *
     * @return SubmitPackageJobResponse
     */
    public function submitPackageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPackageJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSmarttagJobRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSmarttagJobResponse
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
     * @param SubmitSmarttagJobRequest $request
     *
     * @return SubmitSmarttagJobResponse
     */
    public function submitSmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmarttagJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSnapshotJobRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSnapshotJobResponse
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
     * @param SubmitStandardCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SubmitStandardCustomizedVoiceJobResponse
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
     * @param SubmitStandardCustomizedVoiceJobRequest $request
     *
     * @return SubmitStandardCustomizedVoiceJobResponse
     */
    public function submitStandardCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitStandardCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSyncMediaInfoJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitSyncMediaInfoJobResponse
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
     * @param SubmitSyncMediaInfoJobRequest $request
     *
     * @return SubmitSyncMediaInfoJobResponse
     */
    public function submitSyncMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSyncMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTranscodeJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitTranscodeJobResponse
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
     * @param SubmitTranscodeJobRequest $request
     *
     * @return SubmitTranscodeJobResponse
     */
    public function submitTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAvatarTrainingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAvatarTrainingJobResponse
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
     * @param UpdateAvatarTrainingJobRequest $request
     *
     * @return UpdateAvatarTrainingJobResponse
     */
    public function updateAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAvatarTrainingJobWithOptions($request, $runtime);
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
     * @param UpdateCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCustomTemplateResponse
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
     * @param UpdateCustomTemplateRequest $request
     *
     * @return UpdateCustomTemplateResponse
     */
    public function updateCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCustomizedVoiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateCustomizedVoiceResponse
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
     * @param UpdateCustomizedVoiceRequest $request
     *
     * @return UpdateCustomizedVoiceResponse
     */
    public function updateCustomizedVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomizedVoiceWithOptions($request, $runtime);
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
     * @param UpdateLiveRecordTemplateRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLiveRecordTemplateResponse
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
     * @param UpdateLiveRecordTemplateRequest $request
     *
     * @return UpdateLiveRecordTemplateResponse
     */
    public function updateLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveSnapshotTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateLiveSnapshotTemplateResponse
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
     * @param UpdateLiveSnapshotTemplateRequest $request
     *
     * @return UpdateLiveSnapshotTemplateResponse
     */
    public function updateLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveTranscodeJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateLiveTranscodeJobResponse
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
     * @param UpdateLiveTranscodeJobRequest $request
     *
     * @return UpdateLiveTranscodeJobResponse
     */
    public function updateLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveTranscodeTemplateRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLiveTranscodeTemplateResponse
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
     * @param UpdateLiveTranscodeTemplateRequest $request
     *
     * @return UpdateLiveTranscodeTemplateResponse
     */
    public function updateLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMediaInfoResponse
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
     * @param UpdateMediaInfoRequest $request
     *
     * @return UpdateMediaInfoResponse
     */
    public function updateMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaMarksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMediaMarksResponse
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
     * @param UpdateMediaMarksRequest $request
     *
     * @return UpdateMediaMarksResponse
     */
    public function updateMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaToSearchLibRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateMediaToSearchLibResponse
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
     * @param UpdateMediaToSearchLibRequest $request
     *
     * @return UpdateMediaToSearchLibResponse
     */
    public function updateMediaToSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaToSearchLibWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePipelineResponse
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
     * @param UpdatePipelineRequest $request
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePipelineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
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
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
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
     * @param UploadStreamByURLRequest $request
     *
     * @return UploadStreamByURLResponse
     */
    public function uploadStreamByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadStreamByURLWithOptions($request, $runtime);
    }
}
