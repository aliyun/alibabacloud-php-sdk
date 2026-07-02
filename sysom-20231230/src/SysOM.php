<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\AuthDiagnosisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CheckInstanceSupportRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CheckInstanceSupportResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CpuHighAgentStreamResponseRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CpuHighAgentStreamResponseResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateAlertDestinationRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateAlertDestinationResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateAlertStrategyRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateAlertStrategyResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateClusterVpcEndpointConnectionRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateClusterVpcEndpointConnectionResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateInstanceInspectionRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateInstanceInspectionResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateVmcoreDiagnosisTaskRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateVmcoreDiagnosisTaskResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\DeleteAlertDestinationRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\DeleteAlertDestinationResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\DeleteAlertStrategyRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\DeleteAlertStrategyResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\DescribeMetricListRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\DescribeMetricListResponse;
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
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAlertDestinationRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAlertDestinationResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAlertStrategyRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAlertStrategyResponse;
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
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetInspectionReportRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetInspectionReportResponse;
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
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetVmcoreDiagnosisTaskRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetVmcoreDiagnosisTaskResponse;
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
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAlertDestinationsRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAlertDestinationsResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAlertItemsResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAlertStrategiesRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAlertStrategiesResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAllInstancesRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAllInstancesResponse;
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
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListVmcoreDiagnosisTaskRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListVmcoreDiagnosisTaskResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIAnalysisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIAnalysisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIDiffAnalysisRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIDiffAnalysisResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentForClusterRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentForClusterResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UninstallAgentResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateAlertDestinationRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateAlertDestinationResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateAlertEnabledRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateAlertEnabledResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateAlertStrategyRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateAlertStrategyResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateEventsAttentionRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateEventsAttentionResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordRequest;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordResponse;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordShrinkRequest;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'sysom.cn-hangzhou.aliyuncs.com',
        ];
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
     * Authorizes SysOM to diagnose ECS instances under the current account. You must call this operation to authorize diagnostics for a specific ECS instance before you can call the InvokeDiagnosis operation to initiate diagnostics on it.
     *
     * @remarks
     * >Notice: The diagnostics feature requires a service-linked role to be created under the Resource Access Management (RAM) user. This operation automatically checks whether the service-linked role exists and creates it if it does not. The RAM user that invokes this operation must have the ram:CreateServiceLinkedRole permission.</notice>
     * Note the following when you invoke this operation to authorize SysOM to diagnose ECS instances:
     * - Each authorization is valid for 7 days. After the authorization expires, invoke this operation again to re-authorize.
     * - If the SysOM service-linked role (AliyunServiceRoleForSysom) does not exist when you invoke this operation, automatic creation is performed. The RAM user that invokes this operation must have the `ram:CreateServiceLinkedRole` permission.
     * - When you invoke this operation to authorize diagnostics for a specific instance, the label `sysom:diagnosis` is automatically associated with the target ECS instance. SysOM only allows diagnostics on instances that have this label.
     *
     * @param request - AuthDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Authorizes SysOM to diagnose ECS instances under the current account. You must call this operation to authorize diagnostics for a specific ECS instance before you can call the InvokeDiagnosis operation to initiate diagnostics on it.
     *
     * @remarks
     * >Notice: The diagnostics feature requires a service-linked role to be created under the Resource Access Management (RAM) user. This operation automatically checks whether the service-linked role exists and creates it if it does not. The RAM user that invokes this operation must have the ram:CreateServiceLinkedRole permission.</notice>
     * Note the following when you invoke this operation to authorize SysOM to diagnose ECS instances:
     * - Each authorization is valid for 7 days. After the authorization expires, invoke this operation again to re-authorize.
     * - If the SysOM service-linked role (AliyunServiceRoleForSysom) does not exist when you invoke this operation, automatic creation is performed. The RAM user that invokes this operation must have the `ram:CreateServiceLinkedRole` permission.
     * - When you invoke this operation to authorize diagnostics for a specific instance, the label `sysom:diagnosis` is automatically associated with the target ECS instance. SysOM only allows diagnostics on instances that have this label.
     *
     * @param request - AuthDiagnosisRequest
     *
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
     * Checks whether a target instance is supported by SysOM.
     *
     * @remarks
     * This operation retrieves the list of instances that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - CheckInstanceSupportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckInstanceSupportResponse
     *
     * @param CheckInstanceSupportRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CheckInstanceSupportResponse
     */
    public function checkInstanceSupportWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        if (null !== $request->region) {
            @$body['region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * Checks whether a target instance is supported by SysOM.
     *
     * @remarks
     * This operation retrieves the list of instances that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - CheckInstanceSupportRequest
     *
     * @returns CheckInstanceSupportResponse
     *
     * @param CheckInstanceSupportRequest $request
     *
     * @return CheckInstanceSupportResponse
     */
    public function checkInstanceSupport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInstanceSupportWithOptions($request, $headers, $runtime);
    }

    /**
     * Calls the CPU High Agent streaming SSE interface.
     *
     * @param request - CpuHighAgentStreamResponseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CpuHighAgentStreamResponseResponse
     *
     * @param CpuHighAgentStreamResponseRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CpuHighAgentStreamResponseResponse
     */
    public function cpuHighAgentStreamResponseWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->llmParamString) {
            @$body['llmParamString'] = $request->llmParamString;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CpuHighAgentStreamResponse',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/highCpuAgent/streamResponse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield CpuHighAgentStreamResponseResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Calls the CPU High Agent streaming SSE interface.
     *
     * @param request - CpuHighAgentStreamResponseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CpuHighAgentStreamResponseResponse
     *
     * @param CpuHighAgentStreamResponseRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CpuHighAgentStreamResponseResponse
     */
    public function cpuHighAgentStreamResponseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->llmParamString) {
            @$body['llmParamString'] = $request->llmParamString;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CpuHighAgentStreamResponse',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/highCpuAgent/streamResponse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CpuHighAgentStreamResponseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the CPU High Agent streaming SSE interface.
     *
     * @param request - CpuHighAgentStreamResponseRequest
     *
     * @returns CpuHighAgentStreamResponseResponse
     *
     * @param CpuHighAgentStreamResponseRequest $request
     *
     * @return CpuHighAgentStreamResponseResponse
     */
    public function cpuHighAgentStreamResponse($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cpuHighAgentStreamResponseWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a contact for alert notifications.
     *
     * @param request - CreateAlertDestinationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAlertDestinationResponse
     *
     * @param CreateAlertDestinationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAlertDestinationResponse
     */
    public function createAlertDestinationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->target) {
            @$body['target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAlertDestination',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/createDestination',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAlertDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a contact for alert notifications.
     *
     * @param request - CreateAlertDestinationRequest
     *
     * @returns CreateAlertDestinationResponse
     *
     * @param CreateAlertDestinationRequest $request
     *
     * @return CreateAlertDestinationResponse
     */
    public function createAlertDestination($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlertDestinationWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an alert push strategy.
     *
     * @param request - CreateAlertStrategyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAlertStrategyResponse
     *
     * @param CreateAlertStrategyRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAlertStrategyResponse
     */
    public function createAlertStrategyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->k8sLabel) {
            @$body['k8sLabel'] = $request->k8sLabel;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAlertStrategy',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/createStrategy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAlertStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an alert push strategy.
     *
     * @param request - CreateAlertStrategyRequest
     *
     * @returns CreateAlertStrategyResponse
     *
     * @param CreateAlertStrategyRequest $request
     *
     * @return CreateAlertStrategyResponse
     */
    public function createAlertStrategy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlertStrategyWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建集群Vpc端点连接.
     *
     * @remarks
     * - 需配合aliyun-tea-openapi-inner包的call_sseapi接口使用
     * - 需要按通用LLM服务输入参数填充参数，转为string后赋给llmParamString
     * - 返回数据需将string转为dict后使用，参考通用LLM服务返回格式
     *
     * @param request - CreateClusterVpcEndpointConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterVpcEndpointConnectionResponse
     *
     * @param CreateClusterVpcEndpointConnectionRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateClusterVpcEndpointConnectionResponse
     */
    public function createClusterVpcEndpointConnectionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['clusterId'] = $request->clusterId;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->region) {
            @$body['region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateClusterVpcEndpointConnection',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/k8sProxy/access/createClusterVpcEndpointConnection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateClusterVpcEndpointConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建集群Vpc端点连接.
     *
     * @remarks
     * - 需配合aliyun-tea-openapi-inner包的call_sseapi接口使用
     * - 需要按通用LLM服务输入参数填充参数，转为string后赋给llmParamString
     * - 返回数据需将string转为dict后使用，参考通用LLM服务返回格式
     *
     * @param request - CreateClusterVpcEndpointConnectionRequest
     *
     * @returns CreateClusterVpcEndpointConnectionResponse
     *
     * @param CreateClusterVpcEndpointConnectionRequest $request
     *
     * @return CreateClusterVpcEndpointConnectionResponse
     */
    public function createClusterVpcEndpointConnection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterVpcEndpointConnectionWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a SysOM instance inspection.
     *
     * @param request - CreateInstanceInspectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceInspectionResponse
     *
     * @param CreateInstanceInspectionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateInstanceInspectionResponse
     */
    public function createInstanceInspectionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instance) {
            @$body['instance'] = $request->instance;
        }

        if (null !== $request->items) {
            @$body['items'] = $request->items;
        }

        if (null !== $request->metricSource) {
            @$body['metricSource'] = $request->metricSource;
        }

        if (null !== $request->region) {
            @$body['region'] = $request->region;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceInspection',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/inspection/createInstanceInspection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a SysOM instance inspection.
     *
     * @param request - CreateInstanceInspectionRequest
     *
     * @returns CreateInstanceInspectionResponse
     *
     * @param CreateInstanceInspectionRequest $request
     *
     * @return CreateInstanceInspectionResponse
     */
    public function createInstanceInspection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceInspectionWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an intelligent breakdown diagnostic node that diagnoses the specified vmcore or dmesg log file based on the input parameters.
     *
     * @param request - CreateVmcoreDiagnosisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVmcoreDiagnosisTaskResponse
     *
     * @param CreateVmcoreDiagnosisTaskRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateVmcoreDiagnosisTaskResponse
     */
    public function createVmcoreDiagnosisTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->debuginfoCommonUrl) {
            @$body['debuginfoCommonUrl'] = $request->debuginfoCommonUrl;
        }

        if (null !== $request->debuginfoUrl) {
            @$body['debuginfoUrl'] = $request->debuginfoUrl;
        }

        if (null !== $request->dmesgUrl) {
            @$body['dmesgUrl'] = $request->dmesgUrl;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        if (null !== $request->vmcoreUrl) {
            @$body['vmcoreUrl'] = $request->vmcoreUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVmcoreDiagnosisTask',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crashAgent/diagnosis/createDiagnosisTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVmcoreDiagnosisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an intelligent breakdown diagnostic node that diagnoses the specified vmcore or dmesg log file based on the input parameters.
     *
     * @param request - CreateVmcoreDiagnosisTaskRequest
     *
     * @returns CreateVmcoreDiagnosisTaskResponse
     *
     * @param CreateVmcoreDiagnosisTaskRequest $request
     *
     * @return CreateVmcoreDiagnosisTaskResponse
     */
    public function createVmcoreDiagnosisTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVmcoreDiagnosisTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an alert contact.
     *
     * @param request - DeleteAlertDestinationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlertDestinationResponse
     *
     * @param DeleteAlertDestinationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAlertDestinationResponse
     */
    public function deleteAlertDestinationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAlertDestination',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/deleteDestination',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAlertDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an alert contact.
     *
     * @param request - DeleteAlertDestinationRequest
     *
     * @returns DeleteAlertDestinationResponse
     *
     * @param DeleteAlertDestinationRequest $request
     *
     * @return DeleteAlertDestinationResponse
     */
    public function deleteAlertDestination($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertDestinationWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an alert policy for push notifications.
     *
     * @param request - DeleteAlertStrategyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlertStrategyResponse
     *
     * @param DeleteAlertStrategyRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAlertStrategyResponse
     */
    public function deleteAlertStrategyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAlertStrategy',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/deleteStrategy',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAlertStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an alert policy for push notifications.
     *
     * @param request - DeleteAlertStrategyRequest
     *
     * @returns DeleteAlertStrategyResponse
     *
     * @param DeleteAlertStrategyRequest $request
     *
     * @return DeleteAlertStrategyResponse
     */
    public function deleteAlertStrategy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertStrategyWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries metric data.
     *
     * @remarks
     * The instance list returned by this operation contains only instances that are managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - DescribeMetricListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricListResponse
     *
     * @param DescribeMetricListRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->instance) {
            @$query['instance'] = $request->instance;
        }

        if (null !== $request->metricName) {
            @$query['metricName'] = $request->metricName;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricList',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/openapi/proxy/get/describeMetricList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries metric data.
     *
     * @remarks
     * The instance list returned by this operation contains only instances that are managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - DescribeMetricListRequest
     *
     * @returns DescribeMetricListResponse
     *
     * @param DescribeMetricListRequest $request
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeMetricListWithOptions($request, $headers, $runtime);
    }

    /**
     * Get the response result of the copilot service.
     *
     * @remarks
     * - Parameters need to be filled in according to the standard LLM service input parameters, converted to a string, and assigned to llmParamString
     * - The returned data needs to be converted from string to dict before use. Refer to the standard LLM service response format
     *
     * @param request - GenerateCopilotResponseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Get the response result of the copilot service.
     *
     * @remarks
     * - Parameters need to be filled in according to the standard LLM service input parameters, converted to a string, and assigned to llmParamString
     * - The returned data needs to be converted from string to dict before use. Refer to the standard LLM service response format
     *
     * @param request - GenerateCopilotResponseRequest
     *
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
     * Calls the streaming SSE endpoint of the OS Copilot service.
     *
     * @remarks
     * - Use this operation together with the call_sseapi operation in the aliyun-tea-openapi-inner package.
     * - Populate the parameters based on the standard LLM service input parameters, convert them to a string, and assign the string to llmParamString.
     * - Convert the returned string to a dictionary before use. Refer to the standard LLM service response format.
     *
     * @param request - GenerateCopilotStreamResponseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateCopilotStreamResponseResponse
     *
     * @param GenerateCopilotStreamResponseRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GenerateCopilotStreamResponseResponse
     */
    public function generateCopilotStreamResponseWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->llmParamString) {
            @$body['llmParamString'] = $request->llmParamString;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield GenerateCopilotStreamResponseResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Calls the streaming SSE endpoint of the OS Copilot service.
     *
     * @remarks
     * - Use this operation together with the call_sseapi operation in the aliyun-tea-openapi-inner package.
     * - Populate the parameters based on the standard LLM service input parameters, convert them to a string, and assign the string to llmParamString.
     * - Convert the returned string to a dictionary before use. Refer to the standard LLM service response format.
     *
     * @param request - GenerateCopilotStreamResponseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Calls the streaming SSE endpoint of the OS Copilot service.
     *
     * @remarks
     * - Use this operation together with the call_sseapi operation in the aliyun-tea-openapi-inner package.
     * - Populate the parameters based on the standard LLM service input parameters, convert them to a string, and assign the string to llmParamString.
     * - Convert the returned string to a dictionary before use. Refer to the standard LLM service response format.
     *
     * @param request - GenerateCopilotStreamResponseRequest
     *
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
     * Queries the AI Infra analysis results.
     *
     * @param request - GetAIQueryResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Queries the AI Infra analysis results.
     *
     * @param request - GetAIQueryResultRequest
     *
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
     * Get the count of unhandled (undiagnosed) abnormal events of different levels for nodes/Pods.
     *
     * @param request - GetAbnormalEventsCountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->level) {
            @$query['level'] = $request->level;
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
            'query' => Utils::query($query),
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
     * Get the count of unhandled (undiagnosed) abnormal events of different levels for nodes/Pods.
     *
     * @param request - GetAbnormalEventsCountRequest
     *
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
     * Get details of a specific agent.
     *
     * @param request - GetAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Get details of a specific agent.
     *
     * @param request - GetAgentRequest
     *
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
     * Retrieves the execution status of an Agent installation task.
     *
     * @param request - GetAgentTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves the execution status of an Agent installation task.
     *
     * @param request - GetAgentTaskRequest
     *
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
     * Retrieves the information of a specified alert contact.
     *
     * @param request - GetAlertDestinationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlertDestinationResponse
     *
     * @param GetAlertDestinationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetAlertDestinationResponse
     */
    public function getAlertDestinationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlertDestination',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/getDestination',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlertDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the information of a specified alert contact.
     *
     * @param request - GetAlertDestinationRequest
     *
     * @returns GetAlertDestinationResponse
     *
     * @param GetAlertDestinationRequest $request
     *
     * @return GetAlertDestinationResponse
     */
    public function getAlertDestination($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlertDestinationWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves an alert for a user based on the policy ID.
     *
     * @param request - GetAlertStrategyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlertStrategyResponse
     *
     * @param GetAlertStrategyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAlertStrategyResponse
     */
    public function getAlertStrategyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlertStrategy',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/getStrategy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlertStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves an alert for a user based on the policy ID.
     *
     * @param request - GetAlertStrategyRequest
     *
     * @returns GetAlertStrategyResponse
     *
     * @param GetAlertStrategyRequest $request
     *
     * @return GetAlertStrategyResponse
     */
    public function getAlertStrategy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlertStrategyWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the chat history of Copilot.
     *
     * @param request - GetCopilotHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Retrieves the chat history of Copilot.
     *
     * @param request - GetCopilotHistoryRequest
     *
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
     * Retrieves the diagnostic result.
     *
     * @remarks
     * The diagnostic process is asynchronous. When you call this operation, the diagnosis may still be in progress. You can check the `data.status` field in the response to determine the status. When `data.status == Success`, the diagnosis is complete and you can read the diagnostic result from `data.result`.
     *
     * @param request - GetDiagnosisResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves the diagnostic result.
     *
     * @remarks
     * The diagnostic process is asynchronous. When you call this operation, the diagnosis may still be in progress. You can check the `data.status` field in the response to determine the status. When `data.status == Success`, the diagnosis is complete and you can read the diagnostic result from `data.result`.
     *
     * @param request - GetDiagnosisResultRequest
     *
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
     * Retrieves the health status distribution of nodes or pods over a specified time period.
     *
     * @param request - GetHealthPercentageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves the health status distribution of nodes or pods over a specified time period.
     *
     * @param request - GetHealthPercentageRequest
     *
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
     * Retrieves the number of nodes or the number of Pods on nodes in a cluster.
     *
     * @param request - GetHostCountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves the number of nodes or the number of Pods on nodes in a cluster.
     *
     * @param request - GetHostCountRequest
     *
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
     * Get the list of a specific field under an instance.
     *
     * @param request - GetHotSpotUniqListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Get the list of a specific field under an instance.
     *
     * @param request - GetHotSpotUniqListRequest
     *
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
     * Retrieves hot spot analysis results.
     *
     * @param request - GetHotspotAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Retrieves hot spot analysis results.
     *
     * @param request - GetHotspotAnalysisRequest
     *
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
     * Get Hotspot Comparison Tracing Results.
     *
     * @param request - GetHotspotCompareRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Get Hotspot Comparison Tracing Results.
     *
     * @param request - GetHotspotCompareRequest
     *
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
     * Get Hotspot Instance List.
     *
     * @param request - GetHotspotInstanceListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Get Hotspot Instance List.
     *
     * @param request - GetHotspotInstanceListRequest
     *
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
     * Retrieves the PID list of a specified instance.
     *
     * @param request - GetHotspotPidListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Retrieves the PID list of a specified instance.
     *
     * @param request - GetHotspotPidListRequest
     *
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
     * Retrieves hot spot tracking results.
     *
     * @param request - GetHotspotTrackingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Retrieves hot spot tracking results.
     *
     * @param request - GetHotspotTrackingRequest
     *
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
     * Retrieves a SysOM inspection report.
     *
     * @param request - GetInspectionReportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInspectionReportResponse
     *
     * @param GetInspectionReportRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetInspectionReportResponse
     */
    public function getInspectionReportWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['reportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInspectionReport',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/inspection/getInspectionReport',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInspectionReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a SysOM inspection report.
     *
     * @param request - GetInspectionReportRequest
     *
     * @returns GetInspectionReportResponse
     *
     * @param GetInspectionReportRequest $request
     *
     * @return GetInspectionReportResponse
     */
    public function getInspectionReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInspectionReportWithOptions($request, $headers, $runtime);
    }

    /**
     * Get real-time cluster/node health score.
     *
     * @param request - GetInstantScoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Get real-time cluster/node health score.
     *
     * @param request - GetInstantScoreRequest
     *
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
     * Retrieves a list of AI Infra analysis records.
     *
     * @param request - GetListRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        if (null !== $request->analysisId) {
            @$query['analysisId'] = $request->analysisId;
        }

        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->customId) {
            @$query['customId'] = $request->customId;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * Retrieves a list of AI Infra analysis records.
     *
     * @param request - GetListRecordRequest
     *
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
     * Get the proportion of abnormal issues in cluster nodes/pods within a specified time range.
     *
     * @param request - GetProblemPercentageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Get the proportion of abnormal issues in cluster nodes/pods within a specified time range.
     *
     * @param request - GetProblemPercentageRequest
     *
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
     * Retrieves the health score trend.
     *
     * @param request - GetRangeScoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves the health score trend.
     *
     * @param request - GetRangeScoreRequest
     *
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
     * Retrieves the real-time resource usage of a cluster or node.
     *
     * @param request - GetResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves the real-time resource usage of a cluster or node.
     *
     * @param request - GetResourcesRequest
     *
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
     * Retrieves the configuration of a feature module.
     *
     * @remarks
     * Retrieves the service configuration status.
     *
     * @param tmpReq - GetServiceFuncStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceFuncStatusResponse
     *
     * @param GetServiceFuncStatusRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceFuncStatusResponse
     */
    public function getServiceFuncStatusWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetServiceFuncStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'params', 'json');
        }

        $query = [];
        if (null !== $request->channel) {
            @$query['channel'] = $request->channel;
        }

        if (null !== $request->paramsShrink) {
            @$query['params'] = $request->paramsShrink;
        }

        if (null !== $request->serviceName) {
            @$query['service_name'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * Retrieves the configuration of a feature module.
     *
     * @remarks
     * Retrieves the service configuration status.
     *
     * @param request - GetServiceFuncStatusRequest
     *
     * @returns GetServiceFuncStatusResponse
     *
     * @param GetServiceFuncStatusRequest $request
     *
     * @return GetServiceFuncStatusResponse
     */
    public function getServiceFuncStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceFuncStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the execution status and diagnostic result of a diagnostic task by task ID.
     *
     * @param request - GetVmcoreDiagnosisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVmcoreDiagnosisTaskResponse
     *
     * @param GetVmcoreDiagnosisTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetVmcoreDiagnosisTaskResponse
     */
    public function getVmcoreDiagnosisTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVmcoreDiagnosisTask',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crashAgent/diagnosis/queryTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVmcoreDiagnosisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution status and diagnostic result of a diagnostic task by task ID.
     *
     * @param request - GetVmcoreDiagnosisTaskRequest
     *
     * @returns GetVmcoreDiagnosisTaskResponse
     *
     * @param GetVmcoreDiagnosisTaskRequest $request
     *
     * @return GetVmcoreDiagnosisTaskResponse
     */
    public function getVmcoreDiagnosisTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVmcoreDiagnosisTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Initializes SysOM to ensure that the service-linked role exists.
     *
     * @remarks
     * Some SysOM API operations require role assumption based on the `AliyunServiceRoleForSysom` service-linked role. Before using SysOM features, invoke this operation to perform initialization and ensure that the service-linked role has been created.
     * - `check_only`: If this parameter is set to True, the operation only checks whether the service-linked role exists and does not create it. If this parameter is set to False or left empty, the operation performs automatic creation of the service-linked role if it does not exist.
     * >
     * > Note: When you call this operation to initialize the role through the API, you agree to the user agreement of the operating system console by default. For more information, see [Operating system console overview](https://www.alibabacloud.com/help/en/alinux/product-overview/os-console-overview) and [Alibaba Cloud Service Trial Terms](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud202001091714_51956.html).
     *
     * @param request - InitialSysomRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * Initializes SysOM to ensure that the service-linked role exists.
     *
     * @remarks
     * Some SysOM API operations require role assumption based on the `AliyunServiceRoleForSysom` service-linked role. Before using SysOM features, invoke this operation to perform initialization and ensure that the service-linked role has been created.
     * - `check_only`: If this parameter is set to True, the operation only checks whether the service-linked role exists and does not create it. If this parameter is set to False or left empty, the operation performs automatic creation of the service-linked role if it does not exist.
     * >
     * > Note: When you call this operation to initialize the role through the API, you agree to the user agreement of the operating system console by default. For more information, see [Operating system console overview](https://www.alibabacloud.com/help/en/alinux/product-overview/os-console-overview) and [Alibaba Cloud Service Trial Terms](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud202001091714_51956.html).
     *
     * @param request - InitialSysomRequest
     *
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
     * Installs an Agent on a specified instance.
     *
     * @remarks
     * Calling this operation to install an Agent is asynchronous. After the call, a task_id is returned. You can use this ID to call the GetAgentTask operation to retrieve the task execution status.
     *
     * @param request - InstallAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Installs an Agent on a specified instance.
     *
     * @remarks
     * Calling this operation to install an Agent is asynchronous. After the call, a task_id is returned. You can use this ID to call the GetAgentTask operation to retrieve the task execution status.
     *
     * @param request - InstallAgentRequest
     *
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
     * Install component for cluster.
     *
     * @remarks
     * After installing a component for the target ACK cluster:
     * 1. First, when the cluster is managed for the first time, the component will be installed on all ECS instances currently in the cluster. If the cluster has more than 50 nodes, only 50 instances will be covered in the first batch.
     * 2. Then, the SysOM console periodically checks the scaling status of the managed cluster. Once a new ECS instance is added to the cluster, the SysOM console automatically installs the component on it without user intervention.
     *
     * @param request - InstallAgentForClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->configId) {
            @$body['config_id'] = $request->configId;
        }

        if (null !== $request->grayscaleConfig) {
            @$body['grayscale_config'] = $request->grayscaleConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * Install component for cluster.
     *
     * @remarks
     * After installing a component for the target ACK cluster:
     * 1. First, when the cluster is managed for the first time, the component will be installed on all ECS instances currently in the cluster. If the cluster has more than 50 nodes, only 50 instances will be covered in the first batch.
     * 2. Then, the SysOM console periodically checks the scaling status of the managed cluster. Once a new ECS instance is added to the cluster, the SysOM console automatically installs the component on it without user intervention.
     *
     * @param request - InstallAgentForClusterRequest
     *
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
     * Initiates an anomaly diagnostics task.
     *
     * @param request - InvokeAnomalyDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Initiates an anomaly diagnostics task.
     *
     * @param request - InvokeAnomalyDiagnosisRequest
     *
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
     * Initiate Diagnosis.
     *
     * @remarks
     * The following requirements must be met to diagnose a target ECS instance:
     * - The target ECS instance must be in the Running state.
     * - The Cloud Assistant must be installed on the target ECS instance. If it is not installed, refer to [Install the Cloud Assistant Agent](https://help.aliyun.com/zh/ecs/user-guide/install-the-cloud-assistant-agent) for installation.
     * - You must call the AuthDiagnosis API to authorize SysOM to diagnose the target ECS instance. If authorization is not granted, this API will fail directly.
     * - This API requires that the SysOM service-linked role (AliyunServiceRoleForSysom) has been created. This API does not automatically create the service role. If the service role does not exist, you must first call AuthDiagnosis for authorization, which will create the aforementioned service role.
     *
     * @param request - InvokeDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Initiate Diagnosis.
     *
     * @remarks
     * The following requirements must be met to diagnose a target ECS instance:
     * - The target ECS instance must be in the Running state.
     * - The Cloud Assistant must be installed on the target ECS instance. If it is not installed, refer to [Install the Cloud Assistant Agent](https://help.aliyun.com/zh/ecs/user-guide/install-the-cloud-assistant-agent) for installation.
     * - You must call the AuthDiagnosis API to authorize SysOM to diagnose the target ECS instance. If authorization is not granted, this API will fail directly.
     * - This API requires that the SysOM service-linked role (AliyunServiceRoleForSysom) has been created. This API does not automatically create the service role. If the service role does not exist, you must first call AuthDiagnosis for authorization, which will create the aforementioned service role.
     *
     * @param request - InvokeDiagnosisRequest
     *
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
     * Retrieves anomaly event information for a cluster, node, or pod within a specified time range.
     *
     * @param request - ListAbnormalyEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->event) {
            @$query['event'] = $request->event;
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
            'query' => Utils::query($query),
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
     * Retrieves anomaly event information for a cluster, node, or pod within a specified time range.
     *
     * @param request - ListAbnormalyEventsRequest
     *
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
     * Lists the installation records of an Agent.
     *
     * @param request - ListAgentInstallRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * Lists the installation records of an Agent.
     *
     * @param request - ListAgentInstallRecordsRequest
     *
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
     * Retrieves a list of agents.
     *
     * @param request - ListAgentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves a list of agents.
     *
     * @param request - ListAgentsRequest
     *
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
     * This API is used to get the list of alert contacts.
     *
     * @param request - ListAlertDestinationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertDestinationsResponse
     *
     * @param ListAlertDestinationsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListAlertDestinationsResponse
     */
    public function listAlertDestinationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
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

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlertDestinations',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/listDestinations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertDestinationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API is used to get the list of alert contacts.
     *
     * @param request - ListAlertDestinationsRequest
     *
     * @returns ListAlertDestinationsResponse
     *
     * @param ListAlertDestinationsRequest $request
     *
     * @return ListAlertDestinationsResponse
     */
    public function listAlertDestinations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertDestinationsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves all alert metrics.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertItemsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAlertItemsResponse
     */
    public function listAlertItemsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListAlertItems',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/listItems',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves all alert metrics.
     *
     * @returns ListAlertItemsResponse
     *
     * @return ListAlertItemsResponse
     */
    public function listAlertItems()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertItemsWithOptions($headers, $runtime);
    }

    /**
     * Retrieves all push alert policies for the current user.
     *
     * @param request - ListAlertStrategiesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertStrategiesResponse
     *
     * @param ListAlertStrategiesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListAlertStrategiesResponse
     */
    public function listAlertStrategiesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
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

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlertStrategies',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/listStrategies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves all push alert policies for the current user.
     *
     * @param request - ListAlertStrategiesRequest
     *
     * @returns ListAlertStrategiesResponse
     *
     * @param ListAlertStrategiesRequest $request
     *
     * @return ListAlertStrategiesResponse
     */
    public function listAlertStrategies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertStrategiesWithOptions($request, $headers, $runtime);
    }

    /**
     * This API is used to retrieve a list of managed/unmanaged instances along with their instance information.
     *
     * @param request - ListAllInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllInstancesResponse
     *
     * @param ListAllInstancesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListAllInstancesResponse
     */
    public function listAllInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->filters) {
            @$query['filters'] = $request->filters;
        }

        if (null !== $request->instanceType) {
            @$query['instanceType'] = $request->instanceType;
        }

        if (null !== $request->managedType) {
            @$query['managedType'] = $request->managedType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['pluginId'] = $request->pluginId;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllInstances',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/am/instance/listAllInstances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAllInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API is used to retrieve a list of managed/unmanaged instances along with their instance information.
     *
     * @param request - ListAllInstancesRequest
     *
     * @returns ListAllInstancesResponse
     *
     * @param ListAllInstancesRequest $request
     *
     * @return ListAllInstancesResponse
     */
    public function listAllInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAllInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Get cluster component installation records.
     *
     * @param request - ListClusterAgentInstallRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        if (null !== $request->agentConfigId) {
            @$query['agent_config_id'] = $request->agentConfigId;
        }

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
            'query' => Utils::query($query),
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
     * Get cluster component installation records.
     *
     * @param request - ListClusterAgentInstallRecordsRequest
     *
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
     * Retrieve all managed clusters of the current user.
     *
     * @param request - ListClustersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieve all managed clusters of the current user.
     *
     * @param request - ListClustersRequest
     *
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
     * Obtain the list of diagnostic history.
     *
     * @param request - ListDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Obtain the list of diagnostic history.
     *
     * @param request - ListDiagnosisRequest
     *
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
     * Retrieves the health status list of cluster nodes or Pods within a specified time range.
     *
     * @param request - ListInstanceHealthRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves the health status list of cluster nodes or Pods within a specified time range.
     *
     * @param request - ListInstanceHealthRequest
     *
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
     * Retrieves instance statuses.
     *
     * @remarks
     * Retrieves the list of machines managed by SysOM.
     *
     * @param request - ListInstanceStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves instance statuses.
     *
     * @remarks
     * Retrieves the list of machines managed by SysOM.
     *
     * @param request - ListInstanceStatusRequest
     *
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
     * Retrieves a list of instances.
     *
     * @remarks
     * This operation retrieves the list of instances that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves a list of instances.
     *
     * @remarks
     * This operation retrieves the list of instances that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - ListInstancesRequest
     *
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
     * Retrieves lists of ECS information for instances, such as tag lists and public IP address lists.
     *
     * @remarks
     * The instance list retrieved by this operation contains only machines that are managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - ListInstancesEcsInfoListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesEcsInfoListResponse
     *
     * @param ListInstancesEcsInfoListRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListInstancesEcsInfoListResponse
     */
    public function listInstancesEcsInfoListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->infoType) {
            @$query['info_type'] = $request->infoType;
        }

        if (null !== $request->instanceId) {
            @$query['instance_id'] = $request->instanceId;
        }

        if (null !== $request->managedType) {
            @$query['managed_type'] = $request->managedType;
        }

        if (null !== $request->pluginId) {
            @$query['plugin_id'] = $request->pluginId;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * Retrieves lists of ECS information for instances, such as tag lists and public IP address lists.
     *
     * @remarks
     * The instance list retrieved by this operation contains only machines that are managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - ListInstancesEcsInfoListRequest
     *
     * @returns ListInstancesEcsInfoListResponse
     *
     * @param ListInstancesEcsInfoListRequest $request
     *
     * @return ListInstancesEcsInfoListResponse
     */
    public function listInstancesEcsInfoList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesEcsInfoListWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves information about managed and unmanaged instances, including ECS information.
     *
     * @remarks
     * The instance list returned by this operation contains only machines that are managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param tmpReq - ListInstancesWithEcsInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesWithEcsInfoResponse
     *
     * @param ListInstancesWithEcsInfoRequest $tmpReq
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListInstancesWithEcsInfoResponse
     */
    public function listInstancesWithEcsInfoWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInstancesWithEcsInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceTag) {
            $request->instanceTagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceTag, 'instance_tag', 'json');
        }

        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->healthStatus) {
            @$query['health_status'] = $request->healthStatus;
        }

        if (null !== $request->instanceId) {
            @$query['instance_id'] = $request->instanceId;
        }

        if (null !== $request->instanceIdName) {
            @$query['instance_id_name'] = $request->instanceIdName;
        }

        if (null !== $request->instanceName) {
            @$query['instance_name'] = $request->instanceName;
        }

        if (null !== $request->instanceTagShrink) {
            @$query['instance_tag'] = $request->instanceTagShrink;
        }

        if (null !== $request->isManaged) {
            @$query['is_managed'] = $request->isManaged;
        }

        if (null !== $request->osName) {
            @$query['os_name'] = $request->osName;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->privateIp) {
            @$query['private_ip'] = $request->privateIp;
        }

        if (null !== $request->publicIp) {
            @$query['public_ip'] = $request->publicIp;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resource_group_id'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceGroupIdName) {
            @$query['resource_group_id_name'] = $request->resourceGroupIdName;
        }

        if (null !== $request->resourceGroupName) {
            @$query['resource_group_name'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * Retrieves information about managed and unmanaged instances, including ECS information.
     *
     * @remarks
     * The instance list returned by this operation contains only machines that are managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - ListInstancesWithEcsInfoRequest
     *
     * @returns ListInstancesWithEcsInfoResponse
     *
     * @param ListInstancesWithEcsInfoRequest $request
     *
     * @return ListInstancesWithEcsInfoResponse
     */
    public function listInstancesWithEcsInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithEcsInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of instances for plug-in installation, update, or uninstallation.
     *
     * @remarks
     * The instance list retrieved by this operation contains only machines that are managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - ListPluginsInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginsInstancesResponse
     *
     * @param ListPluginsInstancesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListPluginsInstancesResponse
     */
    public function listPluginsInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->current) {
            @$query['current'] = $request->current;
        }

        if (null !== $request->instanceIdName) {
            @$query['instance_id_name'] = $request->instanceIdName;
        }

        if (null !== $request->instanceTag) {
            @$query['instance_tag'] = $request->instanceTag;
        }

        if (null !== $request->operationType) {
            @$query['operation_type'] = $request->operationType;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['plugin_id'] = $request->pluginId;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * Retrieves the list of instances for plug-in installation, update, or uninstallation.
     *
     * @remarks
     * The instance list retrieved by this operation contains only machines that are managed by SysOM. If an ECS instance exists but is not managed by SysOM, it does not appear in the list.
     *
     * @param request - ListPluginsInstancesRequest
     *
     * @returns ListPluginsInstancesResponse
     *
     * @param ListPluginsInstancesRequest $request
     *
     * @return ListPluginsInstancesResponse
     */
    public function listPluginsInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginsInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of pods in a cluster or instance.
     *
     * @param request - ListPodsOfInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'query' => Utils::query($query),
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
     * Retrieves the list of pods in a cluster or instance.
     *
     * @param request - ListPodsOfInstanceRequest
     *
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
     * Lists all regions that contain managed instances.
     *
     * @remarks
     * This operation retrieves the list of regions where the current user has instances managed by SysOM. If a user has ECS instances in a region but none of them are managed by SysOM, that region is not included in the response.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
     * Lists all regions that contain managed instances.
     *
     * @remarks
     * This operation retrieves the list of regions where the current user has instances managed by SysOM. If a user has ECS instances in a region but none of them are managed by SysOM, that region is not included in the response.
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
     * Query the historical crash diagnosis task list.
     *
     * @param request - ListVmcoreDiagnosisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVmcoreDiagnosisTaskResponse
     *
     * @param ListVmcoreDiagnosisTaskRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListVmcoreDiagnosisTaskResponse
     */
    public function listVmcoreDiagnosisTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->days) {
            @$query['days'] = $request->days;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVmcoreDiagnosisTask',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/crashAgent/diagnosis/queryTaskList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListVmcoreDiagnosisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the historical crash diagnosis task list.
     *
     * @param request - ListVmcoreDiagnosisTaskRequest
     *
     * @returns ListVmcoreDiagnosisTaskResponse
     *
     * @param ListVmcoreDiagnosisTaskRequest $request
     *
     * @return ListVmcoreDiagnosisTaskResponse
     */
    public function listVmcoreDiagnosisTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVmcoreDiagnosisTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Start AI job analysis.
     *
     * @param request - StartAIAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        if (null !== $request->analysisTool) {
            @$body['analysisTool'] = $request->analysisTool;
        }

        if (null !== $request->analysisParams) {
            @$body['analysis_params'] = $request->analysisParams;
        }

        if (null !== $request->channel) {
            @$body['channel'] = $request->channel;
        }

        if (null !== $request->comms) {
            @$body['comms'] = $request->comms;
        }

        if (null !== $request->createdBy) {
            @$body['created_by'] = $request->createdBy;
        }

        if (null !== $request->instance) {
            @$body['instance'] = $request->instance;
        }

        if (null !== $request->instanceType) {
            @$body['instance_type'] = $request->instanceType;
        }

        if (null !== $request->iterationFunc) {
            @$body['iteration_func'] = $request->iterationFunc;
        }

        if (null !== $request->iterationMod) {
            @$body['iteration_mod'] = $request->iterationMod;
        }

        if (null !== $request->iterationRange) {
            @$body['iteration_range'] = $request->iterationRange;
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

        if (null !== $request->uid) {
            @$body['uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * Start AI job analysis.
     *
     * @param request - StartAIAnalysisRequest
     *
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
     * Starts an AI Infra differential analysis.
     *
     * @remarks
     * Currently, only comparative analysis of the same pid across different steps within the same AI Infra analysis record is supported.
     *
     * @param request - StartAIDiffAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAIDiffAnalysisResponse
     *
     * @param StartAIDiffAnalysisRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartAIDiffAnalysisResponse
     */
    public function startAIDiffAnalysisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->task1) {
            @$body['task1'] = $request->task1;
        }

        if (null !== $request->task2) {
            @$body['task2'] = $request->task2;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * Starts an AI Infra differential analysis.
     *
     * @remarks
     * Currently, only comparative analysis of the same pid across different steps within the same AI Infra analysis record is supported.
     *
     * @param request - StartAIDiffAnalysisRequest
     *
     * @returns StartAIDiffAnalysisResponse
     *
     * @param StartAIDiffAnalysisRequest $request
     *
     * @return StartAIDiffAnalysisResponse
     */
    public function startAIDiffAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startAIDiffAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * Uninstalls a specified version of a component.
     *
     * @remarks
     * Calling this operation to uninstall an Agent is asynchronous. After the call, a task_id is returned. Use this ID to call the GetAgentTask operation to retrieve the execution status of the task.
     *
     * @param request - UninstallAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Uninstalls a specified version of a component.
     *
     * @remarks
     * Calling this operation to uninstall an Agent is asynchronous. After the call, a task_id is returned. Use this ID to call the GetAgentTask operation to retrieve the execution status of the task.
     *
     * @param request - UninstallAgentRequest
     *
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
     * Uninstalls a component from a cluster.
     *
     * @param request - UninstallAgentForClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Uninstalls a component from a cluster.
     *
     * @param request - UninstallAgentForClusterRequest
     *
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
     * Updates an alert contact.
     *
     * @remarks
     * .
     *
     * @param request - UpdateAlertDestinationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAlertDestinationResponse
     *
     * @param UpdateAlertDestinationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAlertDestinationResponse
     */
    public function updateAlertDestinationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->target) {
            @$body['target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlertDestination',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/updateDestination',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAlertDestinationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an alert contact.
     *
     * @remarks
     * .
     *
     * @param request - UpdateAlertDestinationRequest
     *
     * @returns UpdateAlertDestinationResponse
     *
     * @param UpdateAlertDestinationRequest $request
     *
     * @return UpdateAlertDestinationResponse
     */
    public function updateAlertDestination($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertDestinationWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the status of a push alert policy.
     *
     * @param request - UpdateAlertEnabledRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAlertEnabledResponse
     *
     * @param UpdateAlertEnabledRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAlertEnabledResponse
     */
    public function updateAlertEnabledWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlertEnabled',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/updateEnabled',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAlertEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the status of a push alert policy.
     *
     * @param request - UpdateAlertEnabledRequest
     *
     * @returns UpdateAlertEnabledResponse
     *
     * @param UpdateAlertEnabledRequest $request
     *
     * @return UpdateAlertEnabledResponse
     */
    public function updateAlertEnabled($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertEnabledWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates a push alert policy.
     *
     * @param request - UpdateAlertStrategyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAlertStrategyResponse
     *
     * @param UpdateAlertStrategyRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAlertStrategyResponse
     */
    public function updateAlertStrategyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->k8sLabel) {
            @$body['k8sLabel'] = $request->k8sLabel;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->strategy) {
            @$body['strategy'] = $request->strategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlertStrategy',
            'version' => '2023-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/alertPusher/alert/updateStrategy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAlertStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a push alert policy.
     *
     * @param request - UpdateAlertStrategyRequest
     *
     * @returns UpdateAlertStrategyResponse
     *
     * @param UpdateAlertStrategyRequest $request
     *
     * @return UpdateAlertStrategyResponse
     */
    public function updateAlertStrategy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertStrategyWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the attention level of an anomaly item. Adjusting the attention level affects the sensitivity of the anomaly detection algorithm.
     *
     * @param request - UpdateEventsAttentionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEventsAttentionResponse
     *
     * @param UpdateEventsAttentionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEventsAttentionResponse
     */
    public function updateEventsAttentionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mode) {
            @$body['mode'] = $request->mode;
        }

        if (null !== $request->range) {
            @$body['range'] = $request->range;
        }

        if (null !== $request->uuid) {
            @$body['uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * Updates the attention level of an anomaly item. Adjusting the attention level affects the sensitivity of the anomaly detection algorithm.
     *
     * @param request - UpdateEventsAttentionRequest
     *
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
     * Updates the configuration of a service feature module.
     *
     * @remarks
     * - Populate parameters according to the general LLM service input parameters, convert them to a string, and assign the string to llmParamString.
     * - Convert the returned data from a string to a dict before use. Refer to the general LLM service response format.
     *
     * @param tmpReq - UpdateFuncSwitchRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFuncSwitchRecordResponse
     *
     * @param UpdateFuncSwitchRecordRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateFuncSwitchRecordResponse
     */
    public function updateFuncSwitchRecordWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateFuncSwitchRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'params', 'json');
        }

        $query = [];
        if (null !== $request->channel) {
            @$query['channel'] = $request->channel;
        }

        if (null !== $request->paramsShrink) {
            @$query['params'] = $request->paramsShrink;
        }

        if (null !== $request->serviceName) {
            @$query['service_name'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * Updates the configuration of a service feature module.
     *
     * @remarks
     * - Populate parameters according to the general LLM service input parameters, convert them to a string, and assign the string to llmParamString.
     * - Convert the returned data from a string to a dict before use. Refer to the general LLM service response format.
     *
     * @param request - UpdateFuncSwitchRecordRequest
     *
     * @returns UpdateFuncSwitchRecordResponse
     *
     * @param UpdateFuncSwitchRecordRequest $request
     *
     * @return UpdateFuncSwitchRecordResponse
     */
    public function updateFuncSwitchRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFuncSwitchRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates an installed component to a specified version.
     *
     * @remarks
     * Updating the Agent by calling this operation is asynchronous. After you call this operation, a task_id is returned. You can use this ID to call the GetAgentTask operation to query the execution status of the task.
     *
     * @param request - UpgradeAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Updates an installed component to a specified version.
     *
     * @remarks
     * Updating the Agent by calling this operation is asynchronous. After you call this operation, a task_id is returned. You can use this ID to call the GetAgentTask operation to query the execution status of the task.
     *
     * @param request - UpgradeAgentRequest
     *
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
     * Updates components for a cluster.
     *
     * @param request - UpgradeAgentForClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'body' => Utils::parseToMap($body),
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
     * Updates components for a cluster.
     *
     * @param request - UpgradeAgentForClusterRequest
     *
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
