<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Mts\V20140618\Models\ActivateMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ActivateMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddAsrPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddAsrPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddCategoryRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddCategoryResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddCensorPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddCensorPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddCoverPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddCoverPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMCTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMCTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaTagRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaTagResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddPornPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddPornPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddSmarttagTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddSmarttagTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTerrorismPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTerrorismPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddWaterMarkTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\BindInputBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\BindInputBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\BindOutputBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\BindOutputBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CancelJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CancelJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CategoryTreeRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CategoryTreeResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CheckResourceRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CheckResourceResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateFpShotDBRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateFpShotDBResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateMcuTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateMcuTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateSessionRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateSessionResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeactivateMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeactivateMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DecryptKeyRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DecryptKeyResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMCTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMCTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMcuJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMcuJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMcuTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMcuTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaTagRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaTagResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeletePipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteSmarttagTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteSmarttagTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteWaterMarkTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\DescribeMtsUserResourcePackageRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DescribeMtsUserResourcePackageResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetLicenseRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetLicenseResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetPackageRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetPackageResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllCategoryRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllCategoryResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAllMediaBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAsrPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListAsrPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCensorPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCensorPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCoverPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCoverPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotNotaryRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotNotaryResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListPornPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListPornPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListTerrorismPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListTerrorismPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\LogicalDeleteResourceRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\LogicalDeleteResourceResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\PhysicalDeleteResourceRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\PhysicalDeleteResourceResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\PlayerAuthRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\PlayerAuthResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\PlayInfoRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\PlayInfoResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrPipelineListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrPipelineListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAuthConfigRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAuthConfigResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorPipelineListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorPipelineListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverPipelineListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverPipelineListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryIProductionJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryIProductionJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryIProductionJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryIProductionJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaFpDeleteJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaFpDeleteJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaInfoJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowExecutionListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowExecutionListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornPipelineListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPornPipelineListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySubtitleJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySubtitleJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismPipelineListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismPipelineListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoGifJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoGifJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSplitJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSplitJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryWaterMarkTemplateListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\RefreshCdnDomainConfigsCacheRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\RefreshCdnDomainConfigsCacheResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomFaceRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterCustomFaceResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailPersonResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailScenarioRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\RegisterMediaDetailScenarioResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportAnnotationJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportAnnotationJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportCensorJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportCensorJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportCoverJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportCoverJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportFacerecogJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportFacerecogJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportFpShotJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportFpShotJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportMediaDetailJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportMediaDetailJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportPornJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportPornJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportTagJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportTagJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportTerrorismJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportTerrorismJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportVideoSplitJobResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ReportVideoSplitJobResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchMediaRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchMediaResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchWaterMarkTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SetAuthConfigRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SetAuthConfigResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\StopIProductionJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\StopIProductionJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnnotationJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnnotationJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAsrJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAsrJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitBeautifyJobsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitBeautifyJobsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitCoverJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitCoverJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFacerecogJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFacerecogJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpCompareJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpCompareJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpShotJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpShotJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageQualityJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageQualityJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageSearchJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageSearchJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitIProductionJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitIProductionJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMCJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMCJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMcuJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMcuJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaCensorJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaCensorJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaDetailJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaDetailJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaFpDeleteJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaFpDeleteJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaInfoJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaInfoJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitPornJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitPornJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSmarttagJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSmarttagJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSubtitleJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSubtitleJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTagJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTagJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTerrorismJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitTerrorismJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoGifJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoGifJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoSplitJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoSplitJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoSummaryJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoSummaryJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\TagCustomPersonRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\TagCustomPersonResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnbindInputBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnbindInputBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnbindOutputBucketRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnbindOutputBucketResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnregisterCustomFaceRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UnregisterCustomFaceResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateAsrPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateAsrPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateCategoryNameRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateCategoryNameResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateCensorPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateCensorPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateCoverPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateCoverPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMCTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMCTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMcuTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMcuTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaCategoryRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaCategoryResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaCoverRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaCoverResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaPublishStateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaPublishStateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowTriggerModeRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateMediaWorkflowTriggerModeResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePornPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePornPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateSmarttagTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateSmarttagTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateTerrorismPipelineRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateTerrorismPipelineResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateWaterMarkTemplateRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateWaterMarkTemplateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Mts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'mts.ap-northeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'mts.ap-northeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'mts.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'mts.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'mts.aliyuncs.com',
            'cn-beijing-gov-1'            => 'mts.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'mts.aliyuncs.com',
            'cn-chengdu'                  => 'mts.aliyuncs.com',
            'cn-edge-1'                   => 'mts.aliyuncs.com',
            'cn-fujian'                   => 'mts.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'mts.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'mts.aliyuncs.com',
            'cn-hangzhou-finance'         => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mts.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mts.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'mts.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'mts.aliyuncs.com',
            'cn-north-2-gov-1'            => 'mts.aliyuncs.com',
            'cn-qingdao'                  => 'mts.aliyuncs.com',
            'cn-qingdao-nebula'           => 'mts.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'mts.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'mts.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'mts.aliyuncs.com',
            'cn-shanghai-inner'           => 'mts.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mts.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'mts.aliyuncs.com',
            'cn-shenzhen-inner'           => 'mts.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'mts.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'mts.aliyuncs.com',
            'cn-wuhan'                    => 'mts.aliyuncs.com',
            'cn-yushanfang'               => 'mts.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'mts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'mts.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'mts.aliyuncs.com',
            'eu-west-1-oxs'               => 'mts.ap-northeast-1.aliyuncs.com',
            'me-east-1'                   => 'mts.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'mts.ap-northeast-1.aliyuncs.com',
            'us-east-1'                   => 'mts.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivateMediaWorkflowRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ActivateMediaWorkflowResponse
     */
    public function activateMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActivateMediaWorkflowResponse::fromMap($this->doRPCRequest('ActivateMediaWorkflow', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ActivateMediaWorkflowRequest $request
     *
     * @return ActivateMediaWorkflowResponse
     */
    public function activateMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param AddAsrPipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddAsrPipelineResponse
     */
    public function addAsrPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAsrPipelineResponse::fromMap($this->doRPCRequest('AddAsrPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddAsrPipelineRequest $request
     *
     * @return AddAsrPipelineResponse
     */
    public function addAsrPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAsrPipelineWithOptions($request, $runtime);
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

        return AddCategoryResponse::fromMap($this->doRPCRequest('AddCategory', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddCensorPipelineRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddCensorPipelineResponse
     */
    public function addCensorPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCensorPipelineResponse::fromMap($this->doRPCRequest('AddCensorPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddCensorPipelineRequest $request
     *
     * @return AddCensorPipelineResponse
     */
    public function addCensorPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCensorPipelineWithOptions($request, $runtime);
    }

    /**
     * @param AddCoverPipelineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddCoverPipelineResponse
     */
    public function addCoverPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCoverPipelineResponse::fromMap($this->doRPCRequest('AddCoverPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddCoverPipelineRequest $request
     *
     * @return AddCoverPipelineResponse
     */
    public function addCoverPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCoverPipelineWithOptions($request, $runtime);
    }

    /**
     * @param AddMCTemplateRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddMCTemplateResponse
     */
    public function addMCTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddMCTemplateResponse::fromMap($this->doRPCRequest('AddMCTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddMCTemplateRequest $request
     *
     * @return AddMCTemplateResponse
     */
    public function addMCTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMCTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddMediaResponse
     */
    public function addMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddMediaResponse::fromMap($this->doRPCRequest('AddMedia', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddMediaRequest $request
     *
     * @return AddMediaResponse
     */
    public function addMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaTagRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddMediaTagResponse
     */
    public function addMediaTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddMediaTagResponse::fromMap($this->doRPCRequest('AddMediaTag', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddMediaTagRequest $request
     *
     * @return AddMediaTagResponse
     */
    public function addMediaTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaTagWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaWorkflowRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddMediaWorkflowResponse
     */
    public function addMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddMediaWorkflowResponse::fromMap($this->doRPCRequest('AddMediaWorkflow', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddMediaWorkflowRequest $request
     *
     * @return AddMediaWorkflowResponse
     */
    public function addMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param AddPipelineRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddPipelineResponse
     */
    public function addPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddPipelineResponse::fromMap($this->doRPCRequest('AddPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddPipelineRequest $request
     *
     * @return AddPipelineResponse
     */
    public function addPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPipelineWithOptions($request, $runtime);
    }

    /**
     * @param AddPornPipelineRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddPornPipelineResponse
     */
    public function addPornPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddPornPipelineResponse::fromMap($this->doRPCRequest('AddPornPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddPornPipelineRequest $request
     *
     * @return AddPornPipelineResponse
     */
    public function addPornPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPornPipelineWithOptions($request, $runtime);
    }

    /**
     * @param AddSmarttagTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddSmarttagTemplateResponse
     */
    public function addSmarttagTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSmarttagTemplateResponse::fromMap($this->doRPCRequest('AddSmarttagTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddSmarttagTemplateRequest $request
     *
     * @return AddSmarttagTemplateResponse
     */
    public function addSmarttagTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmarttagTemplateWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTemplateResponse::fromMap($this->doRPCRequest('AddTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddTerrorismPipelineRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddTerrorismPipelineResponse
     */
    public function addTerrorismPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTerrorismPipelineResponse::fromMap($this->doRPCRequest('AddTerrorismPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddTerrorismPipelineRequest $request
     *
     * @return AddTerrorismPipelineResponse
     */
    public function addTerrorismPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTerrorismPipelineWithOptions($request, $runtime);
    }

    /**
     * @param AddWaterMarkTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddWaterMarkTemplateResponse
     */
    public function addWaterMarkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddWaterMarkTemplateResponse::fromMap($this->doRPCRequest('AddWaterMarkTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddWaterMarkTemplateRequest $request
     *
     * @return AddWaterMarkTemplateResponse
     */
    public function addWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWaterMarkTemplateWithOptions($request, $runtime);
    }

    /**
     * @param BindInputBucketRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BindInputBucketResponse
     */
    public function bindInputBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindInputBucketResponse::fromMap($this->doRPCRequest('BindInputBucket', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindInputBucketRequest $request
     *
     * @return BindInputBucketResponse
     */
    public function bindInputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindInputBucketWithOptions($request, $runtime);
    }

    /**
     * @param BindOutputBucketRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindOutputBucketResponse
     */
    public function bindOutputBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindOutputBucketResponse::fromMap($this->doRPCRequest('BindOutputBucket', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindOutputBucketRequest $request
     *
     * @return BindOutputBucketResponse
     */
    public function bindOutputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindOutputBucketWithOptions($request, $runtime);
    }

    /**
     * @param CancelJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CancelJobResponse
     */
    public function cancelJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelJobResponse::fromMap($this->doRPCRequest('CancelJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelJobRequest $request
     *
     * @return CancelJobResponse
     */
    public function cancelJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelJobWithOptions($request, $runtime);
    }

    /**
     * @param CategoryTreeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CategoryTreeResponse
     */
    public function categoryTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CategoryTreeResponse::fromMap($this->doRPCRequest('CategoryTree', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CategoryTreeRequest $request
     *
     * @return CategoryTreeResponse
     */
    public function categoryTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->categoryTreeWithOptions($request, $runtime);
    }

    /**
     * @param CheckResourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckResourceResponse
     */
    public function checkResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckResourceResponse::fromMap($this->doRPCRequest('CheckResource', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckResourceRequest $request
     *
     * @return CheckResourceResponse
     */
    public function checkResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateFpShotDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFpShotDBResponse
     */
    public function createFpShotDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFpShotDBResponse::fromMap($this->doRPCRequest('CreateFpShotDB', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFpShotDBRequest $request
     *
     * @return CreateFpShotDBResponse
     */
    public function createFpShotDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFpShotDBWithOptions($request, $runtime);
    }

    /**
     * @param CreateMcuTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMcuTemplateResponse
     */
    public function createMcuTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMcuTemplateResponse::fromMap($this->doRPCRequest('CreateMcuTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMcuTemplateRequest $request
     *
     * @return CreateMcuTemplateResponse
     */
    public function createMcuTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcuTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateSessionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSessionResponse
     */
    public function createSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSessionResponse::fromMap($this->doRPCRequest('CreateSession', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSessionRequest $request
     *
     * @return CreateSessionResponse
     */
    public function createSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSessionWithOptions($request, $runtime);
    }

    /**
     * @param DeactivateMediaWorkflowRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeactivateMediaWorkflowResponse
     */
    public function deactivateMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeactivateMediaWorkflowResponse::fromMap($this->doRPCRequest('DeactivateMediaWorkflow', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeactivateMediaWorkflowRequest $request
     *
     * @return DeactivateMediaWorkflowResponse
     */
    public function deactivateMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param DecryptKeyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DecryptKeyResponse
     */
    public function decryptKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DecryptKeyResponse::fromMap($this->doRPCRequest('DecryptKey', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DecryptKeyRequest $request
     *
     * @return DecryptKeyResponse
     */
    public function decryptKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decryptKeyWithOptions($request, $runtime);
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

        return DeleteCategoryResponse::fromMap($this->doRPCRequest('DeleteCategory', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteMCTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMCTemplateResponse
     */
    public function deleteMCTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMCTemplateResponse::fromMap($this->doRPCRequest('DeleteMCTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMCTemplateRequest $request
     *
     * @return DeleteMCTemplateResponse
     */
    public function deleteMCTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMCTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMcuJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMcuJobResponse
     */
    public function deleteMcuJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMcuJobResponse::fromMap($this->doRPCRequest('DeleteMcuJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMcuJobRequest $request
     *
     * @return DeleteMcuJobResponse
     */
    public function deleteMcuJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcuJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMcuTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMcuTemplateResponse
     */
    public function deleteMcuTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMcuTemplateResponse::fromMap($this->doRPCRequest('DeleteMcuTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMcuTemplateRequest $request
     *
     * @return DeleteMcuTemplateResponse
     */
    public function deleteMcuTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcuTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteMediaResponse
     */
    public function deleteMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMediaResponse::fromMap($this->doRPCRequest('DeleteMedia', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMediaRequest $request
     *
     * @return DeleteMediaResponse
     */
    public function deleteMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaTagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMediaTagResponse
     */
    public function deleteMediaTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMediaTagResponse::fromMap($this->doRPCRequest('DeleteMediaTag', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMediaTagRequest $request
     *
     * @return DeleteMediaTagResponse
     */
    public function deleteMediaTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMediaWorkflowResponse
     */
    public function deleteMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMediaWorkflowResponse::fromMap($this->doRPCRequest('DeleteMediaWorkflow', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMediaWorkflowRequest $request
     *
     * @return DeleteMediaWorkflowResponse
     */
    public function deleteMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaWorkflowWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePipelineResponse::fromMap($this->doRPCRequest('DeletePipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteSmarttagTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSmarttagTemplateResponse
     */
    public function deleteSmarttagTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSmarttagTemplateResponse::fromMap($this->doRPCRequest('DeleteSmarttagTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSmarttagTemplateRequest $request
     *
     * @return DeleteSmarttagTemplateResponse
     */
    public function deleteSmarttagTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmarttagTemplateWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTemplateResponse::fromMap($this->doRPCRequest('DeleteTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteWaterMarkTemplateResponse
     */
    public function deleteWaterMarkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWaterMarkTemplateResponse::fromMap($this->doRPCRequest('DeleteWaterMarkTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteWaterMarkTemplateRequest $request
     *
     * @return DeleteWaterMarkTemplateResponse
     */
    public function deleteWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaterMarkTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMtsUserResourcePackageRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMtsUserResourcePackageResponse
     */
    public function describeMtsUserResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMtsUserResourcePackageResponse::fromMap($this->doRPCRequest('DescribeMtsUserResourcePackage', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMtsUserResourcePackageRequest $request
     *
     * @return DescribeMtsUserResourcePackageResponse
     */
    public function describeMtsUserResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMtsUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @param GetLicenseRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetLicenseResponse
     */
    public function getLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLicenseResponse::fromMap($this->doRPCRequest('GetLicense', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLicenseRequest $request
     *
     * @return GetLicenseResponse
     */
    public function getLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLicenseWithOptions($request, $runtime);
    }

    /**
     * @param GetPackageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetPackageResponse
     */
    public function getPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPackageResponse::fromMap($this->doRPCRequest('GetPackage', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPackageRequest $request
     *
     * @return GetPackageResponse
     */
    public function getPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPackageWithOptions($request, $runtime);
    }

    /**
     * @param ListAllCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAllCategoryResponse
     */
    public function listAllCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAllCategoryResponse::fromMap($this->doRPCRequest('ListAllCategory', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAllCategoryRequest $request
     *
     * @return ListAllCategoryResponse
     */
    public function listAllCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ListAllMediaBucketRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAllMediaBucketResponse
     */
    public function listAllMediaBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAllMediaBucketResponse::fromMap($this->doRPCRequest('ListAllMediaBucket', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAllMediaBucketRequest $request
     *
     * @return ListAllMediaBucketResponse
     */
    public function listAllMediaBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllMediaBucketWithOptions($request, $runtime);
    }

    /**
     * @param ListAsrPipelineRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAsrPipelineResponse
     */
    public function listAsrPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAsrPipelineResponse::fromMap($this->doRPCRequest('ListAsrPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAsrPipelineRequest $request
     *
     * @return ListAsrPipelineResponse
     */
    public function listAsrPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsrPipelineWithOptions($request, $runtime);
    }

    /**
     * @param ListCensorPipelineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListCensorPipelineResponse
     */
    public function listCensorPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCensorPipelineResponse::fromMap($this->doRPCRequest('ListCensorPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCensorPipelineRequest $request
     *
     * @return ListCensorPipelineResponse
     */
    public function listCensorPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCensorPipelineWithOptions($request, $runtime);
    }

    /**
     * @param ListCoverPipelineRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCoverPipelineResponse
     */
    public function listCoverPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCoverPipelineResponse::fromMap($this->doRPCRequest('ListCoverPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCoverPipelineRequest $request
     *
     * @return ListCoverPipelineResponse
     */
    public function listCoverPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCoverPipelineWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomPersonsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCustomPersonsResponse
     */
    public function listCustomPersonsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCustomPersonsResponse::fromMap($this->doRPCRequest('ListCustomPersons', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCustomPersonsRequest $request
     *
     * @return ListCustomPersonsResponse
     */
    public function listCustomPersons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomPersonsWithOptions($request, $runtime);
    }

    /**
     * @param ListFpShotDBRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListFpShotDBResponse
     */
    public function listFpShotDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFpShotDBResponse::fromMap($this->doRPCRequest('ListFpShotDB', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFpShotDBRequest $request
     *
     * @return ListFpShotDBResponse
     */
    public function listFpShotDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFpShotDBWithOptions($request, $runtime);
    }

    /**
     * @param ListFpShotNotaryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFpShotNotaryResponse
     */
    public function listFpShotNotaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFpShotNotaryResponse::fromMap($this->doRPCRequest('ListFpShotNotary', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFpShotNotaryRequest $request
     *
     * @return ListFpShotNotaryResponse
     */
    public function listFpShotNotary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFpShotNotaryWithOptions($request, $runtime);
    }

    /**
     * @param ListJobRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListJobResponse
     */
    public function listJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListJobResponse::fromMap($this->doRPCRequest('ListJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListJobRequest $request
     *
     * @return ListJobResponse
     */
    public function listJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListMediaResponse
     */
    public function listMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMediaResponse::fromMap($this->doRPCRequest('ListMedia', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMediaRequest $request
     *
     * @return ListMediaResponse
     */
    public function listMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaWorkflowExecutionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListMediaWorkflowExecutionsResponse
     */
    public function listMediaWorkflowExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMediaWorkflowExecutionsResponse::fromMap($this->doRPCRequest('ListMediaWorkflowExecutions', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMediaWorkflowExecutionsRequest $request
     *
     * @return ListMediaWorkflowExecutionsResponse
     */
    public function listMediaWorkflowExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaWorkflowExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param ListPornPipelineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListPornPipelineResponse
     */
    public function listPornPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPornPipelineResponse::fromMap($this->doRPCRequest('ListPornPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPornPipelineRequest $request
     *
     * @return ListPornPipelineResponse
     */
    public function listPornPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPornPipelineWithOptions($request, $runtime);
    }

    /**
     * @param ListTerrorismPipelineRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTerrorismPipelineResponse
     */
    public function listTerrorismPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTerrorismPipelineResponse::fromMap($this->doRPCRequest('ListTerrorismPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTerrorismPipelineRequest $request
     *
     * @return ListTerrorismPipelineResponse
     */
    public function listTerrorismPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTerrorismPipelineWithOptions($request, $runtime);
    }

    /**
     * @param LogicalDeleteResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return LogicalDeleteResourceResponse
     */
    public function logicalDeleteResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LogicalDeleteResourceResponse::fromMap($this->doRPCRequest('LogicalDeleteResource', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param LogicalDeleteResourceRequest $request
     *
     * @return LogicalDeleteResourceResponse
     */
    public function logicalDeleteResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->logicalDeleteResourceWithOptions($request, $runtime);
    }

    /**
     * @param PhysicalDeleteResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PhysicalDeleteResourceResponse
     */
    public function physicalDeleteResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PhysicalDeleteResourceResponse::fromMap($this->doRPCRequest('PhysicalDeleteResource', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PhysicalDeleteResourceRequest $request
     *
     * @return PhysicalDeleteResourceResponse
     */
    public function physicalDeleteResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->physicalDeleteResourceWithOptions($request, $runtime);
    }

    /**
     * @param PlayerAuthRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PlayerAuthResponse
     */
    public function playerAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PlayerAuthResponse::fromMap($this->doRPCRequest('PlayerAuth', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PlayerAuthRequest $request
     *
     * @return PlayerAuthResponse
     */
    public function playerAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->playerAuthWithOptions($request, $runtime);
    }

    /**
     * @param PlayInfoRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return PlayInfoResponse
     */
    public function playInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PlayInfoResponse::fromMap($this->doRPCRequest('PlayInfo', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PlayInfoRequest $request
     *
     * @return PlayInfoResponse
     */
    public function playInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->playInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryAnalysisJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAnalysisJobListResponse
     */
    public function queryAnalysisJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAnalysisJobListResponse::fromMap($this->doRPCRequest('QueryAnalysisJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAnalysisJobListRequest $request
     *
     * @return QueryAnalysisJobListResponse
     */
    public function queryAnalysisJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAnalysisJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryAnnotationJobListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryAnnotationJobListResponse
     */
    public function queryAnnotationJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAnnotationJobListResponse::fromMap($this->doRPCRequest('QueryAnnotationJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAnnotationJobListRequest $request
     *
     * @return QueryAnnotationJobListResponse
     */
    public function queryAnnotationJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAnnotationJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryAsrJobListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryAsrJobListResponse
     */
    public function queryAsrJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAsrJobListResponse::fromMap($this->doRPCRequest('QueryAsrJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAsrJobListRequest $request
     *
     * @return QueryAsrJobListResponse
     */
    public function queryAsrJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAsrJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryAsrPipelineListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAsrPipelineListResponse
     */
    public function queryAsrPipelineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAsrPipelineListResponse::fromMap($this->doRPCRequest('QueryAsrPipelineList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAsrPipelineListRequest $request
     *
     * @return QueryAsrPipelineListResponse
     */
    public function queryAsrPipelineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAsrPipelineListWithOptions($request, $runtime);
    }

    /**
     * @param QueryAuthConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryAuthConfigResponse
     */
    public function queryAuthConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAuthConfigResponse::fromMap($this->doRPCRequest('QueryAuthConfig', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAuthConfigRequest $request
     *
     * @return QueryAuthConfigResponse
     */
    public function queryAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuthConfigWithOptions($request, $runtime);
    }

    /**
     * @param QueryCensorJobListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryCensorJobListResponse
     */
    public function queryCensorJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCensorJobListResponse::fromMap($this->doRPCRequest('QueryCensorJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCensorJobListRequest $request
     *
     * @return QueryCensorJobListResponse
     */
    public function queryCensorJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCensorJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryCensorPipelineListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCensorPipelineListResponse
     */
    public function queryCensorPipelineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCensorPipelineListResponse::fromMap($this->doRPCRequest('QueryCensorPipelineList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCensorPipelineListRequest $request
     *
     * @return QueryCensorPipelineListResponse
     */
    public function queryCensorPipelineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCensorPipelineListWithOptions($request, $runtime);
    }

    /**
     * @param QueryComplexJobListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryComplexJobListResponse
     */
    public function queryComplexJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryComplexJobListResponse::fromMap($this->doRPCRequest('QueryComplexJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryComplexJobListRequest $request
     *
     * @return QueryComplexJobListResponse
     */
    public function queryComplexJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryComplexJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryCoverJobListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryCoverJobListResponse
     */
    public function queryCoverJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCoverJobListResponse::fromMap($this->doRPCRequest('QueryCoverJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCoverJobListRequest $request
     *
     * @return QueryCoverJobListResponse
     */
    public function queryCoverJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCoverJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryCoverPipelineListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryCoverPipelineListResponse
     */
    public function queryCoverPipelineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCoverPipelineListResponse::fromMap($this->doRPCRequest('QueryCoverPipelineList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCoverPipelineListRequest $request
     *
     * @return QueryCoverPipelineListResponse
     */
    public function queryCoverPipelineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCoverPipelineListWithOptions($request, $runtime);
    }

    /**
     * @param QueryEditingJobListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryEditingJobListResponse
     */
    public function queryEditingJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEditingJobListResponse::fromMap($this->doRPCRequest('QueryEditingJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryEditingJobListRequest $request
     *
     * @return QueryEditingJobListResponse
     */
    public function queryEditingJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEditingJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryFacerecogJobListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryFacerecogJobListResponse
     */
    public function queryFacerecogJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFacerecogJobListResponse::fromMap($this->doRPCRequest('QueryFacerecogJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFacerecogJobListRequest $request
     *
     * @return QueryFacerecogJobListResponse
     */
    public function queryFacerecogJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFacerecogJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryFpCompareJobListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryFpCompareJobListResponse
     */
    public function queryFpCompareJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFpCompareJobListResponse::fromMap($this->doRPCRequest('QueryFpCompareJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFpCompareJobListRequest $request
     *
     * @return QueryFpCompareJobListResponse
     */
    public function queryFpCompareJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFpCompareJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryFpImportResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryFpImportResultResponse
     */
    public function queryFpImportResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFpImportResultResponse::fromMap($this->doRPCRequest('QueryFpImportResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFpImportResultRequest $request
     *
     * @return QueryFpImportResultResponse
     */
    public function queryFpImportResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFpImportResultWithOptions($request, $runtime);
    }

    /**
     * @param QueryFpShotJobListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryFpShotJobListResponse
     */
    public function queryFpShotJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFpShotJobListResponse::fromMap($this->doRPCRequest('QueryFpShotJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFpShotJobListRequest $request
     *
     * @return QueryFpShotJobListResponse
     */
    public function queryFpShotJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFpShotJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryImageSearchJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryImageSearchJobListResponse
     */
    public function queryImageSearchJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryImageSearchJobListResponse::fromMap($this->doRPCRequest('QueryImageSearchJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryImageSearchJobListRequest $request
     *
     * @return QueryImageSearchJobListResponse
     */
    public function queryImageSearchJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryImageSearchJobListWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIProductionJobResponse::fromMap($this->doRPCRequest('QueryIProductionJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryIProductionJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryIProductionJobListResponse
     */
    public function queryIProductionJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIProductionJobListResponse::fromMap($this->doRPCRequest('QueryIProductionJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryIProductionJobListRequest $request
     *
     * @return QueryIProductionJobListResponse
     */
    public function queryIProductionJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIProductionJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryJobListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryJobListResponse
     */
    public function queryJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryJobListResponse::fromMap($this->doRPCRequest('QueryJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryJobListRequest $request
     *
     * @return QueryJobListResponse
     */
    public function queryJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMCJobListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryMCJobListResponse
     */
    public function queryMCJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMCJobListResponse::fromMap($this->doRPCRequest('QueryMCJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMCJobListRequest $request
     *
     * @return QueryMCJobListResponse
     */
    public function queryMCJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMCJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMCTemplateListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryMCTemplateListResponse
     */
    public function queryMCTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMCTemplateListResponse::fromMap($this->doRPCRequest('QueryMCTemplateList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMCTemplateListRequest $request
     *
     * @return QueryMCTemplateListResponse
     */
    public function queryMCTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMCTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMcuJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryMcuJobResponse
     */
    public function queryMcuJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMcuJobResponse::fromMap($this->doRPCRequest('QueryMcuJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMcuJobRequest $request
     *
     * @return QueryMcuJobResponse
     */
    public function queryMcuJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcuJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryMcuTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryMcuTemplateResponse
     */
    public function queryMcuTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMcuTemplateResponse::fromMap($this->doRPCRequest('QueryMcuTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMcuTemplateRequest $request
     *
     * @return QueryMcuTemplateResponse
     */
    public function queryMcuTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcuTemplateWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaCensorJobDetailResponse::fromMap($this->doRPCRequest('QueryMediaCensorJobDetail', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaCensorJobListResponse::fromMap($this->doRPCRequest('QueryMediaCensorJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryMediaDetailJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMediaDetailJobListResponse
     */
    public function queryMediaDetailJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaDetailJobListResponse::fromMap($this->doRPCRequest('QueryMediaDetailJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMediaDetailJobListRequest $request
     *
     * @return QueryMediaDetailJobListResponse
     */
    public function queryMediaDetailJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaDetailJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaFpDeleteJobListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMediaFpDeleteJobListResponse
     */
    public function queryMediaFpDeleteJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaFpDeleteJobListResponse::fromMap($this->doRPCRequest('QueryMediaFpDeleteJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMediaFpDeleteJobListRequest $request
     *
     * @return QueryMediaFpDeleteJobListResponse
     */
    public function queryMediaFpDeleteJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaFpDeleteJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaInfoJobListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMediaInfoJobListResponse
     */
    public function queryMediaInfoJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaInfoJobListResponse::fromMap($this->doRPCRequest('QueryMediaInfoJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMediaInfoJobListRequest $request
     *
     * @return QueryMediaInfoJobListResponse
     */
    public function queryMediaInfoJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaInfoJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryMediaListResponse
     */
    public function queryMediaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaListResponse::fromMap($this->doRPCRequest('QueryMediaList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMediaListRequest $request
     *
     * @return QueryMediaListResponse
     */
    public function queryMediaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaListByURLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryMediaListByURLResponse
     */
    public function queryMediaListByURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaListByURLResponse::fromMap($this->doRPCRequest('QueryMediaListByURL', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMediaListByURLRequest $request
     *
     * @return QueryMediaListByURLResponse
     */
    public function queryMediaListByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaListByURLWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaWorkflowExecutionListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryMediaWorkflowExecutionListResponse
     */
    public function queryMediaWorkflowExecutionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaWorkflowExecutionListResponse::fromMap($this->doRPCRequest('QueryMediaWorkflowExecutionList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMediaWorkflowExecutionListRequest $request
     *
     * @return QueryMediaWorkflowExecutionListResponse
     */
    public function queryMediaWorkflowExecutionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaWorkflowExecutionListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaWorkflowListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryMediaWorkflowListResponse
     */
    public function queryMediaWorkflowListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaWorkflowListResponse::fromMap($this->doRPCRequest('QueryMediaWorkflowList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMediaWorkflowListRequest $request
     *
     * @return QueryMediaWorkflowListResponse
     */
    public function queryMediaWorkflowList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaWorkflowListWithOptions($request, $runtime);
    }

    /**
     * @param QueryPipelineListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPipelineListResponse
     */
    public function queryPipelineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPipelineListResponse::fromMap($this->doRPCRequest('QueryPipelineList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPipelineListRequest $request
     *
     * @return QueryPipelineListResponse
     */
    public function queryPipelineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPipelineListWithOptions($request, $runtime);
    }

    /**
     * @param QueryPornJobListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryPornJobListResponse
     */
    public function queryPornJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPornJobListResponse::fromMap($this->doRPCRequest('QueryPornJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPornJobListRequest $request
     *
     * @return QueryPornJobListResponse
     */
    public function queryPornJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPornJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryPornPipelineListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryPornPipelineListResponse
     */
    public function queryPornPipelineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPornPipelineListResponse::fromMap($this->doRPCRequest('QueryPornPipelineList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPornPipelineListRequest $request
     *
     * @return QueryPornPipelineListResponse
     */
    public function queryPornPipelineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPornPipelineListWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySmarttagJobResponse::fromMap($this->doRPCRequest('QuerySmarttagJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySmarttagTemplateListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySmarttagTemplateListResponse
     */
    public function querySmarttagTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySmarttagTemplateListResponse::fromMap($this->doRPCRequest('QuerySmarttagTemplateList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySmarttagTemplateListRequest $request
     *
     * @return QuerySmarttagTemplateListResponse
     */
    public function querySmarttagTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmarttagTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySnapshotJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySnapshotJobListResponse
     */
    public function querySnapshotJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySnapshotJobListResponse::fromMap($this->doRPCRequest('QuerySnapshotJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySnapshotJobListRequest $request
     *
     * @return QuerySnapshotJobListResponse
     */
    public function querySnapshotJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySnapshotJobListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySubtitleJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySubtitleJobListResponse
     */
    public function querySubtitleJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySubtitleJobListResponse::fromMap($this->doRPCRequest('QuerySubtitleJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySubtitleJobListRequest $request
     *
     * @return QuerySubtitleJobListResponse
     */
    public function querySubtitleJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySubtitleJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTagJobListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTagJobListResponse
     */
    public function queryTagJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTagJobListResponse::fromMap($this->doRPCRequest('QueryTagJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTagJobListRequest $request
     *
     * @return QueryTagJobListResponse
     */
    public function queryTagJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTemplateListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTemplateListResponse
     */
    public function queryTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTemplateListResponse::fromMap($this->doRPCRequest('QueryTemplateList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTemplateListRequest $request
     *
     * @return QueryTemplateListResponse
     */
    public function queryTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTerrorismJobListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryTerrorismJobListResponse
     */
    public function queryTerrorismJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTerrorismJobListResponse::fromMap($this->doRPCRequest('QueryTerrorismJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTerrorismJobListRequest $request
     *
     * @return QueryTerrorismJobListResponse
     */
    public function queryTerrorismJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTerrorismJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTerrorismPipelineListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryTerrorismPipelineListResponse
     */
    public function queryTerrorismPipelineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTerrorismPipelineListResponse::fromMap($this->doRPCRequest('QueryTerrorismPipelineList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTerrorismPipelineListRequest $request
     *
     * @return QueryTerrorismPipelineListResponse
     */
    public function queryTerrorismPipelineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTerrorismPipelineListWithOptions($request, $runtime);
    }

    /**
     * @param QueryVideoGifJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryVideoGifJobListResponse
     */
    public function queryVideoGifJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryVideoGifJobListResponse::fromMap($this->doRPCRequest('QueryVideoGifJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryVideoGifJobListRequest $request
     *
     * @return QueryVideoGifJobListResponse
     */
    public function queryVideoGifJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVideoGifJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryVideoPoseJobListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryVideoPoseJobListResponse
     */
    public function queryVideoPoseJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryVideoPoseJobListResponse::fromMap($this->doRPCRequest('QueryVideoPoseJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryVideoPoseJobListRequest $request
     *
     * @return QueryVideoPoseJobListResponse
     */
    public function queryVideoPoseJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVideoPoseJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryVideoSplitJobListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryVideoSplitJobListResponse
     */
    public function queryVideoSplitJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryVideoSplitJobListResponse::fromMap($this->doRPCRequest('QueryVideoSplitJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryVideoSplitJobListRequest $request
     *
     * @return QueryVideoSplitJobListResponse
     */
    public function queryVideoSplitJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVideoSplitJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryVideoSummaryJobListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryVideoSummaryJobListResponse
     */
    public function queryVideoSummaryJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryVideoSummaryJobListResponse::fromMap($this->doRPCRequest('QueryVideoSummaryJobList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryVideoSummaryJobListRequest $request
     *
     * @return QueryVideoSummaryJobListResponse
     */
    public function queryVideoSummaryJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVideoSummaryJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryWaterMarkTemplateListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryWaterMarkTemplateListResponse
     */
    public function queryWaterMarkTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryWaterMarkTemplateListResponse::fromMap($this->doRPCRequest('QueryWaterMarkTemplateList', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryWaterMarkTemplateListRequest $request
     *
     * @return QueryWaterMarkTemplateListResponse
     */
    public function queryWaterMarkTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWaterMarkTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param RefreshCdnDomainConfigsCacheRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RefreshCdnDomainConfigsCacheResponse
     */
    public function refreshCdnDomainConfigsCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshCdnDomainConfigsCacheResponse::fromMap($this->doRPCRequest('RefreshCdnDomainConfigsCache', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefreshCdnDomainConfigsCacheRequest $request
     *
     * @return RefreshCdnDomainConfigsCacheResponse
     */
    public function refreshCdnDomainConfigsCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshCdnDomainConfigsCacheWithOptions($request, $runtime);
    }

    /**
     * @param RegisterCustomFaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RegisterCustomFaceResponse
     */
    public function registerCustomFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterCustomFaceResponse::fromMap($this->doRPCRequest('RegisterCustomFace', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterCustomFaceRequest $request
     *
     * @return RegisterCustomFaceResponse
     */
    public function registerCustomFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerCustomFaceWithOptions($request, $runtime);
    }

    /**
     * @param RegisterMediaDetailPersonRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RegisterMediaDetailPersonResponse
     */
    public function registerMediaDetailPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterMediaDetailPersonResponse::fromMap($this->doRPCRequest('RegisterMediaDetailPerson', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterMediaDetailPersonRequest $request
     *
     * @return RegisterMediaDetailPersonResponse
     */
    public function registerMediaDetailPerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaDetailPersonWithOptions($request, $runtime);
    }

    /**
     * @param RegisterMediaDetailScenarioRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RegisterMediaDetailScenarioResponse
     */
    public function registerMediaDetailScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterMediaDetailScenarioResponse::fromMap($this->doRPCRequest('RegisterMediaDetailScenario', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterMediaDetailScenarioRequest $request
     *
     * @return RegisterMediaDetailScenarioResponse
     */
    public function registerMediaDetailScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaDetailScenarioWithOptions($request, $runtime);
    }

    /**
     * @param ReportAnnotationJobResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ReportAnnotationJobResultResponse
     */
    public function reportAnnotationJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportAnnotationJobResultResponse::fromMap($this->doRPCRequest('ReportAnnotationJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportAnnotationJobResultRequest $request
     *
     * @return ReportAnnotationJobResultResponse
     */
    public function reportAnnotationJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportAnnotationJobResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportCensorJobResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReportCensorJobResultResponse
     */
    public function reportCensorJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportCensorJobResultResponse::fromMap($this->doRPCRequest('ReportCensorJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportCensorJobResultRequest $request
     *
     * @return ReportCensorJobResultResponse
     */
    public function reportCensorJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportCensorJobResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportCoverJobResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReportCoverJobResultResponse
     */
    public function reportCoverJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportCoverJobResultResponse::fromMap($this->doRPCRequest('ReportCoverJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportCoverJobResultRequest $request
     *
     * @return ReportCoverJobResultResponse
     */
    public function reportCoverJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportCoverJobResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportFacerecogJobResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReportFacerecogJobResultResponse
     */
    public function reportFacerecogJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportFacerecogJobResultResponse::fromMap($this->doRPCRequest('ReportFacerecogJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportFacerecogJobResultRequest $request
     *
     * @return ReportFacerecogJobResultResponse
     */
    public function reportFacerecogJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportFacerecogJobResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportFpShotJobResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReportFpShotJobResultResponse
     */
    public function reportFpShotJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportFpShotJobResultResponse::fromMap($this->doRPCRequest('ReportFpShotJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportFpShotJobResultRequest $request
     *
     * @return ReportFpShotJobResultResponse
     */
    public function reportFpShotJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportFpShotJobResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportMediaDetailJobResultRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ReportMediaDetailJobResultResponse
     */
    public function reportMediaDetailJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportMediaDetailJobResultResponse::fromMap($this->doRPCRequest('ReportMediaDetailJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportMediaDetailJobResultRequest $request
     *
     * @return ReportMediaDetailJobResultResponse
     */
    public function reportMediaDetailJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportMediaDetailJobResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportPornJobResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReportPornJobResultResponse
     */
    public function reportPornJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportPornJobResultResponse::fromMap($this->doRPCRequest('ReportPornJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportPornJobResultRequest $request
     *
     * @return ReportPornJobResultResponse
     */
    public function reportPornJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportPornJobResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportTagJobResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReportTagJobResultResponse
     */
    public function reportTagJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportTagJobResultResponse::fromMap($this->doRPCRequest('ReportTagJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportTagJobResultRequest $request
     *
     * @return ReportTagJobResultResponse
     */
    public function reportTagJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportTagJobResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportTerrorismJobResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReportTerrorismJobResultResponse
     */
    public function reportTerrorismJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportTerrorismJobResultResponse::fromMap($this->doRPCRequest('ReportTerrorismJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportTerrorismJobResultRequest $request
     *
     * @return ReportTerrorismJobResultResponse
     */
    public function reportTerrorismJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportTerrorismJobResultWithOptions($request, $runtime);
    }

    /**
     * @param ReportVideoSplitJobResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ReportVideoSplitJobResultResponse
     */
    public function reportVideoSplitJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportVideoSplitJobResultResponse::fromMap($this->doRPCRequest('ReportVideoSplitJobResult', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportVideoSplitJobResultRequest $request
     *
     * @return ReportVideoSplitJobResultResponse
     */
    public function reportVideoSplitJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportVideoSplitJobResultWithOptions($request, $runtime);
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

        return SearchMediaResponse::fromMap($this->doRPCRequest('SearchMedia', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SearchMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchMediaWorkflowResponse
     */
    public function searchMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchMediaWorkflowResponse::fromMap($this->doRPCRequest('SearchMediaWorkflow', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchMediaWorkflowRequest $request
     *
     * @return SearchMediaWorkflowResponse
     */
    public function searchMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param SearchPipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchPipelineResponse
     */
    public function searchPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchPipelineResponse::fromMap($this->doRPCRequest('SearchPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchPipelineRequest $request
     *
     * @return SearchPipelineResponse
     */
    public function searchPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPipelineWithOptions($request, $runtime);
    }

    /**
     * @param SearchTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchTemplateResponse
     */
    public function searchTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchTemplateResponse::fromMap($this->doRPCRequest('SearchTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchTemplateRequest $request
     *
     * @return SearchTemplateResponse
     */
    public function searchTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SearchWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchWaterMarkTemplateResponse
     */
    public function searchWaterMarkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchWaterMarkTemplateResponse::fromMap($this->doRPCRequest('SearchWaterMarkTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchWaterMarkTemplateRequest $request
     *
     * @return SearchWaterMarkTemplateResponse
     */
    public function searchWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchWaterMarkTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SetAuthConfigRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SetAuthConfigResponse
     */
    public function setAuthConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAuthConfigResponse::fromMap($this->doRPCRequest('SetAuthConfig', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetAuthConfigRequest $request
     *
     * @return SetAuthConfigResponse
     */
    public function setAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAuthConfigWithOptions($request, $runtime);
    }

    /**
     * @param StopIProductionJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopIProductionJobResponse
     */
    public function stopIProductionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopIProductionJobResponse::fromMap($this->doRPCRequest('StopIProductionJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopIProductionJobRequest $request
     *
     * @return StopIProductionJobResponse
     */
    public function stopIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAnalysisJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitAnalysisJobResponse
     */
    public function submitAnalysisJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitAnalysisJobResponse::fromMap($this->doRPCRequest('SubmitAnalysisJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitAnalysisJobRequest $request
     *
     * @return SubmitAnalysisJobResponse
     */
    public function submitAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAnnotationJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitAnnotationJobResponse
     */
    public function submitAnnotationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitAnnotationJobResponse::fromMap($this->doRPCRequest('SubmitAnnotationJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitAnnotationJobRequest $request
     *
     * @return SubmitAnnotationJobResponse
     */
    public function submitAnnotationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAnnotationJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAsrJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitAsrJobResponse
     */
    public function submitAsrJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitAsrJobResponse::fromMap($this->doRPCRequest('SubmitAsrJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitAsrJobRequest $request
     *
     * @return SubmitAsrJobResponse
     */
    public function submitAsrJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAsrJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitBeautifyJobsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitBeautifyJobsResponse
     */
    public function submitBeautifyJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitBeautifyJobsResponse::fromMap($this->doRPCRequest('SubmitBeautifyJobs', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitBeautifyJobsRequest $request
     *
     * @return SubmitBeautifyJobsResponse
     */
    public function submitBeautifyJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitBeautifyJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitComplexJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitComplexJobResponse
     */
    public function submitComplexJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitComplexJobResponse::fromMap($this->doRPCRequest('SubmitComplexJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitComplexJobRequest $request
     *
     * @return SubmitComplexJobResponse
     */
    public function submitComplexJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitComplexJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitCoverJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitCoverJobResponse
     */
    public function submitCoverJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitCoverJobResponse::fromMap($this->doRPCRequest('SubmitCoverJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitCoverJobRequest $request
     *
     * @return SubmitCoverJobResponse
     */
    public function submitCoverJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCoverJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitEditingJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitEditingJobsResponse
     */
    public function submitEditingJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitEditingJobsResponse::fromMap($this->doRPCRequest('SubmitEditingJobs', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitEditingJobsRequest $request
     *
     * @return SubmitEditingJobsResponse
     */
    public function submitEditingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitEditingJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFacerecogJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitFacerecogJobResponse
     */
    public function submitFacerecogJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitFacerecogJobResponse::fromMap($this->doRPCRequest('SubmitFacerecogJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitFacerecogJobRequest $request
     *
     * @return SubmitFacerecogJobResponse
     */
    public function submitFacerecogJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFacerecogJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFpCompareJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitFpCompareJobResponse
     */
    public function submitFpCompareJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitFpCompareJobResponse::fromMap($this->doRPCRequest('SubmitFpCompareJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitFpCompareJobRequest $request
     *
     * @return SubmitFpCompareJobResponse
     */
    public function submitFpCompareJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFpCompareJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFpShotJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitFpShotJobResponse
     */
    public function submitFpShotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitFpShotJobResponse::fromMap($this->doRPCRequest('SubmitFpShotJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitFpShotJobRequest $request
     *
     * @return SubmitFpShotJobResponse
     */
    public function submitFpShotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFpShotJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitImageQualityJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitImageQualityJobResponse
     */
    public function submitImageQualityJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitImageQualityJobResponse::fromMap($this->doRPCRequest('SubmitImageQualityJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitImageQualityJobRequest $request
     *
     * @return SubmitImageQualityJobResponse
     */
    public function submitImageQualityJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitImageQualityJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitImageSearchJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitImageSearchJobResponse
     */
    public function submitImageSearchJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitImageSearchJobResponse::fromMap($this->doRPCRequest('SubmitImageSearchJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitImageSearchJobRequest $request
     *
     * @return SubmitImageSearchJobResponse
     */
    public function submitImageSearchJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitImageSearchJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitIProductionJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitIProductionJobResponse
     */
    public function submitIProductionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitIProductionJobResponse::fromMap($this->doRPCRequest('SubmitIProductionJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SubmitJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitJobsResponse
     */
    public function submitJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitJobsResponse::fromMap($this->doRPCRequest('SubmitJobs', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitJobsRequest $request
     *
     * @return SubmitJobsResponse
     */
    public function submitJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMCJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SubmitMCJobResponse
     */
    public function submitMCJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitMCJobResponse::fromMap($this->doRPCRequest('SubmitMCJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitMCJobRequest $request
     *
     * @return SubmitMCJobResponse
     */
    public function submitMCJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMCJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMcuJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitMcuJobResponse
     */
    public function submitMcuJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitMcuJobResponse::fromMap($this->doRPCRequest('SubmitMcuJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitMcuJobRequest $request
     *
     * @return SubmitMcuJobResponse
     */
    public function submitMcuJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMcuJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaCensorJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitMediaCensorJobResponse::fromMap($this->doRPCRequest('SubmitMediaCensorJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SubmitMediaDetailJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitMediaDetailJobResponse
     */
    public function submitMediaDetailJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitMediaDetailJobResponse::fromMap($this->doRPCRequest('SubmitMediaDetailJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitMediaDetailJobRequest $request
     *
     * @return SubmitMediaDetailJobResponse
     */
    public function submitMediaDetailJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaDetailJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaFpDeleteJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitMediaFpDeleteJobResponse
     */
    public function submitMediaFpDeleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitMediaFpDeleteJobResponse::fromMap($this->doRPCRequest('SubmitMediaFpDeleteJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitMediaFpDeleteJobRequest $request
     *
     * @return SubmitMediaFpDeleteJobResponse
     */
    public function submitMediaFpDeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaFpDeleteJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaInfoJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitMediaInfoJobResponse::fromMap($this->doRPCRequest('SubmitMediaInfoJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SubmitPornJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SubmitPornJobResponse
     */
    public function submitPornJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitPornJobResponse::fromMap($this->doRPCRequest('SubmitPornJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitPornJobRequest $request
     *
     * @return SubmitPornJobResponse
     */
    public function submitPornJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPornJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSmarttagJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSmarttagJobResponse
     */
    public function submitSmarttagJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSmarttagJobResponse::fromMap($this->doRPCRequest('SubmitSmarttagJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return SubmitSnapshotJobResponse::fromMap($this->doRPCRequest('SubmitSnapshotJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SubmitSubtitleJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSubtitleJobResponse
     */
    public function submitSubtitleJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSubtitleJobResponse::fromMap($this->doRPCRequest('SubmitSubtitleJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitSubtitleJobRequest $request
     *
     * @return SubmitSubtitleJobResponse
     */
    public function submitSubtitleJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSubtitleJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTagJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitTagJobResponse
     */
    public function submitTagJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitTagJobResponse::fromMap($this->doRPCRequest('SubmitTagJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitTagJobRequest $request
     *
     * @return SubmitTagJobResponse
     */
    public function submitTagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTagJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTerrorismJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitTerrorismJobResponse
     */
    public function submitTerrorismJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitTerrorismJobResponse::fromMap($this->doRPCRequest('SubmitTerrorismJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitTerrorismJobRequest $request
     *
     * @return SubmitTerrorismJobResponse
     */
    public function submitTerrorismJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTerrorismJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitVideoGifJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitVideoGifJobResponse
     */
    public function submitVideoGifJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitVideoGifJobResponse::fromMap($this->doRPCRequest('SubmitVideoGifJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitVideoGifJobRequest $request
     *
     * @return SubmitVideoGifJobResponse
     */
    public function submitVideoGifJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoGifJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitVideoPoseJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitVideoPoseJobResponse
     */
    public function submitVideoPoseJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitVideoPoseJobResponse::fromMap($this->doRPCRequest('SubmitVideoPoseJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitVideoPoseJobRequest $request
     *
     * @return SubmitVideoPoseJobResponse
     */
    public function submitVideoPoseJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoPoseJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitVideoSplitJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitVideoSplitJobResponse
     */
    public function submitVideoSplitJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitVideoSplitJobResponse::fromMap($this->doRPCRequest('SubmitVideoSplitJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitVideoSplitJobRequest $request
     *
     * @return SubmitVideoSplitJobResponse
     */
    public function submitVideoSplitJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoSplitJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitVideoSummaryJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitVideoSummaryJobResponse
     */
    public function submitVideoSummaryJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitVideoSummaryJobResponse::fromMap($this->doRPCRequest('SubmitVideoSummaryJob', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitVideoSummaryJobRequest $request
     *
     * @return SubmitVideoSummaryJobResponse
     */
    public function submitVideoSummaryJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoSummaryJobWithOptions($request, $runtime);
    }

    /**
     * @param TagCustomPersonRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TagCustomPersonResponse
     */
    public function tagCustomPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagCustomPersonResponse::fromMap($this->doRPCRequest('TagCustomPerson', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagCustomPersonRequest $request
     *
     * @return TagCustomPersonResponse
     */
    public function tagCustomPerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagCustomPersonWithOptions($request, $runtime);
    }

    /**
     * @param UnbindInputBucketRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnbindInputBucketResponse
     */
    public function unbindInputBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindInputBucketResponse::fromMap($this->doRPCRequest('UnbindInputBucket', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindInputBucketRequest $request
     *
     * @return UnbindInputBucketResponse
     */
    public function unbindInputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindInputBucketWithOptions($request, $runtime);
    }

    /**
     * @param UnbindOutputBucketRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UnbindOutputBucketResponse
     */
    public function unbindOutputBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindOutputBucketResponse::fromMap($this->doRPCRequest('UnbindOutputBucket', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindOutputBucketRequest $request
     *
     * @return UnbindOutputBucketResponse
     */
    public function unbindOutputBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindOutputBucketWithOptions($request, $runtime);
    }

    /**
     * @param UnregisterCustomFaceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UnregisterCustomFaceResponse
     */
    public function unregisterCustomFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnregisterCustomFaceResponse::fromMap($this->doRPCRequest('UnregisterCustomFace', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnregisterCustomFaceRequest $request
     *
     * @return UnregisterCustomFaceResponse
     */
    public function unregisterCustomFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unregisterCustomFaceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAsrPipelineRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAsrPipelineResponse
     */
    public function updateAsrPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAsrPipelineResponse::fromMap($this->doRPCRequest('UpdateAsrPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAsrPipelineRequest $request
     *
     * @return UpdateAsrPipelineResponse
     */
    public function updateAsrPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAsrPipelineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCategoryNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateCategoryNameResponse
     */
    public function updateCategoryNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCategoryNameResponse::fromMap($this->doRPCRequest('UpdateCategoryName', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCategoryNameRequest $request
     *
     * @return UpdateCategoryNameResponse
     */
    public function updateCategoryName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCategoryNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCensorPipelineRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCensorPipelineResponse
     */
    public function updateCensorPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCensorPipelineResponse::fromMap($this->doRPCRequest('UpdateCensorPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCensorPipelineRequest $request
     *
     * @return UpdateCensorPipelineResponse
     */
    public function updateCensorPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCensorPipelineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCoverPipelineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateCoverPipelineResponse
     */
    public function updateCoverPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCoverPipelineResponse::fromMap($this->doRPCRequest('UpdateCoverPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCoverPipelineRequest $request
     *
     * @return UpdateCoverPipelineResponse
     */
    public function updateCoverPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCoverPipelineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMCTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMCTemplateResponse
     */
    public function updateMCTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMCTemplateResponse::fromMap($this->doRPCRequest('UpdateMCTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMCTemplateRequest $request
     *
     * @return UpdateMCTemplateResponse
     */
    public function updateMCTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMCTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMcuTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMcuTemplateResponse
     */
    public function updateMcuTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMcuTemplateResponse::fromMap($this->doRPCRequest('UpdateMcuTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMcuTemplateRequest $request
     *
     * @return UpdateMcuTemplateResponse
     */
    public function updateMcuTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMcuTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateMediaResponse
     */
    public function updateMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMediaResponse::fromMap($this->doRPCRequest('UpdateMedia', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMediaRequest $request
     *
     * @return UpdateMediaResponse
     */
    public function updateMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMediaCategoryResponse
     */
    public function updateMediaCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMediaCategoryResponse::fromMap($this->doRPCRequest('UpdateMediaCategory', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMediaCategoryRequest $request
     *
     * @return UpdateMediaCategoryResponse
     */
    public function updateMediaCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaCoverRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMediaCoverResponse
     */
    public function updateMediaCoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMediaCoverResponse::fromMap($this->doRPCRequest('UpdateMediaCover', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMediaCoverRequest $request
     *
     * @return UpdateMediaCoverResponse
     */
    public function updateMediaCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaCoverWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaPublishStateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMediaPublishStateResponse
     */
    public function updateMediaPublishStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMediaPublishStateResponse::fromMap($this->doRPCRequest('UpdateMediaPublishState', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMediaPublishStateRequest $request
     *
     * @return UpdateMediaPublishStateResponse
     */
    public function updateMediaPublishState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaPublishStateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateMediaWorkflowResponse
     */
    public function updateMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMediaWorkflowResponse::fromMap($this->doRPCRequest('UpdateMediaWorkflow', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMediaWorkflowRequest $request
     *
     * @return UpdateMediaWorkflowResponse
     */
    public function updateMediaWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaWorkflowTriggerModeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateMediaWorkflowTriggerModeResponse
     */
    public function updateMediaWorkflowTriggerModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMediaWorkflowTriggerModeResponse::fromMap($this->doRPCRequest('UpdateMediaWorkflowTriggerMode', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMediaWorkflowTriggerModeRequest $request
     *
     * @return UpdateMediaWorkflowTriggerModeResponse
     */
    public function updateMediaWorkflowTriggerMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWorkflowTriggerModeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdatePipelineResponse::fromMap($this->doRPCRequest('UpdatePipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdatePornPipelineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdatePornPipelineResponse
     */
    public function updatePornPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdatePornPipelineResponse::fromMap($this->doRPCRequest('UpdatePornPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdatePornPipelineRequest $request
     *
     * @return UpdatePornPipelineResponse
     */
    public function updatePornPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePornPipelineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSmarttagTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSmarttagTemplateResponse
     */
    public function updateSmarttagTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSmarttagTemplateResponse::fromMap($this->doRPCRequest('UpdateSmarttagTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSmarttagTemplateRequest $request
     *
     * @return UpdateSmarttagTemplateResponse
     */
    public function updateSmarttagTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmarttagTemplateWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTemplateResponse::fromMap($this->doRPCRequest('UpdateTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateTerrorismPipelineRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateTerrorismPipelineResponse
     */
    public function updateTerrorismPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTerrorismPipelineResponse::fromMap($this->doRPCRequest('UpdateTerrorismPipeline', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTerrorismPipelineRequest $request
     *
     * @return UpdateTerrorismPipelineResponse
     */
    public function updateTerrorismPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTerrorismPipelineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateWaterMarkTemplateResponse
     */
    public function updateWaterMarkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateWaterMarkTemplateResponse::fromMap($this->doRPCRequest('UpdateWaterMarkTemplate', '2014-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateWaterMarkTemplateRequest $request
     *
     * @return UpdateWaterMarkTemplateResponse
     */
    public function updateWaterMarkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaterMarkTemplateWithOptions($request, $runtime);
    }
}
