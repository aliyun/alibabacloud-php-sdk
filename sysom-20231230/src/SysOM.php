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
     * This API is used to authorize SysOM to diagnose ECS instances under your account. You can only invoke the InvokeDiagnosis API to initiate diagnosis on a specific ECS instance after authorizing it through this API.
     *
     * @remarks
     * >Notice: The diagnosis feature requires a service-linked role to be created under a Resource Access Management (RAM) user. When you call this API, it automatically checks whether the service-linked role exists. If the role does not exist, the API automatically creates it. This requires the RAM user invoking this API to have the ram:CreateServiceLinkedRole permission.</notice>
     * When calling this API to authorize SysOM to diagnose ECS instances, note the following:
     * - Each authorization is valid for 7 days. After 7 days, the authorization expires, and you must call this API again to re-authorize.
     * - If the SysOM service-linked role (AliyunServiceRoleForSysom) does not exist when you call this API, it will be automatically created. This requires the RAM user invoking this API to have the `ram:CreateServiceLinkedRole` permission.
     * - When you authorize a specific instance through this API, the system automatically adds the label `sysom:diagnosis` to the target ECS instance. SysOM can only diagnose instances that have this label.
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
     * This API is used to authorize SysOM to diagnose ECS instances under your account. You can only invoke the InvokeDiagnosis API to initiate diagnosis on a specific ECS instance after authorizing it through this API.
     *
     * @remarks
     * >Notice: The diagnosis feature requires a service-linked role to be created under a Resource Access Management (RAM) user. When you call this API, it automatically checks whether the service-linked role exists. If the role does not exist, the API automatically creates it. This requires the RAM user invoking this API to have the ram:CreateServiceLinkedRole permission.</notice>
     * When calling this API to authorize SysOM to diagnose ECS instances, note the following:
     * - Each authorization is valid for 7 days. After 7 days, the authorization expires, and you must call this API again to re-authorize.
     * - If the SysOM service-linked role (AliyunServiceRoleForSysom) does not exist when you call this API, it will be automatically created. This requires the RAM user invoking this API to have the `ram:CreateServiceLinkedRole` permission.
     * - When you authorize a specific instance through this API, the system automatically adds the label `sysom:diagnosis` to the target ECS instance. SysOM can only diagnose instances that have this label.
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
     * Check whether the target instance is supported by SysOM.
     *
     * @remarks
     * The instance list returned by this API includes only machines that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it will not appear in the list.
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
     * Check whether the target instance is supported by SysOM.
     *
     * @remarks
     * The instance list returned by this API includes only machines that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it will not appear in the list.
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
     * High-CPU agent streaming API.
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
     * High-CPU agent streaming API.
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
     * High-CPU agent streaming API.
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
     * This API is used to create an alert contact for push notifications.
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
     * This API is used to create an alert contact for push notifications.
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
     * Create an alert policy for push notifications.
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
     * Create an alert policy for push notifications.
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
     * 创建实例巡检
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
     * 创建实例巡检
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
     * This API creates an intelligent breakdown diagnosis task to diagnose the vmcore or dmesg log file provided in the parameters.
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
     * This API creates an intelligent breakdown diagnosis task to diagnose the vmcore or dmesg log file provided in the parameters.
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
     * This API is used to delete an alert contact.
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
     * This API is used to delete an alert contact.
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
     * User deletes the alert policy for push notifications.
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
     * User deletes the alert policy for push notifications.
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
     * Query metrics.
     *
     * @remarks
     * The instance list obtained by this API includes only the machines that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it will not appear in the list.
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
     * Query metrics.
     *
     * @remarks
     * The instance list obtained by this API includes only the machines that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it will not appear in the list.
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
     * Obtain the Return Result of the copilot service.
     *
     * @remarks
     * - You must fill in the input parameters according to the standard LLM service input parameters, convert them into a string, and assign the result to llmParamString.
     * - The returned data must be converted from a string to a dict before use. Refer to the standard LLM service return format.
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
     * Obtain the Return Result of the copilot service.
     *
     * @remarks
     * - You must fill in the input parameters according to the standard LLM service input parameters, convert them into a string, and assign the result to llmParamString.
     * - The returned data must be converted from a string to a dict before use. Refer to the standard LLM service return format.
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
     * Stream Copilot service API.
     *
     * @remarks
     * - Must be used together with the call_sseapi API of the aliyun-tea-openapi-inner package.
     * - You must populate the input parameters according to the standard LLM service input parameters, convert them into a string, and assign the result to llmParamString.
     * - The returned data is a string that you must convert into a dictionary for use, following the standard LLM service response format.
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
     * Stream Copilot service API.
     *
     * @remarks
     * - Must be used together with the call_sseapi API of the aliyun-tea-openapi-inner package.
     * - You must populate the input parameters according to the standard LLM service input parameters, convert them into a string, and assign the result to llmParamString.
     * - The returned data is a string that you must convert into a dictionary for use, following the standard LLM service response format.
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
     * Stream Copilot service API.
     *
     * @remarks
     * - Must be used together with the call_sseapi API of the aliyun-tea-openapi-inner package.
     * - You must populate the input parameters according to the standard LLM service input parameters, convert them into a string, and assign the result to llmParamString.
     * - The returned data is a string that you must convert into a dictionary for use, following the standard LLM service response format.
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
     * View AI Infra Analysis Result.
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
     * View AI Infra Analysis Result.
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
     * Obtain the quantity of unprocessed (undiagnosed) anomalous activity at different Levels for edge zones/pods.
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
     * Obtain the quantity of unprocessed (undiagnosed) anomalous activity at different Levels for edge zones/pods.
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
     * Retrieve the details of a widget.
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
     * Retrieve the details of a widget.
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
     * Obtain the task execution status of Agent installation.
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
     * Obtain the task execution status of Agent installation.
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
     * This API is used to obtain the specified alert contact information.
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
     * This API is used to obtain the specified alert contact information.
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
     * Obtain an alert for a user by policy ID.
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
     * Obtain an alert for a user by policy ID.
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
     * Retrieve copilot chat history.
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
     * Retrieve copilot chat history.
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
     * Obtain the diagnosis result.
     *
     * @remarks
     * The diagnosis flow is asynchronous. Therefore, when you invoke this API, the diagnosis may still be executing and not yet ended. You can check the `data.status` field in the returned data to determine the status. When `data.status == "Success"`, it indicates that the diagnosis succeeded, and you can read the diagnosis result from `data.result`.
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
     * Obtain the diagnosis result.
     *
     * @remarks
     * The diagnosis flow is asynchronous. Therefore, when you invoke this API, the diagnosis may still be executing and not yet ended. You can check the `data.status` field in the returned data to determine the status. When `data.status == "Success"`, it indicates that the diagnosis succeeded, and you can read the diagnosis result from `data.result`.
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
     * Obtain the proportion of edge zone/pod health statuses over a period of time.
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
     * Obtain the proportion of edge zone/pod health statuses over a period of time.
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
     * Obtain the number of edge zones in a cluster or the number of pods in an edge zone.
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
     * Obtain the number of edge zones in a cluster or the number of pods in an edge zone.
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
     * Obtain the list of a specific field under an instance.
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
     * Obtain the list of a specific field under an instance.
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
     * Obtain hot spot analysis results.
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
     * Obtain hot spot analysis results.
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
     * Obtain hot spot comparison tracing results.
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
     * Obtain hot spot comparison tracing results.
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
     * Obtain the hot spot instance list.
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
     * Obtain the hot spot instance list.
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
     * Obtain the PID list of a specific instance.
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
     * Obtain the PID list of a specific instance.
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
     * Obtain hot spot tracing results.
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
     * Obtain hot spot tracing results.
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
     * 获取巡检报告.
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
     * 获取巡检报告.
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
     * Obtain real-time cluster/edge zone health degree score.
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
     * Obtain real-time cluster/edge zone health degree score.
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
     * AI Infra retrieves the list of analysis records.
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
        if (null !== $request->current) {
            @$query['current'] = $request->current;
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
     * AI Infra retrieves the list of analysis records.
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
     * Obtain the proportion of abnormal issues in pods within edge zones or in an edge zone within a cluster over a specified period of time.
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
     * Obtain the proportion of abnormal issues in pods within edge zones or in an edge zone within a cluster over a specified period of time.
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
     * Retrieve the health score trend.
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
     * Retrieve the health score trend.
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
     * Obtain real-time resource usage of clusters or edge zones.
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
     * Obtain real-time resource usage of clusters or edge zones.
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
     * Obtain Function Modules Configuration.
     *
     * @remarks
     * This API is used to retrieve the service configuration status.
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
     * Obtain Function Modules Configuration.
     *
     * @remarks
     * This API is used to retrieve the service configuration status.
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
     * This API queries the task execution status and diagnosis result based on the job ID.
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
     * This API queries the task execution status and diagnosis result based on the job ID.
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
     * Initialize SysOM and ensure that the service role exists.
     *
     * @remarks
     * Some SysOM APIs require role assumption based on the `AliyunServiceRoleForSysom` service role. Therefore, before using SysOM features, you must invoke this API to perform initialization and ensure that the service role has been created.
     * - `check_only`: If this parameter is set to True, the API only checks whether the service role exists and does not create it. If this parameter is set to False or omitted, the API automatically creates the service role if it does not exist.
     * >
     * > Note: When you invoke this API to initialize the role, you are deemed to have accepted the User Agreement of the operating system console by default. For more information, see [Overview of the Operating System Console](https://help.aliyun.com/zh/alinux/product-overview/os-console-overview?spm=a2c4g.11186623.help-menu-2632541.d_0_7.35a829ffLjQtgg) and [Alibaba Cloud Service Trial Terms](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud202001091714_51956.html).
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
     * Initialize SysOM and ensure that the service role exists.
     *
     * @remarks
     * Some SysOM APIs require role assumption based on the `AliyunServiceRoleForSysom` service role. Therefore, before using SysOM features, you must invoke this API to perform initialization and ensure that the service role has been created.
     * - `check_only`: If this parameter is set to True, the API only checks whether the service role exists and does not create it. If this parameter is set to False or omitted, the API automatically creates the service role if it does not exist.
     * >
     * > Note: When you invoke this API to initialize the role, you are deemed to have accepted the User Agreement of the operating system console by default. For more information, see [Overview of the Operating System Console](https://help.aliyun.com/zh/alinux/product-overview/os-console-overview?spm=a2c4g.11186623.help-menu-2632541.d_0_7.35a829ffLjQtgg) and [Alibaba Cloud Service Trial Terms](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud202001091714_51956.html).
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
     * Install an agent on the specified instance.
     *
     * @remarks
     * The API call to install an agent is asynchronous. After invoking this API, a task_id is returned. You can use this ID to invoke the GetAgentTask API to retrieve the job execution status.
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
     * Install an agent on the specified instance.
     *
     * @remarks
     * The API call to install an agent is asynchronous. After invoking this API, a task_id is returned. You can use this ID to invoke the GetAgentTask API to retrieve the job execution status.
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
     * Install widgets on a cluster.
     *
     * @remarks
     * After you install widgets on the specified ACK cluster:
     * 1. When the cluster is first enrolled, widgets are installed on all ECS instances in the cluster (if the cluster contains more than 50 nodes, widgets are installed on only 50 nodes in the first batch).
     * 2. The operating system console periodically checks for scale-in or scale-out events in the enrolled cluster. Whenever new ECS instances are added to the cluster, the operating system console automatically installs widgets on them without requiring user intervention.
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
     * Install widgets on a cluster.
     *
     * @remarks
     * After you install widgets on the specified ACK cluster:
     * 1. When the cluster is first enrolled, widgets are installed on all ECS instances in the cluster (if the cluster contains more than 50 nodes, widgets are installed on only 50 nodes in the first batch).
     * 2. The operating system console periodically checks for scale-in or scale-out events in the enrolled cluster. Whenever new ECS instances are added to the cluster, the operating system console automatically installs widgets on them without requiring user intervention.
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
     * Initiate diagnosis for anomalous activity.
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
     * Initiate diagnosis for anomalous activity.
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
     * Initiate a diagnosis.
     *
     * @remarks
     * Diagnosing the target ECS instance has the following requirements:
     * - The instance status of the target ECS instance must be running.
     * - The Cloud Assistant Agent must already be installed on the target ECS instance. If it is not installed, install it by referring to [Install the Cloud Assistant Agent](https://help.aliyun.com/zh/ecs/user-guide/install-the-cloud-assistant-agent).
     * - You must invoke the AuthDiagnosis API to authorize SysOM to diagnose the target ECS instance. If this authorization is not granted, the API call will fail immediately.
     * - This API depends on the existence of the SysOM service-linked role (AliyunServiceRoleForSysom). This API does not create the service-linked role automatically. If the service-linked role does not exist, you must first call AuthDiagnosis to perform authorization, which will create the aforementioned service-linked role.
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
     * Initiate a diagnosis.
     *
     * @remarks
     * Diagnosing the target ECS instance has the following requirements:
     * - The instance status of the target ECS instance must be running.
     * - The Cloud Assistant Agent must already be installed on the target ECS instance. If it is not installed, install it by referring to [Install the Cloud Assistant Agent](https://help.aliyun.com/zh/ecs/user-guide/install-the-cloud-assistant-agent).
     * - You must invoke the AuthDiagnosis API to authorize SysOM to diagnose the target ECS instance. If this authorization is not granted, the API call will fail immediately.
     * - This API depends on the existence of the SysOM service-linked role (AliyunServiceRoleForSysom). This API does not create the service-linked role automatically. If the service-linked role does not exist, you must first call AuthDiagnosis to perform authorization, which will create the aforementioned service-linked role.
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
     * Obtain anomalous activity information for clusters, edge zones, or pods within a specified time period.
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
     * Obtain anomalous activity information for clusters, edge zones, or pods within a specified time period.
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
     * List installation records of the agent.
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
     * List installation records of the agent.
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
     * Retrieve the Agent List.
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
     * Retrieve the Agent List.
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
     * This API is used to obtain the alert contact list.
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
     * This API is used to obtain the alert contact list.
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
     * Retrieve all alerting items.
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
     * Retrieve all alerting items.
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
     * Used to obtain all alert policies for push notifications of a user.
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
     * Used to obtain all alert policies for push notifications of a user.
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
     * This API is used to obtain a list of managed or unmanaged instances along with instance information.
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
     * This API is used to obtain a list of managed or unmanaged instances along with instance information.
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
     * Obtain cluster widget installation records.
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
     * Obtain cluster widget installation records.
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
     * Retrieve all clusters managed by the current user.
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
     * Retrieve all clusters managed by the current user.
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
     * Obtain the diagnosis history list.
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
     * Obtain the diagnosis history list.
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
     * Obtain a list of cluster node or pod health scores within a specified time period.
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
     * Obtain a list of cluster node or pod health scores within a specified time period.
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
     * Obtain instance status.
     *
     * @remarks
     * This API is used to obtain the list of machines managed by SysOM.
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
     * Obtain instance status.
     *
     * @remarks
     * This API is used to obtain the list of machines managed by SysOM.
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
     * Obtain the instance list.
     *
     * @remarks
     * The instance list returned by this API includes only the machines that have been managed by SysOM. If an ECS instance exists but has not been managed by SysOM, it will not appear in the list.
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
     * Obtain the instance list.
     *
     * @remarks
     * The instance list returned by this API includes only the machines that have been managed by SysOM. If an ECS instance exists but has not been managed by SysOM, it will not appear in the list.
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
     * Obtain a list of ECS information, such as the tag list, public IP address list, and so on.
     *
     * @remarks
     * The instance list returned by this API includes only machines that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it will not appear in the list.
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
     * Obtain a list of ECS information, such as the tag list, public IP address list, and so on.
     *
     * @remarks
     * The instance list returned by this API includes only machines that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it will not appear in the list.
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
     * Obtain information about managed or unmanaged instances, including ECS information.
     *
     * @remarks
     * The current API returns a list of instances that have already been managed by SysOM. If an ECS instance exists but has not been managed by SysOM, it will not appear in the list.
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
     * Obtain information about managed or unmanaged instances, including ECS information.
     *
     * @remarks
     * The current API returns a list of instances that have already been managed by SysOM. If an ECS instance exists but has not been managed by SysOM, it will not appear in the list.
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
     * Obtain the list of instances for plugin installation, update, or uninstallation.
     *
     * @remarks
     * The instance list returned by this API consists of machines that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it will not appear in the list.
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
     * Obtain the list of instances for plugin installation, update, or uninstallation.
     *
     * @remarks
     * The instance list returned by this API consists of machines that are already managed by SysOM. If an ECS instance exists but is not managed by SysOM, it will not appear in the list.
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
     * Retrieve the list of pods in a cluster or instance.
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
     * Retrieve the list of pods in a cluster or instance.
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
     * List all areas where machines are managed.
     *
     * @remarks
     * This API retrieves the list of areas where the current user has machines managed by SysOM. If the user has ECS instances in an area but those instances are not managed by SysOM, that area will not appear in the API response.
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
     * List all areas where machines are managed.
     *
     * @remarks
     * This API retrieves the list of areas where the current user has machines managed by SysOM. If the user has ECS instances in an area but those instances are not managed by SysOM, that area will not appear in the API response.
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
     * Query the history list of breakdown diagnosis jobs.
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
     * Query the history list of breakdown diagnosis jobs.
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
     * Start an AI job analysis.
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
     * Start an AI job analysis.
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
     * Start AI Infra differential analysis.
     *
     * @remarks
     * Currently, only comparative analysis between different steps under the same AI Infra analysis record and the same pid is supported.
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
     * Start AI Infra differential analysis.
     *
     * @remarks
     * Currently, only comparative analysis between different steps under the same AI Infra analysis record and the same pid is supported.
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
     * Uninstall a specified version of the widget.
     *
     * @remarks
     * The API call to uninstall an Agent is asynchronous. After invoking this API, a task_id is returned. You can use this ID to invoke the GetAgentTask API to retrieve the execution status of the job.
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
     * Uninstall a specified version of the widget.
     *
     * @remarks
     * The API call to uninstall an Agent is asynchronous. After invoking this API, a task_id is returned. You can use this ID to invoke the GetAgentTask API to retrieve the execution status of the job.
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
     * Uninstall a widget from a cluster.
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
     * Uninstall a widget from a cluster.
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
     * This API is used to update an alert contact.
     *
     * @remarks
     * 、
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
     * This API is used to update an alert contact.
     *
     * @remarks
     * 、
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
     * User updates the status of a push alert policy.
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
     * User updates the status of a push alert policy.
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
     * Update push alert policy.
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
     * Update push alert policy.
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
     * Update the follow level of an anomalous activity to adjust the sensitivity of the anomaly detection algorithm by modifying the follow level.
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
     * Update the follow level of an anomalous activity to adjust the sensitivity of the anomaly detection algorithm by modifying the follow level.
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
     * Update the service function module configuration.
     *
     * @remarks
     * - You must fill in the parameters according to the input parameters of the general LLM service, convert them to a string, and assign the result to `llmParamString`.
     * - To use the returned data, convert the string back to a dictionary, following the response format of the general LLM service.
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
     * Update the service function module configuration.
     *
     * @remarks
     * - You must fill in the parameters according to the input parameters of the general LLM service, convert them to a string, and assign the result to `llmParamString`.
     * - To use the returned data, convert the string back to a dictionary, following the response format of the general LLM service.
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
     * Update the version of the installed widget to the specified version.
     *
     * @remarks
     * The API call to update the Agent is asynchronous. After invoking this API, a task_id is returned. You can use this ID to invoke the GetAgentTask API to retrieve the execution status of the job.
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
     * Update the version of the installed widget to the specified version.
     *
     * @remarks
     * The API call to update the Agent is asynchronous. After invoking this API, a task_id is returned. You can use this ID to invoke the GetAgentTask API to retrieve the execution status of the job.
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
     * Update widget for cluster.
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
     * Update widget for cluster.
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
