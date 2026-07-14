<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\AddDatasetDataRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\AddDatasetDataResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CancelPipelineRunRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CancelPipelineRunResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateAgentSpaceRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateAgentSpaceResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreAPIKeyRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreAPIKeyResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateEvaluationTaskRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateEvaluationTaskResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateEvaluatorRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateEvaluatorResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateEvaluatorSkillRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateEvaluatorSkillResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteAgentSpaceRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteAgentSpaceResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteContextStoreAPIKeyRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteContextStoreAPIKeyResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteContextStoreRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteContextStoreResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteEvaluationRunRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteEvaluationRunResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteEvaluationTaskRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteEvaluationTaskResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteEvaluatorRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteEvaluatorResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteEvaluatorSkillRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\DeleteEvaluatorSkillResponse;
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
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluationRunRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluationRunResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluationTaskRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluationTaskResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorSkillRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorSkillResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineRunRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineRunResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineStatsRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineStatsResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoreAPIKeysRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoreAPIKeysResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoresRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoresResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluationRunsRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluationRunsResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluationTasksRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluationTasksResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluatorSkillsRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluatorSkillsResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluatorsRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluatorsResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelineRunsRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelineRunsResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\PausePipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\PausePipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\PreviewPipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\PreviewPipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ResumePipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ResumePipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\RunPipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\RunPipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\SearchContextRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\SearchContextResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\TerminatePipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\TerminatePipelineResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateAgentSpaceRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateAgentSpaceResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateContextStoreRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateContextStoreResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateEvaluationRunRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateEvaluationRunResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateEvaluationTaskRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateEvaluationTaskResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateEvaluatorRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateEvaluatorResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateEvaluatorSkillRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateEvaluatorSkillResponse;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdatePipelineResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentLoop extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-zhangjiakou' => 'agentloop.cn-zhangjiakou.aliyuncs.com',
            'cn-shenzhen' => 'agentloop.cn-shenzhen.aliyuncs.com',
            'cn-shanghai' => 'agentloop.cn-shanghai.aliyuncs.com',
            'cn-hongkong' => 'agentloop.cn-hongkong.aliyuncs.com',
            'cn-hangzhou' => 'agentloop.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'agentloop.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'agentloop.cn-chengdu.aliyuncs.com',
            'cn-beijing' => 'agentloop.cn-beijing.aliyuncs.com',
            'ap-southeast-1' => 'agentloop.ap-southeast-1.aliyuncs.com',
        ];
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
     * Appends structured data rows to a specified dataset without requiring the client to construct SQL statements.
     *
     * @param request - AddDatasetDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDatasetDataResponse
     *
     * @param string                $agentSpace
     * @param string                $datasetName
     * @param AddDatasetDataRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AddDatasetDataResponse
     */
    public function addDatasetDataWithOptions($agentSpace, $datasetName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->dataArray) {
            @$body['dataArray'] = $request->dataArray;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDatasetData',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/dataset/' . Url::percentEncode($datasetName) . '/rows',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddDatasetDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Appends structured data rows to a specified dataset without requiring the client to construct SQL statements.
     *
     * @param request - AddDatasetDataRequest
     *
     * @returns AddDatasetDataResponse
     *
     * @param string                $agentSpace
     * @param string                $datasetName
     * @param AddDatasetDataRequest $request
     *
     * @return AddDatasetDataResponse
     */
    public function addDatasetData($agentSpace, $datasetName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addDatasetDataWithOptions($agentSpace, $datasetName, $request, $headers, $runtime);
    }

    /**
     * Cancels a pipeline run.
     *
     * @param request - CancelPipelineRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelPipelineRunResponse
     *
     * @param string                   $agentSpace
     * @param string                   $pipelineName
     * @param string                   $runId
     * @param CancelPipelineRunRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CancelPipelineRunResponse
     */
    public function cancelPipelineRunWithOptions($agentSpace, $pipelineName, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelPipelineRun',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '/runs/' . Url::percentEncode($runId) . '/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a pipeline run.
     *
     * @param request - CancelPipelineRunRequest
     *
     * @returns CancelPipelineRunResponse
     *
     * @param string                   $agentSpace
     * @param string                   $pipelineName
     * @param string                   $runId
     * @param CancelPipelineRunRequest $request
     *
     * @return CancelPipelineRunResponse
     */
    public function cancelPipelineRun($agentSpace, $pipelineName, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelPipelineRunWithOptions($agentSpace, $pipelineName, $runId, $request, $headers, $runtime);
    }

    /**
     * Creates an AgentSpace.
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

        if (null !== $request->trajectoryStoreEnabled) {
            @$body['trajectoryStoreEnabled'] = $request->trajectoryStoreEnabled;
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
     * Creates an AgentSpace.
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
     * Creates a context store.
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
     * Creates a context store.
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
     * Creates an API key.
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
     * Creates an API key.
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
     * Creates a dataset.
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
     * Creates a dataset.
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
     * Creates an evaluation task.
     *
     * @remarks
     * Calls the CreateEvaluationTask operation to create an evaluation task in a specified AgentSpace. The server verifies AgentSpace permissions, initializes evaluation result storage, checks the uniqueness of the task name, and asynchronously creates and executes an EvaluationRun based on `taskMode` and `runStrategies`.
     * This operation is applicable to running built-in or custom evaluators on Trace, Dataset, or SLS Log data. It supports two execution strategies: historical backfill and continuous evaluation.
     *
     * @param request - CreateEvaluationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEvaluationTaskResponse
     *
     * @param string                      $agentSpace
     * @param CreateEvaluationTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEvaluationTaskResponse
     */
    public function createEvaluationTaskWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->channel) {
            @$body['channel'] = $request->channel;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->dataFilter) {
            @$body['dataFilter'] = $request->dataFilter;
        }

        if (null !== $request->dataType) {
            @$body['dataType'] = $request->dataType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->evaluators) {
            @$body['evaluators'] = $request->evaluators;
        }

        if (null !== $request->runStrategies) {
            @$body['runStrategies'] = $request->runStrategies;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->taskMode) {
            @$body['taskMode'] = $request->taskMode;
        }

        if (null !== $request->taskName) {
            @$body['taskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEvaluationTask',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluation-task/' . Url::percentEncode($agentSpace) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an evaluation task.
     *
     * @remarks
     * Calls the CreateEvaluationTask operation to create an evaluation task in a specified AgentSpace. The server verifies AgentSpace permissions, initializes evaluation result storage, checks the uniqueness of the task name, and asynchronously creates and executes an EvaluationRun based on `taskMode` and `runStrategies`.
     * This operation is applicable to running built-in or custom evaluators on Trace, Dataset, or SLS Log data. It supports two execution strategies: historical backfill and continuous evaluation.
     *
     * @param request - CreateEvaluationTaskRequest
     *
     * @returns CreateEvaluationTaskResponse
     *
     * @param string                      $agentSpace
     * @param CreateEvaluationTaskRequest $request
     *
     * @return CreateEvaluationTaskResponse
     */
    public function createEvaluationTask($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEvaluationTaskWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * Creates an evaluator.
     *
     * @param request - CreateEvaluatorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEvaluatorResponse
     *
     * @param string                 $agentSpace
     * @param CreateEvaluatorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateEvaluatorResponse
     */
    public function createEvaluatorWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->annotations) {
            @$body['annotations'] = $request->annotations;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->metricName) {
            @$body['metricName'] = $request->metricName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->properties) {
            @$body['properties'] = $request->properties;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->versionDescription) {
            @$body['versionDescription'] = $request->versionDescription;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEvaluator',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluators/' . Url::percentEncode($agentSpace) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEvaluatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an evaluator.
     *
     * @param request - CreateEvaluatorRequest
     *
     * @returns CreateEvaluatorResponse
     *
     * @param string                 $agentSpace
     * @param CreateEvaluatorRequest $request
     *
     * @return CreateEvaluatorResponse
     */
    public function createEvaluator($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEvaluatorWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * Creates an evaluator skill.
     *
     * @param request - CreateEvaluatorSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEvaluatorSkillResponse
     *
     * @param string                      $name
     * @param CreateEvaluatorSkillRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEvaluatorSkillResponse
     */
    public function createEvaluatorSkillWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->skillName) {
            @$body['skillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEvaluatorSkill',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluator/' . Url::percentEncode($name) . '/skill',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEvaluatorSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an evaluator skill.
     *
     * @param request - CreateEvaluatorSkillRequest
     *
     * @returns CreateEvaluatorSkillResponse
     *
     * @param string                      $name
     * @param CreateEvaluatorSkillRequest $request
     *
     * @return CreateEvaluatorSkillResponse
     */
    public function createEvaluatorSkill($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEvaluatorSkillWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * Creates a pipeline.
     *
     * @param request - CreatePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePipelineResponse
     *
     * @param string                $agentSpace
     * @param CreatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
     */
    public function createPipelineWithOptions($agentSpace, $request, $headers, $runtime)
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

        if (null !== $request->pipelineName) {
            @$body['pipelineName'] = $request->pipelineName;
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
            'action' => 'CreatePipeline',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a pipeline.
     *
     * @param request - CreatePipelineRequest
     *
     * @returns CreatePipelineResponse
     *
     * @param string                $agentSpace
     * @param CreatePipelineRequest $request
     *
     * @return CreatePipelineResponse
     */
    public function createPipeline($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * Deletes an AgentSpace.
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
     * Deletes an AgentSpace.
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
     * Deletes a context store.
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
     * Deletes a context store.
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
     * Deletes an API key.
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
     * Deletes an API key.
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
     * Deletes a dataset.
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
     * Deletes a dataset.
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
     * Deletes an evaluation run.
     *
     * @param request - DeleteEvaluationRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEvaluationRunResponse
     *
     * @param string                     $agentSpace
     * @param string                     $taskId
     * @param string                     $runId
     * @param DeleteEvaluationRunRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteEvaluationRunResponse
     */
    public function deleteEvaluationRunWithOptions($agentSpace, $taskId, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEvaluationRun',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluation-task/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($taskId) . '/run/' . Url::percentEncode($runId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEvaluationRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an evaluation run.
     *
     * @param request - DeleteEvaluationRunRequest
     *
     * @returns DeleteEvaluationRunResponse
     *
     * @param string                     $agentSpace
     * @param string                     $taskId
     * @param string                     $runId
     * @param DeleteEvaluationRunRequest $request
     *
     * @return DeleteEvaluationRunResponse
     */
    public function deleteEvaluationRun($agentSpace, $taskId, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEvaluationRunWithOptions($agentSpace, $taskId, $runId, $request, $headers, $runtime);
    }

    /**
     * Deletes an evaluation task.
     *
     * @param request - DeleteEvaluationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEvaluationTaskResponse
     *
     * @param string                      $agentSpace
     * @param string                      $taskId
     * @param DeleteEvaluationTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEvaluationTaskResponse
     */
    public function deleteEvaluationTaskWithOptions($agentSpace, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEvaluationTask',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluation-task/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($taskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an evaluation task.
     *
     * @param request - DeleteEvaluationTaskRequest
     *
     * @returns DeleteEvaluationTaskResponse
     *
     * @param string                      $agentSpace
     * @param string                      $taskId
     * @param DeleteEvaluationTaskRequest $request
     *
     * @return DeleteEvaluationTaskResponse
     */
    public function deleteEvaluationTask($agentSpace, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEvaluationTaskWithOptions($agentSpace, $taskId, $request, $headers, $runtime);
    }

    /**
     * Deletes an evaluator.
     *
     * @param request - DeleteEvaluatorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEvaluatorResponse
     *
     * @param string                 $agentSpace
     * @param string                 $name
     * @param DeleteEvaluatorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteEvaluatorResponse
     */
    public function deleteEvaluatorWithOptions($agentSpace, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEvaluator',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluators/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEvaluatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an evaluator.
     *
     * @param request - DeleteEvaluatorRequest
     *
     * @returns DeleteEvaluatorResponse
     *
     * @param string                 $agentSpace
     * @param string                 $name
     * @param DeleteEvaluatorRequest $request
     *
     * @return DeleteEvaluatorResponse
     */
    public function deleteEvaluator($agentSpace, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEvaluatorWithOptions($agentSpace, $name, $request, $headers, $runtime);
    }

    /**
     * Deletes an evaluator skill.
     *
     * @param request - DeleteEvaluatorSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEvaluatorSkillResponse
     *
     * @param string                      $name
     * @param string                      $skillName
     * @param DeleteEvaluatorSkillRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEvaluatorSkillResponse
     */
    public function deleteEvaluatorSkillWithOptions($name, $skillName, $request, $headers, $runtime)
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
            'action' => 'DeleteEvaluatorSkill',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluator/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEvaluatorSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an evaluator skill.
     *
     * @param request - DeleteEvaluatorSkillRequest
     *
     * @returns DeleteEvaluatorSkillResponse
     *
     * @param string                      $name
     * @param string                      $skillName
     * @param DeleteEvaluatorSkillRequest $request
     *
     * @return DeleteEvaluatorSkillResponse
     */
    public function deleteEvaluatorSkill($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEvaluatorSkillWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * Deletes a pipeline.
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
     * Deletes a pipeline.
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
     * Queries regions.
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
     * Queries regions.
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
     * Executes a query statement.
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
        if (null !== $request->from) {
            @$body['from'] = $request->from;
        }

        if (null !== $request->length) {
            @$body['length'] = $request->length;
        }

        if (null !== $request->maxOutputLength) {
            @$body['maxOutputLength'] = $request->maxOutputLength;
        }

        if (null !== $request->offset) {
            @$body['offset'] = $request->offset;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->to) {
            @$body['to'] = $request->to;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
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
     * Executes a query statement.
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
     * Queries an AgentSpace.
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
     * Queries an AgentSpace.
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
     * Queries a context store.
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
     * Queries a context store.
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
     * Retrieves an API key.
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
     * Retrieves an API key.
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
     * Queries a dataset.
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
     * Queries a dataset.
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
     * Retrieves the details of an evaluation run.
     *
     * @param request - GetEvaluationRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEvaluationRunResponse
     *
     * @param string                  $agentSpace
     * @param string                  $taskId
     * @param string                  $runId
     * @param GetEvaluationRunRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetEvaluationRunResponse
     */
    public function getEvaluationRunWithOptions($agentSpace, $taskId, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEvaluationRun',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluation-task/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($taskId) . '/run/' . Url::percentEncode($runId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEvaluationRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an evaluation run.
     *
     * @param request - GetEvaluationRunRequest
     *
     * @returns GetEvaluationRunResponse
     *
     * @param string                  $agentSpace
     * @param string                  $taskId
     * @param string                  $runId
     * @param GetEvaluationRunRequest $request
     *
     * @return GetEvaluationRunResponse
     */
    public function getEvaluationRun($agentSpace, $taskId, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEvaluationRunWithOptions($agentSpace, $taskId, $runId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an evaluation task.
     *
     * @param request - GetEvaluationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEvaluationTaskResponse
     *
     * @param string                   $agentSpace
     * @param string                   $taskId
     * @param GetEvaluationTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetEvaluationTaskResponse
     */
    public function getEvaluationTaskWithOptions($agentSpace, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEvaluationTask',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluation-task/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an evaluation task.
     *
     * @param request - GetEvaluationTaskRequest
     *
     * @returns GetEvaluationTaskResponse
     *
     * @param string                   $agentSpace
     * @param string                   $taskId
     * @param GetEvaluationTaskRequest $request
     *
     * @return GetEvaluationTaskResponse
     */
    public function getEvaluationTask($agentSpace, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEvaluationTaskWithOptions($agentSpace, $taskId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an evaluator.
     *
     * @param request - GetEvaluatorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEvaluatorResponse
     *
     * @param string              $agentSpace
     * @param string              $name
     * @param GetEvaluatorRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetEvaluatorResponse
     */
    public function getEvaluatorWithOptions($agentSpace, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEvaluator',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluators/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEvaluatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an evaluator.
     *
     * @param request - GetEvaluatorRequest
     *
     * @returns GetEvaluatorResponse
     *
     * @param string              $agentSpace
     * @param string              $name
     * @param GetEvaluatorRequest $request
     *
     * @return GetEvaluatorResponse
     */
    public function getEvaluator($agentSpace, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEvaluatorWithOptions($agentSpace, $name, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an evaluator skill.
     *
     * @param request - GetEvaluatorSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEvaluatorSkillResponse
     *
     * @param string                   $name
     * @param string                   $skillName
     * @param GetEvaluatorSkillRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetEvaluatorSkillResponse
     */
    public function getEvaluatorSkillWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEvaluatorSkill',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluator/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEvaluatorSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an evaluator skill.
     *
     * @param request - GetEvaluatorSkillRequest
     *
     * @returns GetEvaluatorSkillResponse
     *
     * @param string                   $name
     * @param string                   $skillName
     * @param GetEvaluatorSkillRequest $request
     *
     * @return GetEvaluatorSkillResponse
     */
    public function getEvaluatorSkill($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEvaluatorSkillWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * Queries a CI/CD pipeline.
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
     * Queries a CI/CD pipeline.
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
     * Queries the details of a single pipeline run.
     *
     * @param request - GetPipelineRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineRunResponse
     *
     * @param string                $agentSpace
     * @param string                $pipelineName
     * @param string                $runId
     * @param GetPipelineRunRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRunWithOptions($agentSpace, $pipelineName, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPipelineRun',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '/runs/' . Url::percentEncode($runId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a single pipeline run.
     *
     * @param request - GetPipelineRunRequest
     *
     * @returns GetPipelineRunResponse
     *
     * @param string                $agentSpace
     * @param string                $pipelineName
     * @param string                $runId
     * @param GetPipelineRunRequest $request
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRun($agentSpace, $pipelineName, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineRunWithOptions($agentSpace, $pipelineName, $runId, $request, $headers, $runtime);
    }

    /**
     * Queries pipeline run statistics.
     *
     * @param request - GetPipelineStatsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineStatsResponse
     *
     * @param string                  $agentSpace
     * @param string                  $pipelineName
     * @param GetPipelineStatsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetPipelineStatsResponse
     */
    public function getPipelineStatsWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->granularity) {
            @$query['granularity'] = $request->granularity;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPipelineStats',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '/stats',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPipelineStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries pipeline run statistics.
     *
     * @param request - GetPipelineStatsRequest
     *
     * @returns GetPipelineStatsResponse
     *
     * @param string                  $agentSpace
     * @param string                  $pipelineName
     * @param GetPipelineStatsRequest $request
     *
     * @return GetPipelineStatsResponse
     */
    public function getPipelineStats($agentSpace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineStatsWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * Queries a list of AgentSpaces.
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

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
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
     * Queries a list of AgentSpaces.
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
     * Retrieves a list of API keys.
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
     * Retrieves a list of API keys.
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
     * Queries a list of context stores.
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
     * Queries a list of context stores.
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
     * Queries a list of datasets.
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
     * Queries a list of datasets.
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
     * Queries the list of evaluation runs.
     *
     * @param request - ListEvaluationRunsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEvaluationRunsResponse
     *
     * @param string                    $agentSpace
     * @param string                    $taskId
     * @param ListEvaluationRunsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListEvaluationRunsResponse
     */
    public function listEvaluationRunsWithOptions($agentSpace, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->runType) {
            @$query['runType'] = $request->runType;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEvaluationRuns',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluation-task/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($taskId) . '/runs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEvaluationRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of evaluation runs.
     *
     * @param request - ListEvaluationRunsRequest
     *
     * @returns ListEvaluationRunsResponse
     *
     * @param string                    $agentSpace
     * @param string                    $taskId
     * @param ListEvaluationRunsRequest $request
     *
     * @return ListEvaluationRunsResponse
     */
    public function listEvaluationRuns($agentSpace, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEvaluationRunsWithOptions($agentSpace, $taskId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of evaluation tasks.
     *
     * @param request - ListEvaluationTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEvaluationTasksResponse
     *
     * @param ListEvaluationTasksRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListEvaluationTasksResponse
     */
    public function listEvaluationTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->channel) {
            @$query['channel'] = $request->channel;
        }

        if (null !== $request->dataType) {
            @$query['dataType'] = $request->dataType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->taskMode) {
            @$query['taskMode'] = $request->taskMode;
        }

        if (null !== $request->taskName) {
            @$query['taskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEvaluationTasks',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluation-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEvaluationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of evaluation tasks.
     *
     * @param request - ListEvaluationTasksRequest
     *
     * @returns ListEvaluationTasksResponse
     *
     * @param ListEvaluationTasksRequest $request
     *
     * @return ListEvaluationTasksResponse
     */
    public function listEvaluationTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEvaluationTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the skill list of an evaluator.
     *
     * @param request - ListEvaluatorSkillsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEvaluatorSkillsResponse
     *
     * @param string                     $name
     * @param ListEvaluatorSkillsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListEvaluatorSkillsResponse
     */
    public function listEvaluatorSkillsWithOptions($name, $request, $headers, $runtime)
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
            'action' => 'ListEvaluatorSkills',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluator/' . Url::percentEncode($name) . '/skills',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEvaluatorSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the skill list of an evaluator.
     *
     * @param request - ListEvaluatorSkillsRequest
     *
     * @returns ListEvaluatorSkillsResponse
     *
     * @param string                     $name
     * @param ListEvaluatorSkillsRequest $request
     *
     * @return ListEvaluatorSkillsResponse
     */
    public function listEvaluatorSkills($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEvaluatorSkillsWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * Queries a list of evaluators.
     *
     * @param request - ListEvaluatorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEvaluatorsResponse
     *
     * @param ListEvaluatorsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListEvaluatorsResponse
     */
    public function listEvaluatorsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEvaluators',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluators',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEvaluatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of evaluators.
     *
     * @param request - ListEvaluatorsRequest
     *
     * @returns ListEvaluatorsResponse
     *
     * @param ListEvaluatorsRequest $request
     *
     * @return ListEvaluatorsResponse
     */
    public function listEvaluators($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEvaluatorsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the execution history list of a pipeline.
     *
     * @param request - ListPipelineRunsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelineRunsResponse
     *
     * @param string                  $agentSpace
     * @param string                  $pipelineName
     * @param ListPipelineRunsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRunsWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->triggerType) {
            @$query['triggerType'] = $request->triggerType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelineRuns',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '/runs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelineRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution history list of a pipeline.
     *
     * @param request - ListPipelineRunsRequest
     *
     * @returns ListPipelineRunsResponse
     *
     * @param string                  $agentSpace
     * @param string                  $pipelineName
     * @param ListPipelineRunsRequest $request
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRuns($agentSpace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunsWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * Lists CI/CD pipelines.
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

        if (null !== $request->scheduleStatus) {
            @$query['scheduleStatus'] = $request->scheduleStatus;
        }

        if (null !== $request->scheduleType) {
            @$query['scheduleType'] = $request->scheduleType;
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
     * Lists CI/CD pipelines.
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
     * Pauses a pipeline.
     *
     * @param request - PausePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PausePipelineResponse
     *
     * @param string               $agentSpace
     * @param string               $pipelineName
     * @param PausePipelineRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return PausePipelineResponse
     */
    public function pausePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PausePipeline',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '/pause',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PausePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses a pipeline.
     *
     * @param request - PausePipelineRequest
     *
     * @returns PausePipelineResponse
     *
     * @param string               $agentSpace
     * @param string               $pipelineName
     * @param PausePipelineRequest $request
     *
     * @return PausePipelineResponse
     */
    public function pausePipeline($agentSpace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pausePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * Previews a pipeline. Without creating pipeline resources, performs a trial query based on the specified data source, node orchestration, and time range, and returns a small number of sample data records for authenticating parameter settings and previewing processing results.
     *
     * @remarks
     * ## Request description
     * - **agentSpace** must be an AgentSpace instance that has been created under the current account.
     * - **source.type** currently supports only the `logstore` type. The `logstore.project` and `logstore.logstore` must be authorized within the AgentSpace and located in the same region.
     * - **pipeline.nodes** must contain at least one node of the `Source` type and cannot be empty.
     * - **fromTime** and **toTime** are UNIX timestamps in seconds. **fromTime** must be less than **toTime**.
     * - A maximum of 5 records are returned, and internal system fields of the data source are automatically filtered out.
     *
     * @param request - PreviewPipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewPipelineResponse
     *
     * @param string                 $agentSpace
     * @param PreviewPipelineRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return PreviewPipelineResponse
     */
    public function previewPipelineWithOptions($agentSpace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fromTime) {
            @$body['fromTime'] = $request->fromTime;
        }

        if (null !== $request->pipeline) {
            @$body['pipeline'] = $request->pipeline;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->toTime) {
            @$body['toTime'] = $request->toTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PreviewPipeline',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/preview',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PreviewPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Previews a pipeline. Without creating pipeline resources, performs a trial query based on the specified data source, node orchestration, and time range, and returns a small number of sample data records for authenticating parameter settings and previewing processing results.
     *
     * @remarks
     * ## Request description
     * - **agentSpace** must be an AgentSpace instance that has been created under the current account.
     * - **source.type** currently supports only the `logstore` type. The `logstore.project` and `logstore.logstore` must be authorized within the AgentSpace and located in the same region.
     * - **pipeline.nodes** must contain at least one node of the `Source` type and cannot be empty.
     * - **fromTime** and **toTime** are UNIX timestamps in seconds. **fromTime** must be less than **toTime**.
     * - A maximum of 5 records are returned, and internal system fields of the data source are automatically filtered out.
     *
     * @param request - PreviewPipelineRequest
     *
     * @returns PreviewPipelineResponse
     *
     * @param string                 $agentSpace
     * @param PreviewPipelineRequest $request
     *
     * @return PreviewPipelineResponse
     */
    public function previewPipeline($agentSpace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewPipelineWithOptions($agentSpace, $request, $headers, $runtime);
    }

    /**
     * Resumes a pipeline.
     *
     * @param request - ResumePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumePipelineResponse
     *
     * @param string                $agentSpace
     * @param string                $pipelineName
     * @param ResumePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ResumePipelineResponse
     */
    public function resumePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResumePipeline',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a pipeline.
     *
     * @param request - ResumePipelineRequest
     *
     * @returns ResumePipelineResponse
     *
     * @param string                $agentSpace
     * @param string                $pipelineName
     * @param ResumePipelineRequest $request
     *
     * @return ResumePipelineResponse
     */
    public function resumePipeline($agentSpace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * Manually triggers a pipeline execution.
     *
     * @param request - RunPipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunPipelineResponse
     *
     * @param string             $agentSpace
     * @param string             $pipelineName
     * @param RunPipelineRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RunPipelineResponse
     */
    public function runPipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fromTime) {
            @$body['fromTime'] = $request->fromTime;
        }

        if (null !== $request->output) {
            @$body['output'] = $request->output;
        }

        if (null !== $request->toTime) {
            @$body['toTime'] = $request->toTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunPipeline',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '/run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually triggers a pipeline execution.
     *
     * @param request - RunPipelineRequest
     *
     * @returns RunPipelineResponse
     *
     * @param string             $agentSpace
     * @param string             $pipelineName
     * @param RunPipelineRequest $request
     *
     * @return RunPipelineResponse
     */
    public function runPipeline($agentSpace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runPipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * Searches contexts.
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
     * Searches contexts.
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
     * Stops a pipeline.
     *
     * @param request - TerminatePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TerminatePipelineResponse
     *
     * @param string                   $agentSpace
     * @param string                   $pipelineName
     * @param TerminatePipelineRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return TerminatePipelineResponse
     */
    public function terminatePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TerminatePipeline',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/agentspace/' . Url::percentEncode($agentSpace) . '/pipeline/' . Url::percentEncode($pipelineName) . '/terminate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TerminatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a pipeline.
     *
     * @param request - TerminatePipelineRequest
     *
     * @returns TerminatePipelineResponse
     *
     * @param string                   $agentSpace
     * @param string                   $pipelineName
     * @param TerminatePipelineRequest $request
     *
     * @return TerminatePipelineResponse
     */
    public function terminatePipeline($agentSpace, $pipelineName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->terminatePipelineWithOptions($agentSpace, $pipelineName, $request, $headers, $runtime);
    }

    /**
     * Updates an AgentSpace.
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
     * Updates an AgentSpace.
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
     * Modifies the configuration of a context store.
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
     * Modifies the configuration of a context store.
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
     * Updates a dataset.
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
     * Updates a dataset.
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
     * Updates an evaluation run.
     *
     * @param request - UpdateEvaluationRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEvaluationRunResponse
     *
     * @param string                     $agentSpace
     * @param string                     $taskId
     * @param string                     $runId
     * @param UpdateEvaluationRunRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateEvaluationRunResponse
     */
    public function updateEvaluationRunWithOptions($agentSpace, $taskId, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEvaluationRun',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluation-task/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($taskId) . '/run/' . Url::percentEncode($runId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEvaluationRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an evaluation run.
     *
     * @param request - UpdateEvaluationRunRequest
     *
     * @returns UpdateEvaluationRunResponse
     *
     * @param string                     $agentSpace
     * @param string                     $taskId
     * @param string                     $runId
     * @param UpdateEvaluationRunRequest $request
     *
     * @return UpdateEvaluationRunResponse
     */
    public function updateEvaluationRun($agentSpace, $taskId, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEvaluationRunWithOptions($agentSpace, $taskId, $runId, $request, $headers, $runtime);
    }

    /**
     * Updates an evaluation task.
     *
     * @param request - UpdateEvaluationTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEvaluationTaskResponse
     *
     * @param string                      $agentSpace
     * @param string                      $taskId
     * @param UpdateEvaluationTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEvaluationTaskResponse
     */
    public function updateEvaluationTaskWithOptions($agentSpace, $taskId, $request, $headers, $runtime)
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

        if (null !== $request->dataFilter) {
            @$body['dataFilter'] = $request->dataFilter;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->evaluators) {
            @$body['evaluators'] = $request->evaluators;
        }

        if (null !== $request->runStrategies) {
            @$body['runStrategies'] = $request->runStrategies;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEvaluationTask',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluation-task/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($taskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an evaluation task.
     *
     * @param request - UpdateEvaluationTaskRequest
     *
     * @returns UpdateEvaluationTaskResponse
     *
     * @param string                      $agentSpace
     * @param string                      $taskId
     * @param UpdateEvaluationTaskRequest $request
     *
     * @return UpdateEvaluationTaskResponse
     */
    public function updateEvaluationTask($agentSpace, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEvaluationTaskWithOptions($agentSpace, $taskId, $request, $headers, $runtime);
    }

    /**
     * Updates an evaluator.
     *
     * @param request - UpdateEvaluatorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEvaluatorResponse
     *
     * @param string                 $agentSpace
     * @param string                 $name
     * @param UpdateEvaluatorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateEvaluatorResponse
     */
    public function updateEvaluatorWithOptions($agentSpace, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->annotations) {
            @$body['annotations'] = $request->annotations;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->properties) {
            @$body['properties'] = $request->properties;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->versionDescription) {
            @$body['versionDescription'] = $request->versionDescription;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEvaluator',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluators/' . Url::percentEncode($agentSpace) . '/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEvaluatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an evaluator.
     *
     * @param request - UpdateEvaluatorRequest
     *
     * @returns UpdateEvaluatorResponse
     *
     * @param string                 $agentSpace
     * @param string                 $name
     * @param UpdateEvaluatorRequest $request
     *
     * @return UpdateEvaluatorResponse
     */
    public function updateEvaluator($agentSpace, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEvaluatorWithOptions($agentSpace, $name, $request, $headers, $runtime);
    }

    /**
     * Updates an evaluator skill.
     *
     * @param request - UpdateEvaluatorSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEvaluatorSkillResponse
     *
     * @param string                      $name
     * @param string                      $skillName
     * @param UpdateEvaluatorSkillRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEvaluatorSkillResponse
     */
    public function updateEvaluatorSkillWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentSpace) {
            @$query['agentSpace'] = $request->agentSpace;
        }

        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEvaluatorSkill',
            'version' => '2026-05-20',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/evaluator/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEvaluatorSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an evaluator skill.
     *
     * @param request - UpdateEvaluatorSkillRequest
     *
     * @returns UpdateEvaluatorSkillResponse
     *
     * @param string                      $name
     * @param string                      $skillName
     * @param UpdateEvaluatorSkillRequest $request
     *
     * @return UpdateEvaluatorSkillResponse
     */
    public function updateEvaluatorSkill($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEvaluatorSkillWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * Updates a pipeline.
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
     * Updates a pipeline.
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
}
