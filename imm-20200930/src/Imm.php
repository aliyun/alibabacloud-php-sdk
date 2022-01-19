<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClusteringTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClusteringTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClustersMergingTaskRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFigureClustersMergingTaskResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateStoryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateStoryResponse;
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
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageLabelsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageLabelsResponse;
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
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTasksRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListTasksResponse;
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
     * @param CreateDetectVideoLabelsTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateDetectVideoLabelsTaskResponse
     */
    public function createDetectVideoLabelsTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param CreateFigureClusteringTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateFigureClusteringTaskResponse
     */
    public function createFigureClusteringTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
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
     * @param CreateFigureClustersMergingTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateFigureClustersMergingTaskResponse
     */
    public function createFigureClustersMergingTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
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
     * @param CreateStoryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStoryResponse
     */
    public function createStoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param DetectImageLabelsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectImageLabelsResponse
     */
    public function detectImageLabelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($tmpReq->assumeRoleChain)) {
            $request->assumeRoleChainShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->assumeRoleChain), 'AssumeRoleChain', 'json');
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
        if (!Utils::isUnset($request->assumeRoleChainShrink)) {
            $query['AssumeRoleChain'] = $request->assumeRoleChainShrink;
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
     * @param ListTasksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
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
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
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
        if (!Utils::isUnset($tmpReq->assumeRoleChain)) {
            $request->assumeRoleChainShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->assumeRoleChain), 'AssumeRoleChain', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->assumeRoleChainShrink)) {
            $query['AssumeRoleChain'] = $request->assumeRoleChainShrink;
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
}
