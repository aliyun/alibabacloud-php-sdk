<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateInferenceServerRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateInferenceServerResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\DetectImageSyncRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\DetectImageSyncResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetJobInfoRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetJobInfoResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetLicenseRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetLicenseResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetPackageRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\GetPackageResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImportFpShotJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImportFpShotJobResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotImportJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotImportJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotNotaryRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotNotaryResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListInferenceJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListInferenceJobResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpDBDeleteJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpDBDeleteJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryImageSearchJobListResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryInferenceJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryInferenceJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryInferenceServerRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryInferenceServerResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryInnerJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryInnerJobResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobListRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobListResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoQualityJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoQualityJobResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpDBDeleteJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpDBDeleteJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpFileDeleteJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpFileDeleteJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpShotJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitFpShotJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageQualityJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageQualityJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageSearchJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitImageSearchJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitInferenceJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitInferenceJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitInnerJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitInnerJobResponse;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitOssFileCopyJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitOssFileCopyJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitOssFileCopyJobShrinkRequest;
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
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitURLUploadJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitURLUploadJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitURLUploadJobShrinkRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoGifJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoGifJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoPoseJobResponse;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoQualityJobRequest;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitVideoQualityJobResponse;
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
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Mts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'mts.aliyuncs.com',
            'ap-southeast-2'              => 'mts.aliyuncs.com',
            'ap-southeast-3'              => 'mts.aliyuncs.com',
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
            'cn-huhehaote-nebula-1'       => 'mts.aliyuncs.com',
            'cn-north-2-gov-1'            => 'mts.aliyuncs.com',
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
            'cn-wulanchabu'               => 'mts.aliyuncs.com',
            'cn-yushanfang'               => 'mts.aliyuncs.com',
            'cn-zhangbei'                 => 'mts.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'mts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'mts.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'mts.aliyuncs.com',
            'eu-west-1-oxs'               => 'mts.aliyuncs.com',
            'me-east-1'                   => 'mts.aliyuncs.com',
            'rus-west-1-pop'              => 'mts.aliyuncs.com',
            'us-east-1'                   => 'mts.aliyuncs.com',
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
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
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
            'action'      => 'ActivateMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
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
            'action'      => 'AddAsrPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAsrPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cateName)) {
            $query['CateName'] = $request->cateName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
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
            'action'      => 'AddCategory',
            'version'     => '2014-06-18',
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
     * @param AddCensorPipelineRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddCensorPipelineResponse
     */
    public function addCensorPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
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
            'action'      => 'AddCensorPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCensorPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCoverPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCoverPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->abuse)) {
            $query['Abuse'] = $request->abuse;
        }
        if (!Utils::isUnset($request->ad)) {
            $query['Ad'] = $request->ad;
        }
        if (!Utils::isUnset($request->contraband)) {
            $query['Contraband'] = $request->contraband;
        }
        if (!Utils::isUnset($request->live)) {
            $query['Live'] = $request->live;
        }
        if (!Utils::isUnset($request->logo)) {
            $query['Logo'] = $request->logo;
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
        if (!Utils::isUnset($request->politics)) {
            $query['Politics'] = $request->politics;
        }
        if (!Utils::isUnset($request->porn)) {
            $query['Porn'] = $request->porn;
        }
        if (!Utils::isUnset($request->qrcode)) {
            $query['Qrcode'] = $request->qrcode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->terrorism)) {
            $query['Terrorism'] = $request->terrorism;
        }
        if (!Utils::isUnset($request->spam)) {
            $query['spam'] = $request->spam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMCTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMCTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->fileURL)) {
            $query['FileURL'] = $request->fileURL;
        }
        if (!Utils::isUnset($request->inputUnbind)) {
            $query['InputUnbind'] = $request->inputUnbind;
        }
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }
        if (!Utils::isUnset($request->mediaWorkflowUserData)) {
            $query['MediaWorkflowUserData'] = $request->mediaWorkflowUserData;
        }
        if (!Utils::isUnset($request->overrideParams)) {
            $query['OverrideParams'] = $request->overrideParams;
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMedia',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMediaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMediaTag',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMediaTagResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
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
        if (!Utils::isUnset($request->topology)) {
            $query['Topology'] = $request->topology;
        }
        if (!Utils::isUnset($request->triggerMode)) {
            $query['TriggerMode'] = $request->triggerMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
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
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->speedLevel)) {
            $query['SpeedLevel'] = $request->speedLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
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
            'action'      => 'AddPornPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPornPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->analyseTypes)) {
            $query['AnalyseTypes'] = $request->analyseTypes;
        }
        if (!Utils::isUnset($request->faceCategoryIds)) {
            $query['FaceCategoryIds'] = $request->faceCategoryIds;
        }
        if (!Utils::isUnset($request->faceCustomParamsConfig)) {
            $query['FaceCustomParamsConfig'] = $request->faceCustomParamsConfig;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['Industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
        }
        if (!Utils::isUnset($request->keywordConfig)) {
            $query['KeywordConfig'] = $request->keywordConfig;
        }
        if (!Utils::isUnset($request->knowledgeConfig)) {
            $query['KnowledgeConfig'] = $request->knowledgeConfig;
        }
        if (!Utils::isUnset($request->labelType)) {
            $query['LabelType'] = $request->labelType;
        }
        if (!Utils::isUnset($request->labelVersion)) {
            $query['LabelVersion'] = $request->labelVersion;
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
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSmarttagTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSmarttagTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->audio)) {
            $query['Audio'] = $request->audio;
        }
        if (!Utils::isUnset($request->container)) {
            $query['Container'] = $request->container;
        }
        if (!Utils::isUnset($request->muxConfig)) {
            $query['MuxConfig'] = $request->muxConfig;
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
        if (!Utils::isUnset($request->transConfig)) {
            $query['TransConfig'] = $request->transConfig;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTemplate',
            'version'     => '2014-06-18',
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
     * @param AddTerrorismPipelineRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddTerrorismPipelineResponse
     */
    public function addTerrorismPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
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
            'action'      => 'AddTerrorismPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTerrorismPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
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
            'action'      => 'AddWaterMarkTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
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
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindInputBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindInputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
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
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindOutputBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindOutputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'CancelJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'CategoryTree',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CategoryTreeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->gmtWakeup)) {
            $query['GmtWakeup'] = $request->gmtWakeup;
        }
        if (!Utils::isUnset($request->hid)) {
            $query['Hid'] = $request->hid;
        }
        if (!Utils::isUnset($request->interrupt)) {
            $query['Interrupt'] = $request->interrupt;
        }
        if (!Utils::isUnset($request->invoker)) {
            $query['Invoker'] = $request->invoker;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->pk)) {
            $query['Pk'] = $request->pk;
        }
        if (!Utils::isUnset($request->prompt)) {
            $query['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->success)) {
            $query['Success'] = $request->success;
        }
        if (!Utils::isUnset($request->taskExtraData)) {
            $query['TaskExtraData'] = $request->taskExtraData;
        }
        if (!Utils::isUnset($request->taskIdentifier)) {
            $query['TaskIdentifier'] = $request->taskIdentifier;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckResource',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
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
            'action'      => 'CreateFpShotDB',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFpShotDBResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateInferenceServerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateInferenceServerResponse
     */
    public function createInferenceServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->modelPath)) {
            $query['ModelPath'] = $request->modelPath;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->testId)) {
            $query['TestId'] = $request->testId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInferenceServer',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInferenceServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInferenceServerRequest $request
     *
     * @return CreateInferenceServerResponse
     */
    public function createInferenceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInferenceServerWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMcuTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcuTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
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
        if (!Utils::isUnset($request->sessionTime)) {
            $query['SessionTime'] = $request->sessionTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSession',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSessionResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
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
            'action'      => 'DeactivateMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeactivateMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ciphertextBlob)) {
            $query['CiphertextBlob'] = $request->ciphertextBlob;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rand)) {
            $query['Rand'] = $request->rand;
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
            'action'      => 'DecryptKey',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DecryptKeyResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
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
            'action'      => 'DeleteCategory',
            'version'     => '2014-06-18',
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
     * @param DeleteMCTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMCTemplateResponse
     */
    public function deleteMCTemplateWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMCTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMCTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'DeleteMcuJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcuJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcuTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcuTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
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
            'action'      => 'DeleteMedia',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaTag',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaTagResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
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
            'action'      => 'DeleteMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePipeline',
            'version'     => '2014-06-18',
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
     * @param DeleteSmarttagTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSmarttagTemplateResponse
     */
    public function deleteSmarttagTemplateWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSmarttagTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSmarttagTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
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
     * @param DeleteWaterMarkTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteWaterMarkTemplateResponse
     */
    public function deleteWaterMarkTemplateWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->waterMarkTemplateId)) {
            $query['WaterMarkTemplateId'] = $request->waterMarkTemplateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWaterMarkTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'DescribeMtsUserResourcePackage',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMtsUserResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DetectImageSyncRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectImageSyncResponse
     */
    public function detectImageSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageSync',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectImageSyncRequest $request
     *
     * @return DetectImageSyncResponse
     */
    public function detectImageSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageSyncWithOptions($request, $runtime);
    }

    /**
     * @param GetJobInfoRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetJobInfoResponse
     */
    public function getJobInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobInfo',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobInfoRequest $request
     *
     * @return GetJobInfoResponse
     */
    public function getJobInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobInfoWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->header)) {
            $query['Header'] = $request->header;
        }
        if (!Utils::isUnset($request->licenseUrl)) {
            $query['LicenseUrl'] = $request->licenseUrl;
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLicense',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
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
            'action'      => 'GetPackage',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPackageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ImAuditRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ImAuditResponse
     */
    public function imAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->contents)) {
            $query['Contents'] = $request->contents;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
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
        if (!Utils::isUnset($request->scenes)) {
            $query['Scenes'] = $request->scenes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImAudit',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImAuditRequest $request
     *
     * @return ImAuditResponse
     */
    public function imAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imAuditWithOptions($request, $runtime);
    }

    /**
     * @param ImportFpShotJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ImportFpShotJobResponse
     */
    public function importFpShotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
        }
        if (!Utils::isUnset($request->fpImportConfig)) {
            $query['FpImportConfig'] = $request->fpImportConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportFpShotJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportFpShotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportFpShotJobRequest $request
     *
     * @return ImportFpShotJobResponse
     */
    public function importFpShotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importFpShotJobWithOptions($request, $runtime);
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
            'action'      => 'ListAllCategory',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAllCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
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
            'action'      => 'ListAllMediaBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAllMediaBucketResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAsrPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAsrPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCensorPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCensorPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCoverPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCoverPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
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
            'action'      => 'ListCustomPersons',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomPersonsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->fpDBIds)) {
            $query['FpDBIds'] = $request->fpDBIds;
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
            'action'      => 'ListFpShotDB',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFpShotDBResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFpShotFilesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFpShotFilesResponse
     */
    public function listFpShotFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
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
            'action'      => 'ListFpShotFiles',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFpShotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFpShotFilesRequest $request
     *
     * @return ListFpShotFilesResponse
     */
    public function listFpShotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFpShotFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListFpShotImportJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFpShotImportJobResponse
     */
    public function listFpShotImportJobWithOptions($request, $runtime)
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
            'action'      => 'ListFpShotImportJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFpShotImportJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFpShotImportJobRequest $request
     *
     * @return ListFpShotImportJobResponse
     */
    public function listFpShotImportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFpShotImportJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->endOfCreatedTimeRange)) {
            $query['EndOfCreatedTimeRange'] = $request->endOfCreatedTimeRange;
        }
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
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
        if (!Utils::isUnset($request->startOfCreatedTimeRange)) {
            $query['StartOfCreatedTimeRange'] = $request->startOfCreatedTimeRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFpShotNotary',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFpShotNotaryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListInferenceJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListInferenceJobResponse
     */
    public function listInferenceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxPageSize)) {
            $query['MaxPageSize'] = $request->maxPageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->serverName)) {
            $query['ServerName'] = $request->serverName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInferenceJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInferenceJobRequest $request
     *
     * @return ListInferenceJobResponse
     */
    public function listInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInferenceJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->endOfJobCreatedTimeRange)) {
            $query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
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
            'action'      => 'ListJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
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
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMedia',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->inputFileURL)) {
            $query['InputFileURL'] = $request->inputFileURL;
        }
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
        }
        if (!Utils::isUnset($request->mediaWorkflowName)) {
            $query['MediaWorkflowName'] = $request->mediaWorkflowName;
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
            'action'      => 'ListMediaWorkflowExecutions',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaWorkflowExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPornPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPornPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTerrorismPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTerrorismPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->gmtWakeup)) {
            $query['GmtWakeup'] = $request->gmtWakeup;
        }
        if (!Utils::isUnset($request->hid)) {
            $query['Hid'] = $request->hid;
        }
        if (!Utils::isUnset($request->interrupt)) {
            $query['Interrupt'] = $request->interrupt;
        }
        if (!Utils::isUnset($request->invoker)) {
            $query['Invoker'] = $request->invoker;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->pk)) {
            $query['Pk'] = $request->pk;
        }
        if (!Utils::isUnset($request->success)) {
            $query['Success'] = $request->success;
        }
        if (!Utils::isUnset($request->taskExtraData)) {
            $query['TaskExtraData'] = $request->taskExtraData;
        }
        if (!Utils::isUnset($request->taskIdentifier)) {
            $query['TaskIdentifier'] = $request->taskIdentifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LogicalDeleteResource',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LogicalDeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->gmtWakeup)) {
            $query['GmtWakeup'] = $request->gmtWakeup;
        }
        if (!Utils::isUnset($request->hid)) {
            $query['Hid'] = $request->hid;
        }
        if (!Utils::isUnset($request->interrupt)) {
            $query['Interrupt'] = $request->interrupt;
        }
        if (!Utils::isUnset($request->invoker)) {
            $query['Invoker'] = $request->invoker;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->pk)) {
            $query['Pk'] = $request->pk;
        }
        if (!Utils::isUnset($request->success)) {
            $query['Success'] = $request->success;
        }
        if (!Utils::isUnset($request->taskExtraData)) {
            $query['TaskExtraData'] = $request->taskExtraData;
        }
        if (!Utils::isUnset($request->taskIdentifier)) {
            $query['TaskIdentifier'] = $request->taskIdentifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PhysicalDeleteResource',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PhysicalDeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param PlayInfoRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return PlayInfoResponse
     */
    public function playInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authInfo)) {
            $query['AuthInfo'] = $request->authInfo;
        }
        if (!Utils::isUnset($request->authTimeout)) {
            $query['AuthTimeout'] = $request->authTimeout;
        }
        if (!Utils::isUnset($request->formats)) {
            $query['Formats'] = $request->formats;
        }
        if (!Utils::isUnset($request->hlsUriToken)) {
            $query['HlsUriToken'] = $request->hlsUriToken;
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
        if (!Utils::isUnset($request->playDomain)) {
            $query['PlayDomain'] = $request->playDomain;
        }
        if (!Utils::isUnset($request->rand)) {
            $query['Rand'] = $request->rand;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->terminal)) {
            $query['Terminal'] = $request->terminal;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PlayInfo',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param PlayerAuthRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PlayerAuthResponse
     */
    public function playerAuthWithOptions($request, $runtime)
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
            'action'      => 'PlayerAuth',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PlayerAuthResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryAnalysisJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAnalysisJobListResponse
     */
    public function queryAnalysisJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisJobIds)) {
            $query['AnalysisJobIds'] = $request->analysisJobIds;
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
            'action'      => 'QueryAnalysisJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAnalysisJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->annotationJobIds)) {
            $query['AnnotationJobIds'] = $request->annotationJobIds;
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
            'action'      => 'QueryAnnotationJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAnnotationJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryAsrJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAsrJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['PipelineIds'] = $request->pipelineIds;
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
            'action'      => 'QueryAsrPipelineList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAsrPipelineListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryAuthConfig',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryCensorJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCensorJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['PipelineIds'] = $request->pipelineIds;
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
            'action'      => 'QueryCensorPipelineList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCensorPipelineListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryComplexJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryComplexJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->coverJobIds)) {
            $query['CoverJobIds'] = $request->coverJobIds;
        }
        if (!Utils::isUnset($request->endOfJobCreatedTimeRange)) {
            $query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
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
            'action'      => 'QueryCoverJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCoverJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['PipelineIds'] = $request->pipelineIds;
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
            'action'      => 'QueryCoverPipelineList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCoverPipelineListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryEditingJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEditingJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->facerecogJobIds)) {
            $query['FacerecogJobIds'] = $request->facerecogJobIds;
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
            'action'      => 'QueryFacerecogJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFacerecogJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryFpCompareJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFpCompareJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryFpDBDeleteJobListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryFpDBDeleteJobListResponse
     */
    public function queryFpDBDeleteJobListWithOptions($request, $runtime)
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
            'action'      => 'QueryFpDBDeleteJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFpDBDeleteJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFpDBDeleteJobListRequest $request
     *
     * @return QueryFpDBDeleteJobListResponse
     */
    public function queryFpDBDeleteJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFpDBDeleteJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryFpFileDeleteJobListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryFpFileDeleteJobListResponse
     */
    public function queryFpFileDeleteJobListWithOptions($request, $runtime)
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
            'action'      => 'QueryFpFileDeleteJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFpFileDeleteJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFpFileDeleteJobListRequest $request
     *
     * @return QueryFpFileDeleteJobListResponse
     */
    public function queryFpFileDeleteJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFpFileDeleteJobListWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFpImportResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFpImportResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->primaryKeyList)) {
            $query['PrimaryKeyList'] = $request->primaryKeyList;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFpShotJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFpShotJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryIProductionJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIProductionJobResponse
     */
    public function queryIProductionJobWithOptions($request, $runtime)
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
            'action'      => 'QueryIProductionJob',
            'version'     => '2014-06-18',
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
     * @param QueryIProductionJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryIProductionJobListResponse
     */
    public function queryIProductionJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->IProductionJobIds)) {
            $query['IProductionJobIds'] = $request->IProductionJobIds;
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
            'action'      => 'QueryIProductionJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIProductionJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryImageSearchJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryImageSearchJobListResponse
     */
    public function queryImageSearchJobListWithOptions($request, $runtime)
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
            'action'      => 'QueryImageSearchJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryImageSearchJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryInferenceJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryInferenceJobResponse
     */
    public function queryInferenceJobWithOptions($request, $runtime)
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
            'action'      => 'QueryInferenceJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryInferenceJobRequest $request
     *
     * @return QueryInferenceJobResponse
     */
    public function queryInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInferenceJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryInferenceServerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryInferenceServerResponse
     */
    public function queryInferenceServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTime)) {
            $query['CreateTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->maxPageSize)) {
            $query['MaxPageSize'] = $request->maxPageSize;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInferenceServer',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInferenceServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryInferenceServerRequest $request
     *
     * @return QueryInferenceServerResponse
     */
    public function queryInferenceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInferenceServerWithOptions($request, $runtime);
    }

    /**
     * @param QueryInnerJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryInnerJobResponse
     */
    public function queryInnerJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
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
            'action'      => 'QueryInnerJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInnerJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryInnerJobRequest $request
     *
     * @return QueryInnerJobResponse
     */
    public function queryInnerJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInnerJobWithOptions($request, $runtime);
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
            'action'      => 'QueryJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryMCJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMCJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMCTemplateList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMCTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryMcuJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMcuJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMcuTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMcuTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'version'     => '2014-06-18',
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
            'version'     => '2014-06-18',
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
     * @param QueryMediaDetailJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMediaDetailJobListResponse
     */
    public function queryMediaDetailJobListWithOptions($request, $runtime)
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
            'action'      => 'QueryMediaDetailJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaDetailJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryMediaFpDeleteJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaFpDeleteJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->mediaInfoJobIds)) {
            $query['MediaInfoJobIds'] = $request->mediaInfoJobIds;
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
            'action'      => 'QueryMediaInfoJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaInfoJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->includeMediaInfo)) {
            $query['IncludeMediaInfo'] = $request->includeMediaInfo;
        }
        if (!Utils::isUnset($request->includePlayList)) {
            $query['IncludePlayList'] = $request->includePlayList;
        }
        if (!Utils::isUnset($request->includeSnapshotList)) {
            $query['IncludeSnapshotList'] = $request->includeSnapshotList;
        }
        if (!Utils::isUnset($request->includeSummaryList)) {
            $query['IncludeSummaryList'] = $request->includeSummaryList;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
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
            'action'      => 'QueryMediaList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->fileURLs)) {
            $query['FileURLs'] = $request->fileURLs;
        }
        if (!Utils::isUnset($request->includeMediaInfo)) {
            $query['IncludeMediaInfo'] = $request->includeMediaInfo;
        }
        if (!Utils::isUnset($request->includePlayList)) {
            $query['IncludePlayList'] = $request->includePlayList;
        }
        if (!Utils::isUnset($request->includeSnapshotList)) {
            $query['IncludeSnapshotList'] = $request->includeSnapshotList;
        }
        if (!Utils::isUnset($request->includeSummaryList)) {
            $query['IncludeSummaryList'] = $request->includeSummaryList;
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
            'action'      => 'QueryMediaListByURL',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaListByURLResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->runIds)) {
            $query['RunIds'] = $request->runIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaWorkflowExecutionList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaWorkflowExecutionListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowIds)) {
            $query['MediaWorkflowIds'] = $request->mediaWorkflowIds;
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
            'action'      => 'QueryMediaWorkflowList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaWorkflowListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['PipelineIds'] = $request->pipelineIds;
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
            'action'      => 'QueryPipelineList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPipelineListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryPornJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPornJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['PipelineIds'] = $request->pipelineIds;
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
            'action'      => 'QueryPornPipelineList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPornPipelineListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
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
            'action'      => 'QuerySmarttagJob',
            'version'     => '2014-06-18',
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
     * @param QuerySmarttagJobListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySmarttagJobListResponse
     */
    public function querySmarttagJobListWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmarttagJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmarttagJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySmarttagJobListRequest $request
     *
     * @return QuerySmarttagJobListResponse
     */
    public function querySmarttagJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmarttagJobListWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmarttagTemplateList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySmarttagTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endOfJobCreatedTimeRange)) {
            $query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
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
        if (!Utils::isUnset($request->snapshotJobIds)) {
            $query['SnapshotJobIds'] = $request->snapshotJobIds;
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
            'action'      => 'QuerySnapshotJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySnapshotJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QuerySubtitleJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySubtitleJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->tagJobIds)) {
            $query['TagJobIds'] = $request->tagJobIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTagJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTagJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTemplateList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryTerrorismJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTerrorismJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['PipelineIds'] = $request->pipelineIds;
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
            'action'      => 'QueryTerrorismPipelineList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTerrorismPipelineListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryVideoGifJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVideoGifJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryVideoPoseJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVideoPoseJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryVideoQualityJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryVideoQualityJobResponse
     */
    public function queryVideoQualityJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryVideoQualityJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVideoQualityJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryVideoQualityJobRequest $request
     *
     * @return QueryVideoQualityJobResponse
     */
    public function queryVideoQualityJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVideoQualityJobWithOptions($request, $runtime);
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
            'action'      => 'QueryVideoSplitJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVideoSplitJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'QueryVideoSummaryJobList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVideoSummaryJobListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->waterMarkTemplateIds)) {
            $query['WaterMarkTemplateIds'] = $request->waterMarkTemplateIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWaterMarkTemplateList',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWaterMarkTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
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
            'action'      => 'RefreshCdnDomainConfigsCache',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshCdnDomainConfigsCacheResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
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
            'action'      => 'RegisterCustomFace',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterCustomFaceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->personLib)) {
            $query['PersonLib'] = $request->personLib;
        }
        if (!Utils::isUnset($request->personName)) {
            $query['PersonName'] = $request->personName;
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
            'action'      => 'RegisterMediaDetailPerson',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterMediaDetailPersonResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
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
        if (!Utils::isUnset($request->scenario)) {
            $query['Scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterMediaDetailScenario',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterMediaDetailScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->annotation)) {
            $query['Annotation'] = $request->annotation;
        }
        if (!Utils::isUnset($request->details)) {
            $query['Details'] = $request->details;
        }
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
            'action'      => 'ReportAnnotationJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportAnnotationJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->detail)) {
            $query['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
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
            'action'      => 'ReportCensorJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportCensorJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->result)) {
            $query['Result'] = $request->result;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportCoverJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportCoverJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->details)) {
            $query['Details'] = $request->details;
        }
        if (!Utils::isUnset($request->facerecog)) {
            $query['Facerecog'] = $request->facerecog;
        }
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
            'action'      => 'ReportFacerecogJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportFacerecogJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->details)) {
            $query['Details'] = $request->details;
        }
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
        if (!Utils::isUnset($request->result)) {
            $query['Result'] = $request->result;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportFpShotJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportFpShotJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->results)) {
            $query['Results'] = $request->results;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportMediaDetailJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportMediaDetailJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->detail)) {
            $query['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
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
            'action'      => 'ReportPornJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportPornJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->result)) {
            $query['Result'] = $request->result;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportTagJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportTagJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->detail)) {
            $query['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
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
            'action'      => 'ReportTerrorismJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportTerrorismJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->details)) {
            $query['Details'] = $request->details;
        }
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
        if (!Utils::isUnset($request->result)) {
            $query['Result'] = $request->result;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportVideoSplitJobResult',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportVideoSplitJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMedia',
            'version'     => '2014-06-18',
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
     * @param SearchMediaWorkflowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchMediaWorkflowResponse
     */
    public function searchMediaWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->stateList)) {
            $query['StateList'] = $request->stateList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchWaterMarkTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->key1)) {
            $query['Key1'] = $request->key1;
        }
        if (!Utils::isUnset($request->key2)) {
            $query['Key2'] = $request->key2;
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
            'action'      => 'SetAuthConfig',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'StopIProductionJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->analysisConfig)) {
            $query['AnalysisConfig'] = $request->analysisConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAnalysisJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->annotationConfig)) {
            $query['AnnotationConfig'] = $request->annotationConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAnnotationJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAnnotationJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->asrConfig)) {
            $query['AsrConfig'] = $request->asrConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAsrJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAsrJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->beautifyConfig)) {
            $query['BeautifyConfig'] = $request->beautifyConfig;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitBeautifyJobs',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitBeautifyJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->complexConfigs)) {
            $query['ComplexConfigs'] = $request->complexConfigs;
        }
        if (!Utils::isUnset($request->inputs)) {
            $query['Inputs'] = $request->inputs;
        }
        if (!Utils::isUnset($request->outputBucket)) {
            $query['OutputBucket'] = $request->outputBucket;
        }
        if (!Utils::isUnset($request->outputLocation)) {
            $query['OutputLocation'] = $request->outputLocation;
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
        if (!Utils::isUnset($request->transcodeOutput)) {
            $query['TranscodeOutput'] = $request->transcodeOutput;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitComplexJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitComplexJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->coverConfig)) {
            $query['CoverConfig'] = $request->coverConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitCoverJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitCoverJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->editingInputs)) {
            $query['EditingInputs'] = $request->editingInputs;
        }
        if (!Utils::isUnset($request->editingJobOssFileRoleArn)) {
            $query['EditingJobOssFileRoleArn'] = $request->editingJobOssFileRoleArn;
        }
        if (!Utils::isUnset($request->editingJobOssFileUid)) {
            $query['EditingJobOssFileUid'] = $request->editingJobOssFileUid;
        }
        if (!Utils::isUnset($request->editingJobOutputs)) {
            $query['EditingJobOutputs'] = $request->editingJobOutputs;
        }
        if (!Utils::isUnset($request->editingJobURL)) {
            $query['EditingJobURL'] = $request->editingJobURL;
        }
        if (!Utils::isUnset($request->outputBucket)) {
            $query['OutputBucket'] = $request->outputBucket;
        }
        if (!Utils::isUnset($request->outputLocation)) {
            $query['OutputLocation'] = $request->outputLocation;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitEditingJobs',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitEditingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->facerecogConfig)) {
            $query['FacerecogConfig'] = $request->facerecogConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFacerecogJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFacerecogJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
        }
        if (!Utils::isUnset($request->masterMedia)) {
            $query['MasterMedia'] = $request->masterMedia;
        }
        if (!Utils::isUnset($request->matchedFrameStorage)) {
            $query['MatchedFrameStorage'] = $request->matchedFrameStorage;
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
        if (!Utils::isUnset($request->queryMedia)) {
            $query['QueryMedia'] = $request->queryMedia;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFpCompareJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFpCompareJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitFpDBDeleteJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitFpDBDeleteJobResponse
     */
    public function submitFpDBDeleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->delType)) {
            $query['DelType'] = $request->delType;
        }
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFpDBDeleteJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFpDBDeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitFpDBDeleteJobRequest $request
     *
     * @return SubmitFpDBDeleteJobResponse
     */
    public function submitFpDBDeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFpDBDeleteJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFpFileDeleteJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitFpFileDeleteJobResponse
     */
    public function submitFpFileDeleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileIds)) {
            $query['FileIds'] = $request->fileIds;
        }
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFpFileDeleteJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFpFileDeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitFpFileDeleteJobRequest $request
     *
     * @return SubmitFpFileDeleteJobResponse
     */
    public function submitFpFileDeleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFpFileDeleteJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->fpShotConfig)) {
            $query['FpShotConfig'] = $request->fpShotConfig;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFpShotJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFpShotJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitIProductionJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitIProductionJobResponse
     */
    public function submitIProductionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->jobParams)) {
            $query['JobParams'] = $request->jobParams;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->output)) {
            $query['Output'] = $request->output;
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
        if (!Utils::isUnset($request->scheduleParams)) {
            $query['ScheduleParams'] = $request->scheduleParams;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitIProductionJob',
            'version'     => '2014-06-18',
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
     * @param SubmitImageQualityJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitImageQualityJobResponse
     */
    public function submitImageQualityJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitImageQualityJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitImageQualityJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
        }
        if (!Utils::isUnset($request->inputImage)) {
            $query['InputImage'] = $request->inputImage;
        }
        if (!Utils::isUnset($request->inputVideo)) {
            $query['InputVideo'] = $request->inputVideo;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitImageSearchJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitImageSearchJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitInferenceJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitInferenceJobResponse
     */
    public function submitInferenceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->serverName)) {
            $query['ServerName'] = $request->serverName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitInferenceJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitInferenceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitInferenceJobRequest $request
     *
     * @return SubmitInferenceJobResponse
     */
    public function submitInferenceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitInferenceJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitInnerJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitInnerJobResponse
     */
    public function submitInnerJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
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
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitInnerJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitInnerJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitInnerJobRequest $request
     *
     * @return SubmitInnerJobResponse
     */
    public function submitInnerJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitInnerJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->outputBucket)) {
            $query['OutputBucket'] = $request->outputBucket;
        }
        if (!Utils::isUnset($request->outputLocation)) {
            $query['OutputLocation'] = $request->outputLocation;
        }
        if (!Utils::isUnset($request->outputs)) {
            $query['Outputs'] = $request->outputs;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitJobs',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitJobsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->censorConfig)) {
            $query['CensorConfig'] = $request->censorConfig;
        }
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
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
        if (!Utils::isUnset($request->texts)) {
            $query['Texts'] = $request->texts;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMCJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMCJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
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
            'action'      => 'SubmitMcuJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMcuJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->externalUrl)) {
            $query['ExternalUrl'] = $request->externalUrl;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->videoCensorConfig)) {
            $query['VideoCensorConfig'] = $request->videoCensorConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaCensorJob',
            'version'     => '2014-06-18',
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
     * @param SubmitMediaDetailJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitMediaDetailJobResponse
     */
    public function submitMediaDetailJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->mediaDetailConfig)) {
            $query['MediaDetailConfig'] = $request->mediaDetailConfig;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaDetailJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaDetailJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->fpDBId)) {
            $query['FpDBId'] = $request->fpDBId;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaFpDeleteJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaFpDeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaInfoJob',
            'version'     => '2014-06-18',
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
     * @param SubmitOssFileCopyJobRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitOssFileCopyJobResponse
     */
    public function submitOssFileCopyJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitOssFileCopyJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sourceStorage)) {
            $request->sourceStorageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->sourceStorage), 'SourceStorage', 'json');
        }
        if (!Utils::isUnset($tmpReq->targetStorage)) {
            $request->targetStorageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->targetStorage), 'TargetStorage', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->notify)) {
            $query['Notify'] = $request->notify;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sourceStorageShrink)) {
            $query['SourceStorage'] = $request->sourceStorageShrink;
        }
        if (!Utils::isUnset($request->targetStorageShrink)) {
            $query['TargetStorage'] = $request->targetStorageShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitOssFileCopyJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitOssFileCopyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitOssFileCopyJobRequest $request
     *
     * @return SubmitOssFileCopyJobResponse
     */
    public function submitOssFileCopyJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitOssFileCopyJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->pornConfig)) {
            $query['PornConfig'] = $request->pornConfig;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitPornJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitPornJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
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
            'version'     => '2014-06-18',
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
     * @param SubmitSnapshotJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->snapshotConfig)) {
            $query['SnapshotConfig'] = $request->snapshotConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSnapshotJob',
            'version'     => '2014-06-18',
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
     * @param SubmitSubtitleJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSubtitleJobResponse
     */
    public function submitSubtitleJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputConfig)) {
            $query['InputConfig'] = $request->inputConfig;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSubtitleJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSubtitleJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->tagConfig)) {
            $query['TagConfig'] = $request->tagConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTagJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTagJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->terrorismConfig)) {
            $query['TerrorismConfig'] = $request->terrorismConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTerrorismJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTerrorismJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitURLUploadJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitURLUploadJobResponse
     */
    public function submitURLUploadJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitURLUploadJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->targetStorage)) {
            $request->targetStorageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->targetStorage), 'TargetStorage', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->notify)) {
            $query['Notify'] = $request->notify;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sourceFileURL)) {
            $query['SourceFileURL'] = $request->sourceFileURL;
        }
        if (!Utils::isUnset($request->targetStorageShrink)) {
            $query['TargetStorage'] = $request->targetStorageShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitURLUploadJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitURLUploadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitURLUploadJobRequest $request
     *
     * @return SubmitURLUploadJobResponse
     */
    public function submitURLUploadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitURLUploadJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->videoGifConfig)) {
            $query['VideoGifConfig'] = $request->videoGifConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitVideoGifJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitVideoGifJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitVideoPoseJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitVideoPoseJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitVideoQualityJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitVideoQualityJobResponse
     */
    public function submitVideoQualityJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->jobParams)) {
            $query['JobParams'] = $request->jobParams;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->output)) {
            $query['Output'] = $request->output;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->scheduleParams)) {
            $query['ScheduleParams'] = $request->scheduleParams;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
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
            'action'      => 'SubmitVideoQualityJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitVideoQualityJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitVideoQualityJobRequest $request
     *
     * @return SubmitVideoQualityJobResponse
     */
    public function submitVideoQualityJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoQualityJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->videoSplitConfig)) {
            $query['VideoSplitConfig'] = $request->videoSplitConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitVideoSplitJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitVideoSplitJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->videoSummaryConfig)) {
            $query['VideoSummaryConfig'] = $request->videoSummaryConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitVideoSummaryJob',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitVideoSummaryJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->categoryDescription)) {
            $query['CategoryDescription'] = $request->categoryDescription;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->categoryName)) {
            $query['CategoryName'] = $request->categoryName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->personDescription)) {
            $query['PersonDescription'] = $request->personDescription;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
        }
        if (!Utils::isUnset($request->personName)) {
            $query['PersonName'] = $request->personName;
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
            'action'      => 'TagCustomPerson',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagCustomPersonResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
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
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindInputBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindInputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
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
            'action'      => 'UnbindOutputBucket',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindOutputBucketResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->faceId)) {
            $query['FaceId'] = $request->faceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->personId)) {
            $query['PersonId'] = $request->personId;
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
            'action'      => 'UnregisterCustomFace',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnregisterCustomFaceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
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
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAsrPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAsrPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->cateName)) {
            $query['CateName'] = $request->cateName;
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
            'action'      => 'UpdateCategoryName',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCategoryNameResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
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
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCensorPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCensorPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
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
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCoverPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCoverPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->abuse)) {
            $query['Abuse'] = $request->abuse;
        }
        if (!Utils::isUnset($request->ad)) {
            $query['Ad'] = $request->ad;
        }
        if (!Utils::isUnset($request->contraband)) {
            $query['Contraband'] = $request->contraband;
        }
        if (!Utils::isUnset($request->live)) {
            $query['Live'] = $request->live;
        }
        if (!Utils::isUnset($request->logo)) {
            $query['Logo'] = $request->logo;
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
        if (!Utils::isUnset($request->politics)) {
            $query['Politics'] = $request->politics;
        }
        if (!Utils::isUnset($request->porn)) {
            $query['Porn'] = $request->porn;
        }
        if (!Utils::isUnset($request->qrcode)) {
            $query['Qrcode'] = $request->qrcode;
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
        if (!Utils::isUnset($request->terrorism)) {
            $query['Terrorism'] = $request->terrorism;
        }
        if (!Utils::isUnset($request->spam)) {
            $query['spam'] = $request->spam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMCTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMCTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMcuTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMcuTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMedia',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaCategory',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaCover',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaCoverResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->publish)) {
            $query['Publish'] = $request->publish;
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
            'action'      => 'UpdateMediaPublishState',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaPublishStateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
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
        if (!Utils::isUnset($request->topology)) {
            $query['Topology'] = $request->topology;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaWorkflow',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->mediaWorkflowId)) {
            $query['MediaWorkflowId'] = $request->mediaWorkflowId;
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
        if (!Utils::isUnset($request->triggerMode)) {
            $query['TriggerMode'] = $request->triggerMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaWorkflowTriggerMode',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaWorkflowTriggerModeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
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
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipeline',
            'version'     => '2014-06-18',
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
     * @param UpdatePornPipelineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdatePornPipelineResponse
     */
    public function updatePornPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
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
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePornPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePornPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->analyseTypes)) {
            $query['AnalyseTypes'] = $request->analyseTypes;
        }
        if (!Utils::isUnset($request->faceCategoryIds)) {
            $query['FaceCategoryIds'] = $request->faceCategoryIds;
        }
        if (!Utils::isUnset($request->faceCustomParamsConfig)) {
            $query['FaceCustomParamsConfig'] = $request->faceCustomParamsConfig;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['Industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $query['IsDefault'] = $request->isDefault;
        }
        if (!Utils::isUnset($request->keywordConfig)) {
            $query['KeywordConfig'] = $request->keywordConfig;
        }
        if (!Utils::isUnset($request->knowledgeConfig)) {
            $query['KnowledgeConfig'] = $request->knowledgeConfig;
        }
        if (!Utils::isUnset($request->labelType)) {
            $query['LabelType'] = $request->labelType;
        }
        if (!Utils::isUnset($request->labelVersion)) {
            $query['LabelVersion'] = $request->labelVersion;
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
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
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
            'action'      => 'UpdateSmarttagTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSmarttagTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->audio)) {
            $query['Audio'] = $request->audio;
        }
        if (!Utils::isUnset($request->container)) {
            $query['Container'] = $request->container;
        }
        if (!Utils::isUnset($request->muxConfig)) {
            $query['MuxConfig'] = $request->muxConfig;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->transConfig)) {
            $query['TransConfig'] = $request->transConfig;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2014-06-18',
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
     * @param UpdateTerrorismPipelineRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateTerrorismPipelineResponse
     */
    public function updateTerrorismPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyConfig)) {
            $query['NotifyConfig'] = $request->notifyConfig;
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
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTerrorismPipeline',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTerrorismPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
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
        if (!Utils::isUnset($request->waterMarkTemplateId)) {
            $query['WaterMarkTemplateId'] = $request->waterMarkTemplateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWaterMarkTemplate',
            'version'     => '2014-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWaterMarkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
