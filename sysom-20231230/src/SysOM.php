<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CheckInstanceSupportRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CheckInstanceSupportResponse;
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
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusShrinkRequest;
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
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesEcsInfoListRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesEcsInfoListResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstanceStatusRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstanceStatusResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoShrinkRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListPluginsInstancesRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListPluginsInstancesResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListPodsOfInstanceRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListPodsOfInstanceResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListRegionsResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIAnalysisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIAnalysisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIDiffAnalysisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIDiffAnalysisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentForClusterRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentForClusterResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateEventsAttentionRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateEventsAttentionResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordShrinkRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentForClusterRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentForClusterResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpgradeAgentResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 授权 SysOM 对某个机器进行诊断
     *  *
     * @param AuthDiagnosisRequest $request AuthDiagnosisRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthDiagnosisResponse AuthDiagnosisResponse
     */
    public function authDiagnosisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoCreateRole)) {
            $body['autoCreateRole'] = $request->autoCreateRole;
        }
        if (!Utils::isUnset($request->autoInstallAgent)) {
            $body['autoInstallAgent'] = $request->autoInstallAgent;
        }
        if (!Utils::isUnset($request->instances)) {
            $body['instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AuthDiagnosis',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/diagnosis/auth',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AuthDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 授权 SysOM 对某个机器进行诊断
     *  *
     * @param AuthDiagnosisRequest $request AuthDiagnosisRequest
     *
     * @return AuthDiagnosisResponse AuthDiagnosisResponse
     */
    public function authDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 检查目标实例是否被 SysOM 支持
     *  *
     * @param CheckInstanceSupportRequest $request CheckInstanceSupportRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckInstanceSupportResponse CheckInstanceSupportResponse
     */
    public function checkInstanceSupportWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instances)) {
            $body['instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->region)) {
            $body['region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckInstanceSupport',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/supportInstanceList/checkInstanceSupport',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckInstanceSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查目标实例是否被 SysOM 支持
     *  *
     * @param CheckInstanceSupportRequest $request CheckInstanceSupportRequest
     *
     * @return CheckInstanceSupportResponse CheckInstanceSupportResponse
     */
    public function checkInstanceSupport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInstanceSupportWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取copilot服务的返回结果
     *  *
     * @param GenerateCopilotResponseRequest $request GenerateCopilotResponseRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateCopilotResponseResponse GenerateCopilotResponseResponse
     */
    public function generateCopilotResponseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->llmParamString)) {
            $body['llmParamString'] = $request->llmParamString;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateCopilotResponse',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/copilot/generate_copilot_response',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateCopilotResponseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取copilot服务的返回结果
     *  *
     * @param GenerateCopilotResponseRequest $request GenerateCopilotResponseRequest
     *
     * @return GenerateCopilotResponseResponse GenerateCopilotResponseResponse
     */
    public function generateCopilotResponse($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateCopilotResponseWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 流式copilot服务接口
     *  *
     * @param GenerateCopilotStreamResponseRequest $request GenerateCopilotStreamResponseRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateCopilotStreamResponseResponse GenerateCopilotStreamResponseResponse
     */
    public function generateCopilotStreamResponseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->llmParamString)) {
            $body['llmParamString'] = $request->llmParamString;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateCopilotStreamResponse',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/copilot/generate_copilot_stream_response',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateCopilotStreamResponseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 流式copilot服务接口
     *  *
     * @param GenerateCopilotStreamResponseRequest $request GenerateCopilotStreamResponseRequest
     *
     * @return GenerateCopilotStreamResponseResponse GenerateCopilotStreamResponseResponse
     */
    public function generateCopilotStreamResponse($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateCopilotStreamResponseWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查看AI Infra分析结果
     *  *
     * @param GetAIQueryResultRequest $request GetAIQueryResultRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAIQueryResultResponse GetAIQueryResultResponse
     */
    public function getAIQueryResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->analysisId)) {
            $body['analysisId'] = $request->analysisId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAIQueryResult',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/app_observ/aiAnalysis/query_result',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAIQueryResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看AI Infra分析结果
     *  *
     * @param GetAIQueryResultRequest $request GetAIQueryResultRequest
     *
     * @return GetAIQueryResultResponse GetAIQueryResultResponse
     */
    public function getAIQueryResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAIQueryResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取节点/Pod不同等级异常事件的数量
     *  *
     * @param GetAbnormalEventsCountRequest $request GetAbnormalEventsCountRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAbnormalEventsCountResponse GetAbnormalEventsCountResponse
     */
    public function getAbnormalEventsCountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->level)) {
            $query['level'] = $request->level;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pod)) {
            $query['pod'] = $request->pod;
        }
        if (!Utils::isUnset($request->showPod)) {
            $query['showPod'] = $request->showPod;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAbnormalEventsCount',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/range/abnormaly_events_count',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAbnormalEventsCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取节点/Pod不同等级异常事件的数量
     *  *
     * @param GetAbnormalEventsCountRequest $request GetAbnormalEventsCountRequest
     *
     * @return GetAbnormalEventsCountResponse GetAbnormalEventsCountResponse
     */
    public function getAbnormalEventsCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAbnormalEventsCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取某个组件的详情
     *  *
     * @param GetAgentRequest $request GetAgentRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentResponse GetAgentResponse
     */
    public function getAgentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['agent_id'] = $request->agentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgent',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/get_agent',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某个组件的详情
     *  *
     * @param GetAgentRequest $request GetAgentRequest
     *
     * @return GetAgentResponse GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Agent安装任务执行状态
     *  *
     * @param GetAgentTaskRequest $request GetAgentTaskRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentTaskResponse GetAgentTaskResponse
     */
    public function getAgentTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['task_id'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentTask',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/get_agent_task',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Agent安装任务执行状态
     *  *
     * @param GetAgentTaskRequest $request GetAgentTaskRequest
     *
     * @return GetAgentTaskResponse GetAgentTaskResponse
     */
    public function getAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取copilot历史聊天记录
     *  *
     * @param GetCopilotHistoryRequest $request GetCopilotHistoryRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCopilotHistoryResponse GetCopilotHistoryResponse
     */
    public function getCopilotHistoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->count)) {
            $body['count'] = $request->count;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCopilotHistory',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/copilot/get_copilot_history',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCopilotHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取copilot历史聊天记录
     *  *
     * @param GetCopilotHistoryRequest $request GetCopilotHistoryRequest
     *
     * @return GetCopilotHistoryResponse GetCopilotHistoryResponse
     */
    public function getCopilotHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCopilotHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取诊断结果
     *  *
     * @param GetDiagnosisResultRequest $request GetDiagnosisResultRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDiagnosisResultResponse GetDiagnosisResultResponse
     */
    public function getDiagnosisResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['task_id'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDiagnosisResult',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/diagnosis/get_diagnosis_results',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取诊断结果
     *  *
     * @param GetDiagnosisResultRequest $request GetDiagnosisResultRequest
     *
     * @return GetDiagnosisResultResponse GetDiagnosisResultResponse
     */
    public function getDiagnosisResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDiagnosisResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取一段时间的节点/pod健康度比例
     *  *
     * @param GetHealthPercentageRequest $request GetHealthPercentageRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHealthPercentageResponse GetHealthPercentageResponse
     */
    public function getHealthPercentageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHealthPercentage',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/range/health_percentage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHealthPercentageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一段时间的节点/pod健康度比例
     *  *
     * @param GetHealthPercentageRequest $request GetHealthPercentageRequest
     *
     * @return GetHealthPercentageResponse GetHealthPercentageResponse
     */
    public function getHealthPercentage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHealthPercentageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取集群节点数量
     *  *
     * @param GetHostCountRequest $request GetHostCountRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHostCountResponse GetHostCountResponse
     */
    public function getHostCountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHostCount',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/range/host_count',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHostCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群节点数量
     *  *
     * @param GetHostCountRequest $request GetHostCountRequest
     *
     * @return GetHostCountResponse GetHostCountResponse
     */
    public function getHostCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHostCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实例下的某个字段列表
     *  *
     * @param GetHotSpotUniqListRequest $request GetHotSpotUniqListRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotSpotUniqListResponse GetHotSpotUniqListResponse
     */
    public function getHotSpotUniqListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->begEnd)) {
            $body['beg_end'] = $request->begEnd;
        }
        if (!Utils::isUnset($request->begStart)) {
            $body['beg_start'] = $request->begStart;
        }
        if (!Utils::isUnset($request->instance)) {
            $body['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->pid)) {
            $body['pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->table)) {
            $body['table'] = $request->table;
        }
        if (!Utils::isUnset($request->uniq)) {
            $body['uniq'] = $request->uniq;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHotSpotUniqList',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/livetrace_proxy/hotspot_uniq_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHotSpotUniqListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例下的某个字段列表
     *  *
     * @param GetHotSpotUniqListRequest $request GetHotSpotUniqListRequest
     *
     * @return GetHotSpotUniqListResponse GetHotSpotUniqListResponse
     */
    public function getHotSpotUniqList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotSpotUniqListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取热定分析结果
     *  *
     * @param GetHotspotAnalysisRequest $request GetHotspotAnalysisRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotspotAnalysisResponse GetHotspotAnalysisResponse
     */
    public function getHotspotAnalysisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['appType'] = $request->appType;
        }
        if (!Utils::isUnset($request->begEnd)) {
            $body['beg_end'] = $request->begEnd;
        }
        if (!Utils::isUnset($request->begStart)) {
            $body['beg_start'] = $request->begStart;
        }
        if (!Utils::isUnset($request->instance)) {
            $body['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->pid)) {
            $body['pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->table)) {
            $body['table'] = $request->table;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHotspotAnalysis',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/proxy/post/livetrace_hotspot_analysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHotspotAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取热定分析结果
     *  *
     * @param GetHotspotAnalysisRequest $request GetHotspotAnalysisRequest
     *
     * @return GetHotspotAnalysisResponse GetHotspotAnalysisResponse
     */
    public function getHotspotAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 热点对比
     *  *
     * @param GetHotspotCompareRequest $request GetHotspotCompareRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotspotCompareResponse GetHotspotCompareResponse
     */
    public function getHotspotCompareWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->beg1End)) {
            $body['beg1_end'] = $request->beg1End;
        }
        if (!Utils::isUnset($request->beg1Start)) {
            $body['beg1_start'] = $request->beg1Start;
        }
        if (!Utils::isUnset($request->beg2End)) {
            $body['beg2_end'] = $request->beg2End;
        }
        if (!Utils::isUnset($request->beg2Start)) {
            $body['beg2_start'] = $request->beg2Start;
        }
        if (!Utils::isUnset($request->hotType)) {
            $body['hot_type'] = $request->hotType;
        }
        if (!Utils::isUnset($request->instance1)) {
            $body['instance1'] = $request->instance1;
        }
        if (!Utils::isUnset($request->instance2)) {
            $body['instance2'] = $request->instance2;
        }
        if (!Utils::isUnset($request->pid1)) {
            $body['pid1'] = $request->pid1;
        }
        if (!Utils::isUnset($request->pid2)) {
            $body['pid2'] = $request->pid2;
        }
        if (!Utils::isUnset($request->table)) {
            $body['table'] = $request->table;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHotspotCompare',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/proxy/post/livetrace_hotspot_compare',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHotspotCompareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 热点对比
     *  *
     * @param GetHotspotCompareRequest $request GetHotspotCompareRequest
     *
     * @return GetHotspotCompareResponse GetHotspotCompareResponse
     */
    public function getHotspotCompare($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotCompareWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取热点实例列表
     *  *
     * @param GetHotspotInstanceListRequest $request GetHotspotInstanceListRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotspotInstanceListResponse GetHotspotInstanceListResponse
     */
    public function getHotspotInstanceListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->begEnd)) {
            $body['beg_end'] = $request->begEnd;
        }
        if (!Utils::isUnset($request->begStart)) {
            $body['beg_start'] = $request->begStart;
        }
        if (!Utils::isUnset($request->table)) {
            $body['table'] = $request->table;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHotspotInstanceList',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/proxy/post/livetrace_hotspot_instance_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHotspotInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取热点实例列表
     *  *
     * @param GetHotspotInstanceListRequest $request GetHotspotInstanceListRequest
     *
     * @return GetHotspotInstanceListResponse GetHotspotInstanceListResponse
     */
    public function getHotspotInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotInstanceListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取某个实例的pid列表
     *  *
     * @param GetHotspotPidListRequest $request GetHotspotPidListRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotspotPidListResponse GetHotspotPidListResponse
     */
    public function getHotspotPidListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->begEnd)) {
            $body['beg_end'] = $request->begEnd;
        }
        if (!Utils::isUnset($request->begStart)) {
            $body['beg_start'] = $request->begStart;
        }
        if (!Utils::isUnset($request->instance)) {
            $body['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->table)) {
            $body['table'] = $request->table;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHotspotPidList',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/proxy/post/livetrace_hotspot_pid_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHotspotPidListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某个实例的pid列表
     *  *
     * @param GetHotspotPidListRequest $request GetHotspotPidListRequest
     *
     * @return GetHotspotPidListResponse GetHotspotPidListResponse
     */
    public function getHotspotPidList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotPidListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发起热点追踪
     *  *
     * @param GetHotspotTrackingRequest $request GetHotspotTrackingRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotspotTrackingResponse GetHotspotTrackingResponse
     */
    public function getHotspotTrackingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->begEnd)) {
            $body['beg_end'] = $request->begEnd;
        }
        if (!Utils::isUnset($request->begStart)) {
            $body['beg_start'] = $request->begStart;
        }
        if (!Utils::isUnset($request->hotType)) {
            $body['hot_type'] = $request->hotType;
        }
        if (!Utils::isUnset($request->instance)) {
            $body['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->pid)) {
            $body['pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->table)) {
            $body['table'] = $request->table;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHotspotTracking',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/proxy/post/livetrace_hotspot_tracking',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHotspotTrackingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发起热点追踪
     *  *
     * @param GetHotspotTrackingRequest $request GetHotspotTrackingRequest
     *
     * @return GetHotspotTrackingResponse GetHotspotTrackingResponse
     */
    public function getHotspotTracking($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHotspotTrackingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实时集群/节点健康度分数
     *  *
     * @param GetInstantScoreRequest $request GetInstantScoreRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstantScoreResponse GetInstantScoreResponse
     */
    public function getInstantScoreWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstantScore',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/instant/score',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstantScoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实时集群/节点健康度分数
     *  *
     * @param GetInstantScoreRequest $request GetInstantScoreRequest
     *
     * @return GetInstantScoreResponse GetInstantScoreResponse
     */
    public function getInstantScore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstantScoreWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary AI Infra获取分析记录列表
     *  *
     * @param GetListRecordRequest $request GetListRecordRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetListRecordResponse GetListRecordResponse
     */
    public function getListRecordWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetListRecord',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/app_observ/aiAnalysis/list_record',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetListRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary AI Infra获取分析记录列表
     *  *
     * @param GetListRecordRequest $request GetListRecordRequest
     *
     * @return GetListRecordResponse GetListRecordResponse
     */
    public function getListRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getListRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取一定时间内集群中节点/节点中pod异常问题占比
     *  *
     * @param GetProblemPercentageRequest $request GetProblemPercentageRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProblemPercentageResponse GetProblemPercentageResponse
     */
    public function getProblemPercentageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProblemPercentage',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/range/problem_percentage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProblemPercentageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一定时间内集群中节点/节点中pod异常问题占比
     *  *
     * @param GetProblemPercentageRequest $request GetProblemPercentageRequest
     *
     * @return GetProblemPercentageResponse GetProblemPercentageResponse
     */
    public function getProblemPercentage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemPercentageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取健康分趋势
     *  *
     * @param GetRangeScoreRequest $request GetRangeScoreRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRangeScoreResponse GetRangeScoreResponse
     */
    public function getRangeScoreWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRangeScore',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/range/score',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRangeScoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取健康分趋势
     *  *
     * @param GetRangeScoreRequest $request GetRangeScoreRequest
     *
     * @return GetRangeScoreResponse GetRangeScoreResponse
     */
    public function getRangeScore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRangeScoreWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取集群/节点资源实时使用情况
     *  *
     * @param GetResourcesRequest $request GetResourcesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourcesResponse GetResourcesResponse
     */
    public function getResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResources',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/instant/resource',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群/节点资源实时使用情况
     *  *
     * @param GetResourcesRequest $request GetResourcesRequest
     *
     * @return GetResourcesResponse GetResourcesResponse
     */
    public function getResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取功能模块配置
     *  *
     * @param GetServiceFuncStatusRequest $tmpReq  GetServiceFuncStatusRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceFuncStatusResponse GetServiceFuncStatusResponse
     */
    public function getServiceFuncStatusWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetServiceFuncStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->params)) {
            $request->paramsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->params, 'params', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->paramsShrink)) {
            $query['params'] = $request->paramsShrink;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['service_name'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceFuncStatus',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/func-switch/get-service-func-status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceFuncStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取功能模块配置
     *  *
     * @param GetServiceFuncStatusRequest $request GetServiceFuncStatusRequest
     *
     * @return GetServiceFuncStatusResponse GetServiceFuncStatusResponse
     */
    public function getServiceFuncStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceFuncStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 初始化SysOM，确保角色存在
     *  *
     * @param InitialSysomRequest $request InitialSysomRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return InitialSysomResponse InitialSysomResponse
     */
    public function initialSysomWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkOnly)) {
            $body['check_only'] = $request->checkOnly;
        }
        if (!Utils::isUnset($request->source)) {
            $body['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitialSysom',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/initial',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InitialSysomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 初始化SysOM，确保角色存在
     *  *
     * @param InitialSysomRequest $request InitialSysomRequest
     *
     * @return InitialSysomResponse InitialSysomResponse
     */
    public function initialSysom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initialSysomWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 在指定的实例上安装 Agent
     *  *
     * @param InstallAgentRequest $request InstallAgentRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallAgentResponse InstallAgentResponse
     */
    public function installAgentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['agent_id'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentVersion)) {
            $body['agent_version'] = $request->agentVersion;
        }
        if (!Utils::isUnset($request->installType)) {
            $body['install_type'] = $request->installType;
        }
        if (!Utils::isUnset($request->instances)) {
            $body['instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InstallAgent',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/install_agent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在指定的实例上安装 Agent
     *  *
     * @param InstallAgentRequest $request InstallAgentRequest
     *
     * @return InstallAgentResponse InstallAgentResponse
     */
    public function installAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 给集群安装组件
     *  *
     * @param InstallAgentForClusterRequest $request InstallAgentForClusterRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallAgentForClusterResponse InstallAgentForClusterResponse
     */
    public function installAgentForClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['agent_id'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentVersion)) {
            $body['agent_version'] = $request->agentVersion;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configId)) {
            $body['config_id'] = $request->configId;
        }
        if (!Utils::isUnset($request->grayscaleConfig)) {
            $body['grayscale_config'] = $request->grayscaleConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InstallAgentForCluster',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/install_agent_by_cluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallAgentForClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 给集群安装组件
     *  *
     * @param InstallAgentForClusterRequest $request InstallAgentForClusterRequest
     *
     * @return InstallAgentForClusterResponse InstallAgentForClusterResponse
     */
    public function installAgentForCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installAgentForClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 异常项诊断跳转
     *  *
     * @param InvokeAnomalyDiagnosisRequest $request InvokeAnomalyDiagnosisRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return InvokeAnomalyDiagnosisResponse InvokeAnomalyDiagnosisResponse
     */
    public function invokeAnomalyDiagnosisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uuid)) {
            $query['uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'InvokeAnomalyDiagnosis',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/diagnosis/invoke_anomaly_diagnose',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvokeAnomalyDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 异常项诊断跳转
     *  *
     * @param InvokeAnomalyDiagnosisRequest $request InvokeAnomalyDiagnosisRequest
     *
     * @return InvokeAnomalyDiagnosisResponse InvokeAnomalyDiagnosisResponse
     */
    public function invokeAnomalyDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokeAnomalyDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发起诊断
     *  *
     * @param InvokeDiagnosisRequest $request InvokeDiagnosisRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return InvokeDiagnosisResponse InvokeDiagnosisResponse
     */
    public function invokeDiagnosisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channel)) {
            $body['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['service_name'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvokeDiagnosis',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/diagnosis/invoke_diagnosis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvokeDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发起诊断
     *  *
     * @param InvokeDiagnosisRequest $request InvokeDiagnosisRequest
     *
     * @return InvokeDiagnosisResponse InvokeDiagnosisResponse
     */
    public function invokeDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokeDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取一定时间段内的异常事件
     *  *
     * @param ListAbnormalyEventsRequest $request ListAbnormalyEventsRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAbnormalyEventsResponse ListAbnormalyEventsResponse
     */
    public function listAbnormalyEventsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->event)) {
            $query['event'] = $request->event;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->level)) {
            $query['level'] = $request->level;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pod)) {
            $query['pod'] = $request->pod;
        }
        if (!Utils::isUnset($request->showPod)) {
            $query['showPod'] = $request->showPod;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAbnormalyEvents',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/range/abnormaly_events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAbnormalyEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一定时间段内的异常事件
     *  *
     * @param ListAbnormalyEventsRequest $request ListAbnormalyEventsRequest
     *
     * @return ListAbnormalyEventsResponse ListAbnormalyEventsResponse
     */
    public function listAbnormalyEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAbnormalyEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列出 Agent 的安装记录
     *  *
     * @param ListAgentInstallRecordsRequest $request ListAgentInstallRecordsRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAgentInstallRecordsResponse ListAgentInstallRecordsResponse
     */
    public function listAgentInstallRecordsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instance_id'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['plugin_id'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->pluginVersion)) {
            $query['plugin_version'] = $request->pluginVersion;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentInstallRecords',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/list_agent_install_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentInstallRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出 Agent 的安装记录
     *  *
     * @param ListAgentInstallRecordsRequest $request ListAgentInstallRecordsRequest
     *
     * @return ListAgentInstallRecordsResponse ListAgentInstallRecordsResponse
     */
    public function listAgentInstallRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentInstallRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取 Agent 列表
     *  *
     * @param ListAgentsRequest $request ListAgentsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAgentsResponse ListAgentsResponse
     */
    public function listAgentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgents',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/list_agents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取 Agent 列表
     *  *
     * @param ListAgentsRequest $request ListAgentsRequest
     *
     * @return ListAgentsResponse ListAgentsResponse
     */
    public function listAgents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取集群组件安装记录
     *  *
     * @param ListClusterAgentInstallRecordsRequest $request ListClusterAgentInstallRecordsRequest
     * @param string[]                              $headers map
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterAgentInstallRecordsResponse ListClusterAgentInstallRecordsResponse
     */
    public function listClusterAgentInstallRecordsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentConfigId)) {
            $query['agent_config_id'] = $request->agentConfigId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['plugin_id'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->pluginVersion)) {
            $query['plugin_version'] = $request->pluginVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterAgentInstallRecords',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/list_cluster_agent_install_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClusterAgentInstallRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群组件安装记录
     *  *
     * @param ListClusterAgentInstallRecordsRequest $request ListClusterAgentInstallRecordsRequest
     *
     * @return ListClusterAgentInstallRecordsResponse ListClusterAgentInstallRecordsResponse
     */
    public function listClusterAgentInstallRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterAgentInstallRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取当前用户的所有集群
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClustersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterStatus)) {
            $query['cluster_status'] = $request->clusterStatus;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['cluster_type'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusters',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/cluster/list_clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前用户的所有集群
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取诊断历史记录列表
     *  *
     * @param ListDiagnosisRequest $request ListDiagnosisRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDiagnosisResponse ListDiagnosisResponse
     */
    public function listDiagnosisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->params)) {
            $query['params'] = $request->params;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['service_name'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDiagnosis',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/diagnosis/list_diagnosis',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取诊断历史记录列表
     *  *
     * @param ListDiagnosisRequest $request ListDiagnosisRequest
     *
     * @return ListDiagnosisResponse ListDiagnosisResponse
     */
    public function listDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnosisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取一定时间内集群节点/Pod健康度列表
     *  *
     * @param ListInstanceHealthRequest $request ListInstanceHealthRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceHealthResponse ListInstanceHealthResponse
     */
    public function listInstanceHealthWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cluster)) {
            $query['cluster'] = $request->cluster;
        }
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceHealth',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/cluster_health/range/instance_health_list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceHealthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一定时间内集群节点/Pod健康度列表
     *  *
     * @param ListInstanceHealthRequest $request ListInstanceHealthRequest
     *
     * @return ListInstanceHealthResponse ListInstanceHealthResponse
     */
    public function listInstanceHealth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceHealthWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实例状态
     *  *
     * @param ListInstanceStatusRequest $request ListInstanceStatusRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceStatusResponse ListInstanceStatusResponse
     */
    public function listInstanceStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceStatus',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/instance/list_instance_status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例状态
     *  *
     * @param ListInstanceStatusRequest $request ListInstanceStatusRequest
     *
     * @return ListInstanceStatusResponse ListInstanceStatusResponse
     */
    public function listInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实例列表
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/instance/list_instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例列表
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取ecs信息的列表，如标签列表，公网ip列表等
     *  *
     * @param ListInstancesEcsInfoListRequest $request ListInstancesEcsInfoListRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesEcsInfoListResponse ListInstancesEcsInfoListResponse
     */
    public function listInstancesEcsInfoListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->infoType)) {
            $query['info_type'] = $request->infoType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instance_id'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->managedType)) {
            $query['managed_type'] = $request->managedType;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['plugin_id'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstancesEcsInfoList',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/instance/listInstancesEcsInfoList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesEcsInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取ecs信息的列表，如标签列表，公网ip列表等
     *  *
     * @param ListInstancesEcsInfoListRequest $request ListInstancesEcsInfoListRequest
     *
     * @return ListInstancesEcsInfoListResponse ListInstancesEcsInfoListResponse
     */
    public function listInstancesEcsInfoList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesEcsInfoListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取已纳管/未纳管实例信息，信息中包含ECS信息
     *  *
     * @param ListInstancesWithEcsInfoRequest $tmpReq  ListInstancesWithEcsInfoRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesWithEcsInfoResponse ListInstancesWithEcsInfoResponse
     */
    public function listInstancesWithEcsInfoWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInstancesWithEcsInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceTag)) {
            $request->instanceTagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceTag, 'instance_tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->healthStatus)) {
            $query['health_status'] = $request->healthStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instance_id'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceIdName)) {
            $query['instance_id_name'] = $request->instanceIdName;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['instance_name'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceTagShrink)) {
            $query['instance_tag'] = $request->instanceTagShrink;
        }
        if (!Utils::isUnset($request->isManaged)) {
            $query['is_managed'] = $request->isManaged;
        }
        if (!Utils::isUnset($request->osName)) {
            $query['os_name'] = $request->osName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->privateIp)) {
            $query['private_ip'] = $request->privateIp;
        }
        if (!Utils::isUnset($request->publicIp)) {
            $query['public_ip'] = $request->publicIp;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resource_group_id'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceGroupIdName)) {
            $query['resource_group_id_name'] = $request->resourceGroupIdName;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['resource_group_name'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstancesWithEcsInfo',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/instance/listInstancesWithEcsInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesWithEcsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取已纳管/未纳管实例信息，信息中包含ECS信息
     *  *
     * @param ListInstancesWithEcsInfoRequest $request ListInstancesWithEcsInfoRequest
     *
     * @return ListInstancesWithEcsInfoResponse ListInstancesWithEcsInfoResponse
     */
    public function listInstancesWithEcsInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithEcsInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取插件的安装/更新/卸载实例列表
     *  *
     * @param ListPluginsInstancesRequest $request ListPluginsInstancesRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPluginsInstancesResponse ListPluginsInstancesResponse
     */
    public function listPluginsInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->instanceIdName)) {
            $query['instance_id_name'] = $request->instanceIdName;
        }
        if (!Utils::isUnset($request->instanceTag)) {
            $query['instance_tag'] = $request->instanceTag;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['operation_type'] = $request->operationType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['plugin_id'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPluginsInstances',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/listPluginsInstances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取插件的安装/更新/卸载实例列表
     *  *
     * @param ListPluginsInstancesRequest $request ListPluginsInstancesRequest
     *
     * @return ListPluginsInstancesResponse ListPluginsInstancesResponse
     */
    public function listPluginsInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginsInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实例中的pod列表
     *  *
     * @param ListPodsOfInstanceRequest $request ListPodsOfInstanceRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPodsOfInstanceResponse ListPodsOfInstanceResponse
     */
    public function listPodsOfInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['cluster_id'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->current)) {
            $query['current'] = $request->current;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPodsOfInstance',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/instance/list_pod_of_instance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPodsOfInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例中的pod列表
     *  *
     * @param ListPodsOfInstanceRequest $request ListPodsOfInstanceRequest
     *
     * @return ListPodsOfInstanceResponse ListPodsOfInstanceResponse
     */
    public function listPodsOfInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPodsOfInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列出所有纳管了机器的区域
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/instance/list_regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出所有纳管了机器的区域
     *  *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegionsWithOptions($headers, $runtime);
    }

    /**
     * @summary 启动AI作业分析
     *  *
     * @param StartAIAnalysisRequest $request StartAIAnalysisRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAIAnalysisResponse StartAIAnalysisResponse
     */
    public function startAIAnalysisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->analysisTool)) {
            $body['analysisTool'] = $request->analysisTool;
        }
        if (!Utils::isUnset($request->analysisParams)) {
            $body['analysis_params'] = $request->analysisParams;
        }
        if (!Utils::isUnset($request->channel)) {
            $body['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->comms)) {
            $body['comms'] = $request->comms;
        }
        if (!Utils::isUnset($request->createdBy)) {
            $body['created_by'] = $request->createdBy;
        }
        if (!Utils::isUnset($request->instance)) {
            $body['instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['instance_type'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->iterationFunc)) {
            $body['iteration_func'] = $request->iterationFunc;
        }
        if (!Utils::isUnset($request->iterationMod)) {
            $body['iteration_mod'] = $request->iterationMod;
        }
        if (!Utils::isUnset($request->iterationRange)) {
            $body['iteration_range'] = $request->iterationRange;
        }
        if (!Utils::isUnset($request->pids)) {
            $body['pids'] = $request->pids;
        }
        if (!Utils::isUnset($request->region)) {
            $body['region'] = $request->region;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->uid)) {
            $body['uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartAIAnalysis',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/proxy/post/start_ai_analysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartAIAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动AI作业分析
     *  *
     * @param StartAIAnalysisRequest $request StartAIAnalysisRequest
     *
     * @return StartAIAnalysisResponse StartAIAnalysisResponse
     */
    public function startAIAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAIAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查看AI Infra差分分析结果
     *  *
     * @param StartAIDiffAnalysisRequest $request StartAIDiffAnalysisRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAIDiffAnalysisResponse StartAIDiffAnalysisResponse
     */
    public function startAIDiffAnalysisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->task1)) {
            $body['task1'] = $request->task1;
        }
        if (!Utils::isUnset($request->task2)) {
            $body['task2'] = $request->task2;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartAIDiffAnalysis',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/appObserv/aiAnalysis/diffAnalysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartAIDiffAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看AI Infra差分分析结果
     *  *
     * @param StartAIDiffAnalysisRequest $request StartAIDiffAnalysisRequest
     *
     * @return StartAIDiffAnalysisResponse StartAIDiffAnalysisResponse
     */
    public function startAIDiffAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAIDiffAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 卸载 SysOM Agent
     *  *
     * @param UninstallAgentRequest $request UninstallAgentRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallAgentResponse UninstallAgentResponse
     */
    public function uninstallAgentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['agent_id'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentVersion)) {
            $body['agent_version'] = $request->agentVersion;
        }
        if (!Utils::isUnset($request->instances)) {
            $body['instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UninstallAgent',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/uninstall_agent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UninstallAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 卸载 SysOM Agent
     *  *
     * @param UninstallAgentRequest $request UninstallAgentRequest
     *
     * @return UninstallAgentResponse UninstallAgentResponse
     */
    public function uninstallAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 给集群卸载组件
     *  *
     * @param UninstallAgentForClusterRequest $request UninstallAgentForClusterRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallAgentForClusterResponse UninstallAgentForClusterResponse
     */
    public function uninstallAgentForClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['agent_id'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentVersion)) {
            $body['agent_version'] = $request->agentVersion;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['cluster_id'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UninstallAgentForCluster',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/uninstall_agent_by_cluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UninstallAgentForClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 给集群卸载组件
     *  *
     * @param UninstallAgentForClusterRequest $request UninstallAgentForClusterRequest
     *
     * @return UninstallAgentForClusterResponse UninstallAgentForClusterResponse
     */
    public function uninstallAgentForCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallAgentForClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 异常项关注度更新
     *  *
     * @param UpdateEventsAttentionRequest $request UpdateEventsAttentionRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEventsAttentionResponse UpdateEventsAttentionResponse
     */
    public function updateEventsAttentionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mode)) {
            $body['mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->range)) {
            $body['range'] = $request->range;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateEventsAttention',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/proxy/post/cluster_update_events_attention',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEventsAttentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 异常项关注度更新
     *  *
     * @param UpdateEventsAttentionRequest $request UpdateEventsAttentionRequest
     *
     * @return UpdateEventsAttentionResponse UpdateEventsAttentionResponse
     */
    public function updateEventsAttention($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEventsAttentionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取功能模块配置
     *  *
     * @param UpdateFuncSwitchRecordRequest $tmpReq  UpdateFuncSwitchRecordRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFuncSwitchRecordResponse UpdateFuncSwitchRecordResponse
     */
    public function updateFuncSwitchRecordWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateFuncSwitchRecordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->params)) {
            $request->paramsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->params, 'params', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->paramsShrink)) {
            $query['params'] = $request->paramsShrink;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['service_name'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFuncSwitchRecord',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/func-switch/update-service-func-switch',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFuncSwitchRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取功能模块配置
     *  *
     * @param UpdateFuncSwitchRecordRequest $request UpdateFuncSwitchRecordRequest
     *
     * @return UpdateFuncSwitchRecordResponse UpdateFuncSwitchRecordResponse
     */
    public function updateFuncSwitchRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFuncSwitchRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新 SysOM Agent
     *  *
     * @param UpgradeAgentRequest $request UpgradeAgentRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeAgentResponse UpgradeAgentResponse
     */
    public function upgradeAgentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['agent_id'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentVersion)) {
            $body['agent_version'] = $request->agentVersion;
        }
        if (!Utils::isUnset($request->instances)) {
            $body['instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpgradeAgent',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/upgrade_agent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新 SysOM Agent
     *  *
     * @param UpgradeAgentRequest $request UpgradeAgentRequest
     *
     * @return UpgradeAgentResponse UpgradeAgentResponse
     */
    public function upgradeAgent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeAgentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 给集群更新组件
     *  *
     * @param UpgradeAgentForClusterRequest $request UpgradeAgentForClusterRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeAgentForClusterResponse UpgradeAgentForClusterResponse
     */
    public function upgradeAgentForClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['agent_id'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentVersion)) {
            $body['agent_version'] = $request->agentVersion;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['cluster_id'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpgradeAgentForCluster',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/agent/upgrade_agent_by_cluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeAgentForClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 给集群更新组件
     *  *
     * @param UpgradeAgentForClusterRequest $request UpgradeAgentForClusterRequest
     *
     * @return UpgradeAgentForClusterResponse UpgradeAgentForClusterResponse
     */
    public function upgradeAgentForCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeAgentForClusterWithOptions($request, $headers, $runtime);
    }
}
