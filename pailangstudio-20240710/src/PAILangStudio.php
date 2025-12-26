<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseJobRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseJobResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteKnowledgeBaseJobRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteKnowledgeBaseJobResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\DeleteKnowledgeBaseResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBaseJobsRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBaseJobsResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBasesRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBasesResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\RetrieveKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\RetrieveKnowledgeBaseResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseJobRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseJobResponse;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseRequest;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\UpdateKnowledgeBaseResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PAILangStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pailangstudio', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建知识库.
     *
     * @param request - CreateKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowledgeBaseResponse
     *
     * @param CreateKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateKnowledgeBaseResponse
     */
    public function createKnowledgeBaseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->chunkConfig) {
            @$body['ChunkConfig'] = $request->chunkConfig;
        }

        if (null !== $request->dataSources) {
            @$body['DataSources'] = $request->dataSources;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->embeddingConfig) {
            @$body['EmbeddingConfig'] = $request->embeddingConfig;
        }

        if (null !== $request->indexColumnConfig) {
            @$body['IndexColumnConfig'] = $request->indexColumnConfig;
        }

        if (null !== $request->knowledgeBaseType) {
            @$body['KnowledgeBaseType'] = $request->knowledgeBaseType;
        }

        if (null !== $request->metaDataConfig) {
            @$body['MetaDataConfig'] = $request->metaDataConfig;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->outputDir) {
            @$body['OutputDir'] = $request->outputDir;
        }

        if (null !== $request->runtimeId) {
            @$body['RuntimeId'] = $request->runtimeId;
        }

        if (null !== $request->vectorDBConfig) {
            @$body['VectorDBConfig'] = $request->vectorDBConfig;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建知识库.
     *
     * @param request - CreateKnowledgeBaseRequest
     *
     * @returns CreateKnowledgeBaseResponse
     *
     * @param CreateKnowledgeBaseRequest $request
     *
     * @return CreateKnowledgeBaseResponse
     */
    public function createKnowledgeBase($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowledgeBaseWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建知识库任务
     *
     * @param request - CreateKnowledgeBaseJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param CreateKnowledgeBaseJobRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateKnowledgeBaseJobResponse
     */
    public function createKnowledgeBaseJobWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->ecsSpecs) {
            @$body['EcsSpecs'] = $request->ecsSpecs;
        }

        if (null !== $request->embeddingConfig) {
            @$body['EmbeddingConfig'] = $request->embeddingConfig;
        }

        if (null !== $request->jobAction) {
            @$body['JobAction'] = $request->jobAction;
        }

        if (null !== $request->maxRunningTimeInSeconds) {
            @$body['MaxRunningTimeInSeconds'] = $request->maxRunningTimeInSeconds;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->userVpc) {
            @$body['UserVpc'] = $request->userVpc;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowledgeBaseJob',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateKnowledgeBaseJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建知识库任务
     *
     * @param request - CreateKnowledgeBaseJobRequest
     *
     * @returns CreateKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param CreateKnowledgeBaseJobRequest $request
     *
     * @return CreateKnowledgeBaseJobResponse
     */
    public function createKnowledgeBaseJob($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowledgeBaseJobWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * 删除知识库.
     *
     * @param request - DeleteKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKnowledgeBaseResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param DeleteKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteKnowledgeBaseResponse
     */
    public function deleteKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除知识库.
     *
     * @param request - DeleteKnowledgeBaseRequest
     *
     * @returns DeleteKnowledgeBaseResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param DeleteKnowledgeBaseRequest $request
     *
     * @return DeleteKnowledgeBaseResponse
     */
    public function deleteKnowledgeBase($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * 删除知识库任务
     *
     * @param request - DeleteKnowledgeBaseJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param string                        $KnowledgeBaseJobId
     * @param DeleteKnowledgeBaseJobRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteKnowledgeBaseJobResponse
     */
    public function deleteKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteKnowledgeBaseJob',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs/' . Url::percentEncode($KnowledgeBaseJobId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteKnowledgeBaseJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除知识库任务
     *
     * @param request - DeleteKnowledgeBaseJobRequest
     *
     * @returns DeleteKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param string                        $KnowledgeBaseJobId
     * @param DeleteKnowledgeBaseJobRequest $request
     *
     * @return DeleteKnowledgeBaseJobResponse
     */
    public function deleteKnowledgeBaseJob($KnowledgeBaseId, $KnowledgeBaseJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime);
    }

    /**
     * 查看知识库.
     *
     * @param request - GetKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKnowledgeBaseResponse
     *
     * @param string                  $KnowledgeBaseId
     * @param GetKnowledgeBaseRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetKnowledgeBaseResponse
     */
    public function getKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看知识库.
     *
     * @param request - GetKnowledgeBaseRequest
     *
     * @returns GetKnowledgeBaseResponse
     *
     * @param string                  $KnowledgeBaseId
     * @param GetKnowledgeBaseRequest $request
     *
     * @return GetKnowledgeBaseResponse
     */
    public function getKnowledgeBase($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * 查看知识库任务
     *
     * @param request - GetKnowledgeBaseJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKnowledgeBaseJobResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param string                     $KnowledgeBaseJobId
     * @param GetKnowledgeBaseJobRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetKnowledgeBaseJobResponse
     */
    public function getKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKnowledgeBaseJob',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs/' . Url::percentEncode($KnowledgeBaseJobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKnowledgeBaseJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看知识库任务
     *
     * @param request - GetKnowledgeBaseJobRequest
     *
     * @returns GetKnowledgeBaseJobResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param string                     $KnowledgeBaseJobId
     * @param GetKnowledgeBaseJobRequest $request
     *
     * @return GetKnowledgeBaseJobResponse
     */
    public function getKnowledgeBaseJob($KnowledgeBaseId, $KnowledgeBaseJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime);
    }

    /**
     * 获取知识库任务列表.
     *
     * @param request - ListKnowledgeBaseJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKnowledgeBaseJobsResponse
     *
     * @param string                       $KnowledgeBaseId
     * @param ListKnowledgeBaseJobsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListKnowledgeBaseJobsResponse
     */
    public function listKnowledgeBaseJobsWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobAction) {
            @$query['JobAction'] = $request->jobAction;
        }

        if (null !== $request->knowledgeBaseJobId) {
            @$query['KnowledgeBaseJobId'] = $request->knowledgeBaseJobId;
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

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKnowledgeBaseJobs',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKnowledgeBaseJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取知识库任务列表.
     *
     * @param request - ListKnowledgeBaseJobsRequest
     *
     * @returns ListKnowledgeBaseJobsResponse
     *
     * @param string                       $KnowledgeBaseId
     * @param ListKnowledgeBaseJobsRequest $request
     *
     * @return ListKnowledgeBaseJobsResponse
     */
    public function listKnowledgeBaseJobs($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKnowledgeBaseJobsWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * 获取知识库列表.
     *
     * @param request - ListKnowledgeBasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKnowledgeBasesResponse
     *
     * @param ListKnowledgeBasesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListKnowledgeBasesResponse
     */
    public function listKnowledgeBasesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->knowledgeBaseId) {
            @$query['KnowledgeBaseId'] = $request->knowledgeBaseId;
        }

        if (null !== $request->knowledgeBaseType) {
            @$query['KnowledgeBaseType'] = $request->knowledgeBaseType;
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

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKnowledgeBases',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKnowledgeBasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取知识库列表.
     *
     * @param request - ListKnowledgeBasesRequest
     *
     * @returns ListKnowledgeBasesResponse
     *
     * @param ListKnowledgeBasesRequest $request
     *
     * @return ListKnowledgeBasesResponse
     */
    public function listKnowledgeBases($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKnowledgeBasesWithOptions($request, $headers, $runtime);
    }

    /**
     * 搜索知识库.
     *
     * @param request - RetrieveKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetrieveKnowledgeBaseResponse
     *
     * @param string                       $KnowledgeBaseId
     * @param RetrieveKnowledgeBaseRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RetrieveKnowledgeBaseResponse
     */
    public function retrieveKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->hybridStrategyConfig) {
            @$body['HybridStrategyConfig'] = $request->hybridStrategyConfig;
        }

        if (null !== $request->metaDataFilterConditions) {
            @$body['MetaDataFilterConditions'] = $request->metaDataFilterConditions;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->queryMode) {
            @$body['QueryMode'] = $request->queryMode;
        }

        if (null !== $request->rerankConfig) {
            @$body['RerankConfig'] = $request->rerankConfig;
        }

        if (null !== $request->rewriteConfig) {
            @$body['RewriteConfig'] = $request->rewriteConfig;
        }

        if (null !== $request->scoreThreshold) {
            @$body['ScoreThreshold'] = $request->scoreThreshold;
        }

        if (null !== $request->topK) {
            @$body['TopK'] = $request->topK;
        }

        if (null !== $request->versionName) {
            @$body['VersionName'] = $request->versionName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetrieveKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/action/retrieve',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetrieveKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索知识库.
     *
     * @param request - RetrieveKnowledgeBaseRequest
     *
     * @returns RetrieveKnowledgeBaseResponse
     *
     * @param string                       $KnowledgeBaseId
     * @param RetrieveKnowledgeBaseRequest $request
     *
     * @return RetrieveKnowledgeBaseResponse
     */
    public function retrieveKnowledgeBase($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retrieveKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * 更新知识库.
     *
     * @param request - UpdateKnowledgeBaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKnowledgeBaseResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param UpdateKnowledgeBaseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateKnowledgeBaseResponse
     */
    public function updateKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoUpdateConfig) {
            @$body['AutoUpdateConfig'] = $request->autoUpdateConfig;
        }

        if (null !== $request->bindRuntime) {
            @$body['BindRuntime'] = $request->bindRuntime;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->metaDataConfig) {
            @$body['MetaDataConfig'] = $request->metaDataConfig;
        }

        if (null !== $request->runtimeId) {
            @$body['RuntimeId'] = $request->runtimeId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKnowledgeBase',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKnowledgeBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新知识库.
     *
     * @param request - UpdateKnowledgeBaseRequest
     *
     * @returns UpdateKnowledgeBaseResponse
     *
     * @param string                     $KnowledgeBaseId
     * @param UpdateKnowledgeBaseRequest $request
     *
     * @return UpdateKnowledgeBaseResponse
     */
    public function updateKnowledgeBase($KnowledgeBaseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKnowledgeBaseWithOptions($KnowledgeBaseId, $request, $headers, $runtime);
    }

    /**
     * 更新知识库任务
     *
     * @param request - UpdateKnowledgeBaseJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param string                        $KnowledgeBaseJobId
     * @param UpdateKnowledgeBaseJobRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateKnowledgeBaseJobResponse
     */
    public function updateKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKnowledgeBaseJob',
            'version' => '2024-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/langstudio/knowledgebases/' . Url::percentEncode($KnowledgeBaseId) . '/knowledgebasejobs/' . Url::percentEncode($KnowledgeBaseJobId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKnowledgeBaseJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新知识库任务
     *
     * @param request - UpdateKnowledgeBaseJobRequest
     *
     * @returns UpdateKnowledgeBaseJobResponse
     *
     * @param string                        $KnowledgeBaseId
     * @param string                        $KnowledgeBaseJobId
     * @param UpdateKnowledgeBaseJobRequest $request
     *
     * @return UpdateKnowledgeBaseJobResponse
     */
    public function updateKnowledgeBaseJob($KnowledgeBaseId, $KnowledgeBaseJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKnowledgeBaseJobWithOptions($KnowledgeBaseId, $KnowledgeBaseJobId, $request, $headers, $runtime);
    }
}
