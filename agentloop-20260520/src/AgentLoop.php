<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\AddMem0MemoriesRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\AddMem0MemoriesResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateAgentSpaceRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateAgentSpaceResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreAPIKeyRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreAPIKeyResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteAgentSpaceRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteAgentSpaceResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteContextStoreAPIKeyRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteContextStoreAPIKeyResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteContextStoreRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteContextStoreResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteMem0MemoriesRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteMem0MemoriesResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteMem0MemoriesShrinkRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteMem0MemoryRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteMem0MemoryResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeletePipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ExecuteQueryRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ExecuteQueryResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetAgentSpaceRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetAgentSpaceResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreAPIKeyRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreAPIKeyResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetDatasetRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetDatasetResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetMem0MemoriesRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetMem0MemoriesResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetMem0MemoryRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetMem0MemoryResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoreAPIKeysRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoreAPIKeysResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoresRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoresResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\SearchContextRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\SearchContextResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\SearchMem0MemoriesRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\SearchMem0MemoriesResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateAgentSpaceRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateAgentSpaceResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateContextStoreRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateContextStoreResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateMem0MemoryRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateMem0MemoryResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ValidateMem0APIKeyRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ValidateMem0APIKeyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentLoop extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agentloop', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 给记忆库中增加数据.
     *
     * @param request - AddMem0MemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMem0MemoriesResponse
     *
     * @param AddMem0MemoriesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AddMem0MemoriesResponse
     */
    public function addMem0MemoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddMem0Memories',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/memories',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddMem0MemoriesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 给记忆库中增加数据.
     *
     * @param request - AddMem0MemoriesRequest
     *
     * @returns AddMem0MemoriesResponse
     *
     * @param AddMem0MemoriesRequest $request
     *
     * @return AddMem0MemoriesResponse
     */
    public function addMem0Memories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addMem0MemoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建AgentSpace.
     *
     * @param request - CreateAgentSpaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentSpaceResponse
     *
     * @param CreateAgentSpaceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAgentSpaceResponse
     */
    public function createAgentSpaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->agentSpace) {
            @$body['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->cmsWorkspace) {
            @$body['cmsWorkspace'] = $request->cmsWorkspace;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentSpace',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAgentSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建AgentSpace.
     *
     * @param request - CreateAgentSpaceRequest
     *
     * @returns CreateAgentSpaceResponse
     *
     * @param CreateAgentSpaceRequest $request
     *
     * @return CreateAgentSpaceResponse
     */
    public function createAgentSpace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentSpaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建上下文库.
     *
     * @param request - CreateContextStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextStoreResponse
     *
     * @param string                    $agentSpace
     * @param CreateContextStoreRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateContextStoreResponse
     */
    public function createContextStoreWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->contextStoreName) {
            @$body['contextStoreName'] = $request->contextStoreName;
        }

        if (null !== $request->contextType) {
            @$body['contextType'] = $request->contextType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateContextStore',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateContextStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建上下文库.
     *
     * @param request - CreateContextStoreRequest
     *
     * @returns CreateContextStoreResponse
     *
     * @param string                    $agentSpace
     * @param CreateContextStoreRequest $request
     *
     * @return CreateContextStoreResponse
     */
    public function createContextStore($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createContextStoreWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * 创建 API Key.
     *
     * @param request - CreateContextStoreAPIKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateContextStoreAPIKeyResponse
     *
     * @param string                          $agentSpace
     * @param string                          $contextStoreName
     * @param CreateContextStoreAPIKeyRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateContextStoreAPIKeyResponse
     */
    public function createContextStoreAPIKeyWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateContextStoreAPIKey',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/apikey',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateContextStoreAPIKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 API Key.
     *
     * @param request - CreateContextStoreAPIKeyRequest
     *
     * @returns CreateContextStoreAPIKeyResponse
     *
     * @param string                          $agentSpace
     * @param string                          $contextStoreName
     * @param CreateContextStoreAPIKeyRequest $request
     *
     * @return CreateContextStoreAPIKeyResponse
     */
    public function createContextStoreAPIKey($agentSpace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createContextStoreAPIKeyWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatasetResponse
     *
     * @param string               $agentSpace
     * @param CreateDatasetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
     */
    public function createDatasetWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->datasetName) {
            @$body['datasetName'] = $request->datasetName;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->schema) {
            @$body['schema'] = $request->schema;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataset',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/dataset',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDatasetRequest
     *
     * @returns CreateDatasetResponse
     *
     * @param string               $agentSpace
     * @param CreateDatasetRequest $request
     *
     * @return CreateDatasetResponse
     */
    public function createDataset($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * 删除AgentSpace.
     *
     * @param request - DeleteAgentSpaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentSpaceResponse
     *
     * @param string                  $agentSpace
     * @param DeleteAgentSpaceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAgentSpaceResponse
     */
    public function deleteAgentSpaceWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteCmsWorkspace) {
            @$query['deleteCmsWorkspace'] = $request->deleteCmsWorkspace;
        }

        if (null !== $request->deleteMseNamespace) {
            @$query['deleteMseNamespace'] = $request->deleteMseNamespace;
        }

        if (null !== $request->deleteSlsProject) {
            @$query['deleteSlsProject'] = $request->deleteSlsProject;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAgentSpace',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除AgentSpace.
     *
     * @param request - DeleteAgentSpaceRequest
     *
     * @returns DeleteAgentSpaceResponse
     *
     * @param string                  $agentSpace
     * @param DeleteAgentSpaceRequest $request
     *
     * @return DeleteAgentSpaceResponse
     */
    public function deleteAgentSpace($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentSpaceWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * 删除上下文库.
     *
     * @param request - DeleteContextStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextStoreResponse
     *
     * @param string                    $agentSpace
     * @param string                    $contextStoreName
     * @param DeleteContextStoreRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteContextStoreResponse
     */
    public function deleteContextStoreWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteContextStore',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteContextStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除上下文库.
     *
     * @param request - DeleteContextStoreRequest
     *
     * @returns DeleteContextStoreResponse
     *
     * @param string                    $agentSpace
     * @param string                    $contextStoreName
     * @param DeleteContextStoreRequest $request
     *
     * @return DeleteContextStoreResponse
     */
    public function deleteContextStore($agentSpace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteContextStoreWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * 删除 API Key.
     *
     * @param request - DeleteContextStoreAPIKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContextStoreAPIKeyResponse
     *
     * @param string                          $agentSpace
     * @param string                          $contextStoreName
     * @param string                          $name
     * @param DeleteContextStoreAPIKeyRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteContextStoreAPIKeyResponse
     */
    public function deleteContextStoreAPIKeyWithOptions($agentSpace, $contextStoreName, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteContextStoreAPIKey',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/apikey/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteContextStoreAPIKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 API Key.
     *
     * @param request - DeleteContextStoreAPIKeyRequest
     *
     * @returns DeleteContextStoreAPIKeyResponse
     *
     * @param string                          $agentSpace
     * @param string                          $contextStoreName
     * @param string                          $name
     * @param DeleteContextStoreAPIKeyRequest $request
     *
     * @return DeleteContextStoreAPIKeyResponse
     */
    public function deleteContextStoreAPIKey($agentSpace, $contextStoreName, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteContextStoreAPIKeyWithOptions($agentSpace, $contextStoreName, $name, $request, $headers, $runtime);
    }

    /**
     * 删除数据集.
     *
     * @param request - DeleteDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatasetResponse
     *
     * @param string               $agentSpace
     * @param string               $datasetName
     * @param DeleteDatasetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($agentSpace, $datasetName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDataset',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/dataset/' . Url::percentEncode($datasetName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据集.
     *
     * @param request - DeleteDatasetRequest
     *
     * @returns DeleteDatasetResponse
     *
     * @param string               $agentSpace
     * @param string               $datasetName
     * @param DeleteDatasetRequest $request
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDataset($agentSpace, $datasetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetWithOptions($agentSpace, $datasetName, $request, $headers, $runtime);
    }

    /**
     * 批量删除记忆.
     *
     * @param tmpReq - DeleteMem0MemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMem0MemoriesResponse
     *
     * @param DeleteMem0MemoriesRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMem0MemoriesResponse
     */
    public function deleteMem0MemoriesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteMem0MemoriesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metadata) {
            $request->metadataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metadata, 'metadata', 'json');
        }

        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->agentId) {
            @$query['agent_id'] = $request->agentId;
        }

        if (null !== $request->appId) {
            @$query['app_id'] = $request->appId;
        }

        if (null !== $request->contextStoreId) {
            @$query['context_store_id'] = $request->contextStoreId;
        }

        if (null !== $request->metadataShrink) {
            @$query['metadata'] = $request->metadataShrink;
        }

        if (null !== $request->orgId) {
            @$query['org_id'] = $request->orgId;
        }

        if (null !== $request->projectId) {
            @$query['project_id'] = $request->projectId;
        }

        if (null !== $request->runId) {
            @$query['run_id'] = $request->runId;
        }

        if (null !== $request->userId) {
            @$query['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMem0Memories',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/memories',
            'method' => 'DELETE',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMem0MemoriesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 批量删除记忆.
     *
     * @param request - DeleteMem0MemoriesRequest
     *
     * @returns DeleteMem0MemoriesResponse
     *
     * @param DeleteMem0MemoriesRequest $request
     *
     * @return DeleteMem0MemoriesResponse
     */
    public function deleteMem0Memories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMem0MemoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除记忆.
     *
     * @param request - DeleteMem0MemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMem0MemoryResponse
     *
     * @param string                  $memoryId
     * @param DeleteMem0MemoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMem0MemoryResponse
     */
    public function deleteMem0MemoryWithOptions($memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->contextStoreId) {
            @$query['context_store_id'] = $request->contextStoreId;
        }

        if (null !== $request->orgId) {
            @$query['org_id'] = $request->orgId;
        }

        if (null !== $request->projectId) {
            @$query['project_id'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMem0Memory',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'DELETE',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMem0MemoryResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 删除记忆.
     *
     * @param request - DeleteMem0MemoryRequest
     *
     * @returns DeleteMem0MemoryResponse
     *
     * @param string                  $memoryId
     * @param DeleteMem0MemoryRequest $request
     *
     * @return DeleteMem0MemoryResponse
     */
    public function deleteMem0Memory($memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMem0MemoryWithOptions($memoryId, $request, $headers, $runtime);
    }

    /**
     * 删除流水线
     *
     * @param request - DeletePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePipelineResponse
     *
     * @param string                $agentSpace
     * @param string                $pipelineName
     * @param DeletePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePipeline',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除流水线
     *
     * @param request - DeletePipelineRequest
     *
     * @returns DeletePipelineResponse
     *
     * @param string                $agentSpace
     * @param string                $pipelineName
     * @param DeletePipelineRequest $request
     *
     * @return DeletePipelineResponse
     */
    public function deletePipeline($agentSpace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * 查询Regions.
     *
     * @param request - DescribeRegionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Regions.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 执行查询语句.
     *
     * @param request - ExecuteQueryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteQueryResponse
     *
     * @param string              $agentSpace
     * @param string              $datasetName
     * @param ExecuteQueryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ExecuteQueryResponse
     */
    public function executeQueryWithOptions($agentSpace, $datasetName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteQuery',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/dataset/' . Url::percentEncode($datasetName) . '/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行查询语句.
     *
     * @param request - ExecuteQueryRequest
     *
     * @returns ExecuteQueryResponse
     *
     * @param string              $agentSpace
     * @param string              $datasetName
     * @param ExecuteQueryRequest $request
     *
     * @return ExecuteQueryResponse
     */
    public function executeQuery($agentSpace, $datasetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeQueryWithOptions($agentSpace, $datasetName, $request, $headers, $runtime);
    }

    /**
     * 查询AgentSpace.
     *
     * @param request - GetAgentSpaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentSpaceResponse
     *
     * @param string               $agentSpace
     * @param GetAgentSpaceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetAgentSpaceResponse
     */
    public function getAgentSpaceWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAgentSpace',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询AgentSpace.
     *
     * @param request - GetAgentSpaceRequest
     *
     * @returns GetAgentSpaceResponse
     *
     * @param string               $agentSpace
     * @param GetAgentSpaceRequest $request
     *
     * @return GetAgentSpaceResponse
     */
    public function getAgentSpace($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentSpaceWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * 查询上下文库.
     *
     * @param request - GetContextStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextStoreResponse
     *
     * @param string                 $agentSpace
     * @param string                 $contextStoreName
     * @param GetContextStoreRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetContextStoreResponse
     */
    public function getContextStoreWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetContextStore',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetContextStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询上下文库.
     *
     * @param request - GetContextStoreRequest
     *
     * @returns GetContextStoreResponse
     *
     * @param string                 $agentSpace
     * @param string                 $contextStoreName
     * @param GetContextStoreRequest $request
     *
     * @return GetContextStoreResponse
     */
    public function getContextStore($agentSpace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContextStoreWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * 获取 API Key.
     *
     * @param request - GetContextStoreAPIKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextStoreAPIKeyResponse
     *
     * @param string                       $agentSpace
     * @param string                       $contextStoreName
     * @param string                       $name
     * @param GetContextStoreAPIKeyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetContextStoreAPIKeyResponse
     */
    public function getContextStoreAPIKeyWithOptions($agentSpace, $contextStoreName, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetContextStoreAPIKey',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/apikey/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetContextStoreAPIKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 API Key.
     *
     * @param request - GetContextStoreAPIKeyRequest
     *
     * @returns GetContextStoreAPIKeyResponse
     *
     * @param string                       $agentSpace
     * @param string                       $contextStoreName
     * @param string                       $name
     * @param GetContextStoreAPIKeyRequest $request
     *
     * @return GetContextStoreAPIKeyResponse
     */
    public function getContextStoreAPIKey($agentSpace, $contextStoreName, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContextStoreAPIKeyWithOptions($agentSpace, $contextStoreName, $name, $request, $headers, $runtime);
    }

    /**
     * 查询数据集.
     *
     * @param request - GetDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatasetResponse
     *
     * @param string            $agentSpace
     * @param string            $datasetName
     * @param GetDatasetRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetDatasetResponse
     */
    public function getDatasetWithOptions($agentSpace, $datasetName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDataset',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/dataset/' . Url::percentEncode($datasetName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据集.
     *
     * @param request - GetDatasetRequest
     *
     * @returns GetDatasetResponse
     *
     * @param string            $agentSpace
     * @param string            $datasetName
     * @param GetDatasetRequest $request
     *
     * @return GetDatasetResponse
     */
    public function getDataset($agentSpace, $datasetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetWithOptions($agentSpace, $datasetName, $request, $headers, $runtime);
    }

    /**
     * 查询记忆库数据.
     *
     * @param request - GetMem0MemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMem0MemoriesResponse
     *
     * @param GetMem0MemoriesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetMem0MemoriesResponse
     */
    public function getMem0MemoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->contextStoreId) {
            @$query['context_store_id'] = $request->contextStoreId;
        }

        if (null !== $request->enableGraph) {
            @$query['enable_graph'] = $request->enableGraph;
        }

        if (null !== $request->orgId) {
            @$query['org_id'] = $request->orgId;
        }

        if (null !== $request->projectId) {
            @$query['project_id'] = $request->projectId;
        }

        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMem0Memories',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/memories',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return GetMem0MemoriesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询记忆库数据.
     *
     * @param request - GetMem0MemoriesRequest
     *
     * @returns GetMem0MemoriesResponse
     *
     * @param GetMem0MemoriesRequest $request
     *
     * @return GetMem0MemoriesResponse
     */
    public function getMem0Memories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMem0MemoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询记忆.
     *
     * @param request - GetMem0MemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMem0MemoryResponse
     *
     * @param string               $memoryId
     * @param GetMem0MemoryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetMem0MemoryResponse
     */
    public function getMem0MemoryWithOptions($memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->contextStoreId) {
            @$query['context_store_id'] = $request->contextStoreId;
        }

        if (null !== $request->orgId) {
            @$query['org_id'] = $request->orgId;
        }

        if (null !== $request->projectId) {
            @$query['project_id'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMem0Memory',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMem0MemoryResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询记忆.
     *
     * @param request - GetMem0MemoryRequest
     *
     * @returns GetMem0MemoryResponse
     *
     * @param string               $memoryId
     * @param GetMem0MemoryRequest $request
     *
     * @return GetMem0MemoryResponse
     */
    public function getMem0Memory($memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMem0MemoryWithOptions($memoryId, $request, $headers, $runtime);
    }

    /**
     * 查询流水线
     *
     * @param request - GetPipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineResponse
     *
     * @param string             $agentSpace
     * @param string             $pipelineName
     * @param GetPipelineRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetPipelineResponse
     */
    public function getPipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPipeline',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询流水线
     *
     * @param request - GetPipelineRequest
     *
     * @returns GetPipelineResponse
     *
     * @param string             $agentSpace
     * @param string             $pipelineName
     * @param GetPipelineRequest $request
     *
     * @return GetPipelineResponse
     */
    public function getPipeline($agentSpace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * 查询AgentSpace列表.
     *
     * @param request - ListAgentSpacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentSpacesResponse
     *
     * @param ListAgentSpacesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListAgentSpacesResponse
     */
    public function listAgentSpacesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentSpaces',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentSpacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询AgentSpace列表.
     *
     * @param request - ListAgentSpacesRequest
     *
     * @returns ListAgentSpacesResponse
     *
     * @param ListAgentSpacesRequest $request
     *
     * @return ListAgentSpacesResponse
     */
    public function listAgentSpaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentSpacesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取 API Key 列表.
     *
     * @param request - ListContextStoreAPIKeysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextStoreAPIKeysResponse
     *
     * @param string                         $agentSpace
     * @param string                         $contextStoreName
     * @param ListContextStoreAPIKeysRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListContextStoreAPIKeysResponse
     */
    public function listContextStoreAPIKeysWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextStoreAPIKeys',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/apikey',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListContextStoreAPIKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 API Key 列表.
     *
     * @param request - ListContextStoreAPIKeysRequest
     *
     * @returns ListContextStoreAPIKeysResponse
     *
     * @param string                         $agentSpace
     * @param string                         $contextStoreName
     * @param ListContextStoreAPIKeysRequest $request
     *
     * @return ListContextStoreAPIKeysResponse
     */
    public function listContextStoreAPIKeys($agentSpace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContextStoreAPIKeysWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * 查询上下文库列表.
     *
     * @param request - ListContextStoresRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContextStoresResponse
     *
     * @param string                   $agentSpace
     * @param ListContextStoresRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListContextStoresResponse
     */
    public function listContextStoresWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contextStoreName) {
            @$query['contextStoreName'] = $request->contextStoreName;
        }

        if (null !== $request->contextType) {
            @$query['contextType'] = $request->contextType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContextStores',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListContextStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询上下文库列表.
     *
     * @param request - ListContextStoresRequest
     *
     * @returns ListContextStoresResponse
     *
     * @param string                   $agentSpace
     * @param ListContextStoresRequest $request
     *
     * @return ListContextStoresResponse
     */
    public function listContextStores($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listContextStoresWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * 查询数据集列表.
     *
     * @param request - ListDatasetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatasetsResponse
     *
     * @param string              $agentSpace
     * @param ListDatasetsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListDatasetsResponse
     */
    public function listDatasetsWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['datasetName'] = $request->datasetName;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatasets',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/dataset',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatasetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据集列表.
     *
     * @param request - ListDatasetsRequest
     *
     * @returns ListDatasetsResponse
     *
     * @param string              $agentSpace
     * @param ListDatasetsRequest $request
     *
     * @return ListDatasetsResponse
     */
    public function listDatasets($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasetsWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * 查询流水线列表.
     *
     * @param request - ListPipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelinesResponse
     *
     * @param string               $agentSpace
     * @param ListPipelinesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pipelineName) {
            @$query['pipelineName'] = $request->pipelineName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelines',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询流水线列表.
     *
     * @param request - ListPipelinesRequest
     *
     * @returns ListPipelinesResponse
     *
     * @param string               $agentSpace
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelinesWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * 搜索上下文.
     *
     * @param request - SearchContextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchContextResponse
     *
     * @param string               $agentSpace
     * @param string               $contextStoreName
     * @param SearchContextRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SearchContextResponse
     */
    public function searchContextWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->filter) {
            @$body['filter'] = $request->filter;
        }

        if (null !== $request->formatted) {
            @$body['formatted'] = $request->formatted;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->retrievalOption) {
            @$body['retrievalOption'] = $request->retrievalOption;
        }

        if (null !== $request->threshold) {
            @$body['threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchContext',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '/context/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索上下文.
     *
     * @param request - SearchContextRequest
     *
     * @returns SearchContextResponse
     *
     * @param string               $agentSpace
     * @param string               $contextStoreName
     * @param SearchContextRequest $request
     *
     * @return SearchContextResponse
     */
    public function searchContext($agentSpace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchContextWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * 查询记忆库内容.
     *
     * @param request - SearchMem0MemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchMem0MemoriesResponse
     *
     * @param SearchMem0MemoriesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SearchMem0MemoriesResponse
     */
    public function searchMem0MemoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->contextStoreId) {
            @$query['context_store_id'] = $request->contextStoreId;
        }

        if (null !== $request->enableGraph) {
            @$query['enable_graph'] = $request->enableGraph;
        }

        if (null !== $request->orgId) {
            @$query['org_id'] = $request->orgId;
        }

        if (null !== $request->projectId) {
            @$query['project_id'] = $request->projectId;
        }

        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchMem0Memories',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/memories/search',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return SearchMem0MemoriesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询记忆库内容.
     *
     * @param request - SearchMem0MemoriesRequest
     *
     * @returns SearchMem0MemoriesResponse
     *
     * @param SearchMem0MemoriesRequest $request
     *
     * @return SearchMem0MemoriesResponse
     */
    public function searchMem0Memories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchMem0MemoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新AgentSpace.
     *
     * @param request - UpdateAgentSpaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentSpaceResponse
     *
     * @param string                  $agentSpace
     * @param UpdateAgentSpaceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAgentSpaceResponse
     */
    public function updateAgentSpaceWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->cmsWorkspace) {
            @$body['cmsWorkspace'] = $request->cmsWorkspace;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentSpace',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAgentSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新AgentSpace.
     *
     * @param request - UpdateAgentSpaceRequest
     *
     * @returns UpdateAgentSpaceResponse
     *
     * @param string                  $agentSpace
     * @param UpdateAgentSpaceRequest $request
     *
     * @return UpdateAgentSpaceResponse
     */
    public function updateAgentSpace($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentSpaceWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * 修改上下文库配置.
     *
     * @param request - UpdateContextStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateContextStoreResponse
     *
     * @param string                    $agentSpace
     * @param string                    $contextStoreName
     * @param UpdateContextStoreRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateContextStoreResponse
     */
    public function updateContextStoreWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->contextType) {
            @$body['contextType'] = $request->contextType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateContextStore',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/contextstore/' . Url::percentEncode($contextStoreName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateContextStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改上下文库配置.
     *
     * @param request - UpdateContextStoreRequest
     *
     * @returns UpdateContextStoreResponse
     *
     * @param string                    $agentSpace
     * @param string                    $contextStoreName
     * @param UpdateContextStoreRequest $request
     *
     * @return UpdateContextStoreResponse
     */
    public function updateContextStore($agentSpace, $contextStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateContextStoreWithOptions($agentSpace, $contextStoreName, $request, $headers, $runtime);
    }

    /**
     * 更新数据集.
     *
     * @param request - UpdateDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDatasetResponse
     *
     * @param string               $agentSpace
     * @param string               $datasetName
     * @param UpdateDatasetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($agentSpace, $datasetName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->schema) {
            @$body['schema'] = $request->schema;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataset',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/dataset/' . Url::percentEncode($datasetName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据集.
     *
     * @param request - UpdateDatasetRequest
     *
     * @returns UpdateDatasetResponse
     *
     * @param string               $agentSpace
     * @param string               $datasetName
     * @param UpdateDatasetRequest $request
     *
     * @return UpdateDatasetResponse
     */
    public function updateDataset($agentSpace, $datasetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatasetWithOptions($agentSpace, $datasetName, $request, $headers, $runtime);
    }

    /**
     * 修改记忆.
     *
     * @param request - UpdateMem0MemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMem0MemoryResponse
     *
     * @param string                  $memoryId
     * @param UpdateMem0MemoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMem0MemoryResponse
     */
    public function updateMem0MemoryWithOptions($memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->contextStoreId) {
            @$query['context_store_id'] = $request->contextStoreId;
        }

        if (null !== $request->orgId) {
            @$query['org_id'] = $request->orgId;
        }

        if (null !== $request->projectId) {
            @$query['project_id'] = $request->projectId;
        }

        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMem0Memory',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'PUT',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMem0MemoryResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 修改记忆.
     *
     * @param request - UpdateMem0MemoryRequest
     *
     * @returns UpdateMem0MemoryResponse
     *
     * @param string                  $memoryId
     * @param UpdateMem0MemoryRequest $request
     *
     * @return UpdateMem0MemoryResponse
     */
    public function updateMem0Memory($memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMem0MemoryWithOptions($memoryId, $request, $headers, $runtime);
    }

    /**
     * 更新流水线
     *
     * @param request - UpdatePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePipelineResponse
     *
     * @param string                $agentSpace
     * @param string                $pipelineName
     * @param UpdatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->executePolicy) {
            @$body['executePolicy'] = $request->executePolicy;
        }

        if (null !== $request->pipeline) {
            @$body['pipeline'] = $request->pipeline;
        }

        if (null !== $request->sink) {
            @$body['sink'] = $request->sink;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePipeline',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新流水线
     *
     * @param request - UpdatePipelineRequest
     *
     * @returns UpdatePipelineResponse
     *
     * @param string                $agentSpace
     * @param string                $pipelineName
     * @param UpdatePipelineRequest $request
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipeline($agentSpace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * 校验 Mem0 / ContextStore API Key.
     *
     * @param request - ValidateMem0APIKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateMem0APIKeyResponse
     *
     * @param ValidateMem0APIKeyRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ValidateMem0APIKeyResponse
     */
    public function validateMem0APIKeyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateMem0APIKey',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/ping',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ValidateMem0APIKeyResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 校验 Mem0 / ContextStore API Key.
     *
     * @param request - ValidateMem0APIKeyRequest
     *
     * @returns ValidateMem0APIKeyResponse
     *
     * @param ValidateMem0APIKeyRequest $request
     *
     * @return ValidateMem0APIKeyResponse
     */
    public function validateMem0APIKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateMem0APIKeyWithOptions($request, $headers, $runtime);
    }
}
