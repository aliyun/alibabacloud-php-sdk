<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAggTaskGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusVirtualInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusVirtualInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataHeaders;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonReleasesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonReleasesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyPodMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyPodMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusDashboardsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusDashboardsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusInstancesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusInstancesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusInstancesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusViewsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusViewsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusViewsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusVirtualInstancesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusVirtualInstancesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupStatusRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupStatusResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelDataResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 安装接入组件，代表进行一次接入.
     *
     * @param request - CreateAddonReleaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAddonReleaseResponse
     *
     * @param string                    $policyId
     * @param CreateAddonReleaseRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAddonReleaseResponse
     */
    public function createAddonReleaseWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addonName) {
            @$body['addonName'] = $request->addonName;
        }

        if (null !== $request->aliyunLang) {
            @$body['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->entityRules) {
            @$body['entityRules'] = $request->entityRules;
        }

        if (null !== $request->envType) {
            @$body['envType'] = $request->envType;
        }

        if (null !== $request->parentAddonReleaseId) {
            @$body['parentAddonReleaseId'] = $request->parentAddonReleaseId;
        }

        if (null !== $request->releaseName) {
            @$body['releaseName'] = $request->releaseName;
        }

        if (null !== $request->values) {
            @$body['values'] = $request->values;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAddonRelease',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 安装接入组件，代表进行一次接入.
     *
     * @param request - CreateAddonReleaseRequest
     *
     * @returns CreateAddonReleaseResponse
     *
     * @param string                    $policyId
     * @param CreateAddonReleaseRequest $request
     *
     * @return CreateAddonReleaseResponse
     */
    public function createAddonRelease($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAddonReleaseWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * 创建聚合任务组.
     *
     * @param request - CreateAggTaskGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param CreateAggTaskGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAggTaskGroupResponse
     */
    public function createAggTaskGroupWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->overrideIfExists) {
            @$query['overrideIfExists'] = $request->overrideIfExists;
        }

        $body = [];
        if (null !== $request->aggTaskGroupConfig) {
            @$body['aggTaskGroupConfig'] = $request->aggTaskGroupConfig;
        }

        if (null !== $request->aggTaskGroupConfigType) {
            @$body['aggTaskGroupConfigType'] = $request->aggTaskGroupConfigType;
        }

        if (null !== $request->aggTaskGroupName) {
            @$body['aggTaskGroupName'] = $request->aggTaskGroupName;
        }

        if (null !== $request->cronExpr) {
            @$body['cronExpr'] = $request->cronExpr;
        }

        if (null !== $request->delay) {
            @$body['delay'] = $request->delay;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->fromTime) {
            @$body['fromTime'] = $request->fromTime;
        }

        if (null !== $request->maxRetries) {
            @$body['maxRetries'] = $request->maxRetries;
        }

        if (null !== $request->maxRunTimeInSeconds) {
            @$body['maxRunTimeInSeconds'] = $request->maxRunTimeInSeconds;
        }

        if (null !== $request->precheckString) {
            @$body['precheckString'] = $request->precheckString;
        }

        if (null !== $request->scheduleMode) {
            @$body['scheduleMode'] = $request->scheduleMode;
        }

        if (null !== $request->scheduleTimeExpr) {
            @$body['scheduleTimeExpr'] = $request->scheduleTimeExpr;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->targetPrometheusId) {
            @$body['targetPrometheusId'] = $request->targetPrometheusId;
        }

        if (null !== $request->toTime) {
            @$body['toTime'] = $request->toTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAggTaskGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAggTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建聚合任务组.
     *
     * @param request - CreateAggTaskGroupRequest
     *
     * @returns CreateAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param CreateAggTaskGroupRequest $request
     *
     * @return CreateAggTaskGroupResponse
     */
    public function createAggTaskGroup($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAggTaskGroupWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 创建EntityStore相关存储.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEntityStoreResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateEntityStoreResponse
     */
    public function createEntityStoreWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateEntityStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '/entitystore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建EntityStore相关存储.
     *
     * @returns CreateEntityStoreResponse
     *
     * @param string $workspaceName
     *
     * @return CreateEntityStoreResponse
     */
    public function createEntityStore($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEntityStoreWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * 创建接入中心策略.
     *
     * @param request - CreateIntegrationPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIntegrationPolicyResponse
     *
     * @param CreateIntegrationPolicyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateIntegrationPolicyResponse
     */
    public function createIntegrationPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->entityGroup) {
            @$body['entityGroup'] = $request->entityGroup;
        }

        if (null !== $request->policyName) {
            @$body['policyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$body['policyType'] = $request->policyType;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIntegrationPolicy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIntegrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建接入中心策略.
     *
     * @param request - CreateIntegrationPolicyRequest
     *
     * @returns CreateIntegrationPolicyResponse
     *
     * @param CreateIntegrationPolicyRequest $request
     *
     * @return CreateIntegrationPolicyResponse
     */
    public function createIntegrationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIntegrationPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建Prometheus监控实例.
     *
     * @param request - CreatePrometheusInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrometheusInstanceResponse
     *
     * @param CreatePrometheusInstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->archiveDuration) {
            @$body['archiveDuration'] = $request->archiveDuration;
        }

        if (null !== $request->authFreeReadPolicy) {
            @$body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->authFreeWritePolicy) {
            @$body['authFreeWritePolicy'] = $request->authFreeWritePolicy;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthFreeWrite) {
            @$body['enableAuthFreeWrite'] = $request->enableAuthFreeWrite;
        }

        if (null !== $request->enableAuthToken) {
            @$body['enableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->prometheusInstanceName) {
            @$body['prometheusInstanceName'] = $request->prometheusInstanceName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->storageDuration) {
            @$body['storageDuration'] = $request->storageDuration;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrometheusInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Prometheus监控实例.
     *
     * @param request - CreatePrometheusInstanceRequest
     *
     * @returns CreatePrometheusInstanceResponse
     *
     * @param CreatePrometheusInstanceRequest $request
     *
     * @return CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrometheusInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建prometheus视图.
     *
     * @param request - CreatePrometheusViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrometheusViewResponse
     *
     * @param CreatePrometheusViewRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePrometheusViewResponse
     */
    public function createPrometheusViewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authFreeReadPolicy) {
            @$body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthToken) {
            @$body['enableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->prometheusInstances) {
            @$body['prometheusInstances'] = $request->prometheusInstances;
        }

        if (null !== $request->prometheusViewName) {
            @$body['prometheusViewName'] = $request->prometheusViewName;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrometheusView',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePrometheusViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建prometheus视图.
     *
     * @param request - CreatePrometheusViewRequest
     *
     * @returns CreatePrometheusViewResponse
     *
     * @param CreatePrometheusViewRequest $request
     *
     * @return CreatePrometheusViewResponse
     */
    public function createPrometheusView($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrometheusViewWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建Prometheus监控实例.
     *
     * @param request - CreatePrometheusVirtualInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrometheusVirtualInstanceResponse
     *
     * @param CreatePrometheusVirtualInstanceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreatePrometheusVirtualInstanceResponse
     */
    public function createPrometheusVirtualInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->namespace) {
            @$body['namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrometheusVirtualInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/virtual-instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePrometheusVirtualInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Prometheus监控实例.
     *
     * @param request - CreatePrometheusVirtualInstanceRequest
     *
     * @returns CreatePrometheusVirtualInstanceResponse
     *
     * @param CreatePrometheusVirtualInstanceRequest $request
     *
     * @return CreatePrometheusVirtualInstanceResponse
     */
    public function createPrometheusVirtualInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrometheusVirtualInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建Service.
     *
     * @param request - CreateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceResponse
     *
     * @param string               $workspace
     * @param CreateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['attributes'] = $request->attributes;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->pid) {
            @$body['pid'] = $request->pid;
        }

        if (null !== $request->serviceName) {
            @$body['serviceName'] = $request->serviceName;
        }

        if (null !== $request->serviceStatus) {
            @$body['serviceStatus'] = $request->serviceStatus;
        }

        if (null !== $request->serviceType) {
            @$body['serviceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Service.
     *
     * @param request - CreateServiceRequest
     *
     * @returns CreateServiceResponse
     *
     * @param string               $workspace
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 创建票据.
     *
     * @param request - CreateTicketRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessTokenExpirationTime) {
            @$query['accessTokenExpirationTime'] = $request->accessTokenExpirationTime;
        }

        if (null !== $request->expirationTime) {
            @$query['expirationTime'] = $request->expirationTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTicket',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tickets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建票据.
     *
     * @param request - CreateTicketRequest
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     *
     * @return CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建Umodel配置.
     *
     * @param request - CreateUmodelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUmodelResponse
     *
     * @param string              $workspace
     * @param CreateUmodelRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateUmodelResponse
     */
    public function createUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Umodel配置.
     *
     * @param request - CreateUmodelRequest
     *
     * @returns CreateUmodelResponse
     *
     * @param string              $workspace
     * @param CreateUmodelRequest $request
     *
     * @return CreateUmodelResponse
     */
    public function createUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 删除addon release信息.
     *
     * @param request - DeleteAddonReleaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAddonReleaseResponse
     *
     * @param string                    $policyId
     * @param DeleteAddonReleaseRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAddonReleaseResponse
     */
    public function deleteAddonReleaseWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        if (null !== $request->releaseName) {
            @$query['releaseName'] = $request->releaseName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAddonRelease',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除addon release信息.
     *
     * @param request - DeleteAddonReleaseRequest
     *
     * @returns DeleteAddonReleaseResponse
     *
     * @param string                    $policyId
     * @param DeleteAddonReleaseRequest $request
     *
     * @return DeleteAddonReleaseResponse
     */
    public function deleteAddonRelease($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAddonReleaseWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * 删除聚合任务组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAggTaskGroupResponse
     *
     * @param string         $instanceId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAggTaskGroupResponse
     */
    public function deleteAggTaskGroupWithOptions($instanceId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAggTaskGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAggTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除聚合任务组.
     *
     * @returns DeleteAggTaskGroupResponse
     *
     * @param string $instanceId
     * @param string $groupId
     *
     * @return DeleteAggTaskGroupResponse
     */
    public function deleteAggTaskGroup($instanceId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAggTaskGroupWithOptions($instanceId, $groupId, $headers, $runtime);
    }

    /**
     * 删除EntityStore相关存储.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEntityStoreResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEntityStoreResponse
     */
    public function deleteEntityStoreWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEntityStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '/entitystore',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除EntityStore相关存储.
     *
     * @returns DeleteEntityStoreResponse
     *
     * @param string $workspaceName
     *
     * @return DeleteEntityStoreResponse
     */
    public function deleteEntityStore($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEntityStoreWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * 删除接入中心策略.
     *
     * @param request - DeleteIntegrationPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIntegrationPolicyResponse
     *
     * @param string                         $policyId
     * @param DeleteIntegrationPolicyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteIntegrationPolicyResponse
     */
    public function deleteIntegrationPolicyWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIntegrationPolicy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIntegrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除接入中心策略.
     *
     * @param request - DeleteIntegrationPolicyRequest
     *
     * @returns DeleteIntegrationPolicyResponse
     *
     * @param string                         $policyId
     * @param DeleteIntegrationPolicyRequest $request
     *
     * @return DeleteIntegrationPolicyResponse
     */
    public function deleteIntegrationPolicy($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIntegrationPolicyWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * 删除prom实例.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrometheusInstanceResponse
     *
     * @param string         $prometheusInstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePrometheusInstanceResponse
     */
    public function deletePrometheusInstanceWithOptions($prometheusInstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePrometheusInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($prometheusInstanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除prom实例.
     *
     * @returns DeletePrometheusInstanceResponse
     *
     * @param string $prometheusInstanceId
     *
     * @return DeletePrometheusInstanceResponse
     */
    public function deletePrometheusInstance($prometheusInstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePrometheusInstanceWithOptions($prometheusInstanceId, $headers, $runtime);
    }

    /**
     * 删除prometheus视图实例.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrometheusViewResponse
     *
     * @param string         $prometheusViewId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePrometheusViewResponse
     */
    public function deletePrometheusViewWithOptions($prometheusViewId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePrometheusView',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views/' . Url::percentEncode($prometheusViewId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePrometheusViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除prometheus视图实例.
     *
     * @returns DeletePrometheusViewResponse
     *
     * @param string $prometheusViewId
     *
     * @return DeletePrometheusViewResponse
     */
    public function deletePrometheusView($prometheusViewId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePrometheusViewWithOptions($prometheusViewId, $headers, $runtime);
    }

    /**
     * 删除Service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceResponse
     *
     * @param string         $workspace
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($workspace, $serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Service.
     *
     * @returns DeleteServiceResponse
     *
     * @param string $workspace
     * @param string $serviceId
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($workspace, $serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($workspace, $serviceId, $headers, $runtime);
    }

    /**
     * 删除Umodel配置信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUmodelResponse
     *
     * @param string         $workspace
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteUmodelResponse
     */
    public function deleteUmodelWithOptions($workspace, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Umodel配置信息.
     *
     * @returns DeleteUmodelResponse
     *
     * @param string $workspace
     *
     * @return DeleteUmodelResponse
     */
    public function deleteUmodel($workspace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelWithOptions($workspace, $headers, $runtime);
    }

    /**
     * 删除 Umodel Elements.
     *
     * @param request - DeleteUmodelDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUmodelDataResponse
     *
     * @param string                  $workspace
     * @param DeleteUmodelDataRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteUmodelDataResponse
     */
    public function deleteUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['domain'] = $request->domain;
        }

        if (null !== $request->kind) {
            @$query['kind'] = $request->kind;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/data',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 Umodel Elements.
     *
     * @param request - DeleteUmodelDataRequest
     *
     * @returns DeleteUmodelDataResponse
     *
     * @param string                  $workspace
     * @param DeleteUmodelDataRequest $request
     *
     * @return DeleteUmodelDataResponse
     */
    public function deleteUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 删除工作空间.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除工作空间.
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string $workspaceName
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * 查看addon release(查看接入状态).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAddonReleaseResponse
     *
     * @param string         $releaseName
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAddonReleaseResponse
     */
    public function getAddonReleaseWithOptions($releaseName, $policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAddonRelease',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases/' . Url::percentEncode($releaseName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看addon release(查看接入状态).
     *
     * @returns GetAddonReleaseResponse
     *
     * @param string $releaseName
     * @param string $policyId
     *
     * @return GetAddonReleaseResponse
     */
    public function getAddonRelease($releaseName, $policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAddonReleaseWithOptions($releaseName, $policyId, $headers, $runtime);
    }

    /**
     * 描述聚合任务组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAggTaskGroupResponse
     *
     * @param string         $instanceId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAggTaskGroupResponse
     */
    public function getAggTaskGroupWithOptions($instanceId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAggTaskGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAggTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 描述聚合任务组.
     *
     * @returns GetAggTaskGroupResponse
     *
     * @param string $instanceId
     * @param string $groupId
     *
     * @return GetAggTaskGroupResponse
     */
    public function getAggTaskGroup($instanceId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAggTaskGroupWithOptions($instanceId, $groupId, $headers, $runtime);
    }

    /**
     * 获取EntityStore相关存储信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEntityStoreResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEntityStoreResponse
     */
    public function getEntityStoreWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEntityStore',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '/entitystore',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEntityStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取EntityStore相关存储信息.
     *
     * @returns GetEntityStoreResponse
     *
     * @param string $workspaceName
     *
     * @return GetEntityStoreResponse
     */
    public function getEntityStore($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEntityStoreWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * 查询指定Workspace下的实体和关系数据，返回结果显示某时间区间中的实体数据（返回结果压缩后传输）。
     *
     * @param request - GetEntityStoreDataRequest
     * @param headers - GetEntityStoreDataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEntityStoreDataResponse
     *
     * @param string                    $workspace
     * @param GetEntityStoreDataRequest $request
     * @param GetEntityStoreDataHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetEntityStoreDataResponse
     */
    public function getEntityStoreDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->from) {
            @$body['from'] = $request->from;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->to) {
            @$body['to'] = $request->to;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->acceptEncoding) {
            @$realHeaders['acceptEncoding'] = '' . $headers->acceptEncoding;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEntityStoreData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/entitiesAndRelations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEntityStoreDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定Workspace下的实体和关系数据，返回结果显示某时间区间中的实体数据（返回结果压缩后传输）。
     *
     * @param request - GetEntityStoreDataRequest
     *
     * @returns GetEntityStoreDataResponse
     *
     * @param string                    $workspace
     * @param GetEntityStoreDataRequest $request
     *
     * @return GetEntityStoreDataResponse
     */
    public function getEntityStoreData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetEntityStoreDataHeaders([]);

        return $this->getEntityStoreDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 查询接入中心策略列表信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIntegrationPolicyResponse
     *
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIntegrationPolicyResponse
     */
    public function getIntegrationPolicyWithOptions($policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIntegrationPolicy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIntegrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询接入中心策略列表信息.
     *
     * @returns GetIntegrationPolicyResponse
     *
     * @param string $policyId
     *
     * @return GetIntegrationPolicyResponse
     */
    public function getIntegrationPolicy($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIntegrationPolicyWithOptions($policyId, $headers, $runtime);
    }

    /**
     * 查询指定环境实例.
     *
     * @param request - GetPrometheusInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrometheusInstanceResponse
     *
     * @param string                       $prometheusInstanceId
     * @param GetPrometheusInstanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetPrometheusInstanceResponse
     */
    public function getPrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrometheusInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($prometheusInstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定环境实例.
     *
     * @param request - GetPrometheusInstanceRequest
     *
     * @returns GetPrometheusInstanceResponse
     *
     * @param string                       $prometheusInstanceId
     * @param GetPrometheusInstanceRequest $request
     *
     * @return GetPrometheusInstanceResponse
     */
    public function getPrometheusInstance($prometheusInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime);
    }

    /**
     * 查询指定Prometheus视图实例.
     *
     * @param request - GetPrometheusViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrometheusViewResponse
     *
     * @param string                   $prometheusViewId
     * @param GetPrometheusViewRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetPrometheusViewResponse
     */
    public function getPrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrometheusView',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views/' . Url::percentEncode($prometheusViewId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPrometheusViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定Prometheus视图实例.
     *
     * @param request - GetPrometheusViewRequest
     *
     * @returns GetPrometheusViewResponse
     *
     * @param string                   $prometheusViewId
     * @param GetPrometheusViewRequest $request
     *
     * @return GetPrometheusViewResponse
     */
    public function getPrometheusView($prometheusViewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime);
    }

    /**
     * 查询 Service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceResponse
     *
     * @param string         $workspace
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($workspace, $serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 Service.
     *
     * @returns GetServiceResponse
     *
     * @param string $workspace
     * @param string $serviceId
     *
     * @return GetServiceResponse
     */
    public function getService($workspace, $serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($workspace, $serviceId, $headers, $runtime);
    }

    /**
     * 获取应用可观测实例.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceObservabilityResponse
     *
     * @param string         $workspace
     * @param string         $type
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetServiceObservabilityResponse
     */
    public function getServiceObservabilityWithOptions($workspace, $type, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetServiceObservability',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service-observability/' . Url::percentEncode($type) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetServiceObservabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用可观测实例.
     *
     * @returns GetServiceObservabilityResponse
     *
     * @param string $workspace
     * @param string $type
     *
     * @return GetServiceObservabilityResponse
     */
    public function getServiceObservability($workspace, $type)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceObservabilityWithOptions($workspace, $type, $headers, $runtime);
    }

    /**
     * 获取Umodel配置信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUmodelResponse
     *
     * @param string         $workspace
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUmodelResponse
     */
    public function getUmodelWithOptions($workspace, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Umodel配置信息.
     *
     * @returns GetUmodelResponse
     *
     * @param string $workspace
     *
     * @return GetUmodelResponse
     */
    public function getUmodel($workspace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelWithOptions($workspace, $headers, $runtime);
    }

    /**
     * 获取相关联的 Umodel 图数据.
     *
     * @param request - GetUmodelDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUmodelDataResponse
     *
     * @param string               $workspace
     * @param GetUmodelDataRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetUmodelDataResponse
     */
    public function getUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->method) {
            @$query['method'] = $request->method;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/graph',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取相关联的 Umodel 图数据.
     *
     * @param request - GetUmodelDataRequest
     *
     * @returns GetUmodelDataResponse
     *
     * @param string               $workspace
     * @param GetUmodelDataRequest $request
     *
     * @return GetUmodelDataResponse
     */
    public function getUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 获取工作空间.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceResponse
     *
     * @param string         $workspaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作空间.
     *
     * @returns GetWorkspaceResponse
     *
     * @param string $workspaceName
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($workspaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceName, $headers, $runtime);
    }

    /**
     * addon的release列表.
     *
     * @param request - ListAddonReleasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAddonReleasesResponse
     *
     * @param string                   $policyId
     * @param ListAddonReleasesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAddonReleasesResponse
     */
    public function listAddonReleasesWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->parentAddonReleaseId) {
            @$query['parentAddonReleaseId'] = $request->parentAddonReleaseId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAddonReleases',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAddonReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * addon的release列表.
     *
     * @param request - ListAddonReleasesRequest
     *
     * @returns ListAddonReleasesResponse
     *
     * @param string                   $policyId
     * @param ListAddonReleasesRequest $request
     *
     * @return ListAddonReleasesResponse
     */
    public function listAddonReleases($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAddonReleasesWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * 列举聚合任务组.
     *
     * @param tmpReq - ListAggTaskGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAggTaskGroupsResponse
     *
     * @param string                   $instanceId
     * @param ListAggTaskGroupsRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAggTaskGroupsResponse
     */
    public function listAggTaskGroupsWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAggTaskGroupsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->filterAggTaskGroupIds) {
            @$query['filterAggTaskGroupIds'] = $request->filterAggTaskGroupIds;
        }

        if (null !== $request->filterAggTaskGroupNames) {
            @$query['filterAggTaskGroupNames'] = $request->filterAggTaskGroupNames;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        if (null !== $request->targetPrometheusId) {
            @$query['targetPrometheusId'] = $request->targetPrometheusId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAggTaskGroups',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAggTaskGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举聚合任务组.
     *
     * @param request - ListAggTaskGroupsRequest
     *
     * @returns ListAggTaskGroupsResponse
     *
     * @param string                   $instanceId
     * @param ListAggTaskGroupsRequest $request
     *
     * @return ListAggTaskGroupsResponse
     */
    public function listAggTaskGroups($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAggTaskGroupsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 查询告警动作.
     *
     * @param tmpReq - ListAlertActionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertActionsResponse
     *
     * @param ListAlertActionsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListAlertActionsResponse
     */
    public function listAlertActionsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAlertActionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->alertActionIds) {
            $request->alertActionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alertActionIds, 'alertActionIds', 'json');
        }

        $query = [];
        if (null !== $request->alertActionIdsShrink) {
            @$query['alertActionIds'] = $request->alertActionIdsShrink;
        }

        if (null !== $request->alertActionName) {
            @$query['alertActionName'] = $request->alertActionName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
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
            'action' => 'ListAlertActions',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alertActions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询告警动作.
     *
     * @param request - ListAlertActionsRequest
     *
     * @returns ListAlertActionsResponse
     *
     * @param ListAlertActionsRequest $request
     *
     * @return ListAlertActionsResponse
     */
    public function listAlertActions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertActionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取接入中心策略的存储要求信息.
     *
     * @param request - ListIntegrationPolicyCustomScrapeJobRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyCustomScrapeJobRulesResponse
     *
     * @param string                                           $policyId
     * @param ListIntegrationPolicyCustomScrapeJobRulesRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return ListIntegrationPolicyCustomScrapeJobRulesResponse
     */
    public function listIntegrationPolicyCustomScrapeJobRulesWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonReleaseName) {
            @$query['addonReleaseName'] = $request->addonReleaseName;
        }

        if (null !== $request->encryptYaml) {
            @$query['encryptYaml'] = $request->encryptYaml;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyCustomScrapeJobRules',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/custom-scrape-job-rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyCustomScrapeJobRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取接入中心策略的存储要求信息.
     *
     * @param request - ListIntegrationPolicyCustomScrapeJobRulesRequest
     *
     * @returns ListIntegrationPolicyCustomScrapeJobRulesResponse
     *
     * @param string                                           $policyId
     * @param ListIntegrationPolicyCustomScrapeJobRulesRequest $request
     *
     * @return ListIntegrationPolicyCustomScrapeJobRulesResponse
     */
    public function listIntegrationPolicyCustomScrapeJobRules($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyCustomScrapeJobRulesWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * 获取接入中心策略的PodMonitor资源.
     *
     * @param request - ListIntegrationPolicyPodMonitorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyPodMonitorsResponse
     *
     * @param string                                  $policyId
     * @param ListIntegrationPolicyPodMonitorsRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListIntegrationPolicyPodMonitorsResponse
     */
    public function listIntegrationPolicyPodMonitorsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonReleaseName) {
            @$query['addonReleaseName'] = $request->addonReleaseName;
        }

        if (null !== $request->encryptYaml) {
            @$query['encryptYaml'] = $request->encryptYaml;
        }

        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyPodMonitors',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/pod-monitors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyPodMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取接入中心策略的PodMonitor资源.
     *
     * @param request - ListIntegrationPolicyPodMonitorsRequest
     *
     * @returns ListIntegrationPolicyPodMonitorsResponse
     *
     * @param string                                  $policyId
     * @param ListIntegrationPolicyPodMonitorsRequest $request
     *
     * @return ListIntegrationPolicyPodMonitorsResponse
     */
    public function listIntegrationPolicyPodMonitors($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyPodMonitorsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * 获取接入中心策略的存储要求信息.
     *
     * @param request - ListIntegrationPolicyStorageRequirementsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyStorageRequirementsResponse
     *
     * @param string                                          $policyId
     * @param ListIntegrationPolicyStorageRequirementsRequest $request
     * @param string[]                                        $headers
     * @param RuntimeOptions                                  $runtime
     *
     * @return ListIntegrationPolicyStorageRequirementsResponse
     */
    public function listIntegrationPolicyStorageRequirementsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->addonReleaseName) {
            @$query['addonReleaseName'] = $request->addonReleaseName;
        }

        if (null !== $request->storageType) {
            @$query['storageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyStorageRequirements',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/storage-requirements',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyStorageRequirementsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取接入中心策略的存储要求信息.
     *
     * @param request - ListIntegrationPolicyStorageRequirementsRequest
     *
     * @returns ListIntegrationPolicyStorageRequirementsResponse
     *
     * @param string                                          $policyId
     * @param ListIntegrationPolicyStorageRequirementsRequest $request
     *
     * @return ListIntegrationPolicyStorageRequirementsResponse
     */
    public function listIntegrationPolicyStorageRequirements($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyStorageRequirementsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * 获取Prometheus实例大盘列表.
     *
     * @param request - ListPrometheusDashboardsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrometheusDashboardsResponse
     *
     * @param string                          $prometheusInstanceId
     * @param ListPrometheusDashboardsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrometheusDashboardsResponse
     */
    public function listPrometheusDashboardsWithOptions($prometheusInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrometheusDashboards',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($prometheusInstanceId) . '/dashboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrometheusDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Prometheus实例大盘列表.
     *
     * @param request - ListPrometheusDashboardsRequest
     *
     * @returns ListPrometheusDashboardsResponse
     *
     * @param string                          $prometheusInstanceId
     * @param ListPrometheusDashboardsRequest $request
     *
     * @return ListPrometheusDashboardsResponse
     */
    public function listPrometheusDashboards($prometheusInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrometheusDashboardsWithOptions($prometheusInstanceId, $request, $headers, $runtime);
    }

    /**
     * 获取Prometheus实例信息列表.
     *
     * @param tmpReq - ListPrometheusInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrometheusInstancesResponse
     *
     * @param ListPrometheusInstancesRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPrometheusInstancesResponse
     */
    public function listPrometheusInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPrometheusInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->filterRegionIds) {
            @$query['filterRegionIds'] = $request->filterRegionIds;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->prometheusInstanceIds) {
            @$query['prometheusInstanceIds'] = $request->prometheusInstanceIds;
        }

        if (null !== $request->prometheusInstanceName) {
            @$query['prometheusInstanceName'] = $request->prometheusInstanceName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrometheusInstances',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrometheusInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Prometheus实例信息列表.
     *
     * @param request - ListPrometheusInstancesRequest
     *
     * @returns ListPrometheusInstancesResponse
     *
     * @param ListPrometheusInstancesRequest $request
     *
     * @return ListPrometheusInstancesResponse
     */
    public function listPrometheusInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrometheusInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取Prometheus视图实例信息列表.
     *
     * @param tmpReq - ListPrometheusViewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrometheusViewsResponse
     *
     * @param ListPrometheusViewsRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListPrometheusViewsResponse
     */
    public function listPrometheusViewsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPrometheusViewsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->filterRegionIds) {
            @$query['filterRegionIds'] = $request->filterRegionIds;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->prometheusViewIds) {
            @$query['prometheusViewIds'] = $request->prometheusViewIds;
        }

        if (null !== $request->prometheusViewName) {
            @$query['prometheusViewName'] = $request->prometheusViewName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrometheusViews',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrometheusViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Prometheus视图实例信息列表.
     *
     * @param request - ListPrometheusViewsRequest
     *
     * @returns ListPrometheusViewsResponse
     *
     * @param ListPrometheusViewsRequest $request
     *
     * @return ListPrometheusViewsResponse
     */
    public function listPrometheusViews($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrometheusViewsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取Prometheus虚拟实例.
     *
     * @param request - ListPrometheusVirtualInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrometheusVirtualInstancesResponse
     *
     * @param ListPrometheusVirtualInstancesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListPrometheusVirtualInstancesResponse
     */
    public function listPrometheusVirtualInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrometheusVirtualInstances',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/virtual-instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrometheusVirtualInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Prometheus虚拟实例.
     *
     * @param request - ListPrometheusVirtualInstancesRequest
     *
     * @returns ListPrometheusVirtualInstancesResponse
     *
     * @param ListPrometheusVirtualInstancesRequest $request
     *
     * @return ListPrometheusVirtualInstancesResponse
     */
    public function listPrometheusVirtualInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrometheusVirtualInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出资源Service.
     *
     * @param request - ListServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param string              $workspace
     * @param ListServicesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出资源Service.
     *
     * @param request - ListServicesRequest
     *
     * @returns ListServicesResponse
     *
     * @param string              $workspace
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 获取工作空间列表.
     *
     * @param tmpReq - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkspacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->workspaceNameList) {
            $request->workspaceNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workspaceNameList, 'workspaceNameList', 'simple');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->workspaceName) {
            @$query['workspaceName'] = $request->workspaceName;
        }

        if (null !== $request->workspaceNameListShrink) {
            @$query['workspaceNameList'] = $request->workspaceNameListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作空间列表.
     *
     * @param request - ListWorkspacesRequest
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建工作空间.
     *
     * @param request - PutWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param PutWorkspaceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PutWorkspaceResponse
     */
    public function putWorkspaceWithOptions($workspaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->slsProject) {
            @$body['slsProject'] = $request->slsProject;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutWorkspace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspaceName) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PutWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建工作空间.
     *
     * @param request - PutWorkspaceRequest
     *
     * @returns PutWorkspaceResponse
     *
     * @param string              $workspaceName
     * @param PutWorkspaceRequest $request
     *
     * @return PutWorkspaceResponse
     */
    public function putWorkspace($workspaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putWorkspaceWithOptions($workspaceName, $request, $headers, $runtime);
    }

    /**
     * 升级接入组件.
     *
     * @param request - UpdateAddonReleaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAddonReleaseResponse
     *
     * @param string                    $releaseName
     * @param string                    $policyId
     * @param UpdateAddonReleaseRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAddonReleaseResponse
     */
    public function updateAddonReleaseWithOptions($releaseName, $policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addonVersion) {
            @$body['addonVersion'] = $request->addonVersion;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->entityRules) {
            @$body['entityRules'] = $request->entityRules;
        }

        if (null !== $request->values) {
            @$body['values'] = $request->values;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAddonRelease',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addon-releases/' . Url::percentEncode($releaseName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 升级接入组件.
     *
     * @param request - UpdateAddonReleaseRequest
     *
     * @returns UpdateAddonReleaseResponse
     *
     * @param string                    $releaseName
     * @param string                    $policyId
     * @param UpdateAddonReleaseRequest $request
     *
     * @return UpdateAddonReleaseResponse
     */
    public function updateAddonRelease($releaseName, $policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAddonReleaseWithOptions($releaseName, $policyId, $request, $headers, $runtime);
    }

    /**
     * 应用聚合任务组.
     *
     * @param request - UpdateAggTaskGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param string                    $groupId
     * @param UpdateAggTaskGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAggTaskGroupResponse
     */
    public function updateAggTaskGroupWithOptions($instanceId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aggTaskGroupConfig) {
            @$body['aggTaskGroupConfig'] = $request->aggTaskGroupConfig;
        }

        if (null !== $request->aggTaskGroupConfigType) {
            @$body['aggTaskGroupConfigType'] = $request->aggTaskGroupConfigType;
        }

        if (null !== $request->aggTaskGroupName) {
            @$body['aggTaskGroupName'] = $request->aggTaskGroupName;
        }

        if (null !== $request->cronExpr) {
            @$body['cronExpr'] = $request->cronExpr;
        }

        if (null !== $request->delay) {
            @$body['delay'] = $request->delay;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->fromTime) {
            @$body['fromTime'] = $request->fromTime;
        }

        if (null !== $request->maxRetries) {
            @$body['maxRetries'] = $request->maxRetries;
        }

        if (null !== $request->maxRunTimeInSeconds) {
            @$body['maxRunTimeInSeconds'] = $request->maxRunTimeInSeconds;
        }

        if (null !== $request->precheckString) {
            @$body['precheckString'] = $request->precheckString;
        }

        if (null !== $request->scheduleMode) {
            @$body['scheduleMode'] = $request->scheduleMode;
        }

        if (null !== $request->scheduleTimeExpr) {
            @$body['scheduleTimeExpr'] = $request->scheduleTimeExpr;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->targetPrometheusId) {
            @$body['targetPrometheusId'] = $request->targetPrometheusId;
        }

        if (null !== $request->toTime) {
            @$body['toTime'] = $request->toTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAggTaskGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups/' . Url::percentEncode($groupId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAggTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用聚合任务组.
     *
     * @param request - UpdateAggTaskGroupRequest
     *
     * @returns UpdateAggTaskGroupResponse
     *
     * @param string                    $instanceId
     * @param string                    $groupId
     * @param UpdateAggTaskGroupRequest $request
     *
     * @return UpdateAggTaskGroupResponse
     */
    public function updateAggTaskGroup($instanceId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAggTaskGroupWithOptions($instanceId, $groupId, $request, $headers, $runtime);
    }

    /**
     * 更新聚合任务组状态
     *
     * @param request - UpdateAggTaskGroupStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAggTaskGroupStatusResponse
     *
     * @param string                          $instanceId
     * @param string                          $groupId
     * @param UpdateAggTaskGroupStatusRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAggTaskGroupStatusResponse
     */
    public function updateAggTaskGroupStatusWithOptions($instanceId, $groupId, $request, $headers, $runtime)
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
            'action' => 'UpdateAggTaskGroupStatus',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($instanceId) . '/agg-task-groups/' . Url::percentEncode($groupId) . '/status',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAggTaskGroupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新聚合任务组状态
     *
     * @param request - UpdateAggTaskGroupStatusRequest
     *
     * @returns UpdateAggTaskGroupStatusResponse
     *
     * @param string                          $instanceId
     * @param string                          $groupId
     * @param UpdateAggTaskGroupStatusRequest $request
     *
     * @return UpdateAggTaskGroupStatusResponse
     */
    public function updateAggTaskGroupStatus($instanceId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAggTaskGroupStatusWithOptions($instanceId, $groupId, $request, $headers, $runtime);
    }

    /**
     * 更新指定策略.
     *
     * @param request - UpdateIntegrationPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIntegrationPolicyResponse
     *
     * @param string                         $integrationPolicyId
     * @param UpdateIntegrationPolicyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateIntegrationPolicyResponse
     */
    public function updateIntegrationPolicyWithOptions($integrationPolicyId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->feePackage) {
            @$body['feePackage'] = $request->feePackage;
        }

        if (null !== $request->policyName) {
            @$body['policyName'] = $request->policyName;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIntegrationPolicy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($integrationPolicyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateIntegrationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新指定策略.
     *
     * @param request - UpdateIntegrationPolicyRequest
     *
     * @returns UpdateIntegrationPolicyResponse
     *
     * @param string                         $integrationPolicyId
     * @param UpdateIntegrationPolicyRequest $request
     *
     * @return UpdateIntegrationPolicyResponse
     */
    public function updateIntegrationPolicy($integrationPolicyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIntegrationPolicyWithOptions($integrationPolicyId, $request, $headers, $runtime);
    }

    /**
     * 更新Prom实例信息.
     *
     * @param request - UpdatePrometheusInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrometheusInstanceResponse
     *
     * @param string                          $prometheusInstanceId
     * @param UpdatePrometheusInstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdatePrometheusInstanceResponse
     */
    public function updatePrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->archiveDuration) {
            @$body['archiveDuration'] = $request->archiveDuration;
        }

        if (null !== $request->authFreeReadPolicy) {
            @$body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->authFreeWritePolicy) {
            @$body['authFreeWritePolicy'] = $request->authFreeWritePolicy;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthFreeWrite) {
            @$body['enableAuthFreeWrite'] = $request->enableAuthFreeWrite;
        }

        if (null !== $request->enableAuthToken) {
            @$body['enableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->prometheusInstanceName) {
            @$body['prometheusInstanceName'] = $request->prometheusInstanceName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->storageDuration) {
            @$body['storageDuration'] = $request->storageDuration;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePrometheusInstance',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-instances/' . Url::percentEncode($prometheusInstanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Prom实例信息.
     *
     * @param request - UpdatePrometheusInstanceRequest
     *
     * @returns UpdatePrometheusInstanceResponse
     *
     * @param string                          $prometheusInstanceId
     * @param UpdatePrometheusInstanceRequest $request
     *
     * @return UpdatePrometheusInstanceResponse
     */
    public function updatePrometheusInstance($prometheusInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePrometheusInstanceWithOptions($prometheusInstanceId, $request, $headers, $runtime);
    }

    /**
     * 更新Prom视图实例信息.
     *
     * @param request - UpdatePrometheusViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrometheusViewResponse
     *
     * @param string                      $prometheusViewId
     * @param UpdatePrometheusViewRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePrometheusViewResponse
     */
    public function updatePrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authFreeReadPolicy) {
            @$body['authFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$body['enableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthToken) {
            @$body['enableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->prometheusInstances) {
            @$body['prometheusInstances'] = $request->prometheusInstances;
        }

        if (null !== $request->prometheusViewName) {
            @$body['prometheusViewName'] = $request->prometheusViewName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePrometheusView',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-views/' . Url::percentEncode($prometheusViewId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePrometheusViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Prom视图实例信息.
     *
     * @param request - UpdatePrometheusViewRequest
     *
     * @returns UpdatePrometheusViewResponse
     *
     * @param string                      $prometheusViewId
     * @param UpdatePrometheusViewRequest $request
     *
     * @return UpdatePrometheusViewResponse
     */
    public function updatePrometheusView($prometheusViewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePrometheusViewWithOptions($prometheusViewId, $request, $headers, $runtime);
    }

    /**
     * 更新UpdateService.
     *
     * @param request - UpdateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $workspace
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['attributes'] = $request->attributes;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->serviceStatus) {
            @$body['serviceStatus'] = $request->serviceStatus;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/service/' . Url::percentEncode($serviceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新UpdateService.
     *
     * @param request - UpdateServiceRequest
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $workspace
     * @param string               $serviceId
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($workspace, $serviceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($workspace, $serviceId, $request, $headers, $runtime);
    }

    /**
     * 更新Umodel配置信息.
     *
     * @param request - UpdateUmodelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUmodelResponse
     *
     * @param string              $workspace
     * @param UpdateUmodelRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateUmodelResponse
     */
    public function updateUmodelWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUmodel',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateUmodelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Umodel配置信息.
     *
     * @param request - UpdateUmodelRequest
     *
     * @returns UpdateUmodelResponse
     *
     * @param string              $workspace
     * @param UpdateUmodelRequest $request
     *
     * @return UpdateUmodelResponse
     */
    public function updateUmodel($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUmodelWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * 写入 Umodel Elements.
     *
     * @param request - UpsertUmodelDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpsertUmodelDataResponse
     *
     * @param string                  $workspace
     * @param UpsertUmodelDataRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpsertUmodelDataResponse
     */
    public function upsertUmodelDataWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->method) {
            @$query['method'] = $request->method;
        }

        $body = [];
        if (null !== $request->elements) {
            @$body['elements'] = $request->elements;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpsertUmodelData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/data',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpsertUmodelDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 写入 Umodel Elements.
     *
     * @param request - UpsertUmodelDataRequest
     *
     * @returns UpsertUmodelDataResponse
     *
     * @param string                  $workspace
     * @param UpsertUmodelDataRequest $request
     *
     * @return UpsertUmodelDataResponse
     */
    public function upsertUmodelData($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upsertUmodelDataWithOptions($workspace, $request, $headers, $runtime);
    }
}
