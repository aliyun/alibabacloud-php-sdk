<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddStoryFilesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddStoryFilesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\AddStoryFilesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\AttachOSSBucketRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\AttachOSSBucketResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchDeleteFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchDeleteFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchDeleteFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchGetFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchGetFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchGetFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchIndexFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchIndexFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchIndexFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchUpdateFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchUpdateFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\BatchUpdateFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDetectVideoLabelsTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDetectVideoLabelsTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateDetectVideoLabelsTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClusteringTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClusteringTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClusteringTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClustersMergingTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClustersMergingTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClustersMergingTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageModerationTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageModerationTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageModerationTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateOfficeConversionTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateOfficeConversionTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateOfficeConversionTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateStoryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateStoryShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateVideoModerationTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateVideoModerationTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateVideoModerationTaskShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteStoryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetachOSSBucketRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetachOSSBucketResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageBodiesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageBodiesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageBodiesShrinkRequest;
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
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectTextAnomalyRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectTextAnomalyResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\FuzzyQueryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\FuzzyQueryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDetectVideoLabelsResultRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDetectVideoLabelsResultResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFigureClusterRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFigureClusterResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetMediaMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetMediaMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetMediaMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetOSSBucketAttachmentRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetOSSBucketAttachmentResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetStoryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetWebofficeURLRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetWebofficeURLResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetWebofficeURLShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\IndexFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\IndexFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\IndexFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListBindingsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListBindingsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTasksRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTasksResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\MergeFigureClustersRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\MergeFigureClustersResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryFigureClustersRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryFigureClustersResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryStoriesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryStoriesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\QueryStoriesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\RefreshWebofficeTokenRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\RefreshWebofficeTokenResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\RefreshWebofficeTokenShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\RemoveStoryFilesRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\RemoveStoryFilesResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\RemoveStoryFilesShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ResumeBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ResumeBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SemanticQueryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SemanticQueryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\StopBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\StopBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFigureClusterRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFigureClusterResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFigureClusterShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateStoryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateStoryShrinkRequest;
use AlibabaCloud\Tea\Tea;
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
     * @param AddStoryFilesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return AddStoryFilesResponse
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
     * @param AttachOSSBucketRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AttachOSSBucketResponse
     */
    public function attachOSSBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param BatchDeleteFileMetaRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return BatchDeleteFileMetaResponse
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
     * @param BatchGetFileMetaRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return BatchGetFileMetaResponse
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
     * @param BatchIndexFileMetaRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return BatchIndexFileMetaResponse
     */
    public function batchIndexFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchIndexFileMetaShrinkRequest([]);
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
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
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
     * @param BatchUpdateFileMetaRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return BatchUpdateFileMetaResponse
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
     * @param CreateBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBindingResponse
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
     * @param CreateDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
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
     * @param CreateDetectVideoLabelsTaskRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateDetectVideoLabelsTaskResponse
     */
    public function createDetectVideoLabelsTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDetectVideoLabelsTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
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
            'action'      => 'CreateDetectVideoLabelsTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDetectVideoLabelsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDetectVideoLabelsTaskRequest $request
     *
     * @return CreateDetectVideoLabelsTaskResponse
     */
    public function createDetectVideoLabelsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDetectVideoLabelsTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateFigureClusteringTaskRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateFigureClusteringTaskResponse
     */
    public function createFigureClusteringTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFigureClusteringTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
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
     * @param CreateFigureClustersMergingTaskRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateFigureClustersMergingTaskResponse
     */
    public function createFigureClustersMergingTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFigureClustersMergingTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
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
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
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
     * @param CreateImageModerationTaskRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateImageModerationTaskResponse
     */
    public function createImageModerationTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateImageModerationTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->reviewer)) {
            $query['Reviewer'] = $request->reviewer;
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
     * @param CreateImageSplicingTaskRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateImageSplicingTaskResponse
     */
    public function createImageSplicingTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateImageSplicingTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
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
     * @param CreateMediaConvertTaskRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMediaConvertTaskResponse
     */
    public function createMediaConvertTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMediaConvertTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
        if (!Utils::isUnset($request->credentialConfigShrink)) {
            $query['CredentialConfig'] = $request->credentialConfigShrink;
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
     * @param CreateOfficeConversionTaskRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOfficeConversionTaskResponse
     */
    public function createOfficeConversionTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOfficeConversionTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        if (!Utils::isUnset($tmpReq->trimPolicy)) {
            $request->trimPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->trimPolicy), 'TrimPolicy', 'json');
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
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
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
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->engineConcurrency)) {
            $query['EngineConcurrency'] = $request->engineConcurrency;
        }
        if (!Utils::isUnset($request->projectMaxDatasetCount)) {
            $query['ProjectMaxDatasetCount'] = $request->projectMaxDatasetCount;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->projectQueriesPerSecond)) {
            $query['ProjectQueriesPerSecond'] = $request->projectQueriesPerSecond;
        }
        if (!Utils::isUnset($request->serviceRole)) {
            $query['ServiceRole'] = $request->serviceRole;
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
     * @param CreateStoryRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStoryResponse
     */
    public function createStoryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateStoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customLabels)) {
            $request->customLabelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
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
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $body['NotifyEndpoint'] = $request->notifyEndpoint;
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
     * @param CreateVideoModerationTaskRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateVideoModerationTaskResponse
     */
    public function createVideoModerationTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateVideoModerationTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->reviewer)) {
            $query['Reviewer'] = $request->reviewer;
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
     * @param DeleteBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBindingResponse
     */
    public function deleteBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cleanup)) {
            $query['Cleanup'] = $request->cleanup;
        }
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
     * @param DeleteDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDatasetResponse
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
     * @param DeleteFileMetaRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFileMetaResponse
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
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
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
     * @param DeleteStoryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteStoryResponse
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
     * @param DetachOSSBucketRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetachOSSBucketResponse
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
     * @param DetectImageBodiesRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DetectImageBodiesResponse
     */
    public function detectImageBodiesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageBodiesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
     * @param DetectImageCodesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DetectImageCodesResponse
     */
    public function detectImageCodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageCodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
     * @param DetectImageCroppingRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DetectImageCroppingResponse
     */
    public function detectImageCroppingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageCroppingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
     * @param DetectImageFacesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DetectImageFacesResponse
     */
    public function detectImageFacesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageFacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
     * @param DetectImageLabelsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DetectImageLabelsResponse
     */
    public function detectImageLabelsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageLabelsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
     * @param DetectImageScoreRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DetectImageScoreResponse
     */
    public function detectImageScoreWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectImageScoreShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
     * @param DetectTextAnomalyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectTextAnomalyResponse
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
     * @param FuzzyQueryRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FuzzyQueryResponse
     */
    public function fuzzyQueryWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
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
     * @param GetBindingRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetBindingResponse
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
     * @param GetDatasetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetDatasetResponse
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
     * @param GetDetectVideoLabelsResultRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDetectVideoLabelsResultResponse
     */
    public function getDetectVideoLabelsResultWithOptions($request, $runtime)
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
            'action'      => 'GetDetectVideoLabelsResult',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDetectVideoLabelsResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDetectVideoLabelsResultRequest $request
     *
     * @return GetDetectVideoLabelsResultResponse
     */
    public function getDetectVideoLabelsResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectVideoLabelsResultWithOptions($request, $runtime);
    }

    /**
     * @param GetFigureClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetFigureClusterResponse
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
     * @param GetFileMetaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetFileMetaResponse
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
     * @param GetMediaMetaRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return GetMediaMetaResponse
     */
    public function getMediaMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMediaMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
            'action'      => 'GetMediaMeta',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaMetaRequest $request
     *
     * @return GetMediaMetaResponse
     */
    public function getMediaMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaMetaWithOptions($request, $runtime);
    }

    /**
     * @param GetOSSBucketAttachmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOSSBucketAttachmentResponse
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
     * @param GetProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
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
     * @param GetStoryRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetStoryResponse
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
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
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
     * @param GetWebofficeURLRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return GetWebofficeURLResponse
     */
    public function getWebofficeURLWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetWebofficeURLShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->permission)) {
            $request->permissionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->permission), 'Permission', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->user), 'User', 'json');
        }
        if (!Utils::isUnset($tmpReq->watermark)) {
            $request->watermarkShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->watermark), 'Watermark', 'json');
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
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
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
            'action'      => 'GetWebofficeURL',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWebofficeURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWebofficeURLRequest $request
     *
     * @return GetWebofficeURLResponse
     */
    public function getWebofficeURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWebofficeURLWithOptions($request, $runtime);
    }

    /**
     * @param IndexFileMetaRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return IndexFileMetaResponse
     */
    public function indexFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new IndexFileMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->file)) {
            $request->fileShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->file), 'File', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->fileShrink)) {
            $query['File'] = $request->fileShrink;
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
     * @param ListBindingsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBindingsResponse
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
     * @param ListDatasetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDatasetsResponse
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
     * @param ListProjectsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $runtime)
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
     * @param ListRegionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
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
     * @param ListTasksRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->endTimeRange)) {
            $request->endTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->endTimeRange), 'EndTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->startTimeRange)) {
            $request->startTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->startTimeRange), 'StartTimeRange', 'json');
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
     * @param MergeFigureClustersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return MergeFigureClustersResponse
     */
    public function mergeFigureClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterIdFrom)) {
            $query['ClusterIdFrom'] = $request->clusterIdFrom;
        }
        if (!Utils::isUnset($request->clusterIdTo)) {
            $query['ClusterIdTo'] = $request->clusterIdTo;
        }
        if (!Utils::isUnset($request->customMessage)) {
            $query['CustomMessage'] = $request->customMessage;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->figureType)) {
            $query['FigureType'] = $request->figureType;
        }
        if (!Utils::isUnset($request->notifyTopicEndpoint)) {
            $query['NotifyTopicEndpoint'] = $request->notifyTopicEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MergeFigureClusters',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MergeFigureClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MergeFigureClustersRequest $request
     *
     * @return MergeFigureClustersResponse
     */
    public function mergeFigureClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mergeFigureClustersWithOptions($request, $runtime);
    }

    /**
     * @param QueryFigureClustersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryFigureClustersResponse
     */
    public function queryFigureClustersWithOptions($request, $runtime)
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
     * @param QueryStoriesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return QueryStoriesResponse
     */
    public function queryStoriesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryStoriesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createTimeRange)) {
            $request->createTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->createTimeRange), 'CreateTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->figureClusterIds)) {
            $request->figureClusterIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->figureClusterIds, 'FigureClusterIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->storyEndTimeRange)) {
            $request->storyEndTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->storyEndTimeRange), 'StoryEndTimeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->storyStartTimeRange)) {
            $request->storyStartTimeRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->storyStartTimeRange), 'StoryStartTimeRange', 'json');
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
     * @param RefreshWebofficeTokenRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return RefreshWebofficeTokenResponse
     */
    public function refreshWebofficeTokenWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RefreshWebofficeTokenShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->credentialConfig)) {
            $request->credentialConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->credentialConfig), 'CredentialConfig', 'json');
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
     * @param RemoveStoryFilesRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveStoryFilesResponse
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
     * @param ResumeBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResumeBindingResponse
     */
    public function resumeBindingWithOptions($request, $runtime)
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
            'action'      => 'ResumeBinding',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeBindingRequest $request
     *
     * @return ResumeBindingResponse
     */
    public function resumeBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeBindingWithOptions($request, $runtime);
    }

    /**
     * @param SemanticQueryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SemanticQueryResponse
     */
    public function semanticQueryWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
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
     * @param SimpleQueryRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SimpleQueryResponse
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
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->query), 'Query', 'json');
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
     * @param StopBindingRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopBindingResponse
     */
    public function stopBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->URI)) {
            $query['URI'] = $request->URI;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopBinding',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopBindingRequest $request
     *
     * @return StopBindingResponse
     */
    public function stopBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopBindingWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDatasetResponse
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
     * @param UpdateFigureClusterRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateFigureClusterResponse
     */
    public function updateFigureClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateFigureClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->figureCluster)) {
            $request->figureClusterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->figureCluster), 'FigureCluster', 'json');
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
     * @param UpdateFileMetaRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFileMetaResponse
     */
    public function updateFileMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateFileMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->file)) {
            $request->fileShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->file), 'File', 'json');
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
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->engineConcurrency)) {
            $query['EngineConcurrency'] = $request->engineConcurrency;
        }
        if (!Utils::isUnset($request->projectMaxDatasetCount)) {
            $query['ProjectMaxDatasetCount'] = $request->projectMaxDatasetCount;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->projectQueriesPerSecond)) {
            $query['ProjectQueriesPerSecond'] = $request->projectQueriesPerSecond;
        }
        if (!Utils::isUnset($request->serviceRole)) {
            $query['ServiceRole'] = $request->serviceRole;
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
     * @param UpdateStoryRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateStoryResponse
     */
    public function updateStoryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateStoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cover)) {
            $request->coverShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->cover), 'Cover', 'json');
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
     * @param UpdateStoryRequest $request
     *
     * @return UpdateStoryResponse
     */
    public function updateStory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStoryWithOptions($request, $runtime);
    }
}
