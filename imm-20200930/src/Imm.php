<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddImageMosaicShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddStoryFilesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddStoryFilesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddStoryFilesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\AttachOSSBucketRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\AttachOSSBucketResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchDeleteFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchDeleteFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchDeleteFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchGetFigureClusterRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchGetFigureClusterResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchGetFigureClusterShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchGetFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchGetFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchGetFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchIndexFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchIndexFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchIndexFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchUpdateFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchUpdateFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchUpdateFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CompareImageFacesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CompareImageFacesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CompareImageFacesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ContextualAnswerRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ContextualAnswerResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ContextualAnswerShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ContextualRetrievalRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ContextualRetrievalResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ContextualRetrievalShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateArchiveFileInspectionTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateArchiveFileInspectionTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateArchiveFileInspectionTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateBatchRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateBatchResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateBatchShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateCompressPointCloudTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateCompressPointCloudTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateCompressPointCloudTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateCustomizedStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateCustomizedStoryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateCustomizedStoryShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDatasetShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDecodeBlindWatermarkTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDecodeBlindWatermarkTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDecodeBlindWatermarkTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFacesSearchingTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFacesSearchingTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFacesSearchingTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClusteringTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClusteringTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClusteringTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClustersMergingTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClustersMergingTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClustersMergingTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileCompressionTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileCompressionTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileCompressionTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileUncompressionTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileUncompressionTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileUncompressionTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageModerationTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageModerationTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageModerationTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageToPDFTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageToPDFTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageToPDFTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateOfficeConversionTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateOfficeConversionTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateOfficeConversionTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateSimilarImageClusteringTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateSimilarImageClusteringTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateSimilarImageClusteringTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateStoryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateStoryShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateTriggerRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateTriggerResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateTriggerShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateVideoLabelClassificationTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateVideoLabelClassificationTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateVideoLabelClassificationTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateVideoModerationTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateVideoModerationTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateVideoModerationTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteBatchRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteBatchResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteLocationDateClusterRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteLocationDateClusterResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteStoryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteTriggerRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteTriggerResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetachOSSBucketRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetachOSSBucketResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageBodiesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageBodiesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageBodiesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageCarsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageCarsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageCarsShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageCodesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageCodesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageCodesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageCroppingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageCroppingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageCroppingShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageFacesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageFacesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageFacesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageLabelsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageLabelsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageLabelsShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageScoreRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageScoreResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageScoreShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageTextsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageTextsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageTextsShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectMediaMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectMediaMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectMediaMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectTextAnomalyRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectTextAnomalyResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\EncodeBlindWatermarkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\EncodeBlindWatermarkResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ExtractDocumentTextRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ExtractDocumentTextResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ExtractDocumentTextShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\FuzzyQueryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\FuzzyQueryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\FuzzyQueryShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateWebofficeTokenRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateWebofficeTokenResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateWebofficeTokenShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetBatchRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetBatchResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDecodeBlindWatermarkResultRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDecodeBlindWatermarkResultResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDRMLicenseRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDRMLicenseResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFigureClusterRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFigureClusterResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetOSSBucketAttachmentRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetOSSBucketAttachmentResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetStoryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetTriggerRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetTriggerResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetVideoLabelClassificationResultRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetVideoLabelClassificationResultResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetVideoModerationResultRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetVideoModerationResultResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\IndexFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\IndexFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\IndexFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListAttachedOSSBucketsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListAttachedOSSBucketsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListBatchesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListBatchesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListBindingsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListBindingsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListProjectsShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTasksRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTasksResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTriggersRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTriggersResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryFigureClustersRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryFigureClustersResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryFigureClustersShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryLocationDateClustersRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryLocationDateClustersResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryLocationDateClustersShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\QuerySimilarImageClustersRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\QuerySimilarImageClustersResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryStoriesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryStoriesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryStoriesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\RefreshWebofficeTokenRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\RefreshWebofficeTokenResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\RefreshWebofficeTokenShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\RemoveStoryFilesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\RemoveStoryFilesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\RemoveStoryFilesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ResumeBatchRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ResumeBatchResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ResumeTriggerRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ResumeTriggerResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SearchImageFigureClusterRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SearchImageFigureClusterResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SearchImageFigureClusterShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SemanticQueryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SemanticQueryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SemanticQueryShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SuspendBatchRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SuspendBatchResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SuspendTriggerRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SuspendTriggerResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateBatchRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateBatchResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateBatchShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateDatasetShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFigureClusterRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFigureClusterResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFigureClusterShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateLocationDateClusterRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateLocationDateClusterResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateLocationDateClusterShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateProjectShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateStoryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateStoryShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateTriggerRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateTriggerResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateTriggerShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Imm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing-gov-1' => 'imm-vpc.cn-beijing-gov-1.aliyuncs.com',
            'us-west-1' => 'imm.us-west-1.aliyuncs.com',
            'us-east-1' => 'imm.us-east-1.aliyuncs.com',
            'eu-west-1' => 'imm.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'imm.eu-central-1.aliyuncs.com',
            'cn-zhangjiakou' => 'imm.cn-zhangjiakou.aliyuncs.com',
            'cn-wulanchabu' => 'imm.cn-wulanchabu.aliyuncs.com',
            'cn-shenzhen' => 'imm.cn-shenzhen.aliyuncs.com',
            'cn-shanghai' => 'imm.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'imm.cn-qingdao.aliyuncs.com',
            'cn-north-2-gov-1' => 'imm.cn-north-2-gov-1.aliyuncs.com',
            'cn-hongkong' => 'imm.cn-hongkong.aliyuncs.com',
            'cn-hangzhou' => 'imm.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'imm.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'imm.cn-chengdu.aliyuncs.com',
            'cn-beijing' => 'imm.cn-beijing.aliyuncs.com',
            'ap-southeast-5' => 'imm.ap-southeast-5.aliyuncs.com',
            'ap-southeast-2' => 'imm.ap-southeast-2.aliyuncs.com',
            'ap-southeast-1' => 'imm.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'imm.ap-south-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds mosaics, Gaussian blurs, or solid color shapes to blur one or more areas of an image for privacy protection and saves the output image to the specified path in Object Storage Service (OSS).
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * *   The operation accepts JPG and PNG images with a maximum side length of 30,000 pixels and a total of up to 250 million pixels.
     *
     * @param tmpReq - AddImageMosaicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddImageMosaicResponse
     *
     * @param AddImageMosaicRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return AddImageMosaicResponse
     */
    public function addImageMosaicWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddImageMosaicShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->targets) {
            $request->targetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->targets, 'Targets', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->imageFormat) {
            @$query['ImageFormat'] = $request->imageFormat;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->quality) {
            @$query['Quality'] = $request->quality;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->targetURI) {
            @$query['TargetURI'] = $request->targetURI;
        }

        if (null !== $request->targetsShrink) {
            @$query['Targets'] = $request->targetsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddImageMosaic',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddImageMosaicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds mosaics, Gaussian blurs, or solid color shapes to blur one or more areas of an image for privacy protection and saves the output image to the specified path in Object Storage Service (OSS).
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * *   The operation accepts JPG and PNG images with a maximum side length of 30,000 pixels and a total of up to 250 million pixels.
     *
     * @param request - AddImageMosaicRequest
     *
     * @returns AddImageMosaicResponse
     *
     * @param AddImageMosaicRequest $request
     *
     * @return AddImageMosaicResponse
     */
    public function addImageMosaic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageMosaicWithOptions($request, $runtime);
    }

    /**
     * Adds objects to a story.
     *
     * @param tmpReq - AddStoryFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddStoryFilesResponse
     *
     * @param AddStoryFilesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return AddStoryFilesResponse
     */
    public function addStoryFilesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddStoryFilesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }

        $body = [];
        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->filesShrink) {
            @$body['Files'] = $request->filesShrink;
        }

        if (null !== $request->objectId) {
            @$body['ObjectId'] = $request->objectId;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddStoryFiles',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddStoryFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds objects to a story.
     *
     * @param request - AddStoryFilesRequest
     *
     * @returns AddStoryFilesResponse
     *
     * @param AddStoryFilesRequest $request
     *
     * @return AddStoryFilesResponse
     */
    public function addStoryFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addStoryFilesWithOptions($request, $runtime);
    }

    /**
     * Binds an Object Storage Service (OSS) bucket to the specified project. The binding enables you to use IMM features by using the x-oss-process parameter.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   To use data processing capabilities of IMM based on the x-oss-process parameter, you must bind an OSS bucket to an IMM project. For more information, see [x-oss-process](https://help.aliyun.com/document_detail/2391270.html).
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *
     * @param request - AttachOSSBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachOSSBucketResponse
     *
     * @param AttachOSSBucketRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AttachOSSBucketResponse
     */
    public function attachOSSBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->OSSBucket) {
            @$query['OSSBucket'] = $request->OSSBucket;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachOSSBucket',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachOSSBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds an Object Storage Service (OSS) bucket to the specified project. The binding enables you to use IMM features by using the x-oss-process parameter.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   To use data processing capabilities of IMM based on the x-oss-process parameter, you must bind an OSS bucket to an IMM project. For more information, see [x-oss-process](https://help.aliyun.com/document_detail/2391270.html).
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *
     * @param request - AttachOSSBucketRequest
     *
     * @returns AttachOSSBucketResponse
     *
     * @param AttachOSSBucketRequest $request
     *
     * @return AttachOSSBucketResponse
     */
    public function attachOSSBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachOSSBucketWithOptions($request, $runtime);
    }

    /**
     * Deletes the metadata of multiple files from a dataset.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   A successful deletion message is returned regardless of whether the metadata of the file exists in the dataset.
     * >
     * *   If you delete the metadata of a file from a dataset, the file stored in Object Storage Service (OSS) or Photo and Drive Service is **not** deleted. If you want to delete the file, use the operations provided by OSS or Photo and Drive Service.
     * *   Metadata deletion affects existing face groups and stories but does not affect existing spatiotemporal groups.
     *
     * @param tmpReq - BatchDeleteFileMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteFileMetaResponse
     *
     * @param BatchDeleteFileMetaRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return BatchDeleteFileMetaResponse
     */
    public function batchDeleteFileMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchDeleteFileMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->URIs) {
            $request->URIsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->URIs, 'URIs', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->URIsShrink) {
            @$query['URIs'] = $request->URIsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteFileMeta',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the metadata of multiple files from a dataset.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   A successful deletion message is returned regardless of whether the metadata of the file exists in the dataset.
     * >
     * *   If you delete the metadata of a file from a dataset, the file stored in Object Storage Service (OSS) or Photo and Drive Service is **not** deleted. If you want to delete the file, use the operations provided by OSS or Photo and Drive Service.
     * *   Metadata deletion affects existing face groups and stories but does not affect existing spatiotemporal groups.
     *
     * @param request - BatchDeleteFileMetaRequest
     *
     * @returns BatchDeleteFileMetaResponse
     *
     * @param BatchDeleteFileMetaRequest $request
     *
     * @return BatchDeleteFileMetaResponse
     */
    public function batchDeleteFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteFileMetaWithOptions($request, $runtime);
    }

    /**
     * Queries face clusters.
     *
     * @param tmpReq - BatchGetFigureClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetFigureClusterResponse
     *
     * @param BatchGetFigureClusterRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return BatchGetFigureClusterResponse
     */
    public function batchGetFigureClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchGetFigureClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->objectIds) {
            $request->objectIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectIds, 'ObjectIds', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->objectIdsShrink) {
            @$query['ObjectIds'] = $request->objectIdsShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetFigureCluster',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetFigureClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries face clusters.
     *
     * @param request - BatchGetFigureClusterRequest
     *
     * @returns BatchGetFigureClusterResponse
     *
     * @param BatchGetFigureClusterRequest $request
     *
     * @return BatchGetFigureClusterResponse
     */
    public function batchGetFigureCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetFigureClusterWithOptions($request, $runtime);
    }

    /**
     * Queries metadata of multiple objects or files in the specified dataset.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, feel free to join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     *
     * @param tmpReq - BatchGetFileMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetFileMetaResponse
     *
     * @param BatchGetFileMetaRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return BatchGetFileMetaResponse
     */
    public function batchGetFileMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchGetFileMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->URIs) {
            $request->URIsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->URIs, 'URIs', 'json');
        }

        if (null !== $tmpReq->withFields) {
            $request->withFieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->URIsShrink) {
            @$query['URIs'] = $request->URIsShrink;
        }

        if (null !== $request->withFieldsShrink) {
            @$query['WithFields'] = $request->withFieldsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetFileMeta',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries metadata of multiple objects or files in the specified dataset.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, feel free to join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     *
     * @param request - BatchGetFileMetaRequest
     *
     * @returns BatchGetFileMetaResponse
     *
     * @param BatchGetFileMetaRequest $request
     *
     * @return BatchGetFileMetaResponse
     */
    public function batchGetFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetFileMetaWithOptions($request, $runtime);
    }

    /**
     * This operation performs a batch index of object metadata by processing input files for tasks such as label detection, face detection, and location detection. The object metadata is then indexed into a dataset to support various data retrieval methods.
     *
     * @remarks
     * - **Before you use this API, review the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     * - For a list of supported data processing tasks, see [Define a workflow](https://help.aliyun.com/document_detail/466304.html).
     * - The files to be indexed are subject to limits on their total number and size. For more information about dataset limits, see [Limits](https://help.aliyun.com/document_detail/475569.html). For information about how to create a dataset, see the parameter descriptions.
     * - For information about the regions that support file indexing, see the dataset and index information in [Limits](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param tmpReq - BatchIndexFileMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchIndexFileMetaResponse
     *
     * @param BatchIndexFileMetaRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return BatchIndexFileMetaResponse
     */
    public function batchIndexFileMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchIndexFileMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->filesShrink) {
            @$query['Files'] = $request->filesShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchIndexFileMeta',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchIndexFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation performs a batch index of object metadata by processing input files for tasks such as label detection, face detection, and location detection. The object metadata is then indexed into a dataset to support various data retrieval methods.
     *
     * @remarks
     * - **Before you use this API, review the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     * - For a list of supported data processing tasks, see [Define a workflow](https://help.aliyun.com/document_detail/466304.html).
     * - The files to be indexed are subject to limits on their total number and size. For more information about dataset limits, see [Limits](https://help.aliyun.com/document_detail/475569.html). For information about how to create a dataset, see the parameter descriptions.
     * - For information about the regions that support file indexing, see the dataset and index information in [Limits](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param request - BatchIndexFileMetaRequest
     *
     * @returns BatchIndexFileMetaResponse
     *
     * @param BatchIndexFileMetaRequest $request
     *
     * @return BatchIndexFileMetaResponse
     */
    public function batchIndexFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchIndexFileMetaWithOptions($request, $runtime);
    }

    /**
     * Updates some metadata items of files indexed into a dataset.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   You cannot call this operation to update all metadata. You can update only metadata fields such as CustomLabels, CustomId, and Figures. For more information, see the "Request parameters" section of this topic.
     *
     * @param tmpReq - BatchUpdateFileMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUpdateFileMetaResponse
     *
     * @param BatchUpdateFileMetaRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return BatchUpdateFileMetaResponse
     */
    public function batchUpdateFileMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchUpdateFileMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->filesShrink) {
            @$query['Files'] = $request->filesShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchUpdateFileMeta',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUpdateFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates some metadata items of files indexed into a dataset.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   You cannot call this operation to update all metadata. You can update only metadata fields such as CustomLabels, CustomId, and Figures. For more information, see the "Request parameters" section of this topic.
     *
     * @param request - BatchUpdateFileMetaRequest
     *
     * @returns BatchUpdateFileMetaResponse
     *
     * @param BatchUpdateFileMetaRequest $request
     *
     * @return BatchUpdateFileMetaResponse
     */
    public function batchUpdateFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateFileMetaWithOptions($request, $runtime);
    }

    /**
     * Compares the similarity of the largest faces in two images. The largest face refers to the largest face frame in an image after face detection.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   For the input image, only the face with the largest face frame in the image is used for face comparison. The face frame detection result is consistent with the responses of the [DetectImageFaces](https://help.aliyun.com/document_detail/478213.html) operation.
     *
     * @param tmpReq - CompareImageFacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareImageFacesResponse
     *
     * @param CompareImageFacesRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CompareImageFacesResponse
     */
    public function compareImageFacesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CompareImageFacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->source) {
            $request->sourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->source, 'Source', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceShrink) {
            @$query['Source'] = $request->sourceShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CompareImageFaces',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompareImageFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Compares the similarity of the largest faces in two images. The largest face refers to the largest face frame in an image after face detection.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   For the input image, only the face with the largest face frame in the image is used for face comparison. The face frame detection result is consistent with the responses of the [DetectImageFaces](https://help.aliyun.com/document_detail/478213.html) operation.
     *
     * @param request - CompareImageFacesRequest
     *
     * @returns CompareImageFacesResponse
     *
     * @param CompareImageFacesRequest $request
     *
     * @return CompareImageFacesResponse
     */
    public function compareImageFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareImageFacesWithOptions($request, $runtime);
    }

    /**
     * Phase II of AI Assistant, Q\\&A API.
     *
     * @remarks
     * ### Precautions
     * - Before using this interface, please make sure you fully understand the billing method and [pricing](https://help.aliyun.com/zh/imm/product-overview/billable-items?spm=openapi-amp.newDocPublishment.0.0.1ecd281fi27Zgk) of the Intelligent Media Management product.
     * - Before calling this interface, ensure that you have indexed the files into the dataset (Dataset) through binding ([CreateBinding](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-createbinding?spm=a2c4g.11186623.0.0.a3d76f44xJrOnF)) or active indexing ([IndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-indexfilemeta?spm=a2c4g.11186623.help-menu-search-62354.d_0) or [BatchIndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-batchindexfilemeta?spm=a2c4g.11186623.help-menu-62354.d_5_2_4_2_1_1.f1d86f44iBs3QZ)).
     * - The returned result is only an example. Depending on the [workflow template configuration](https://help.aliyun.com/zh/imm/user-guide/workflow-templates-and-operators?spm=a2c4g.11186623.0.0.a3d775abr3hDFp), the categories and content of the file metadata information obtained may differ from the example. If you have any questions, please join the DingTalk group by searching for the group number 21714099 in DingTalk.
     * ### Usage Restrictions
     * - The maximum length of the historical conversation is 100, including both user and assistant messages.
     * - Each message should not exceed 1000 Chinese characters.
     *
     * @param tmpReq - ContextualAnswerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContextualAnswerResponse
     *
     * @param ContextualAnswerRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ContextualAnswerResponse
     */
    public function contextualAnswerWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ContextualAnswerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }

        if (null !== $tmpReq->messages) {
            $request->messagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->messages, 'Messages', 'json');
        }

        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $body = [];
        if (null !== $request->filesShrink) {
            @$body['Files'] = $request->filesShrink;
        }

        if (null !== $request->messagesShrink) {
            @$body['Messages'] = $request->messagesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ContextualAnswer',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield ContextualAnswerResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Phase II of AI Assistant, Q\\&A API.
     *
     * @remarks
     * ### Precautions
     * - Before using this interface, please make sure you fully understand the billing method and [pricing](https://help.aliyun.com/zh/imm/product-overview/billable-items?spm=openapi-amp.newDocPublishment.0.0.1ecd281fi27Zgk) of the Intelligent Media Management product.
     * - Before calling this interface, ensure that you have indexed the files into the dataset (Dataset) through binding ([CreateBinding](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-createbinding?spm=a2c4g.11186623.0.0.a3d76f44xJrOnF)) or active indexing ([IndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-indexfilemeta?spm=a2c4g.11186623.help-menu-search-62354.d_0) or [BatchIndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-batchindexfilemeta?spm=a2c4g.11186623.help-menu-62354.d_5_2_4_2_1_1.f1d86f44iBs3QZ)).
     * - The returned result is only an example. Depending on the [workflow template configuration](https://help.aliyun.com/zh/imm/user-guide/workflow-templates-and-operators?spm=a2c4g.11186623.0.0.a3d775abr3hDFp), the categories and content of the file metadata information obtained may differ from the example. If you have any questions, please join the DingTalk group by searching for the group number 21714099 in DingTalk.
     * ### Usage Restrictions
     * - The maximum length of the historical conversation is 100, including both user and assistant messages.
     * - Each message should not exceed 1000 Chinese characters.
     *
     * @param tmpReq - ContextualAnswerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContextualAnswerResponse
     *
     * @param ContextualAnswerRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ContextualAnswerResponse
     */
    public function contextualAnswerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ContextualAnswerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }

        if (null !== $tmpReq->messages) {
            $request->messagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->messages, 'Messages', 'json');
        }

        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $body = [];
        if (null !== $request->filesShrink) {
            @$body['Files'] = $request->filesShrink;
        }

        if (null !== $request->messagesShrink) {
            @$body['Messages'] = $request->messagesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ContextualAnswer',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContextualAnswerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Phase II of AI Assistant, Q\\&A API.
     *
     * @remarks
     * ### Precautions
     * - Before using this interface, please make sure you fully understand the billing method and [pricing](https://help.aliyun.com/zh/imm/product-overview/billable-items?spm=openapi-amp.newDocPublishment.0.0.1ecd281fi27Zgk) of the Intelligent Media Management product.
     * - Before calling this interface, ensure that you have indexed the files into the dataset (Dataset) through binding ([CreateBinding](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-createbinding?spm=a2c4g.11186623.0.0.a3d76f44xJrOnF)) or active indexing ([IndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-indexfilemeta?spm=a2c4g.11186623.help-menu-search-62354.d_0) or [BatchIndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-batchindexfilemeta?spm=a2c4g.11186623.help-menu-62354.d_5_2_4_2_1_1.f1d86f44iBs3QZ)).
     * - The returned result is only an example. Depending on the [workflow template configuration](https://help.aliyun.com/zh/imm/user-guide/workflow-templates-and-operators?spm=a2c4g.11186623.0.0.a3d775abr3hDFp), the categories and content of the file metadata information obtained may differ from the example. If you have any questions, please join the DingTalk group by searching for the group number 21714099 in DingTalk.
     * ### Usage Restrictions
     * - The maximum length of the historical conversation is 100, including both user and assistant messages.
     * - Each message should not exceed 1000 Chinese characters.
     *
     * @param request - ContextualAnswerRequest
     *
     * @returns ContextualAnswerResponse
     *
     * @param ContextualAnswerRequest $request
     *
     * @return ContextualAnswerResponse
     */
    public function contextualAnswer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contextualAnswerWithOptions($request, $runtime);
    }

    /**
     * Retrieves semantically similar documents. The operation is designed for multi-turn conversations and can process message input in historical conversations. The operation returns results that are highly related to the current conversation based on an in-depth understanding of contextual content. It provides consistent and efficient information retrieval in multi-turn conversations.
     *
     * @remarks
     * ### 注意事项
     * - 请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](https://help.aliyun.com/zh/imm/product-overview/billable-items?spm=openapi-amp.newDocPublishment.0.0.1ecd281fi27Zgk)。
     * - 调用该接口前，请确保您已通过绑定方式（ [CreateBinding](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-createbinding?spm=a2c4g.11186623.0.0.a3d76f44xJrOnF) ）或者主动索引（ [IndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-indexfilemeta?spm=a2c4g.11186623.help-menu-search-62354.d_0) 或者 [BatchIndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-batchindexfilemeta?spm=a2c4g.11186623.help-menu-62354.d_5_2_4_2_1_1.f1d86f44iBs3QZ) ）方式将文件索引到数据集（Dataset）中。
     * - 返回结果仅为示例，根据[工作流模板配置](https://help.aliyun.com/zh/imm/user-guide/workflow-templates-and-operators?spm=a2c4g.11186623.0.0.a3d775abr3hDFp)不同，获取到的文件元数据信息的类别和包含的内容均有可能与示例不同。如果有疑问，请使用钉钉搜索钉钉群号 21714099 加入钉钉群进行反馈。
     * ### 使用限制
     * - 历史对话长度最长限制为 100，包括用户消息和助手消息。
     * - 每条消息长度不超过 1000 个汉字。
     *
     * @param tmpReq - ContextualRetrievalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContextualRetrievalResponse
     *
     * @param ContextualRetrievalRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ContextualRetrievalResponse
     */
    public function contextualRetrievalWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ContextualRetrievalShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->messages) {
            $request->messagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->messages, 'Messages', 'json');
        }

        if (null !== $tmpReq->smartClusterIds) {
            $request->smartClusterIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->smartClusterIds, 'SmartClusterIds', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->recallOnly) {
            @$query['RecallOnly'] = $request->recallOnly;
        }

        $body = [];
        if (null !== $request->messagesShrink) {
            @$body['Messages'] = $request->messagesShrink;
        }

        if (null !== $request->smartClusterIdsShrink) {
            @$body['SmartClusterIds'] = $request->smartClusterIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ContextualRetrieval',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContextualRetrievalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves semantically similar documents. The operation is designed for multi-turn conversations and can process message input in historical conversations. The operation returns results that are highly related to the current conversation based on an in-depth understanding of contextual content. It provides consistent and efficient information retrieval in multi-turn conversations.
     *
     * @remarks
     * ### 注意事项
     * - 请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](https://help.aliyun.com/zh/imm/product-overview/billable-items?spm=openapi-amp.newDocPublishment.0.0.1ecd281fi27Zgk)。
     * - 调用该接口前，请确保您已通过绑定方式（ [CreateBinding](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-createbinding?spm=a2c4g.11186623.0.0.a3d76f44xJrOnF) ）或者主动索引（ [IndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-indexfilemeta?spm=a2c4g.11186623.help-menu-search-62354.d_0) 或者 [BatchIndexFileMeta](https://help.aliyun.com/zh/imm/developer-reference/api-imm-2020-09-30-batchindexfilemeta?spm=a2c4g.11186623.help-menu-62354.d_5_2_4_2_1_1.f1d86f44iBs3QZ) ）方式将文件索引到数据集（Dataset）中。
     * - 返回结果仅为示例，根据[工作流模板配置](https://help.aliyun.com/zh/imm/user-guide/workflow-templates-and-operators?spm=a2c4g.11186623.0.0.a3d775abr3hDFp)不同，获取到的文件元数据信息的类别和包含的内容均有可能与示例不同。如果有疑问，请使用钉钉搜索钉钉群号 21714099 加入钉钉群进行反馈。
     * ### 使用限制
     * - 历史对话长度最长限制为 100，包括用户消息和助手消息。
     * - 每条消息长度不超过 1000 个汉字。
     *
     * @param request - ContextualRetrievalRequest
     *
     * @returns ContextualRetrievalResponse
     *
     * @param ContextualRetrievalRequest $request
     *
     * @return ContextualRetrievalResponse
     */
    public function contextualRetrieval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contextualRetrievalWithOptions($request, $runtime);
    }

    /**
     * Creates a task to inspect a compressed file and retrieve a list of its contents without decompressing the file.
     *
     * @remarks
     * > This API is in public preview. If you have any questions, join the DingTalk group to provide feedback. For the DingTalk group number, see [Contact us](https://help.aliyun.com/document_detail/84454.html).
     * - **Before using this API, make sure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM)**.
     *   >Notice: The completion time of asynchronous tasks is not guaranteed.
     * - File count limit: A compressed file can contain a maximum of 80,000 files.
     * - File size limit: The maximum size is 200 GB for ZIP and RAR files, and 50 GB for 7z files.
     * - This is an asynchronous API. Task information is saved for 7 days after a task starts and is then deleted. To view the task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through notification messages.
     *
     * @param tmpReq - CreateArchiveFileInspectionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateArchiveFileInspectionTaskResponse
     *
     * @param CreateArchiveFileInspectionTaskRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateArchiveFileInspectionTaskResponse
     */
    public function createArchiveFileInspectionTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateArchiveFileInspectionTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateArchiveFileInspectionTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateArchiveFileInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task to inspect a compressed file and retrieve a list of its contents without decompressing the file.
     *
     * @remarks
     * > This API is in public preview. If you have any questions, join the DingTalk group to provide feedback. For the DingTalk group number, see [Contact us](https://help.aliyun.com/document_detail/84454.html).
     * - **Before using this API, make sure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM)**.
     *   >Notice: The completion time of asynchronous tasks is not guaranteed.
     * - File count limit: A compressed file can contain a maximum of 80,000 files.
     * - File size limit: The maximum size is 200 GB for ZIP and RAR files, and 50 GB for 7z files.
     * - This is an asynchronous API. Task information is saved for 7 days after a task starts and is then deleted. To view the task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through notification messages.
     *
     * @param request - CreateArchiveFileInspectionTaskRequest
     *
     * @returns CreateArchiveFileInspectionTaskResponse
     *
     * @param CreateArchiveFileInspectionTaskRequest $request
     *
     * @return CreateArchiveFileInspectionTaskResponse
     */
    public function createArchiveFileInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createArchiveFileInspectionTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a batch processing task that performs specified operations, such as transcoding and format conversion, on multiple existing files.
     *
     * @remarks
     * If you want to process data using [Object Storage Service (OSS) data processing](https://help.aliyun.com/document_detail/99372.html), make sure you [bind an OSS bucket](https://help.aliyun.com/document_detail/478206.html) before you create a batch processing task.
     *
     * @param tmpReq - CreateBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBatchResponse
     *
     * @param CreateBatchRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateBatchResponse
     */
    public function createBatchWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateBatchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->actions) {
            $request->actionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->actions, 'Actions', 'json');
        }

        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $body = [];
        if (null !== $request->actionsShrink) {
            @$body['Actions'] = $request->actionsShrink;
        }

        if (null !== $request->inputShrink) {
            @$body['Input'] = $request->inputShrink;
        }

        if (null !== $request->notificationShrink) {
            @$body['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->serviceRole) {
            @$body['ServiceRole'] = $request->serviceRole;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBatch',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a batch processing task that performs specified operations, such as transcoding and format conversion, on multiple existing files.
     *
     * @remarks
     * If you want to process data using [Object Storage Service (OSS) data processing](https://help.aliyun.com/document_detail/99372.html), make sure you [bind an OSS bucket](https://help.aliyun.com/document_detail/478206.html) before you create a batch processing task.
     *
     * @param request - CreateBatchRequest
     *
     * @returns CreateBatchResponse
     *
     * @param CreateBatchRequest $request
     *
     * @return CreateBatchResponse
     */
    public function createBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchWithOptions($request, $runtime);
    }

    /**
     * Creates a binding relationship between a dataset and an Object Storage Service (OSS) bucket. This allows for the automatic synchronization of incremental and full data and indexing.
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/2743997.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * > Asynchronous processing does not guarantee timely task completion.
     * Before you create a binding, make sure that the project and the dataset that you want to use exist.
     * - For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * - For information about how to create a dataset, see [CreateDataset](https://help.aliyun.com/document_detail/478160.html).
     * > The CreateBinding operation works by using the [workflow template](https://help.aliyun.com/document_detail/466304.html) that is specified when you created the project or dataset.
     * After you create a binding between a dataset and an OSS bucket, IMM scans the existing objects in the bucket and extracts metadata based on the scanning result. Then, IMM creates an index from the extracted metadata. If new objects are uploaded to the OSS bucket, IMM tracks and scans the objects and updates the index. For objects whose metadata index is created by calling this operation, you can call query operations, such as [SimpleQuery](https://help.aliyun.com/document_detail/478175.html), to query objects, manage objects, and collect statistics on objects.
     *
     * @param request - CreateBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBindingResponse
     *
     * @param CreateBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBindingResponse
     */
    public function createBindingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->URI) {
            @$query['URI'] = $request->URI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBinding',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a binding relationship between a dataset and an Object Storage Service (OSS) bucket. This allows for the automatic synchronization of incremental and full data and indexing.
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/2743997.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * > Asynchronous processing does not guarantee timely task completion.
     * Before you create a binding, make sure that the project and the dataset that you want to use exist.
     * - For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * - For information about how to create a dataset, see [CreateDataset](https://help.aliyun.com/document_detail/478160.html).
     * > The CreateBinding operation works by using the [workflow template](https://help.aliyun.com/document_detail/466304.html) that is specified when you created the project or dataset.
     * After you create a binding between a dataset and an OSS bucket, IMM scans the existing objects in the bucket and extracts metadata based on the scanning result. Then, IMM creates an index from the extracted metadata. If new objects are uploaded to the OSS bucket, IMM tracks and scans the objects and updates the index. For objects whose metadata index is created by calling this operation, you can call query operations, such as [SimpleQuery](https://help.aliyun.com/document_detail/478175.html), to query objects, manage objects, and collect statistics on objects.
     *
     * @param request - CreateBindingRequest
     *
     * @returns CreateBindingResponse
     *
     * @param CreateBindingRequest $request
     *
     * @return CreateBindingResponse
     */
    public function createBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBindingWithOptions($request, $runtime);
    }

    /**
     * The point cloud compression feature compresses point cloud data in Object Storage Service (OSS). This helps reduce data transmission over the network.
     *
     * @remarks
     * - **Before you use this API, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     *   >Notice: The completion time of asynchronous tasks is not guaranteed.
     * - File format: Only point cloud files in the PCD format are supported.
     * - This is an asynchronous API. After a task starts, its information is saved for only 7 days. After this period, the information cannot be retrieved. To view task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation and use the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through notification messages.
     *
     * @param tmpReq - CreateCompressPointCloudTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCompressPointCloudTaskResponse
     *
     * @param CreateCompressPointCloudTaskRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateCompressPointCloudTaskResponse
     */
    public function createCompressPointCloudTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCompressPointCloudTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->kdtreeOption) {
            $request->kdtreeOptionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->kdtreeOption, 'KdtreeOption', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->octreeOption) {
            $request->octreeOptionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->octreeOption, 'OctreeOption', 'json');
        }

        if (null !== $tmpReq->pointCloudFields) {
            $request->pointCloudFieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->pointCloudFields, 'PointCloudFields', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->compressMethod) {
            @$query['CompressMethod'] = $request->compressMethod;
        }

        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->kdtreeOptionShrink) {
            @$query['KdtreeOption'] = $request->kdtreeOptionShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->octreeOptionShrink) {
            @$query['OctreeOption'] = $request->octreeOptionShrink;
        }

        if (null !== $request->pointCloudFieldsShrink) {
            @$query['PointCloudFields'] = $request->pointCloudFieldsShrink;
        }

        if (null !== $request->pointCloudFileFormat) {
            @$query['PointCloudFileFormat'] = $request->pointCloudFileFormat;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->targetURI) {
            @$query['TargetURI'] = $request->targetURI;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCompressPointCloudTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCompressPointCloudTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The point cloud compression feature compresses point cloud data in Object Storage Service (OSS). This helps reduce data transmission over the network.
     *
     * @remarks
     * - **Before you use this API, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     *   >Notice: The completion time of asynchronous tasks is not guaranteed.
     * - File format: Only point cloud files in the PCD format are supported.
     * - This is an asynchronous API. After a task starts, its information is saved for only 7 days. After this period, the information cannot be retrieved. To view task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation and use the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through notification messages.
     *
     * @param request - CreateCompressPointCloudTaskRequest
     *
     * @returns CreateCompressPointCloudTaskResponse
     *
     * @param CreateCompressPointCloudTaskRequest $request
     *
     * @return CreateCompressPointCloudTaskResponse
     */
    public function createCompressPointCloudTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCompressPointCloudTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a story based on the specified images and videos.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     *
     * @param tmpReq - CreateCustomizedStoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomizedStoryResponse
     *
     * @param CreateCustomizedStoryRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCustomizedStoryResponse
     */
    public function createCustomizedStoryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCustomizedStoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cover) {
            $request->coverShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cover, 'Cover', 'json');
        }

        if (null !== $tmpReq->customLabels) {
            $request->customLabelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }

        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }

        $body = [];
        if (null !== $request->coverShrink) {
            @$body['Cover'] = $request->coverShrink;
        }

        if (null !== $request->customLabelsShrink) {
            @$body['CustomLabels'] = $request->customLabelsShrink;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->filesShrink) {
            @$body['Files'] = $request->filesShrink;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->storyName) {
            @$body['StoryName'] = $request->storyName;
        }

        if (null !== $request->storySubType) {
            @$body['StorySubType'] = $request->storySubType;
        }

        if (null !== $request->storyType) {
            @$body['StoryType'] = $request->storyType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCustomizedStory',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomizedStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a story based on the specified images and videos.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     *
     * @param request - CreateCustomizedStoryRequest
     *
     * @returns CreateCustomizedStoryResponse
     *
     * @param CreateCustomizedStoryRequest $request
     *
     * @return CreateCustomizedStoryResponse
     */
    public function createCustomizedStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomizedStoryWithOptions($request, $runtime);
    }

    /**
     * Create a dataset.
     *
     * @remarks
     * - **You must understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management before using this API.**
     * - Dataset names must be unique within a project.
     * - The number of datasets you can create is limited. You can query this limit using [GetProject](https://help.aliyun.com/document_detail/478155.html).
     * - After creating a dataset, you can use [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) to index object metadata. This enables diverse [data retrieval and statistics](https://help.aliyun.com/document_detail/478175.html) and intelligent management.
     *
     * @param tmpReq - CreateDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatasetResponse
     *
     * @param CreateDatasetRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
     */
    public function createDatasetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDatasetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->datasetConfig) {
            $request->datasetConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->datasetConfig, 'DatasetConfig', 'json');
        }

        if (null !== $tmpReq->workflowParameters) {
            $request->workflowParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workflowParameters, 'WorkflowParameters', 'json');
        }

        $query = [];
        if (null !== $request->datasetConfigShrink) {
            @$query['DatasetConfig'] = $request->datasetConfigShrink;
        }

        if (null !== $request->datasetMaxBindCount) {
            @$query['DatasetMaxBindCount'] = $request->datasetMaxBindCount;
        }

        if (null !== $request->datasetMaxEntityCount) {
            @$query['DatasetMaxEntityCount'] = $request->datasetMaxEntityCount;
        }

        if (null !== $request->datasetMaxFileCount) {
            @$query['DatasetMaxFileCount'] = $request->datasetMaxFileCount;
        }

        if (null !== $request->datasetMaxRelationCount) {
            @$query['DatasetMaxRelationCount'] = $request->datasetMaxRelationCount;
        }

        if (null !== $request->datasetMaxTotalFileSize) {
            @$query['DatasetMaxTotalFileSize'] = $request->datasetMaxTotalFileSize;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->workflowParametersShrink) {
            @$query['WorkflowParameters'] = $request->workflowParametersShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataset',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a dataset.
     *
     * @remarks
     * - **You must understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management before using this API.**
     * - Dataset names must be unique within a project.
     * - The number of datasets you can create is limited. You can query this limit using [GetProject](https://help.aliyun.com/document_detail/478155.html).
     * - After creating a dataset, you can use [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) to index object metadata. This enables diverse [data retrieval and statistics](https://help.aliyun.com/document_detail/478175.html) and intelligent management.
     *
     * @param request - CreateDatasetRequest
     *
     * @returns CreateDatasetResponse
     *
     * @param CreateDatasetRequest $request
     *
     * @return CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetWithOptions($request, $runtime);
    }

    /**
     * Extracts a blind watermark.
     *
     * @remarks
     * - Before you use this API, make sure that you understand the billing methods and pricing of Intelligent Media Management (IMM).
     *   >Notice: Asynchronous tasks are not guaranteed to be completed within a specific time frame.
     * - Make sure that a project is created in IMM. For more information, see [Create a project](https://help.aliyun.com/document_detail/478153.html).
     * - Make sure the service region and project are the same as those used to add the blind watermark using the [EncodeBlindWatermark](https://help.aliyun.com/document_detail/2743655.html) operation. Otherwise, the watermark cannot be extracted.
     * - The watermark can be extracted even after the image undergoes attacks such as compression, scaling, clipping, and color changes.
     * - This API is compatible with the previous version of the blind watermarking feature. Some parameters are from the previous DecodeBlindWatermark API.
     * - This is an asynchronous API. After a task starts, its information is saved for only 7 days. After this period, the information can no longer be retrieved. Call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) API to retrieve the TaskId and view task information. Alternatively, set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through asynchronous notification messages.
     *
     * @param tmpReq - CreateDecodeBlindWatermarkTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDecodeBlindWatermarkTaskResponse
     *
     * @param CreateDecodeBlindWatermarkTaskRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateDecodeBlindWatermarkTaskResponse
     */
    public function createDecodeBlindWatermarkTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDecodeBlindWatermarkTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        $query = [];
        if (null !== $request->imageQuality) {
            @$query['ImageQuality'] = $request->imageQuality;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->originalImageURI) {
            @$query['OriginalImageURI'] = $request->originalImageURI;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->strengthLevel) {
            @$query['StrengthLevel'] = $request->strengthLevel;
        }

        if (null !== $request->targetURI) {
            @$query['TargetURI'] = $request->targetURI;
        }

        if (null !== $request->watermarkType) {
            @$query['WatermarkType'] = $request->watermarkType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDecodeBlindWatermarkTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDecodeBlindWatermarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Extracts a blind watermark.
     *
     * @remarks
     * - Before you use this API, make sure that you understand the billing methods and pricing of Intelligent Media Management (IMM).
     *   >Notice: Asynchronous tasks are not guaranteed to be completed within a specific time frame.
     * - Make sure that a project is created in IMM. For more information, see [Create a project](https://help.aliyun.com/document_detail/478153.html).
     * - Make sure the service region and project are the same as those used to add the blind watermark using the [EncodeBlindWatermark](https://help.aliyun.com/document_detail/2743655.html) operation. Otherwise, the watermark cannot be extracted.
     * - The watermark can be extracted even after the image undergoes attacks such as compression, scaling, clipping, and color changes.
     * - This API is compatible with the previous version of the blind watermarking feature. Some parameters are from the previous DecodeBlindWatermark API.
     * - This is an asynchronous API. After a task starts, its information is saved for only 7 days. After this period, the information can no longer be retrieved. Call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) API to retrieve the TaskId and view task information. Alternatively, set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through asynchronous notification messages.
     *
     * @param request - CreateDecodeBlindWatermarkTaskRequest
     *
     * @returns CreateDecodeBlindWatermarkTaskResponse
     *
     * @param CreateDecodeBlindWatermarkTaskRequest $request
     *
     * @return CreateDecodeBlindWatermarkTaskResponse
     */
    public function createDecodeBlindWatermarkTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDecodeBlindWatermarkTaskWithOptions($request, $runtime);
    }

    /**
     * Searches a media set for the top N images most similar to a specified image or face ID. The operation returns the corresponding face IDs and bounding boxes, sorted by similarity in descending order.
     *
     * @remarks
     * - **Before you use this operation, review the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html)**
     *   >Notice:
     *   The execution time of asynchronous tasks is not guaranteed.
     *
     * - For each input image, only the face with the largest bounding box is used for the face search.
     * - This is an asynchronous operation. After a task starts, the task information is retained for 7 days and cannot be retrieved after this period. To retrieve task information, you can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. Alternatively, you can configure the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive asynchronous notifications that contain task information.
     *
     * @param tmpReq - CreateFacesSearchingTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFacesSearchingTaskResponse
     *
     * @param CreateFacesSearchingTaskRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateFacesSearchingTaskResponse
     */
    public function createFacesSearchingTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFacesSearchingTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourcesShrink) {
            @$query['Sources'] = $request->sourcesShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFacesSearchingTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFacesSearchingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches a media set for the top N images most similar to a specified image or face ID. The operation returns the corresponding face IDs and bounding boxes, sorted by similarity in descending order.
     *
     * @remarks
     * - **Before you use this operation, review the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html)**
     *   >Notice:
     *   The execution time of asynchronous tasks is not guaranteed.
     *
     * - For each input image, only the face with the largest bounding box is used for the face search.
     * - This is an asynchronous operation. After a task starts, the task information is retained for 7 days and cannot be retrieved after this period. To retrieve task information, you can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. Alternatively, you can configure the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive asynchronous notifications that contain task information.
     *
     * @param request - CreateFacesSearchingTaskRequest
     *
     * @returns CreateFacesSearchingTaskResponse
     *
     * @param CreateFacesSearchingTaskRequest $request
     *
     * @return CreateFacesSearchingTaskResponse
     */
    public function createFacesSearchingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFacesSearchingTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a figure clustering task. This task uses an intelligent algorithm to group the faces of different people in images that are indexed in a dataset.
     *
     * @remarks
     * - **Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     *   >Notice: The completion time of asynchronous tasks is not guaranteed.
     * - Before you call this operation, make sure that you have indexed files to a dataset ([CreateDataset](~~CreateDataset~~)) by attaching them ([CreateBinding](~~CreateBinding~~)) or by indexing them ([IndexFileMeta](~~IndexFileMeta~~) or [BatchIndexFileMeta](~~BatchIndexFileMeta~~)).
     * - Each time you call this operation, files in the dataset ([CreateDataset](~~CreateDataset~~)) are incrementally processed. You can periodically call this operation to process new files.
     * - After the clustering is complete, you can call the [GetFigureCluster](~~GetFigureCluster~~) or [BatchGetFigureCluster](~~BatchGetFigureCluster~~) operation to retrieve information about specific groups. You can also call [QueryFigureClusters](~~QueryFigureClusters~~) to query and list the groups in the dataset.
     * - Deleting files from a dataset changes the face clustering results. When all images that contain the faces in a cluster are deleted, the cluster is also deleted.
     * - This is an asynchronous operation. After a task starts, its information is saved for only 7 days. You cannot retrieve the task information after this period. You can call the [GetTask](~~GetTask~~) or [ListTasks](~~ListTasks~~) operation to view the task information. Alternatively, you can set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information from asynchronous notification messages.
     *
     * @param tmpReq - CreateFigureClusteringTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFigureClusteringTaskResponse
     *
     * @param CreateFigureClusteringTaskRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateFigureClusteringTaskResponse
     */
    public function createFigureClusteringTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFigureClusteringTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFigureClusteringTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFigureClusteringTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a figure clustering task. This task uses an intelligent algorithm to group the faces of different people in images that are indexed in a dataset.
     *
     * @remarks
     * - **Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     *   >Notice: The completion time of asynchronous tasks is not guaranteed.
     * - Before you call this operation, make sure that you have indexed files to a dataset ([CreateDataset](~~CreateDataset~~)) by attaching them ([CreateBinding](~~CreateBinding~~)) or by indexing them ([IndexFileMeta](~~IndexFileMeta~~) or [BatchIndexFileMeta](~~BatchIndexFileMeta~~)).
     * - Each time you call this operation, files in the dataset ([CreateDataset](~~CreateDataset~~)) are incrementally processed. You can periodically call this operation to process new files.
     * - After the clustering is complete, you can call the [GetFigureCluster](~~GetFigureCluster~~) or [BatchGetFigureCluster](~~BatchGetFigureCluster~~) operation to retrieve information about specific groups. You can also call [QueryFigureClusters](~~QueryFigureClusters~~) to query and list the groups in the dataset.
     * - Deleting files from a dataset changes the face clustering results. When all images that contain the faces in a cluster are deleted, the cluster is also deleted.
     * - This is an asynchronous operation. After a task starts, its information is saved for only 7 days. You cannot retrieve the task information after this period. You can call the [GetTask](~~GetTask~~) or [ListTasks](~~ListTasks~~) operation to view the task information. Alternatively, you can set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information from asynchronous notification messages.
     *
     * @param request - CreateFigureClusteringTaskRequest
     *
     * @returns CreateFigureClusteringTaskResponse
     *
     * @param CreateFigureClusteringTaskRequest $request
     *
     * @return CreateFigureClusteringTaskResponse
     */
    public function createFigureClusteringTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFigureClusteringTaskWithOptions($request, $runtime);
    }

    /**
     * Merges two or more figure clustering groups into a single figure clustering group.
     *
     * @remarks
     * - **Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     * - Before you call this operation, make sure that you have clustered all faces in the dataset by calling the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation.
     * - Merging unrelated groups affects the feature values of the destination group. This may cause inaccurate grouping of incremental data when you create a figure clustering task.
     * - This operation is asynchronous. Task information is retained for only 7 days. During this period, you can query task information by calling the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive asynchronous notification messages about the task.
     *
     * @param tmpReq - CreateFigureClustersMergingTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFigureClustersMergingTaskResponse
     *
     * @param CreateFigureClustersMergingTaskRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateFigureClustersMergingTaskResponse
     */
    public function createFigureClustersMergingTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFigureClustersMergingTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->froms) {
            $request->fromsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->froms, 'Froms', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->fromsShrink) {
            @$query['Froms'] = $request->fromsShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->to) {
            @$query['To'] = $request->to;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFigureClustersMergingTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFigureClustersMergingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Merges two or more figure clustering groups into a single figure clustering group.
     *
     * @remarks
     * - **Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     * - Before you call this operation, make sure that you have clustered all faces in the dataset by calling the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation.
     * - Merging unrelated groups affects the feature values of the destination group. This may cause inaccurate grouping of incremental data when you create a figure clustering task.
     * - This operation is asynchronous. Task information is retained for only 7 days. During this period, you can query task information by calling the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive asynchronous notification messages about the task.
     *
     * @param request - CreateFigureClustersMergingTaskRequest
     *
     * @returns CreateFigureClustersMergingTaskResponse
     *
     * @param CreateFigureClustersMergingTaskRequest $request
     *
     * @return CreateFigureClustersMergingTaskResponse
     */
    public function createFigureClustersMergingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFigureClustersMergingTaskWithOptions($request, $runtime);
    }

    /**
     * Package Download API.
     *
     * @remarks
     * > This API is in public preview. If you have any questions, join our DingTalk group to provide feedback. For the group number, see [Contact us](https://help.aliyun.com/document_detail/84454.html).
     * > This API currently supports packaging but not compression. The compression feature will be added later.
     * - **Before using this API, make sure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM)**.
     *   >Notice: The completion time of asynchronous tasks is not guaranteed.
     * - File count limit: You can package up to 80,000 files.
     * - File size limit: The total size of all files before packaging must not exceed 200 GB.
     * - This feature supports files of the Standard storage class on OSS. To package files of other storage classes, first [convert their storage class](https://help.aliyun.com/document_detail/90090.html).
     * - This is an asynchronous API. After a task starts, its information is stored for 7 days. After 7 days, the information can no longer be retrieved. To view task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through asynchronous notification messages.
     *
     * @param tmpReq - CreateFileCompressionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFileCompressionTaskResponse
     *
     * @param CreateFileCompressionTaskRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateFileCompressionTaskResponse
     */
    public function createFileCompressionTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFileCompressionTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        $query = [];
        if (null !== $request->compressedFormat) {
            @$query['CompressedFormat'] = $request->compressedFormat;
        }

        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceManifestURI) {
            @$query['SourceManifestURI'] = $request->sourceManifestURI;
        }

        if (null !== $request->sourcesShrink) {
            @$query['Sources'] = $request->sourcesShrink;
        }

        if (null !== $request->targetURI) {
            @$query['TargetURI'] = $request->targetURI;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFileCompressionTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFileCompressionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Package Download API.
     *
     * @remarks
     * > This API is in public preview. If you have any questions, join our DingTalk group to provide feedback. For the group number, see [Contact us](https://help.aliyun.com/document_detail/84454.html).
     * > This API currently supports packaging but not compression. The compression feature will be added later.
     * - **Before using this API, make sure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM)**.
     *   >Notice: The completion time of asynchronous tasks is not guaranteed.
     * - File count limit: You can package up to 80,000 files.
     * - File size limit: The total size of all files before packaging must not exceed 200 GB.
     * - This feature supports files of the Standard storage class on OSS. To package files of other storage classes, first [convert their storage class](https://help.aliyun.com/document_detail/90090.html).
     * - This is an asynchronous API. After a task starts, its information is stored for 7 days. After 7 days, the information can no longer be retrieved. To view task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through asynchronous notification messages.
     *
     * @param request - CreateFileCompressionTaskRequest
     *
     * @returns CreateFileCompressionTaskResponse
     *
     * @param CreateFileCompressionTaskRequest $request
     *
     * @return CreateFileCompressionTaskResponse
     */
    public function createFileCompressionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileCompressionTaskWithOptions($request, $runtime);
    }

    /**
     * A file decompression task lets you decompress specific files or an entire compressed package to a specified location. Supported formats include Zip, RAR, and 7z.
     *
     * @remarks
     * > This API is in public preview. If you have any questions, join our DingTalk group to provide feedback. For the group number, see [Contact us](https://help.aliyun.com/document_detail/84454.html).
     * - **Before you use this API, review the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) for Intelligent Media Management.**
     *   >Notice: Timeliness is not guaranteed for asynchronous tasks.
     * - File count limit: A compressed package can contain a maximum of 80,000 files.
     * - File size limit: 200 GB for Zip and RAR formats, and 50 GB for 7z format.
     * - File decompression tasks use stream decompression, which outputs files as they are decompressed. If an operation is aborted due to file corruption, the files that have already been decompressed are not deleted.
     * - This is an asynchronous API. Task information is stored for only 7 days and cannot be retrieved after this period. To view the task information, you can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. Alternatively, you can set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through an asynchronous notification message.
     *
     * @param tmpReq - CreateFileUncompressionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFileUncompressionTaskResponse
     *
     * @param CreateFileUncompressionTaskRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateFileUncompressionTaskResponse
     */
    public function createFileUncompressionTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFileUncompressionTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->selectedFiles) {
            $request->selectedFilesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->selectedFiles, 'SelectedFiles', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->selectedFilesShrink) {
            @$query['SelectedFiles'] = $request->selectedFilesShrink;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->targetURI) {
            @$query['TargetURI'] = $request->targetURI;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFileUncompressionTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFileUncompressionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A file decompression task lets you decompress specific files or an entire compressed package to a specified location. Supported formats include Zip, RAR, and 7z.
     *
     * @remarks
     * > This API is in public preview. If you have any questions, join our DingTalk group to provide feedback. For the group number, see [Contact us](https://help.aliyun.com/document_detail/84454.html).
     * - **Before you use this API, review the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) for Intelligent Media Management.**
     *   >Notice: Timeliness is not guaranteed for asynchronous tasks.
     * - File count limit: A compressed package can contain a maximum of 80,000 files.
     * - File size limit: 200 GB for Zip and RAR formats, and 50 GB for 7z format.
     * - File decompression tasks use stream decompression, which outputs files as they are decompressed. If an operation is aborted due to file corruption, the files that have already been decompressed are not deleted.
     * - This is an asynchronous API. Task information is stored for only 7 days and cannot be retrieved after this period. To view the task information, you can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. Alternatively, you can set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through an asynchronous notification message.
     *
     * @param request - CreateFileUncompressionTaskRequest
     *
     * @returns CreateFileUncompressionTaskResponse
     *
     * @param CreateFileUncompressionTaskRequest $request
     *
     * @return CreateFileUncompressionTaskResponse
     */
    public function createFileUncompressionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileUncompressionTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a video highlight task. This feature is in invitational preview.
     *
     * @remarks
     * - **Before you use this operation, make sure that you fully understand the billing of Intelligent Media Management (IMM).** For more information, see [Billing overview](https://www.alibabacloud.com/help/en/imm/product-overview/billing-overview). This operation incurs fees for highlight extraction and media processing.
     * - Before you call this operation, make sure that a project already exists in the current region. For more information, see [Project management](https://www.alibabacloud.com/help/en/imm/developer-reference/api-imm-2020-09-30-createproject).
     * >Notice: Asynchronous tasks do not guarantee timeliness..
     *
     * @param tmpReq - CreateHighlightTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHighlightTaskResponse
     *
     * @param CreateHighlightTaskRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateHighlightTaskResponse
     */
    public function createHighlightTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateHighlightTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->edit) {
            $request->editShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->edit, 'Edit', 'json');
        }

        if (null !== $tmpReq->highlight) {
            $request->highlightShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->highlight, 'Highlight', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->output) {
            $request->outputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $body = [];
        if (null !== $request->credentialConfigShrink) {
            @$body['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->editShrink) {
            @$body['Edit'] = $request->editShrink;
        }

        if (null !== $request->highlightShrink) {
            @$body['Highlight'] = $request->highlightShrink;
        }

        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->notificationShrink) {
            @$body['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->outputShrink) {
            @$body['Output'] = $request->outputShrink;
        }

        if (null !== $request->sourcesShrink) {
            @$body['Sources'] = $request->sourcesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->userData) {
            @$body['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHighlightTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHighlightTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a video highlight task. This feature is in invitational preview.
     *
     * @remarks
     * - **Before you use this operation, make sure that you fully understand the billing of Intelligent Media Management (IMM).** For more information, see [Billing overview](https://www.alibabacloud.com/help/en/imm/product-overview/billing-overview). This operation incurs fees for highlight extraction and media processing.
     * - Before you call this operation, make sure that a project already exists in the current region. For more information, see [Project management](https://www.alibabacloud.com/help/en/imm/developer-reference/api-imm-2020-09-30-createproject).
     * >Notice: Asynchronous tasks do not guarantee timeliness..
     *
     * @param request - CreateHighlightTaskRequest
     *
     * @returns CreateHighlightTaskResponse
     *
     * @param CreateHighlightTaskRequest $request
     *
     * @return CreateHighlightTaskResponse
     */
    public function createHighlightTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHighlightTaskWithOptions($request, $runtime);
    }

    /**
     * Detects non-compliant content in images, such as pornography, terrorism, undesirable scenes, logos, and text-in-image violations.
     *
     * @remarks
     * - **Before you use this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     *   >Notice:
     *   The execution time of asynchronous tasks is not guaranteed.
     *
     * - Image requirements:
     *   - Image URLs support the HTTP and HTTPS protocols.
     *   - The following image formats are supported: PNG, JPG, JPEG, BMP, GIF, and WEBP.
     *   - The image size cannot exceed 20 MB for both synchronous and asynchronous invocations. The height or width cannot exceed 30,000 pixels, and the total number of pixels cannot exceed 250 million. For GIF images, the total number of pixels cannot exceed 4,194,304, and the height or width cannot exceed 30,000 pixels.
     *   - The image download timeout period is 3 seconds. If the download takes longer than 3 seconds, a timeout error is returned.
     *   - For best results, the image resolution should be at least 256 × 256 pixels. Low resolution may affect detection accuracy.
     *   - The response time for image detection depends on the image download time. Ensure the storage service where the image is stored is stable and reliable. Use Alibaba Cloud Object Storage Service (OSS) or CDN.
     * - This is an asynchronous operation. After a task starts, its information is saved for only 7 days. You cannot query the information after this period. To view task information, you can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation and use the returned `TaskId`. Alternatively, you can set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through asynchronous notification messages.
     * > The detection results are returned in an asynchronous notification message. The Suggestion field in the message has one of the following values:
     * >
     * > - pass: The image passed the review. No non-compliant content was detected.
     * >
     * > - block: The image failed the review. Non-compliant content was detected. The Categories field indicates the non-compliant category. For more information about the categories, see Content Moderation detection results.
     * >
     * > - review: The image requires manual review. After the manual review is complete, another asynchronous notification message is sent to inform you of the result.
     *
     * @param tmpReq - CreateImageModerationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageModerationTaskResponse
     *
     * @param CreateImageModerationTaskRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateImageModerationTaskResponse
     */
    public function createImageModerationTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateImageModerationTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->scenes) {
            $request->scenesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scenes, 'Scenes', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->maxFrames) {
            @$query['MaxFrames'] = $request->maxFrames;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->scenesShrink) {
            @$query['Scenes'] = $request->scenesShrink;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageModerationTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageModerationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects non-compliant content in images, such as pornography, terrorism, undesirable scenes, logos, and text-in-image violations.
     *
     * @remarks
     * - **Before you use this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management.**
     *   >Notice:
     *   The execution time of asynchronous tasks is not guaranteed.
     *
     * - Image requirements:
     *   - Image URLs support the HTTP and HTTPS protocols.
     *   - The following image formats are supported: PNG, JPG, JPEG, BMP, GIF, and WEBP.
     *   - The image size cannot exceed 20 MB for both synchronous and asynchronous invocations. The height or width cannot exceed 30,000 pixels, and the total number of pixels cannot exceed 250 million. For GIF images, the total number of pixels cannot exceed 4,194,304, and the height or width cannot exceed 30,000 pixels.
     *   - The image download timeout period is 3 seconds. If the download takes longer than 3 seconds, a timeout error is returned.
     *   - For best results, the image resolution should be at least 256 × 256 pixels. Low resolution may affect detection accuracy.
     *   - The response time for image detection depends on the image download time. Ensure the storage service where the image is stored is stable and reliable. Use Alibaba Cloud Object Storage Service (OSS) or CDN.
     * - This is an asynchronous operation. After a task starts, its information is saved for only 7 days. You cannot query the information after this period. To view task information, you can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation and use the returned `TaskId`. Alternatively, you can set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through asynchronous notification messages.
     * > The detection results are returned in an asynchronous notification message. The Suggestion field in the message has one of the following values:
     * >
     * > - pass: The image passed the review. No non-compliant content was detected.
     * >
     * > - block: The image failed the review. Non-compliant content was detected. The Categories field indicates the non-compliant category. For more information about the categories, see Content Moderation detection results.
     * >
     * > - review: The image requires manual review. After the manual review is complete, another asynchronous notification message is sent to inform you of the result.
     *
     * @param request - CreateImageModerationTaskRequest
     *
     * @returns CreateImageModerationTaskResponse
     *
     * @param CreateImageModerationTaskRequest $request
     *
     * @return CreateImageModerationTaskResponse
     */
    public function createImageModerationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageModerationTaskWithOptions($request, $runtime);
    }

    /**
     * Stitches multiple images into a single image based on specified rules and saves the output to a specified OSS object.
     *
     * @remarks
     * - **Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management.**
     * - Before you call this operation, ensure that an active project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * - You can stitch a maximum of 10 images in this operation. The length of a single edge of each image cannot exceed 32,876 pixels. The total number of pixels cannot exceed 1 billion.
     * - This is an asynchronous operation. After a task starts, its information is saved for 7 days. After this period, you can no longer query the task information. To query task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation and use the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive asynchronous notifications about the task.
     *
     * @param tmpReq - CreateImageSplicingTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageSplicingTaskResponse
     *
     * @param CreateImageSplicingTaskRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateImageSplicingTaskResponse
     */
    public function createImageSplicingTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateImageSplicingTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->align) {
            @$query['Align'] = $request->align;
        }

        if (null !== $request->backgroundColor) {
            @$query['BackgroundColor'] = $request->backgroundColor;
        }

        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->imageFormat) {
            @$query['ImageFormat'] = $request->imageFormat;
        }

        if (null !== $request->margin) {
            @$query['Margin'] = $request->margin;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->padding) {
            @$query['Padding'] = $request->padding;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->quality) {
            @$query['Quality'] = $request->quality;
        }

        if (null !== $request->scaleType) {
            @$query['ScaleType'] = $request->scaleType;
        }

        if (null !== $request->sourcesShrink) {
            @$query['Sources'] = $request->sourcesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->targetURI) {
            @$query['TargetURI'] = $request->targetURI;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageSplicingTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageSplicingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stitches multiple images into a single image based on specified rules and saves the output to a specified OSS object.
     *
     * @remarks
     * - **Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management.**
     * - Before you call this operation, ensure that an active project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * - You can stitch a maximum of 10 images in this operation. The length of a single edge of each image cannot exceed 32,876 pixels. The total number of pixels cannot exceed 1 billion.
     * - This is an asynchronous operation. After a task starts, its information is saved for 7 days. After this period, you can no longer query the task information. To query task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation and use the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive asynchronous notifications about the task.
     *
     * @param request - CreateImageSplicingTaskRequest
     *
     * @returns CreateImageSplicingTaskResponse
     *
     * @param CreateImageSplicingTaskRequest $request
     *
     * @return CreateImageSplicingTaskResponse
     */
    public function createImageSplicingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageSplicingTaskWithOptions($request, $runtime);
    }

    /**
     * Converts multiple images into a single PDF file and saves the file as a specified OSS object.
     *
     * @remarks
     * - **Before using this API, make sure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management.**
     * - Before calling this API, make sure that an active project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * - This API supports up to 100 input images.
     * - This is an asynchronous API. After a task starts, its information is stored for only 7 days and cannot be retrieved after this period. To view task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) API with the returned `TaskId`. You can also receive task information through asynchronous notification messages by setting the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter.
     *
     * @param tmpReq - CreateImageToPDFTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageToPDFTaskResponse
     *
     * @param CreateImageToPDFTaskRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateImageToPDFTaskResponse
     */
    public function createImageToPDFTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateImageToPDFTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourcesShrink) {
            @$query['Sources'] = $request->sourcesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->targetURI) {
            @$query['TargetURI'] = $request->targetURI;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageToPDFTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageToPDFTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts multiple images into a single PDF file and saves the file as a specified OSS object.
     *
     * @remarks
     * - **Before using this API, make sure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management.**
     * - Before calling this API, make sure that an active project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * - This API supports up to 100 input images.
     * - This is an asynchronous API. After a task starts, its information is stored for only 7 days and cannot be retrieved after this period. To view task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) API with the returned `TaskId`. You can also receive task information through asynchronous notification messages by setting the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter.
     *
     * @param request - CreateImageToPDFTaskRequest
     *
     * @returns CreateImageToPDFTaskResponse
     *
     * @param CreateImageToPDFTaskRequest $request
     *
     * @return CreateImageToPDFTaskResponse
     */
    public function createImageToPDFTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageToPDFTaskWithOptions($request, $runtime);
    }

    /**
     * The spatio-temporal clustering feature classifies files in a dataset based on their time and location. This feature works on indexed files, such as images and videos, that contain shooting time and location data. These classifications can represent content from a user\\"s trip, where files have similar timestamps and locations. The classifications can also represent content shot at different places where a user lives or works. Analyzing the locations and time ranges of these classifications lets you categorize media files, create highlight reels, and generate photo and video stories.
     *
     * @remarks
     * - **Before you use this operation, you must understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM)**.
     *   >Notice: Asynchronous tasks do not have a guaranteed processing time.
     * - Before you call this operation, you must index files into a dataset. You can index files by binding data sources using [CreateBinding](https://help.aliyun.com/document_detail/478202.html) or by indexing files using [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html).
     * - Each call to this operation processes the files in the specified `Dataset` **incrementally**. You can call this operation periodically to process new files.
     * - After clustering is complete, you can call the [QueryLocationDateClusters](https://help.aliyun.com/document_detail/478189.html) operation to retrieve the clustering results.
     * - Deleting a file from a dataset does not change the spatio-temporal clusters. To delete existing spatio-temporal clusters, you can call the [DeleteLocationDateCluster](https://help.aliyun.com/document_detail/478191.html) operation.
     * - This is an asynchronous operation. After a task starts, its information is saved for only 7 days. You cannot retrieve task information after 7 days. You can call the [GetTask](~~GetTask~~) or [ListTasks](~~ListTasks~~) operation to view task information using the returned `TaskId`. You can also configure the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through message notifications.
     *
     * @param tmpReq - CreateLocationDateClusteringTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLocationDateClusteringTaskResponse
     *
     * @param CreateLocationDateClusteringTaskRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateLocationDateClusteringTaskResponse
     */
    public function createLocationDateClusteringTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLocationDateClusteringTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dateOptions) {
            $request->dateOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dateOptions, 'DateOptions', 'json');
        }

        if (null !== $tmpReq->locationOptions) {
            $request->locationOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->locationOptions, 'LocationOptions', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->dateOptionsShrink) {
            @$query['DateOptions'] = $request->dateOptionsShrink;
        }

        if (null !== $request->locationOptionsShrink) {
            @$query['LocationOptions'] = $request->locationOptionsShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLocationDateClusteringTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLocationDateClusteringTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The spatio-temporal clustering feature classifies files in a dataset based on their time and location. This feature works on indexed files, such as images and videos, that contain shooting time and location data. These classifications can represent content from a user\\"s trip, where files have similar timestamps and locations. The classifications can also represent content shot at different places where a user lives or works. Analyzing the locations and time ranges of these classifications lets you categorize media files, create highlight reels, and generate photo and video stories.
     *
     * @remarks
     * - **Before you use this operation, you must understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM)**.
     *   >Notice: Asynchronous tasks do not have a guaranteed processing time.
     * - Before you call this operation, you must index files into a dataset. You can index files by binding data sources using [CreateBinding](https://help.aliyun.com/document_detail/478202.html) or by indexing files using [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html).
     * - Each call to this operation processes the files in the specified `Dataset` **incrementally**. You can call this operation periodically to process new files.
     * - After clustering is complete, you can call the [QueryLocationDateClusters](https://help.aliyun.com/document_detail/478189.html) operation to retrieve the clustering results.
     * - Deleting a file from a dataset does not change the spatio-temporal clusters. To delete existing spatio-temporal clusters, you can call the [DeleteLocationDateCluster](https://help.aliyun.com/document_detail/478191.html) operation.
     * - This is an asynchronous operation. After a task starts, its information is saved for only 7 days. You cannot retrieve task information after 7 days. You can call the [GetTask](~~GetTask~~) or [ListTasks](~~ListTasks~~) operation to view task information using the returned `TaskId`. You can also configure the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through message notifications.
     *
     * @param request - CreateLocationDateClusteringTaskRequest
     *
     * @returns CreateLocationDateClusteringTaskResponse
     *
     * @param CreateLocationDateClusteringTaskRequest $request
     *
     * @return CreateLocationDateClusteringTaskResponse
     */
    public function createLocationDateClusteringTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLocationDateClusteringTaskWithOptions($request, $runtime);
    }

    /**
     * Create an asynchronous media transcoding task. This task processes audio and video files for media transcoding, media concatenation, video frame capture, and animated GIF generation.
     *
     * @remarks
     * - **Before you call this operation, ensure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) for Intelligent Media Management.**
     * - Before calling this operation, ensure a project is available in the current region. For more information, see [Project Management](https://help.aliyun.com/document_detail/478152.html).
     *   >Notice:
     *   The completion time of an asynchronous task is not guaranteed.
     *
     * - When you use this operation for media transcoding, it processes only one video, audio, or subtitle stream by default. You can also configure the number of streams to process.
     * - When you use this operation for media concatenation, you can specify a maximum of 11 media files. Parameters for operations such as media transcoding and frame capture apply to the final concatenated output.
     * - This operation is asynchronous. After a task starts, its information is retained for only 7 days. After this period, you cannot retrieve it. To view task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information via message notifications.
     *
     * @param tmpReq - CreateMediaConvertTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMediaConvertTaskResponse
     *
     * @param CreateMediaConvertTaskRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMediaConvertTaskResponse
     */
    public function createMediaConvertTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMediaConvertTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        if (null !== $tmpReq->targetGroups) {
            $request->targetGroupsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->targetGroups, 'TargetGroups', 'json');
        }

        if (null !== $tmpReq->targets) {
            $request->targetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->targets, 'Targets', 'json');
        }

        $query = [];
        if (null !== $request->alignmentIndex) {
            @$query['AlignmentIndex'] = $request->alignmentIndex;
        }

        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourcesShrink) {
            @$query['Sources'] = $request->sourcesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->targetGroupsShrink) {
            @$query['TargetGroups'] = $request->targetGroupsShrink;
        }

        if (null !== $request->targetsShrink) {
            @$query['Targets'] = $request->targetsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMediaConvertTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMediaConvertTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an asynchronous media transcoding task. This task processes audio and video files for media transcoding, media concatenation, video frame capture, and animated GIF generation.
     *
     * @remarks
     * - **Before you call this operation, ensure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) for Intelligent Media Management.**
     * - Before calling this operation, ensure a project is available in the current region. For more information, see [Project Management](https://help.aliyun.com/document_detail/478152.html).
     *   >Notice:
     *   The completion time of an asynchronous task is not guaranteed.
     *
     * - When you use this operation for media transcoding, it processes only one video, audio, or subtitle stream by default. You can also configure the number of streams to process.
     * - When you use this operation for media concatenation, you can specify a maximum of 11 media files. Parameters for operations such as media transcoding and frame capture apply to the final concatenated output.
     * - This operation is asynchronous. After a task starts, its information is retained for only 7 days. After this period, you cannot retrieve it. To view task information, call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information via message notifications.
     *
     * @param request - CreateMediaConvertTaskRequest
     *
     * @returns CreateMediaConvertTaskResponse
     *
     * @param CreateMediaConvertTaskRequest $request
     *
     * @return CreateMediaConvertTaskResponse
     */
    public function createMediaConvertTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaConvertTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a document conversion task that converts documents, such as Word, PowerPoint, Excel, and PDF files, stored in Object Storage Service (OSS) into images, text files, or PDF files.
     *
     * @remarks
     * - **Before you use this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     *   >Notice: The execution time of asynchronous tasks is not guaranteed.
     * - Supported input file formats:
     *   - Word processor documents (Word): doc, docx, wps, wpss, docm, dotm, dot, and dotx.
     *   - Presentation documents (PowerPoint): pptx, ppt, pot, potx, pps, ppsx, dps, dpt, pptm, potm, ppsm, and dpss.
     *   - Spreadsheet documents (Excel): xls, xlt, et, ett, xlsx, xltx, csv, xlsb, xlsm, xltm, and ets.
     *   - PDF documents: pdf.
     * - Supported output file formats:
     *   - Images: png and jpg.
     *   - Text: txt.
     *   - PDF: pdf.
     * - The maximum size of a single file is 200 MB. This limit cannot be changed.
     * - If a file is large or its content is complex, the conversion may time out.
     * - The number of requests per second is limited to 50 for a single user.
     * - Task information is stored for only 7 days after a task starts. After this period, the information cannot be retrieved. You can promptly obtain task information using one of the following methods:
     *   - You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to obtain the returned `TaskId` and view the task information.
     *   - You can activate Message Service (MNS) in the same region as IMM and configure a subscription to promptly receive task information notifications. For more information about the format of asynchronous notification messages, see [Asynchronous notification message format](https://help.aliyun.com/document_detail/2743997.html). For more information about the MNS software development kit (SDK), see [Receive and delete messages](https://help.aliyun.com/document_detail/32449.html).
     *   - You can activate RocketMQ in the same region as IMM, and create a RocketMQ 4.0 instance, a topic, and a group to promptly receive task information notifications. For more information about the format of asynchronous notification messages, see [Asynchronous notification message format](https://help.aliyun.com/document_detail/2743997.html). For more information about how to use RocketMQ, see [Use an SDK for HTTP to send and receive normal messages](https://help.aliyun.com/document_detail/169009.html).
     *   - You can activate and connect to [EventBridge](https://www.aliyun.com/product/aliware/eventbridge) in the same region as IMM to promptly receive task information notifications. For more information, see [Intelligent Media Management IMM events](https://help.aliyun.com/document_detail/205730.html).
     *
     * @param tmpReq - CreateOfficeConversionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOfficeConversionTaskResponse
     *
     * @param CreateOfficeConversionTaskRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOfficeConversionTaskResponse
     */
    public function createOfficeConversionTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOfficeConversionTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->sources) {
            $request->sourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        if (null !== $tmpReq->trimPolicy) {
            $request->trimPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->trimPolicy, 'TrimPolicy', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->endPage) {
            @$query['EndPage'] = $request->endPage;
        }

        if (null !== $request->firstPage) {
            @$query['FirstPage'] = $request->firstPage;
        }

        if (null !== $request->fitToHeight) {
            @$query['FitToHeight'] = $request->fitToHeight;
        }

        if (null !== $request->fitToWidth) {
            @$query['FitToWidth'] = $request->fitToWidth;
        }

        if (null !== $request->holdLineFeed) {
            @$query['HoldLineFeed'] = $request->holdLineFeed;
        }

        if (null !== $request->imageDPI) {
            @$query['ImageDPI'] = $request->imageDPI;
        }

        if (null !== $request->longPicture) {
            @$query['LongPicture'] = $request->longPicture;
        }

        if (null !== $request->longText) {
            @$query['LongText'] = $request->longText;
        }

        if (null !== $request->maxSheetColumn) {
            @$query['MaxSheetColumn'] = $request->maxSheetColumn;
        }

        if (null !== $request->maxSheetRow) {
            @$query['MaxSheetRow'] = $request->maxSheetRow;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->pages) {
            @$query['Pages'] = $request->pages;
        }

        if (null !== $request->paperHorizontal) {
            @$query['PaperHorizontal'] = $request->paperHorizontal;
        }

        if (null !== $request->paperSize) {
            @$query['PaperSize'] = $request->paperSize;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->quality) {
            @$query['Quality'] = $request->quality;
        }

        if (null !== $request->scalePercentage) {
            @$query['ScalePercentage'] = $request->scalePercentage;
        }

        if (null !== $request->sheetCount) {
            @$query['SheetCount'] = $request->sheetCount;
        }

        if (null !== $request->sheetIndex) {
            @$query['SheetIndex'] = $request->sheetIndex;
        }

        if (null !== $request->showComments) {
            @$query['ShowComments'] = $request->showComments;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->startPage) {
            @$query['StartPage'] = $request->startPage;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->targetURI) {
            @$query['TargetURI'] = $request->targetURI;
        }

        if (null !== $request->targetURIPrefix) {
            @$query['TargetURIPrefix'] = $request->targetURIPrefix;
        }

        if (null !== $request->trimPolicyShrink) {
            @$query['TrimPolicy'] = $request->trimPolicyShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $body = [];
        if (null !== $request->sourcesShrink) {
            @$body['Sources'] = $request->sourcesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOfficeConversionTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOfficeConversionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a document conversion task that converts documents, such as Word, PowerPoint, Excel, and PDF files, stored in Object Storage Service (OSS) into images, text files, or PDF files.
     *
     * @remarks
     * - **Before you use this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     *   >Notice: The execution time of asynchronous tasks is not guaranteed.
     * - Supported input file formats:
     *   - Word processor documents (Word): doc, docx, wps, wpss, docm, dotm, dot, and dotx.
     *   - Presentation documents (PowerPoint): pptx, ppt, pot, potx, pps, ppsx, dps, dpt, pptm, potm, ppsm, and dpss.
     *   - Spreadsheet documents (Excel): xls, xlt, et, ett, xlsx, xltx, csv, xlsb, xlsm, xltm, and ets.
     *   - PDF documents: pdf.
     * - Supported output file formats:
     *   - Images: png and jpg.
     *   - Text: txt.
     *   - PDF: pdf.
     * - The maximum size of a single file is 200 MB. This limit cannot be changed.
     * - If a file is large or its content is complex, the conversion may time out.
     * - The number of requests per second is limited to 50 for a single user.
     * - Task information is stored for only 7 days after a task starts. After this period, the information cannot be retrieved. You can promptly obtain task information using one of the following methods:
     *   - You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to obtain the returned `TaskId` and view the task information.
     *   - You can activate Message Service (MNS) in the same region as IMM and configure a subscription to promptly receive task information notifications. For more information about the format of asynchronous notification messages, see [Asynchronous notification message format](https://help.aliyun.com/document_detail/2743997.html). For more information about the MNS software development kit (SDK), see [Receive and delete messages](https://help.aliyun.com/document_detail/32449.html).
     *   - You can activate RocketMQ in the same region as IMM, and create a RocketMQ 4.0 instance, a topic, and a group to promptly receive task information notifications. For more information about the format of asynchronous notification messages, see [Asynchronous notification message format](https://help.aliyun.com/document_detail/2743997.html). For more information about how to use RocketMQ, see [Use an SDK for HTTP to send and receive normal messages](https://help.aliyun.com/document_detail/169009.html).
     *   - You can activate and connect to [EventBridge](https://www.aliyun.com/product/aliware/eventbridge) in the same region as IMM to promptly receive task information notifications. For more information, see [Intelligent Media Management IMM events](https://help.aliyun.com/document_detail/205730.html).
     *
     * @param request - CreateOfficeConversionTaskRequest
     *
     * @returns CreateOfficeConversionTaskResponse
     *
     * @param CreateOfficeConversionTaskRequest $request
     *
     * @return CreateOfficeConversionTaskResponse
     */
    public function createOfficeConversionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOfficeConversionTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a project.
     *
     * @remarks
     * Project names must be unique within the same region.
     * * The number of projects that can be created is limited. By default, you can create up to 100 projects. To increase the quota, submit a ticket or search for DingTalk group 88490020073 to join the group and submit a request.
     * * After you create a project, you can create other Intelligent Media Management (IMM) resources:
     *     + [Create a dataset](https://help.aliyun.com/document_detail/478160.html)
     *     + [Create a trigger](https://help.aliyun.com/document_detail/479912.html)
     *     + [Create a batch task](https://help.aliyun.com/document_detail/606694.html)
     *     + [Create a binding task](https://help.aliyun.com/document_detail/478202.html).
     *
     * @param tmpReq - CreateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->datasetConfig) {
            $request->datasetConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->datasetConfig, 'DatasetConfig', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->datasetConfigShrink) {
            @$query['DatasetConfig'] = $request->datasetConfigShrink;
        }

        if (null !== $request->datasetMaxBindCount) {
            @$query['DatasetMaxBindCount'] = $request->datasetMaxBindCount;
        }

        if (null !== $request->datasetMaxEntityCount) {
            @$query['DatasetMaxEntityCount'] = $request->datasetMaxEntityCount;
        }

        if (null !== $request->datasetMaxFileCount) {
            @$query['DatasetMaxFileCount'] = $request->datasetMaxFileCount;
        }

        if (null !== $request->datasetMaxRelationCount) {
            @$query['DatasetMaxRelationCount'] = $request->datasetMaxRelationCount;
        }

        if (null !== $request->datasetMaxTotalFileSize) {
            @$query['DatasetMaxTotalFileSize'] = $request->datasetMaxTotalFileSize;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->projectMaxDatasetCount) {
            @$query['ProjectMaxDatasetCount'] = $request->projectMaxDatasetCount;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->serviceRole) {
            @$query['ServiceRole'] = $request->serviceRole;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a project.
     *
     * @remarks
     * Project names must be unique within the same region.
     * * The number of projects that can be created is limited. By default, you can create up to 100 projects. To increase the quota, submit a ticket or search for DingTalk group 88490020073 to join the group and submit a request.
     * * After you create a project, you can create other Intelligent Media Management (IMM) resources:
     *     + [Create a dataset](https://help.aliyun.com/document_detail/478160.html)
     *     + [Create a trigger](https://help.aliyun.com/document_detail/479912.html)
     *     + [Create a batch task](https://help.aliyun.com/document_detail/606694.html)
     *     + [Create a binding task](https://help.aliyun.com/document_detail/478202.html).
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * The similar image clustering feature groups images that you have indexed in a dataset into clusters based on visual similarity. This feature is useful for scenarios such as deduplicating images or selecting the best shots. For example, you can use it to filter burst photos in an album.
     *
     * @remarks
     * - **Before calling this operation, review the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     *   >Notice: The execution time of asynchronous tasks is not guaranteed.
     * - Before calling this operation, index files to a dataset. You can index files by attaching a data source using [CreateBinding](https://help.aliyun.com/document_detail/478202.html), or by actively indexing files using [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html).
     * - Each call to this operation **incrementally** processes the files in the specified `Dataset`. You can call this operation periodically to process new files.
     * - After clustering completes, call the [QuerySimilarImageClusters](https://help.aliyun.com/document_detail/611304.html) operation to retrieve the clustering results.
     * - Each similar image cluster must contain at least two images. Deleting a file from a dataset changes the similar image clusters. If deleting an image reduces a cluster to fewer than two images, the cluster is automatically deleted.
     * - This operation is asynchronous. After a task starts, its information is retained for only seven days. You cannot query the information after this period. Call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation and use the returned `TaskId` to view task information. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive asynchronous notification messages about the task.
     *
     * @param tmpReq - CreateSimilarImageClusteringTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSimilarImageClusteringTaskResponse
     *
     * @param CreateSimilarImageClusteringTaskRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateSimilarImageClusteringTaskResponse
     */
    public function createSimilarImageClusteringTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSimilarImageClusteringTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSimilarImageClusteringTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSimilarImageClusteringTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The similar image clustering feature groups images that you have indexed in a dataset into clusters based on visual similarity. This feature is useful for scenarios such as deduplicating images or selecting the best shots. For example, you can use it to filter burst photos in an album.
     *
     * @remarks
     * - **Before calling this operation, review the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     *   >Notice: The execution time of asynchronous tasks is not guaranteed.
     * - Before calling this operation, index files to a dataset. You can index files by attaching a data source using [CreateBinding](https://help.aliyun.com/document_detail/478202.html), or by actively indexing files using [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html).
     * - Each call to this operation **incrementally** processes the files in the specified `Dataset`. You can call this operation periodically to process new files.
     * - After clustering completes, call the [QuerySimilarImageClusters](https://help.aliyun.com/document_detail/611304.html) operation to retrieve the clustering results.
     * - Each similar image cluster must contain at least two images. Deleting a file from a dataset changes the similar image clusters. If deleting an image reduces a cluster to fewer than two images, the cluster is automatically deleted.
     * - This operation is asynchronous. After a task starts, its information is retained for only seven days. You cannot query the information after this period. Call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation and use the returned `TaskId` to view task information. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive asynchronous notification messages about the task.
     *
     * @param request - CreateSimilarImageClusteringTaskRequest
     *
     * @returns CreateSimilarImageClusteringTaskResponse
     *
     * @param CreateSimilarImageClusteringTaskRequest $request
     *
     * @return CreateSimilarImageClusteringTaskResponse
     */
    public function createSimilarImageClusteringTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimilarImageClusteringTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a story.
     *
     * @remarks
     * - **Before calling this operation, understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * - Before calling this operation, index files to a dataset by calling [CreateBinding](https://help.aliyun.com/document_detail/478202.html), [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html), or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html).
     * - This is an asynchronous operation. After a task starts, its information is saved for only 7 days. The information cannot be retrieved after this period. Call [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) with the returned TaskId to view task information. Alternatively, set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to obtain task information from notification messages.
     *
     * @param tmpReq - CreateStoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStoryResponse
     *
     * @param CreateStoryRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStoryResponse
     */
    public function createStoryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateStoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->address) {
            $request->addressShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->address, 'Address', 'json');
        }

        if (null !== $tmpReq->customLabels) {
            $request->customLabelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $body = [];
        if (null !== $request->addressShrink) {
            @$body['Address'] = $request->addressShrink;
        }

        if (null !== $request->customId) {
            @$body['CustomId'] = $request->customId;
        }

        if (null !== $request->customLabelsShrink) {
            @$body['CustomLabels'] = $request->customLabelsShrink;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->maxFileCount) {
            @$body['MaxFileCount'] = $request->maxFileCount;
        }

        if (null !== $request->minFileCount) {
            @$body['MinFileCount'] = $request->minFileCount;
        }

        if (null !== $request->notifyTopicName) {
            @$body['NotifyTopicName'] = $request->notifyTopicName;
        }

        if (null !== $request->objectId) {
            @$body['ObjectId'] = $request->objectId;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->storyEndTime) {
            @$body['StoryEndTime'] = $request->storyEndTime;
        }

        if (null !== $request->storyName) {
            @$body['StoryName'] = $request->storyName;
        }

        if (null !== $request->storyStartTime) {
            @$body['StoryStartTime'] = $request->storyStartTime;
        }

        if (null !== $request->storySubType) {
            @$body['StorySubType'] = $request->storySubType;
        }

        if (null !== $request->storyType) {
            @$body['StoryType'] = $request->storyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateStory',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a story.
     *
     * @remarks
     * - **Before calling this operation, understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * - Before calling this operation, index files to a dataset by calling [CreateBinding](https://help.aliyun.com/document_detail/478202.html), [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html), or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html).
     * - This is an asynchronous operation. After a task starts, its information is saved for only 7 days. The information cannot be retrieved after this period. Call [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) with the returned TaskId to view task information. Alternatively, set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to obtain task information from notification messages.
     *
     * @param request - CreateStoryRequest
     *
     * @returns CreateStoryResponse
     *
     * @param CreateStoryRequest $request
     *
     * @return CreateStoryResponse
     */
    public function createStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStoryWithOptions($request, $runtime);
    }

    /**
     * Creates a trigger to start data processing in Intelligent Media Management (IMM). The trigger is activated by event sources, such as Object Storage Service (OSS), and uses data processing templates to process media files, such as images, videos, and documents.
     *
     * @remarks
     * To process data from [Object Storage Service](https://help.aliyun.com/document_detail/99372.html), ensure that you have [attached an OSS bucket](https://help.aliyun.com/document_detail/478206.html).
     *
     * @param tmpReq - CreateTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTriggerResponse
     *
     * @param CreateTriggerRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateTriggerResponse
     */
    public function createTriggerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTriggerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->actions) {
            $request->actionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->actions, 'Actions', 'json');
        }

        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $body = [];
        if (null !== $request->actionsShrink) {
            @$body['Actions'] = $request->actionsShrink;
        }

        if (null !== $request->inputShrink) {
            @$body['Input'] = $request->inputShrink;
        }

        if (null !== $request->notificationShrink) {
            @$body['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->serviceRole) {
            @$body['ServiceRole'] = $request->serviceRole;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTrigger',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a trigger to start data processing in Intelligent Media Management (IMM). The trigger is activated by event sources, such as Object Storage Service (OSS), and uses data processing templates to process media files, such as images, videos, and documents.
     *
     * @remarks
     * To process data from [Object Storage Service](https://help.aliyun.com/document_detail/99372.html), ensure that you have [attached an OSS bucket](https://help.aliyun.com/document_detail/478206.html).
     *
     * @param request - CreateTriggerRequest
     *
     * @returns CreateTriggerResponse
     *
     * @param CreateTriggerRequest $request
     *
     * @return CreateTriggerResponse
     */
    public function createTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTriggerWithOptions($request, $runtime);
    }

    /**
     * Detects labels for scenarios, objects, and events in video content. This feature supports more than 30 categories and thousands of labels. Scenario labels include natural landscapes, life scenes, and disaster scenes. Event labels include talent shows, office work, performances, and production. Object labels include tableware, electronic products, furniture, and vehicles.
     *
     * @remarks
     * - **Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/2747104.html) of Intelligent Media Management.**
     * - Before you call this operation, make sure that you have created a project in Intelligent Media Management. For more information, see [Create a project](https://help.aliyun.com/document_detail/478153.html).
     *   >Notice:
     *   The completion time of asynchronous tasks is not guaranteed.
     *
     * - For more information about the features of this operation, see [Video label detection](https://help.aliyun.com/document_detail/477189.html).
     * - This operation supports multiple video formats, such as MP4, MPEG-TS, MKV, MOV, AVI, FLV, and M3U8.
     * - This is an asynchronous operation. After a task starts, its information is stored for seven days. You cannot retrieve the information after this period. Call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId` to view task information. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through message notifications.
     *
     * @param tmpReq - CreateVideoLabelClassificationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoLabelClassificationTaskResponse
     *
     * @param CreateVideoLabelClassificationTaskRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateVideoLabelClassificationTaskResponse
     */
    public function createVideoLabelClassificationTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateVideoLabelClassificationTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVideoLabelClassificationTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVideoLabelClassificationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects labels for scenarios, objects, and events in video content. This feature supports more than 30 categories and thousands of labels. Scenario labels include natural landscapes, life scenes, and disaster scenes. Event labels include talent shows, office work, performances, and production. Object labels include tableware, electronic products, furniture, and vehicles.
     *
     * @remarks
     * - **Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/2747104.html) of Intelligent Media Management.**
     * - Before you call this operation, make sure that you have created a project in Intelligent Media Management. For more information, see [Create a project](https://help.aliyun.com/document_detail/478153.html).
     *   >Notice:
     *   The completion time of asynchronous tasks is not guaranteed.
     *
     * - For more information about the features of this operation, see [Video label detection](https://help.aliyun.com/document_detail/477189.html).
     * - This operation supports multiple video formats, such as MP4, MPEG-TS, MKV, MOV, AVI, FLV, and M3U8.
     * - This is an asynchronous operation. After a task starts, its information is stored for seven days. You cannot retrieve the information after this period. Call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation with the returned `TaskId` to view task information. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through message notifications.
     *
     * @param request - CreateVideoLabelClassificationTaskRequest
     *
     * @returns CreateVideoLabelClassificationTaskResponse
     *
     * @param CreateVideoLabelClassificationTaskRequest $request
     *
     * @return CreateVideoLabelClassificationTaskResponse
     */
    public function createVideoLabelClassificationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoLabelClassificationTaskWithOptions($request, $runtime);
    }

    /**
     * Detects threats or non-compliant content in videos. This operation can be used in scenarios such as pornography detection, terrorism and politically sensitive content detection, text and image violation detection, undesirable scene detection, and logo detection.
     *
     * @remarks
     * - **Before you use this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management.**
     *   >Notice:
     *   The completion time of asynchronous tasks is not guaranteed.
     *
     * - The detection results are returned in an asynchronous notification message. The Suggestion field in the asynchronous notification message can have the following values:
     *   - pass: The video passed the review. No non-compliant content was detected.
     *   - block: The video must be blocked. This value is returned when non-compliant content is detected. The Categories field indicates the category of the non-compliant content. For more information about the categories, see [Content Moderation detection results](https://help.aliyun.com/document_detail/2743995.html).
     *   - review: The video requires manual review. After the manual review is complete, another asynchronous notification message is sent with the result.
     * - Video snapshot requirements:
     *   - Video frame URLs support the HTTP and HTTPS protocols.
     *   - Supported video frame formats: PNG, JPG, JPEG, BMP, GIF, and WEBP.
     *   - The size of a video frame cannot exceed 10 MB.
     *   - The recommended resolution for video frames is at least 256 × 256 pixels. A lower resolution may affect detection accuracy.
     *   - The response time for the video detection operation depends on the download time of the video frames. Make sure that the storage service for your video frames is stable and reliable. We recommend that you use Alibaba Cloud Object Storage Service (OSS) or cache frames with Alibaba Cloud CDN.
     * - This is an asynchronous operation. After a task is created, the task information is saved for only 7 days. After this period, the information cannot be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query the task information using the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through asynchronous notification messages.
     *
     * @param tmpReq - CreateVideoModerationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoModerationTaskResponse
     *
     * @param CreateVideoModerationTaskRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateVideoModerationTaskResponse
     */
    public function createVideoModerationTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateVideoModerationTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->scenes) {
            $request->scenesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scenes, 'Scenes', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->maxFrames) {
            @$query['MaxFrames'] = $request->maxFrames;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->scenesShrink) {
            @$query['Scenes'] = $request->scenesShrink;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVideoModerationTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVideoModerationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects threats or non-compliant content in videos. This operation can be used in scenarios such as pornography detection, terrorism and politically sensitive content detection, text and image violation detection, undesirable scene detection, and logo detection.
     *
     * @remarks
     * - **Before you use this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management.**
     *   >Notice:
     *   The completion time of asynchronous tasks is not guaranteed.
     *
     * - The detection results are returned in an asynchronous notification message. The Suggestion field in the asynchronous notification message can have the following values:
     *   - pass: The video passed the review. No non-compliant content was detected.
     *   - block: The video must be blocked. This value is returned when non-compliant content is detected. The Categories field indicates the category of the non-compliant content. For more information about the categories, see [Content Moderation detection results](https://help.aliyun.com/document_detail/2743995.html).
     *   - review: The video requires manual review. After the manual review is complete, another asynchronous notification message is sent with the result.
     * - Video snapshot requirements:
     *   - Video frame URLs support the HTTP and HTTPS protocols.
     *   - Supported video frame formats: PNG, JPG, JPEG, BMP, GIF, and WEBP.
     *   - The size of a video frame cannot exceed 10 MB.
     *   - The recommended resolution for video frames is at least 256 × 256 pixels. A lower resolution may affect detection accuracy.
     *   - The response time for the video detection operation depends on the download time of the video frames. Make sure that the storage service for your video frames is stable and reliable. We recommend that you use Alibaba Cloud Object Storage Service (OSS) or cache frames with Alibaba Cloud CDN.
     * - This is an asynchronous operation. After a task is created, the task information is saved for only 7 days. After this period, the information cannot be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query the task information using the returned `TaskId`. You can also set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive task information through asynchronous notification messages.
     *
     * @param request - CreateVideoModerationTaskRequest
     *
     * @returns CreateVideoModerationTaskResponse
     *
     * @param CreateVideoModerationTaskRequest $request
     *
     * @return CreateVideoModerationTaskResponse
     */
    public function createVideoModerationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoModerationTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes a batch processing task.
     *
     * @remarks
     *   You can delete only a batch processing task that is in one of the following states: Ready, Failed, Suspended, and Succeeded.
     * *   Before you delete a batch processing task, you can call the [GetBatch](https://help.aliyun.com/document_detail/479922.html) operation to query the task status. This ensures a successful deletion.
     *
     * @param request - DeleteBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBatchResponse
     *
     * @param DeleteBatchRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteBatchResponse
     */
    public function deleteBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteBatch',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a batch processing task.
     *
     * @remarks
     *   You can delete only a batch processing task that is in one of the following states: Ready, Failed, Suspended, and Succeeded.
     * *   Before you delete a batch processing task, you can call the [GetBatch](https://help.aliyun.com/document_detail/479922.html) operation to query the task status. This ensures a successful deletion.
     *
     * @param request - DeleteBatchRequest
     *
     * @returns DeleteBatchResponse
     *
     * @param DeleteBatchRequest $request
     *
     * @return DeleteBatchResponse
     */
    public function deleteBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBatchWithOptions($request, $runtime);
    }

    /**
     * Deletes the binding between a dataset and an Object Storage Service (OSS) bucket.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - If you delete a binding, new changes in the OSS bucket are not synchronized to the dataset. Exercise caution when you perform this operation.
     *
     * @param request - DeleteBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBindingResponse
     *
     * @param DeleteBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBindingResponse
     */
    public function deleteBindingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->URI) {
            @$query['URI'] = $request->URI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBinding',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the binding between a dataset and an Object Storage Service (OSS) bucket.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - If you delete a binding, new changes in the OSS bucket are not synchronized to the dataset. Exercise caution when you perform this operation.
     *
     * @param request - DeleteBindingRequest
     *
     * @returns DeleteBindingResponse
     *
     * @param DeleteBindingRequest $request
     *
     * @return DeleteBindingResponse
     */
    public function deleteBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBindingWithOptions($request, $runtime);
    }

    /**
     * Deletes a dataset.
     *
     * @remarks
     *   Before you delete a dataset, make sure that you have deleted all indexes in the dataset. For more information about how to delete indexes, see [DeleteFileMeta](https://help.aliyun.com/document_detail/478172.html) and [BatchDeleteFileMeta](https://help.aliyun.com/document_detail/478173.html).
     * *   Before you [delete a dataset](https://help.aliyun.com/document_detail/478160.html), make sure that you have deleted all bindings between the dataset and Object Storage Service (OSS) buckets. For more information about how to delete a binding, see [DeleteBinding](https://help.aliyun.com/document_detail/478205.html). The [DeleteBinding](https://help.aliyun.com/document_detail/478205.html) operation does not delete an index that is manually created, even if you set the `Cleanup` parameter to `true`. To delete indexes that are manually created, you must call the [DeleteFileMeta](https://help.aliyun.com/document_detail/478172.html) or [BatchDeleteFileMeta](https://help.aliyun.com/document_detail/478173.html) operation. For more information about the differences between automatically and manually created indexes, see [Create a metadata index](https://help.aliyun.com/document_detail/478166.html).
     *
     * @param request - DeleteDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatasetResponse
     *
     * @param DeleteDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataset',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a dataset.
     *
     * @remarks
     *   Before you delete a dataset, make sure that you have deleted all indexes in the dataset. For more information about how to delete indexes, see [DeleteFileMeta](https://help.aliyun.com/document_detail/478172.html) and [BatchDeleteFileMeta](https://help.aliyun.com/document_detail/478173.html).
     * *   Before you [delete a dataset](https://help.aliyun.com/document_detail/478160.html), make sure that you have deleted all bindings between the dataset and Object Storage Service (OSS) buckets. For more information about how to delete a binding, see [DeleteBinding](https://help.aliyun.com/document_detail/478205.html). The [DeleteBinding](https://help.aliyun.com/document_detail/478205.html) operation does not delete an index that is manually created, even if you set the `Cleanup` parameter to `true`. To delete indexes that are manually created, you must call the [DeleteFileMeta](https://help.aliyun.com/document_detail/478172.html) or [BatchDeleteFileMeta](https://help.aliyun.com/document_detail/478173.html) operation. For more information about the differences between automatically and manually created indexes, see [Create a metadata index](https://help.aliyun.com/document_detail/478166.html).
     *
     * @param request - DeleteDatasetRequest
     *
     * @returns DeleteDatasetResponse
     *
     * @param DeleteDatasetRequest $request
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetWithOptions($request, $runtime);
    }

    /**
     * Removes the metadata of a file from a dataset.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   A successful deletion message is returned regardless of whether the metadata of the file exists in the dataset.
     * >
     * *   The objects stored in Object Storage Service (OSS) or Photo and Drive Service are **not** deleted if you delete metadata from a dataset. If you want to delete the file, call the corresponding operations of OSS and Photo and Drive Service.
     * *   When you delete file metadata, the corresponding face clustering group information and story (if any) are changed, but the spatiotemporal clustering is not changed.
     *
     * @param request - DeleteFileMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFileMetaResponse
     *
     * @param DeleteFileMetaRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFileMetaResponse
     */
    public function deleteFileMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->URI) {
            @$query['URI'] = $request->URI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFileMeta',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes the metadata of a file from a dataset.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   A successful deletion message is returned regardless of whether the metadata of the file exists in the dataset.
     * >
     * *   The objects stored in Object Storage Service (OSS) or Photo and Drive Service are **not** deleted if you delete metadata from a dataset. If you want to delete the file, call the corresponding operations of OSS and Photo and Drive Service.
     * *   When you delete file metadata, the corresponding face clustering group information and story (if any) are changed, but the spatiotemporal clustering is not changed.
     *
     * @param request - DeleteFileMetaRequest
     *
     * @returns DeleteFileMetaResponse
     *
     * @param DeleteFileMetaRequest $request
     *
     * @return DeleteFileMetaResponse
     */
    public function deleteFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileMetaWithOptions($request, $runtime);
    }

    /**
     * Deletes a spatiotemporal cluster.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   Before you call this operation, you must call the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to perform spatiotemporal clustering.
     * *   A successful deletion is returned regardless of whether a spatiotemporal clustering group ID exists.
     *
     * @param request - DeleteLocationDateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLocationDateClusterResponse
     *
     * @param DeleteLocationDateClusterRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteLocationDateClusterResponse
     */
    public function deleteLocationDateClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $body = [];
        if (null !== $request->objectId) {
            @$body['ObjectId'] = $request->objectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteLocationDateCluster',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLocationDateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a spatiotemporal cluster.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   Before you call this operation, you must call the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to perform spatiotemporal clustering.
     * *   A successful deletion is returned regardless of whether a spatiotemporal clustering group ID exists.
     *
     * @param request - DeleteLocationDateClusterRequest
     *
     * @returns DeleteLocationDateClusterResponse
     *
     * @param DeleteLocationDateClusterRequest $request
     *
     * @return DeleteLocationDateClusterResponse
     */
    public function deleteLocationDateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLocationDateClusterWithOptions($request, $runtime);
    }

    /**
     * Deletes a project.
     *
     * @remarks
     * - Before you delete a project, make sure that all resources in the project, such as datasets, bindings, batch processing tasks, and triggers, are deleted. For more information, see [DeleteDataset](https://help.aliyun.com/document_detail/478164.html), [DeleteBatch](https://help.aliyun.com/document_detail/479918.html), and [DeleteTrigger](https://help.aliyun.com/document_detail/479915.html).
     * - After a project is deleted, all resources used by the project are recycled, and all related data is lost and cannot be recovered.
     *
     * @param request - DeleteProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a project.
     *
     * @remarks
     * - Before you delete a project, make sure that all resources in the project, such as datasets, bindings, batch processing tasks, and triggers, are deleted. For more information, see [DeleteDataset](https://help.aliyun.com/document_detail/478164.html), [DeleteBatch](https://help.aliyun.com/document_detail/479918.html), and [DeleteTrigger](https://help.aliyun.com/document_detail/479915.html).
     * - After a project is deleted, all resources used by the project are recycled, and all related data is lost and cannot be recovered.
     *
     * @param request - DeleteProjectRequest
     *
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * Deletes a story.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *
     * @param request - DeleteStoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStoryResponse
     *
     * @param DeleteStoryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteStoryResponse
     */
    public function deleteStoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->objectId) {
            @$query['ObjectId'] = $request->objectId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStory',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a story.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *
     * @param request - DeleteStoryRequest
     *
     * @returns DeleteStoryResponse
     *
     * @param DeleteStoryRequest $request
     *
     * @return DeleteStoryResponse
     */
    public function deleteStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStoryWithOptions($request, $runtime);
    }

    /**
     * Deletes a trigger.
     *
     * @remarks
     * You can delete a trigger only if the trigger is in one of the following states: Ready, Failed, Suspended, and Succeeded. You cannot delete a trigger that is in the Running state.
     *
     * @param request - DeleteTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTriggerResponse
     *
     * @param DeleteTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTrigger',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a trigger.
     *
     * @remarks
     * You can delete a trigger only if the trigger is in one of the following states: Ready, Failed, Suspended, and Succeeded. You cannot delete a trigger that is in the Running state.
     *
     * @param request - DeleteTriggerRequest
     *
     * @returns DeleteTriggerResponse
     *
     * @param DeleteTriggerRequest $request
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTriggerWithOptions($request, $runtime);
    }

    /**
     * Unbinds an Object Storage Service (OSS) bucket from the corresponding project.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that the project is bound to a bucket. For more information, see [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html).
     *
     * @param request - DetachOSSBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachOSSBucketResponse
     *
     * @param DetachOSSBucketRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetachOSSBucketResponse
     */
    public function detachOSSBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->OSSBucket) {
            @$query['OSSBucket'] = $request->OSSBucket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachOSSBucket',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachOSSBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds an Object Storage Service (OSS) bucket from the corresponding project.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that the project is bound to a bucket. For more information, see [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html).
     *
     * @param request - DetachOSSBucketRequest
     *
     * @returns DetachOSSBucketResponse
     *
     * @param DetachOSSBucketRequest $request
     *
     * @return DetachOSSBucketResponse
     */
    public function detachOSSBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachOSSBucketWithOptions($request, $runtime);
    }

    /**
     * Detects human body information, such as the confidence level and body bounding box, in an image.
     *
     * @remarks
     *   Before you call this operation, make sure that an Intelligent Media Management (IMM) project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param tmpReq - DetectImageBodiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectImageBodiesResponse
     *
     * @param DetectImageBodiesRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DetectImageBodiesResponse
     */
    public function detectImageBodiesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectImageBodiesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sensitivity) {
            @$query['Sensitivity'] = $request->sensitivity;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectImageBodies',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectImageBodiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects human body information, such as the confidence level and body bounding box, in an image.
     *
     * @remarks
     *   Before you call this operation, make sure that an Intelligent Media Management (IMM) project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param request - DetectImageBodiesRequest
     *
     * @returns DetectImageBodiesResponse
     *
     * @param DetectImageBodiesRequest $request
     *
     * @return DetectImageBodiesResponse
     */
    public function detectImageBodies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageBodiesWithOptions($request, $runtime);
    }

    /**
     * Detects the outline data, attributes, and license plate information of vehicles in an image. The vehicle attributes include the vehicle color (CarColor) and vehicle type (CarType). The license plate information includes the recognition content (Content) and plate frame (Boundary).
     *
     * @remarks
     *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param tmpReq - DetectImageCarsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectImageCarsResponse
     *
     * @param DetectImageCarsRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DetectImageCarsResponse
     */
    public function detectImageCarsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectImageCarsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectImageCars',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectImageCarsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects the outline data, attributes, and license plate information of vehicles in an image. The vehicle attributes include the vehicle color (CarColor) and vehicle type (CarType). The license plate information includes the recognition content (Content) and plate frame (Boundary).
     *
     * @remarks
     *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param request - DetectImageCarsRequest
     *
     * @returns DetectImageCarsResponse
     *
     * @param DetectImageCarsRequest $request
     *
     * @return DetectImageCarsResponse
     */
    public function detectImageCars($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageCarsWithOptions($request, $runtime);
    }

    /**
     * Detects barcodes and QR codes in an image.
     *
     * @remarks
     *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param tmpReq - DetectImageCodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectImageCodesResponse
     *
     * @param DetectImageCodesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DetectImageCodesResponse
     */
    public function detectImageCodesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectImageCodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectImageCodes',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectImageCodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects barcodes and QR codes in an image.
     *
     * @remarks
     *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param request - DetectImageCodesRequest
     *
     * @returns DetectImageCodesResponse
     *
     * @param DetectImageCodesRequest $request
     *
     * @return DetectImageCodesResponse
     */
    public function detectImageCodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageCodesWithOptions($request, $runtime);
    }

    /**
     * Detects visually optimal cropping regions in an image at a specified aspect ratio by using AI model capabilities.
     *
     * @param tmpReq - DetectImageCroppingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectImageCroppingResponse
     *
     * @param DetectImageCroppingRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DetectImageCroppingResponse
     */
    public function detectImageCroppingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectImageCroppingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->inclusionHints) {
            $request->inclusionHintsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inclusionHints, 'InclusionHints', 'json');
        }

        $query = [];
        if (null !== $request->aspectRatios) {
            @$query['AspectRatios'] = $request->aspectRatios;
        }

        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->inclusionHintsShrink) {
            @$query['InclusionHints'] = $request->inclusionHintsShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectImageCropping',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectImageCroppingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects visually optimal cropping regions in an image at a specified aspect ratio by using AI model capabilities.
     *
     * @param request - DetectImageCroppingRequest
     *
     * @returns DetectImageCroppingResponse
     *
     * @param DetectImageCroppingRequest $request
     *
     * @return DetectImageCroppingResponse
     */
    public function detectImageCropping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageCroppingWithOptions($request, $runtime);
    }

    /**
     * Detects faces from an image, including face boundary information, attributes, and quality. The boundary information includes the distance from the y-coordinate of the vertex to the top edge (Top), distance from the x-coordinate of the vertex to the left edge (Left), height (Height), and width (Width). Face attributes include the age (Age), age standard deviation (AgeSD), gender (Gender), emotion (Emotion), mouth opening (Mouth), beard (Beard), hat wearing (Hat), mask wearing (Mask), glasses wearing (Glasses), head orientation (HeadPose), attractiveness (Attractive), and confidence levels for preceding attributes. Quality information includes the face quality score (FaceQuality) and face resolution (Sharpness).
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param tmpReq - DetectImageFacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectImageFacesResponse
     *
     * @param DetectImageFacesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DetectImageFacesResponse
     */
    public function detectImageFacesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectImageFacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectImageFaces',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectImageFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects faces from an image, including face boundary information, attributes, and quality. The boundary information includes the distance from the y-coordinate of the vertex to the top edge (Top), distance from the x-coordinate of the vertex to the left edge (Left), height (Height), and width (Width). Face attributes include the age (Age), age standard deviation (AgeSD), gender (Gender), emotion (Emotion), mouth opening (Mouth), beard (Beard), hat wearing (Hat), mask wearing (Mask), glasses wearing (Glasses), head orientation (HeadPose), attractiveness (Attractive), and confidence levels for preceding attributes. Quality information includes the face quality score (FaceQuality) and face resolution (Sharpness).
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param request - DetectImageFacesRequest
     *
     * @returns DetectImageFacesResponse
     *
     * @param DetectImageFacesRequest $request
     *
     * @return DetectImageFacesResponse
     */
    public function detectImageFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageFacesWithOptions($request, $runtime);
    }

    /**
     * Detects scene, object, and event information in an image. Scene information includes natural landscapes, daily life, and disasters. Event information includes talent shows, office events, performances, and production events. Object information includes tableware, electronics, furniture, and transportation. The DetectImageLabels operation supports more than 30 different categories and thousands of labels.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Make sure that an IMM [project](https://help.aliyun.com/document_detail/478273.html) is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * - For more information about the features of this operation, see [Image label detection](https://help.aliyun.com/document_detail/477179.html).
     * - For more information about the input images supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param tmpReq - DetectImageLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectImageLabelsResponse
     *
     * @param DetectImageLabelsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DetectImageLabelsResponse
     */
    public function detectImageLabelsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectImageLabelsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectImageLabels',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects scene, object, and event information in an image. Scene information includes natural landscapes, daily life, and disasters. Event information includes talent shows, office events, performances, and production events. Object information includes tableware, electronics, furniture, and transportation. The DetectImageLabels operation supports more than 30 different categories and thousands of labels.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Make sure that an IMM [project](https://help.aliyun.com/document_detail/478273.html) is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * - For more information about the features of this operation, see [Image label detection](https://help.aliyun.com/document_detail/477179.html).
     * - For more information about the input images supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param request - DetectImageLabelsRequest
     *
     * @returns DetectImageLabelsResponse
     *
     * @param DetectImageLabelsRequest $request
     *
     * @return DetectImageLabelsResponse
     */
    public function detectImageLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageLabelsWithOptions($request, $runtime);
    }

    /**
     * Calculates the aesthetics quality score of an image based on metrics such as the composition, brightness, contrast, color, and resolution. The operation returns a score within the range from 0 to 1. A higher score indicates better image quality.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478273.html).[](~~478152~~)
     * *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param tmpReq - DetectImageScoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectImageScoreResponse
     *
     * @param DetectImageScoreRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DetectImageScoreResponse
     */
    public function detectImageScoreWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectImageScoreShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectImageScore',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectImageScoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calculates the aesthetics quality score of an image based on metrics such as the composition, brightness, contrast, color, and resolution. The operation returns a score within the range from 0 to 1. A higher score indicates better image quality.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478273.html).[](~~478152~~)
     * *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *
     * @param request - DetectImageScoreRequest
     *
     * @returns DetectImageScoreResponse
     *
     * @param DetectImageScoreRequest $request
     *
     * @return DetectImageScoreResponse
     */
    public function detectImageScore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageScoreWithOptions($request, $runtime);
    }

    /**
     * Recognizes and extracts text content from an image.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The size of the image cannot exceed 20 MB.
     * *   The shortest side of the image is not less than 20 px, and the longest side is not more than 30,000 px.
     * *   The aspect ratio of the image is less than 1:2.
     * *   We recommend that you do not use an image that is smaller than 15 px × 15 px in size. Otherwise, the recognition rate is low.
     *
     * @param tmpReq - DetectImageTextsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectImageTextsResponse
     *
     * @param DetectImageTextsRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DetectImageTextsResponse
     */
    public function detectImageTextsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectImageTextsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectImageTexts',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectImageTextsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recognizes and extracts text content from an image.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The size of the image cannot exceed 20 MB.
     * *   The shortest side of the image is not less than 20 px, and the longest side is not more than 30,000 px.
     * *   The aspect ratio of the image is less than 1:2.
     * *   We recommend that you do not use an image that is smaller than 15 px × 15 px in size. Otherwise, the recognition rate is low.
     *
     * @param request - DetectImageTextsRequest
     *
     * @returns DetectImageTextsResponse
     *
     * @param DetectImageTextsRequest $request
     *
     * @return DetectImageTextsResponse
     */
    public function detectImageTexts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageTextsWithOptions($request, $runtime);
    }

    /**
     * Queries media metadata, including the media format and stream information.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *
     * @param tmpReq - DetectMediaMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectMediaMetaResponse
     *
     * @param DetectMediaMetaRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DetectMediaMetaResponse
     */
    public function detectMediaMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectMediaMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectMediaMeta',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectMediaMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media metadata, including the media format and stream information.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *
     * @param request - DetectMediaMetaRequest
     *
     * @returns DetectMediaMetaResponse
     *
     * @param DetectMediaMetaRequest $request
     *
     * @return DetectMediaMetaResponse
     */
    public function detectMediaMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectMediaMetaWithOptions($request, $runtime);
    }

    /**
     * Detects whether specified text contains anomalies, such as pornography, advertisements, excessive junk content, politically sensitive content, and abuse.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * >  The text compliance detection feature only supports Chinese characters.
     *
     * @param request - DetectTextAnomalyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectTextAnomalyResponse
     *
     * @param DetectTextAnomalyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectTextAnomalyResponse
     */
    public function detectTextAnomalyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetectTextAnomaly',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectTextAnomalyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects whether specified text contains anomalies, such as pornography, advertisements, excessive junk content, politically sensitive content, and abuse.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * >  The text compliance detection feature only supports Chinese characters.
     *
     * @param request - DetectTextAnomalyRequest
     *
     * @returns DetectTextAnomalyResponse
     *
     * @param DetectTextAnomalyRequest $request
     *
     * @return DetectTextAnomalyResponse
     */
    public function detectTextAnomaly($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectTextAnomalyWithOptions($request, $runtime);
    }

    /**
     * Embeds specific textual information into an image as watermarks. These watermarks are visually imperceptible and do not affect the aesthetics of the image or the integrity of the original data. The watermarks can be extracted by using the CreateDecodeBlindWatermarkTask operation.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the billing of Intelligent Media Management (IMM).
     * *   Make sure that an IMM project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   You can embed only text as blind watermarks to an image.
     * *   The format of the output image is the same as that of the input image.
     * *   A blind watermark can still be extracted even if attacks, such as compression, scaling, cropping, and color transformation, are performed on the image.
     * *   Pure black and white images and images with low resolution (roughly less than 200 px × 200 px,) are not supported.
     *
     * @param request - EncodeBlindWatermarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EncodeBlindWatermarkResponse
     *
     * @param EncodeBlindWatermarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EncodeBlindWatermarkResponse
     */
    public function encodeBlindWatermarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->imageQuality) {
            @$query['ImageQuality'] = $request->imageQuality;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->strengthLevel) {
            @$query['StrengthLevel'] = $request->strengthLevel;
        }

        if (null !== $request->targetURI) {
            @$query['TargetURI'] = $request->targetURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EncodeBlindWatermark',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EncodeBlindWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Embeds specific textual information into an image as watermarks. These watermarks are visually imperceptible and do not affect the aesthetics of the image or the integrity of the original data. The watermarks can be extracted by using the CreateDecodeBlindWatermarkTask operation.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the billing of Intelligent Media Management (IMM).
     * *   Make sure that an IMM project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   You can embed only text as blind watermarks to an image.
     * *   The format of the output image is the same as that of the input image.
     * *   A blind watermark can still be extracted even if attacks, such as compression, scaling, cropping, and color transformation, are performed on the image.
     * *   Pure black and white images and images with low resolution (roughly less than 200 px × 200 px,) are not supported.
     *
     * @param request - EncodeBlindWatermarkRequest
     *
     * @returns EncodeBlindWatermarkResponse
     *
     * @param EncodeBlindWatermarkRequest $request
     *
     * @return EncodeBlindWatermarkResponse
     */
    public function encodeBlindWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encodeBlindWatermarkWithOptions($request, $runtime);
    }

    /**
     * Extract text from the document.
     *
     * @remarks
     * - **Before using this interface, please make sure you fully understand the billing method and [pricing](https://help.aliyun.com/document_detail/88317.html) of the Intelligent Media Management product.**
     * - Before calling this interface, ensure that there is an available project ([Project](https://help.aliyun.com/document_detail/478273.html)) in the current Region. For more details, see [Project Management](https://help.aliyun.com/document_detail/478152.html).
     * - Supports common Word, Excel, PPT, PDF, and TXT documents.
     * - The file size must not exceed 200 MB. The extracted plain text file size should not exceed 2 MB (approximately 600,000 Chinese characters).
     * >Notice: If the document format is complex or the text volume is too large, a timeout error may occur. In such scenarios, it is recommended to use the [CreateOfficeConversionTask](478228) interface and specify the output format as txt to achieve similar functionality.
     *
     * @param tmpReq - ExtractDocumentTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExtractDocumentTextResponse
     *
     * @param ExtractDocumentTextRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ExtractDocumentTextResponse
     */
    public function extractDocumentTextWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExtractDocumentTextShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExtractDocumentText',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExtractDocumentTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Extract text from the document.
     *
     * @remarks
     * - **Before using this interface, please make sure you fully understand the billing method and [pricing](https://help.aliyun.com/document_detail/88317.html) of the Intelligent Media Management product.**
     * - Before calling this interface, ensure that there is an available project ([Project](https://help.aliyun.com/document_detail/478273.html)) in the current Region. For more details, see [Project Management](https://help.aliyun.com/document_detail/478152.html).
     * - Supports common Word, Excel, PPT, PDF, and TXT documents.
     * - The file size must not exceed 200 MB. The extracted plain text file size should not exceed 2 MB (approximately 600,000 Chinese characters).
     * >Notice: If the document format is complex or the text volume is too large, a timeout error may occur. In such scenarios, it is recommended to use the [CreateOfficeConversionTask](478228) interface and specify the output format as txt to achieve similar functionality.
     *
     * @param request - ExtractDocumentTextRequest
     *
     * @returns ExtractDocumentTextResponse
     *
     * @param ExtractDocumentTextRequest $request
     *
     * @return ExtractDocumentTextResponse
     */
    public function extractDocumentText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractDocumentTextWithOptions($request, $runtime);
    }

    /**
     * Queries the extracted file metadata, including the file name, labels, path, custom tags, and other fields. If the value of a metadata field of a file matches the specified string, the metadata of the file is returned.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 88490020073) and share your questions with us.
     * - For information about the fields that you can use as query conditions, see [Supported fields and operators](https://help.aliyun.com/document_detail/2743991.html).
     *
     * @param tmpReq - FuzzyQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FuzzyQueryResponse
     *
     * @param FuzzyQueryRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return FuzzyQueryResponse
     */
    public function fuzzyQueryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new FuzzyQueryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->withFields) {
            $request->withFieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->withFieldsShrink) {
            @$query['WithFields'] = $request->withFieldsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FuzzyQuery',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FuzzyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the extracted file metadata, including the file name, labels, path, custom tags, and other fields. If the value of a metadata field of a file matches the specified string, the metadata of the file is returned.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 88490020073) and share your questions with us.
     * - For information about the fields that you can use as query conditions, see [Supported fields and operators](https://help.aliyun.com/document_detail/2743991.html).
     *
     * @param request - FuzzyQueryRequest
     *
     * @returns FuzzyQueryResponse
     *
     * @param FuzzyQueryRequest $request
     *
     * @return FuzzyQueryResponse
     */
    public function fuzzyQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fuzzyQueryWithOptions($request, $runtime);
    }

    /**
     * Generates a playlist from a video file for live transcoding. The output is an M3U8 file that enables immediate playback and on-demand transcoding based on playback progress. Compared with offline transcoding, this method significantly reduces transcoding wait times and lowers transcoding and storage overhead.
     *
     * @remarks
     * - **Before you use this API, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management.**
     * - Before you call this API, ensure that an active project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * - By default, this API processes only one video, audio, or subtitle stream. You can also configure the number of video, audio, and subtitle streams to process.
     *   >Notice:
     *   The Video, Audio, and Subtitle parameters within Targets cannot all be empty. If a parameter is left empty, the corresponding processing is disabled. For example, if the Video parameter is empty, video processing is disabled, and the output TS file does not contain a video stream.
     *
     * - The source video must be at least 0.x seconds long. The minimum duration varies slightly based on the output frame rate.
     * - This API supports generating both Media playlists and Master playlists. For more information, see the parameter descriptions in this document.
     * - This is a synchronous API. Transcoding is triggered only during playback or pre-transcoding. You can set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive the transcoding task result through an asynchronous notification message.
     * - For more information about the features of this API, see [Live transcoding](https://help.aliyun.com/document_detail/477192.html).
     * - The data processing feature of OSS can also be used to generate playlists. However, this feature generates only Media Playlists and uses simplified parameters. For more information, see the OSS data processing topic [Generate a playlist](https://help.aliyun.com/document_detail/2709281.html).
     *
     * @param tmpReq - GenerateVideoPlaylistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateVideoPlaylistResponse
     *
     * @param GenerateVideoPlaylistRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateVideoPlaylistResponse
     */
    public function generateVideoPlaylistWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateVideoPlaylistShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->sourceSubtitles) {
            $request->sourceSubtitlesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceSubtitles, 'SourceSubtitles', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        if (null !== $tmpReq->targets) {
            $request->targetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->targets, 'Targets', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->masterURI) {
            @$query['MasterURI'] = $request->masterURI;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->overwritePolicy) {
            @$query['OverwritePolicy'] = $request->overwritePolicy;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceDuration) {
            @$query['SourceDuration'] = $request->sourceDuration;
        }

        if (null !== $request->sourceStartTime) {
            @$query['SourceStartTime'] = $request->sourceStartTime;
        }

        if (null !== $request->sourceSubtitlesShrink) {
            @$query['SourceSubtitles'] = $request->sourceSubtitlesShrink;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->targetsShrink) {
            @$query['Targets'] = $request->targetsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateVideoPlaylist',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateVideoPlaylistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a playlist from a video file for live transcoding. The output is an M3U8 file that enables immediate playback and on-demand transcoding based on playback progress. Compared with offline transcoding, this method significantly reduces transcoding wait times and lowers transcoding and storage overhead.
     *
     * @remarks
     * - **Before you use this API, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management.**
     * - Before you call this API, ensure that an active project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * - By default, this API processes only one video, audio, or subtitle stream. You can also configure the number of video, audio, and subtitle streams to process.
     *   >Notice:
     *   The Video, Audio, and Subtitle parameters within Targets cannot all be empty. If a parameter is left empty, the corresponding processing is disabled. For example, if the Video parameter is empty, video processing is disabled, and the output TS file does not contain a video stream.
     *
     * - The source video must be at least 0.x seconds long. The minimum duration varies slightly based on the output frame rate.
     * - This API supports generating both Media playlists and Master playlists. For more information, see the parameter descriptions in this document.
     * - This is a synchronous API. Transcoding is triggered only during playback or pre-transcoding. You can set the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to receive the transcoding task result through an asynchronous notification message.
     * - For more information about the features of this API, see [Live transcoding](https://help.aliyun.com/document_detail/477192.html).
     * - The data processing feature of OSS can also be used to generate playlists. However, this feature generates only Media Playlists and uses simplified parameters. For more information, see the OSS data processing topic [Generate a playlist](https://help.aliyun.com/document_detail/2709281.html).
     *
     * @param request - GenerateVideoPlaylistRequest
     *
     * @returns GenerateVideoPlaylistResponse
     *
     * @param GenerateVideoPlaylistRequest $request
     *
     * @return GenerateVideoPlaylistResponse
     */
    public function generateVideoPlaylist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateVideoPlaylistWithOptions($request, $runtime);
    }

    /**
     * Retrieves the preview and editing credentials for a document.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing of Intelligent Media Management. For more information, see [Pricing](https://help.aliyun.com/document_detail/477042.html)**.
     * - Do not perform cross-border access on OSS files. For example, if a file is stored in a bucket in the Singapore region, do not initiate preview, read, or download requests from the Chinese mainland. In such scenarios, the network link quality is significantly affected by the cross-border network environment, which may cause increased access latency, preview failures, download interruptions, or unstable connections. Network stability and access experience cannot be guaranteed. Make sure that the access point and the bucket are in the same region to avoid uncertainties caused by cross-border access.
     * - The access credential expires in 30 minutes, and the refresh credential expires in 1 day.
     * - The returned expiration time is in UTC, which is 8 hours behind UTC+8.
     * - Supported input file formats:
     *     - Word documents: doc, docx, txt, dot, wps, wpt, dotx, docm, dotm, and rtf.
     *     - Presentation documents (PPT): ppt, pptx, pptm, ppsx, ppsm, pps, potx, potm, dpt, and dps.
     *     - Excel documents: et, xls, xlt, xlsx, xlsm, xltx, xltm, and csv.
     *     - PDF documents: pdf.
     * - The maximum supported file size is 200 MB.
     * - The maximum supported number of document pages is 5,000.
     * - For projects created before December 1, 2023, billing is based on the number of document opens. Currently, billing is based on the number of API calls. To switch to the new billing mode, create a new project. Note that each API call can be used by only one user. If the call is reused, only the last user can access the document normally, and the access permissions of other users are revoked.
     * - Activate Message Service (MNS) in the same region as Intelligent Media Management, create a topic and a queue, and configure a subscription. You can pass in the MNS topic name by using the NotifyTopicName parameter to receive message notifications about file saves. For more information about the MNS SDK, see [Receive and delete messages](https://help.aliyun.com/document_detail/32449.html).
     * For an example of the JSON format of the Message field in file save message notifications, see [WebOffice message notification format](https://help.aliyun.com/document_detail/2743999.html).
     * > To use the versioning feature, you must first enable versioning in OSS and then set the History parameter to true.
     * >.
     *
     * @param tmpReq - GenerateWebofficeTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateWebofficeTokenResponse
     *
     * @param GenerateWebofficeTokenRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return GenerateWebofficeTokenResponse
     */
    public function generateWebofficeTokenWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateWebofficeTokenShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        if (null !== $tmpReq->permission) {
            $request->permissionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permission, 'Permission', 'json');
        }

        if (null !== $tmpReq->user) {
            $request->userShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }

        if (null !== $tmpReq->watermark) {
            $request->watermarkShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->watermark, 'Watermark', 'json');
        }

        $query = [];
        if (null !== $request->cachePreview) {
            @$query['CachePreview'] = $request->cachePreview;
        }

        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->externalUploaded) {
            @$query['ExternalUploaded'] = $request->externalUploaded;
        }

        if (null !== $request->filename) {
            @$query['Filename'] = $request->filename;
        }

        if (null !== $request->hidecmb) {
            @$query['Hidecmb'] = $request->hidecmb;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->notifyTopicName) {
            @$query['NotifyTopicName'] = $request->notifyTopicName;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->permissionShrink) {
            @$query['Permission'] = $request->permissionShrink;
        }

        if (null !== $request->previewPages) {
            @$query['PreviewPages'] = $request->previewPages;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->referer) {
            @$query['Referer'] = $request->referer;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->userShrink) {
            @$query['User'] = $request->userShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->watermarkShrink) {
            @$query['Watermark'] = $request->watermarkShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateWebofficeToken',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateWebofficeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the preview and editing credentials for a document.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing of Intelligent Media Management. For more information, see [Pricing](https://help.aliyun.com/document_detail/477042.html)**.
     * - Do not perform cross-border access on OSS files. For example, if a file is stored in a bucket in the Singapore region, do not initiate preview, read, or download requests from the Chinese mainland. In such scenarios, the network link quality is significantly affected by the cross-border network environment, which may cause increased access latency, preview failures, download interruptions, or unstable connections. Network stability and access experience cannot be guaranteed. Make sure that the access point and the bucket are in the same region to avoid uncertainties caused by cross-border access.
     * - The access credential expires in 30 minutes, and the refresh credential expires in 1 day.
     * - The returned expiration time is in UTC, which is 8 hours behind UTC+8.
     * - Supported input file formats:
     *     - Word documents: doc, docx, txt, dot, wps, wpt, dotx, docm, dotm, and rtf.
     *     - Presentation documents (PPT): ppt, pptx, pptm, ppsx, ppsm, pps, potx, potm, dpt, and dps.
     *     - Excel documents: et, xls, xlt, xlsx, xlsm, xltx, xltm, and csv.
     *     - PDF documents: pdf.
     * - The maximum supported file size is 200 MB.
     * - The maximum supported number of document pages is 5,000.
     * - For projects created before December 1, 2023, billing is based on the number of document opens. Currently, billing is based on the number of API calls. To switch to the new billing mode, create a new project. Note that each API call can be used by only one user. If the call is reused, only the last user can access the document normally, and the access permissions of other users are revoked.
     * - Activate Message Service (MNS) in the same region as Intelligent Media Management, create a topic and a queue, and configure a subscription. You can pass in the MNS topic name by using the NotifyTopicName parameter to receive message notifications about file saves. For more information about the MNS SDK, see [Receive and delete messages](https://help.aliyun.com/document_detail/32449.html).
     * For an example of the JSON format of the Message field in file save message notifications, see [WebOffice message notification format](https://help.aliyun.com/document_detail/2743999.html).
     * > To use the versioning feature, you must first enable versioning in OSS and then set the History parameter to true.
     * >.
     *
     * @param request - GenerateWebofficeTokenRequest
     *
     * @returns GenerateWebofficeTokenResponse
     *
     * @param GenerateWebofficeTokenRequest $request
     *
     * @return GenerateWebofficeTokenResponse
     */
    public function generateWebofficeToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateWebofficeTokenWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a batch processing task.
     *
     * @param request - GetBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBatchResponse
     *
     * @param GetBatchRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetBatchResponse
     */
    public function getBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBatch',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a batch processing task.
     *
     * @param request - GetBatchRequest
     *
     * @returns GetBatchResponse
     *
     * @param GetBatchRequest $request
     *
     * @return GetBatchResponse
     */
    public function getBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchWithOptions($request, $runtime);
    }

    /**
     * Queries the binding relationship between a specific dataset and an Object Storage Service (OSS) bucket.
     *
     * @remarks
     * - **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * - Make sure that the binding relationship that you want to query exists. For information about how to create a binding relationship, see [CreateBinding](https://help.aliyun.com/document_detail/478202.html).
     *
     * @param request - GetBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBindingResponse
     *
     * @param GetBindingRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetBindingResponse
     */
    public function getBindingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->URI) {
            @$query['URI'] = $request->URI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBinding',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the binding relationship between a specific dataset and an Object Storage Service (OSS) bucket.
     *
     * @remarks
     * - **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * - Make sure that the binding relationship that you want to query exists. For information about how to create a binding relationship, see [CreateBinding](https://help.aliyun.com/document_detail/478202.html).
     *
     * @param request - GetBindingRequest
     *
     * @returns GetBindingResponse
     *
     * @param GetBindingRequest $request
     *
     * @return GetBindingResponse
     */
    public function getBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBindingWithOptions($request, $runtime);
    }

    /**
     * drmlicense获取.
     *
     * @deprecated OpenAPI GetDRMLicense is deprecated
     *
     * @param request - GetDRMLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDRMLicenseResponse
     *
     * @param GetDRMLicenseRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDRMLicenseResponse
     */
    public function getDRMLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyId) {
            @$query['KeyId'] = $request->keyId;
        }

        if (null !== $request->notifyEndpoint) {
            @$query['NotifyEndpoint'] = $request->notifyEndpoint;
        }

        if (null !== $request->notifyTopicName) {
            @$query['NotifyTopicName'] = $request->notifyTopicName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->protectionSystem) {
            @$query['ProtectionSystem'] = $request->protectionSystem;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDRMLicense',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDRMLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * drmlicense获取.
     *
     * @deprecated OpenAPI GetDRMLicense is deprecated
     *
     * @param request - GetDRMLicenseRequest
     *
     * @returns GetDRMLicenseResponse
     *
     * @param GetDRMLicenseRequest $request
     *
     * @return GetDRMLicenseResponse
     */
    public function getDRMLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDRMLicenseWithOptions($request, $runtime);
    }

    /**
     * Queries a dataset.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - The GetDataset operation supports real-time retrieval of file statistics. You can specify WithStatistics to enable real-time retrieval of file statistics.
     *
     * @param request - GetDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatasetResponse
     *
     * @param GetDatasetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetDatasetResponse
     */
    public function getDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->withStatistics) {
            @$query['WithStatistics'] = $request->withStatistics;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataset',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a dataset.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - The GetDataset operation supports real-time retrieval of file statistics. You can specify WithStatistics to enable real-time retrieval of file statistics.
     *
     * @param request - GetDatasetRequest
     *
     * @returns GetDatasetResponse
     *
     * @param GetDatasetRequest $request
     *
     * @return GetDatasetResponse
     */
    public function getDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatasetWithOptions($request, $runtime);
    }

    /**
     * Queries the result of an invisible watermark parsing task.
     *
     * @remarks
     *   Before you call this operation, make sure that an Intelligent Media Management (IMM) project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   Before you call this operation, make sure that an invisible watermark task is created and the task ID is obtained.``
     *
     * @param request - GetDecodeBlindWatermarkResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDecodeBlindWatermarkResultResponse
     *
     * @param GetDecodeBlindWatermarkResultRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetDecodeBlindWatermarkResultResponse
     */
    public function getDecodeBlindWatermarkResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDecodeBlindWatermarkResult',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDecodeBlindWatermarkResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result of an invisible watermark parsing task.
     *
     * @remarks
     *   Before you call this operation, make sure that an Intelligent Media Management (IMM) project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   Before you call this operation, make sure that an invisible watermark task is created and the task ID is obtained.``
     *
     * @param request - GetDecodeBlindWatermarkResultRequest
     *
     * @returns GetDecodeBlindWatermarkResultResponse
     *
     * @param GetDecodeBlindWatermarkResultRequest $request
     *
     * @return GetDecodeBlindWatermarkResultResponse
     */
    public function getDecodeBlindWatermarkResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDecodeBlindWatermarkResultWithOptions($request, $runtime);
    }

    /**
     * Obtains basic information about face clustering, including the creation time, number of images, and cover.
     *
     * @remarks
     * - **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * - Before you call this operation, make sure that a face clustering task is created to group all faces in a dataset. For information about how to create a face clustering task, see [CreateFigureClusteringTask](~~CreateFigureClusteringTask~~). For information about how to create a dataset, see [CreateDataset](~~CreateDataset~~).
     *
     * @param request - GetFigureClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFigureClusterResponse
     *
     * @param GetFigureClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetFigureClusterResponse
     */
    public function getFigureClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->objectId) {
            @$query['ObjectId'] = $request->objectId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFigureCluster',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFigureClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains basic information about face clustering, including the creation time, number of images, and cover.
     *
     * @remarks
     * - **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * - Before you call this operation, make sure that a face clustering task is created to group all faces in a dataset. For information about how to create a face clustering task, see [CreateFigureClusteringTask](~~CreateFigureClusteringTask~~). For information about how to create a dataset, see [CreateDataset](~~CreateDataset~~).
     *
     * @param request - GetFigureClusterRequest
     *
     * @returns GetFigureClusterResponse
     *
     * @param GetFigureClusterRequest $request
     *
     * @return GetFigureClusterResponse
     */
    public function getFigureCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFigureClusterWithOptions($request, $runtime);
    }

    /**
     * Queries metadata of a file whose metadata is indexed into the dataset.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     *
     * @param tmpReq - GetFileMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileMetaResponse
     *
     * @param GetFileMetaRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return GetFileMetaResponse
     */
    public function getFileMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetFileMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->withFields) {
            $request->withFieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->URI) {
            @$query['URI'] = $request->URI;
        }

        if (null !== $request->withFieldsShrink) {
            @$query['WithFields'] = $request->withFieldsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFileMeta',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries metadata of a file whose metadata is indexed into the dataset.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     *
     * @param request - GetFileMetaRequest
     *
     * @returns GetFileMetaResponse
     *
     * @param GetFileMetaRequest $request
     *
     * @return GetFileMetaResponse
     */
    public function getFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileMetaWithOptions($request, $runtime);
    }

    /**
     * Retrieves an image content moderation task.
     *
     * @param request - GetImageModerationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageModerationResultResponse
     *
     * @param GetImageModerationResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetImageModerationResultResponse
     */
    public function getImageModerationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageModerationResult',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves an image content moderation task.
     *
     * @param request - GetImageModerationResultRequest
     *
     * @returns GetImageModerationResultResponse
     *
     * @param GetImageModerationResultRequest $request
     *
     * @return GetImageModerationResultResponse
     */
    public function getImageModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageModerationResultWithOptions($request, $runtime);
    }

    /**
     * Retrieves the project name of a project that is bound to a specified OSS bucket in the same region.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing of Intelligent Media Management (IMM) and its [pricing](https://help.aliyun.com/document_detail/477042.html).**
     * - Before you call this operation, make sure that you have called the [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html) operation to bind a project to an OSS bucket.
     *
     * @param request - GetOSSBucketAttachmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOSSBucketAttachmentResponse
     *
     * @param GetOSSBucketAttachmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOSSBucketAttachmentResponse
     */
    public function getOSSBucketAttachmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->OSSBucket) {
            @$query['OSSBucket'] = $request->OSSBucket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOSSBucketAttachment',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOSSBucketAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the project name of a project that is bound to a specified OSS bucket in the same region.
     *
     * @remarks
     * - **Before you use this operation, make sure that you are familiar with the billing of Intelligent Media Management (IMM) and its [pricing](https://help.aliyun.com/document_detail/477042.html).**
     * - Before you call this operation, make sure that you have called the [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html) operation to bind a project to an OSS bucket.
     *
     * @param request - GetOSSBucketAttachmentRequest
     *
     * @returns GetOSSBucketAttachmentResponse
     *
     * @param GetOSSBucketAttachmentRequest $request
     *
     * @return GetOSSBucketAttachmentResponse
     */
    public function getOSSBucketAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOSSBucketAttachmentWithOptions($request, $runtime);
    }

    /**
     * Queries information about a specified project, including basic information and statistics related to datasets and files.
     *
     * @remarks
     * Querying project information supports real-time retrieval of file statistics. Enable this feature through parameter settings. For details, see the request parameters section.
     * >Notice: Only files in datasets created before December 20, 2025 can be counted.
     *
     * @param request - GetProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectResponse
     *
     * @param GetProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->withStatistics) {
            @$query['WithStatistics'] = $request->withStatistics;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a specified project, including basic information and statistics related to datasets and files.
     *
     * @remarks
     * Querying project information supports real-time retrieval of file statistics. Enable this feature through parameter settings. For details, see the request parameters section.
     * >Notice: Only files in datasets created before December 20, 2025 can be counted.
     *
     * @param request - GetProjectRequest
     *
     * @returns GetProjectResponse
     *
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectWithOptions($request, $runtime);
    }

    /**
     * Queries a story.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *
     * @param request - GetStoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStoryResponse
     *
     * @param GetStoryRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetStoryResponse
     */
    public function getStoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->objectId) {
            @$query['ObjectId'] = $request->objectId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStory',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a story.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *
     * @param request - GetStoryRequest
     *
     * @returns GetStoryResponse
     *
     * @param GetStoryRequest $request
     *
     * @return GetStoryResponse
     */
    public function getStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStoryWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a specified asynchronous task. Intelligent Media Management (IMM) supports various asynchronous data processing capabilities, each with its own task creation operation, such as CreateFigureClusteringTask for creating figure clustering tasks and CreateFileCompressionTask for creating file compression tasks. This operation is a general-purpose operation that allows you to query the details of an asynchronous task by task ID and type.
     *
     * @remarks
     * *Before you use this operation, make sure that you are familiar with the billing of Intelligent Media Management and its [pricing](https://help.aliyun.com/document_detail/477042.html).**.
     *
     * @param request - GetTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->requestDefinition) {
            @$query['RequestDefinition'] = $request->requestDefinition;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a specified asynchronous task. Intelligent Media Management (IMM) supports various asynchronous data processing capabilities, each with its own task creation operation, such as CreateFigureClusteringTask for creating figure clustering tasks and CreateFileCompressionTask for creating file compression tasks. This operation is a general-purpose operation that allows you to query the details of an asynchronous task by task ID and type.
     *
     * @remarks
     * *Before you use this operation, make sure that you are familiar with the billing of Intelligent Media Management and its [pricing](https://help.aliyun.com/document_detail/477042.html).**.
     *
     * @param request - GetTaskRequest
     *
     * @returns GetTaskResponse
     *
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a trigger.
     *
     * @param request - GetTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTriggerResponse
     *
     * @param GetTriggerRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetTriggerResponse
     */
    public function getTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrigger',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a trigger.
     *
     * @param request - GetTriggerRequest
     *
     * @returns GetTriggerResponse
     *
     * @param GetTriggerRequest $request
     *
     * @return GetTriggerResponse
     */
    public function getTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTriggerWithOptions($request, $runtime);
    }

    /**
     * Retrieves the result of a video label detection task.
     *
     * @remarks
     * - Before you call this operation, make sure that you have created a project ([Project](https://help.aliyun.com/document_detail/478273.html)) in Intelligent Media Management. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * - Before you call this operation, make sure that you have created a [video label detection task](https://help.aliyun.com/document_detail/478223.html) and obtained the `TaskId` of the task.
     *
     * @param request - GetVideoLabelClassificationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoLabelClassificationResultResponse
     *
     * @param GetVideoLabelClassificationResultRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetVideoLabelClassificationResultResponse
     */
    public function getVideoLabelClassificationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoLabelClassificationResult',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoLabelClassificationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the result of a video label detection task.
     *
     * @remarks
     * - Before you call this operation, make sure that you have created a project ([Project](https://help.aliyun.com/document_detail/478273.html)) in Intelligent Media Management. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * - Before you call this operation, make sure that you have created a [video label detection task](https://help.aliyun.com/document_detail/478223.html) and obtained the `TaskId` of the task.
     *
     * @param request - GetVideoLabelClassificationResultRequest
     *
     * @returns GetVideoLabelClassificationResultResponse
     *
     * @param GetVideoLabelClassificationResultRequest $request
     *
     * @return GetVideoLabelClassificationResultResponse
     */
    public function getVideoLabelClassificationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoLabelClassificationResultWithOptions($request, $runtime);
    }

    /**
     * Retrieves a video content moderation task.
     *
     * @param request - GetVideoModerationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoModerationResultResponse
     *
     * @param GetVideoModerationResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetVideoModerationResultResponse
     */
    public function getVideoModerationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoModerationResult',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a video content moderation task.
     *
     * @param request - GetVideoModerationResultRequest
     *
     * @returns GetVideoModerationResultResponse
     *
     * @param GetVideoModerationResultRequest $request
     *
     * @return GetVideoModerationResultResponse
     */
    public function getVideoModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoModerationResultWithOptions($request, $runtime);
    }

    /**
     * Performs data processing on input files for tasks such as label detection, face detection, and location detection. This operation extracts object metadata and creates an index, which lets you retrieve data from a dataset.
     *
     * @remarks
     * - **Make sure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management before you use this API.**
     * - For a list of supported data processing operations for indexing object metadata, see [Workflow templates and operators](https://help.aliyun.com/document_detail/466304.html).
     * - The total number and size of files that can be indexed are limited. For more information, see the Dataset limits section in [Limits](https://help.aliyun.com/document_detail/475569.html). For information about how to create a dataset, see the parameter descriptions.
     * - For a list of regions where you can index object metadata, see the \\"Features supported by region, Datasets and indexes\\" section in [Limits](https://help.aliyun.com/document_detail/475569.html).
     * - After you index object metadata, you can retrieve data using [Simple query](https://help.aliyun.com/document_detail/478175.html). For information about other retrieval features, see [Query and statistics](https://help.aliyun.com/document_detail/2402363.html). You can also create face groups using [Create a face clustering task](https://help.aliyun.com/document_detail/478180.html). For information about other clustering features, see [Intelligent management](https://help.aliyun.com/document_detail/2402365.html).
     * > * This is an asynchronous operation. After you submit a request, the file is processed. The processing time can range from several seconds to several minutes or longer, depending on the [workflow template and operators](https://help.aliyun.com/document_detail/466304.html) and file content. After the processing is complete, the metadata is stored in the dataset. You can use the [message subscription](https://help.aliyun.com/document_detail/603317.html) feature to receive a notification when the task is complete.
     *
     * @param tmpReq - IndexFileMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IndexFileMetaResponse
     *
     * @param IndexFileMetaRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return IndexFileMetaResponse
     */
    public function indexFileMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new IndexFileMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->file) {
            $request->fileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->file, 'File', 'json');
        }

        if (null !== $tmpReq->notification) {
            $request->notificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->fileShrink) {
            @$query['File'] = $request->fileShrink;
        }

        if (null !== $request->notificationShrink) {
            @$query['Notification'] = $request->notificationShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IndexFileMeta',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IndexFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs data processing on input files for tasks such as label detection, face detection, and location detection. This operation extracts object metadata and creates an index, which lets you retrieve data from a dataset.
     *
     * @remarks
     * - **Make sure you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management before you use this API.**
     * - For a list of supported data processing operations for indexing object metadata, see [Workflow templates and operators](https://help.aliyun.com/document_detail/466304.html).
     * - The total number and size of files that can be indexed are limited. For more information, see the Dataset limits section in [Limits](https://help.aliyun.com/document_detail/475569.html). For information about how to create a dataset, see the parameter descriptions.
     * - For a list of regions where you can index object metadata, see the \\"Features supported by region, Datasets and indexes\\" section in [Limits](https://help.aliyun.com/document_detail/475569.html).
     * - After you index object metadata, you can retrieve data using [Simple query](https://help.aliyun.com/document_detail/478175.html). For information about other retrieval features, see [Query and statistics](https://help.aliyun.com/document_detail/2402363.html). You can also create face groups using [Create a face clustering task](https://help.aliyun.com/document_detail/478180.html). For information about other clustering features, see [Intelligent management](https://help.aliyun.com/document_detail/2402365.html).
     * > * This is an asynchronous operation. After you submit a request, the file is processed. The processing time can range from several seconds to several minutes or longer, depending on the [workflow template and operators](https://help.aliyun.com/document_detail/466304.html) and file content. After the processing is complete, the metadata is stored in the dataset. You can use the [message subscription](https://help.aliyun.com/document_detail/603317.html) feature to receive a notification when the task is complete.
     *
     * @param request - IndexFileMetaRequest
     *
     * @returns IndexFileMetaResponse
     *
     * @param IndexFileMetaRequest $request
     *
     * @return IndexFileMetaResponse
     */
    public function indexFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->indexFileMetaWithOptions($request, $runtime);
    }

    /**
     * List bound attachments.
     *
     * @remarks
     * - **Please ensure that you fully understand the billing method and [pricing](https://help.aliyun.com/document_detail/88317.html) of the Intelligent Media Management product before using this interface.**
     * - Ensure that you have called [Bind Object Storage Bucket](～～478206～～) to bind the OSS Bucket to the project.
     *
     * @param request - ListAttachedOSSBucketsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAttachedOSSBucketsResponse
     *
     * @param ListAttachedOSSBucketsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAttachedOSSBucketsResponse
     */
    public function listAttachedOSSBucketsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAttachedOSSBuckets',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAttachedOSSBucketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List bound attachments.
     *
     * @remarks
     * - **Please ensure that you fully understand the billing method and [pricing](https://help.aliyun.com/document_detail/88317.html) of the Intelligent Media Management product before using this interface.**
     * - Ensure that you have called [Bind Object Storage Bucket](～～478206～～) to bind the OSS Bucket to the project.
     *
     * @param request - ListAttachedOSSBucketsRequest
     *
     * @returns ListAttachedOSSBucketsResponse
     *
     * @param ListAttachedOSSBucketsRequest $request
     *
     * @return ListAttachedOSSBucketsResponse
     */
    public function listAttachedOSSBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAttachedOSSBucketsWithOptions($request, $runtime);
    }

    /**
     * Queries batch processing tasks. You can query batch processing tasks based on conditions such task tags and status. The results can be sorted.
     *
     * @param request - ListBatchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBatchesResponse
     *
     * @param ListBatchesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListBatchesResponse
     */
    public function listBatchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->tagSelector) {
            @$query['TagSelector'] = $request->tagSelector;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBatches',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBatchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries batch processing tasks. You can query batch processing tasks based on conditions such task tags and status. The results can be sorted.
     *
     * @param request - ListBatchesRequest
     *
     * @returns ListBatchesResponse
     *
     * @param ListBatchesRequest $request
     *
     * @return ListBatchesResponse
     */
    public function listBatches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchesWithOptions($request, $runtime);
    }

    /**
     * Query the list of bindings between datasets and Object Storage Service (OSS) buckets.
     *
     * @remarks
     * *Before you use this operation, make sure that you are familiar with the billing method and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     *
     * @param request - ListBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBindingsResponse
     *
     * @param ListBindingsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBindingsResponse
     */
    public function listBindingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBindings',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of bindings between datasets and Object Storage Service (OSS) buckets.
     *
     * @remarks
     * *Before you use this operation, make sure that you are familiar with the billing method and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     *
     * @param request - ListBindingsRequest
     *
     * @returns ListBindingsResponse
     *
     * @param ListBindingsRequest $request
     *
     * @return ListBindingsResponse
     */
    public function listBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindingsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of datasets. You can query the list by dataset prefix.
     *
     * @param request - ListDatasetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatasetsResponse
     *
     * @param ListDatasetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDatasetsResponse
     */
    public function listDatasetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatasets',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDatasetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of datasets. You can query the list by dataset prefix.
     *
     * @param request - ListDatasetsRequest
     *
     * @returns ListDatasetsResponse
     *
     * @param ListDatasetsRequest $request
     *
     * @return ListDatasetsResponse
     */
    public function listDatasets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasetsWithOptions($request, $runtime);
    }

    /**
     * Queries information about all projects, including basic information and statistics information related to datasets and files.
     *
     * @remarks
     * Paging is supported for viewing returned data. When performing a paged query for the first page, set only MaxResults to limit the number of returned entries. The NextToken value in the response serves as the credential for querying subsequent pages. When querying subsequent pages, set the NextToken parameter to the NextToken value obtained from the previous response as the query credential, and set MaxResults to limit the number of returned entries.
     *
     * @param tmpReq - ListProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjects',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about all projects, including basic information and statistics information related to datasets and files.
     *
     * @remarks
     * Paging is supported for viewing returned data. When performing a paged query for the first page, set only MaxResults to limit the number of returned entries. The NextToken value in the response serves as the credential for querying subsequent pages. When querying subsequent pages, set the NextToken parameter to the NextToken value obtained from the previous response as the query credential, and set MaxResults to limit the number of returned entries.
     *
     * @param request - ListProjectsRequest
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * Get the list of regions.
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the list of regions.
     *
     * @param request - ListRegionsRequest
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * Lists tasks based on specific conditions, such as by time range and by tag.
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).
     *
     * @param tmpReq - ListTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->endTimeRange) {
            $request->endTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->endTimeRange, 'EndTimeRange', 'json');
        }

        if (null !== $tmpReq->startTimeRange) {
            $request->startTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->startTimeRange, 'StartTimeRange', 'json');
        }

        if (null !== $tmpReq->taskTypes) {
            $request->taskTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskTypes, 'TaskTypes', 'json');
        }

        $query = [];
        if (null !== $request->endTimeRangeShrink) {
            @$query['EndTimeRange'] = $request->endTimeRangeShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->requestDefinition) {
            @$query['RequestDefinition'] = $request->requestDefinition;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->startTimeRangeShrink) {
            @$query['StartTimeRange'] = $request->startTimeRangeShrink;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagSelector) {
            @$query['TagSelector'] = $request->tagSelector;
        }

        if (null !== $request->taskTypesShrink) {
            @$query['TaskTypes'] = $request->taskTypesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists tasks based on specific conditions, such as by time range and by tag.
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * Queries triggers by tag or status.
     *
     * @param request - ListTriggersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTriggersResponse
     *
     * @param ListTriggersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListTriggersResponse
     */
    public function listTriggersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->tagSelector) {
            @$query['TagSelector'] = $request->tagSelector;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTriggers',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTriggersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries triggers by tag or status.
     *
     * @param request - ListTriggersRequest
     *
     * @returns ListTriggersResponse
     *
     * @param ListTriggersRequest $request
     *
     * @return ListTriggersResponse
     */
    public function listTriggers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTriggersWithOptions($request, $runtime);
    }

    /**
     * Queries face groups based on given conditions.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that a face clustering task is created to group all faces in a dataset. For information about how to create a face clustering task, see [CreateFigureClusteringTask](~~CreateFigureClusteringTask~~). For information about how to create a dataset, see [CreateDataset](~~CreateDataset~~).
     *
     * @param tmpReq - QueryFigureClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFigureClustersResponse
     *
     * @param QueryFigureClustersRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return QueryFigureClustersResponse
     */
    public function queryFigureClustersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryFigureClustersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->createTimeRange) {
            $request->createTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->createTimeRange, 'CreateTimeRange', 'json');
        }

        if (null !== $tmpReq->updateTimeRange) {
            $request->updateTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateTimeRange, 'UpdateTimeRange', 'json');
        }

        $query = [];
        if (null !== $request->createTimeRangeShrink) {
            @$query['CreateTimeRange'] = $request->createTimeRangeShrink;
        }

        if (null !== $request->customLabels) {
            @$query['CustomLabels'] = $request->customLabels;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->updateTimeRangeShrink) {
            @$query['UpdateTimeRange'] = $request->updateTimeRangeShrink;
        }

        if (null !== $request->withTotalCount) {
            @$query['WithTotalCount'] = $request->withTotalCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFigureClusters',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFigureClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries face groups based on given conditions.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that a face clustering task is created to group all faces in a dataset. For information about how to create a face clustering task, see [CreateFigureClusteringTask](~~CreateFigureClusteringTask~~). For information about how to create a dataset, see [CreateDataset](~~CreateDataset~~).
     *
     * @param request - QueryFigureClustersRequest
     *
     * @returns QueryFigureClustersResponse
     *
     * @param QueryFigureClustersRequest $request
     *
     * @return QueryFigureClustersResponse
     */
    public function queryFigureClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFigureClustersWithOptions($request, $runtime);
    }

    /**
     * Queries a list of spatiotemporal clusters based on the specified conditions.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   Before you call this operation, make sure that you have called the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to create spatiotemporal clusters in the project.
     *
     * @param tmpReq - QueryLocationDateClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLocationDateClustersResponse
     *
     * @param QueryLocationDateClustersRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryLocationDateClustersResponse
     */
    public function queryLocationDateClustersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryLocationDateClustersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->address) {
            $request->addressShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->address, 'Address', 'json');
        }

        if (null !== $tmpReq->createTimeRange) {
            $request->createTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->createTimeRange, 'CreateTimeRange', 'json');
        }

        if (null !== $tmpReq->locationDateClusterEndTimeRange) {
            $request->locationDateClusterEndTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->locationDateClusterEndTimeRange, 'LocationDateClusterEndTimeRange', 'json');
        }

        if (null !== $tmpReq->locationDateClusterLevels) {
            $request->locationDateClusterLevelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->locationDateClusterLevels, 'LocationDateClusterLevels', 'json');
        }

        if (null !== $tmpReq->locationDateClusterStartTimeRange) {
            $request->locationDateClusterStartTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->locationDateClusterStartTimeRange, 'LocationDateClusterStartTimeRange', 'json');
        }

        if (null !== $tmpReq->updateTimeRange) {
            $request->updateTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateTimeRange, 'UpdateTimeRange', 'json');
        }

        $query = [];
        if (null !== $request->addressShrink) {
            @$query['Address'] = $request->addressShrink;
        }

        if (null !== $request->createTimeRangeShrink) {
            @$query['CreateTimeRange'] = $request->createTimeRangeShrink;
        }

        if (null !== $request->customLabels) {
            @$query['CustomLabels'] = $request->customLabels;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->locationDateClusterEndTimeRangeShrink) {
            @$query['LocationDateClusterEndTimeRange'] = $request->locationDateClusterEndTimeRangeShrink;
        }

        if (null !== $request->locationDateClusterLevelsShrink) {
            @$query['LocationDateClusterLevels'] = $request->locationDateClusterLevelsShrink;
        }

        if (null !== $request->locationDateClusterStartTimeRangeShrink) {
            @$query['LocationDateClusterStartTimeRange'] = $request->locationDateClusterStartTimeRangeShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->objectId) {
            @$query['ObjectId'] = $request->objectId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->updateTimeRangeShrink) {
            @$query['UpdateTimeRange'] = $request->updateTimeRangeShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryLocationDateClusters',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryLocationDateClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of spatiotemporal clusters based on the specified conditions.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   Before you call this operation, make sure that you have called the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to create spatiotemporal clusters in the project.
     *
     * @param request - QueryLocationDateClustersRequest
     *
     * @returns QueryLocationDateClustersResponse
     *
     * @param QueryLocationDateClustersRequest $request
     *
     * @return QueryLocationDateClustersResponse
     */
    public function queryLocationDateClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLocationDateClustersWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the list of similar image clusters.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, you must call the [CreateSimilarImageClusteringTask](https://help.aliyun.com/document_detail/611302.html) operation to cluster similar images in the dataset.
     *
     * @param request - QuerySimilarImageClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySimilarImageClustersResponse
     *
     * @param QuerySimilarImageClustersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySimilarImageClustersResponse
     */
    public function querySimilarImageClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customLabels) {
            @$query['CustomLabels'] = $request->customLabels;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySimilarImageClusters',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySimilarImageClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the list of similar image clusters.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, you must call the [CreateSimilarImageClusteringTask](https://help.aliyun.com/document_detail/611302.html) operation to cluster similar images in the dataset.
     *
     * @param request - QuerySimilarImageClustersRequest
     *
     * @returns QuerySimilarImageClustersResponse
     *
     * @param QuerySimilarImageClustersRequest $request
     *
     * @return QuerySimilarImageClustersResponse
     */
    public function querySimilarImageClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySimilarImageClustersWithOptions($request, $runtime);
    }

    /**
     * Queries stories based on the specified conditions.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *
     * @param tmpReq - QueryStoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryStoriesResponse
     *
     * @param QueryStoriesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return QueryStoriesResponse
     */
    public function queryStoriesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryStoriesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->createTimeRange) {
            $request->createTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->createTimeRange, 'CreateTimeRange', 'json');
        }

        if (null !== $tmpReq->figureClusterIds) {
            $request->figureClusterIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->figureClusterIds, 'FigureClusterIds', 'json');
        }

        if (null !== $tmpReq->storyEndTimeRange) {
            $request->storyEndTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storyEndTimeRange, 'StoryEndTimeRange', 'json');
        }

        if (null !== $tmpReq->storyStartTimeRange) {
            $request->storyStartTimeRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storyStartTimeRange, 'StoryStartTimeRange', 'json');
        }

        $query = [];
        if (null !== $request->createTimeRangeShrink) {
            @$query['CreateTimeRange'] = $request->createTimeRangeShrink;
        }

        if (null !== $request->customLabels) {
            @$query['CustomLabels'] = $request->customLabels;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->figureClusterIdsShrink) {
            @$query['FigureClusterIds'] = $request->figureClusterIdsShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->objectId) {
            @$query['ObjectId'] = $request->objectId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->storyEndTimeRangeShrink) {
            @$query['StoryEndTimeRange'] = $request->storyEndTimeRangeShrink;
        }

        if (null !== $request->storyName) {
            @$query['StoryName'] = $request->storyName;
        }

        if (null !== $request->storyStartTimeRangeShrink) {
            @$query['StoryStartTimeRange'] = $request->storyStartTimeRangeShrink;
        }

        if (null !== $request->storySubType) {
            @$query['StorySubType'] = $request->storySubType;
        }

        if (null !== $request->storyType) {
            @$query['StoryType'] = $request->storyType;
        }

        if (null !== $request->withEmptyStories) {
            @$query['WithEmptyStories'] = $request->withEmptyStories;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryStories',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryStoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries stories based on the specified conditions.
     *
     * @remarks
     * - Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).\\*\\*\\*\\*
     * - Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * - Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *
     * @param request - QueryStoriesRequest
     *
     * @returns QueryStoriesResponse
     *
     * @param QueryStoriesRequest $request
     *
     * @return QueryStoriesResponse
     */
    public function queryStories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStoriesWithOptions($request, $runtime);
    }

    /**
     * Refreshes a Weboffice access token. A Weboffice access token is valid for 30 minutes. After it expires, you can no longer access Weboffice. To continue accessing Weboffice, call this operation to refresh the Weboffice access token and obtain a new token that is also valid for 30 minutes.
     *
     * @remarks
     * *Make sure that you are familiar with the billing method and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM) before you invoke this operation.**
     * - For billing details, refer to [WebOffice billing](https://help.aliyun.com/document_detail/2639703.html).
     * - The access token expires in 30 minutes. Open the preview before the access token expires. After the token expires, previewing is no longer available.
     * - The refresh token expires in 1 day. Invoke the refresh operation before the refresh token expires. After the token expires, it becomes invalid.
     * - The returned expiration time is in UTC, which is 8 hours behind UTC+8.
     * > The access token is used for actual preview session access. The refresh token simplifies the parameter settings required for refreshing tokens. You can use the refresh token to directly obtain a new token with the previously configured settings.
     * >
     *
     * @param tmpReq - RefreshWebofficeTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshWebofficeTokenResponse
     *
     * @param RefreshWebofficeTokenRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return RefreshWebofficeTokenResponse
     */
    public function refreshWebofficeTokenWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RefreshWebofficeTokenShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->accessToken) {
            @$query['AccessToken'] = $request->accessToken;
        }

        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->refreshToken) {
            @$query['RefreshToken'] = $request->refreshToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshWebofficeToken',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshWebofficeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes a Weboffice access token. A Weboffice access token is valid for 30 minutes. After it expires, you can no longer access Weboffice. To continue accessing Weboffice, call this operation to refresh the Weboffice access token and obtain a new token that is also valid for 30 minutes.
     *
     * @remarks
     * *Make sure that you are familiar with the billing method and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM) before you invoke this operation.**
     * - For billing details, refer to [WebOffice billing](https://help.aliyun.com/document_detail/2639703.html).
     * - The access token expires in 30 minutes. Open the preview before the access token expires. After the token expires, previewing is no longer available.
     * - The refresh token expires in 1 day. Invoke the refresh operation before the refresh token expires. After the token expires, it becomes invalid.
     * - The returned expiration time is in UTC, which is 8 hours behind UTC+8.
     * > The access token is used for actual preview session access. The refresh token simplifies the parameter settings required for refreshing tokens. You can use the refresh token to directly obtain a new token with the previously configured settings.
     * >
     *
     * @param request - RefreshWebofficeTokenRequest
     *
     * @returns RefreshWebofficeTokenResponse
     *
     * @param RefreshWebofficeTokenRequest $request
     *
     * @return RefreshWebofficeTokenResponse
     */
    public function refreshWebofficeToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshWebofficeTokenWithOptions($request, $runtime);
    }

    /**
     * Deletes files from a story.
     *
     * @param tmpReq - RemoveStoryFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveStoryFilesResponse
     *
     * @param RemoveStoryFilesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveStoryFilesResponse
     */
    public function removeStoryFilesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveStoryFilesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->files) {
            $request->filesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }

        $body = [];
        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->filesShrink) {
            @$body['Files'] = $request->filesShrink;
        }

        if (null !== $request->objectId) {
            @$body['ObjectId'] = $request->objectId;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveStoryFiles',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveStoryFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes files from a story.
     *
     * @param request - RemoveStoryFilesRequest
     *
     * @returns RemoveStoryFilesResponse
     *
     * @param RemoveStoryFilesRequest $request
     *
     * @return RemoveStoryFilesResponse
     */
    public function removeStoryFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeStoryFilesWithOptions($request, $runtime);
    }

    /**
     * Resumes a batch processing task that is in the Suspended or Failed state.
     *
     * @remarks
     * You can resume a batch processing task only when the task is in the Suspended or Failed state. A batch processing task continues to provide services after you resume the task.
     *
     * @param request - ResumeBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeBatchResponse
     *
     * @param ResumeBatchRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResumeBatchResponse
     */
    public function resumeBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResumeBatch',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a batch processing task that is in the Suspended or Failed state.
     *
     * @remarks
     * You can resume a batch processing task only when the task is in the Suspended or Failed state. A batch processing task continues to provide services after you resume the task.
     *
     * @param request - ResumeBatchRequest
     *
     * @returns ResumeBatchResponse
     *
     * @param ResumeBatchRequest $request
     *
     * @return ResumeBatchResponse
     */
    public function resumeBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeBatchWithOptions($request, $runtime);
    }

    /**
     * Resumes a trigger that is in the Suspended or Failed state.
     *
     * @remarks
     * You can resume only a trigger that is in the Suspended or Failed state. After you resume a trigger, the trigger continues to provide services as expected.
     *
     * @param request - ResumeTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeTriggerResponse
     *
     * @param ResumeTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResumeTriggerResponse
     */
    public function resumeTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResumeTrigger',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a trigger that is in the Suspended or Failed state.
     *
     * @remarks
     * You can resume only a trigger that is in the Suspended or Failed state. After you resume a trigger, the trigger continues to provide services as expected.
     *
     * @param request - ResumeTriggerRequest
     *
     * @returns ResumeTriggerResponse
     *
     * @param ResumeTriggerRequest $request
     *
     * @return ResumeTriggerResponse
     */
    public function resumeTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeTriggerWithOptions($request, $runtime);
    }

    /**
     * Queries face clusters that contain a specific face in an image. Each face cluster contains information such as bounding boxes and similarity.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have created a face clustering task by calling the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     *
     * @param tmpReq - SearchImageFigureClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchImageFigureClusterResponse
     *
     * @param SearchImageFigureClusterRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return SearchImageFigureClusterResponse
     */
    public function searchImageFigureClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchImageFigureClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->credentialConfig) {
            $request->credentialConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }

        $query = [];
        if (null !== $request->credentialConfigShrink) {
            @$query['CredentialConfig'] = $request->credentialConfigShrink;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchImageFigureCluster',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchImageFigureClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries face clusters that contain a specific face in an image. Each face cluster contains information such as bounding boxes and similarity.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have created a face clustering task by calling the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     *
     * @param request - SearchImageFigureClusterRequest
     *
     * @returns SearchImageFigureClusterResponse
     *
     * @param SearchImageFigureClusterRequest $request
     *
     * @return SearchImageFigureClusterResponse
     */
    public function searchImageFigureCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageFigureClusterWithOptions($request, $runtime);
    }

    /**
     * Queries metadata in a dataset by inputting natural language.
     *
     * @remarks
     * ### 注意事项
     * - **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](https://help.aliyun.com/document_detail/477042.html)**。该接口每次请求，会产生语义理解费用和查询费用两种计费项各一次。
     * - 调用该接口前，请确保您已通过绑定方式（ [CreateBinding](https://help.aliyun.com/document_detail/478202.html) ）或者主动索引（ [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) 或者 [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) ）方式将文件索引到数据集（Dataset）中。
     * - 返回结果仅为示例，根据[工作流模板配置](https://help.aliyun.com/document_detail/466304.html)不同，获取到的文件元数据信息的类别和包含的内容均有可能与示例不同。如果有疑问，请加入钉钉群进行反馈，钉钉群号请参见[联系我们](https://help.aliyun.com/document_detail/84454.html)。
     * ### 使用限制
     * - 每次查询最多返回 100 个文件信息。
     * - 不支持翻页查询。
     * - 自然语言理解不保证完全准确。
     * - 该功能在美国（硅谷），美国（弗吉尼亚）地域下不支持。
     * ### 使用方式
     * 使用自然语言关键词对数据集内的文件进行搜索查询。目前支持理解的关键信息包括标签（Labels.LabelName）、时间（ProduceTime）和地点（Address.AddressLine）等。例如，以`2023 年杭州的风景`为条件进行查询，会被智能拆分为如下三个条件，并查找出同时满足这些条件的文件：
     * - ProduceTime：2023 年 1 月 1 日零点起到 2023 年 12 月 31 日结束止
     * - Address.AddressLine：包含`杭州`关键词
     * - Labels.LabelName：包含`风景`标签
     * 配合[工作流模板配置](https://help.aliyun.com/document_detail/466304.html)，当模板中包含`ImageEmbeddingExtraction`算子时，该搜索请求会提供基于图片内容的搜索，即您输入的`Query`内容会同时被理解为图片内包含的内容，从而实现对图片的智能检索。
     *
     * @param tmpReq - SemanticQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SemanticQueryResponse
     *
     * @param SemanticQueryRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return SemanticQueryResponse
     */
    public function semanticQueryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SemanticQueryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->mediaTypes) {
            $request->mediaTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mediaTypes, 'MediaTypes', 'json');
        }

        if (null !== $tmpReq->withFields) {
            $request->withFieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->mediaTypesShrink) {
            @$query['MediaTypes'] = $request->mediaTypesShrink;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sourceURI) {
            @$query['SourceURI'] = $request->sourceURI;
        }

        if (null !== $request->withFieldsShrink) {
            @$query['WithFields'] = $request->withFieldsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SemanticQuery',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SemanticQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries metadata in a dataset by inputting natural language.
     *
     * @remarks
     * ### 注意事项
     * - **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](https://help.aliyun.com/document_detail/477042.html)**。该接口每次请求，会产生语义理解费用和查询费用两种计费项各一次。
     * - 调用该接口前，请确保您已通过绑定方式（ [CreateBinding](https://help.aliyun.com/document_detail/478202.html) ）或者主动索引（ [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) 或者 [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) ）方式将文件索引到数据集（Dataset）中。
     * - 返回结果仅为示例，根据[工作流模板配置](https://help.aliyun.com/document_detail/466304.html)不同，获取到的文件元数据信息的类别和包含的内容均有可能与示例不同。如果有疑问，请加入钉钉群进行反馈，钉钉群号请参见[联系我们](https://help.aliyun.com/document_detail/84454.html)。
     * ### 使用限制
     * - 每次查询最多返回 100 个文件信息。
     * - 不支持翻页查询。
     * - 自然语言理解不保证完全准确。
     * - 该功能在美国（硅谷），美国（弗吉尼亚）地域下不支持。
     * ### 使用方式
     * 使用自然语言关键词对数据集内的文件进行搜索查询。目前支持理解的关键信息包括标签（Labels.LabelName）、时间（ProduceTime）和地点（Address.AddressLine）等。例如，以`2023 年杭州的风景`为条件进行查询，会被智能拆分为如下三个条件，并查找出同时满足这些条件的文件：
     * - ProduceTime：2023 年 1 月 1 日零点起到 2023 年 12 月 31 日结束止
     * - Address.AddressLine：包含`杭州`关键词
     * - Labels.LabelName：包含`风景`标签
     * 配合[工作流模板配置](https://help.aliyun.com/document_detail/466304.html)，当模板中包含`ImageEmbeddingExtraction`算子时，该搜索请求会提供基于图片内容的搜索，即您输入的`Query`内容会同时被理解为图片内包含的内容，从而实现对图片的智能检索。
     *
     * @param request - SemanticQueryRequest
     *
     * @returns SemanticQueryResponse
     *
     * @param SemanticQueryRequest $request
     *
     * @return SemanticQueryResponse
     */
    public function semanticQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->semanticQueryWithOptions($request, $runtime);
    }

    /**
     * Queries files in a dataset by performing a simple query operation. The operation supports logical expressions.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     * **Limits**
     * *   Each query returns information about up to 100 files.
     * *   Each query returns up to 2,000 aggregations.
     * *   A subquery supports up to 100 conditions.
     * *   A subquery can have a maximum nesting depth of 5 levels.
     * **Example query conditions**
     * *   Retrieve JPEG images larger than 1,000 pixels:
     * <!---->
     *     {
     *       "SubQueries":[
     *         {
     *           "Field":"ContentType",
     *           "Value": "image/jpeg",
     *           "Operation":"eq"
     *         },
     *         {
     *           "Field":"ImageWidth",
     *           "Value":"1000",
     *           "Operation":"gt"
     *         }
     *       ],
     *       "Operation":"and"
     *     }
     * *   Search `oss://examplebucket/path/` for objects that have the `TV` or `Stereo` label and are larger than 10 MB in size:
     * >  This query requires matching files to have the `TV` or `Stereo` label. The two labels are specified as separate objects in the `Labels` fields.
     * ```
     * {
     *   "SubQueries": [
     *     {
     *       "Field": "URI",
     *       "Value": "oss://examplebucket/path/",
     *       "Operation": "prefix"
     *     },
     *     {
     *       "Field": "Size",
     *       "Value": "1048576",
     *       "Operation": "gt"
     *     },
     *     {
     *       "SubQueries": [
     *         {
     *           "Field": "Labels.LabelName",
     *           "Value": "TV",
     *           "Operation": "eq"
     *         },
     *         {
     *           "Field": "Labels.LabelName",
     *           "Value": "Stereo",
     *           "Operation": "eq"
     *         }
     *       ],
     *       "Operation": "or"
     *     }
     *   ],
     *   "Operation": "and"
     * }
     *
     * ```
     * *   Exclude images that contain a face of a male over the age of 36:
     * >  In this example query, an image will be excluded from the query results if it contains a face of a male over the age of 36. This query is different from excluding an image that contains a male face or a face of a person over the age of 36. In this query, you need to use the `nested` operator to specify that the conditions are met on the same element.
     *     {
     *     	"Operation": "not",
     *     	"SubQueries": [{
     *     		"Operation": "nested",
     *     		"SubQueries": [{
     *     			"Operation": "and",
     *     			"SubQueries": [{
     *     				"Field": "Figures.Age",
     *     				"Operation": "gt",
     *     				"Value": "36"
     *     			}, {
     *     				"Field": "Figures.Gender",
     *     				"Operation": "eq",
     *     				"Value": "male"
     *     			}]
     *     		}]
     *     	}]
     *     }
     * *   Query JPEG images that have both custom labels and system labels:
     * <!---->
     *     {
     *       "SubQueries":[
     *         {
     *           "Field":"ContentType",
     *           "Value": "image/jpeg",
     *           "Operation":"eq"
     *         },
     *         {
     *           "Field":"CustomLabels.test",
     *           "Operation":"exist"
     *         },
     *         {
     *           "Field":"Labels.LabelName",
     *           "Operation":"exist"
     *         }
     *       ],
     *       "Operation":"and"
     *     }
     * You can also perform aggregate operations to collect and analyze different data based on the specified conditions. For example, you can calculate the sum, count, average value, or maximum value of all files that meet the query conditions. You can also calculate the size distribution of images that meet the query conditions.
     *
     * @param tmpReq - SimpleQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SimpleQueryResponse
     *
     * @param SimpleQueryRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SimpleQueryResponse
     */
    public function simpleQueryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SimpleQueryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aggregations) {
            $request->aggregationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aggregations, 'Aggregations', 'json');
        }

        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }

        if (null !== $tmpReq->withFields) {
            $request->withFieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }

        $query = [];
        if (null !== $request->aggregationsShrink) {
            @$query['Aggregations'] = $request->aggregationsShrink;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->queryShrink) {
            @$query['Query'] = $request->queryShrink;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->withFieldsShrink) {
            @$query['WithFields'] = $request->withFieldsShrink;
        }

        if (null !== $request->withoutTotalHits) {
            @$query['WithoutTotalHits'] = $request->withoutTotalHits;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SimpleQuery',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SimpleQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries files in a dataset by performing a simple query operation. The operation supports logical expressions.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     * **Limits**
     * *   Each query returns information about up to 100 files.
     * *   Each query returns up to 2,000 aggregations.
     * *   A subquery supports up to 100 conditions.
     * *   A subquery can have a maximum nesting depth of 5 levels.
     * **Example query conditions**
     * *   Retrieve JPEG images larger than 1,000 pixels:
     * <!---->
     *     {
     *       "SubQueries":[
     *         {
     *           "Field":"ContentType",
     *           "Value": "image/jpeg",
     *           "Operation":"eq"
     *         },
     *         {
     *           "Field":"ImageWidth",
     *           "Value":"1000",
     *           "Operation":"gt"
     *         }
     *       ],
     *       "Operation":"and"
     *     }
     * *   Search `oss://examplebucket/path/` for objects that have the `TV` or `Stereo` label and are larger than 10 MB in size:
     * >  This query requires matching files to have the `TV` or `Stereo` label. The two labels are specified as separate objects in the `Labels` fields.
     * ```
     * {
     *   "SubQueries": [
     *     {
     *       "Field": "URI",
     *       "Value": "oss://examplebucket/path/",
     *       "Operation": "prefix"
     *     },
     *     {
     *       "Field": "Size",
     *       "Value": "1048576",
     *       "Operation": "gt"
     *     },
     *     {
     *       "SubQueries": [
     *         {
     *           "Field": "Labels.LabelName",
     *           "Value": "TV",
     *           "Operation": "eq"
     *         },
     *         {
     *           "Field": "Labels.LabelName",
     *           "Value": "Stereo",
     *           "Operation": "eq"
     *         }
     *       ],
     *       "Operation": "or"
     *     }
     *   ],
     *   "Operation": "and"
     * }
     *
     * ```
     * *   Exclude images that contain a face of a male over the age of 36:
     * >  In this example query, an image will be excluded from the query results if it contains a face of a male over the age of 36. This query is different from excluding an image that contains a male face or a face of a person over the age of 36. In this query, you need to use the `nested` operator to specify that the conditions are met on the same element.
     *     {
     *     	"Operation": "not",
     *     	"SubQueries": [{
     *     		"Operation": "nested",
     *     		"SubQueries": [{
     *     			"Operation": "and",
     *     			"SubQueries": [{
     *     				"Field": "Figures.Age",
     *     				"Operation": "gt",
     *     				"Value": "36"
     *     			}, {
     *     				"Field": "Figures.Gender",
     *     				"Operation": "eq",
     *     				"Value": "male"
     *     			}]
     *     		}]
     *     	}]
     *     }
     * *   Query JPEG images that have both custom labels and system labels:
     * <!---->
     *     {
     *       "SubQueries":[
     *         {
     *           "Field":"ContentType",
     *           "Value": "image/jpeg",
     *           "Operation":"eq"
     *         },
     *         {
     *           "Field":"CustomLabels.test",
     *           "Operation":"exist"
     *         },
     *         {
     *           "Field":"Labels.LabelName",
     *           "Operation":"exist"
     *         }
     *       ],
     *       "Operation":"and"
     *     }
     * You can also perform aggregate operations to collect and analyze different data based on the specified conditions. For example, you can calculate the sum, count, average value, or maximum value of all files that meet the query conditions. You can also calculate the size distribution of images that meet the query conditions.
     *
     * @param request - SimpleQueryRequest
     *
     * @returns SimpleQueryResponse
     *
     * @param SimpleQueryRequest $request
     *
     * @return SimpleQueryResponse
     */
    public function simpleQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->simpleQueryWithOptions($request, $runtime);
    }

    /**
     * Suspends a batch processing task.
     *
     * @remarks
     * You can suspend a batch processing task that is in the Running state. You can call the [ResumeBatch](https://help.aliyun.com/document_detail/479914.html) operation to resume a batch processing task that is suspended.
     *
     * @param request - SuspendBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendBatchResponse
     *
     * @param SuspendBatchRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SuspendBatchResponse
     */
    public function suspendBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SuspendBatch',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Suspends a batch processing task.
     *
     * @remarks
     * You can suspend a batch processing task that is in the Running state. You can call the [ResumeBatch](https://help.aliyun.com/document_detail/479914.html) operation to resume a batch processing task that is suspended.
     *
     * @param request - SuspendBatchRequest
     *
     * @returns SuspendBatchResponse
     *
     * @param SuspendBatchRequest $request
     *
     * @return SuspendBatchResponse
     */
    public function suspendBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendBatchWithOptions($request, $runtime);
    }

    /**
     * Suspends a running trigger.
     *
     * @remarks
     * The operation can be used to suspend a trigger only in the Running state. If you want to resume a suspended trigger, call the [ResumeTrigger](https://help.aliyun.com/document_detail/479919.html) operation.
     *
     * @param request - SuspendTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendTriggerResponse
     *
     * @param SuspendTriggerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SuspendTriggerResponse
     */
    public function suspendTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SuspendTrigger',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Suspends a running trigger.
     *
     * @remarks
     * The operation can be used to suspend a trigger only in the Running state. If you want to resume a suspended trigger, call the [ResumeTrigger](https://help.aliyun.com/document_detail/479919.html) operation.
     *
     * @param request - SuspendTriggerRequest
     *
     * @returns SuspendTriggerResponse
     *
     * @param SuspendTriggerRequest $request
     *
     * @return SuspendTriggerResponse
     */
    public function suspendTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendTriggerWithOptions($request, $runtime);
    }

    /**
     * Updates information for a batch processing task, such as the data source configuration, data processing configuration, and tags.
     *
     * @remarks
     * - You can update a batch processing task only when its status is Ready or Failed. The update does not change the current status of the task.
     * - After the update, an incomplete batch processing task does not automatically resume. To resume the task, call the [ResumeBatch](https://help.aliyun.com/document_detail/479914.html) operation.
     *
     * @param tmpReq - UpdateBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBatchResponse
     *
     * @param UpdateBatchRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateBatchResponse
     */
    public function updateBatchWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateBatchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->actions) {
            $request->actionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->actions, 'Actions', 'json');
        }

        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $body = [];
        if (null !== $request->actionsShrink) {
            @$body['Actions'] = $request->actionsShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->inputShrink) {
            @$body['Input'] = $request->inputShrink;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBatch',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates information for a batch processing task, such as the data source configuration, data processing configuration, and tags.
     *
     * @remarks
     * - You can update a batch processing task only when its status is Ready or Failed. The update does not change the current status of the task.
     * - After the update, an incomplete batch processing task does not automatically resume. To resume the task, call the [ResumeBatch](https://help.aliyun.com/document_detail/479914.html) operation.
     *
     * @param request - UpdateBatchRequest
     *
     * @returns UpdateBatchResponse
     *
     * @param UpdateBatchRequest $request
     *
     * @return UpdateBatchResponse
     */
    public function updateBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBatchWithOptions($request, $runtime);
    }

    /**
     * Updates information for a dataset.
     *
     * @remarks
     * - **Before calling this operation, review** the billing model and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).
     * - The dataset must exist before you can update it.
     * - You only need to specify the parameters that you want to update. Unspecified parameters remain unchanged.
     * - After a dataset is updated, the changes may take up to 5 minutes to take effect.
     *
     * @param tmpReq - UpdateDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDatasetResponse
     *
     * @param UpdateDatasetRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDatasetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->datasetConfig) {
            $request->datasetConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->datasetConfig, 'DatasetConfig', 'json');
        }

        if (null !== $tmpReq->workflowParameters) {
            $request->workflowParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workflowParameters, 'WorkflowParameters', 'json');
        }

        $query = [];
        if (null !== $request->datasetConfigShrink) {
            @$query['DatasetConfig'] = $request->datasetConfigShrink;
        }

        if (null !== $request->datasetMaxBindCount) {
            @$query['DatasetMaxBindCount'] = $request->datasetMaxBindCount;
        }

        if (null !== $request->datasetMaxEntityCount) {
            @$query['DatasetMaxEntityCount'] = $request->datasetMaxEntityCount;
        }

        if (null !== $request->datasetMaxFileCount) {
            @$query['DatasetMaxFileCount'] = $request->datasetMaxFileCount;
        }

        if (null !== $request->datasetMaxRelationCount) {
            @$query['DatasetMaxRelationCount'] = $request->datasetMaxRelationCount;
        }

        if (null !== $request->datasetMaxTotalFileSize) {
            @$query['DatasetMaxTotalFileSize'] = $request->datasetMaxTotalFileSize;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->workflowParametersShrink) {
            @$query['WorkflowParameters'] = $request->workflowParametersShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDataset',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates information for a dataset.
     *
     * @remarks
     * - **Before calling this operation, review** the billing model and [pricing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).
     * - The dataset must exist before you can update it.
     * - You only need to specify the parameters that you want to update. Unspecified parameters remain unchanged.
     * - After a dataset is updated, the changes may take up to 5 minutes to take effect.
     *
     * @param request - UpdateDatasetRequest
     *
     * @returns UpdateDatasetResponse
     *
     * @param UpdateDatasetRequest $request
     *
     * @return UpdateDatasetResponse
     */
    public function updateDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDatasetWithOptions($request, $runtime);
    }

    /**
     * Updates information about a face cluster, such as the cluster name and labels.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     * *   The operation updates only the cover image, cluster name, and tags.
     * *   After the operation is successful, you can call the [GetFigureCluster](https://help.aliyun.com/document_detail/478182.html) or [BatchGetFigureCluster](https://help.aliyun.com/document_detail/2248450.html) operation to query the updated cluster.
     *
     * @param tmpReq - UpdateFigureClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFigureClusterResponse
     *
     * @param UpdateFigureClusterRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateFigureClusterResponse
     */
    public function updateFigureClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateFigureClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->figureCluster) {
            $request->figureClusterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->figureCluster, 'FigureCluster', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->figureClusterShrink) {
            @$query['FigureCluster'] = $request->figureClusterShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFigureCluster',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFigureClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates information about a face cluster, such as the cluster name and labels.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     * *   The operation updates only the cover image, cluster name, and tags.
     * *   After the operation is successful, you can call the [GetFigureCluster](https://help.aliyun.com/document_detail/478182.html) or [BatchGetFigureCluster](https://help.aliyun.com/document_detail/2248450.html) operation to query the updated cluster.
     *
     * @param request - UpdateFigureClusterRequest
     *
     * @returns UpdateFigureClusterResponse
     *
     * @param UpdateFigureClusterRequest $request
     *
     * @return UpdateFigureClusterResponse
     */
    public function updateFigureCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFigureClusterWithOptions($request, $runtime);
    }

    /**
     * Updates the partial metadata of the indexed files in a dataset.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   You cannot call this operation to update all metadata. You can update only metadata specified by CustomLabels, CustomId, and Figures. For more information, see the "Request parameters" section of this topic.
     *
     * @param tmpReq - UpdateFileMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFileMetaResponse
     *
     * @param UpdateFileMetaRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFileMetaResponse
     */
    public function updateFileMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateFileMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->file) {
            $request->fileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->file, 'File', 'json');
        }

        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->fileShrink) {
            @$query['File'] = $request->fileShrink;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFileMeta',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the partial metadata of the indexed files in a dataset.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   You cannot call this operation to update all metadata. You can update only metadata specified by CustomLabels, CustomId, and Figures. For more information, see the "Request parameters" section of this topic.
     *
     * @param request - UpdateFileMetaRequest
     *
     * @returns UpdateFileMetaResponse
     *
     * @param UpdateFileMetaRequest $request
     *
     * @return UpdateFileMetaResponse
     */
    public function updateFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFileMetaWithOptions($request, $runtime);
    }

    /**
     * Updates a spatiotemporal cluster.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to create spatiotemporal clusters in the project.
     *
     * @param tmpReq - UpdateLocationDateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLocationDateClusterResponse
     *
     * @param UpdateLocationDateClusterRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateLocationDateClusterResponse
     */
    public function updateLocationDateClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLocationDateClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customLabels) {
            $request->customLabelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }

        $query = [];
        if (null !== $request->customId) {
            @$query['CustomId'] = $request->customId;
        }

        if (null !== $request->customLabelsShrink) {
            @$query['CustomLabels'] = $request->customLabelsShrink;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->objectId) {
            @$query['ObjectId'] = $request->objectId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLocationDateCluster',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLocationDateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a spatiotemporal cluster.
     *
     * @remarks
     *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to create spatiotemporal clusters in the project.
     *
     * @param request - UpdateLocationDateClusterRequest
     *
     * @returns UpdateLocationDateClusterResponse
     *
     * @param UpdateLocationDateClusterRequest $request
     *
     * @return UpdateLocationDateClusterResponse
     */
    public function updateLocationDateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLocationDateClusterWithOptions($request, $runtime);
    }

    /**
     * Updates the information of a created project.
     *
     * @remarks
     * - Before updating project information, make sure the project has been created. To create a project, refer to the request parameter descriptions.
     * - When updating project information, specify only the fields that you want to update. Fields that are not specified remain unchanged.
     * - Project updates do not take effect immediately. Wait up to 5 minutes for the updates to take effect.
     *
     * @param tmpReq - UpdateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->datasetConfig) {
            $request->datasetConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->datasetConfig, 'DatasetConfig', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->datasetConfigShrink) {
            @$query['DatasetConfig'] = $request->datasetConfigShrink;
        }

        if (null !== $request->datasetMaxBindCount) {
            @$query['DatasetMaxBindCount'] = $request->datasetMaxBindCount;
        }

        if (null !== $request->datasetMaxEntityCount) {
            @$query['DatasetMaxEntityCount'] = $request->datasetMaxEntityCount;
        }

        if (null !== $request->datasetMaxFileCount) {
            @$query['DatasetMaxFileCount'] = $request->datasetMaxFileCount;
        }

        if (null !== $request->datasetMaxRelationCount) {
            @$query['DatasetMaxRelationCount'] = $request->datasetMaxRelationCount;
        }

        if (null !== $request->datasetMaxTotalFileSize) {
            @$query['DatasetMaxTotalFileSize'] = $request->datasetMaxTotalFileSize;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->projectMaxDatasetCount) {
            @$query['ProjectMaxDatasetCount'] = $request->projectMaxDatasetCount;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->serviceRole) {
            @$query['ServiceRole'] = $request->serviceRole;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information of a created project.
     *
     * @remarks
     * - Before updating project information, make sure the project has been created. To create a project, refer to the request parameter descriptions.
     * - When updating project information, specify only the fields that you want to update. Fields that are not specified remain unchanged.
     * - Project updates do not take effect immediately. Wait up to 5 minutes for the updates to take effect.
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a story, such as the story name and cover image.
     *
     * @param tmpReq - UpdateStoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStoryResponse
     *
     * @param UpdateStoryRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateStoryResponse
     */
    public function updateStoryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateStoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cover) {
            $request->coverShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cover, 'Cover', 'json');
        }

        if (null !== $tmpReq->customLabels) {
            $request->customLabelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }

        $body = [];
        if (null !== $request->coverShrink) {
            @$body['Cover'] = $request->coverShrink;
        }

        if (null !== $request->customId) {
            @$body['CustomId'] = $request->customId;
        }

        if (null !== $request->customLabelsShrink) {
            @$body['CustomLabels'] = $request->customLabelsShrink;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->objectId) {
            @$body['ObjectId'] = $request->objectId;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->storyName) {
            @$body['StoryName'] = $request->storyName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateStory',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a story, such as the story name and cover image.
     *
     * @param request - UpdateStoryRequest
     *
     * @returns UpdateStoryResponse
     *
     * @param UpdateStoryRequest $request
     *
     * @return UpdateStoryResponse
     */
    public function updateStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStoryWithOptions($request, $runtime);
    }

    /**
     * Updates information about a trigger, such as the input data source, data processing settings, and tags.
     *
     * @remarks
     *   You can update only a trigger that is in the Ready or Failed state. The update operation does not change the trigger status.
     * *   After you update a trigger, the uncompleted tasks under the original trigger are no longer executed. You can call the [ResumeTrigger](https://help.aliyun.com/document_detail/479916.html) operation to resume the execution of the trigger.
     *
     * @param tmpReq - UpdateTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTriggerResponse
     *
     * @param UpdateTriggerRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateTriggerResponse
     */
    public function updateTriggerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTriggerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->actions) {
            $request->actionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->actions, 'Actions', 'json');
        }

        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $body = [];
        if (null !== $request->actionsShrink) {
            @$body['Actions'] = $request->actionsShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->inputShrink) {
            @$body['Input'] = $request->inputShrink;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTrigger',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates information about a trigger, such as the input data source, data processing settings, and tags.
     *
     * @remarks
     *   You can update only a trigger that is in the Ready or Failed state. The update operation does not change the trigger status.
     * *   After you update a trigger, the uncompleted tasks under the original trigger are no longer executed. You can call the [ResumeTrigger](https://help.aliyun.com/document_detail/479916.html) operation to resume the execution of the trigger.
     *
     * @param request - UpdateTriggerRequest
     *
     * @returns UpdateTriggerResponse
     *
     * @param UpdateTriggerRequest $request
     *
     * @return UpdateTriggerResponse
     */
    public function updateTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTriggerWithOptions($request, $runtime);
    }
}
