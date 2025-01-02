<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Imm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing-gov-1' => 'imm-vpc.cn-beijing-gov-1.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds mosaics, Gaussian blurs, or solid color shapes to blur one or more areas of an image for privacy protection and saves the output image to the specified path in Object Storage Service (OSS).
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * *   The operation accepts JPG and PNG images with a maximum side length of 30,000 pixels and a total of up to 250 million pixels.
     *  *
     * @param AddImageMosaicRequest $tmpReq  AddImageMosaicRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddImageMosaicResponse AddImageMosaicResponse
     */
    public function addImageMosaicWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddImageMosaicShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->targets)) {
            $request->targetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->targets, 'Targets', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->imageFormat)) {
            $query['ImageFormat'] = $request->imageFormat;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->quality)) {
            $query['Quality'] = $request->quality;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->targetURI)) {
            $query['TargetURI'] = $request->targetURI;
        }
        if (!Utils::isUnset($request->targetsShrink)) {
            $query['Targets'] = $request->targetsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddImageMosaic',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddImageMosaicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds mosaics, Gaussian blurs, or solid color shapes to blur one or more areas of an image for privacy protection and saves the output image to the specified path in Object Storage Service (OSS).
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * *   The operation accepts JPG and PNG images with a maximum side length of 30,000 pixels and a total of up to 250 million pixels.
     *  *
     * @param AddImageMosaicRequest $request AddImageMosaicRequest
     *
     * @return AddImageMosaicResponse AddImageMosaicResponse
     */
    public function addImageMosaic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageMosaicWithOptions($request, $runtime);
    }

    /**
     * @summary Adds objects to a story.
     *  *
     * @param AddStoryFilesRequest $tmpReq  AddStoryFilesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddStoryFilesResponse AddStoryFilesResponse
     */
    public function addStoryFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddStoryFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->files)) {
            $request->filesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->filesShrink)) {
            $body['Files'] = $request->filesShrink;
        }
        if (!Utils::isUnset($request->objectId)) {
            $body['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddStoryFiles',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddStoryFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds objects to a story.
     *  *
     * @param AddStoryFilesRequest $request AddStoryFilesRequest
     *
     * @return AddStoryFilesResponse AddStoryFilesResponse
     */
    public function addStoryFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addStoryFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Binds an Object Storage Service (OSS) bucket to the specified project. The binding enables you to use IMM features by using the x-oss-process parameter.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   To use data processing capabilities of IMM based on the x-oss-process parameter, you must bind an OSS bucket to an IMM project. For more information, see [x-oss-process](https://help.aliyun.com/document_detail/2391270.html).
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *  *
     * @param AttachOSSBucketRequest $request AttachOSSBucketRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachOSSBucketResponse AttachOSSBucketResponse
     */
    public function attachOSSBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->OSSBucket)) {
            $query['OSSBucket'] = $request->OSSBucket;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachOSSBucket',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachOSSBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds an Object Storage Service (OSS) bucket to the specified project. The binding enables you to use IMM features by using the x-oss-process parameter.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   To use data processing capabilities of IMM based on the x-oss-process parameter, you must bind an OSS bucket to an IMM project. For more information, see [x-oss-process](https://help.aliyun.com/document_detail/2391270.html).
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *  *
     * @param AttachOSSBucketRequest $request AttachOSSBucketRequest
     *
     * @return AttachOSSBucketResponse AttachOSSBucketResponse
     */
    public function attachOSSBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachOSSBucketWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the metadata of multiple files from a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   A successful deletion message is returned regardless of whether the metadata of the file exists in the dataset.
     * >
     * *   If you delete the metadata of a file from a dataset, the file stored in Object Storage Service (OSS) or Photo and Drive Service is **not** deleted. If you want to delete the file, use the operations provided by OSS or Photo and Drive Service.
     * *   Metadata deletion affects existing face groups and stories but does not affect existing spatiotemporal groups.
     *  *
     * @param BatchDeleteFileMetaRequest $tmpReq  BatchDeleteFileMetaRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteFileMetaResponse BatchDeleteFileMetaResponse
     */
    public function batchDeleteFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchDeleteFileMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->URIs)) {
            $request->URIsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->URIs, 'URIs', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->URIsShrink)) {
            $query['URIs'] = $request->URIsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteFileMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the metadata of multiple files from a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   A successful deletion message is returned regardless of whether the metadata of the file exists in the dataset.
     * >
     * *   If you delete the metadata of a file from a dataset, the file stored in Object Storage Service (OSS) or Photo and Drive Service is **not** deleted. If you want to delete the file, use the operations provided by OSS or Photo and Drive Service.
     * *   Metadata deletion affects existing face groups and stories but does not affect existing spatiotemporal groups.
     *  *
     * @param BatchDeleteFileMetaRequest $request BatchDeleteFileMetaRequest
     *
     * @return BatchDeleteFileMetaResponse BatchDeleteFileMetaResponse
     */
    public function batchDeleteFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteFileMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries face clusters.
     *  *
     * @param BatchGetFigureClusterRequest $tmpReq  BatchGetFigureClusterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetFigureClusterResponse BatchGetFigureClusterResponse
     */
    public function batchGetFigureClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchGetFigureClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->objectIds)) {
            $request->objectIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->objectIds, 'ObjectIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->objectIdsShrink)) {
            $query['ObjectIds'] = $request->objectIdsShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetFigureCluster',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetFigureClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries face clusters.
     *  *
     * @param BatchGetFigureClusterRequest $request BatchGetFigureClusterRequest
     *
     * @return BatchGetFigureClusterResponse BatchGetFigureClusterResponse
     */
    public function batchGetFigureCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetFigureClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries metadata of multiple objects or files in the specified dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, feel free to join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     *  *
     * @param BatchGetFileMetaRequest $tmpReq  BatchGetFileMetaRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetFileMetaResponse BatchGetFileMetaResponse
     */
    public function batchGetFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchGetFileMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->URIs)) {
            $request->URIsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->URIs, 'URIs', 'json');
        }
        if (!Utils::isUnset($tmpReq->withFields)) {
            $request->withFieldsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->URIsShrink)) {
            $query['URIs'] = $request->URIsShrink;
        }
        if (!Utils::isUnset($request->withFieldsShrink)) {
            $query['WithFields'] = $request->withFieldsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetFileMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries metadata of multiple objects or files in the specified dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, feel free to join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     *  *
     * @param BatchGetFileMetaRequest $request BatchGetFileMetaRequest
     *
     * @return BatchGetFileMetaResponse BatchGetFileMetaResponse
     */
    public function batchGetFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetFileMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Indexes metadata of multiple objects into the specified dataset. The process involves data processing operations such as label detection, face detection, and location detection. Metadata indexing helps meet diverse data retrieval requirements.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Data processing operations supported for metadata processing vary with workflow templates. For more information, see [Workflow templates and operators](https://help.aliyun.com/document_detail/466304.html).
     * *   Metadata indexing poses limits on the total number and size of objects. For more information about these limits, see [Limits](https://help.aliyun.com/document_detail/475569.html). For more information about how to create
     * *   Metadata indexing is available in specific regions. For information about regions that support metadata indexing, see the "Data management and indexing" section of the [Limits](https://help.aliyun.com/document_detail/475569.html) topic.
     *  *
     * @param BatchIndexFileMetaRequest $tmpReq  BatchIndexFileMetaRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchIndexFileMetaResponse BatchIndexFileMetaResponse
     */
    public function batchIndexFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchIndexFileMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->files)) {
            $request->filesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->filesShrink)) {
            $query['Files'] = $request->filesShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchIndexFileMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchIndexFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Indexes metadata of multiple objects into the specified dataset. The process involves data processing operations such as label detection, face detection, and location detection. Metadata indexing helps meet diverse data retrieval requirements.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Data processing operations supported for metadata processing vary with workflow templates. For more information, see [Workflow templates and operators](https://help.aliyun.com/document_detail/466304.html).
     * *   Metadata indexing poses limits on the total number and size of objects. For more information about these limits, see [Limits](https://help.aliyun.com/document_detail/475569.html). For more information about how to create
     * *   Metadata indexing is available in specific regions. For information about regions that support metadata indexing, see the "Data management and indexing" section of the [Limits](https://help.aliyun.com/document_detail/475569.html) topic.
     *  *
     * @param BatchIndexFileMetaRequest $request BatchIndexFileMetaRequest
     *
     * @return BatchIndexFileMetaResponse BatchIndexFileMetaResponse
     */
    public function batchIndexFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchIndexFileMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Updates some metadata items of files indexed into a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   You cannot call this operation to update all metadata. You can update only metadata fields such as CustomLabels, CustomId, and Figures. For more information, see the "Request parameters" section of this topic.
     *  *
     * @param BatchUpdateFileMetaRequest $tmpReq  BatchUpdateFileMetaRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUpdateFileMetaResponse BatchUpdateFileMetaResponse
     */
    public function batchUpdateFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchUpdateFileMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->files)) {
            $request->filesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->filesShrink)) {
            $query['Files'] = $request->filesShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateFileMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUpdateFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates some metadata items of files indexed into a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   You cannot call this operation to update all metadata. You can update only metadata fields such as CustomLabels, CustomId, and Figures. For more information, see the "Request parameters" section of this topic.
     *  *
     * @param BatchUpdateFileMetaRequest $request BatchUpdateFileMetaRequest
     *
     * @return BatchUpdateFileMetaResponse BatchUpdateFileMetaResponse
     */
    public function batchUpdateFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateFileMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Compares the similarity of the largest faces in two images. The largest face refers to the largest face frame in an image after face detection.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   For the input image, only the face with the largest face frame in the image is used for face comparison. The face frame detection result is consistent with the responses of the [DetectImageFaces](https://help.aliyun.com/document_detail/478213.html) operation.
     *  *
     * @param CompareImageFacesRequest $tmpReq  CompareImageFacesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CompareImageFacesResponse CompareImageFacesResponse
     */
    public function compareImageFacesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CompareImageFacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->source)) {
            $request->sourceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->source, 'Source', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceShrink)) {
            $query['Source'] = $request->sourceShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompareImageFaces',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompareImageFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Compares the similarity of the largest faces in two images. The largest face refers to the largest face frame in an image after face detection.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   For the input image, only the face with the largest face frame in the image is used for face comparison. The face frame detection result is consistent with the responses of the [DetectImageFaces](https://help.aliyun.com/document_detail/478213.html) operation.
     *  *
     * @param CompareImageFacesRequest $request CompareImageFacesRequest
     *
     * @return CompareImageFacesResponse CompareImageFacesResponse
     */
    public function compareImageFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareImageFacesWithOptions($request, $runtime);
    }

    /**
     * @summary AI 助手二期，问答API
     *  *
     * @param ContextualAnswerRequest $tmpReq  ContextualAnswerRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ContextualAnswerResponse ContextualAnswerResponse
     */
    public function contextualAnswerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ContextualAnswerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->files)) {
            $request->filesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }
        if (!Utils::isUnset($tmpReq->messages)) {
            $request->messagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->messages, 'Messages', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $body = [];
        if (!Utils::isUnset($request->filesShrink)) {
            $body['Files'] = $request->filesShrink;
        }
        if (!Utils::isUnset($request->messagesShrink)) {
            $body['Messages'] = $request->messagesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ContextualAnswer',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContextualAnswerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary AI 助手二期，问答API
     *  *
     * @param ContextualAnswerRequest $request ContextualAnswerRequest
     *
     * @return ContextualAnswerResponse ContextualAnswerResponse
     */
    public function contextualAnswer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contextualAnswerWithOptions($request, $runtime);
    }

    /**
     * @summary AI助手二期，检索API
     *  *
     * @param ContextualRetrievalRequest $tmpReq  ContextualRetrievalRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ContextualRetrievalResponse ContextualRetrievalResponse
     */
    public function contextualRetrievalWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ContextualRetrievalShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->messages)) {
            $request->messagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->messages, 'Messages', 'json');
        }
        if (!Utils::isUnset($tmpReq->smartClusterIds)) {
            $request->smartClusterIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->smartClusterIds, 'SmartClusterIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->recallOnly)) {
            $query['RecallOnly'] = $request->recallOnly;
        }
        $body = [];
        if (!Utils::isUnset($request->messagesShrink)) {
            $body['Messages'] = $request->messagesShrink;
        }
        if (!Utils::isUnset($request->smartClusterIdsShrink)) {
            $body['SmartClusterIds'] = $request->smartClusterIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ContextualRetrieval',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContextualRetrievalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary AI助手二期，检索API
     *  *
     * @param ContextualRetrievalRequest $request ContextualRetrievalRequest
     *
     * @return ContextualRetrievalResponse ContextualRetrievalResponse
     */
    public function contextualRetrieval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contextualRetrievalWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an archive file inspection task to preview the files in a package without decompressing the package.
     *  *
     * @description >  The operation is in public preview. For any inquires, join our DingTalk chat group (ID: 31690030817) and share your questions with us.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   The operation supports a package that contains up to 80,000 files.
     * *   The operation supports ZIP or RAR packages up to 200 GB in size, or 7z packages up to 50 GB in size.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateArchiveFileInspectionTaskRequest $tmpReq  CreateArchiveFileInspectionTaskRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateArchiveFileInspectionTaskResponse CreateArchiveFileInspectionTaskResponse
     */
    public function createArchiveFileInspectionTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateArchiveFileInspectionTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateArchiveFileInspectionTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateArchiveFileInspectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an archive file inspection task to preview the files in a package without decompressing the package.
     *  *
     * @description >  The operation is in public preview. For any inquires, join our DingTalk chat group (ID: 31690030817) and share your questions with us.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   The operation supports a package that contains up to 80,000 files.
     * *   The operation supports ZIP or RAR packages up to 200 GB in size, or 7z packages up to 50 GB in size.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateArchiveFileInspectionTaskRequest $request CreateArchiveFileInspectionTaskRequest
     *
     * @return CreateArchiveFileInspectionTaskResponse CreateArchiveFileInspectionTaskResponse
     */
    public function createArchiveFileInspectionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createArchiveFileInspectionTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a batch processing task to perform a data processing operation, such as transcoding or format conversion, on multiple existing files at a time.
     *  *
     * @description If you want to create a batch processing task to process data in [OSS](https://help.aliyun.com/document_detail/99372.html), make sure that you have bound the dataset to the OSS bucket where the data is stored. For more information about how to bind a dataset to a bucket, see [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html).
     *  *
     * @param CreateBatchRequest $tmpReq  CreateBatchRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBatchResponse CreateBatchResponse
     */
    public function createBatchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateBatchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actions)) {
            $request->actionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actions, 'Actions', 'json');
        }
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->actionsShrink)) {
            $body['Actions'] = $request->actionsShrink;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $body['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $body['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->serviceRole)) {
            $body['ServiceRole'] = $request->serviceRole;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBatch',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a batch processing task to perform a data processing operation, such as transcoding or format conversion, on multiple existing files at a time.
     *  *
     * @description If you want to create a batch processing task to process data in [OSS](https://help.aliyun.com/document_detail/99372.html), make sure that you have bound the dataset to the OSS bucket where the data is stored. For more information about how to bind a dataset to a bucket, see [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html).
     *  *
     * @param CreateBatchRequest $request CreateBatchRequest
     *
     * @return CreateBatchResponse CreateBatchResponse
     */
    public function createBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a binding relationship between a dataset and an Object Storage Service (OSS) bucket. This allows for the automatic synchronization of incremental and full data and indexing.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * Before you create a binding relationship, make sure that the project and the dataset that you want to use exist.
     * *   For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   For information about how to create a dataset, see [CreateDataset](https://help.aliyun.com/document_detail/478160.html).
     * >  The CreateBinding operation works by using the [workflow template](https://help.aliyun.com/document_detail/466304.html) that is specified when you created the project or dataset.
     * After you create a binding relationship between a dataset and an OSS bucket, IMM scans the existing objects in the bucket and extracts metadata based on the scanning result. Then, IMM creates an index from the extracted metadata. If new objects are added to the OSS bucket, IMM constantly tracks and scans the objects and updates the index. For objects whose index is created in this way, you can call the [SimpleQuery](https://help.aliyun.com/document_detail/478175.html) operation to query, manage, and collect statistics from the objects.
     *  *
     * @param CreateBindingRequest $request CreateBindingRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBindingResponse CreateBindingResponse
     */
    public function createBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->URI)) {
            $query['URI'] = $request->URI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBinding',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a binding relationship between a dataset and an Object Storage Service (OSS) bucket. This allows for the automatic synchronization of incremental and full data and indexing.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * Before you create a binding relationship, make sure that the project and the dataset that you want to use exist.
     * *   For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   For information about how to create a dataset, see [CreateDataset](https://help.aliyun.com/document_detail/478160.html).
     * >  The CreateBinding operation works by using the [workflow template](https://help.aliyun.com/document_detail/466304.html) that is specified when you created the project or dataset.
     * After you create a binding relationship between a dataset and an OSS bucket, IMM scans the existing objects in the bucket and extracts metadata based on the scanning result. Then, IMM creates an index from the extracted metadata. If new objects are added to the OSS bucket, IMM constantly tracks and scans the objects and updates the index. For objects whose index is created in this way, you can call the [SimpleQuery](https://help.aliyun.com/document_detail/478175.html) operation to query, manage, and collect statistics from the objects.
     *  *
     * @param CreateBindingRequest $request CreateBindingRequest
     *
     * @return CreateBindingResponse CreateBindingResponse
     */
    public function createBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBindingWithOptions($request, $runtime);
    }

    /**
     * @summary Compresses point cloud data (PCD) in Object Storage Service (OSS) to reduce the amount of data transferred over networks.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   This operation supports only Point Cloud Data (PCD) files.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications. >
     *  *
     * @param CreateCompressPointCloudTaskRequest $tmpReq  CreateCompressPointCloudTaskRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCompressPointCloudTaskResponse CreateCompressPointCloudTaskResponse
     */
    public function createCompressPointCloudTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCompressPointCloudTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->kdtreeOption)) {
            $request->kdtreeOptionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->kdtreeOption, 'KdtreeOption', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->octreeOption)) {
            $request->octreeOptionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->octreeOption, 'OctreeOption', 'json');
        }
        if (!Utils::isUnset($tmpReq->pointCloudFields)) {
            $request->pointCloudFieldsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->pointCloudFields, 'PointCloudFields', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->compressMethod)) {
            $query['CompressMethod'] = $request->compressMethod;
        }
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->kdtreeOptionShrink)) {
            $query['KdtreeOption'] = $request->kdtreeOptionShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->octreeOptionShrink)) {
            $query['OctreeOption'] = $request->octreeOptionShrink;
        }
        if (!Utils::isUnset($request->pointCloudFieldsShrink)) {
            $query['PointCloudFields'] = $request->pointCloudFieldsShrink;
        }
        if (!Utils::isUnset($request->pointCloudFileFormat)) {
            $query['PointCloudFileFormat'] = $request->pointCloudFileFormat;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->targetURI)) {
            $query['TargetURI'] = $request->targetURI;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCompressPointCloudTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCompressPointCloudTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Compresses point cloud data (PCD) in Object Storage Service (OSS) to reduce the amount of data transferred over networks.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   This operation supports only Point Cloud Data (PCD) files.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications. >
     *  *
     * @param CreateCompressPointCloudTaskRequest $request CreateCompressPointCloudTaskRequest
     *
     * @return CreateCompressPointCloudTaskResponse CreateCompressPointCloudTaskResponse
     */
    public function createCompressPointCloudTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCompressPointCloudTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a story based on the specified images and videos.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     *  *
     * @param CreateCustomizedStoryRequest $tmpReq  CreateCustomizedStoryRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomizedStoryResponse CreateCustomizedStoryResponse
     */
    public function createCustomizedStoryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCustomizedStoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cover)) {
            $request->coverShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cover, 'Cover', 'json');
        }
        if (!Utils::isUnset($tmpReq->customLabels)) {
            $request->customLabelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }
        if (!Utils::isUnset($tmpReq->files)) {
            $request->filesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->coverShrink)) {
            $body['Cover'] = $request->coverShrink;
        }
        if (!Utils::isUnset($request->customLabelsShrink)) {
            $body['CustomLabels'] = $request->customLabelsShrink;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->filesShrink)) {
            $body['Files'] = $request->filesShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->storyName)) {
            $body['StoryName'] = $request->storyName;
        }
        if (!Utils::isUnset($request->storySubType)) {
            $body['StorySubType'] = $request->storySubType;
        }
        if (!Utils::isUnset($request->storyType)) {
            $body['StoryType'] = $request->storyType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomizedStory',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomizedStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a story based on the specified images and videos.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     *  *
     * @param CreateCustomizedStoryRequest $request CreateCustomizedStoryRequest
     *
     * @return CreateCustomizedStoryResponse CreateCustomizedStoryResponse
     */
    public function createCustomizedStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomizedStoryWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   A dataset name must be unique within the same project.
     * *   A project has an upper limit on the number of datasets that can be created in the project. You can call the [GetProjcet](https://help.aliyun.com/document_detail/478155.html) operation to query the dataset limit of the project.
     * *   After creating a dataset, you can call the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) operation to index metadata. Metadata indexing enhances [data retrieval efficiency and statistics collection](https://help.aliyun.com/document_detail/478175.html), and enables intelligent data management.
     *  *
     * @param CreateDatasetRequest $request CreateDatasetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatasetResponse CreateDatasetResponse
     */
    public function createDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetMaxBindCount)) {
            $query['DatasetMaxBindCount'] = $request->datasetMaxBindCount;
        }
        if (!Utils::isUnset($request->datasetMaxEntityCount)) {
            $query['DatasetMaxEntityCount'] = $request->datasetMaxEntityCount;
        }
        if (!Utils::isUnset($request->datasetMaxFileCount)) {
            $query['DatasetMaxFileCount'] = $request->datasetMaxFileCount;
        }
        if (!Utils::isUnset($request->datasetMaxRelationCount)) {
            $query['DatasetMaxRelationCount'] = $request->datasetMaxRelationCount;
        }
        if (!Utils::isUnset($request->datasetMaxTotalFileSize)) {
            $query['DatasetMaxTotalFileSize'] = $request->datasetMaxTotalFileSize;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataset',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   A dataset name must be unique within the same project.
     * *   A project has an upper limit on the number of datasets that can be created in the project. You can call the [GetProjcet](https://help.aliyun.com/document_detail/478155.html) operation to query the dataset limit of the project.
     * *   After creating a dataset, you can call the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) operation to index metadata. Metadata indexing enhances [data retrieval efficiency and statistics collection](https://help.aliyun.com/document_detail/478175.html), and enables intelligent data management.
     *  *
     * @param CreateDatasetRequest $request CreateDatasetRequest
     *
     * @return CreateDatasetResponse CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary Decodes the blind watermark in an image.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of Intelligent Media Management (IMM).
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   Make sure that an IMM project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   The region and project specified in the request to decode a blind watermark must match those in the [EncodeBlindWatermark](https://help.aliyun.com/document_detail/2743655.html) request to encode the blind watermark.
     * *   A blind watermark can still be extracted even if attacks, such as compression, scaling, cropping, rotation, and color transformation, are performed on the image.
     * *   This operation is compatible with its earlier version DecodeBlindWatermark.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task. If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateDecodeBlindWatermarkTaskRequest $tmpReq  CreateDecodeBlindWatermarkTaskRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDecodeBlindWatermarkTaskResponse CreateDecodeBlindWatermarkTaskResponse
     */
    public function createDecodeBlindWatermarkTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDecodeBlindWatermarkTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->imageQuality)) {
            $query['ImageQuality'] = $request->imageQuality;
        }
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->originalImageURI)) {
            $query['OriginalImageURI'] = $request->originalImageURI;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->strengthLevel)) {
            $query['StrengthLevel'] = $request->strengthLevel;
        }
        if (!Utils::isUnset($request->targetURI)) {
            $query['TargetURI'] = $request->targetURI;
        }
        if (!Utils::isUnset($request->watermarkType)) {
            $query['WatermarkType'] = $request->watermarkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDecodeBlindWatermarkTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDecodeBlindWatermarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Decodes the blind watermark in an image.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of Intelligent Media Management (IMM).
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   Make sure that an IMM project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   The region and project specified in the request to decode a blind watermark must match those in the [EncodeBlindWatermark](https://help.aliyun.com/document_detail/2743655.html) request to encode the blind watermark.
     * *   A blind watermark can still be extracted even if attacks, such as compression, scaling, cropping, rotation, and color transformation, are performed on the image.
     * *   This operation is compatible with its earlier version DecodeBlindWatermark.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task. If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateDecodeBlindWatermarkTaskRequest $request CreateDecodeBlindWatermarkTaskRequest
     *
     * @return CreateDecodeBlindWatermarkTaskResponse CreateDecodeBlindWatermarkTaskResponse
     */
    public function createDecodeBlindWatermarkTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDecodeBlindWatermarkTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Searches the dataset for the specified number of images most similar to the specified image or face and returns face IDs and boundaries in descending order of similarity.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The operation searches for faces within the face boundary in each input image.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFacesSearchingTaskRequest $tmpReq  CreateFacesSearchingTaskRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFacesSearchingTaskResponse CreateFacesSearchingTaskResponse
     */
    public function createFacesSearchingTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFacesSearchingTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->sources)) {
            $request->sourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->maxResult)) {
            $query['MaxResult'] = $request->maxResult;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourcesShrink)) {
            $query['Sources'] = $request->sourcesShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFacesSearchingTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFacesSearchingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Searches the dataset for the specified number of images most similar to the specified image or face and returns face IDs and boundaries in descending order of similarity.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The operation searches for faces within the face boundary in each input image.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFacesSearchingTaskRequest $request CreateFacesSearchingTaskRequest
     *
     * @return CreateFacesSearchingTaskResponse CreateFacesSearchingTaskResponse
     */
    public function createFacesSearchingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFacesSearchingTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a face clustering task to cluster faces of different persons in images by person based on the intelligent algorithms.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the CreateBinding operation or manually by calling the IndexFileMeta or BatchIndexFileMeta operation.
     * *   Each call to the operation incrementally processes metadata in the dataset. You can regularly call this operation to process incremental files.
     *     After the clustering task is completed, you can call the GetFigureCluster or BatchGetFigureCluster  operation to query information about a specific cluster. You can also call the QueryFigureClusters operation to query all face clusters of the specified dataset.
     * *   Removing image information from the dataset causes changes to face clusters. When images that contain all faces in a cluster are removed, the cluster is deleted.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task. If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFigureClusteringTaskRequest $tmpReq  CreateFigureClusteringTaskRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFigureClusteringTaskResponse CreateFigureClusteringTaskResponse
     */
    public function createFigureClusteringTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFigureClusteringTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFigureClusteringTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFigureClusteringTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a face clustering task to cluster faces of different persons in images by person based on the intelligent algorithms.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the CreateBinding operation or manually by calling the IndexFileMeta or BatchIndexFileMeta operation.
     * *   Each call to the operation incrementally processes metadata in the dataset. You can regularly call this operation to process incremental files.
     *     After the clustering task is completed, you can call the GetFigureCluster or BatchGetFigureCluster  operation to query information about a specific cluster. You can also call the QueryFigureClusters operation to query all face clusters of the specified dataset.
     * *   Removing image information from the dataset causes changes to face clusters. When images that contain all faces in a cluster are removed, the cluster is deleted.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task. If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFigureClusteringTaskRequest $request CreateFigureClusteringTaskRequest
     *
     * @return CreateFigureClusteringTaskResponse CreateFigureClusteringTaskResponse
     */
    public function createFigureClusteringTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFigureClusteringTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Merges two or more face clustering groups into one face clustering group.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     * *   If you merge unrelated groups, the feature values of the target groups are affected. As a result, the incremental data may be inaccurately grouped when you create a face clustering task.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFigureClustersMergingTaskRequest $tmpReq  CreateFigureClustersMergingTaskRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFigureClustersMergingTaskResponse CreateFigureClustersMergingTaskResponse
     */
    public function createFigureClustersMergingTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFigureClustersMergingTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->froms)) {
            $request->fromsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->froms, 'Froms', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->fromsShrink)) {
            $query['Froms'] = $request->fromsShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFigureClustersMergingTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFigureClustersMergingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Merges two or more face clustering groups into one face clustering group.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     * *   If you merge unrelated groups, the feature values of the target groups are affected. As a result, the incremental data may be inaccurately grouped when you create a face clustering task.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFigureClustersMergingTaskRequest $request CreateFigureClustersMergingTaskRequest
     *
     * @return CreateFigureClustersMergingTaskResponse CreateFigureClustersMergingTaskResponse
     */
    public function createFigureClustersMergingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFigureClustersMergingTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a file packing task.
     *  *
     * @description >  The operation is in public preview. For any inquires, join our DingTalk group (ID: 88490020073) and share your questions with us.
     * >  The operation supports file packing only. Compression support will be added later.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   A call to the operation can pack up to 80,000 objects into a package.
     * *   The total size of all objects to be packed into a package cannot exceed 200 GB.
     * *   The operation can pack only Standard objects in Object Storage Service (OSS). To pack an object in another storage class, you must first [convert the storage class of the object](https://help.aliyun.com/document_detail/90090.html).
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFileCompressionTaskRequest $tmpReq  CreateFileCompressionTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFileCompressionTaskResponse CreateFileCompressionTaskResponse
     */
    public function createFileCompressionTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFileCompressionTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->sources)) {
            $request->sourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->compressedFormat)) {
            $query['CompressedFormat'] = $request->compressedFormat;
        }
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceManifestURI)) {
            $query['SourceManifestURI'] = $request->sourceManifestURI;
        }
        if (!Utils::isUnset($request->sourcesShrink)) {
            $query['Sources'] = $request->sourcesShrink;
        }
        if (!Utils::isUnset($request->targetURI)) {
            $query['TargetURI'] = $request->targetURI;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFileCompressionTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFileCompressionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a file packing task.
     *  *
     * @description >  The operation is in public preview. For any inquires, join our DingTalk group (ID: 88490020073) and share your questions with us.
     * >  The operation supports file packing only. Compression support will be added later.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   A call to the operation can pack up to 80,000 objects into a package.
     * *   The total size of all objects to be packed into a package cannot exceed 200 GB.
     * *   The operation can pack only Standard objects in Object Storage Service (OSS). To pack an object in another storage class, you must first [convert the storage class of the object](https://help.aliyun.com/document_detail/90090.html).
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFileCompressionTaskRequest $request CreateFileCompressionTaskRequest
     *
     * @return CreateFileCompressionTaskResponse CreateFileCompressionTaskResponse
     */
    public function createFileCompressionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileCompressionTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Extracts the specified files from a ZIP, RAR, or 7z package to the specified directory or decompresses the entire package.
     *  *
     * @description >  The operation is in public preview. For any inquires, join our DingTalk group (ID: 88490020073) and share your questions with us.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   The operation supports a package that contains up to 80,000 files.
     * *   The operation supports ZIP or RAR packages up to 200 GB in size, or 7z packages up to 50 GB in size.
     * *   The operation extracts files in streams to the specified directory. If the file extraction task is interrupted by a corrupt file, files that have been extracted are not deleted.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFileUncompressionTaskRequest $tmpReq  CreateFileUncompressionTaskRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFileUncompressionTaskResponse CreateFileUncompressionTaskResponse
     */
    public function createFileUncompressionTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFileUncompressionTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->selectedFiles)) {
            $request->selectedFilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->selectedFiles, 'SelectedFiles', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->selectedFilesShrink)) {
            $query['SelectedFiles'] = $request->selectedFilesShrink;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->targetURI)) {
            $query['TargetURI'] = $request->targetURI;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFileUncompressionTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFileUncompressionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Extracts the specified files from a ZIP, RAR, or 7z package to the specified directory or decompresses the entire package.
     *  *
     * @description >  The operation is in public preview. For any inquires, join our DingTalk group (ID: 88490020073) and share your questions with us.
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   The operation supports a package that contains up to 80,000 files.
     * *   The operation supports ZIP or RAR packages up to 200 GB in size, or 7z packages up to 50 GB in size.
     * *   The operation extracts files in streams to the specified directory. If the file extraction task is interrupted by a corrupt file, files that have been extracted are not deleted.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateFileUncompressionTaskRequest $request CreateFileUncompressionTaskRequest
     *
     * @return CreateFileUncompressionTaskResponse CreateFileUncompressionTaskResponse
     */
    public function createFileUncompressionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileUncompressionTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an image moderation task to ensure image content compliance. You can call this operation to identify inappropriate content, such as pornography, violence, terrorism, politically sensitive content, undesirable scenes, unauthorized logos, and non-compliant ads.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   The image for which you want to create a content moderation task must meet the following requirements:
     *     *   The image URL supports the HTTP and HTTPS protocols.
     *     *   The image is in one of the following formats: PNG, JPG, JPEG, BMP, GIF, and WebP
     *     *   The image size is limited to 20 MB for synchronous and asynchronous calls, with a maximum height or width of 30,000 pixels. The total number of pixels cannot exceed 250 million. GIF images are limited to 4,194,304 pixels, with a maximum height or width of 30,000 pixels.
     *     *   The image download time is limited to 3 seconds. If the download takes longer, a timeout error occurs.
     *     *   To ensure effective moderation, we recommend that you submit an image with dimensions of at least 256 × 256 pixels.
     *     *   The response time of the CreateImageModerationTask operation varies based on the duration of the image download. Make sure that the image is stored in a stable and reliable service. We recommend that you store images on Alibaba Cloud Object Storage Service (OSS) or cache them on Alibaba Cloud CDN.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478241.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can also obtain information about the task based on notifications.
     * >  The detection result is sent as an asynchronous notification. The Suggestion field of the notification can have one of the following values:
     * *   pass: No non-compliant content is found.
     * *   block: Non-compliant content is detected. The Categories field value indicates the non-compliance categories. For more information, see Content moderation results.
     * *   review: A manual review is needed. After the manual review is finished, another asynchronous notification is sent to inform you about the review result. >
     *  *
     * @param CreateImageModerationTaskRequest $tmpReq  CreateImageModerationTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateImageModerationTaskResponse CreateImageModerationTaskResponse
     */
    public function createImageModerationTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateImageModerationTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->scenes)) {
            $request->scenesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scenes, 'Scenes', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->maxFrames)) {
            $query['MaxFrames'] = $request->maxFrames;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->scenesShrink)) {
            $query['Scenes'] = $request->scenesShrink;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImageModerationTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageModerationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an image moderation task to ensure image content compliance. You can call this operation to identify inappropriate content, such as pornography, violence, terrorism, politically sensitive content, undesirable scenes, unauthorized logos, and non-compliant ads.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   The image for which you want to create a content moderation task must meet the following requirements:
     *     *   The image URL supports the HTTP and HTTPS protocols.
     *     *   The image is in one of the following formats: PNG, JPG, JPEG, BMP, GIF, and WebP
     *     *   The image size is limited to 20 MB for synchronous and asynchronous calls, with a maximum height or width of 30,000 pixels. The total number of pixels cannot exceed 250 million. GIF images are limited to 4,194,304 pixels, with a maximum height or width of 30,000 pixels.
     *     *   The image download time is limited to 3 seconds. If the download takes longer, a timeout error occurs.
     *     *   To ensure effective moderation, we recommend that you submit an image with dimensions of at least 256 × 256 pixels.
     *     *   The response time of the CreateImageModerationTask operation varies based on the duration of the image download. Make sure that the image is stored in a stable and reliable service. We recommend that you store images on Alibaba Cloud Object Storage Service (OSS) or cache them on Alibaba Cloud CDN.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478241.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can also obtain information about the task based on notifications.
     * >  The detection result is sent as an asynchronous notification. The Suggestion field of the notification can have one of the following values:
     * *   pass: No non-compliant content is found.
     * *   block: Non-compliant content is detected. The Categories field value indicates the non-compliance categories. For more information, see Content moderation results.
     * *   review: A manual review is needed. After the manual review is finished, another asynchronous notification is sent to inform you about the review result. >
     *  *
     * @param CreateImageModerationTaskRequest $request CreateImageModerationTaskRequest
     *
     * @return CreateImageModerationTaskResponse CreateImageModerationTaskResponse
     */
    public function createImageModerationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageModerationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an image splicing task. You can call this operation to splice multiple images into one based on a given rule and save the final image into an Object Storage Service (OSS) bucket.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the project that you want to use exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * *   You can call this operation to splice up to eight images. Each side of an image cannot exceed 32,876 pixels, and the total number of pixels of the image cannot exceed 1 billion.
     * *   The CreateImageSplicingTask operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period elapses, the task information is no longer retrievable. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can also obtain information about the task based on notifications.
     *  *
     * @param CreateImageSplicingTaskRequest $tmpReq  CreateImageSplicingTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateImageSplicingTaskResponse CreateImageSplicingTaskResponse
     */
    public function createImageSplicingTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateImageSplicingTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->sources)) {
            $request->sourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->align)) {
            $query['Align'] = $request->align;
        }
        if (!Utils::isUnset($request->backgroundColor)) {
            $query['BackgroundColor'] = $request->backgroundColor;
        }
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->imageFormat)) {
            $query['ImageFormat'] = $request->imageFormat;
        }
        if (!Utils::isUnset($request->margin)) {
            $query['Margin'] = $request->margin;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->padding)) {
            $query['Padding'] = $request->padding;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->quality)) {
            $query['Quality'] = $request->quality;
        }
        if (!Utils::isUnset($request->scaleType)) {
            $query['ScaleType'] = $request->scaleType;
        }
        if (!Utils::isUnset($request->sourcesShrink)) {
            $query['Sources'] = $request->sourcesShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->targetURI)) {
            $query['TargetURI'] = $request->targetURI;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImageSplicingTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageSplicingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an image splicing task. You can call this operation to splice multiple images into one based on a given rule and save the final image into an Object Storage Service (OSS) bucket.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the project that you want to use exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * *   You can call this operation to splice up to eight images. Each side of an image cannot exceed 32,876 pixels, and the total number of pixels of the image cannot exceed 1 billion.
     * *   The CreateImageSplicingTask operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period elapses, the task information is no longer retrievable. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can also obtain information about the task based on notifications.
     *  *
     * @param CreateImageSplicingTaskRequest $request CreateImageSplicingTaskRequest
     *
     * @return CreateImageSplicingTaskResponse CreateImageSplicingTaskResponse
     */
    public function createImageSplicingTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageSplicingTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Converts multiple images into one single PDF file and stores the PDF file to the specified path in Object Storage Service (OSS).
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * *   You can specify up to 100 images in a call to the operation.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateImageToPDFTaskRequest $tmpReq  CreateImageToPDFTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateImageToPDFTaskResponse CreateImageToPDFTaskResponse
     */
    public function createImageToPDFTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateImageToPDFTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->sources)) {
            $request->sourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourcesShrink)) {
            $query['Sources'] = $request->sourcesShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->targetURI)) {
            $query['TargetURI'] = $request->targetURI;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImageToPDFTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageToPDFTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Converts multiple images into one single PDF file and stores the PDF file to the specified path in Object Storage Service (OSS).
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     * *   You can specify up to 100 images in a call to the operation.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateImageToPDFTaskRequest $request CreateImageToPDFTaskRequest
     *
     * @return CreateImageToPDFTaskResponse CreateImageToPDFTaskResponse
     */
    public function createImageToPDFTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageToPDFTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a spatiotemporal clustering task to cluster photos and videos based on geolocation and time information. Spatiotemporal clustering allows you to group photos and videos taken during a travel or at different places by their spatial and temporal similarity. Based on spatiotemporal clustering, you can develop media capabilities such as media file categorization, photo collections, and image and video-based stories.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Each call to the operation incrementally processes metadata in the dataset.****`` You can regularly call this operation to process incremental files.
     * *   After a spatiotemporal clustering task is complete, you can call the [QueryLocationDateClusters](https://help.aliyun.com/document_detail/478189.html) operation to query the spatiotemporal clustering result.
     * *   Removing metadata from a dataset does not affect existing spatiotemporal clusters for the dataset. To delete a spatiotemporal cluster, call the [DeleteLocationDateCluster](https://help.aliyun.com/document_detail/478191.html) operation.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateLocationDateClusteringTaskRequest $tmpReq  CreateLocationDateClusteringTaskRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLocationDateClusteringTaskResponse CreateLocationDateClusteringTaskResponse
     */
    public function createLocationDateClusteringTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLocationDateClusteringTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dateOptions)) {
            $request->dateOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dateOptions, 'DateOptions', 'json');
        }
        if (!Utils::isUnset($tmpReq->locationOptions)) {
            $request->locationOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->locationOptions, 'LocationOptions', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->dateOptionsShrink)) {
            $query['DateOptions'] = $request->dateOptionsShrink;
        }
        if (!Utils::isUnset($request->locationOptionsShrink)) {
            $query['LocationOptions'] = $request->locationOptionsShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLocationDateClusteringTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLocationDateClusteringTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a spatiotemporal clustering task to cluster photos and videos based on geolocation and time information. Spatiotemporal clustering allows you to group photos and videos taken during a travel or at different places by their spatial and temporal similarity. Based on spatiotemporal clustering, you can develop media capabilities such as media file categorization, photo collections, and image and video-based stories.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Each call to the operation incrementally processes metadata in the dataset.****`` You can regularly call this operation to process incremental files.
     * *   After a spatiotemporal clustering task is complete, you can call the [QueryLocationDateClusters](https://help.aliyun.com/document_detail/478189.html) operation to query the spatiotemporal clustering result.
     * *   Removing metadata from a dataset does not affect existing spatiotemporal clusters for the dataset. To delete a spatiotemporal cluster, call the [DeleteLocationDateCluster](https://help.aliyun.com/document_detail/478191.html) operation.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateLocationDateClusteringTaskRequest $request CreateLocationDateClusteringTaskRequest
     *
     * @return CreateLocationDateClusteringTaskResponse CreateLocationDateClusteringTaskResponse
     */
    public function createLocationDateClusteringTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLocationDateClusteringTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an asynchronous media transcoding task to provide audio and video file processing abilities, such as media transcoding, media splicing, video frame capturing, and video to GIF conversion.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   By default, only one type of video, audio, and subtitle streams is processed when you call this operation to process media transcoding. However, you can specify the number of video, audio, or subtitle streams that you want to process.
     * *   When you use this operation to execute a media merging task, up to 11 media files are supported. In this case, the parameters that involve media transcoding and frame capturing apply to the merged media data.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateMediaConvertTaskRequest $tmpReq  CreateMediaConvertTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMediaConvertTaskResponse CreateMediaConvertTaskResponse
     */
    public function createMediaConvertTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMediaConvertTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->sources)) {
            $request->sourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        if (!Utils::isUnset($tmpReq->targets)) {
            $request->targetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->targets, 'Targets', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alignmentIndex)) {
            $query['AlignmentIndex'] = $request->alignmentIndex;
        }
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourcesShrink)) {
            $query['Sources'] = $request->sourcesShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->targetsShrink)) {
            $query['Targets'] = $request->targetsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMediaConvertTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMediaConvertTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an asynchronous media transcoding task to provide audio and video file processing abilities, such as media transcoding, media splicing, video frame capturing, and video to GIF conversion.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   By default, only one type of video, audio, and subtitle streams is processed when you call this operation to process media transcoding. However, you can specify the number of video, audio, or subtitle streams that you want to process.
     * *   When you use this operation to execute a media merging task, up to 11 media files are supported. In this case, the parameters that involve media transcoding and frame capturing apply to the merged media data.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateMediaConvertTaskRequest $request CreateMediaConvertTaskRequest
     *
     * @return CreateMediaConvertTaskResponse CreateMediaConvertTaskResponse
     */
    public function createMediaConvertTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaConvertTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a document format conversion task to convert the format of a document stored in an Object Storage Service (OSS) bucket.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   The operation supports the following input formats:
     *     *   Text documents: doc, docx, wps, wpss, docm, dotm, dot, dotx, and html
     *     *   Presentation documents: pptx, ppt, pot, potx, pps, ppsx, dps, dpt, pptm, potm, ppsm, and dpss
     *     *   Spreadsheet documents: xls, xlt, et, ett, xlsx, xltx, csv, xlsb, xlsm, xltm, and ets
     *     *   PDF documents: pdf
     * *   The operation supports the following output formats:
     *     *   Image files: png and jpg
     *     *   Text files: txt
     *     *   PDF files: pdf
     * *   Each input document can be up to 200 MB in size.
     * *   The maximum conversion time is 120 seconds. If the document contains too much or complex content, the conversion may time out.
     * *   The operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can use one of the following methods to query task information:
     *     *   Call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.``
     *     *   In the region in which the IMM project is located, configure a Simple Message Queue (SMQ) subscription to receive task information notifications. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html). For information about SMQ SDKs, see [Use queues](https://help.aliyun.com/document_detail/32449.html).
     *     *   In the region in which the IMM project is located, create an ApsaraMQ for RocketMQ 4.0 instance, a topic, and a group to receive task notifications. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html). For more information about how to use ApsaraMQ for RocketMQ, see [Call HTTP SDKs to send and subscribe to messages](https://help.aliyun.com/document_detail/169009.html).
     *     *   In the region in which the IMM project is located, use [EventBridge](https://www.aliyun.com/product/aliware/eventbridge) to receive task information notifications. For more information, see [IMM events](https://help.aliyun.com/document_detail/205730.html).
     *  *
     * @param CreateOfficeConversionTaskRequest $tmpReq  CreateOfficeConversionTaskRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOfficeConversionTaskResponse CreateOfficeConversionTaskResponse
     */
    public function createOfficeConversionTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOfficeConversionTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->sources)) {
            $request->sourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sources, 'Sources', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        if (!Utils::isUnset($tmpReq->trimPolicy)) {
            $request->trimPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->trimPolicy, 'TrimPolicy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->endPage)) {
            $query['EndPage'] = $request->endPage;
        }
        if (!Utils::isUnset($request->firstPage)) {
            $query['FirstPage'] = $request->firstPage;
        }
        if (!Utils::isUnset($request->fitToHeight)) {
            $query['FitToHeight'] = $request->fitToHeight;
        }
        if (!Utils::isUnset($request->fitToWidth)) {
            $query['FitToWidth'] = $request->fitToWidth;
        }
        if (!Utils::isUnset($request->holdLineFeed)) {
            $query['HoldLineFeed'] = $request->holdLineFeed;
        }
        if (!Utils::isUnset($request->imageDPI)) {
            $query['ImageDPI'] = $request->imageDPI;
        }
        if (!Utils::isUnset($request->longPicture)) {
            $query['LongPicture'] = $request->longPicture;
        }
        if (!Utils::isUnset($request->longText)) {
            $query['LongText'] = $request->longText;
        }
        if (!Utils::isUnset($request->maxSheetColumn)) {
            $query['MaxSheetColumn'] = $request->maxSheetColumn;
        }
        if (!Utils::isUnset($request->maxSheetRow)) {
            $query['MaxSheetRow'] = $request->maxSheetRow;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->pages)) {
            $query['Pages'] = $request->pages;
        }
        if (!Utils::isUnset($request->paperHorizontal)) {
            $query['PaperHorizontal'] = $request->paperHorizontal;
        }
        if (!Utils::isUnset($request->paperSize)) {
            $query['PaperSize'] = $request->paperSize;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->quality)) {
            $query['Quality'] = $request->quality;
        }
        if (!Utils::isUnset($request->scalePercentage)) {
            $query['ScalePercentage'] = $request->scalePercentage;
        }
        if (!Utils::isUnset($request->sheetCount)) {
            $query['SheetCount'] = $request->sheetCount;
        }
        if (!Utils::isUnset($request->sheetIndex)) {
            $query['SheetIndex'] = $request->sheetIndex;
        }
        if (!Utils::isUnset($request->showComments)) {
            $query['ShowComments'] = $request->showComments;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->startPage)) {
            $query['StartPage'] = $request->startPage;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->targetURI)) {
            $query['TargetURI'] = $request->targetURI;
        }
        if (!Utils::isUnset($request->targetURIPrefix)) {
            $query['TargetURIPrefix'] = $request->targetURIPrefix;
        }
        if (!Utils::isUnset($request->trimPolicyShrink)) {
            $query['TrimPolicy'] = $request->trimPolicyShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->sourcesShrink)) {
            $body['Sources'] = $request->sourcesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOfficeConversionTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOfficeConversionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a document format conversion task to convert the format of a document stored in an Object Storage Service (OSS) bucket.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   The operation supports the following input formats:
     *     *   Text documents: doc, docx, wps, wpss, docm, dotm, dot, dotx, and html
     *     *   Presentation documents: pptx, ppt, pot, potx, pps, ppsx, dps, dpt, pptm, potm, ppsm, and dpss
     *     *   Spreadsheet documents: xls, xlt, et, ett, xlsx, xltx, csv, xlsb, xlsm, xltm, and ets
     *     *   PDF documents: pdf
     * *   The operation supports the following output formats:
     *     *   Image files: png and jpg
     *     *   Text files: txt
     *     *   PDF files: pdf
     * *   Each input document can be up to 200 MB in size.
     * *   The maximum conversion time is 120 seconds. If the document contains too much or complex content, the conversion may time out.
     * *   The operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can use one of the following methods to query task information:
     *     *   Call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.``
     *     *   In the region in which the IMM project is located, configure a Simple Message Queue (SMQ) subscription to receive task information notifications. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html). For information about SMQ SDKs, see [Use queues](https://help.aliyun.com/document_detail/32449.html).
     *     *   In the region in which the IMM project is located, create an ApsaraMQ for RocketMQ 4.0 instance, a topic, and a group to receive task notifications. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html). For more information about how to use ApsaraMQ for RocketMQ, see [Call HTTP SDKs to send and subscribe to messages](https://help.aliyun.com/document_detail/169009.html).
     *     *   In the region in which the IMM project is located, use [EventBridge](https://www.aliyun.com/product/aliware/eventbridge) to receive task information notifications. For more information, see [IMM events](https://help.aliyun.com/document_detail/205730.html).
     *  *
     * @param CreateOfficeConversionTaskRequest $request CreateOfficeConversionTaskRequest
     *
     * @return CreateOfficeConversionTaskResponse CreateOfficeConversionTaskResponse
     */
    public function createOfficeConversionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOfficeConversionTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a project.
     *  *
     * @description *   The name of a project must be unique in a region.
     * *   By default, you can create up to 100 projects in a region. If you want to request a quota increase to create more projects, submit a ticket or join the DingTalk chat group (ID: 88490020073).
     * *   After you create a project, you can create other Intelligent Media Management (IMM) resources in the project. For more information, see the following links:
     *     *   [CreateDataset](https://help.aliyun.com/document_detail/478160.html)
     *     *   [CreateTrigger](https://help.aliyun.com/document_detail/479912.html)
     *     *   [CreateBatch](https://help.aliyun.com/document_detail/606694.html)
     *     *   [CreateBinding](https://help.aliyun.com/document_detail/478202.html)
     *  *
     * @param CreateProjectRequest $tmpReq  CreateProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetMaxBindCount)) {
            $query['DatasetMaxBindCount'] = $request->datasetMaxBindCount;
        }
        if (!Utils::isUnset($request->datasetMaxEntityCount)) {
            $query['DatasetMaxEntityCount'] = $request->datasetMaxEntityCount;
        }
        if (!Utils::isUnset($request->datasetMaxFileCount)) {
            $query['DatasetMaxFileCount'] = $request->datasetMaxFileCount;
        }
        if (!Utils::isUnset($request->datasetMaxRelationCount)) {
            $query['DatasetMaxRelationCount'] = $request->datasetMaxRelationCount;
        }
        if (!Utils::isUnset($request->datasetMaxTotalFileSize)) {
            $query['DatasetMaxTotalFileSize'] = $request->datasetMaxTotalFileSize;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->projectMaxDatasetCount)) {
            $query['ProjectMaxDatasetCount'] = $request->projectMaxDatasetCount;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->serviceRole)) {
            $query['ServiceRole'] = $request->serviceRole;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a project.
     *  *
     * @description *   The name of a project must be unique in a region.
     * *   By default, you can create up to 100 projects in a region. If you want to request a quota increase to create more projects, submit a ticket or join the DingTalk chat group (ID: 88490020073).
     * *   After you create a project, you can create other Intelligent Media Management (IMM) resources in the project. For more information, see the following links:
     *     *   [CreateDataset](https://help.aliyun.com/document_detail/478160.html)
     *     *   [CreateTrigger](https://help.aliyun.com/document_detail/479912.html)
     *     *   [CreateBatch](https://help.aliyun.com/document_detail/606694.html)
     *     *   [CreateBinding](https://help.aliyun.com/document_detail/478202.html)
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Clusters images indexed into a dataset by similarity. Image clustering is suitable for image deduplication and selection. For example, you can use image clustering to filter photos in your album that are taken in continuous shooting mode.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note that** Asynchronous processing does not guarantee timely task completion.
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Each call to the operation incrementally processes metadata in the dataset.****`` You can regularly call this operation to process incremental files.
     * *   After clustering is completed, you can call the [QuerySimilarImageClusters](https://help.aliyun.com/document_detail/611304.html) operation to query image clustering results.
     * *   An image cluster contains at lest two images. Removing similar images from the dataset affects existing image clusters. If image deletion reduces the number of images in a cluster to less than 2, the cluster is automatically deleted.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateSimilarImageClusteringTaskRequest $tmpReq  CreateSimilarImageClusteringTaskRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSimilarImageClusteringTaskResponse CreateSimilarImageClusteringTaskResponse
     */
    public function createSimilarImageClusteringTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSimilarImageClusteringTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSimilarImageClusteringTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSimilarImageClusteringTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Clusters images indexed into a dataset by similarity. Image clustering is suitable for image deduplication and selection. For example, you can use image clustering to filter photos in your album that are taken in continuous shooting mode.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     *     **
     *     **Note that** Asynchronous processing does not guarantee timely task completion.
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Each call to the operation incrementally processes metadata in the dataset.****`` You can regularly call this operation to process incremental files.
     * *   After clustering is completed, you can call the [QuerySimilarImageClusters](https://help.aliyun.com/document_detail/611304.html) operation to query image clustering results.
     * *   An image cluster contains at lest two images. Removing similar images from the dataset affects existing image clusters. If image deletion reduces the number of images in a cluster to less than 2, the cluster is automatically deleted.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateSimilarImageClusteringTaskRequest $request CreateSimilarImageClusteringTaskRequest
     *
     * @return CreateSimilarImageClusteringTaskResponse CreateSimilarImageClusteringTaskResponse
     */
    public function createSimilarImageClusteringTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimilarImageClusteringTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a story.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) to query information about the task. If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateStoryRequest $tmpReq  CreateStoryRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStoryResponse CreateStoryResponse
     */
    public function createStoryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->address)) {
            $request->addressShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->address, 'Address', 'json');
        }
        if (!Utils::isUnset($tmpReq->customLabels)) {
            $request->customLabelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->addressShrink)) {
            $body['Address'] = $request->addressShrink;
        }
        if (!Utils::isUnset($request->customId)) {
            $body['CustomId'] = $request->customId;
        }
        if (!Utils::isUnset($request->customLabelsShrink)) {
            $body['CustomLabels'] = $request->customLabelsShrink;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->maxFileCount)) {
            $body['MaxFileCount'] = $request->maxFileCount;
        }
        if (!Utils::isUnset($request->minFileCount)) {
            $body['MinFileCount'] = $request->minFileCount;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $body['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->objectId)) {
            $body['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->storyEndTime)) {
            $body['StoryEndTime'] = $request->storyEndTime;
        }
        if (!Utils::isUnset($request->storyName)) {
            $body['StoryName'] = $request->storyName;
        }
        if (!Utils::isUnset($request->storyStartTime)) {
            $body['StoryStartTime'] = $request->storyStartTime;
        }
        if (!Utils::isUnset($request->storySubType)) {
            $body['StorySubType'] = $request->storySubType;
        }
        if (!Utils::isUnset($request->storyType)) {
            $body['StoryType'] = $request->storyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateStory',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a story.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) to query information about the task. If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateStoryRequest $request CreateStoryRequest
     *
     * @return CreateStoryResponse CreateStoryResponse
     */
    public function createStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStoryWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a trigger. A trigger can trigger Intelligent Media Management (IMM) based on events such as events in Object Storage Service (OSS) to process files, such as images, videos, and documents based on data processing templates.
     *  *
     * @description If you want to create a trigger to process data in [OSS](https://help.aliyun.com/document_detail/99372.html), make sure that you have bound the dataset to the OSS bucket where the data is stored. For more information about how to bind a dataset to a bucket, see [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html).
     *  *
     * @param CreateTriggerRequest $tmpReq  CreateTriggerRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTriggerResponse CreateTriggerResponse
     */
    public function createTriggerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTriggerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actions)) {
            $request->actionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actions, 'Actions', 'json');
        }
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->actionsShrink)) {
            $body['Actions'] = $request->actionsShrink;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $body['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $body['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->serviceRole)) {
            $body['ServiceRole'] = $request->serviceRole;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrigger',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a trigger. A trigger can trigger Intelligent Media Management (IMM) based on events such as events in Object Storage Service (OSS) to process files, such as images, videos, and documents based on data processing templates.
     *  *
     * @description If you want to create a trigger to process data in [OSS](https://help.aliyun.com/document_detail/99372.html), make sure that you have bound the dataset to the OSS bucket where the data is stored. For more information about how to bind a dataset to a bucket, see [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html).
     *  *
     * @param CreateTriggerRequest $request CreateTriggerRequest
     *
     * @return CreateTriggerResponse CreateTriggerResponse
     */
    public function createTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Detects the scene, object, and event tag information of video content. Scene information includes categories such as natural landscapes, life scenes, and disaster scenes. Event information includes categories such as talent shows, office events, performances, and production events. Object information includes categories such as tableware, electronic products, furniture, and transportation. Video tag detection supports more than 30 tag categories and thousands of tags.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/2747104.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that an IMM project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   For more information about video label detection, see [Video label detection](https://help.aliyun.com/document_detail/477189.html).
     * *   This operation supports multiple video formats, such as MP4, MPEG-TS, MKV, MOV, AVI, FLV, and M3U8.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateVideoLabelClassificationTaskRequest $tmpReq  CreateVideoLabelClassificationTaskRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVideoLabelClassificationTaskResponse CreateVideoLabelClassificationTaskResponse
     */
    public function createVideoLabelClassificationTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateVideoLabelClassificationTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVideoLabelClassificationTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVideoLabelClassificationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects the scene, object, and event tag information of video content. Scene information includes categories such as natural landscapes, life scenes, and disaster scenes. Event information includes categories such as talent shows, office events, performances, and production events. Object information includes categories such as tableware, electronic products, furniture, and transportation. Video tag detection supports more than 30 tag categories and thousands of tags.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/2747104.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that an IMM project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *     **
     *     **Note** Asynchronous processing does not guarantee timely task completion.
     * *   For more information about video label detection, see [Video label detection](https://help.aliyun.com/document_detail/477189.html).
     * *   This operation supports multiple video formats, such as MP4, MPEG-TS, MKV, MOV, AVI, FLV, and M3U8.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is retained only for seven days and cannot be retrieved when the retention period elapses. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateVideoLabelClassificationTaskRequest $request CreateVideoLabelClassificationTaskRequest
     *
     * @return CreateVideoLabelClassificationTaskResponse CreateVideoLabelClassificationTaskResponse
     */
    public function createVideoLabelClassificationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoLabelClassificationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Detects risky or non-compliant content from videos. You can use this operation in scenarios such as intelligent pornography detection, terrorist content and political bias detection, ad violation detection, and logo detection.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   The detection result is sent as an asynchronous notification. The Suggestion parameter in asynchronous notifications supports the following values:
     *     *   pass: No non-compliant content is found.
     *     *   block: Non-compliant content is detected. The Categories field value indicates the non-compliance category. For more information, see [Content moderation results](https://help.aliyun.com/document_detail/2743995.html).
     *     *   review: A manual review is needed before an asynchronous notification is sent to inform you about the result.
     * *   The following video frame requirements apply:
     *     *   The URLs for video frames must use HTTP or HTTPS.
     *     *   Video frames must be in PNG, JPG, JPEG, BMP, GIF, or WebP format.
     *     *   The size of a video frame cannot exceed 10 MB.
     *     *   The recommended resolution for video frames is not lower than 256 × 256 pixels. A frame resolution lower than the recommended resolution may affect detection accuracy.
     *     *   The response time of the operation varies based on the amount of time required to download frames. Make sure that video frames to detect are stored in a reliable and stable service. We recommend that you store video frames in OSS or cache video frames on Alibaba Cloud CDN.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateVideoModerationTaskRequest $tmpReq  CreateVideoModerationTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVideoModerationTaskResponse CreateVideoModerationTaskResponse
     */
    public function createVideoModerationTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateVideoModerationTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->scenes)) {
            $request->scenesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scenes, 'Scenes', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->maxFrames)) {
            $query['MaxFrames'] = $request->maxFrames;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->scenesShrink)) {
            $query['Scenes'] = $request->scenesShrink;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVideoModerationTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVideoModerationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects risky or non-compliant content from videos. You can use this operation in scenarios such as intelligent pornography detection, terrorist content and political bias detection, ad violation detection, and logo detection.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   The detection result is sent as an asynchronous notification. The Suggestion parameter in asynchronous notifications supports the following values:
     *     *   pass: No non-compliant content is found.
     *     *   block: Non-compliant content is detected. The Categories field value indicates the non-compliance category. For more information, see [Content moderation results](https://help.aliyun.com/document_detail/2743995.html).
     *     *   review: A manual review is needed before an asynchronous notification is sent to inform you about the result.
     * *   The following video frame requirements apply:
     *     *   The URLs for video frames must use HTTP or HTTPS.
     *     *   Video frames must be in PNG, JPG, JPEG, BMP, GIF, or WebP format.
     *     *   The size of a video frame cannot exceed 10 MB.
     *     *   The recommended resolution for video frames is not lower than 256 × 256 pixels. A frame resolution lower than the recommended resolution may affect detection accuracy.
     *     *   The response time of the operation varies based on the amount of time required to download frames. Make sure that video frames to detect are stored in a reliable and stable service. We recommend that you store video frames in OSS or cache video frames on Alibaba Cloud CDN.
     * *   This operation is an asynchronous operation. After a task is executed, the task information is saved only for seven days. When the retention period ends, the task information can no longer be retrieved. You can call the [GetTask](https://help.aliyun.com/document_detail/478241.html) or [ListTasks](https://help.aliyun.com/document_detail/478242.html) operation to query information about the task.`` If you specify [Notification](https://help.aliyun.com/document_detail/2743997.html), you can obtain information about the task based on notifications.
     *  *
     * @param CreateVideoModerationTaskRequest $request CreateVideoModerationTaskRequest
     *
     * @return CreateVideoModerationTaskResponse CreateVideoModerationTaskResponse
     */
    public function createVideoModerationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoModerationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a batch processing task.
     *  *
     * @description *   You can delete only a batch processing task that is in one of the following states: Ready, Failed, Suspended, and Succeeded.
     * *   Before you delete a batch processing task, you can call the [GetBatch](https://help.aliyun.com/document_detail/479922.html) operation to query the task status. This ensures a successful deletion.
     *  *
     * @param DeleteBatchRequest $request DeleteBatchRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBatchResponse DeleteBatchResponse
     */
    public function deleteBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteBatch',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a batch processing task.
     *  *
     * @description *   You can delete only a batch processing task that is in one of the following states: Ready, Failed, Suspended, and Succeeded.
     * *   Before you delete a batch processing task, you can call the [GetBatch](https://help.aliyun.com/document_detail/479922.html) operation to query the task status. This ensures a successful deletion.
     *  *
     * @param DeleteBatchRequest $request DeleteBatchRequest
     *
     * @return DeleteBatchResponse DeleteBatchResponse
     */
    public function deleteBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBatchWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the binding between a dataset and an Object Storage Service (OSS) bucket.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   If you delete a binding, new changes in the OSS bucket are not synchronized to the dataset. Exercise caution when you perform this operation.
     *  *
     * @param DeleteBindingRequest $request DeleteBindingRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBindingResponse DeleteBindingResponse
     */
    public function deleteBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->URI)) {
            $query['URI'] = $request->URI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBinding',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the binding between a dataset and an Object Storage Service (OSS) bucket.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   If you delete a binding, new changes in the OSS bucket are not synchronized to the dataset. Exercise caution when you perform this operation.
     *  *
     * @param DeleteBindingRequest $request DeleteBindingRequest
     *
     * @return DeleteBindingResponse DeleteBindingResponse
     */
    public function deleteBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBindingWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a dataset.
     *  *
     * @description *   Before you delete a dataset, make sure that you have deleted all indexes in the dataset. For more information about how to delete indexes, see [DeleteFileMeta](https://help.aliyun.com/document_detail/478172.html) and [BatchDeleteFileMeta](https://help.aliyun.com/document_detail/478173.html).
     * *   Before you [delete a dataset](https://help.aliyun.com/document_detail/478160.html), make sure that you have deleted all bindings between the dataset and Object Storage Service (OSS) buckets. For more information about how to delete a binding, see [DeleteBinding](https://help.aliyun.com/document_detail/478205.html). The [DeleteBinding](https://help.aliyun.com/document_detail/478205.html) operation does not delete an index that is manually created, even if you set the `Cleanup` parameter to `true`. To delete indexes that are manually created, you must call the [DeleteFileMeta](https://help.aliyun.com/document_detail/478172.html) or [BatchDeleteFileMeta](https://help.aliyun.com/document_detail/478173.html) operation. For more information about the differences between automatically and manually created indexes, see [Create a metadata index](https://help.aliyun.com/document_detail/478166.html).
     *  *
     * @param DeleteDatasetRequest $request DeleteDatasetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatasetResponse DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataset',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a dataset.
     *  *
     * @description *   Before you delete a dataset, make sure that you have deleted all indexes in the dataset. For more information about how to delete indexes, see [DeleteFileMeta](https://help.aliyun.com/document_detail/478172.html) and [BatchDeleteFileMeta](https://help.aliyun.com/document_detail/478173.html).
     * *   Before you [delete a dataset](https://help.aliyun.com/document_detail/478160.html), make sure that you have deleted all bindings between the dataset and Object Storage Service (OSS) buckets. For more information about how to delete a binding, see [DeleteBinding](https://help.aliyun.com/document_detail/478205.html). The [DeleteBinding](https://help.aliyun.com/document_detail/478205.html) operation does not delete an index that is manually created, even if you set the `Cleanup` parameter to `true`. To delete indexes that are manually created, you must call the [DeleteFileMeta](https://help.aliyun.com/document_detail/478172.html) or [BatchDeleteFileMeta](https://help.aliyun.com/document_detail/478173.html) operation. For more information about the differences between automatically and manually created indexes, see [Create a metadata index](https://help.aliyun.com/document_detail/478166.html).
     *  *
     * @param DeleteDatasetRequest $request DeleteDatasetRequest
     *
     * @return DeleteDatasetResponse DeleteDatasetResponse
     */
    public function deleteDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary Removes the metadata of a file from a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   A successful deletion message is returned regardless of whether the metadata of the file exists in the dataset.
     * >
     * *   The objects stored in Object Storage Service (OSS) or Photo and Drive Service are **not** deleted if you delete metadata from a dataset. If you want to delete the file, call the corresponding operations of OSS and Photo and Drive Service.
     * *   When you delete file metadata, the corresponding face clustering group information and story (if any) are changed, but the spatiotemporal clustering is not changed.
     *  *
     * @param DeleteFileMetaRequest $request DeleteFileMetaRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFileMetaResponse DeleteFileMetaResponse
     */
    public function deleteFileMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->URI)) {
            $query['URI'] = $request->URI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFileMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes the metadata of a file from a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   A successful deletion message is returned regardless of whether the metadata of the file exists in the dataset.
     * >
     * *   The objects stored in Object Storage Service (OSS) or Photo and Drive Service are **not** deleted if you delete metadata from a dataset. If you want to delete the file, call the corresponding operations of OSS and Photo and Drive Service.
     * *   When you delete file metadata, the corresponding face clustering group information and story (if any) are changed, but the spatiotemporal clustering is not changed.
     *  *
     * @param DeleteFileMetaRequest $request DeleteFileMetaRequest
     *
     * @return DeleteFileMetaResponse DeleteFileMetaResponse
     */
    public function deleteFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a spatiotemporal cluster.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   Before you call this operation, you must call the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to perform spatiotemporal clustering.
     * *   A successful deletion is returned regardless of whether a spatiotemporal clustering group ID exists.
     *  *
     * @param DeleteLocationDateClusterRequest $request DeleteLocationDateClusterRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLocationDateClusterResponse DeleteLocationDateClusterResponse
     */
    public function deleteLocationDateClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $body = [];
        if (!Utils::isUnset($request->objectId)) {
            $body['ObjectId'] = $request->objectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLocationDateCluster',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLocationDateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a spatiotemporal cluster.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   Before you call this operation, you must call the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to perform spatiotemporal clustering.
     * *   A successful deletion is returned regardless of whether a spatiotemporal clustering group ID exists.
     *  *
     * @param DeleteLocationDateClusterRequest $request DeleteLocationDateClusterRequest
     *
     * @return DeleteLocationDateClusterResponse DeleteLocationDateClusterResponse
     */
    public function deleteLocationDateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLocationDateClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a project.
     *  *
     * @description *   Before you delete a project, make sure that all resources in the project, such as datasets, bindings, batch processing tasks, and triggers, are deleted. For more information, see [DeleteDataset](https://help.aliyun.com/document_detail/478164.html), [DeleteBatch](https://help.aliyun.com/document_detail/479918.html), and [DeleteTrigger](https://help.aliyun.com/document_detail/479915.html).
     * *   After a project is deleted, all resources used by the project are recycled, and all related data is lost and cannot be recovered.
     *  *
     * @param DeleteProjectRequest $request DeleteProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a project.
     *  *
     * @description *   Before you delete a project, make sure that all resources in the project, such as datasets, bindings, batch processing tasks, and triggers, are deleted. For more information, see [DeleteDataset](https://help.aliyun.com/document_detail/478164.html), [DeleteBatch](https://help.aliyun.com/document_detail/479918.html), and [DeleteTrigger](https://help.aliyun.com/document_detail/479915.html).
     * *   After a project is deleted, all resources used by the project are recycled, and all related data is lost and cannot be recovered.
     *  *
     * @param DeleteProjectRequest $request DeleteProjectRequest
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a story.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *  *
     * @param DeleteStoryRequest $request DeleteStoryRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStoryResponse DeleteStoryResponse
     */
    public function deleteStoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStory',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a story.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *  *
     * @param DeleteStoryRequest $request DeleteStoryRequest
     *
     * @return DeleteStoryResponse DeleteStoryResponse
     */
    public function deleteStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStoryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a trigger.
     *  *
     * @description You can delete a trigger only if the trigger is in one of the following states: Ready, Failed, Suspended, and Succeeded. You cannot delete a trigger that is in the Running state.
     *  *
     * @param DeleteTriggerRequest $request DeleteTriggerRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTriggerResponse DeleteTriggerResponse
     */
    public function deleteTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrigger',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a trigger.
     *  *
     * @description You can delete a trigger only if the trigger is in one of the following states: Ready, Failed, Suspended, and Succeeded. You cannot delete a trigger that is in the Running state.
     *  *
     * @param DeleteTriggerRequest $request DeleteTriggerRequest
     *
     * @return DeleteTriggerResponse DeleteTriggerResponse
     */
    public function deleteTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds an Object Storage Service (OSS) bucket from the corresponding project.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that the project is bound to a bucket. For more information, see [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html).
     *  *
     * @param DetachOSSBucketRequest $request DetachOSSBucketRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachOSSBucketResponse DetachOSSBucketResponse
     */
    public function detachOSSBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->OSSBucket)) {
            $query['OSSBucket'] = $request->OSSBucket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachOSSBucket',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachOSSBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unbinds an Object Storage Service (OSS) bucket from the corresponding project.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that the project is bound to a bucket. For more information, see [AttachOSSBucket](https://help.aliyun.com/document_detail/478206.html).
     *  *
     * @param DetachOSSBucketRequest $request DetachOSSBucketRequest
     *
     * @return DetachOSSBucketResponse DetachOSSBucketResponse
     */
    public function detachOSSBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachOSSBucketWithOptions($request, $runtime);
    }

    /**
     * @summary Detects human body information, such as the confidence level and body bounding box, in an image.
     *  *
     * @description *   Before you call this operation, make sure that an Intelligent Media Management (IMM) project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageBodiesRequest $tmpReq  DetectImageBodiesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectImageBodiesResponse DetectImageBodiesResponse
     */
    public function detectImageBodiesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageBodiesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sensitivity)) {
            $query['Sensitivity'] = $request->sensitivity;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageBodies',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageBodiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects human body information, such as the confidence level and body bounding box, in an image.
     *  *
     * @description *   Before you call this operation, make sure that an Intelligent Media Management (IMM) project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageBodiesRequest $request DetectImageBodiesRequest
     *
     * @return DetectImageBodiesResponse DetectImageBodiesResponse
     */
    public function detectImageBodies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageBodiesWithOptions($request, $runtime);
    }

    /**
     * @summary Detects the outline data, attributes, and license plate information of vehicles in an image. The vehicle attributes include the vehicle color (CarColor) and vehicle type (CarType). The license plate information includes the recognition content (Content) and plate frame (Boundary).
     *  *
     * @description *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageCarsRequest $tmpReq  DetectImageCarsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectImageCarsResponse DetectImageCarsResponse
     */
    public function detectImageCarsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageCarsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageCars',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageCarsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects the outline data, attributes, and license plate information of vehicles in an image. The vehicle attributes include the vehicle color (CarColor) and vehicle type (CarType). The license plate information includes the recognition content (Content) and plate frame (Boundary).
     *  *
     * @description *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageCarsRequest $request DetectImageCarsRequest
     *
     * @return DetectImageCarsResponse DetectImageCarsResponse
     */
    public function detectImageCars($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageCarsWithOptions($request, $runtime);
    }

    /**
     * @summary Detects barcodes and QR codes in an image.
     *  *
     * @description *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageCodesRequest $tmpReq  DetectImageCodesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectImageCodesResponse DetectImageCodesResponse
     */
    public function detectImageCodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageCodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageCodes',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageCodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects barcodes and QR codes in an image.
     *  *
     * @description *   For information about the image encoding formats supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageCodesRequest $request DetectImageCodesRequest
     *
     * @return DetectImageCodesResponse DetectImageCodesResponse
     */
    public function detectImageCodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageCodesWithOptions($request, $runtime);
    }

    /**
     * @summary Detects the cropping area that produces the optimal visual effect based on a given image ratio by using AI model capabilities.
     *  *
     * @param DetectImageCroppingRequest $tmpReq  DetectImageCroppingRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectImageCroppingResponse DetectImageCroppingResponse
     */
    public function detectImageCroppingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageCroppingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aspectRatios)) {
            $query['AspectRatios'] = $request->aspectRatios;
        }
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageCropping',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageCroppingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects the cropping area that produces the optimal visual effect based on a given image ratio by using AI model capabilities.
     *  *
     * @param DetectImageCroppingRequest $request DetectImageCroppingRequest
     *
     * @return DetectImageCroppingResponse DetectImageCroppingResponse
     */
    public function detectImageCropping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageCroppingWithOptions($request, $runtime);
    }

    /**
     * @summary Detects faces from an image, including face boundary information, attributes, and quality. The boundary information includes the distance from the y-coordinate of the vertex to the top edge (Top), distance from the x-coordinate of the vertex to the left edge (Left), height (Height), and width (Width). Face attributes include the age (Age), age standard deviation (AgeSD), gender (Gender), emotion (Emotion), mouth opening (Mouth), beard (Beard), hat wearing (Hat), mask wearing (Mask), glasses wearing (Glasses), head orientation (HeadPose), attractiveness (Attractive), and confidence levels for preceding attributes. Quality information includes the face quality score (FaceQuality) and face resolution (Sharpness).
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageFacesRequest $tmpReq  DetectImageFacesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectImageFacesResponse DetectImageFacesResponse
     */
    public function detectImageFacesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageFacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageFaces',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects faces from an image, including face boundary information, attributes, and quality. The boundary information includes the distance from the y-coordinate of the vertex to the top edge (Top), distance from the x-coordinate of the vertex to the left edge (Left), height (Height), and width (Width). Face attributes include the age (Age), age standard deviation (AgeSD), gender (Gender), emotion (Emotion), mouth opening (Mouth), beard (Beard), hat wearing (Hat), mask wearing (Mask), glasses wearing (Glasses), head orientation (HeadPose), attractiveness (Attractive), and confidence levels for preceding attributes. Quality information includes the face quality score (FaceQuality) and face resolution (Sharpness).
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageFacesRequest $request DetectImageFacesRequest
     *
     * @return DetectImageFacesResponse DetectImageFacesResponse
     */
    public function detectImageFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageFacesWithOptions($request, $runtime);
    }

    /**
     * @summary Detects scene, object, and event information in an image. Scene information includes natural landscapes, daily life, and disasters. Event information includes talent shows, office events, performances, and production events. Object information includes tableware, electronics, furniture, and transportation. The DetectImageLabels operation supports more than 30 different categories and thousands of labels.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Make sure that an IMM [project](https://help.aliyun.com/document_detail/478273.html) is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   For more information about the features of this operation, see [Image label detection](https://help.aliyun.com/document_detail/477179.html).
     * *   For more information about the input images supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageLabelsRequest $tmpReq  DetectImageLabelsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectImageLabelsResponse DetectImageLabelsResponse
     */
    public function detectImageLabelsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageLabelsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageLabels',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects scene, object, and event information in an image. Scene information includes natural landscapes, daily life, and disasters. Event information includes talent shows, office events, performances, and production events. Object information includes tableware, electronics, furniture, and transportation. The DetectImageLabels operation supports more than 30 different categories and thousands of labels.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Make sure that an IMM [project](https://help.aliyun.com/document_detail/478273.html) is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   For more information about the features of this operation, see [Image label detection](https://help.aliyun.com/document_detail/477179.html).
     * *   For more information about the input images supported by this operation, see [Limits on images](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageLabelsRequest $request DetectImageLabelsRequest
     *
     * @return DetectImageLabelsResponse DetectImageLabelsResponse
     */
    public function detectImageLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageLabelsWithOptions($request, $runtime);
    }

    /**
     * @summary Calculates the aesthetics quality score of an image based on metrics such as the composition, brightness, contrast, color, and resolution. The operation returns a score within the range from 0 to 1. A higher score indicates better image quality.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478273.html).[](~~478152~~)
     * *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageScoreRequest $tmpReq  DetectImageScoreRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectImageScoreResponse DetectImageScoreResponse
     */
    public function detectImageScoreWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageScoreShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageScore',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageScoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Calculates the aesthetics quality score of an image based on metrics such as the composition, brightness, contrast, color, and resolution. The operation returns a score within the range from 0 to 1. A higher score indicates better image quality.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478273.html).[](~~478152~~)
     * *   For information about the image encoding formats supported by this operation, see [Limits](https://help.aliyun.com/document_detail/475569.html).
     *  *
     * @param DetectImageScoreRequest $request DetectImageScoreRequest
     *
     * @return DetectImageScoreResponse DetectImageScoreResponse
     */
    public function detectImageScore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageScoreWithOptions($request, $runtime);
    }

    /**
     * @summary Recognizes and extracts text content from an image.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The size of the image cannot exceed 20 MB.
     * *   The shortest side of the image is not less than 20 px, and the longest side is not more than 30,000 px.
     * *   The aspect ratio of the image is less than 1:2.
     * *   We recommend that you do not use an image that is smaller than 15 px × 15 px in size. Otherwise, the recognition rate is low.
     *  *
     * @param DetectImageTextsRequest $tmpReq  DetectImageTextsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectImageTextsResponse DetectImageTextsResponse
     */
    public function detectImageTextsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageTextsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageTexts',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageTextsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Recognizes and extracts text content from an image.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The size of the image cannot exceed 20 MB.
     * *   The shortest side of the image is not less than 20 px, and the longest side is not more than 30,000 px.
     * *   The aspect ratio of the image is less than 1:2.
     * *   We recommend that you do not use an image that is smaller than 15 px × 15 px in size. Otherwise, the recognition rate is low.
     *  *
     * @param DetectImageTextsRequest $request DetectImageTextsRequest
     *
     * @return DetectImageTextsResponse DetectImageTextsResponse
     */
    public function detectImageTexts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageTextsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries media metadata, including the media format and stream information.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *  *
     * @param DetectMediaMetaRequest $tmpReq  DetectMediaMetaRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectMediaMetaResponse DetectMediaMetaResponse
     */
    public function detectMediaMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectMediaMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectMediaMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectMediaMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries media metadata, including the media format and stream information.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478152.html).
     *  *
     * @param DetectMediaMetaRequest $request DetectMediaMetaRequest
     *
     * @return DetectMediaMetaResponse DetectMediaMetaResponse
     */
    public function detectMediaMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectMediaMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Detects whether specified text contains anomalies, such as pornography, advertisements, excessive junk content, politically sensitive content, and abuse.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * >  The text compliance detection feature only supports Chinese characters.
     *  *
     * @param DetectTextAnomalyRequest $request DetectTextAnomalyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectTextAnomalyResponse DetectTextAnomalyResponse
     */
    public function detectTextAnomalyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectTextAnomaly',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectTextAnomalyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects whether specified text contains anomalies, such as pornography, advertisements, excessive junk content, politically sensitive content, and abuse.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * >  The text compliance detection feature only supports Chinese characters.
     *  *
     * @param DetectTextAnomalyRequest $request DetectTextAnomalyRequest
     *
     * @return DetectTextAnomalyResponse DetectTextAnomalyResponse
     */
    public function detectTextAnomaly($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectTextAnomalyWithOptions($request, $runtime);
    }

    /**
     * @summary Embeds specific textual information into an image as watermarks. These watermarks are visually imperceptible and do not affect the aesthetics of the image or the integrity of the original data. The watermarks can be extracted by using the CreateDecodeBlindWatermarkTask operation.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of Intelligent Media Management (IMM).
     * *   Make sure that an IMM project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   You can embed only text as blind watermarks to an image.
     * *   The format of the output image is the same as that of the input image.
     * *   The watermarks can still be extracted even if attacks, such as compression, scaling, cropping, rotation, and color transformation, are performed on the image.
     * *   Pure black and white images and images with low resolution (roughly less than 200 px × 200 px,) are not supported.
     *  *
     * @param EncodeBlindWatermarkRequest $request EncodeBlindWatermarkRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return EncodeBlindWatermarkResponse EncodeBlindWatermarkResponse
     */
    public function encodeBlindWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->imageQuality)) {
            $query['ImageQuality'] = $request->imageQuality;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->strengthLevel)) {
            $query['StrengthLevel'] = $request->strengthLevel;
        }
        if (!Utils::isUnset($request->targetURI)) {
            $query['TargetURI'] = $request->targetURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EncodeBlindWatermark',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EncodeBlindWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Embeds specific textual information into an image as watermarks. These watermarks are visually imperceptible and do not affect the aesthetics of the image or the integrity of the original data. The watermarks can be extracted by using the CreateDecodeBlindWatermarkTask operation.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the billing of Intelligent Media Management (IMM).
     * *   Make sure that an IMM project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   You can embed only text as blind watermarks to an image.
     * *   The format of the output image is the same as that of the input image.
     * *   The watermarks can still be extracted even if attacks, such as compression, scaling, cropping, rotation, and color transformation, are performed on the image.
     * *   Pure black and white images and images with low resolution (roughly less than 200 px × 200 px,) are not supported.
     *  *
     * @param EncodeBlindWatermarkRequest $request EncodeBlindWatermarkRequest
     *
     * @return EncodeBlindWatermarkResponse EncodeBlindWatermarkResponse
     */
    public function encodeBlindWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encodeBlindWatermarkWithOptions($request, $runtime);
    }

    /**
     * @summary Extracts the text from the document body.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).**
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478273.html).[](~~478152~~)
     * *   The following document formats are supported: Word, Excel, PPT, PDF, and TXT.
     * *   The document cannot exceed 200 MB in size. The size of the extracted text cannot exceed 2 MB in size (approximately 1.2 million letters).
     * >  If the format of the document is complex or the document body is too large, a timeout error may occur. In this case, we recommend that you call the CreateOfficeConversionTask operation to convert the document to the TXT format before you call the ExtractDocumentText operation.
     *  *
     * @param ExtractDocumentTextRequest $tmpReq  ExtractDocumentTextRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ExtractDocumentTextResponse ExtractDocumentTextResponse
     */
    public function extractDocumentTextWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExtractDocumentTextShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExtractDocumentText',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExtractDocumentTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Extracts the text from the document body.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).**
     * *   Make sure that the specified project exists in the current region. For more information, see [Project management](https://help.aliyun.com/document_detail/478273.html).[](~~478152~~)
     * *   The following document formats are supported: Word, Excel, PPT, PDF, and TXT.
     * *   The document cannot exceed 200 MB in size. The size of the extracted text cannot exceed 2 MB in size (approximately 1.2 million letters).
     * >  If the format of the document is complex or the document body is too large, a timeout error may occur. In this case, we recommend that you call the CreateOfficeConversionTask operation to convert the document to the TXT format before you call the ExtractDocumentText operation.
     *  *
     * @param ExtractDocumentTextRequest $request ExtractDocumentTextRequest
     *
     * @return ExtractDocumentTextResponse ExtractDocumentTextResponse
     */
    public function extractDocumentText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractDocumentTextWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the extracted file metadata, including the file name, labels, path, custom tags, text, and other fields. If the value of a metadata field of a file matches the specified string, the metadata of the file is returned.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 88490020073) and share your questions with us.
     * *   For information about the fields that you can use as query conditions, see [Supported fields and operators](https://help.aliyun.com/document_detail/2743991.html).
     *  *
     * @param FuzzyQueryRequest $tmpReq  FuzzyQueryRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return FuzzyQueryResponse FuzzyQueryResponse
     */
    public function fuzzyQueryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FuzzyQueryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->withFields)) {
            $request->withFieldsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->withFieldsShrink)) {
            $query['WithFields'] = $request->withFieldsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FuzzyQuery',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FuzzyQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the extracted file metadata, including the file name, labels, path, custom tags, text, and other fields. If the value of a metadata field of a file matches the specified string, the metadata of the file is returned.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 88490020073) and share your questions with us.
     * *   For information about the fields that you can use as query conditions, see [Supported fields and operators](https://help.aliyun.com/document_detail/2743991.html).
     *  *
     * @param FuzzyQueryRequest $request FuzzyQueryRequest
     *
     * @return FuzzyQueryResponse FuzzyQueryResponse
     */
    public function fuzzyQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fuzzyQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a live transcoding playlist and converts video files into M3U8 files. After a playlist is generated, the videos in the playlist are immediately played and the video files are transcoded based on the playback progress. Compared with offline transcoding, online transcoding significantly reduces the time spent in waiting for the videos to be transcoded and reduces transcoding and storage costs.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).**
     * *   Make sure that the project that you want to use is available in the current region. For more information, see [Project Management](https://help.aliyun.com/document_detail/478152.html).
     * *   By default, you can call this operation to process only one video, audio, or subtitle track. You can specify the number of the video, audio, or subtitle tracks that you want to process.
     * *   You can call this operation to generate a media playlist and a master playlist. For more information, see the parameter description.
     * *   This operation is a synchronous operation. Synchronous or asynchronous transcoding is triggered only during playback or pre-transcoding. You can configure the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to obtain the transcoding task result.
     * *   For information about the feature description of this operation, see [Live transcoding](https://help.aliyun.com/document_detail/477192.html).
     * *   The data processing capability of Object Storage Service (OSS) also provides the playlist generation feature. However, this feature can generate only a media playlist, and related parameters are simplified.
     *  *
     * @param GenerateVideoPlaylistRequest $tmpReq  GenerateVideoPlaylistRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateVideoPlaylistResponse GenerateVideoPlaylistResponse
     */
    public function generateVideoPlaylistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateVideoPlaylistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceSubtitles)) {
            $request->sourceSubtitlesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceSubtitles, 'SourceSubtitles', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        if (!Utils::isUnset($tmpReq->targets)) {
            $request->targetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->targets, 'Targets', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->masterURI)) {
            $query['MasterURI'] = $request->masterURI;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->overwritePolicy)) {
            $query['OverwritePolicy'] = $request->overwritePolicy;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceDuration)) {
            $query['SourceDuration'] = $request->sourceDuration;
        }
        if (!Utils::isUnset($request->sourceStartTime)) {
            $query['SourceStartTime'] = $request->sourceStartTime;
        }
        if (!Utils::isUnset($request->sourceSubtitlesShrink)) {
            $query['SourceSubtitles'] = $request->sourceSubtitlesShrink;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->targetsShrink)) {
            $query['Targets'] = $request->targetsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateVideoPlaylist',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateVideoPlaylistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a live transcoding playlist and converts video files into M3U8 files. After a playlist is generated, the videos in the playlist are immediately played and the video files are transcoded based on the playback progress. Compared with offline transcoding, online transcoding significantly reduces the time spent in waiting for the videos to be transcoded and reduces transcoding and storage costs.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).**
     * *   Make sure that the project that you want to use is available in the current region. For more information, see [Project Management](https://help.aliyun.com/document_detail/478152.html).
     * *   By default, you can call this operation to process only one video, audio, or subtitle track. You can specify the number of the video, audio, or subtitle tracks that you want to process.
     * *   You can call this operation to generate a media playlist and a master playlist. For more information, see the parameter description.
     * *   This operation is a synchronous operation. Synchronous or asynchronous transcoding is triggered only during playback or pre-transcoding. You can configure the [Notification](https://help.aliyun.com/document_detail/2743997.html) parameter to obtain the transcoding task result.
     * *   For information about the feature description of this operation, see [Live transcoding](https://help.aliyun.com/document_detail/477192.html).
     * *   The data processing capability of Object Storage Service (OSS) also provides the playlist generation feature. However, this feature can generate only a media playlist, and related parameters are simplified.
     *  *
     * @param GenerateVideoPlaylistRequest $request GenerateVideoPlaylistRequest
     *
     * @return GenerateVideoPlaylistResponse GenerateVideoPlaylistResponse
     */
    public function generateVideoPlaylist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateVideoPlaylistWithOptions($request, $runtime);
    }

    /**
     * @summary Generates an access token for document preview or editing.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The operation generates an access token that is valid for 30 minutes and a refresh token that is valid for 1 day.
     * *   The returned expiration time is in UTC.
     * *   The operation supports the following input formats:
     *     *   Word files: .doc, .docx, .txt, .dot, .wps, .wpt, .dotx, .docm, .dotm, and .rtf
     *     *   Presentation files: .ppt, .pptx, .pptm, .ppsx, .ppsm, .pps, .potx, .potm, .dpt, and .dps
     *     *   Spreadsheet documents: .et, .xls, .xlt, .xlsx, .xlsm, .xltx, .xltm, and .csv
     *     *   PDF files: .pdf
     * *   The operation supports an input document that is up to 200 MB in size.
     * *   The operation supports an input document that contains up to 5,000 pages.
     * *   For a project created before December 1, 2023, you are charged for previewing or editing a document in the project based on the number of times the document is opened. For a project created on or after December 1, 2023, you are charged based on the number of API operation calls made for previewing or editing a document. If you want to switch to API call-based billing for document previewing and editing, use a project created on or after December 1, 2023. In API call-based billing, one API call allows only one user to use the feature. If multiple users use the information returned by the API call, only the last user has access to the document and the access permissions of other users are revoked.
     * *   You can use the NotifyTopicName parameter to specify a Simple Message Queue (SMQ) topic in the same region as the IMM project for getting notified of file save operations. For more information, see [Use queues](https://help.aliyun.com/document_detail/32449.html). For more information about the JSON example of the Message field, see [WebOffice message example](https://help.aliyun.com/document_detail/2743999.html).
     * >  To manage multiple versions of the document, you must enable versioning for the bucket that stores the document and set the History parameter to true.
     *  *
     * @param GenerateWebofficeTokenRequest $tmpReq  GenerateWebofficeTokenRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateWebofficeTokenResponse GenerateWebofficeTokenResponse
     */
    public function generateWebofficeTokenWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateWebofficeTokenShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        if (!Utils::isUnset($tmpReq->permission)) {
            $request->permissionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->permission, 'Permission', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }
        if (!Utils::isUnset($tmpReq->watermark)) {
            $request->watermarkShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->watermark, 'Watermark', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cachePreview)) {
            $query['CachePreview'] = $request->cachePreview;
        }
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->externalUploaded)) {
            $query['ExternalUploaded'] = $request->externalUploaded;
        }
        if (!Utils::isUnset($request->filename)) {
            $query['Filename'] = $request->filename;
        }
        if (!Utils::isUnset($request->hidecmb)) {
            $query['Hidecmb'] = $request->hidecmb;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->permissionShrink)) {
            $query['Permission'] = $request->permissionShrink;
        }
        if (!Utils::isUnset($request->previewPages)) {
            $query['PreviewPages'] = $request->previewPages;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->referer)) {
            $query['Referer'] = $request->referer;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        if (!Utils::isUnset($request->userShrink)) {
            $query['User'] = $request->userShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->watermarkShrink)) {
            $query['Watermark'] = $request->watermarkShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateWebofficeToken',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateWebofficeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates an access token for document preview or editing.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The operation generates an access token that is valid for 30 minutes and a refresh token that is valid for 1 day.
     * *   The returned expiration time is in UTC.
     * *   The operation supports the following input formats:
     *     *   Word files: .doc, .docx, .txt, .dot, .wps, .wpt, .dotx, .docm, .dotm, and .rtf
     *     *   Presentation files: .ppt, .pptx, .pptm, .ppsx, .ppsm, .pps, .potx, .potm, .dpt, and .dps
     *     *   Spreadsheet documents: .et, .xls, .xlt, .xlsx, .xlsm, .xltx, .xltm, and .csv
     *     *   PDF files: .pdf
     * *   The operation supports an input document that is up to 200 MB in size.
     * *   The operation supports an input document that contains up to 5,000 pages.
     * *   For a project created before December 1, 2023, you are charged for previewing or editing a document in the project based on the number of times the document is opened. For a project created on or after December 1, 2023, you are charged based on the number of API operation calls made for previewing or editing a document. If you want to switch to API call-based billing for document previewing and editing, use a project created on or after December 1, 2023. In API call-based billing, one API call allows only one user to use the feature. If multiple users use the information returned by the API call, only the last user has access to the document and the access permissions of other users are revoked.
     * *   You can use the NotifyTopicName parameter to specify a Simple Message Queue (SMQ) topic in the same region as the IMM project for getting notified of file save operations. For more information, see [Use queues](https://help.aliyun.com/document_detail/32449.html). For more information about the JSON example of the Message field, see [WebOffice message example](https://help.aliyun.com/document_detail/2743999.html).
     * >  To manage multiple versions of the document, you must enable versioning for the bucket that stores the document and set the History parameter to true.
     *  *
     * @param GenerateWebofficeTokenRequest $request GenerateWebofficeTokenRequest
     *
     * @return GenerateWebofficeTokenResponse GenerateWebofficeTokenResponse
     */
    public function generateWebofficeToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateWebofficeTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a batch processing task.
     *  *
     * @param GetBatchRequest $request GetBatchRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBatchResponse GetBatchResponse
     */
    public function getBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBatch',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a batch processing task.
     *  *
     * @param GetBatchRequest $request GetBatchRequest
     *
     * @return GetBatchResponse GetBatchResponse
     */
    public function getBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the binding relationship between a specific dataset and an Object Storage Service (OSS) bucket.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * *   Make sure that the binding relationship that you want to query exists. For information about how to create a binding relationship, see [CreateBinding](https://help.aliyun.com/document_detail/478202.html).
     *  *
     * @param GetBindingRequest $request GetBindingRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBindingResponse GetBindingResponse
     */
    public function getBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->URI)) {
            $query['URI'] = $request->URI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBinding',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the binding relationship between a specific dataset and an Object Storage Service (OSS) bucket.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * *   Make sure that the binding relationship that you want to query exists. For information about how to create a binding relationship, see [CreateBinding](https://help.aliyun.com/document_detail/478202.html).
     *  *
     * @param GetBindingRequest $request GetBindingRequest
     *
     * @return GetBindingResponse GetBindingResponse
     */
    public function getBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBindingWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI GetDRMLicense is deprecated
     *  *
     * @summary drmlicense获取
     *  *
     * Deprecated
     *
     * @param GetDRMLicenseRequest $request GetDRMLicenseRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDRMLicenseResponse GetDRMLicenseResponse
     */
    public function getDRMLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyId)) {
            $query['KeyId'] = $request->keyId;
        }
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->protectionSystem)) {
            $query['ProtectionSystem'] = $request->protectionSystem;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDRMLicense',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDRMLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetDRMLicense is deprecated
     *  *
     * @summary drmlicense获取
     *  *
     * Deprecated
     *
     * @param GetDRMLicenseRequest $request GetDRMLicenseRequest
     *
     * @return GetDRMLicenseResponse GetDRMLicenseResponse
     */
    public function getDRMLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDRMLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The GetDataset operation supports real-time retrieval of file statistics. You can specify WithStatistics to enable real-time retrieval of file statistics.
     *  *
     * @param GetDatasetRequest $request GetDatasetRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatasetResponse GetDatasetResponse
     */
    public function getDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->withStatistics)) {
            $query['WithStatistics'] = $request->withStatistics;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataset',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   The GetDataset operation supports real-time retrieval of file statistics. You can specify WithStatistics to enable real-time retrieval of file statistics.
     *  *
     * @param GetDatasetRequest $request GetDatasetRequest
     *
     * @return GetDatasetResponse GetDatasetResponse
     */
    public function getDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the result of an invisible watermark parsing task.
     *  *
     * @description *   Before you call this operation, make sure that an Intelligent Media Management (IMM) project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   Before you call this operation, make sure that an invisible watermark task is created and the task ID is obtained.``
     *  *
     * @param GetDecodeBlindWatermarkResultRequest $request GetDecodeBlindWatermarkResultRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDecodeBlindWatermarkResultResponse GetDecodeBlindWatermarkResultResponse
     */
    public function getDecodeBlindWatermarkResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDecodeBlindWatermarkResult',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDecodeBlindWatermarkResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the result of an invisible watermark parsing task.
     *  *
     * @description *   Before you call this operation, make sure that an Intelligent Media Management (IMM) project is created. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   Before you call this operation, make sure that an invisible watermark task is created and the task ID is obtained.``
     *  *
     * @param GetDecodeBlindWatermarkResultRequest $request GetDecodeBlindWatermarkResultRequest
     *
     * @return GetDecodeBlindWatermarkResultResponse GetDecodeBlindWatermarkResultResponse
     */
    public function getDecodeBlindWatermarkResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDecodeBlindWatermarkResultWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains basic information about face clustering, including the creation time, number of images, and cover.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * *   Before you call this operation, make sure that a face clustering task is created to group all faces in a dataset. For information about how to create a face clustering task, see [CreateFigureClusteringTask](~~CreateFigureClusteringTask~~). For information about how to create a dataset, see [CreateDataset](~~CreateDataset~~).
     *  *
     * @param GetFigureClusterRequest $request GetFigureClusterRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFigureClusterResponse GetFigureClusterResponse
     */
    public function getFigureClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFigureCluster',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFigureClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains basic information about face clustering, including the creation time, number of images, and cover.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * *   Before you call this operation, make sure that a face clustering task is created to group all faces in a dataset. For information about how to create a face clustering task, see [CreateFigureClusteringTask](~~CreateFigureClusteringTask~~). For information about how to create a dataset, see [CreateDataset](~~CreateDataset~~).
     *  *
     * @param GetFigureClusterRequest $request GetFigureClusterRequest
     *
     * @return GetFigureClusterResponse GetFigureClusterResponse
     */
    public function getFigureCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFigureClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries metadata of a file whose metadata is indexed into the dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     *  *
     * @param GetFileMetaRequest $tmpReq  GetFileMetaRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFileMetaResponse GetFileMetaResponse
     */
    public function getFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetFileMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->withFields)) {
            $request->withFieldsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->URI)) {
            $query['URI'] = $request->URI;
        }
        if (!Utils::isUnset($request->withFieldsShrink)) {
            $query['WithFields'] = $request->withFieldsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFileMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries metadata of a file whose metadata is indexed into the dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   The sample response is provided for reference only. The metadata type and content in your response may differ based on factors such as the [workflow template configurations](https://help.aliyun.com/document_detail/466304.html). For any inquiries, join the DingTalk chat group (ID: 31690030817) and share your questions with us.
     *  *
     * @param GetFileMetaRequest $request GetFileMetaRequest
     *
     * @return GetFileMetaResponse GetFileMetaResponse
     */
    public function getFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries an image compliance detection task.
     *  *
     * @param GetImageModerationResultRequest $request GetImageModerationResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageModerationResultResponse GetImageModerationResultResponse
     */
    public function getImageModerationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImageModerationResult',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries an image compliance detection task.
     *  *
     * @param GetImageModerationResultRequest $request GetImageModerationResultRequest
     *
     * @return GetImageModerationResultResponse GetImageModerationResultResponse
     */
    public function getImageModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageModerationResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the name of the project bound to an Object Storage Service (OSS) bucket.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * *   Before you call this operation, make sure that [the project whose name you want to query is bound to the specified OSS bucket](https://help.aliyun.com/document_detail/478206.html).
     *  *
     * @param GetOSSBucketAttachmentRequest $request GetOSSBucketAttachmentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOSSBucketAttachmentResponse GetOSSBucketAttachmentResponse
     */
    public function getOSSBucketAttachmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->OSSBucket)) {
            $query['OSSBucket'] = $request->OSSBucket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOSSBucketAttachment',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOSSBucketAttachmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the name of the project bound to an Object Storage Service (OSS) bucket.
     *  *
     * @description *   **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**
     * *   Before you call this operation, make sure that [the project whose name you want to query is bound to the specified OSS bucket](https://help.aliyun.com/document_detail/478206.html).
     *  *
     * @param GetOSSBucketAttachmentRequest $request GetOSSBucketAttachmentRequest
     *
     * @return GetOSSBucketAttachmentResponse GetOSSBucketAttachmentResponse
     */
    public function getOSSBucketAttachment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOSSBucketAttachmentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the basic information, datasets, and file statistics of a project.
     *  *
     * @description When you call this operation, you can enable the real-time retrieval of file statistics based on your business requirements. For more information, see the "Request parameters" section of this topic.
     *  *
     * @param GetProjectRequest $request GetProjectRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->withStatistics)) {
            $query['WithStatistics'] = $request->withStatistics;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the basic information, datasets, and file statistics of a project.
     *  *
     * @description When you call this operation, you can enable the real-time retrieval of file statistics based on your business requirements. For more information, see the "Request parameters" section of this topic.
     *  *
     * @param GetProjectRequest $request GetProjectRequest
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a story.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *  *
     * @param GetStoryRequest $request GetStoryRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStoryResponse GetStoryResponse
     */
    public function getStoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStory',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a story.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *  *
     * @param GetStoryRequest $request GetStoryRequest
     *
     * @return GetStoryResponse GetStoryResponse
     */
    public function getStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about an asynchronous task. Intelligent Media Management (IMM) has multiple asynchronous data processing capabilities, each of which has its own operation for creating tasks. For example, you can call the CreateFigureClusteringTask operation to create a face clustering task and the CreateFileCompressionTask operation to create a file compression task. The GetTask operation is a general operation. You can call this operation to query information about asynchronous tasks by task ID or type.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.
     *  *
     * @param GetTaskRequest $request GetTaskRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->requestDefinition)) {
            $query['RequestDefinition'] = $request->requestDefinition;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about an asynchronous task. Intelligent Media Management (IMM) has multiple asynchronous data processing capabilities, each of which has its own operation for creating tasks. For example, you can call the CreateFigureClusteringTask operation to create a face clustering task and the CreateFileCompressionTask operation to create a file compression task. The GetTask operation is a general operation. You can call this operation to query information about asynchronous tasks by task ID or type.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.
     *  *
     * @param GetTaskRequest $request GetTaskRequest
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a trigger.
     *  *
     * @param GetTriggerRequest $request GetTriggerRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTriggerResponse GetTriggerResponse
     */
    public function getTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrigger',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a trigger.
     *  *
     * @param GetTriggerRequest $request GetTriggerRequest
     *
     * @return GetTriggerResponse GetTriggerResponse
     */
    public function getTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the results of a video label detection task.
     *  *
     * @description *   Before you call this operation, make sure that a [project](https://help.aliyun.com/document_detail/478273.html) is created on Intelligent Media Management (IMM). For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   Before you call this operation, make sure that a video label detection task is created and the `TaskId` of the task is obtained. For more information, see [CreateVideoLabelClassificationTask](https://help.aliyun.com/document_detail/478223.html).
     *  *
     * @param GetVideoLabelClassificationResultRequest $request GetVideoLabelClassificationResultRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoLabelClassificationResultResponse GetVideoLabelClassificationResultResponse
     */
    public function getVideoLabelClassificationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoLabelClassificationResult',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoLabelClassificationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the results of a video label detection task.
     *  *
     * @description *   Before you call this operation, make sure that a [project](https://help.aliyun.com/document_detail/478273.html) is created on Intelligent Media Management (IMM). For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     * *   Before you call this operation, make sure that a video label detection task is created and the `TaskId` of the task is obtained. For more information, see [CreateVideoLabelClassificationTask](https://help.aliyun.com/document_detail/478223.html).
     *  *
     * @param GetVideoLabelClassificationResultRequest $request GetVideoLabelClassificationResultRequest
     *
     * @return GetVideoLabelClassificationResultResponse GetVideoLabelClassificationResultResponse
     */
    public function getVideoLabelClassificationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoLabelClassificationResultWithOptions($request, $runtime);
    }

    /**
     * @summary 获取视频审核任务结果
     *  *
     * @param GetVideoModerationResultRequest $request GetVideoModerationResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoModerationResultResponse GetVideoModerationResultResponse
     */
    public function getVideoModerationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoModerationResult',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取视频审核任务结果
     *  *
     * @param GetVideoModerationResultRequest $request GetVideoModerationResultRequest
     *
     * @return GetVideoModerationResultResponse GetVideoModerationResultResponse
     */
    public function getVideoModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoModerationResultWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an index from metadata extracted by using techniques such as label recognition, face detection, and location detection from input files. You can retrieve data from the same dataset by using multiple methods.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   For information about how to create indexes from metadata, see [Workflow templates and operators](https://help.aliyun.com/document_detail/466304.html).
     * *   For information about the limits on the maximum number and size of index files that you can create, see the "Limits on datasets" section of the [Limits](https://help.aliyun.com/document_detail/475569.html) topic. For information about how to create a dataset, see the "CreateDataset" topic.
     * *   For information about the regions in which you can create index files from metadata, see the "Datasets and indexes" section of the [Limits](https://help.aliyun.com/document_detail/475569.html) topic.
     * *   After you create an index from metadata, you can try [simple query](https://help.aliyun.com/document_detail/478175.html) to retrieve data. For information about other query capabilities, see [Query and statistics](https://help.aliyun.com/document_detail/2402363.html). You can also [create a face clustering task](https://help.aliyun.com/document_detail/478180.html) to group faces. For information about other clustering capabilities, see [Intelligent management](https://help.aliyun.com/document_detail/2402365.html).
     * **
     * **Usage notes**
     * *   The IndexFileMeta operation is asynchronous, indicating that it takes some time to process the data after a request is submitted. After the processing is complete, the metadata is stored in your dataset. The amount of time it takes for this process varies based on [the workflow template, the operator](https://help.aliyun.com/document_detail/466304.html), and the content of the file, ranging from several seconds to several minutes or even longer. You can subscribe to [Simple Message Service](https://help.aliyun.com/document_detail/2743997.html) for task completion notifications.
     *  *
     * @param IndexFileMetaRequest $tmpReq  IndexFileMetaRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return IndexFileMetaResponse IndexFileMetaResponse
     */
    public function indexFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IndexFileMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->file)) {
            $request->fileShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->file, 'File', 'json');
        }
        if (!Utils::isUnset($tmpReq->notification)) {
            $request->notificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notification, 'Notification', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->fileShrink)) {
            $query['File'] = $request->fileShrink;
        }
        if (!Utils::isUnset($request->notificationShrink)) {
            $query['Notification'] = $request->notificationShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IndexFileMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IndexFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an index from metadata extracted by using techniques such as label recognition, face detection, and location detection from input files. You can retrieve data from the same dataset by using multiple methods.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   For information about how to create indexes from metadata, see [Workflow templates and operators](https://help.aliyun.com/document_detail/466304.html).
     * *   For information about the limits on the maximum number and size of index files that you can create, see the "Limits on datasets" section of the [Limits](https://help.aliyun.com/document_detail/475569.html) topic. For information about how to create a dataset, see the "CreateDataset" topic.
     * *   For information about the regions in which you can create index files from metadata, see the "Datasets and indexes" section of the [Limits](https://help.aliyun.com/document_detail/475569.html) topic.
     * *   After you create an index from metadata, you can try [simple query](https://help.aliyun.com/document_detail/478175.html) to retrieve data. For information about other query capabilities, see [Query and statistics](https://help.aliyun.com/document_detail/2402363.html). You can also [create a face clustering task](https://help.aliyun.com/document_detail/478180.html) to group faces. For information about other clustering capabilities, see [Intelligent management](https://help.aliyun.com/document_detail/2402365.html).
     * **
     * **Usage notes**
     * *   The IndexFileMeta operation is asynchronous, indicating that it takes some time to process the data after a request is submitted. After the processing is complete, the metadata is stored in your dataset. The amount of time it takes for this process varies based on [the workflow template, the operator](https://help.aliyun.com/document_detail/466304.html), and the content of the file, ranging from several seconds to several minutes or even longer. You can subscribe to [Simple Message Service](https://help.aliyun.com/document_detail/2743997.html) for task completion notifications.
     *  *
     * @param IndexFileMetaRequest $request IndexFileMetaRequest
     *
     * @return IndexFileMetaResponse IndexFileMetaResponse
     */
    public function indexFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->indexFileMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries batch processing tasks. You can query batch processing tasks based on conditions such task tags and status. The results can be sorted.
     *  *
     * @param ListBatchesRequest $request ListBatchesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBatchesResponse ListBatchesResponse
     */
    public function listBatchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->tagSelector)) {
            $query['TagSelector'] = $request->tagSelector;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBatches',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBatchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries batch processing tasks. You can query batch processing tasks based on conditions such task tags and status. The results can be sorted.
     *  *
     * @param ListBatchesRequest $request ListBatchesRequest
     *
     * @return ListBatchesResponse ListBatchesResponse
     */
    public function listBatches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries bindings between a dataset and Object Storage Service (OSS) buckets.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).
     *  *
     * @param ListBindingsRequest $request ListBindingsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBindingsResponse ListBindingsResponse
     */
    public function listBindingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBindings',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries bindings between a dataset and Object Storage Service (OSS) buckets.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).
     *  *
     * @param ListBindingsRequest $request ListBindingsRequest
     *
     * @return ListBindingsResponse ListBindingsResponse
     */
    public function listBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindingsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of datasets. You can query the list by dataset prefix.
     *  *
     * @param ListDatasetsRequest $request ListDatasetsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatasetsResponse ListDatasetsResponse
     */
    public function listDatasetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatasets',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatasetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of datasets. You can query the list by dataset prefix.
     *  *
     * @param ListDatasetsRequest $request ListDatasetsRequest
     *
     * @return ListDatasetsResponse ListDatasetsResponse
     */
    public function listDatasets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries projects. You can call this operation to query the basic information, datasets, and file statistics of multiple projects at the same time.
     *  *
     * @description The ListProjects operation supports pagination. When you call this operation, you must specify the token that is obtained from the previous query as the value of NextToken. You must also specify MaxResults to limit the number of entries to return.
     *  *
     * @param ListProjectsRequest $tmpReq  ListProjectsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjectsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListProjectsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries projects. You can call this operation to query the basic information, datasets, and file statistics of multiple projects at the same time.
     *  *
     * @description The ListProjects operation supports pagination. When you call this operation, you must specify the token that is obtained from the previous query as the value of NextToken. You must also specify MaxResults to limit the number of entries to return.
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the regions where Intelligent Media Management (IMM) is available and the supported languages.
     *  *
     * @param ListRegionsRequest $request ListRegionsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the regions where Intelligent Media Management (IMM) is available and the supported languages.
     *  *
     * @param ListRegionsRequest $request ListRegionsRequest
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists tasks based on specific conditions, such as by time range and by tag.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).
     *  *
     * @param ListTasksRequest $tmpReq  ListTasksRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->endTimeRange)) {
            $request->endTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->endTimeRange, 'EndTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->startTimeRange)) {
            $request->startTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->startTimeRange, 'StartTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->taskTypes)) {
            $request->taskTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskTypes, 'TaskTypes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->endTimeRangeShrink)) {
            $query['EndTimeRange'] = $request->endTimeRangeShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->requestDefinition)) {
            $query['RequestDefinition'] = $request->requestDefinition;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->startTimeRangeShrink)) {
            $query['StartTimeRange'] = $request->startTimeRangeShrink;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagSelector)) {
            $query['TagSelector'] = $request->tagSelector;
        }
        if (!Utils::isUnset($request->taskTypesShrink)) {
            $query['TaskTypes'] = $request->taskTypesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Lists tasks based on specific conditions, such as by time range and by tag.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).
     *  *
     * @param ListTasksRequest $request ListTasksRequest
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries triggers by tag or status.
     *  *
     * @param ListTriggersRequest $request ListTriggersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTriggersResponse ListTriggersResponse
     */
    public function listTriggersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->tagSelector)) {
            $query['TagSelector'] = $request->tagSelector;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTriggers',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTriggersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries triggers by tag or status.
     *  *
     * @param ListTriggersRequest $request ListTriggersRequest
     *
     * @return ListTriggersResponse ListTriggersResponse
     */
    public function listTriggers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTriggersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries face groups based on given conditions.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that a face clustering task is created to group all faces in a dataset. For information about how to create a face clustering task, see [CreateFigureClusteringTask](~~CreateFigureClusteringTask~~). For information about how to create a dataset, see [CreateDataset](~~CreateDataset~~).
     *  *
     * @param QueryFigureClustersRequest $tmpReq  QueryFigureClustersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryFigureClustersResponse QueryFigureClustersResponse
     */
    public function queryFigureClustersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryFigureClustersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createTimeRange)) {
            $request->createTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createTimeRange, 'CreateTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->updateTimeRange)) {
            $request->updateTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateTimeRange, 'UpdateTimeRange', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->createTimeRangeShrink)) {
            $query['CreateTimeRange'] = $request->createTimeRangeShrink;
        }
        if (!Utils::isUnset($request->customLabels)) {
            $query['CustomLabels'] = $request->customLabels;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->updateTimeRangeShrink)) {
            $query['UpdateTimeRange'] = $request->updateTimeRangeShrink;
        }
        if (!Utils::isUnset($request->withTotalCount)) {
            $query['WithTotalCount'] = $request->withTotalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFigureClusters',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFigureClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries face groups based on given conditions.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that a face clustering task is created to group all faces in a dataset. For information about how to create a face clustering task, see [CreateFigureClusteringTask](~~CreateFigureClusteringTask~~). For information about how to create a dataset, see [CreateDataset](~~CreateDataset~~).
     *  *
     * @param QueryFigureClustersRequest $request QueryFigureClustersRequest
     *
     * @return QueryFigureClustersResponse QueryFigureClustersResponse
     */
    public function queryFigureClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFigureClustersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of spatiotemporal clustering groups. Multiple conditions are supported. For more information, see the request parameters.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, you must call the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to perform spatiotemporal clustering.
     *  *
     * @param QueryLocationDateClustersRequest $tmpReq  QueryLocationDateClustersRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryLocationDateClustersResponse QueryLocationDateClustersResponse
     */
    public function queryLocationDateClustersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryLocationDateClustersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->address)) {
            $request->addressShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->address, 'Address', 'json');
        }
        if (!Utils::isUnset($tmpReq->createTimeRange)) {
            $request->createTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createTimeRange, 'CreateTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->locationDateClusterEndTimeRange)) {
            $request->locationDateClusterEndTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->locationDateClusterEndTimeRange, 'LocationDateClusterEndTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->locationDateClusterLevels)) {
            $request->locationDateClusterLevelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->locationDateClusterLevels, 'LocationDateClusterLevels', 'json');
        }
        if (!Utils::isUnset($tmpReq->locationDateClusterStartTimeRange)) {
            $request->locationDateClusterStartTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->locationDateClusterStartTimeRange, 'LocationDateClusterStartTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->updateTimeRange)) {
            $request->updateTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateTimeRange, 'UpdateTimeRange', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->addressShrink)) {
            $query['Address'] = $request->addressShrink;
        }
        if (!Utils::isUnset($request->createTimeRangeShrink)) {
            $query['CreateTimeRange'] = $request->createTimeRangeShrink;
        }
        if (!Utils::isUnset($request->customLabels)) {
            $query['CustomLabels'] = $request->customLabels;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->locationDateClusterEndTimeRangeShrink)) {
            $query['LocationDateClusterEndTimeRange'] = $request->locationDateClusterEndTimeRangeShrink;
        }
        if (!Utils::isUnset($request->locationDateClusterLevelsShrink)) {
            $query['LocationDateClusterLevels'] = $request->locationDateClusterLevelsShrink;
        }
        if (!Utils::isUnset($request->locationDateClusterStartTimeRangeShrink)) {
            $query['LocationDateClusterStartTimeRange'] = $request->locationDateClusterStartTimeRangeShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->updateTimeRangeShrink)) {
            $query['UpdateTimeRange'] = $request->updateTimeRangeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryLocationDateClusters',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLocationDateClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of spatiotemporal clustering groups. Multiple conditions are supported. For more information, see the request parameters.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, you must call the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to perform spatiotemporal clustering.
     *  *
     * @param QueryLocationDateClustersRequest $request QueryLocationDateClustersRequest
     *
     * @return QueryLocationDateClustersResponse QueryLocationDateClustersResponse
     */
    public function queryLocationDateClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLocationDateClustersWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the list of similar image clusters.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, you must call the [CreateSimilarImageClusteringTask](https://help.aliyun.com/document_detail/611302.html) operation to cluster similar images in the dataset.
     *  *
     * @param QuerySimilarImageClustersRequest $request QuerySimilarImageClustersRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySimilarImageClustersResponse QuerySimilarImageClustersResponse
     */
    public function querySimilarImageClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customLabels)) {
            $query['CustomLabels'] = $request->customLabels;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySimilarImageClusters',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySimilarImageClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the list of similar image clusters.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, you must call the [CreateSimilarImageClusteringTask](https://help.aliyun.com/document_detail/611302.html) operation to cluster similar images in the dataset.
     *  *
     * @param QuerySimilarImageClustersRequest $request QuerySimilarImageClustersRequest
     *
     * @return QuerySimilarImageClustersResponse QuerySimilarImageClustersResponse
     */
    public function querySimilarImageClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySimilarImageClustersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries stories based on the specified conditions.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *  *
     * @param QueryStoriesRequest $tmpReq  QueryStoriesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryStoriesResponse QueryStoriesResponse
     */
    public function queryStoriesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryStoriesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createTimeRange)) {
            $request->createTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createTimeRange, 'CreateTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->figureClusterIds)) {
            $request->figureClusterIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->figureClusterIds, 'FigureClusterIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->storyEndTimeRange)) {
            $request->storyEndTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storyEndTimeRange, 'StoryEndTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->storyStartTimeRange)) {
            $request->storyStartTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storyStartTimeRange, 'StoryStartTimeRange', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->createTimeRangeShrink)) {
            $query['CreateTimeRange'] = $request->createTimeRangeShrink;
        }
        if (!Utils::isUnset($request->customLabels)) {
            $query['CustomLabels'] = $request->customLabels;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->figureClusterIdsShrink)) {
            $query['FigureClusterIds'] = $request->figureClusterIdsShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->storyEndTimeRangeShrink)) {
            $query['StoryEndTimeRange'] = $request->storyEndTimeRangeShrink;
        }
        if (!Utils::isUnset($request->storyName)) {
            $query['StoryName'] = $request->storyName;
        }
        if (!Utils::isUnset($request->storyStartTimeRangeShrink)) {
            $query['StoryStartTimeRange'] = $request->storyStartTimeRangeShrink;
        }
        if (!Utils::isUnset($request->storySubType)) {
            $query['StorySubType'] = $request->storySubType;
        }
        if (!Utils::isUnset($request->storyType)) {
            $query['StoryType'] = $request->storyType;
        }
        if (!Utils::isUnset($request->withEmptyStories)) {
            $query['WithEmptyStories'] = $request->withEmptyStories;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryStories',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries stories based on the specified conditions.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have indexed file metadata into the dataset automatically by calling the [CreateBinding](https://help.aliyun.com/document_detail/478202.html) operation or manually by calling the [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html) or [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html) operation.
     * *   Before you call this operation, make sure that you have called the [CreateStory](https://help.aliyun.com/document_detail/478193.html) or [CreateCustomizedStory](https://help.aliyun.com/document_detail/478196.html) operation to create a story.
     *  *
     * @param QueryStoriesRequest $request QueryStoriesRequest
     *
     * @return QueryStoriesResponse QueryStoriesResponse
     */
    public function queryStories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStoriesWithOptions($request, $runtime);
    }

    /**
     * @summary Refreshes the access credential of WebOffice. The access credential of WebOffice is valid for 30 minutes. After the credential expires, you cannot access Weboffice. To access Weboffice again, call this operation to obtain a new credential. The new credential is also valid for 30 minutes.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   For more information, see [WebOffice billing](https://help.aliyun.com/document_detail/2639703.html).
     * *   The access token returned by this operation is valid for 30 minutes. After the access token expires, you cannot use it to access the document.
     * *   The refresh token returned by this operation is valid for one day. You need to use the refresh token for the next call to the operation before the refresh token expires. After the validity period elapses, the refresh token is invalid.
     * *   The returned expiration time is displayed in UTC.
     * >  An access token is used to actually access a document, whereas a refresh token is used to avoid repeated access configurations.
     *  *
     * @param RefreshWebofficeTokenRequest $tmpReq  RefreshWebofficeTokenRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshWebofficeTokenResponse RefreshWebofficeTokenResponse
     */
    public function refreshWebofficeTokenWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RefreshWebofficeTokenShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->refreshToken)) {
            $query['RefreshToken'] = $request->refreshToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshWebofficeToken',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshWebofficeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Refreshes the access credential of WebOffice. The access credential of WebOffice is valid for 30 minutes. After the credential expires, you cannot access Weboffice. To access Weboffice again, call this operation to obtain a new credential. The new credential is also valid for 30 minutes.
     *  *
     * @description Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of IMM.****
     * *   For more information, see [WebOffice billing](https://help.aliyun.com/document_detail/2639703.html).
     * *   The access token returned by this operation is valid for 30 minutes. After the access token expires, you cannot use it to access the document.
     * *   The refresh token returned by this operation is valid for one day. You need to use the refresh token for the next call to the operation before the refresh token expires. After the validity period elapses, the refresh token is invalid.
     * *   The returned expiration time is displayed in UTC.
     * >  An access token is used to actually access a document, whereas a refresh token is used to avoid repeated access configurations.
     *  *
     * @param RefreshWebofficeTokenRequest $request RefreshWebofficeTokenRequest
     *
     * @return RefreshWebofficeTokenResponse RefreshWebofficeTokenResponse
     */
    public function refreshWebofficeToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshWebofficeTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes files from a story.
     *  *
     * @param RemoveStoryFilesRequest $tmpReq  RemoveStoryFilesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveStoryFilesResponse RemoveStoryFilesResponse
     */
    public function removeStoryFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveStoryFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->files)) {
            $request->filesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->filesShrink)) {
            $body['Files'] = $request->filesShrink;
        }
        if (!Utils::isUnset($request->objectId)) {
            $body['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveStoryFiles',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveStoryFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes files from a story.
     *  *
     * @param RemoveStoryFilesRequest $request RemoveStoryFilesRequest
     *
     * @return RemoveStoryFilesResponse RemoveStoryFilesResponse
     */
    public function removeStoryFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeStoryFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Resumes a batch processing task that is in the Suspended or Failed state.
     *  *
     * @description You can resume a batch processing task only when the task is in the Suspended or Failed state. A batch processing task continues to provide services after you resume the task.
     *  *
     * @param ResumeBatchRequest $request ResumeBatchRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeBatchResponse ResumeBatchResponse
     */
    public function resumeBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResumeBatch',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resumes a batch processing task that is in the Suspended or Failed state.
     *  *
     * @description You can resume a batch processing task only when the task is in the Suspended or Failed state. A batch processing task continues to provide services after you resume the task.
     *  *
     * @param ResumeBatchRequest $request ResumeBatchRequest
     *
     * @return ResumeBatchResponse ResumeBatchResponse
     */
    public function resumeBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeBatchWithOptions($request, $runtime);
    }

    /**
     * @summary Resumes a trigger that is in the Suspended or Failed state.
     *  *
     * @description You can resume only a trigger that is in the Suspended or Failed state. After you resume a trigger, the trigger continues to provide services as expected.
     *  *
     * @param ResumeTriggerRequest $request ResumeTriggerRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeTriggerResponse ResumeTriggerResponse
     */
    public function resumeTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResumeTrigger',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resumes a trigger that is in the Suspended or Failed state.
     *  *
     * @description You can resume only a trigger that is in the Suspended or Failed state. After you resume a trigger, the trigger continues to provide services as expected.
     *  *
     * @param ResumeTriggerRequest $request ResumeTriggerRequest
     *
     * @return ResumeTriggerResponse ResumeTriggerResponse
     */
    public function resumeTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries face clusters that contain a specific face in an image. Each face cluster contains information such as bounding boxes and similarity.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have created a face clustering task by calling the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     *  *
     * @param SearchImageFigureClusterRequest $tmpReq  SearchImageFigureClusterRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchImageFigureClusterResponse SearchImageFigureClusterResponse
     */
    public function searchImageFigureClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchImageFigureClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->credentialConfig, 'CredentialConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceURI)) {
            $query['SourceURI'] = $request->sourceURI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchImageFigureCluster',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchImageFigureClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries face clusters that contain a specific face in an image. Each face cluster contains information such as bounding boxes and similarity.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/88317.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have created a face clustering task by calling the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     *  *
     * @param SearchImageFigureClusterRequest $request SearchImageFigureClusterRequest
     *
     * @return SearchImageFigureClusterResponse SearchImageFigureClusterResponse
     */
    public function searchImageFigureCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageFigureClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries metadata in a dataset by inputting natural language.
     *  *
     * @description ### [](#)Precautions
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**** Each time you call this operation, you are charged for semantic understanding and query fees.
     * *   Before you call this operation, make sure that the file that you want to use is indexed into the dataset that you use. To index a file into a dataset, you can call one of the following operations: [CreateBinding](https://help.aliyun.com/document_detail/478202.html), [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html), and [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html).
     * *   The response provided in this example is for reference only. The categories and content of metadata vary based on configurations of [workflow templates](https://help.aliyun.com/document_detail/466304.html). If you have questions, search for and join the DingTalk group numbered 21714099.
     * ### [](#)Usage limits
     * *   Each time you call this operation, up to 1,000 metadata files are returned.
     * *   Pagination is not supported.
     * *   The natural language processing capability may not always produce completely accurate results.
     * ### [](#)Usage methods
     * You can query files within a dataset by using natural language keywords. Key information supported for understanding includes labels (Labels.LabelName), time (ProduceTime), and location (Address.AddressLine). For example, if you use `2023 Hangzhou scenery` as the query criterion, the operation intelligently breaks the query criterion down into the following sub-criteria, and returns the files that meet all the sub-criteria:
     * *   ProduceTime: 00:00 on January 1, 2023 to 00:00 on December 31, 2023.
     * *   Address.AddressLine: `Hangzhou`
     * *   Labels.LabelName: `scenery`.
     * When you call this operation, you can configure a [workflow template](https://help.aliyun.com/document_detail/466304.html) that includes the `ImageEmbeddingExtraction` operator. This allows the operation to return image content when the query you input matches the image content, thereby achieving intelligent image retrieval.``
     *  *
     * @param SemanticQueryRequest $tmpReq  SemanticQueryRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SemanticQueryResponse SemanticQueryResponse
     */
    public function semanticQueryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SemanticQueryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->mediaTypes)) {
            $request->mediaTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mediaTypes, 'MediaTypes', 'json');
        }
        if (!Utils::isUnset($tmpReq->withFields)) {
            $request->withFieldsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->mediaTypesShrink)) {
            $query['MediaTypes'] = $request->mediaTypesShrink;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->withFieldsShrink)) {
            $query['WithFields'] = $request->withFieldsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SemanticQuery',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SemanticQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries metadata in a dataset by inputting natural language.
     *  *
     * @description ### [](#)Precautions
     * *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).**** Each time you call this operation, you are charged for semantic understanding and query fees.
     * *   Before you call this operation, make sure that the file that you want to use is indexed into the dataset that you use. To index a file into a dataset, you can call one of the following operations: [CreateBinding](https://help.aliyun.com/document_detail/478202.html), [IndexFileMeta](https://help.aliyun.com/document_detail/478166.html), and [BatchIndexFileMeta](https://help.aliyun.com/document_detail/478167.html).
     * *   The response provided in this example is for reference only. The categories and content of metadata vary based on configurations of [workflow templates](https://help.aliyun.com/document_detail/466304.html). If you have questions, search for and join the DingTalk group numbered 21714099.
     * ### [](#)Usage limits
     * *   Each time you call this operation, up to 1,000 metadata files are returned.
     * *   Pagination is not supported.
     * *   The natural language processing capability may not always produce completely accurate results.
     * ### [](#)Usage methods
     * You can query files within a dataset by using natural language keywords. Key information supported for understanding includes labels (Labels.LabelName), time (ProduceTime), and location (Address.AddressLine). For example, if you use `2023 Hangzhou scenery` as the query criterion, the operation intelligently breaks the query criterion down into the following sub-criteria, and returns the files that meet all the sub-criteria:
     * *   ProduceTime: 00:00 on January 1, 2023 to 00:00 on December 31, 2023.
     * *   Address.AddressLine: `Hangzhou`
     * *   Labels.LabelName: `scenery`.
     * When you call this operation, you can configure a [workflow template](https://help.aliyun.com/document_detail/466304.html) that includes the `ImageEmbeddingExtraction` operator. This allows the operation to return image content when the query you input matches the image content, thereby achieving intelligent image retrieval.``
     *  *
     * @param SemanticQueryRequest $request SemanticQueryRequest
     *
     * @return SemanticQueryResponse SemanticQueryResponse
     */
    public function semanticQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->semanticQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries files in a dataset by performing a simple query operation. The operation supports logical expressions.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
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
     *  *
     * @param SimpleQueryRequest $tmpReq  SimpleQueryRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SimpleQueryResponse SimpleQueryResponse
     */
    public function simpleQueryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SimpleQueryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aggregations)) {
            $request->aggregationsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aggregations, 'Aggregations', 'json');
        }
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        if (!Utils::isUnset($tmpReq->withFields)) {
            $request->withFieldsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->withFields, 'WithFields', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aggregationsShrink)) {
            $query['Aggregations'] = $request->aggregationsShrink;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $query['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->withFieldsShrink)) {
            $query['WithFields'] = $request->withFieldsShrink;
        }
        if (!Utils::isUnset($request->withoutTotalHits)) {
            $query['WithoutTotalHits'] = $request->withoutTotalHits;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SimpleQuery',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SimpleQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries files in a dataset by performing a simple query operation. The operation supports logical expressions.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
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
     *  *
     * @param SimpleQueryRequest $request SimpleQueryRequest
     *
     * @return SimpleQueryResponse SimpleQueryResponse
     */
    public function simpleQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->simpleQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Suspends a batch processing task.
     *  *
     * @description You can suspend a batch processing task that is in the Running state. You can call the [ResumeBatch](https://help.aliyun.com/document_detail/479914.html) operation to resume a batch processing task that is suspended.
     *  *
     * @param SuspendBatchRequest $request SuspendBatchRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendBatchResponse SuspendBatchResponse
     */
    public function suspendBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SuspendBatch',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Suspends a batch processing task.
     *  *
     * @description You can suspend a batch processing task that is in the Running state. You can call the [ResumeBatch](https://help.aliyun.com/document_detail/479914.html) operation to resume a batch processing task that is suspended.
     *  *
     * @param SuspendBatchRequest $request SuspendBatchRequest
     *
     * @return SuspendBatchResponse SuspendBatchResponse
     */
    public function suspendBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendBatchWithOptions($request, $runtime);
    }

    /**
     * @summary Suspends a running trigger.
     *  *
     * @description The operation can be used to suspend a trigger only in the Running state. If you want to resume a suspended trigger, call the [ResumeTrigger](https://help.aliyun.com/document_detail/479919.html) operation.
     *  *
     * @param SuspendTriggerRequest $request SuspendTriggerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendTriggerResponse SuspendTriggerResponse
     */
    public function suspendTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SuspendTrigger',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Suspends a running trigger.
     *  *
     * @description The operation can be used to suspend a trigger only in the Running state. If you want to resume a suspended trigger, call the [ResumeTrigger](https://help.aliyun.com/document_detail/479919.html) operation.
     *  *
     * @param SuspendTriggerRequest $request SuspendTriggerRequest
     *
     * @return SuspendTriggerResponse SuspendTriggerResponse
     */
    public function suspendTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Updates information about a batch processing task, including the input data source, data processing settings, and tags.
     *  *
     * @description *   You can update only a batch processing task that is in the Ready or Failed state. The update operation does not change the status of the batch processing task.
     * *   If you update a batch processing task that is in progress, the task is not automatically resumed after the update is complete. You must call the [ResumeBatch](https://help.aliyun.com/document_detail/479914.html) operation to resume the task.
     *  *
     * @param UpdateBatchRequest $tmpReq  UpdateBatchRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBatchResponse UpdateBatchResponse
     */
    public function updateBatchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateBatchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actions)) {
            $request->actionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actions, 'Actions', 'json');
        }
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->actionsShrink)) {
            $body['Actions'] = $request->actionsShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $body['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateBatch',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates information about a batch processing task, including the input data source, data processing settings, and tags.
     *  *
     * @description *   You can update only a batch processing task that is in the Ready or Failed state. The update operation does not change the status of the batch processing task.
     * *   If you update a batch processing task that is in progress, the task is not automatically resumed after the update is complete. You must call the [ResumeBatch](https://help.aliyun.com/document_detail/479914.html) operation to resume the task.
     *  *
     * @param UpdateBatchRequest $request UpdateBatchRequest
     *
     * @return UpdateBatchResponse UpdateBatchResponse
     */
    public function updateBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 更新媒体集
     *  *
     * @param UpdateDatasetRequest $request UpdateDatasetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDatasetResponse UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetMaxBindCount)) {
            $query['DatasetMaxBindCount'] = $request->datasetMaxBindCount;
        }
        if (!Utils::isUnset($request->datasetMaxEntityCount)) {
            $query['DatasetMaxEntityCount'] = $request->datasetMaxEntityCount;
        }
        if (!Utils::isUnset($request->datasetMaxFileCount)) {
            $query['DatasetMaxFileCount'] = $request->datasetMaxFileCount;
        }
        if (!Utils::isUnset($request->datasetMaxRelationCount)) {
            $query['DatasetMaxRelationCount'] = $request->datasetMaxRelationCount;
        }
        if (!Utils::isUnset($request->datasetMaxTotalFileSize)) {
            $query['DatasetMaxTotalFileSize'] = $request->datasetMaxTotalFileSize;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataset',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新媒体集
     *  *
     * @param UpdateDatasetRequest $request UpdateDatasetRequest
     *
     * @return UpdateDatasetResponse UpdateDatasetResponse
     */
    public function updateDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary Updates information about a face cluster, such as the cluster name and labels.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     * *   The operation updates only the cover image, cluster name, and tags.
     * *   After the operation is successful, you can call the [GetFigureCluster](https://help.aliyun.com/document_detail/478182.html) or [BatchGetFigureCluster](https://help.aliyun.com/document_detail/2248450.html) operation to query the updated cluster.
     *  *
     * @param UpdateFigureClusterRequest $tmpReq  UpdateFigureClusterRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFigureClusterResponse UpdateFigureClusterResponse
     */
    public function updateFigureClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateFigureClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->figureCluster)) {
            $request->figureClusterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->figureCluster, 'FigureCluster', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->figureClusterShrink)) {
            $query['FigureCluster'] = $request->figureClusterShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFigureCluster',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFigureClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates information about a face cluster, such as the cluster name and labels.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateFigureClusteringTask](https://help.aliyun.com/document_detail/478180.html) operation to cluster all faces in the dataset.
     * *   The operation updates only the cover image, cluster name, and tags.
     * *   After the operation is successful, you can call the [GetFigureCluster](https://help.aliyun.com/document_detail/478182.html) or [BatchGetFigureCluster](https://help.aliyun.com/document_detail/2248450.html) operation to query the updated cluster.
     *  *
     * @param UpdateFigureClusterRequest $request UpdateFigureClusterRequest
     *
     * @return UpdateFigureClusterResponse UpdateFigureClusterResponse
     */
    public function updateFigureCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFigureClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the partial metadata of the indexed files in a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   You cannot call this operation to update all metadata. You can update only metadata specified by CustomLabels, CustomId, and Figures. For more information, see the "Request parameters" section of this topic.
     *  *
     * @param UpdateFileMetaRequest $tmpReq  UpdateFileMetaRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFileMetaResponse UpdateFileMetaResponse
     */
    public function updateFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateFileMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->file)) {
            $request->fileShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->file, 'File', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->fileShrink)) {
            $query['File'] = $request->fileShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFileMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the partial metadata of the indexed files in a dataset.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   You cannot call this operation to update all metadata. You can update only metadata specified by CustomLabels, CustomId, and Figures. For more information, see the "Request parameters" section of this topic.
     *  *
     * @param UpdateFileMetaRequest $request UpdateFileMetaRequest
     *
     * @return UpdateFileMetaResponse UpdateFileMetaResponse
     */
    public function updateFileMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFileMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a spatiotemporal cluster.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to create spatiotemporal clusters in the project.
     *  *
     * @param UpdateLocationDateClusterRequest $tmpReq  UpdateLocationDateClusterRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLocationDateClusterResponse UpdateLocationDateClusterResponse
     */
    public function updateLocationDateClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLocationDateClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customLabels)) {
            $request->customLabelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->customId)) {
            $query['CustomId'] = $request->customId;
        }
        if (!Utils::isUnset($request->customLabelsShrink)) {
            $query['CustomLabels'] = $request->customLabelsShrink;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->objectId)) {
            $query['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLocationDateCluster',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLocationDateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a spatiotemporal cluster.
     *  *
     * @description *   Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/477042.html) of Intelligent Media Management (IMM).****
     * *   Before you call this operation, make sure that you have called the [CreateLocationDateClusteringTask](https://help.aliyun.com/document_detail/478188.html) operation to create spatiotemporal clusters in the project.
     *  *
     * @param UpdateLocationDateClusterRequest $request UpdateLocationDateClusterRequest
     *
     * @return UpdateLocationDateClusterResponse UpdateLocationDateClusterResponse
     */
    public function updateLocationDateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLocationDateClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates information about a project.
     *  *
     * @description *   Before you call this operation, make sure that the project exists. For information about how to create a project, see "CreateProject".
     * *   When you call this operation, you need to specify only the parameters that you want to update. The parameters that you do not specify remain unchanged after you call this operation.
     * *   Wait for up to 5 minutes for the update to take effect.
     *  *
     * @param UpdateProjectRequest $tmpReq  UpdateProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetMaxBindCount)) {
            $query['DatasetMaxBindCount'] = $request->datasetMaxBindCount;
        }
        if (!Utils::isUnset($request->datasetMaxEntityCount)) {
            $query['DatasetMaxEntityCount'] = $request->datasetMaxEntityCount;
        }
        if (!Utils::isUnset($request->datasetMaxFileCount)) {
            $query['DatasetMaxFileCount'] = $request->datasetMaxFileCount;
        }
        if (!Utils::isUnset($request->datasetMaxRelationCount)) {
            $query['DatasetMaxRelationCount'] = $request->datasetMaxRelationCount;
        }
        if (!Utils::isUnset($request->datasetMaxTotalFileSize)) {
            $query['DatasetMaxTotalFileSize'] = $request->datasetMaxTotalFileSize;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->projectMaxDatasetCount)) {
            $query['ProjectMaxDatasetCount'] = $request->projectMaxDatasetCount;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->serviceRole)) {
            $query['ServiceRole'] = $request->serviceRole;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates information about a project.
     *  *
     * @description *   Before you call this operation, make sure that the project exists. For information about how to create a project, see "CreateProject".
     * *   When you call this operation, you need to specify only the parameters that you want to update. The parameters that you do not specify remain unchanged after you call this operation.
     * *   Wait for up to 5 minutes for the update to take effect.
     *  *
     * @param UpdateProjectRequest $request UpdateProjectRequest
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a story, such as the story name and cover image.
     *  *
     * @param UpdateStoryRequest $tmpReq  UpdateStoryRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStoryResponse UpdateStoryResponse
     */
    public function updateStoryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateStoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cover)) {
            $request->coverShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cover, 'Cover', 'json');
        }
        if (!Utils::isUnset($tmpReq->customLabels)) {
            $request->customLabelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->coverShrink)) {
            $body['Cover'] = $request->coverShrink;
        }
        if (!Utils::isUnset($request->customId)) {
            $body['CustomId'] = $request->customId;
        }
        if (!Utils::isUnset($request->customLabelsShrink)) {
            $body['CustomLabels'] = $request->customLabelsShrink;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->objectId)) {
            $body['ObjectId'] = $request->objectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->storyName)) {
            $body['StoryName'] = $request->storyName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStory',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a story, such as the story name and cover image.
     *  *
     * @param UpdateStoryRequest $request UpdateStoryRequest
     *
     * @return UpdateStoryResponse UpdateStoryResponse
     */
    public function updateStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStoryWithOptions($request, $runtime);
    }

    /**
     * @summary Updates information about a trigger, such as the input data source, data processing settings, and tags.
     *  *
     * @description *   You can update only a trigger that is in the Ready or Failed state. The update operation does not change the trigger status.
     * *   After you update a trigger, the uncompleted tasks under the original trigger are no longer executed. You can call the [ResumeTrigger](https://help.aliyun.com/document_detail/479916.html) operation to resume the execution of the trigger.
     *  *
     * @param UpdateTriggerRequest $tmpReq  UpdateTriggerRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTriggerResponse UpdateTriggerResponse
     */
    public function updateTriggerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTriggerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actions)) {
            $request->actionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actions, 'Actions', 'json');
        }
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->actionsShrink)) {
            $body['Actions'] = $request->actionsShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $body['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrigger',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates information about a trigger, such as the input data source, data processing settings, and tags.
     *  *
     * @description *   You can update only a trigger that is in the Ready or Failed state. The update operation does not change the trigger status.
     * *   After you update a trigger, the uncompleted tasks under the original trigger are no longer executed. You can call the [ResumeTrigger](https://help.aliyun.com/document_detail/479916.html) operation to resume the execution of the trigger.
     *  *
     * @param UpdateTriggerRequest $request UpdateTriggerRequest
     *
     * @return UpdateTriggerResponse UpdateTriggerResponse
     */
    public function updateTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTriggerWithOptions($request, $runtime);
    }
}
