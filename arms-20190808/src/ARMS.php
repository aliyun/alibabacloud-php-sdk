<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddGrafanaRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddGrafanaResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ApplyScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ApplyScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ApplyScenarioShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckDataConsistencyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckDataConsistencyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceLinkedRoleForDeletingRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceLinkedRoleForDeletingResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ConfigAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ConfigAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateWehookRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateWehookResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLicenseKeyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLicenseKeyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLocationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLocationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ExportPrometheusRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ExportPrometheusRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppApiByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppApiByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetConsistencySnapshotRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetConsistencySnapshotResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetIntegrationTokenRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetIntegrationTokenResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusApiTokenRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusApiTokenResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeShareUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeShareUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportCustomAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportCustomAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportPrometheusRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportPrometheusRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPromClustersRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPromClustersResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTraceAppsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTraceAppsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenArmsServiceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenArmsServiceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryDatasetRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryDatasetResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SaveTraceAppConfigRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SaveTraceAppConfigResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SendCustomIncidentsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SendCustomIncidentsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SendMseIncidentRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SendMseIncidentResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SetRetcodeShareStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SetRetcodeShareStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StartAlertRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StartAlertResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopAlertRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopAlertResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateWebhookRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateWebhookResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class ARMS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'arms.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'arms.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'arms.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'arms.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'arms.ap-southeast-1.aliyuncs.com',
            'cn-chengdu'            => 'arms.aliyuncs.com',
            'cn-huhehaote'          => 'arms.aliyuncs.com',
            'eu-central-1'          => 'arms.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'arms.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'arms.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'arms.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'arms.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'arms.aliyuncs.com',
            'cn-shanghai-finance-1' => 'arms.aliyuncs.com',
            'cn-north-2-gov-1'      => 'arms.aliyuncs.com',
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGrafanaResponse::fromMap($this->doRPCRequest('AddGrafana', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddIntegrationResponse::fromMap($this->doRPCRequest('AddIntegration', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyScenarioResponse::fromMap($this->doRPCRequest('ApplyScenario', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDataConsistencyResponse::fromMap($this->doRPCRequest('CheckDataConsistency', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckServiceLinkedRoleForDeletingResponse::fromMap($this->doRPCRequest('CheckServiceLinkedRoleForDeleting', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ConfigAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ConfigAppResponse
     */
    public function configAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigAppResponse::fromMap($this->doRPCRequest('ConfigApp', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAlertContactResponse::fromMap($this->doRPCRequest('CreateAlertContact', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAlertContactGroupResponse::fromMap($this->doRPCRequest('CreateAlertContactGroup', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateRetcodeAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRetcodeAppResponse
     */
    public function createRetcodeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRetcodeAppResponse::fromMap($this->doRPCRequest('CreateRetcodeApp', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWehookResponse::fromMap($this->doRPCRequest('CreateWehook', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAlertContactResponse::fromMap($this->doRPCRequest('DeleteAlertContact', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAlertContactGroupResponse::fromMap($this->doRPCRequest('DeleteAlertContactGroup', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAlertRulesResponse::fromMap($this->doRPCRequest('DeleteAlertRules', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteRetcodeAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRetcodeAppResponse
     */
    public function deleteRetcodeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRetcodeAppResponse::fromMap($this->doRPCRequest('DeleteRetcodeApp', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteScenarioResponse::fromMap($this->doRPCRequest('DeleteScenario', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTraceAppResponse::fromMap($this->doRPCRequest('DeleteTraceApp', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDispatchRuleResponse::fromMap($this->doRPCRequest('DescribeDispatchRule', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeTraceLicenseKeyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTraceLicenseKeyResponse
     */
    public function describeTraceLicenseKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTraceLicenseKeyResponse::fromMap($this->doRPCRequest('DescribeTraceLicenseKey', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTraceLocationResponse::fromMap($this->doRPCRequest('DescribeTraceLocation', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ExportPrometheusRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportPrometheusRulesResponse
     */
    public function exportPrometheusRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExportPrometheusRulesResponse::fromMap($this->doRPCRequest('ExportPrometheusRules', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return GetAgentDownloadUrlResponse::fromMap($this->doRPCRequest('GetAgentDownloadUrl', '2019-08-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAppApiByPageResponse::fromMap($this->doRPCRequest('GetAppApiByPage', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConsistencySnapshotResponse::fromMap($this->doRPCRequest('GetConsistencySnapshot', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetIntegrationTokenResponse::fromMap($this->doRPCRequest('GetIntegrationToken', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMultipleTraceResponse::fromMap($this->doRPCRequest('GetMultipleTrace', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPrometheusApiTokenResponse::fromMap($this->doRPCRequest('GetPrometheusApiToken', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRetcodeShareUrlResponse::fromMap($this->doRPCRequest('GetRetcodeShareUrl', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStackResponse::fromMap($this->doRPCRequest('GetStack', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTraceResponse::fromMap($this->doRPCRequest('GetTrace', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTraceAppResponse::fromMap($this->doRPCRequest('GetTraceApp', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportAppAlertRulesResponse::fromMap($this->doRPCRequest('ImportAppAlertRules', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportCustomAlertRulesResponse::fromMap($this->doRPCRequest('ImportCustomAlertRules', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportPrometheusRulesResponse::fromMap($this->doRPCRequest('ImportPrometheusRules', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListClusterFromGrafanaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafanaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterFromGrafanaResponse::fromMap($this->doRPCRequest('ListClusterFromGrafana', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDashboardsResponse::fromMap($this->doRPCRequest('ListDashboards', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListPromClustersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListPromClustersResponse
     */
    public function listPromClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPromClustersResponse::fromMap($this->doRPCRequest('ListPromClusters', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListRetcodeAppsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRetcodeAppsResponse
     */
    public function listRetcodeAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRetcodeAppsResponse::fromMap($this->doRPCRequest('ListRetcodeApps', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScenarioResponse::fromMap($this->doRPCRequest('ListScenario', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTraceAppsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTraceAppsResponse
     */
    public function listTraceAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTraceAppsResponse::fromMap($this->doRPCRequest('ListTraceApps', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OpenArmsServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenArmsServiceResponse
     */
    public function openArmsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenArmsServiceResponse::fromMap($this->doRPCRequest('OpenArmsService', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDatasetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryDatasetResponse
     */
    public function queryDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDatasetResponse::fromMap($this->doRPCRequest('QueryDataset', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMetricResponse::fromMap($this->doRPCRequest('QueryMetric', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMetricByPageResponse::fromMap($this->doRPCRequest('QueryMetricByPage', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTraceAppConfigResponse::fromMap($this->doRPCRequest('SaveTraceAppConfig', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchAlertContactResponse::fromMap($this->doRPCRequest('SearchAlertContact', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchAlertContactGroupResponse::fromMap($this->doRPCRequest('SearchAlertContactGroup', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchAlertHistoriesResponse::fromMap($this->doRPCRequest('SearchAlertHistories', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchAlertRulesResponse::fromMap($this->doRPCRequest('SearchAlertRules', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchEventsResponse::fromMap($this->doRPCRequest('SearchEvents', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchRetcodeAppByPageResponse::fromMap($this->doRPCRequest('SearchRetcodeAppByPage', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchTraceAppByNameResponse::fromMap($this->doRPCRequest('SearchTraceAppByName', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchTraceAppByPageResponse::fromMap($this->doRPCRequest('SearchTraceAppByPage', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchTracesResponse::fromMap($this->doRPCRequest('SearchTraces', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchTracesByPageResponse::fromMap($this->doRPCRequest('SearchTracesByPage', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendCustomIncidentsResponse::fromMap($this->doRPCRequest('SendCustomIncidents', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendMseIncidentResponse::fromMap($this->doRPCRequest('SendMseIncident', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetRetcodeShareStatusResponse::fromMap($this->doRPCRequest('SetRetcodeShareStatus', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartAlertResponse::fromMap($this->doRPCRequest('StartAlert', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopAlertResponse::fromMap($this->doRPCRequest('StopAlert', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAlertContactResponse::fromMap($this->doRPCRequest('UpdateAlertContact', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAlertContactGroupResponse::fromMap($this->doRPCRequest('UpdateAlertContactGroup', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAlertRuleResponse::fromMap($this->doRPCRequest('UpdateAlertRule', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateWebhookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateWebhookResponse
     */
    public function updateWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateWebhookResponse::fromMap($this->doRPCRequest('UpdateWebhook', '2019-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
