<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\CreateOnlineEvalTaskRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\CreateOnlineEvalTaskResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\CreateOnlineEvalTaskShrinkRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\CreateServiceIdentityRoleResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\DeleteOnlineEvalTaskResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluateTraceRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluateTraceResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\GetEvaluationTemplatesResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\GetOnlineEvalTaskResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\GetServiceIdentityRoleResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\GetXtraceTokenResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListEvalResultsRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListEvalResultsResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListEvalResultsShrinkRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListOnlineEvalTaskResultsRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListOnlineEvalTaskResultsResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListOnlineEvalTaskResultsShrinkRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListOnlineEvalTasksRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListOnlineEvalTasksResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListTracesDatasRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListTracesDatasResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListTracesDatasShrinkRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\StopOnlineEvalTaskResponse;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\UpdateOnlineEvalTaskRequest;
use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\UpdateOnlineEvalTaskResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PaiLLMTrace extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paillmtrace', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a trace evaluation task. The system will sample some data from the user\\"s trace data based on the task\\"s configuration. Then, an LLM is used to evaluate the performance of these traces, and the evaluation results are recorded.
     *
     * @param tmpReq - CreateOnlineEvalTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOnlineEvalTaskResponse
     *
     * @param CreateOnlineEvalTaskRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateOnlineEvalTaskResponse
     */
    public function createOnlineEvalTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOnlineEvalTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->bodyShrink) {
            @$query['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOnlineEvalTask',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateOnlineEvalTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a trace evaluation task. The system will sample some data from the user\\"s trace data based on the task\\"s configuration. Then, an LLM is used to evaluate the performance of these traces, and the evaluation results are recorded.
     *
     * @param request - CreateOnlineEvalTaskRequest
     *
     * @returns CreateOnlineEvalTaskResponse
     *
     * @param CreateOnlineEvalTaskRequest $request
     *
     * @return CreateOnlineEvalTaskResponse
     */
    public function createOnlineEvalTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOnlineEvalTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a service-linked role required for the PaiLLMTrace service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceIdentityRoleResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateServiceIdentityRoleResponse
     */
    public function createServiceIdentityRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateServiceIdentityRole',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/ServiceIdentityRole',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceIdentityRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role required for the PaiLLMTrace service.
     *
     * @returns CreateServiceIdentityRoleResponse
     *
     * @return CreateServiceIdentityRoleResponse
     */
    public function createServiceIdentityRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceIdentityRoleWithOptions($headers, $runtime);
    }

    /**
     * Delete an online evaluation task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOnlineEvalTaskResponse
     *
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteOnlineEvalTaskResponse
     */
    public function deleteOnlineEvalTaskWithOptions($TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteOnlineEvalTask',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks/' . Url::percentEncode($TaskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteOnlineEvalTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete an online evaluation task.
     *
     * @returns DeleteOnlineEvalTaskResponse
     *
     * @param string $TaskId
     *
     * @return DeleteOnlineEvalTaskResponse
     */
    public function deleteOnlineEvalTask($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOnlineEvalTaskWithOptions($TaskId, $headers, $runtime);
    }

    /**
     * Evaluates a specified piece of trace data.
     *
     * @param request - EvaluateTraceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvaluateTraceResponse
     *
     * @param string               $TraceId
     * @param EvaluateTraceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return EvaluateTraceResponse
     */
    public function evaluateTraceWithOptions($TraceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->evaluationConfig) {
            @$body['EvaluationConfig'] = $request->evaluationConfig;
        }

        if (null !== $request->evaluationId) {
            @$body['EvaluationId'] = $request->evaluationId;
        }

        if (null !== $request->maxTime) {
            @$body['MaxTime'] = $request->maxTime;
        }

        if (null !== $request->minTime) {
            @$body['MinTime'] = $request->minTime;
        }

        if (null !== $request->modelConfig) {
            @$body['ModelConfig'] = $request->modelConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EvaluateTrace',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/eval/trace/' . Url::percentEncode($TraceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EvaluateTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Evaluates a specified piece of trace data.
     *
     * @param request - EvaluateTraceRequest
     *
     * @returns EvaluateTraceResponse
     *
     * @param string               $TraceId
     * @param EvaluateTraceRequest $request
     *
     * @return EvaluateTraceResponse
     */
    public function evaluateTrace($TraceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->evaluateTraceWithOptions($TraceId, $request, $headers, $runtime);
    }

    /**
     * Get the content of prompt templates used for evaluation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEvaluationTemplatesResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEvaluationTemplatesResponse
     */
    public function getEvaluationTemplatesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEvaluationTemplates',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/eval/templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEvaluationTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the content of prompt templates used for evaluation.
     *
     * @returns GetEvaluationTemplatesResponse
     *
     * @return GetEvaluationTemplatesResponse
     */
    public function getEvaluationTemplates()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEvaluationTemplatesWithOptions($headers, $runtime);
    }

    /**
     * Get the details of an online evaluation task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOnlineEvalTaskResponse
     *
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOnlineEvalTaskResponse
     */
    public function getOnlineEvalTaskWithOptions($TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetOnlineEvalTask',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks/' . Url::percentEncode($TaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOnlineEvalTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the details of an online evaluation task.
     *
     * @returns GetOnlineEvalTaskResponse
     *
     * @param string $TaskId
     *
     * @return GetOnlineEvalTaskResponse
     */
    public function getOnlineEvalTask($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOnlineEvalTaskWithOptions($TaskId, $headers, $runtime);
    }

    /**
     * Obtains the information related to the service-linked role.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceIdentityRoleResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceIdentityRoleResponse
     */
    public function getServiceIdentityRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetServiceIdentityRole',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/ServiceIdentityRole',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceIdentityRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the information related to the service-linked role.
     *
     * @returns GetServiceIdentityRoleResponse
     *
     * @return GetServiceIdentityRoleResponse
     */
    public function getServiceIdentityRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceIdentityRoleWithOptions($headers, $runtime);
    }

    /**
     * Obtains the token used in the Xtrace service and the endpoint required for uploading trace data.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetXtraceTokenResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetXtraceTokenResponse
     */
    public function getXtraceTokenWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetXtraceToken',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/XtraceToken',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetXtraceTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the token used in the Xtrace service and the endpoint required for uploading trace data.
     *
     * @returns GetXtraceTokenResponse
     *
     * @return GetXtraceTokenResponse
     */
    public function getXtraceToken()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getXtraceTokenWithOptions($headers, $runtime);
    }

    /**
     * Obtains the list of results for trace evaluation. This API is used together with EvaluateTrace. EvaluateTrace starts the evaluation. ListEvalResults obtains the results.
     *
     * @param tmpReq - ListEvalResultsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEvalResultsResponse
     *
     * @param ListEvalResultsRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListEvalResultsResponse
     */
    public function listEvalResultsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListEvalResultsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->recordIds) {
            $request->recordIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recordIds, 'RecordIds', 'simple');
        }

        $query = [];
        if (null !== $request->evaluationId) {
            @$query['EvaluationId'] = $request->evaluationId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->recordIdsShrink) {
            @$query['RecordIds'] = $request->recordIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEvalResults',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/eval/results',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEvalResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the list of results for trace evaluation. This API is used together with EvaluateTrace. EvaluateTrace starts the evaluation. ListEvalResults obtains the results.
     *
     * @param request - ListEvalResultsRequest
     *
     * @returns ListEvalResultsResponse
     *
     * @param ListEvalResultsRequest $request
     *
     * @return ListEvalResultsResponse
     */
    public function listEvalResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEvalResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * List the results of online evaluation tasks that meet the criteria.
     *
     * @param tmpReq - ListOnlineEvalTaskResultsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOnlineEvalTaskResultsResponse
     *
     * @param ListOnlineEvalTaskResultsRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListOnlineEvalTaskResultsResponse
     */
    public function listOnlineEvalTaskResultsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListOnlineEvalTaskResultsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->traceIds) {
            $request->traceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->traceIds, 'TraceIds', 'simple');
        }

        $query = [];
        if (null !== $request->evaluationId) {
            @$query['EvaluationId'] = $request->evaluationId;
        }

        if (null !== $request->mostRecentResultsOnly) {
            @$query['MostRecentResultsOnly'] = $request->mostRecentResultsOnly;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->traceIdsShrink) {
            @$query['TraceIds'] = $request->traceIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOnlineEvalTaskResults',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltaskresults',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOnlineEvalTaskResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List the results of online evaluation tasks that meet the criteria.
     *
     * @param request - ListOnlineEvalTaskResultsRequest
     *
     * @returns ListOnlineEvalTaskResultsResponse
     *
     * @param ListOnlineEvalTaskResultsRequest $request
     *
     * @return ListOnlineEvalTaskResultsResponse
     */
    public function listOnlineEvalTaskResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOnlineEvalTaskResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * View online evaluation tasks that meet the criteria.
     *
     * @param request - ListOnlineEvalTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOnlineEvalTasksResponse
     *
     * @param ListOnlineEvalTasksRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListOnlineEvalTasksResponse
     */
    public function listOnlineEvalTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxTime) {
            @$query['MaxTime'] = $request->maxTime;
        }

        if (null !== $request->minTime) {
            @$query['MinTime'] = $request->minTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->samplingMethod) {
            @$query['SamplingMethod'] = $request->samplingMethod;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOnlineEvalTasks',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOnlineEvalTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View online evaluation tasks that meet the criteria.
     *
     * @param request - ListOnlineEvalTasksRequest
     *
     * @returns ListOnlineEvalTasksResponse
     *
     * @param ListOnlineEvalTasksRequest $request
     *
     * @return ListOnlineEvalTasksResponse
     */
    public function listOnlineEvalTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOnlineEvalTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtains a list of trace data based on specified criteria.
     *
     * @param tmpReq - ListTracesDatasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTracesDatasResponse
     *
     * @param ListTracesDatasRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListTracesDatasResponse
     */
    public function listTracesDatasWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTracesDatasShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filters) {
            $request->filtersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }

        if (null !== $tmpReq->spanIds) {
            $request->spanIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->spanIds, 'SpanIds', 'simple');
        }

        if (null !== $tmpReq->traceIds) {
            $request->traceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->traceIds, 'TraceIds', 'simple');
        }

        $query = [];
        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->filtersShrink) {
            @$query['Filters'] = $request->filtersShrink;
        }

        if (null !== $request->hasEvents) {
            @$query['HasEvents'] = $request->hasEvents;
        }

        if (null !== $request->hasStatusMessage) {
            @$query['HasStatusMessage'] = $request->hasStatusMessage;
        }

        if (null !== $request->llmAppName) {
            @$query['LlmAppName'] = $request->llmAppName;
        }

        if (null !== $request->maxDuration) {
            @$query['MaxDuration'] = $request->maxDuration;
        }

        if (null !== $request->maxTime) {
            @$query['MaxTime'] = $request->maxTime;
        }

        if (null !== $request->minDuration) {
            @$query['MinDuration'] = $request->minDuration;
        }

        if (null !== $request->minTime) {
            @$query['MinTime'] = $request->minTime;
        }

        if (null !== $request->opentelemetryCompatible) {
            @$query['OpentelemetryCompatible'] = $request->opentelemetryCompatible;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->ownerSubId) {
            @$query['OwnerSubId'] = $request->ownerSubId;
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

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->spanIdsShrink) {
            @$query['SpanIds'] = $request->spanIdsShrink;
        }

        if (null !== $request->spanName) {
            @$query['SpanName'] = $request->spanName;
        }

        if (null !== $request->traceIdsShrink) {
            @$query['TraceIds'] = $request->traceIdsShrink;
        }

        if (null !== $request->traceReduceMethod) {
            @$query['TraceReduceMethod'] = $request->traceReduceMethod;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTracesDatas',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/TracesDatas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTracesDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of trace data based on specified criteria.
     *
     * @param request - ListTracesDatasRequest
     *
     * @returns ListTracesDatasResponse
     *
     * @param ListTracesDatasRequest $request
     *
     * @return ListTracesDatasResponse
     */
    public function listTracesDatas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTracesDatasWithOptions($request, $headers, $runtime);
    }

    /**
     * Stop the execution of an online evaluation task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopOnlineEvalTaskResponse
     *
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopOnlineEvalTaskResponse
     */
    public function stopOnlineEvalTaskWithOptions($TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopOnlineEvalTask',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks/' . Url::percentEncode($TaskId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopOnlineEvalTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stop the execution of an online evaluation task.
     *
     * @returns StopOnlineEvalTaskResponse
     *
     * @param string $TaskId
     *
     * @return StopOnlineEvalTaskResponse
     */
    public function stopOnlineEvalTask($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopOnlineEvalTaskWithOptions($TaskId, $headers, $runtime);
    }

    /**
     * Changes the configuration of a trace evaluation task.
     *
     * @param request - UpdateOnlineEvalTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOnlineEvalTaskResponse
     *
     * @param string                      $TaskId
     * @param UpdateOnlineEvalTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateOnlineEvalTaskResponse
     */
    public function updateOnlineEvalTaskWithOptions($TaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->evaluationConfig) {
            @$body['EvaluationConfig'] = $request->evaluationConfig;
        }

        if (null !== $request->filters) {
            @$body['Filters'] = $request->filters;
        }

        if (null !== $request->modelConfig) {
            @$body['ModelConfig'] = $request->modelConfig;
        }

        if (null !== $request->samplingFrequencyMinutes) {
            @$body['SamplingFrequencyMinutes'] = $request->samplingFrequencyMinutes;
        }

        if (null !== $request->samplingRatio) {
            @$body['SamplingRatio'] = $request->samplingRatio;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateOnlineEvalTask',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks/' . Url::percentEncode($TaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateOnlineEvalTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the configuration of a trace evaluation task.
     *
     * @param request - UpdateOnlineEvalTaskRequest
     *
     * @returns UpdateOnlineEvalTaskResponse
     *
     * @param string                      $TaskId
     * @param UpdateOnlineEvalTaskRequest $request
     *
     * @return UpdateOnlineEvalTaskResponse
     */
    public function updateOnlineEvalTask($TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOnlineEvalTaskWithOptions($TaskId, $request, $headers, $runtime);
    }
}
