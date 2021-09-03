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
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\FuzzyQueryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\FuzzyQueryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFileSignedURIRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetFileSignedURIResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetWebofficeUrlRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetWebofficeUrlResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetWebofficeUrlShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\IndexFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\IndexFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\IndexFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListBindingsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListBindingsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\RefreshWebofficeTokenRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\RefreshWebofficeTokenResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\RefreshWebofficeTokenShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ResumeBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\ResumeBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\StopBindingRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\StopBindingResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateDatasetShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFileMetaRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFileMetaResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateFileMetaShrinkRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateProjectShrinkRequest;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeleteFileMetaResponse::fromMap($this->doRPCRequest('BatchDeleteFileMeta', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchGetFileMetaResponse::fromMap($this->doRPCRequest('BatchGetFileMeta', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchIndexFileMetaResponse::fromMap($this->doRPCRequest('BatchIndexFileMeta', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUpdateFileMetaResponse::fromMap($this->doRPCRequest('BatchUpdateFileMeta', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBindingResponse::fromMap($this->doRPCRequest('CreateBinding', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDatasetResponse::fromMap($this->doRPCRequest('CreateDataset', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectResponse::fromMap($this->doRPCRequest('CreateProject', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBindingResponse
     */
    public function deleteBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBindingResponse::fromMap($this->doRPCRequest('DeleteBinding', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDatasetResponse::fromMap($this->doRPCRequest('DeleteDataset', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFileMetaResponse::fromMap($this->doRPCRequest('DeleteFileMeta', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectResponse::fromMap($this->doRPCRequest('DeleteProject', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param FuzzyQueryRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FuzzyQueryResponse
     */
    public function fuzzyQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FuzzyQueryResponse::fromMap($this->doRPCRequest('FuzzyQuery', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBindingResponse::fromMap($this->doRPCRequest('GetBinding', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDatasetResponse::fromMap($this->doRPCRequest('GetDataset', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetFileMetaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetFileMetaResponse
     */
    public function getFileMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetFileMetaResponse::fromMap($this->doRPCRequest('GetFileMeta', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetFileSignedURIRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetFileSignedURIResponse
     */
    public function getFileSignedURIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetFileSignedURIResponse::fromMap($this->doRPCRequest('GetFileSignedURI', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetFileSignedURIRequest $request
     *
     * @return GetFileSignedURIResponse
     */
    public function getFileSignedURI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileSignedURIWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProjectResponse::fromMap($this->doRPCRequest('GetProject', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetWebofficeUrlRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return GetWebofficeUrlResponse
     */
    public function getWebofficeUrlWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetWebofficeUrlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->permission)) {
            $request->permissionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->permission), 'Permission', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->user), 'User', 'json');
        }
        if (!Utils::isUnset($tmpReq->watermark)) {
            $request->watermarkShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->watermark), 'Watermark', 'json');
        }
        if (!Utils::isUnset($tmpReq->assumeRoleChain)) {
            $request->assumeRoleChainShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->assumeRoleChain), 'AssumeRoleChain', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWebofficeUrlResponse::fromMap($this->doRPCRequest('GetWebofficeUrl', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetWebofficeUrlRequest $request
     *
     * @return GetWebofficeUrlResponse
     */
    public function getWebofficeUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWebofficeUrlWithOptions($request, $runtime);
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
        if (!Utils::isUnset($tmpReq->customLabels)) {
            $request->customLabelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return IndexFileMetaResponse::fromMap($this->doRPCRequest('IndexFileMeta', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBindingsResponse::fromMap($this->doRPCRequest('ListBindings', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDatasetsResponse::fromMap($this->doRPCRequest('ListDatasets', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectsResponse::fromMap($this->doRPCRequest('ListProjects', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshWebofficeTokenResponse::fromMap($this->doRPCRequest('RefreshWebofficeToken', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResumeBindingResponse::fromMap($this->doRPCRequest('ResumeBinding', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->query), 'Query', 'json');
        }
        if (!Utils::isUnset($tmpReq->aggregations)) {
            $request->aggregationsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aggregations, 'Aggregations', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SimpleQueryResponse::fromMap($this->doRPCRequest('SimpleQuery', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopBindingResponse::fromMap($this->doRPCRequest('StopBinding', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateDatasetRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDatasetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resetItems)) {
            $request->resetItemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resetItems, 'ResetItems', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDatasetResponse::fromMap($this->doRPCRequest('UpdateDataset', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        if (!Utils::isUnset($tmpReq->customLabels)) {
            $request->customLabelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customLabels, 'CustomLabels', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFileMetaResponse::fromMap($this->doRPCRequest('UpdateFileMeta', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resetItems)) {
            $request->resetItemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resetItems, 'ResetItems', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectResponse::fromMap($this->doRPCRequest('UpdateProject', '2020-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
