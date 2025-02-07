<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GenerateCopilotResponseRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GenerateCopilotResponseResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GenerateCopilotStreamResponseRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GenerateCopilotStreamResponseResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAbnormalEventsCountRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAbnormalEventsCountResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentTaskRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentTaskResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAIQueryResultRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAIQueryResultResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetCopilotHistoryRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetCopilotHistoryResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetDiagnosisResultRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetDiagnosisResultResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHealthPercentageRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHealthPercentageResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHostCountRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHostCountResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotAnalysisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotAnalysisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotCompareRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotCompareResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotInstanceListRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotInstanceListResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotPidListRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotPidListResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotTrackingRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotTrackingResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotSpotUniqListRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotSpotUniqListResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetInstantScoreRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetInstantScoreResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetListRecordRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetListRecordResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetProblemPercentageRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetProblemPercentageResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetRangeScoreRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetRangeScoreResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetResourcesRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetResourcesResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InitialSysomRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InitialSysomResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InstallAgentForClusterRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InstallAgentForClusterResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InstallAgentRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InstallAgentResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InvokeAnomalyDiagnosisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InvokeAnomalyDiagnosisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InvokeDiagnosisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\InvokeDiagnosisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAgentInstallRecordsRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAgentInstallRecordsResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAgentsRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAgentsResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListClusterAgentInstallRecordsRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListClusterAgentInstallRecordsResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListClustersRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListClustersResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListDiagnosisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListDiagnosisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstanceHealthRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstanceHealthResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstanceStatusRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstanceStatusResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListPodsOfInstanceRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListPodsOfInstanceResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListRegionsResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIAnalysisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIAnalysisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentForClusterRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentForClusterResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateEventsAttentionRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateEventsAttentionResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateEventsAttentionShrinkRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentForClusterRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentForClusterResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class SysOM extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sysom', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 授权 SysOM 对某个机器进行诊断.
     *
     * @param request - AuthDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AuthDiagnosisResponse
     *
     * @param AuthDiagnosisRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AuthDiagnosisResponse
     */
    public function authDiagnosisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoCreateRole) {
            @$body['autoCreateRole'] = $request->autoCreateRole;
        }

        if (null !== $request->autoInstallAgent) {
            @$body['autoInstallAgent'] = $request->autoInstallAgent;
        }

        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AuthDiagnosis',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/diagnosis/auth',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AuthDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AuthDiagnosisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 授权 SysOM 对某个机器进行诊断.
     *
     * @param request - AuthDiagnosisRequest
     * @returns AuthDiagnosisResponse
     *
     * @param AuthDiagnosisRequest $request
     *
     * @return AuthDiagnosisResponse
     */
    public function authDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取copilot服务的返回结果.
     *
     * @param request - GenerateCopilotResponseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GenerateCopilotResponseResponse
     *
     * @param GenerateCopilotResponseRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateCopilotResponseResponse
     */
    public function generateCopilotResponseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->llmParamString) {
            @$body['llmParamString'] = $request->llmParamString;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateCopilotResponse',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/copilot/generate_copilot_response',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GenerateCopilotResponseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateCopilotResponseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取copilot服务的返回结果.
     *
     * @param request - GenerateCopilotResponseRequest
     * @returns GenerateCopilotResponseResponse
     *
     * @param GenerateCopilotResponseRequest $request
     *
     * @return GenerateCopilotResponseResponse
     */
    public function generateCopilotResponse($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateCopilotResponseWithOptions($request, $headers, $runtime);
    }

    /**
     * 流式copilot服务接口.
     *
     * @param request - GenerateCopilotStreamResponseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GenerateCopilotStreamResponseResponse
     *
     * @param GenerateCopilotStreamResponseRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GenerateCopilotStreamResponseResponse
     */
    public function generateCopilotStreamResponseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->llmParamString) {
            @$body['llmParamString'] = $request->llmParamString;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateCopilotStreamResponse',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/copilot/generate_copilot_stream_response',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GenerateCopilotStreamResponseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateCopilotStreamResponseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 流式copilot服务接口.
     *
     * @param request - GenerateCopilotStreamResponseRequest
     * @returns GenerateCopilotStreamResponseResponse
     *
     * @param GenerateCopilotStreamResponseRequest $request
     *
     * @return GenerateCopilotStreamResponseResponse
     */
    public function generateCopilotStreamResponse($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateCopilotStreamResponseWithOptions($request, $headers, $runtime);
    }

    /**
     * 查看AI Infra分析结果.
     *
     * @param request - GetAIQueryResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAIQueryResultResponse
     *
     * @param GetAIQueryResultRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAIQueryResultResponse
     */
    public function getAIQueryResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysisId) {
            @$body['analysisId'] = $request->analysisId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAIQueryResult',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/app_observ/aiAnalysis/query_result',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAIQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAIQueryResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查看AI Infra分析结果.
     *
     * @param request - GetAIQueryResultRequest
     * @returns GetAIQueryResultResponse
     *
     * @param GetAIQueryResultRequest $request
     *
     * @return GetAIQueryResultResponse
     */
    public function getAIQueryResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAIQueryResultWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取节点/Pod不同等级异常事件的数量.
     *
     * @param request - GetAbnormalEventsCountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAbnormalEventsCountResponse
     *
     * @param GetAbnormalEventsCountRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetAbnormalEventsCountResponse
     */
    public function getAbnormalEventsCountWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['cluster'] = $request->cluster;
        }

        if (null !== $request->end) {
            @$query['end'] = $request->end;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->pod) {
            @$query['pod'] = $request->pod;
        }

        if (null !== $request->showPod) {
            @$query['showPod'] = $request->showPod;
        }

        if (null !== $request->start) {
            @$query['start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAbnormalEventsCount',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/range/abnormaly_events_count',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAbnormalEventsCountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAbnormalEventsCountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取节点/Pod不同等级异常事件的数量.
     *
     * @param request - GetAbnormalEventsCountRequest
     * @returns GetAbnormalEventsCountResponse
     *
     * @param GetAbnormalEventsCountRequest $request
     *
     * @return GetAbnormalEventsCountResponse
     */
    public function getAbnormalEventsCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAbnormalEventsCountWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取某个组件的详情.
     *
     * @param request - GetAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetAgentResponse
     */
    public function getAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['agent_id'] = $request->agentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgent',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/get_agent',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAgentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAgentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取某个组件的详情.
     *
     * @param request - GetAgentRequest
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     *
     * @return GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取Agent安装任务执行状态
     *
     * @param request - GetAgentTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAgentTaskResponse
     *
     * @param GetAgentTaskRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetAgentTaskResponse
     */
    public function getAgentTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['task_id'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgentTask',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/get_agent_task',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAgentTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取Agent安装任务执行状态
     *
     * @param request - GetAgentTaskRequest
     * @returns GetAgentTaskResponse
     *
     * @param GetAgentTaskRequest $request
     *
     * @return GetAgentTaskResponse
     */
    public function getAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取copilot历史聊天记录.
     *
     * @param request - GetCopilotHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCopilotHistoryResponse
     *
     * @param GetCopilotHistoryRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetCopilotHistoryResponse
     */
    public function getCopilotHistoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->count) {
            @$body['count'] = $request->count;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCopilotHistory',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/copilot/get_copilot_history',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCopilotHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCopilotHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取copilot历史聊天记录.
     *
     * @param request - GetCopilotHistoryRequest
     * @returns GetCopilotHistoryResponse
     *
     * @param GetCopilotHistoryRequest $request
     *
     * @return GetCopilotHistoryResponse
     */
    public function getCopilotHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCopilotHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取诊断结果.
     *
     * @param request - GetDiagnosisResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDiagnosisResultResponse
     *
     * @param GetDiagnosisResultRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDiagnosisResultResponse
     */
    public function getDiagnosisResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['task_id'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiagnosisResult',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/diagnosis/get_diagnosis_results',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDiagnosisResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取诊断结果.
     *
     * @param request - GetDiagnosisResultRequest
     * @returns GetDiagnosisResultResponse
     *
     * @param GetDiagnosisResultRequest $request
     *
     * @return GetDiagnosisResultResponse
     */
    public function getDiagnosisResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDiagnosisResultWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取一段时间的节点/pod健康度比例.
     *
     * @param request - GetHealthPercentageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetHealthPercentageResponse
     *
     * @param GetHealthPercentageRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetHealthPercentageResponse
     */
    public function getHealthPercentageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['cluster'] = $request->cluster;
        }

        if (null !== $request->end) {
            @$query['end'] = $request->end;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->start) {
            @$query['start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHealthPercentage',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/range/health_percentage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetHealthPercentageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHealthPercentageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取一段时间的节点/pod健康度比例.
     *
     * @param request - GetHealthPercentageRequest
     * @returns GetHealthPercentageResponse
     *
     * @param GetHealthPercentageRequest $request
     *
     * @return GetHealthPercentageResponse
     */
    public function getHealthPercentage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHealthPercentageWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取集群节点数量.
     *
     * @param request - GetHostCountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetHostCountResponse
     *
     * @param GetHostCountRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetHostCountResponse
     */
    public function getHostCountWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['cluster'] = $request->cluster;
        }

        if (null !== $request->end) {
            @$query['end'] = $request->end;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->start) {
            @$query['start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHostCount',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/range/host_count',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetHostCountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHostCountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取集群节点数量.
     *
     * @param request - GetHostCountRequest
     * @returns GetHostCountResponse
     *
     * @param GetHostCountRequest $request
     *
     * @return GetHostCountResponse
     */
    public function getHostCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHostCountWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实例下的某个字段列表.
     *
     * @param request - GetHotSpotUniqListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetHotSpotUniqListResponse
     *
     * @param GetHotSpotUniqListRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetHotSpotUniqListResponse
     */
    public function getHotSpotUniqListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->begEnd) {
            @$body['beg_end'] = $request->begEnd;
        }

        if (null !== $request->begStart) {
            @$body['beg_start'] = $request->begStart;
        }

        if (null !== $request->instance) {
            @$body['instance'] = $request->instance;
        }

        if (null !== $request->pid) {
            @$body['pid'] = $request->pid;
        }

        if (null !== $request->table) {
            @$body['table'] = $request->table;
        }

        if (null !== $request->uniq) {
            @$body['uniq'] = $request->uniq;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotSpotUniqList',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/livetrace_proxy/hotspot_uniq_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetHotSpotUniqListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHotSpotUniqListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实例下的某个字段列表.
     *
     * @param request - GetHotSpotUniqListRequest
     * @returns GetHotSpotUniqListResponse
     *
     * @param GetHotSpotUniqListRequest $request
     *
     * @return GetHotSpotUniqListResponse
     */
    public function getHotSpotUniqList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotSpotUniqListWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取热定分析结果.
     *
     * @param request - GetHotspotAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetHotspotAnalysisResponse
     *
     * @param GetHotspotAnalysisRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetHotspotAnalysisResponse
     */
    public function getHotspotAnalysisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appType) {
            @$body['appType'] = $request->appType;
        }

        if (null !== $request->begEnd) {
            @$body['beg_end'] = $request->begEnd;
        }

        if (null !== $request->begStart) {
            @$body['beg_start'] = $request->begStart;
        }

        if (null !== $request->instance) {
            @$body['instance'] = $request->instance;
        }

        if (null !== $request->pid) {
            @$body['pid'] = $request->pid;
        }

        if (null !== $request->table) {
            @$body['table'] = $request->table;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotAnalysis',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/proxy/post/livetrace_hotspot_analysis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetHotspotAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHotspotAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取热定分析结果.
     *
     * @param request - GetHotspotAnalysisRequest
     * @returns GetHotspotAnalysisResponse
     *
     * @param GetHotspotAnalysisRequest $request
     *
     * @return GetHotspotAnalysisResponse
     */
    public function getHotspotAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * 热点对比.
     *
     * @param request - GetHotspotCompareRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetHotspotCompareResponse
     *
     * @param GetHotspotCompareRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetHotspotCompareResponse
     */
    public function getHotspotCompareWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->beg1End) {
            @$body['beg1_end'] = $request->beg1End;
        }

        if (null !== $request->beg1Start) {
            @$body['beg1_start'] = $request->beg1Start;
        }

        if (null !== $request->beg2End) {
            @$body['beg2_end'] = $request->beg2End;
        }

        if (null !== $request->beg2Start) {
            @$body['beg2_start'] = $request->beg2Start;
        }

        if (null !== $request->hotType) {
            @$body['hot_type'] = $request->hotType;
        }

        if (null !== $request->instance1) {
            @$body['instance1'] = $request->instance1;
        }

        if (null !== $request->instance2) {
            @$body['instance2'] = $request->instance2;
        }

        if (null !== $request->pid1) {
            @$body['pid1'] = $request->pid1;
        }

        if (null !== $request->pid2) {
            @$body['pid2'] = $request->pid2;
        }

        if (null !== $request->table) {
            @$body['table'] = $request->table;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotCompare',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/proxy/post/livetrace_hotspot_compare',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetHotspotCompareResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHotspotCompareResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 热点对比.
     *
     * @param request - GetHotspotCompareRequest
     * @returns GetHotspotCompareResponse
     *
     * @param GetHotspotCompareRequest $request
     *
     * @return GetHotspotCompareResponse
     */
    public function getHotspotCompare($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotCompareWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取热点实例列表.
     *
     * @param request - GetHotspotInstanceListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetHotspotInstanceListResponse
     *
     * @param GetHotspotInstanceListRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetHotspotInstanceListResponse
     */
    public function getHotspotInstanceListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->begEnd) {
            @$body['beg_end'] = $request->begEnd;
        }

        if (null !== $request->begStart) {
            @$body['beg_start'] = $request->begStart;
        }

        if (null !== $request->table) {
            @$body['table'] = $request->table;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotInstanceList',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/proxy/post/livetrace_hotspot_instance_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetHotspotInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHotspotInstanceListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取热点实例列表.
     *
     * @param request - GetHotspotInstanceListRequest
     * @returns GetHotspotInstanceListResponse
     *
     * @param GetHotspotInstanceListRequest $request
     *
     * @return GetHotspotInstanceListResponse
     */
    public function getHotspotInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotInstanceListWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取某个实例的pid列表.
     *
     * @param request - GetHotspotPidListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetHotspotPidListResponse
     *
     * @param GetHotspotPidListRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetHotspotPidListResponse
     */
    public function getHotspotPidListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->begEnd) {
            @$body['beg_end'] = $request->begEnd;
        }

        if (null !== $request->begStart) {
            @$body['beg_start'] = $request->begStart;
        }

        if (null !== $request->instance) {
            @$body['instance'] = $request->instance;
        }

        if (null !== $request->table) {
            @$body['table'] = $request->table;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotPidList',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/proxy/post/livetrace_hotspot_pid_list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetHotspotPidListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHotspotPidListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取某个实例的pid列表.
     *
     * @param request - GetHotspotPidListRequest
     * @returns GetHotspotPidListResponse
     *
     * @param GetHotspotPidListRequest $request
     *
     * @return GetHotspotPidListResponse
     */
    public function getHotspotPidList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotPidListWithOptions($request, $headers, $runtime);
    }

    /**
     * 发起热点追踪.
     *
     * @param request - GetHotspotTrackingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetHotspotTrackingResponse
     *
     * @param GetHotspotTrackingRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetHotspotTrackingResponse
     */
    public function getHotspotTrackingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->begEnd) {
            @$body['beg_end'] = $request->begEnd;
        }

        if (null !== $request->begStart) {
            @$body['beg_start'] = $request->begStart;
        }

        if (null !== $request->hotType) {
            @$body['hot_type'] = $request->hotType;
        }

        if (null !== $request->instance) {
            @$body['instance'] = $request->instance;
        }

        if (null !== $request->pid) {
            @$body['pid'] = $request->pid;
        }

        if (null !== $request->table) {
            @$body['table'] = $request->table;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotTracking',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/proxy/post/livetrace_hotspot_tracking',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetHotspotTrackingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHotspotTrackingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发起热点追踪.
     *
     * @param request - GetHotspotTrackingRequest
     * @returns GetHotspotTrackingResponse
     *
     * @param GetHotspotTrackingRequest $request
     *
     * @return GetHotspotTrackingResponse
     */
    public function getHotspotTracking($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotTrackingWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实时集群/节点健康度分数.
     *
     * @param request - GetInstantScoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetInstantScoreResponse
     *
     * @param GetInstantScoreRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetInstantScoreResponse
     */
    public function getInstantScoreWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['cluster'] = $request->cluster;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstantScore',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/instant/score',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstantScoreResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstantScoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实时集群/节点健康度分数.
     *
     * @param request - GetInstantScoreRequest
     * @returns GetInstantScoreResponse
     *
     * @param GetInstantScoreRequest $request
     *
     * @return GetInstantScoreResponse
     */
    public function getInstantScore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstantScoreWithOptions($request, $headers, $runtime);
    }

    /**
     * AI Infra获取分析记录列表.
     *
     * @param request - GetListRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetListRecordResponse
     *
     * @param GetListRecordRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetListRecordResponse
     */
    public function getListRecordWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetListRecord',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/app_observ/aiAnalysis/list_record',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetListRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetListRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * AI Infra获取分析记录列表.
     *
     * @param request - GetListRecordRequest
     * @returns GetListRecordResponse
     *
     * @param GetListRecordRequest $request
     *
     * @return GetListRecordResponse
     */
    public function getListRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getListRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取一定时间内集群中节点/节点中pod异常问题占比.
     *
     * @param request - GetProblemPercentageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetProblemPercentageResponse
     *
     * @param GetProblemPercentageRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetProblemPercentageResponse
     */
    public function getProblemPercentageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['cluster'] = $request->cluster;
        }

        if (null !== $request->end) {
            @$query['end'] = $request->end;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->start) {
            @$query['start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProblemPercentage',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/range/problem_percentage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetProblemPercentageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProblemPercentageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取一定时间内集群中节点/节点中pod异常问题占比.
     *
     * @param request - GetProblemPercentageRequest
     * @returns GetProblemPercentageResponse
     *
     * @param GetProblemPercentageRequest $request
     *
     * @return GetProblemPercentageResponse
     */
    public function getProblemPercentage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemPercentageWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取健康分趋势
     *
     * @param request - GetRangeScoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRangeScoreResponse
     *
     * @param GetRangeScoreRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetRangeScoreResponse
     */
    public function getRangeScoreWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['cluster'] = $request->cluster;
        }

        if (null !== $request->end) {
            @$query['end'] = $request->end;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->start) {
            @$query['start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRangeScore',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/range/score',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRangeScoreResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRangeScoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取健康分趋势
     *
     * @param request - GetRangeScoreRequest
     * @returns GetRangeScoreResponse
     *
     * @param GetRangeScoreRequest $request
     *
     * @return GetRangeScoreResponse
     */
    public function getRangeScore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRangeScoreWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取集群/节点资源实时使用情况.
     *
     * @param request - GetResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResourcesResponse
     *
     * @param GetResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetResourcesResponse
     */
    public function getResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['cluster'] = $request->cluster;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResources',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/instant/resource',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取集群/节点资源实时使用情况.
     *
     * @param request - GetResourcesRequest
     * @returns GetResourcesResponse
     *
     * @param GetResourcesRequest $request
     *
     * @return GetResourcesResponse
     */
    public function getResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 初始化SysOM，确保角色存在.
     *
     * @param request - InitialSysomRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InitialSysomResponse
     *
     * @param InitialSysomRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return InitialSysomResponse
     */
    public function initialSysomWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->checkOnly) {
            @$body['check_only'] = $request->checkOnly;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitialSysom',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/initial',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InitialSysomResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InitialSysomResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 初始化SysOM，确保角色存在.
     *
     * @param request - InitialSysomRequest
     * @returns InitialSysomResponse
     *
     * @param InitialSysomRequest $request
     *
     * @return InitialSysomResponse
     */
    public function initialSysom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initialSysomWithOptions($request, $headers, $runtime);
    }

    /**
     * 在指定的实例上安装 Agent.
     *
     * @param request - InstallAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InstallAgentResponse
     *
     * @param InstallAgentRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return InstallAgentResponse
     */
    public function installAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->agentVersion) {
            @$body['agent_version'] = $request->agentVersion;
        }

        if (null !== $request->installType) {
            @$body['install_type'] = $request->installType;
        }

        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InstallAgent',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/install_agent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallAgentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallAgentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 在指定的实例上安装 Agent.
     *
     * @param request - InstallAgentRequest
     * @returns InstallAgentResponse
     *
     * @param InstallAgentRequest $request
     *
     * @return InstallAgentResponse
     */
    public function installAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * 给集群安装组件.
     *
     * @param request - InstallAgentForClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InstallAgentForClusterResponse
     *
     * @param InstallAgentForClusterRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return InstallAgentForClusterResponse
     */
    public function installAgentForClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->agentVersion) {
            @$body['agent_version'] = $request->agentVersion;
        }

        if (null !== $request->clusterId) {
            @$body['cluster_id'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InstallAgentForCluster',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/install_agent_by_cluster',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallAgentForClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallAgentForClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 给集群安装组件.
     *
     * @param request - InstallAgentForClusterRequest
     * @returns InstallAgentForClusterResponse
     *
     * @param InstallAgentForClusterRequest $request
     *
     * @return InstallAgentForClusterResponse
     */
    public function installAgentForCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installAgentForClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * 异常项诊断跳转.
     *
     * @param request - InvokeAnomalyDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InvokeAnomalyDiagnosisResponse
     *
     * @param InvokeAnomalyDiagnosisRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return InvokeAnomalyDiagnosisResponse
     */
    public function invokeAnomalyDiagnosisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->uuid) {
            @$query['uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvokeAnomalyDiagnosis',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/diagnosis/invoke_anomaly_diagnose',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InvokeAnomalyDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InvokeAnomalyDiagnosisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 异常项诊断跳转.
     *
     * @param request - InvokeAnomalyDiagnosisRequest
     * @returns InvokeAnomalyDiagnosisResponse
     *
     * @param InvokeAnomalyDiagnosisRequest $request
     *
     * @return InvokeAnomalyDiagnosisResponse
     */
    public function invokeAnomalyDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokeAnomalyDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * 发起诊断.
     *
     * @param request - InvokeDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InvokeDiagnosisResponse
     *
     * @param InvokeDiagnosisRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return InvokeDiagnosisResponse
     */
    public function invokeDiagnosisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channel) {
            @$body['channel'] = $request->channel;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        if (null !== $request->serviceName) {
            @$body['service_name'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvokeDiagnosis',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/diagnosis/invoke_diagnosis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InvokeDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InvokeDiagnosisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发起诊断.
     *
     * @param request - InvokeDiagnosisRequest
     * @returns InvokeDiagnosisResponse
     *
     * @param InvokeDiagnosisRequest $request
     *
     * @return InvokeDiagnosisResponse
     */
    public function invokeDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokeDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取一定时间段内的异常事件.
     *
     * @param request - ListAbnormalyEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAbnormalyEventsResponse
     *
     * @param ListAbnormalyEventsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListAbnormalyEventsResponse
     */
    public function listAbnormalyEventsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['cluster'] = $request->cluster;
        }

        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->end) {
            @$query['end'] = $request->end;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->level) {
            @$query['level'] = $request->level;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pod) {
            @$query['pod'] = $request->pod;
        }

        if (null !== $request->showPod) {
            @$query['showPod'] = $request->showPod;
        }

        if (null !== $request->start) {
            @$query['start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAbnormalyEvents',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/range/abnormaly_events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAbnormalyEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAbnormalyEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取一定时间段内的异常事件.
     *
     * @param request - ListAbnormalyEventsRequest
     * @returns ListAbnormalyEventsResponse
     *
     * @param ListAbnormalyEventsRequest $request
     *
     * @return ListAbnormalyEventsResponse
     */
    public function listAbnormalyEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAbnormalyEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出 Agent 的安装记录.
     *
     * @param request - ListAgentInstallRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAgentInstallRecordsResponse
     *
     * @param ListAgentInstallRecordsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAgentInstallRecordsResponse
     */
    public function listAgentInstallRecordsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->instanceId) {
            @$query['instance_id'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['plugin_id'] = $request->pluginId;
        }

        if (null !== $request->pluginVersion) {
            @$query['plugin_version'] = $request->pluginVersion;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAgentInstallRecords',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/list_agent_install_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAgentInstallRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAgentInstallRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列出 Agent 的安装记录.
     *
     * @param request - ListAgentInstallRecordsRequest
     * @returns ListAgentInstallRecordsResponse
     *
     * @param ListAgentInstallRecordsRequest $request
     *
     * @return ListAgentInstallRecordsResponse
     */
    public function listAgentInstallRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentInstallRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取 Agent 列表.
     *
     * @param request - ListAgentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAgentsResponse
     */
    public function listAgentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAgents',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/list_agents',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAgentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取 Agent 列表.
     *
     * @param request - ListAgentsRequest
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     *
     * @return ListAgentsResponse
     */
    public function listAgents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取集群组件安装记录.
     *
     * @param request - ListClusterAgentInstallRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListClusterAgentInstallRecordsResponse
     *
     * @param ListClusterAgentInstallRecordsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListClusterAgentInstallRecordsResponse
     */
    public function listClusterAgentInstallRecordsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['plugin_id'] = $request->pluginId;
        }

        if (null !== $request->pluginVersion) {
            @$query['plugin_version'] = $request->pluginVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterAgentInstallRecords',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/list_cluster_agent_install_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClusterAgentInstallRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterAgentInstallRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取集群组件安装记录.
     *
     * @param request - ListClusterAgentInstallRecordsRequest
     * @returns ListClusterAgentInstallRecordsResponse
     *
     * @param ListClusterAgentInstallRecordsRequest $request
     *
     * @return ListClusterAgentInstallRecordsResponse
     */
    public function listClusterAgentInstallRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterAgentInstallRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取当前用户的所有集群.
     *
     * @param request - ListClustersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->clusterStatus) {
            @$query['cluster_status'] = $request->clusterStatus;
        }

        if (null !== $request->clusterType) {
            @$query['cluster_type'] = $request->clusterType;
        }

        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/cluster/list_clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClustersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取当前用户的所有集群.
     *
     * @param request - ListClustersRequest
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取诊断历史记录列表.
     *
     * @param request - ListDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDiagnosisResponse
     *
     * @param ListDiagnosisRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListDiagnosisResponse
     */
    public function listDiagnosisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->params) {
            @$query['params'] = $request->params;
        }

        if (null !== $request->serviceName) {
            @$query['service_name'] = $request->serviceName;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiagnosis',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/diagnosis/list_diagnosis',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDiagnosisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取诊断历史记录列表.
     *
     * @param request - ListDiagnosisRequest
     * @returns ListDiagnosisResponse
     *
     * @param ListDiagnosisRequest $request
     *
     * @return ListDiagnosisResponse
     */
    public function listDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取一定时间内集群节点/Pod健康度列表.
     *
     * @param request - ListInstanceHealthRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInstanceHealthResponse
     *
     * @param ListInstanceHealthRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceHealthResponse
     */
    public function listInstanceHealthWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cluster) {
            @$query['cluster'] = $request->cluster;
        }

        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->end) {
            @$query['end'] = $request->end;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->start) {
            @$query['start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceHealth',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/cluster_health/range/instance_health_list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstanceHealthResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceHealthResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取一定时间内集群节点/Pod健康度列表.
     *
     * @param request - ListInstanceHealthRequest
     * @returns ListInstanceHealthResponse
     *
     * @param ListInstanceHealthRequest $request
     *
     * @return ListInstanceHealthResponse
     */
    public function listInstanceHealth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceHealthWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实例状态
     *
     * @param request - ListInstanceStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInstanceStatusResponse
     *
     * @param ListInstanceStatusRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceStatusResponse
     */
    public function listInstanceStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceStatus',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/instance/list_instance_status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实例状态
     *
     * @param request - ListInstanceStatusRequest
     * @returns ListInstanceStatusResponse
     *
     * @param ListInstanceStatusRequest $request
     *
     * @return ListInstanceStatusResponse
     */
    public function listInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实例列表.
     *
     * @param request - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/instance/list_instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实例列表.
     *
     * @param request - ListInstancesRequest
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实例中的pod列表.
     *
     * @param request - ListPodsOfInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPodsOfInstanceResponse
     *
     * @param ListPodsOfInstanceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListPodsOfInstanceResponse
     */
    public function listPodsOfInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['cluster_id'] = $request->clusterId;
        }

        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPodsOfInstance',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/instance/list_pod_of_instance',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPodsOfInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPodsOfInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实例中的pod列表.
     *
     * @param request - ListPodsOfInstanceRequest
     * @returns ListPodsOfInstanceResponse
     *
     * @param ListPodsOfInstanceRequest $request
     *
     * @return ListPodsOfInstanceResponse
     */
    public function listPodsOfInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPodsOfInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出所有纳管了机器的区域
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRegionsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/instance/list_regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列出所有纳管了机器的区域
     *
     * @returns ListRegionsResponse
     *
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegionsWithOptions($headers, $runtime);
    }

    /**
     * 启动AI作业分析.
     *
     * @param request - StartAIAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartAIAnalysisResponse
     *
     * @param StartAIAnalysisRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StartAIAnalysisResponse
     */
    public function startAIAnalysisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channel) {
            @$body['channel'] = $request->channel;
        }

        if (null !== $request->comms) {
            @$body['comms'] = $request->comms;
        }

        if (null !== $request->instance) {
            @$body['instance'] = $request->instance;
        }

        if (null !== $request->pids) {
            @$body['pids'] = $request->pids;
        }

        if (null !== $request->region) {
            @$body['region'] = $request->region;
        }

        if (null !== $request->timeout) {
            @$body['timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartAIAnalysis',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/proxy/post/start_ai_analysis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartAIAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartAIAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启动AI作业分析.
     *
     * @param request - StartAIAnalysisRequest
     * @returns StartAIAnalysisResponse
     *
     * @param StartAIAnalysisRequest $request
     *
     * @return StartAIAnalysisResponse
     */
    public function startAIAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAIAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * 卸载 SysOM Agent.
     *
     * @param request - UninstallAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UninstallAgentResponse
     *
     * @param UninstallAgentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UninstallAgentResponse
     */
    public function uninstallAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->agentVersion) {
            @$body['agent_version'] = $request->agentVersion;
        }

        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UninstallAgent',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/uninstall_agent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UninstallAgentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UninstallAgentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 卸载 SysOM Agent.
     *
     * @param request - UninstallAgentRequest
     * @returns UninstallAgentResponse
     *
     * @param UninstallAgentRequest $request
     *
     * @return UninstallAgentResponse
     */
    public function uninstallAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * 给集群卸载组件.
     *
     * @param request - UninstallAgentForClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UninstallAgentForClusterResponse
     *
     * @param UninstallAgentForClusterRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UninstallAgentForClusterResponse
     */
    public function uninstallAgentForClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->agentVersion) {
            @$body['agent_version'] = $request->agentVersion;
        }

        if (null !== $request->clusterId) {
            @$body['cluster_id'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UninstallAgentForCluster',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/uninstall_agent_by_cluster',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UninstallAgentForClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UninstallAgentForClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 给集群卸载组件.
     *
     * @param request - UninstallAgentForClusterRequest
     * @returns UninstallAgentForClusterResponse
     *
     * @param UninstallAgentForClusterRequest $request
     *
     * @return UninstallAgentForClusterResponse
     */
    public function uninstallAgentForCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallAgentForClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * 异常项关注度更新.
     *
     * @param tmpReq - UpdateEventsAttentionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateEventsAttentionResponse
     *
     * @param UpdateEventsAttentionRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEventsAttentionResponse
     */
    public function updateEventsAttentionWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateEventsAttentionShrinkRequest([]);
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
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEventsAttention',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/openapi/proxy/post/cluster_update_events_attention',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEventsAttentionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEventsAttentionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 异常项关注度更新.
     *
     * @param request - UpdateEventsAttentionRequest
     * @returns UpdateEventsAttentionResponse
     *
     * @param UpdateEventsAttentionRequest $request
     *
     * @return UpdateEventsAttentionResponse
     */
    public function updateEventsAttention($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEventsAttentionWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新 SysOM Agent.
     *
     * @param request - UpgradeAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpgradeAgentResponse
     *
     * @param UpgradeAgentRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpgradeAgentResponse
     */
    public function upgradeAgentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->agentVersion) {
            @$body['agent_version'] = $request->agentVersion;
        }

        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeAgent',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/upgrade_agent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeAgentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeAgentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新 SysOM Agent.
     *
     * @param request - UpgradeAgentRequest
     * @returns UpgradeAgentResponse
     *
     * @param UpgradeAgentRequest $request
     *
     * @return UpgradeAgentResponse
     */
    public function upgradeAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * 给集群更新组件.
     *
     * @param request - UpgradeAgentForClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpgradeAgentForClusterResponse
     *
     * @param UpgradeAgentForClusterRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeAgentForClusterResponse
     */
    public function upgradeAgentForClusterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['agent_id'] = $request->agentId;
        }

        if (null !== $request->agentVersion) {
            @$body['agent_version'] = $request->agentVersion;
        }

        if (null !== $request->clusterId) {
            @$body['cluster_id'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeAgentForCluster',
            'version'     => '2023-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/am/agent/upgrade_agent_by_cluster',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeAgentForClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeAgentForClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 给集群更新组件.
     *
     * @param request - UpgradeAgentForClusterRequest
     * @returns UpgradeAgentForClusterResponse
     *
     * @param UpgradeAgentForClusterRequest $request
     *
     * @return UpgradeAgentForClusterResponse
     */
    public function upgradeAgentForCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeAgentForClusterWithOptions($request, $headers, $runtime);
    }
}
