<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Creates a trace evaluation task. The system will sample some data from the user\\"s trace data based on the task\\"s configuration. Then, an LLM is used to evaluate the performance of these traces, and the evaluation results are recorded.
     *  *
     * @param CreateOnlineEvalTaskRequest $tmpReq  CreateOnlineEvalTaskRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOnlineEvalTaskResponse CreateOnlineEvalTaskResponse
     */
    public function createOnlineEvalTaskWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOnlineEvalTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates a trace evaluation task. The system will sample some data from the user\\"s trace data based on the task\\"s configuration. Then, an LLM is used to evaluate the performance of these traces, and the evaluation results are recorded.
     *  *
     * @param CreateOnlineEvalTaskRequest $request CreateOnlineEvalTaskRequest
     *
     * @return CreateOnlineEvalTaskResponse CreateOnlineEvalTaskResponse
     */
    public function createOnlineEvalTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOnlineEvalTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a service-linked role required for the PaiLLMTrace service.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceIdentityRoleResponse CreateServiceIdentityRoleResponse
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
     * @summary Creates a service-linked role required for the PaiLLMTrace service.
     *  *
     * @return CreateServiceIdentityRoleResponse CreateServiceIdentityRoleResponse
     */
    public function createServiceIdentityRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceIdentityRoleWithOptions($headers, $runtime);
    }

    /**
     * @summary Delete an online evaluation task
     *  *
     * @param string         $TaskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOnlineEvalTaskResponse DeleteOnlineEvalTaskResponse
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
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteOnlineEvalTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete an online evaluation task
     *  *
     * @param string $TaskId
     *
     * @return DeleteOnlineEvalTaskResponse DeleteOnlineEvalTaskResponse
     */
    public function deleteOnlineEvalTask($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOnlineEvalTaskWithOptions($TaskId, $headers, $runtime);
    }

    /**
     * @summary Evaluates a specified piece of trace data.
     *  *
     * @param string               $TraceId
     * @param EvaluateTraceRequest $request EvaluateTraceRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return EvaluateTraceResponse EvaluateTraceResponse
     */
    public function evaluateTraceWithOptions($TraceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->evaluationConfig)) {
            $body['EvaluationConfig'] = $request->evaluationConfig;
        }
        if (!Utils::isUnset($request->evaluationId)) {
            $body['EvaluationId'] = $request->evaluationId;
        }
        if (!Utils::isUnset($request->maxTime)) {
            $body['MaxTime'] = $request->maxTime;
        }
        if (!Utils::isUnset($request->minTime)) {
            $body['MinTime'] = $request->minTime;
        }
        if (!Utils::isUnset($request->modelConfig)) {
            $body['ModelConfig'] = $request->modelConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EvaluateTrace',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/eval/trace/' . OpenApiUtilClient::getEncodeParam($TraceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EvaluateTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Evaluates a specified piece of trace data.
     *  *
     * @param string               $TraceId
     * @param EvaluateTraceRequest $request EvaluateTraceRequest
     *
     * @return EvaluateTraceResponse EvaluateTraceResponse
     */
    public function evaluateTrace($TraceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->evaluateTraceWithOptions($TraceId, $request, $headers, $runtime);
    }

    /**
     * @summary Get the content of prompt templates used for evaluation
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEvaluationTemplatesResponse GetEvaluationTemplatesResponse
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
     * @summary Get the content of prompt templates used for evaluation
     *  *
     * @return GetEvaluationTemplatesResponse GetEvaluationTemplatesResponse
     */
    public function getEvaluationTemplates()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEvaluationTemplatesWithOptions($headers, $runtime);
    }

    /**
     * @summary Get the details of an online evaluation task
     *  *
     * @param string         $TaskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOnlineEvalTaskResponse GetOnlineEvalTaskResponse
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
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOnlineEvalTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get the details of an online evaluation task
     *  *
     * @param string $TaskId
     *
     * @return GetOnlineEvalTaskResponse GetOnlineEvalTaskResponse
     */
    public function getOnlineEvalTask($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOnlineEvalTaskWithOptions($TaskId, $headers, $runtime);
    }

    /**
     * @summary Obtains the information related to the service-linked role.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceIdentityRoleResponse GetServiceIdentityRoleResponse
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
     * @summary Obtains the information related to the service-linked role.
     *  *
     * @return GetServiceIdentityRoleResponse GetServiceIdentityRoleResponse
     */
    public function getServiceIdentityRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceIdentityRoleWithOptions($headers, $runtime);
    }

    /**
     * @summary Obtains the token used in the Xtrace service and the endpoint required for uploading trace data.
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetXtraceTokenResponse GetXtraceTokenResponse
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
     * @summary Obtains the token used in the Xtrace service and the endpoint required for uploading trace data.
     *  *
     * @return GetXtraceTokenResponse GetXtraceTokenResponse
     */
    public function getXtraceToken()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getXtraceTokenWithOptions($headers, $runtime);
    }

    /**
     * @summary Obtains the list of results for trace evaluation. This API is used together with EvaluateTrace. EvaluateTrace starts the evaluation. ListEvalResults obtains the results.
     *  *
     * @param ListEvalResultsRequest $tmpReq  ListEvalResultsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEvalResultsResponse ListEvalResultsResponse
     */
    public function listEvalResultsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListEvalResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->recordIds)) {
            $request->recordIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recordIds, 'RecordIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->evaluationId)) {
            $query['EvaluationId'] = $request->evaluationId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->recordIdsShrink)) {
            $query['RecordIds'] = $request->recordIdsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Obtains the list of results for trace evaluation. This API is used together with EvaluateTrace. EvaluateTrace starts the evaluation. ListEvalResults obtains the results.
     *  *
     * @param ListEvalResultsRequest $request ListEvalResultsRequest
     *
     * @return ListEvalResultsResponse ListEvalResultsResponse
     */
    public function listEvalResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEvalResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary List the results of online evaluation tasks that meet the criteria
     *  *
     * @param ListOnlineEvalTaskResultsRequest $tmpReq  ListOnlineEvalTaskResultsRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOnlineEvalTaskResultsResponse ListOnlineEvalTaskResultsResponse
     */
    public function listOnlineEvalTaskResultsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListOnlineEvalTaskResultsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->traceIds)) {
            $request->traceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->traceIds, 'TraceIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->evaluationId)) {
            $query['EvaluationId'] = $request->evaluationId;
        }
        if (!Utils::isUnset($request->mostRecentResultsOnly)) {
            $query['MostRecentResultsOnly'] = $request->mostRecentResultsOnly;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->traceIdsShrink)) {
            $query['TraceIds'] = $request->traceIdsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary List the results of online evaluation tasks that meet the criteria
     *  *
     * @param ListOnlineEvalTaskResultsRequest $request ListOnlineEvalTaskResultsRequest
     *
     * @return ListOnlineEvalTaskResultsResponse ListOnlineEvalTaskResultsResponse
     */
    public function listOnlineEvalTaskResults($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOnlineEvalTaskResultsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary View online evaluation tasks that meet the criteria
     *  *
     * @param ListOnlineEvalTasksRequest $request ListOnlineEvalTasksRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOnlineEvalTasksResponse ListOnlineEvalTasksResponse
     */
    public function listOnlineEvalTasksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxTime)) {
            $query['MaxTime'] = $request->maxTime;
        }
        if (!Utils::isUnset($request->minTime)) {
            $query['MinTime'] = $request->minTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary View online evaluation tasks that meet the criteria
     *  *
     * @param ListOnlineEvalTasksRequest $request ListOnlineEvalTasksRequest
     *
     * @return ListOnlineEvalTasksResponse ListOnlineEvalTasksResponse
     */
    public function listOnlineEvalTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOnlineEvalTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Obtains a list of trace data based on specified criteria.
     *  *
     * @param ListTracesDatasRequest $tmpReq  ListTracesDatasRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTracesDatasResponse ListTracesDatasResponse
     */
    public function listTracesDatasWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTracesDatasShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filters)) {
            $request->filtersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }
        if (!Utils::isUnset($tmpReq->spanIds)) {
            $request->spanIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->spanIds, 'SpanIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->traceIds)) {
            $request->traceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->traceIds, 'TraceIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->filtersShrink)) {
            $query['Filters'] = $request->filtersShrink;
        }
        if (!Utils::isUnset($request->hasEvents)) {
            $query['HasEvents'] = $request->hasEvents;
        }
        if (!Utils::isUnset($request->hasStatusMessage)) {
            $query['HasStatusMessage'] = $request->hasStatusMessage;
        }
        if (!Utils::isUnset($request->llmAppName)) {
            $query['LlmAppName'] = $request->llmAppName;
        }
        if (!Utils::isUnset($request->maxDuration)) {
            $query['MaxDuration'] = $request->maxDuration;
        }
        if (!Utils::isUnset($request->maxTime)) {
            $query['MaxTime'] = $request->maxTime;
        }
        if (!Utils::isUnset($request->minDuration)) {
            $query['MinDuration'] = $request->minDuration;
        }
        if (!Utils::isUnset($request->minTime)) {
            $query['MinTime'] = $request->minTime;
        }
        if (!Utils::isUnset($request->opentelemetryCompatible)) {
            $query['OpentelemetryCompatible'] = $request->opentelemetryCompatible;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ownerSubId)) {
            $query['OwnerSubId'] = $request->ownerSubId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->spanIdsShrink)) {
            $query['SpanIds'] = $request->spanIdsShrink;
        }
        if (!Utils::isUnset($request->spanName)) {
            $query['SpanName'] = $request->spanName;
        }
        if (!Utils::isUnset($request->traceIdsShrink)) {
            $query['TraceIds'] = $request->traceIdsShrink;
        }
        if (!Utils::isUnset($request->traceReduceMethod)) {
            $query['TraceReduceMethod'] = $request->traceReduceMethod;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Obtains a list of trace data based on specified criteria.
     *  *
     * @param ListTracesDatasRequest $request ListTracesDatasRequest
     *
     * @return ListTracesDatasResponse ListTracesDatasResponse
     */
    public function listTracesDatas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTracesDatasWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Stop the execution of an online evaluation task
     *  *
     * @param string         $TaskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StopOnlineEvalTaskResponse StopOnlineEvalTaskResponse
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
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopOnlineEvalTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stop the execution of an online evaluation task
     *  *
     * @param string $TaskId
     *
     * @return StopOnlineEvalTaskResponse StopOnlineEvalTaskResponse
     */
    public function stopOnlineEvalTask($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopOnlineEvalTaskWithOptions($TaskId, $headers, $runtime);
    }

    /**
     * @summary Changes the configuration of a trace evaluation task.
     *  *
     * @param string                      $TaskId
     * @param UpdateOnlineEvalTaskRequest $request UpdateOnlineEvalTaskRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOnlineEvalTaskResponse UpdateOnlineEvalTaskResponse
     */
    public function updateOnlineEvalTaskWithOptions($TaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->evaluationConfig)) {
            $body['EvaluationConfig'] = $request->evaluationConfig;
        }
        if (!Utils::isUnset($request->filters)) {
            $body['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->modelConfig)) {
            $body['ModelConfig'] = $request->modelConfig;
        }
        if (!Utils::isUnset($request->samplingFrequencyMinutes)) {
            $body['SamplingFrequencyMinutes'] = $request->samplingFrequencyMinutes;
        }
        if (!Utils::isUnset($request->samplingRatio)) {
            $body['SamplingRatio'] = $request->samplingRatio;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateOnlineEvalTask',
            'version' => '2024-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/PAILLMTrace/onlineevaltasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateOnlineEvalTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the configuration of a trace evaluation task.
     *  *
     * @param string                      $TaskId
     * @param UpdateOnlineEvalTaskRequest $request UpdateOnlineEvalTaskRequest
     *
     * @return UpdateOnlineEvalTaskResponse UpdateOnlineEvalTaskResponse
     */
    public function updateOnlineEvalTask($TaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOnlineEvalTaskWithOptions($TaskId, $request, $headers, $runtime);
    }
}
