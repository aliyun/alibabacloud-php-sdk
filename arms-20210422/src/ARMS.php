<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ARMS\V20210422\Models\AddGrafanaRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\AddGrafanaResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\AddIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\AddIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ApplyScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ApplyScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ApplyScenarioShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CheckDataConsistencyRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CheckDataConsistencyResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CheckServiceLinkedRoleForDeletingRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CheckServiceLinkedRoleForDeletingResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CheckServiceStatusRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CheckServiceStatusResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ConfigAppRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ConfigAppResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateAlertTemplateRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateAlertTemplateResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreatePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreatePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateWehookRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateWehookResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteAlertTemplateRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteAlertTemplateResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteGrafanaResourceRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteGrafanaResourceResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeletePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeletePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteTraceAppRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DeleteTraceAppResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeTraceLicenseKeyRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeTraceLicenseKeyResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeTraceLocationRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeTraceLocationResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DisableAlertTemplateRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DisableAlertTemplateResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\EnableAlertTemplateRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\EnableAlertTemplateResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ExportPrometheusRulesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ExportPrometheusRulesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetAgentDownloadUrlRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetAgentDownloadUrlResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetAppApiByPageRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetAppApiByPageResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetConsistencySnapshotRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetConsistencySnapshotResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetIntegrationTokenRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetIntegrationTokenResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetMultipleTraceRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetMultipleTraceResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetPrometheusApiTokenRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetPrometheusApiTokenResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetRetcodeShareUrlRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetRetcodeShareUrlResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetStackRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetStackResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetTraceAppRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetTraceAppResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetTraceRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\GetTraceResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ImportAppAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ImportAppAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ImportCustomAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ImportCustomAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ImportPrometheusRulesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ImportPrometheusRulesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListActivatedAlertsRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListActivatedAlertsResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListAlertTemplatesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListAlertTemplatesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListClusterFromGrafanaRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListClusterFromGrafanaResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListDashboardsRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListDashboardsResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListPromClustersRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListPromClustersResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListPrometheusAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListPrometheusAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListPrometheusAlertTemplatesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListPrometheusAlertTemplatesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListRetcodeAppsRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListRetcodeAppsResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListServerlessTopNAppsRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListServerlessTopNAppsResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListTraceAppsRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListTraceAppsResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\OpenArmsDefaultSLRRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\OpenArmsDefaultSLRResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\OpenArmsServiceRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\OpenArmsServiceResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\OpenVClusterRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\OpenVClusterResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\OpenXtraceDefaultSLRRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\OpenXtraceDefaultSLRResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryDatasetRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryDatasetResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryMetricByPageRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryMetricByPageResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryMetricRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryMetricResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SaveTraceAppConfigRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SaveTraceAppConfigResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertHistoriesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertHistoriesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchEventsRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchEventsResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchRetcodeAppByPageRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchRetcodeAppByPageResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTraceAppByNameRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTraceAppByNameResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTraceAppByPageRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTraceAppByPageResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTracesByPageRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTracesByPageResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTracesRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTracesResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SendCustomIncidentsRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SendCustomIncidentsResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SendMseIncidentRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SendMseIncidentResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SetRetcodeShareStatusRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SetRetcodeShareStatusResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\StartAlertRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\StartAlertResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\StopAlertRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\StopAlertResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateAlertTemplateRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateAlertTemplateResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdatePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdatePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateWebhookRequest;
use AlibabaCloud\SDK\ARMS\V20210422\Models\UpdateWebhookResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ARMS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'arms.aliyuncs.com',
            'cn-beijing-finance-1'        => 'arms.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'arms.aliyuncs.com',
            'cn-beijing-gov-1'            => 'arms.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'arms.aliyuncs.com',
            'cn-edge-1'                   => 'arms.aliyuncs.com',
            'cn-fujian'                   => 'arms.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'arms.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'arms.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'arms.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'arms.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'arms.aliyuncs.com',
            'cn-qingdao-nebula'           => 'arms.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'arms.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'arms.aliyuncs.com',
            'cn-shanghai-inner'           => 'arms.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'arms.aliyuncs.com',
            'cn-shenzhen-inner'           => 'arms.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'arms.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'arms.aliyuncs.com',
            'cn-wuhan'                    => 'arms.aliyuncs.com',
            'cn-yushanfang'               => 'arms.aliyuncs.com',
            'cn-zhangbei'                 => 'arms.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'arms.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'arms.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'arms.aliyuncs.com',
            'eu-west-1-oxs'               => 'arms.aliyuncs.com',
            'me-east-1'                   => 'arms.aliyuncs.com',
            'rus-west-1-pop'              => 'arms.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('arms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddGrafanaRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddGrafanaResponse
     */
    public function addGrafanaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->integration)) {
            $query['Integration'] = $request->integration;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGrafana',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGrafanaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGrafanaRequest $request
     *
     * @return AddGrafanaResponse
     */
    public function addGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGrafanaWithOptions($request, $runtime);
    }

    /**
     * @param AddIntegrationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddIntegrationResponse
     */
    public function addIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->integration)) {
            $query['Integration'] = $request->integration;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddIntegration',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddIntegrationRequest $request
     *
     * @return AddIntegrationResponse
     */
    public function addIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param ApplyScenarioRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ApplyScenarioResponse
     */
    public function applyScenarioWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyScenarioShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->configShrink)) {
            $query['Config'] = $request->configShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $query['Scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->sign)) {
            $query['Sign'] = $request->sign;
        }
        if (!Utils::isUnset($request->snDump)) {
            $query['SnDump'] = $request->snDump;
        }
        if (!Utils::isUnset($request->snForce)) {
            $query['SnForce'] = $request->snForce;
        }
        if (!Utils::isUnset($request->snStat)) {
            $query['SnStat'] = $request->snStat;
        }
        if (!Utils::isUnset($request->snTransfer)) {
            $query['SnTransfer'] = $request->snTransfer;
        }
        if (!Utils::isUnset($request->updateOption)) {
            $query['UpdateOption'] = $request->updateOption;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyScenario',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyScenarioRequest $request
     *
     * @return ApplyScenarioResponse
     */
    public function applyScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyScenarioWithOptions($request, $runtime);
    }

    /**
     * @param CheckDataConsistencyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckDataConsistencyResponse
     */
    public function checkDataConsistencyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->currentTimestamp)) {
            $query['CurrentTimestamp'] = $request->currentTimestamp;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->proxyUserId)) {
            $query['ProxyUserId'] = $request->proxyUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDataConsistency',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDataConsistencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckDataConsistencyRequest $request
     *
     * @return CheckDataConsistencyResponse
     */
    public function checkDataConsistency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDataConsistencyWithOptions($request, $runtime);
    }

    /**
     * @param CheckServiceLinkedRoleForDeletingRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public function checkServiceLinkedRoleForDeletingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletionTaskId)) {
            $query['DeletionTaskId'] = $request->deletionTaskId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->SPIRegionId)) {
            $query['SPIRegionId'] = $request->SPIRegionId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckServiceLinkedRoleForDeleting',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckServiceLinkedRoleForDeletingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckServiceLinkedRoleForDeletingRequest $request
     *
     * @return CheckServiceLinkedRoleForDeletingResponse
     */
    public function checkServiceLinkedRoleForDeleting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleForDeletingWithOptions($request, $runtime);
    }

    /**
     * @param CheckServiceStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckServiceStatusResponse
     */
    public function checkServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->svcCode)) {
            $query['SvcCode'] = $request->svcCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckServiceStatus',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckServiceStatusRequest $request
     *
     * @return CheckServiceStatusResponse
     */
    public function checkServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param ConfigAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ConfigAppResponse
     */
    public function configAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigApp',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigAppRequest $request
     *
     * @return ConfigAppResponse
     */
    public function configApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAlertContactResponse
     */
    public function createAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->dingRobotWebhookUrl)) {
            $query['DingRobotWebhookUrl'] = $request->dingRobotWebhookUrl;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['PhoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->systemNoc)) {
            $query['SystemNoc'] = $request->systemNoc;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAlertContact',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAlertContactRequest $request
     *
     * @return CreateAlertContactResponse
     */
    public function createAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAlertContactGroupResponse
     */
    public function createAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAlertContactGroup',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAlertContactGroupRequest $request
     *
     * @return CreateAlertContactGroupResponse
     */
    public function createAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlertTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAlertTemplateResponse
     */
    public function createAlertTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->annotations)) {
            $query['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->matchExpressions)) {
            $query['MatchExpressions'] = $request->matchExpressions;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->templateProvider)) {
            $query['TemplateProvider'] = $request->templateProvider;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAlertTemplate',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlertTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAlertTemplateRequest $request
     *
     * @return CreateAlertTemplateResponse
     */
    public function createAlertTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateDispatchRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDispatchRuleResponse
     */
    public function createDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dispatchRule)) {
            $query['DispatchRule'] = $request->dispatchRule;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDispatchRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDispatchRuleRequest $request
     *
     * @return CreateDispatchRuleResponse
     */
    public function createDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreatePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreatePrometheusAlertRuleResponse
     */
    public function createPrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertName)) {
            $query['AlertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->annotations)) {
            $query['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dispatchRuleId)) {
            $query['DispatchRuleId'] = $request->dispatchRuleId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $query['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePrometheusAlertRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePrometheusAlertRuleRequest $request
     *
     * @return CreatePrometheusAlertRuleResponse
     */
    public function createPrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRetcodeAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRetcodeAppResponse
     */
    public function createRetcodeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retcodeAppName)) {
            $query['RetcodeAppName'] = $request->retcodeAppName;
        }
        if (!Utils::isUnset($request->retcodeAppType)) {
            $query['RetcodeAppType'] = $request->retcodeAppType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRetcodeApp',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRetcodeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRetcodeAppRequest $request
     *
     * @return CreateRetcodeAppResponse
     */
    public function createRetcodeApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRetcodeAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateWehookRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateWehookResponse
     */
    public function createWehookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->httpHeaders)) {
            $query['HttpHeaders'] = $request->httpHeaders;
        }
        if (!Utils::isUnset($request->httpParams)) {
            $query['HttpParams'] = $request->httpParams;
        }
        if (!Utils::isUnset($request->method)) {
            $query['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWehook',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWehookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWehookRequest $request
     *
     * @return CreateWehookResponse
     */
    public function createWehook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWehookWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertContact',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertContactRequest $request
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupId)) {
            $query['ContactGroupId'] = $request->contactGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertContactGroup',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertContactGroupRequest $request
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAlertRulesResponse
     */
    public function deleteAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertIds)) {
            $query['AlertIds'] = $request->alertIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertRules',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertRulesRequest $request
     *
     * @return DeleteAlertRulesResponse
     */
    public function deleteAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAlertTemplateResponse
     */
    public function deleteAlertTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertTemplate',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertTemplateRequest $request
     *
     * @return DeleteAlertTemplateResponse
     */
    public function deleteAlertTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDispatchRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDispatchRuleResponse
     */
    public function deleteDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDispatchRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDispatchRuleRequest $request
     *
     * @return DeleteDispatchRuleResponse
     */
    public function deleteDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGrafanaResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteGrafanaResourceResponse
     */
    public function deleteGrafanaResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $body['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteGrafanaResource',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGrafanaResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGrafanaResourceRequest $request
     *
     * @return DeleteGrafanaResourceResponse
     */
    public function deleteGrafanaResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGrafanaResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeletePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeletePrometheusAlertRuleResponse
     */
    public function deletePrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePrometheusAlertRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePrometheusAlertRuleRequest $request
     *
     * @return DeletePrometheusAlertRuleResponse
     */
    public function deletePrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRetcodeAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRetcodeAppResponse
     */
    public function deleteRetcodeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRetcodeApp',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRetcodeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRetcodeAppRequest $request
     *
     * @return DeleteRetcodeAppResponse
     */
    public function deleteRetcodeApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRetcodeAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScenarioRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteScenarioResponse
     */
    public function deleteScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScenario',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScenarioRequest $request
     *
     * @return DeleteScenarioResponse
     */
    public function deleteScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScenarioWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTraceAppRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTraceAppResponse
     */
    public function deleteTraceAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTraceApp',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTraceAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTraceAppRequest $request
     *
     * @return DeleteTraceAppResponse
     */
    public function deleteTraceApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTraceAppWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDispatchRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDispatchRuleResponse
     */
    public function describeDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDispatchRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDispatchRuleRequest $request
     *
     * @return DescribeDispatchRuleResponse
     */
    public function describeDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePrometheusAlertRuleResponse
     */
    public function describePrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrometheusAlertRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePrometheusAlertRuleRequest $request
     *
     * @return DescribePrometheusAlertRuleResponse
     */
    public function describePrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTraceLicenseKeyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTraceLicenseKeyResponse
     */
    public function describeTraceLicenseKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTraceLicenseKey',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTraceLicenseKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTraceLicenseKeyRequest $request
     *
     * @return DescribeTraceLicenseKeyResponse
     */
    public function describeTraceLicenseKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTraceLicenseKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTraceLocationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTraceLocationResponse
     */
    public function describeTraceLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTraceLocation',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTraceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTraceLocationRequest $request
     *
     * @return DescribeTraceLocationResponse
     */
    public function describeTraceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTraceLocationWithOptions($request, $runtime);
    }

    /**
     * @param DisableAlertTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DisableAlertTemplateResponse
     */
    public function disableAlertTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableAlertTemplate',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAlertTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableAlertTemplateRequest $request
     *
     * @return DisableAlertTemplateResponse
     */
    public function disableAlertTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAlertTemplateWithOptions($request, $runtime);
    }

    /**
     * @param EnableAlertTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableAlertTemplateResponse
     */
    public function enableAlertTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableAlertTemplate',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableAlertTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableAlertTemplateRequest $request
     *
     * @return EnableAlertTemplateResponse
     */
    public function enableAlertTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAlertTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ExportPrometheusRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportPrometheusRulesResponse
     */
    public function exportPrometheusRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nameSpace_)) {
            $query['NameSpace'] = $request->nameSpace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportPrometheusRules',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportPrometheusRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportPrometheusRulesRequest $request
     *
     * @return ExportPrometheusRulesResponse
     */
    public function exportPrometheusRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportPrometheusRulesWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentDownloadUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAgentDownloadUrlResponse
     */
    public function getAgentDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgentDownloadUrl',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAgentDownloadUrlRequest $request
     *
     * @return GetAgentDownloadUrlResponse
     */
    public function getAgentDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetAppApiByPageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAppApiByPageResponse
     */
    public function getAppApiByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->intervalMills)) {
            $query['IntervalMills'] = $request->intervalMills;
        }
        if (!Utils::isUnset($request->PId)) {
            $query['PId'] = $request->PId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppApiByPage',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppApiByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppApiByPageRequest $request
     *
     * @return GetAppApiByPageResponse
     */
    public function getAppApiByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppApiByPageWithOptions($request, $runtime);
    }

    /**
     * @param GetConsistencySnapshotRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetConsistencySnapshotResponse
     */
    public function getConsistencySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->currentTimestamp)) {
            $query['CurrentTimestamp'] = $request->currentTimestamp;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->proxyUserId)) {
            $query['ProxyUserId'] = $request->proxyUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConsistencySnapshot',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConsistencySnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConsistencySnapshotRequest $request
     *
     * @return GetConsistencySnapshotResponse
     */
    public function getConsistencySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsistencySnapshotWithOptions($request, $runtime);
    }

    /**
     * @param GetIntegrationTokenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetIntegrationTokenResponse
     */
    public function getIntegrationTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIntegrationToken',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIntegrationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIntegrationTokenRequest $request
     *
     * @return GetIntegrationTokenResponse
     */
    public function getIntegrationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntegrationTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetMultipleTraceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMultipleTraceResponse
     */
    public function getMultipleTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->traceIDs)) {
            $query['TraceIDs'] = $request->traceIDs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMultipleTrace',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMultipleTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMultipleTraceRequest $request
     *
     * @return GetMultipleTraceResponse
     */
    public function getMultipleTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultipleTraceWithOptions($request, $runtime);
    }

    /**
     * @param GetPrometheusApiTokenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetPrometheusApiTokenResponse
     */
    public function getPrometheusApiTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrometheusApiToken',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPrometheusApiTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPrometheusApiTokenRequest $request
     *
     * @return GetPrometheusApiTokenResponse
     */
    public function getPrometheusApiToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusApiTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetRetcodeShareUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRetcodeShareUrlResponse
     */
    public function getRetcodeShareUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRetcodeShareUrl',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRetcodeShareUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRetcodeShareUrlRequest $request
     *
     * @return GetRetcodeShareUrlResponse
     */
    public function getRetcodeShareUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeShareUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetStackRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetStackResponse
     */
    public function getStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rpcID)) {
            $query['RpcID'] = $request->rpcID;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->traceID)) {
            $query['TraceID'] = $request->traceID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStack',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStackRequest $request
     *
     * @return GetStackResponse
     */
    public function getStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackWithOptions($request, $runtime);
    }

    /**
     * @param GetTraceRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTraceResponse
     */
    public function getTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->traceID)) {
            $query['TraceID'] = $request->traceID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrace',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTraceRequest $request
     *
     * @return GetTraceResponse
     */
    public function getTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceWithOptions($request, $runtime);
    }

    /**
     * @param GetTraceAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTraceAppResponse
     */
    public function getTraceAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTraceApp',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTraceAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTraceAppRequest $request
     *
     * @return GetTraceAppResponse
     */
    public function getTraceApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceAppWithOptions($request, $runtime);
    }

    /**
     * @param ImportAppAlertRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImportAppAlertRulesResponse
     */
    public function importAppAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupIds)) {
            $query['ContactGroupIds'] = $request->contactGroupIds;
        }
        if (!Utils::isUnset($request->isAutoStart)) {
            $query['IsAutoStart'] = $request->isAutoStart;
        }
        if (!Utils::isUnset($request->pids)) {
            $query['Pids'] = $request->pids;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templageAlertConfig)) {
            $query['TemplageAlertConfig'] = $request->templageAlertConfig;
        }
        if (!Utils::isUnset($request->templateAlertId)) {
            $query['TemplateAlertId'] = $request->templateAlertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportAppAlertRules',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportAppAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportAppAlertRulesRequest $request
     *
     * @return ImportAppAlertRulesResponse
     */
    public function importAppAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importAppAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param ImportCustomAlertRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ImportCustomAlertRulesResponse
     */
    public function importCustomAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupIds)) {
            $query['ContactGroupIds'] = $request->contactGroupIds;
        }
        if (!Utils::isUnset($request->isAutoStart)) {
            $query['IsAutoStart'] = $request->isAutoStart;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templageAlertConfig)) {
            $query['TemplageAlertConfig'] = $request->templageAlertConfig;
        }
        if (!Utils::isUnset($request->templateAlertConfig)) {
            $query['TemplateAlertConfig'] = $request->templateAlertConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportCustomAlertRules',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportCustomAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportCustomAlertRulesRequest $request
     *
     * @return ImportCustomAlertRulesResponse
     */
    public function importCustomAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCustomAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param ImportPrometheusRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ImportPrometheusRulesResponse
     */
    public function importPrometheusRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nameSpace_)) {
            $query['NameSpace'] = $request->nameSpace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportPrometheusRules',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportPrometheusRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportPrometheusRulesRequest $request
     *
     * @return ImportPrometheusRulesResponse
     */
    public function importPrometheusRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importPrometheusRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListActivatedAlertsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListActivatedAlertsResponse
     */
    public function listActivatedAlertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListActivatedAlerts',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListActivatedAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListActivatedAlertsRequest $request
     *
     * @return ListActivatedAlertsResponse
     */
    public function listActivatedAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActivatedAlertsWithOptions($request, $runtime);
    }

    /**
     * @param ListAlertTemplatesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAlertTemplatesResponse
     */
    public function listAlertTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertProvider)) {
            $query['AlertProvider'] = $request->alertProvider;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateProvider)) {
            $query['TemplateProvider'] = $request->templateProvider;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlertTemplates',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAlertTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlertTemplatesRequest $request
     *
     * @return ListAlertTemplatesResponse
     */
    public function listAlertTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterFromGrafanaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafanaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterFromGrafana',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterFromGrafanaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterFromGrafanaRequest $request
     *
     * @return ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterFromGrafanaWithOptions($request, $runtime);
    }

    /**
     * @param ListDashboardsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListDashboardsResponse
     */
    public function listDashboardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->recreateSwitch)) {
            $query['RecreateSwitch'] = $request->recreateSwitch;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDashboards',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDashboardsRequest $request
     *
     * @return ListDashboardsResponse
     */
    public function listDashboards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDashboardsWithOptions($request, $runtime);
    }

    /**
     * @param ListDispatchRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDispatchRuleResponse
     */
    public function listDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->system)) {
            $query['System'] = $request->system;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDispatchRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDispatchRuleRequest $request
     *
     * @return ListDispatchRuleResponse
     */
    public function listDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListPromClustersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListPromClustersResponse
     */
    public function listPromClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPromClusters',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPromClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPromClustersRequest $request
     *
     * @return ListPromClustersResponse
     */
    public function listPromClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPromClustersWithOptions($request, $runtime);
    }

    /**
     * @param ListPrometheusAlertRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrometheusAlertRulesResponse
     */
    public function listPrometheusAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->matchExpressions)) {
            $query['MatchExpressions'] = $request->matchExpressions;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrometheusAlertRules',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrometheusAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrometheusAlertRulesRequest $request
     *
     * @return ListPrometheusAlertRulesResponse
     */
    public function listPrometheusAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListPrometheusAlertTemplatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListPrometheusAlertTemplatesResponse
     */
    public function listPrometheusAlertTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrometheusAlertTemplates',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrometheusAlertTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrometheusAlertTemplatesRequest $request
     *
     * @return ListPrometheusAlertTemplatesResponse
     */
    public function listPrometheusAlertTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusAlertTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListRetcodeAppsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRetcodeAppsResponse
     */
    public function listRetcodeAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRetcodeApps',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRetcodeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRetcodeAppsRequest $request
     *
     * @return ListRetcodeAppsResponse
     */
    public function listRetcodeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRetcodeAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListScenarioRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListScenarioResponse
     */
    public function listScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $query['Scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->sign)) {
            $query['Sign'] = $request->sign;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScenario',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScenarioRequest $request
     *
     * @return ListScenarioResponse
     */
    public function listScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenarioWithOptions($request, $runtime);
    }

    /**
     * @param ListServerlessTopNAppsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListServerlessTopNAppsResponse
     */
    public function listServerlessTopNAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServerlessTopNApps',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServerlessTopNAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServerlessTopNAppsRequest $request
     *
     * @return ListServerlessTopNAppsResponse
     */
    public function listServerlessTopNApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerlessTopNAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListTraceAppsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTraceAppsResponse
     */
    public function listTraceAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTraceApps',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTraceAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTraceAppsRequest $request
     *
     * @return ListTraceAppsResponse
     */
    public function listTraceApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTraceAppsWithOptions($request, $runtime);
    }

    /**
     * @param OpenArmsDefaultSLRRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OpenArmsDefaultSLRResponse
     */
    public function openArmsDefaultSLRWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenArmsDefaultSLR',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenArmsDefaultSLRResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenArmsDefaultSLRRequest $request
     *
     * @return OpenArmsDefaultSLRResponse
     */
    public function openArmsDefaultSLR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openArmsDefaultSLRWithOptions($request, $runtime);
    }

    /**
     * @param OpenArmsServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenArmsServiceResponse
     */
    public function openArmsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenArmsService',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenArmsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenArmsServiceRequest $request
     *
     * @return OpenArmsServiceResponse
     */
    public function openArmsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openArmsServiceWithOptions($request, $runtime);
    }

    /**
     * @param OpenVClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OpenVClusterResponse
     */
    public function openVClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->recreateSwitch)) {
            $query['RecreateSwitch'] = $request->recreateSwitch;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenVCluster',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenVClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenVClusterRequest $request
     *
     * @return OpenVClusterResponse
     */
    public function openVCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openVClusterWithOptions($request, $runtime);
    }

    /**
     * @param OpenXtraceDefaultSLRRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OpenXtraceDefaultSLRResponse
     */
    public function openXtraceDefaultSLRWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenXtraceDefaultSLR',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenXtraceDefaultSLRResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenXtraceDefaultSLRRequest $request
     *
     * @return OpenXtraceDefaultSLRResponse
     */
    public function openXtraceDefaultSLR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openXtraceDefaultSLRWithOptions($request, $runtime);
    }

    /**
     * @param QueryDatasetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryDatasetResponse
     */
    public function queryDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->dateStr)) {
            $query['DateStr'] = $request->dateStr;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->hungryMode)) {
            $query['HungryMode'] = $request->hungryMode;
        }
        if (!Utils::isUnset($request->intervalInSec)) {
            $query['IntervalInSec'] = $request->intervalInSec;
        }
        if (!Utils::isUnset($request->isDrillDown)) {
            $query['IsDrillDown'] = $request->isDrillDown;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->maxTime)) {
            $query['MaxTime'] = $request->maxTime;
        }
        if (!Utils::isUnset($request->measures)) {
            $query['Measures'] = $request->measures;
        }
        if (!Utils::isUnset($request->minTime)) {
            $query['MinTime'] = $request->minTime;
        }
        if (!Utils::isUnset($request->optionalDims)) {
            $query['OptionalDims'] = $request->optionalDims;
        }
        if (!Utils::isUnset($request->orderByKey)) {
            $query['OrderByKey'] = $request->orderByKey;
        }
        if (!Utils::isUnset($request->proxyUserId)) {
            $query['ProxyUserId'] = $request->proxyUserId;
        }
        if (!Utils::isUnset($request->reduceTail)) {
            $query['ReduceTail'] = $request->reduceTail;
        }
        if (!Utils::isUnset($request->requiredDims)) {
            $query['RequiredDims'] = $request->requiredDims;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDataset',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDatasetRequest $request
     *
     * @return QueryDatasetResponse
     */
    public function queryDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetWithOptions($request, $runtime);
    }

    /**
     * @param QueryMetricRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryMetricResponse
     */
    public function queryMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consistencyDataKey)) {
            $query['ConsistencyDataKey'] = $request->consistencyDataKey;
        }
        if (!Utils::isUnset($request->consistencyQueryStrategy)) {
            $query['ConsistencyQueryStrategy'] = $request->consistencyQueryStrategy;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->intervalInSec)) {
            $query['IntervalInSec'] = $request->intervalInSec;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->measures)) {
            $query['Measures'] = $request->measures;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->proxyUserId)) {
            $query['ProxyUserId'] = $request->proxyUserId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMetric',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMetricRequest $request
     *
     * @return QueryMetricResponse
     */
    public function queryMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricWithOptions($request, $runtime);
    }

    /**
     * @param QueryMetricByPageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMetricByPageResponse
     */
    public function queryMetricByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->customFilters)) {
            $query['CustomFilters'] = $request->customFilters;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->intervalInSec)) {
            $query['IntervalInSec'] = $request->intervalInSec;
        }
        if (!Utils::isUnset($request->measures)) {
            $query['Measures'] = $request->measures;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMetricByPage',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMetricByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMetricByPageRequest $request
     *
     * @return QueryMetricByPageResponse
     */
    public function queryMetricByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricByPageWithOptions($request, $runtime);
    }

    /**
     * @param SaveTraceAppConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SaveTraceAppConfigResponse
     */
    public function saveTraceAppConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->settings)) {
            $query['Settings'] = $request->settings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTraceAppConfig',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTraceAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveTraceAppConfigRequest $request
     *
     * @return SaveTraceAppConfigResponse
     */
    public function saveTraceAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTraceAppConfigWithOptions($request, $runtime);
    }

    /**
     * @param SearchAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchAlertContactResponse
     */
    public function searchAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchAlertContact',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchAlertContactRequest $request
     *
     * @return SearchAlertContactResponse
     */
    public function searchAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param SearchAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchAlertContactGroupResponse
     */
    public function searchAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupIds)) {
            $query['ContactGroupIds'] = $request->contactGroupIds;
        }
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->isDetail)) {
            $query['IsDetail'] = $request->isDetail;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchAlertContactGroup',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchAlertContactGroupRequest $request
     *
     * @return SearchAlertContactGroupResponse
     */
    public function searchAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param SearchAlertHistoriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchAlertHistoriesResponse
     */
    public function searchAlertHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->alertType)) {
            $query['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchAlertHistories',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchAlertHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchAlertHistoriesRequest $request
     *
     * @return SearchAlertHistoriesResponse
     */
    public function searchAlertHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param SearchAlertRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchAlertRulesResponse
     */
    public function searchAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchAlertRules',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchAlertRulesRequest $request
     *
     * @return SearchAlertRulesResponse
     */
    public function searchAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param SearchEventsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchEventsResponse
     */
    public function searchEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->alertType)) {
            $query['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isTrigger)) {
            $query['IsTrigger'] = $request->isTrigger;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchEvents',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchEventsRequest $request
     *
     * @return SearchEventsResponse
     */
    public function searchEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEventsWithOptions($request, $runtime);
    }

    /**
     * @param SearchRetcodeAppByPageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SearchRetcodeAppByPageResponse
     */
    public function searchRetcodeAppByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retcodeAppName)) {
            $query['RetcodeAppName'] = $request->retcodeAppName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchRetcodeAppByPage',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchRetcodeAppByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchRetcodeAppByPageRequest $request
     *
     * @return SearchRetcodeAppByPageResponse
     */
    public function searchRetcodeAppByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchRetcodeAppByPageWithOptions($request, $runtime);
    }

    /**
     * @param SearchTraceAppByNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchTraceAppByNameResponse
     */
    public function searchTraceAppByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->traceAppName)) {
            $query['TraceAppName'] = $request->traceAppName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTraceAppByName',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTraceAppByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTraceAppByNameRequest $request
     *
     * @return SearchTraceAppByNameResponse
     */
    public function searchTraceAppByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTraceAppByNameWithOptions($request, $runtime);
    }

    /**
     * @param SearchTraceAppByPageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchTraceAppByPageResponse
     */
    public function searchTraceAppByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->traceAppName)) {
            $query['TraceAppName'] = $request->traceAppName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTraceAppByPage',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTraceAppByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTraceAppByPageRequest $request
     *
     * @return SearchTraceAppByPageResponse
     */
    public function searchTraceAppByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTraceAppByPageWithOptions($request, $runtime);
    }

    /**
     * @param SearchTracesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchTracesResponse
     */
    public function searchTracesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->exclusionFilters)) {
            $query['ExclusionFilters'] = $request->exclusionFilters;
        }
        if (!Utils::isUnset($request->minDuration)) {
            $query['MinDuration'] = $request->minDuration;
        }
        if (!Utils::isUnset($request->operationName)) {
            $query['OperationName'] = $request->operationName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->serviceIp)) {
            $query['ServiceIp'] = $request->serviceIp;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTraces',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTracesRequest $request
     *
     * @return SearchTracesResponse
     */
    public function searchTraces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesWithOptions($request, $runtime);
    }

    /**
     * @param SearchTracesByPageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchTracesByPageResponse
     */
    public function searchTracesByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->exclusionFilters)) {
            $query['ExclusionFilters'] = $request->exclusionFilters;
        }
        if (!Utils::isUnset($request->minDuration)) {
            $query['MinDuration'] = $request->minDuration;
        }
        if (!Utils::isUnset($request->operationName)) {
            $query['OperationName'] = $request->operationName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->serviceIp)) {
            $query['ServiceIp'] = $request->serviceIp;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTracesByPage',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTracesByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTracesByPageRequest $request
     *
     * @return SearchTracesByPageResponse
     */
    public function searchTracesByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesByPageWithOptions($request, $runtime);
    }

    /**
     * @param SendCustomIncidentsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SendCustomIncidentsResponse
     */
    public function sendCustomIncidentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->incidents)) {
            $query['Incidents'] = $request->incidents;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendCustomIncidents',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCustomIncidentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendCustomIncidentsRequest $request
     *
     * @return SendCustomIncidentsResponse
     */
    public function sendCustomIncidents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCustomIncidentsWithOptions($request, $runtime);
    }

    /**
     * @param SendMseIncidentRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SendMseIncidentResponse
     */
    public function sendMseIncidentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->incidents)) {
            $query['Incidents'] = $request->incidents;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendMseIncident',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendMseIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendMseIncidentRequest $request
     *
     * @return SendMseIncidentResponse
     */
    public function sendMseIncident($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMseIncidentWithOptions($request, $runtime);
    }

    /**
     * @param SetRetcodeShareStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetRetcodeShareStatusResponse
     */
    public function setRetcodeShareStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetRetcodeShareStatus',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetRetcodeShareStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetRetcodeShareStatusRequest $request
     *
     * @return SetRetcodeShareStatusResponse
     */
    public function setRetcodeShareStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRetcodeShareStatusWithOptions($request, $runtime);
    }

    /**
     * @param StartAlertRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StartAlertResponse
     */
    public function startAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAlert',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartAlertRequest $request
     *
     * @return StartAlertResponse
     */
    public function startAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAlertWithOptions($request, $runtime);
    }

    /**
     * @param StopAlertRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopAlertResponse
     */
    public function stopAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAlert',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopAlertRequest $request
     *
     * @return StopAlertResponse
     */
    public function stopAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAlertWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAlertContactResponse
     */
    public function updateAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->dingRobotWebhookUrl)) {
            $query['DingRobotWebhookUrl'] = $request->dingRobotWebhookUrl;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['PhoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->systemNoc)) {
            $query['SystemNoc'] = $request->systemNoc;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertContact',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAlertContactRequest $request
     *
     * @return UpdateAlertContactResponse
     */
    public function updateAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAlertContactGroupResponse
     */
    public function updateAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupId)) {
            $query['ContactGroupId'] = $request->contactGroupId;
        }
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertContactGroup',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAlertContactGroupRequest $request
     *
     * @return UpdateAlertContactGroupResponse
     */
    public function updateAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAlertRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAlertRuleResponse
     */
    public function updateAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->contactGroupIds)) {
            $query['ContactGroupIds'] = $request->contactGroupIds;
        }
        if (!Utils::isUnset($request->isAutoStart)) {
            $query['IsAutoStart'] = $request->isAutoStart;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templageAlertConfig)) {
            $query['TemplageAlertConfig'] = $request->templageAlertConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAlertRuleRequest $request
     *
     * @return UpdateAlertRuleResponse
     */
    public function updateAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAlertTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAlertTemplateResponse
     */
    public function updateAlertTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->annotations)) {
            $query['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->matchExpressions)) {
            $query['MatchExpressions'] = $request->matchExpressions;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertTemplate',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlertTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAlertTemplateRequest $request
     *
     * @return UpdateAlertTemplateResponse
     */
    public function updateAlertTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDispatchRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDispatchRuleResponse
     */
    public function updateDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dispatchRule)) {
            $query['DispatchRule'] = $request->dispatchRule;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDispatchRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDispatchRuleRequest $request
     *
     * @return UpdateDispatchRuleResponse
     */
    public function updateDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePrometheusAlertRuleResponse
     */
    public function updatePrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->alertName)) {
            $query['AlertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->annotations)) {
            $query['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dispatchRuleId)) {
            $query['DispatchRuleId'] = $request->dispatchRuleId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $query['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrometheusAlertRule',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePrometheusAlertRuleRequest $request
     *
     * @return UpdatePrometheusAlertRuleResponse
     */
    public function updatePrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWebhookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateWebhookResponse
     */
    public function updateWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->httpHeaders)) {
            $query['HttpHeaders'] = $request->httpHeaders;
        }
        if (!Utils::isUnset($request->httpParams)) {
            $query['HttpParams'] = $request->httpParams;
        }
        if (!Utils::isUnset($request->method)) {
            $query['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebhook',
            'version'     => '2021-04-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWebhookRequest $request
     *
     * @return UpdateWebhookResponse
     */
    public function updateWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWebhookWithOptions($request, $runtime);
    }
}
