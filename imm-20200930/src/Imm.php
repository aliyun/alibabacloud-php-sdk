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
     * @summary 图片打马赛克算子
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
     * @summary 图片打马赛克算子
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
     * @summary 为故事新增文件
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
     * @summary 为故事新增文件
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
     * @summary 绑定ossbucket
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
     * @summary 绑定ossbucket
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
     * @summary 批量删除文件元信息
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
     * @summary 批量删除文件元信息
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
     * @summary 批量获取分组信息
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
     * @summary 批量获取分组信息
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
     * @summary 批量获取文件元信息
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
     * @summary 批量获取文件元信息
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
     * @summary 批量索引文件元信息
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
     * @summary 批量索引文件元信息
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
     * @summary 批量更新文件元信息
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
     * @summary 批量更新文件元信息
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
     * @summary 以脸搜分组
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
     * @summary 以脸搜分组
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
     * @summary 创建查看压缩包内文件列表任务
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
     * @summary 创建查看压缩包内文件列表任务
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
     * @summary 创建数据接入
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
     * @summary 创建数据接入
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
     * @summary 创建绑定
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
     * @summary 创建绑定
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
     * @summary 创建点云压缩任务
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
     * @summary 创建点云压缩任务
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
     * @summary 创建自定义故事
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
     * @summary 创建自定义故事
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
     * @summary 创建数据集
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
     * @summary 创建数据集
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
     * @summary 提取盲水印
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
     * @summary 提取盲水印
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
     * @summary 以脸搜图
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
     * @summary 以脸搜图
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
     * @summary 聚类
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
     * @summary 聚类
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
     * @summary 合并聚类
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
     * @summary 合并聚类
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
     * @summary 压缩/打包下载API
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
     * @summary 压缩/打包下载API
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
     * @summary 在线解压API
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
     * @summary 在线解压API
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
     * @summary 创建图片检测
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
     * @summary 创建图片检测
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
     * @summary 图片拼接
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
     * @summary 图片拼接
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
     * @summary 图片转PDF
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
     * @summary 图片转PDF
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
     * @summary 创建时空聚类任务
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
     * @summary 创建时空聚类任务
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
     * @summary 创建转码服务
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
     * @summary 创建转码服务
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
     * @summary 创建文档转换任务
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 创建文档转换任务
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
     * @summary 创建项目
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
     * @summary 创建项目
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
     * @summary 创建相似图片聚类任务
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
     * @summary 创建相似图片聚类任务
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
     * @summary 创建一个 Story
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
     * @summary 创建一个 Story
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
     * @summary 创建数据接入
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
     * @summary 创建数据接入
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
     * @summary 检测视频中的内容
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
     * @summary 检测视频中的内容
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
     * @summary 创建视频检测
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
     * @summary 创建视频检测
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
     * @summary 删除数据接入实例
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
     * @summary 删除数据接入实例
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
     * @summary 删除绑定
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
     * @summary 删除绑定
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
     * @summary 删除媒体集
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
     * @summary 删除媒体集
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
     * @summary 删除文件元信息
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
     * @summary 删除文件元信息
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
     * @summary 删除时空聚类
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
     * @summary 删除时空聚类
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
     * @summary 删除项目
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
     * @summary 删除项目
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
     * @summary 删除一个 Story
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
     * @summary 删除一个 Story
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
     * @summary 删除数据接入实例
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
     * @summary 删除数据接入实例
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
     * @summary 解绑ossbucket
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
     * @summary 解绑ossbucket
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
     * @summary 人体检测算子
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
     * @summary 人体检测算子
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
     * @summary 检测图片中车辆信息
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
     * @summary 检测图片中车辆信息
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
     * @summary 获取图片二维码检测
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
     * @summary 获取图片二维码检测
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
     * @summary 获取图片裁剪信息
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
     * @summary 获取图片裁剪信息
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
     * @summary 获取图片人脸信息
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
     * @summary 获取图片人脸信息
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
     * @summary 检测图像中的内容
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
     * @summary 检测图像中的内容
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
     * @summary 获取图片打分
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
     * @summary 获取图片打分
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
     * @summary 进行图片光学字符检测
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
     * @summary 进行图片光学字符检测
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
     * @summary 获取媒体文件信息
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
     * @summary 获取媒体文件信息
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
     * @summary 检测文本
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
     * @summary 检测文本
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
     * @summary 嵌入图片盲水印算子
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
     * @summary 嵌入图片盲水印算子
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
     * @summary 提取文档中的文本
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
     * @summary 提取文档中的文本
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
     * @summary 对 Dataset 内的元数据进行模糊搜索。
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
     * @summary 对 Dataset 内的元数据进行模糊搜索。
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
     * @summary 创建实时转码任务
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
     * @summary 创建实时转码任务
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
     * @summary 获取文档预览编辑凭证
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
     * @summary 获取文档预览编辑凭证
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
     * @summary 获取数据接入实例
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
     * @summary 获取数据接入实例
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
     * @summary 获取绑定
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
     * @summary 获取绑定
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
     * @summary 获取媒体集信息
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
     * @summary 获取媒体集信息
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
     * @summary 获取提取水印的结果
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
     * @summary 获取提取水印的结果
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
     * @summary 获取聚类
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
     * @summary 获取聚类
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
     * @summary 获取文件元信息
     *  *
     * @param GetFileMetaRequest $request GetFileMetaRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFileMetaResponse GetFileMetaResponse
     */
    public function getFileMetaWithOptions($request, $runtime)
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
     * @summary 获取文件元信息
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
     * @summary 获取图片审核任务结果
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
     * @summary 获取图片审核任务结果
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
     * @summary 获取绑定的ossbucket
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
     * @summary 获取绑定的ossbucket
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
     * @summary 获取项目信息
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
     * @summary 获取项目信息
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
     * @summary 返回一个 Story 的详细信息
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
     * @summary 返回一个 Story 的详细信息
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
     * @summary 获取任务信息
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
     * @summary 获取任务信息
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
     * @summary 获取数据接入实例
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
     * @summary 获取数据接入实例
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
     * @summary 获取视频标签检测任务结果
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
     * @summary 获取视频标签检测任务结果
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
     * @summary 添加文件元信息
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
     * @summary 添加文件元信息
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
     * @summary 列出数据接入实例
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
     * @summary 列出数据接入实例
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
     * @summary 列出绑定
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
     * @summary 列出绑定
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
     * @summary 列出媒体集列表
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
     * @summary 列出媒体集列表
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
     * @summary 获取项目列表
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
     * @summary 获取项目列表
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
     * @summary 获取地区列表
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
     * @summary 获取地区列表
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
     * @summary 获取任务信息列表
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
     * @summary 获取任务信息列表
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
     * @summary 列出数据接入实例
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
     * @summary 列出数据接入实例
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
     * @summary 查询聚类分组
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
     * @summary 查询聚类分组
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
     * @summary 查找时空分组
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
     * @summary 查找时空分组
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
     * @summary 查找相似图片分组
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
     * @summary 查找相似图片分组
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
     * @summary 查找 Story
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
     * @summary 查找 Story
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
     * @summary 刷新文档预览编辑凭证
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
     * @summary 刷新文档预览编辑凭证
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
     * @summary 为故事移除文件
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
     * @summary 为故事移除文件
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
     * @summary 恢复一个挂起的数据接入任务
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
     * @summary 恢复一个挂起的数据接入任务
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
     * @summary 恢复一个挂起的数据接入任务
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
     * @summary 恢复一个挂起的数据接入任务
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
     * @summary 以脸搜分组
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
     * @summary 以脸搜分组
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
     * @summary 通过输入自然语言文字，对 Dataset 内的元数据进行查询与统计分析
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
     * @summary 通过输入自然语言文字，对 Dataset 内的元数据进行查询与统计分析
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
     * @summary 通过 JSON 结构的查询语言，对 Dataset 内的元数据进行查询与统计分析。
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
     * @summary 通过 JSON 结构的查询语言，对 Dataset 内的元数据进行查询与统计分析。
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
     * @summary 挂起一个数据接入任务
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
     * @summary 挂起一个数据接入任务
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
     * @summary 挂起一个数据接入任务
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
     * @summary 挂起一个数据接入任务
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
     * @summary 更新数据接入实例
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
     * @summary 更新数据接入实例
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
     * @summary 更新聚类
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
     * @summary 更新聚类
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
     * @summary 更新文件元信息
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
     * @summary 更新文件元信息
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
     * @summary 更新时空聚类
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
     * @summary 更新时空聚类
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
     * @summary 更新项目
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
     * @summary 更新项目
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
     * @summary 更新故事
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
     * @summary 更新故事
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
     * @summary 更新数据接入实例
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
     * @summary 更新数据接入实例
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
