<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Cms\V20240330\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAggTaskGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateBizTraceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateBizTraceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateChatRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateChatResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateCloudResourceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDigitalEmployeeRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDigitalEmployeeResponse;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateThreadRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateThreadResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteBizTraceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteCloudResourceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteDigitalEmployeeResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeletePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteThreadResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelCommonSchemaRefRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelCommonSchemaRefResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonCodeTemplateRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonCodeTemplateResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetBizTraceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCloudResourceDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCloudResourceDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCloudResourceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCmsServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetCmsServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDigitalEmployeeResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataHeaders;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationVersionForCSRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetIntegrationVersionForCSResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusUserSettingRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusUserSettingResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelCommonSchemaRefResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelDataResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonReleasesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonReleasesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListBizTracesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListBizTracesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListDigitalEmployeesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyAddonsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCollectorsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyDashboardsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyDashboardsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyPodMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyPodMonitorsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyServiceMonitorsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyServiceMonitorsResponse;
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
use AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListThreadsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListThreadsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListThreadsShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\PutWorkspaceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAddonReleaseRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAddonReleaseResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupStatusRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupStatusResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateBizTraceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateBizTraceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDigitalEmployeeRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDigitalEmployeeResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateIntegrationPolicyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateIntegrationPolicyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateNotifyStrategyRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateNotifyStrategyResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusInstanceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusInstanceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusUserSettingRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusUserSettingResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusViewRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdatePrometheusViewResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateSubscriptionResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateThreadRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateThreadResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelCommonSchemaRefRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpsertUmodelCommonSchemaRefResponse;
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
     * 修改资源所属资源组.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/resourcegroup',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改资源所属资源组.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Install the access component, representing a single access attempt.
     *
     * @remarks
     * Used to create a site monitoring task
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
     * Install the access component, representing a single access attempt.
     *
     * @remarks
     * Used to create a site monitoring task
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
     * Create Aggregation Task Group.
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
     * Create Aggregation Task Group.
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
     * 创建业务链路.
     *
     * @param request - CreateBizTraceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBizTraceResponse
     *
     * @param CreateBizTraceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateBizTraceResponse
     */
    public function createBizTraceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->advancedConfig) {
            @$body['advancedConfig'] = $request->advancedConfig;
        }

        if (null !== $request->bizTraceCode) {
            @$body['bizTraceCode'] = $request->bizTraceCode;
        }

        if (null !== $request->bizTraceName) {
            @$body['bizTraceName'] = $request->bizTraceName;
        }

        if (null !== $request->ruleConfig) {
            @$body['ruleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBizTrace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTrace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateBizTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建业务链路.
     *
     * @param request - CreateBizTraceRequest
     *
     * @returns CreateBizTraceResponse
     *
     * @param CreateBizTraceRequest $request
     *
     * @return CreateBizTraceResponse
     */
    public function createBizTrace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBizTraceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建对话.
     *
     * @param request - CreateChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatResponse
     *
     * @param CreateChatRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateChatResponse
     */
    public function createChatWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->digitalEmployeeName) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeName;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChat',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield CreateChatResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * 创建对话.
     *
     * @param request - CreateChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatResponse
     *
     * @param CreateChatRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateChatResponse
     */
    public function createChatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->digitalEmployeeName) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeName;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChat',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建对话.
     *
     * @param request - CreateChatRequest
     *
     * @returns CreateChatResponse
     *
     * @param CreateChatRequest $request
     *
     * @return CreateChatResponse
     */
    public function createChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建云资源中心.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudResourceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateCloudResourceResponse
     */
    public function createCloudResourceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateCloudResource',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cloudresource',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建云资源中心.
     *
     * @returns CreateCloudResourceResponse
     *
     * @return CreateCloudResourceResponse
     */
    public function createCloudResource()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCloudResourceWithOptions($headers, $runtime);
    }

    /**
     * 创建DigitalEmployee.
     *
     * @param request - CreateDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDigitalEmployeeResponse
     *
     * @param CreateDigitalEmployeeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDigitalEmployeeResponse
     */
    public function createDigitalEmployeeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->defaultRule) {
            @$body['defaultRule'] = $request->defaultRule;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->knowledges) {
            @$body['knowledges'] = $request->knowledges;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->roleArn) {
            @$body['roleArn'] = $request->roleArn;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDigitalEmployee',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建DigitalEmployee.
     *
     * @param request - CreateDigitalEmployeeRequest
     *
     * @returns CreateDigitalEmployeeResponse
     *
     * @param CreateDigitalEmployeeRequest $request
     *
     * @return CreateDigitalEmployeeResponse
     */
    public function createDigitalEmployee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDigitalEmployeeWithOptions($request, $headers, $runtime);
    }

    /**
     * Create storage related to EntityStore.
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
     * Create storage related to EntityStore.
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
     * Create Access Center Policy.
     *
     * @remarks
     * This interface is used to support users in creating event integration.
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
     * Create Access Center Policy.
     *
     * @remarks
     * This interface is used to support users in creating event integration.
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
     * Create a Prometheus monitoring instance.
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
     * Create a Prometheus monitoring instance.
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
     * Create Prometheus View.
     *
     * @remarks
     * Used to create a site monitoring task
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
     * Create Prometheus View.
     *
     * @remarks
     * Used to create a site monitoring task
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
     * Create Prometheus Monitoring Instance.
     *
     * @remarks
     * Create a Prometheus monitoring virtual instance.
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
     * Create Prometheus Monitoring Instance.
     *
     * @remarks
     * Create a Prometheus monitoring virtual instance.
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
     * Create Service.
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

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
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

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
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
     * Create Service.
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
     * 创建会话.
     *
     * @param request - CreateThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateThreadResponse
     *
     * @param string              $name
     * @param CreateThreadRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateThreadResponse
     */
    public function createThreadWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateThread',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建会话.
     *
     * @param request - CreateThreadRequest
     *
     * @returns CreateThreadResponse
     *
     * @param string              $name
     * @param CreateThreadRequest $request
     *
     * @return CreateThreadResponse
     */
    public function createThread($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createThreadWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * Create Ticket.
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
     * Create Ticket.
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
     * Create Umodel configuration.
     *
     * @remarks
     * Create Umodel configuration in the specified workspace
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
     * Create Umodel configuration.
     *
     * @remarks
     * Create Umodel configuration in the specified workspace
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
     * Delete addon release information.
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
     * Delete addon release information.
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
     * Delete Aggregation Task Group.
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
     * Delete Aggregation Task Group.
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
     * 删除业务链路.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBizTraceResponse
     *
     * @param string         $bizTraceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBizTraceResponse
     */
    public function deleteBizTraceWithOptions($bizTraceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteBizTrace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTrace/' . Url::percentEncode($bizTraceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteBizTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除业务链路.
     *
     * @returns DeleteBizTraceResponse
     *
     * @param string $bizTraceId
     *
     * @return DeleteBizTraceResponse
     */
    public function deleteBizTrace($bizTraceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBizTraceWithOptions($bizTraceId, $headers, $runtime);
    }

    /**
     * 删除云资源中心.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudResourceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCloudResourceResponse
     */
    public function deleteCloudResourceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCloudResource',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cloudresource',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除云资源中心.
     *
     * @returns DeleteCloudResourceResponse
     *
     * @return DeleteCloudResourceResponse
     */
    public function deleteCloudResource()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCloudResourceWithOptions($headers, $runtime);
    }

    /**
     * 删除DigitalEmployee.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDigitalEmployeeResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDigitalEmployeeResponse
     */
    public function deleteDigitalEmployeeWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDigitalEmployee',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除DigitalEmployee.
     *
     * @returns DeleteDigitalEmployeeResponse
     *
     * @param string $name
     *
     * @return DeleteDigitalEmployeeResponse
     */
    public function deleteDigitalEmployee($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDigitalEmployeeWithOptions($name, $headers, $runtime);
    }

    /**
     * Delete EntityStore related storage.
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
     * Delete EntityStore related storage.
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
     * Delete Access Center Policy.
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
     * Delete Access Center Policy.
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
     * Delete prom instance.
     *
     * @remarks
     * Delete a Prometheus instance.
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
     * Delete prom instance.
     *
     * @remarks
     * Delete a Prometheus instance.
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
     * Delete prometheus view instance.
     *
     * @remarks
     * Delete prometheus view instance.
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
     * Delete prometheus view instance.
     *
     * @remarks
     * Delete prometheus view instance.
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
     * Delete Service.
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
     * Delete Service.
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
     * 删除会话.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteThreadResponse
     *
     * @param string         $name
     * @param string         $threadId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteThreadResponse
     */
    public function deleteThreadWithOptions($name, $threadId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteThread',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除会话.
     *
     * @returns DeleteThreadResponse
     *
     * @param string $name
     * @param string $threadId
     *
     * @return DeleteThreadResponse
     */
    public function deleteThread($name, $threadId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteThreadWithOptions($name, $threadId, $headers, $runtime);
    }

    /**
     * Delete Umodel configuration information.
     *
     * @remarks
     * Delete the Umodel under the specified workspace
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
     * Delete Umodel configuration information.
     *
     * @remarks
     * Delete the Umodel under the specified workspace
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
     * 删除Umodel配置信息.
     *
     * @param request - DeleteUmodelCommonSchemaRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUmodelCommonSchemaRefResponse
     *
     * @param string                             $workspace
     * @param DeleteUmodelCommonSchemaRefRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteUmodelCommonSchemaRefResponse
     */
    public function deleteUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->group) {
            @$query['group'] = $request->group;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUmodelCommonSchemaRef',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/common-schema-ref',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUmodelCommonSchemaRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Umodel配置信息.
     *
     * @param request - DeleteUmodelCommonSchemaRefRequest
     *
     * @returns DeleteUmodelCommonSchemaRefResponse
     *
     * @param string                             $workspace
     * @param DeleteUmodelCommonSchemaRefRequest $request
     *
     * @return DeleteUmodelCommonSchemaRefResponse
     */
    public function deleteUmodelCommonSchemaRef($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Delete Umodel Elements.
     *
     * @remarks
     * Delete the Umodel Data under a specified workspace
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
     * Delete Umodel Elements.
     *
     * @remarks
     * Delete the Umodel Data under a specified workspace
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
     * Delete Workspace.
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
     * Delete Workspace.
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
     * 查询地域信息列表.
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

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2024-03-30',
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
     * 查询地域信息列表.
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
     * 插件详情(Addon).
     *
     * @param request - GetAddonRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAddonResponse
     *
     * @param string          $addonName
     * @param GetAddonRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetAddonResponse
     */
    public function getAddonWithOptions($addonName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAddon',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/addons/' . Url::percentEncode($addonName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 插件详情(Addon).
     *
     * @param request - GetAddonRequest
     *
     * @returns GetAddonResponse
     *
     * @param string          $addonName
     * @param GetAddonRequest $request
     *
     * @return GetAddonResponse
     */
    public function getAddon($addonName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAddonWithOptions($addonName, $request, $headers, $runtime);
    }

    /**
     * 插件schema详情(Addon).
     *
     * @param request - GetAddonCodeTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAddonCodeTemplateResponse
     *
     * @param string                      $addonName
     * @param GetAddonCodeTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetAddonCodeTemplateResponse
     */
    public function getAddonCodeTemplateWithOptions($addonName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->environmentType) {
            @$query['environmentType'] = $request->environmentType;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAddonCodeTemplate',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/addons/' . Url::percentEncode($addonName) . '/alert-code-template',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAddonCodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 插件schema详情(Addon).
     *
     * @param request - GetAddonCodeTemplateRequest
     *
     * @returns GetAddonCodeTemplateResponse
     *
     * @param string                      $addonName
     * @param GetAddonCodeTemplateRequest $request
     *
     * @return GetAddonCodeTemplateResponse
     */
    public function getAddonCodeTemplate($addonName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAddonCodeTemplateWithOptions($addonName, $request, $headers, $runtime);
    }

    /**
     * Check addon release (view connection status).
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
     * Check addon release (view connection status).
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
     * 插件schema详情(Addon).
     *
     * @param request - GetAddonSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAddonSchemaResponse
     *
     * @param string                $addonName
     * @param GetAddonSchemaRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetAddonSchemaResponse
     */
    public function getAddonSchemaWithOptions($addonName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->environmentType) {
            @$query['environmentType'] = $request->environmentType;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAddonSchema',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/addons/' . Url::percentEncode($addonName) . '/schema',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAddonSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 插件schema详情(Addon).
     *
     * @param request - GetAddonSchemaRequest
     *
     * @returns GetAddonSchemaResponse
     *
     * @param string                $addonName
     * @param GetAddonSchemaRequest $request
     *
     * @return GetAddonSchemaResponse
     */
    public function getAddonSchema($addonName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAddonSchemaWithOptions($addonName, $request, $headers, $runtime);
    }

    /**
     * Describes the aggregation task group.
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
     * Describes the aggregation task group.
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
     * 查询业务链路.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBizTraceResponse
     *
     * @param string         $bizTraceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBizTraceResponse
     */
    public function getBizTraceWithOptions($bizTraceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetBizTrace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTrace/' . Url::percentEncode($bizTraceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBizTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询业务链路.
     *
     * @returns GetBizTraceResponse
     *
     * @param string $bizTraceId
     *
     * @return GetBizTraceResponse
     */
    public function getBizTrace($bizTraceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBizTraceWithOptions($bizTraceId, $headers, $runtime);
    }

    /**
     * 查询云资源中心.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCloudResourceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCloudResourceResponse
     */
    public function getCloudResourceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCloudResource',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cloudresource',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCloudResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云资源中心.
     *
     * @returns GetCloudResourceResponse
     *
     * @return GetCloudResourceResponse
     */
    public function getCloudResource()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCloudResourceWithOptions($headers, $runtime);
    }

    /**
     * 查询云资源中心数据.
     *
     * @param request - GetCloudResourceDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCloudResourceDataResponse
     *
     * @param GetCloudResourceDataRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetCloudResourceDataResponse
     */
    public function getCloudResourceDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCloudResourceData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cloudresource/data',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCloudResourceDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云资源中心数据.
     *
     * @param request - GetCloudResourceDataRequest
     *
     * @returns GetCloudResourceDataResponse
     *
     * @param GetCloudResourceDataRequest $request
     *
     * @return GetCloudResourceDataResponse
     */
    public function getCloudResourceData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCloudResourceDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取云监控开通状态
     *
     * @param request - GetCmsServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCmsServiceResponse
     *
     * @param GetCmsServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetCmsServiceResponse
     */
    public function getCmsServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->product) {
            @$query['product'] = $request->product;
        }

        if (null !== $request->service) {
            @$query['service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCmsService',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/cmsservice',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCmsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取云监控开通状态
     *
     * @param request - GetCmsServiceRequest
     *
     * @returns GetCmsServiceResponse
     *
     * @param GetCmsServiceRequest $request
     *
     * @return GetCmsServiceResponse
     */
    public function getCmsService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCmsServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询 DigitalEmployee.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDigitalEmployeeResponse
     *
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDigitalEmployeeResponse
     */
    public function getDigitalEmployeeWithOptions($name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDigitalEmployee',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 DigitalEmployee.
     *
     * @returns GetDigitalEmployeeResponse
     *
     * @param string $name
     *
     * @return GetDigitalEmployeeResponse
     */
    public function getDigitalEmployee($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDigitalEmployeeWithOptions($name, $headers, $runtime);
    }

    /**
     * Get EntityStore related storage information.
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
     * Get EntityStore related storage information.
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
     * Query the entity and relationship data under a specified Workspace, returning the entity data within a certain time range (the returned result is transmitted after compression).
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
     * Query the entity and relationship data under a specified Workspace, returning the entity data within a certain time range (the returned result is transmitted after compression).
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
     * Query the list of access center policies.
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
     * Query the list of access center policies.
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
     * 查询接入中心在CS的版本.
     *
     * @param request - GetIntegrationVersionForCSRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIntegrationVersionForCSResponse
     *
     * @param GetIntegrationVersionForCSRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetIntegrationVersionForCSResponse
     */
    public function getIntegrationVersionForCSWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['clusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterType) {
            @$query['clusterType'] = $request->clusterType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIntegrationVersionForCS',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-version/cs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIntegrationVersionForCSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询接入中心在CS的版本.
     *
     * @param request - GetIntegrationVersionForCSRequest
     *
     * @returns GetIntegrationVersionForCSResponse
     *
     * @param GetIntegrationVersionForCSRequest $request
     *
     * @return GetIntegrationVersionForCSResponse
     */
    public function getIntegrationVersionForCS($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIntegrationVersionForCSWithOptions($request, $headers, $runtime);
    }

    /**
     * Query the instance in a specified environment.
     *
     * @remarks
     * Retrieve details of a Prometheus instance.
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
     * Query the instance in a specified environment.
     *
     * @remarks
     * Retrieve details of a Prometheus instance.
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
     * 查询指定环境实例.
     *
     * @param request - GetPrometheusUserSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrometheusUserSettingResponse
     *
     * @param GetPrometheusUserSettingRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetPrometheusUserSettingResponse
     */
    public function getPrometheusUserSettingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrometheusUserSetting',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-user-setting',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPrometheusUserSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定环境实例.
     *
     * @param request - GetPrometheusUserSettingRequest
     *
     * @returns GetPrometheusUserSettingResponse
     *
     * @param GetPrometheusUserSettingRequest $request
     *
     * @return GetPrometheusUserSettingResponse
     */
    public function getPrometheusUserSetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPrometheusUserSettingWithOptions($request, $headers, $runtime);
    }

    /**
     * Query a specified Prometheus view instance.
     *
     * @remarks
     * Query a specified Prometheus view instance.
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
     * Query a specified Prometheus view instance.
     *
     * @remarks
     * Query a specified Prometheus view instance.
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
     * Query Service.
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
     * Query Service.
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
     * Get Application Observability Instance.
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
     * Get Application Observability Instance.
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
     * 获取会话.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetThreadResponse
     *
     * @param string         $name
     * @param string         $threadId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetThreadResponse
     */
    public function getThreadWithOptions($name, $threadId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetThread',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取会话.
     *
     * @returns GetThreadResponse
     *
     * @param string $name
     * @param string $threadId
     *
     * @return GetThreadResponse
     */
    public function getThread($name, $threadId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getThreadWithOptions($name, $threadId, $headers, $runtime);
    }

    /**
     * 获取会话数据.
     *
     * @param request - GetThreadDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetThreadDataResponse
     *
     * @param string               $name
     * @param string               $threadId
     * @param GetThreadDataRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetThreadDataResponse
     */
    public function getThreadDataWithOptions($name, $threadId, $request, $headers, $runtime)
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
            'action' => 'GetThreadData',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '/data',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetThreadDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取会话数据.
     *
     * @param request - GetThreadDataRequest
     *
     * @returns GetThreadDataResponse
     *
     * @param string               $name
     * @param string               $threadId
     * @param GetThreadDataRequest $request
     *
     * @return GetThreadDataResponse
     */
    public function getThreadData($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getThreadDataWithOptions($name, $threadId, $request, $headers, $runtime);
    }

    /**
     * Get Umodel configuration information.
     *
     * @remarks
     * Get Umodel configuration information
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
     * Get Umodel configuration information.
     *
     * @remarks
     * Get Umodel configuration information
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
     * 获取Umodel配置信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUmodelCommonSchemaRefResponse
     *
     * @param string         $workspace
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUmodelCommonSchemaRefResponse
     */
    public function getUmodelCommonSchemaRefWithOptions($workspace, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUmodelCommonSchemaRef',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/common-schema-ref',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUmodelCommonSchemaRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Umodel配置信息.
     *
     * @returns GetUmodelCommonSchemaRefResponse
     *
     * @param string $workspace
     *
     * @return GetUmodelCommonSchemaRefResponse
     */
    public function getUmodelCommonSchemaRef($workspace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUmodelCommonSchemaRefWithOptions($workspace, $headers, $runtime);
    }

    /**
     * Retrieve associated Umodel graph data.
     *
     * @remarks
     * Find Umodel
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
     * Retrieve associated Umodel graph data.
     *
     * @remarks
     * Find Umodel
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
     * Get Workspace.
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
     * Get Workspace.
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
     * List of addon releases.
     *
     * @remarks
     * Query the list of access configurations
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
     * List of addon releases.
     *
     * @remarks
     * Query the list of access configurations
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
     * 新版接入中心产品列表(分组).
     *
     * @param request - ListAddonsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAddonsResponse
     *
     * @param ListAddonsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAddonsResponse
     */
    public function listAddonsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['aliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->regexp) {
            @$query['regexp'] = $request->regexp;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAddons',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/addons',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新版接入中心产品列表(分组).
     *
     * @param request - ListAddonsRequest
     *
     * @returns ListAddonsResponse
     *
     * @param ListAddonsRequest $request
     *
     * @return ListAddonsResponse
     */
    public function listAddons($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAddonsWithOptions($request, $headers, $runtime);
    }

    /**
     * List Aggregation Task Groups.
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
     * List Aggregation Task Groups.
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
     * Query Alert Actions.
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
     * Query Alert Actions.
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
     * 业务链路列表.
     *
     * @param request - ListBizTracesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBizTracesResponse
     *
     * @param ListBizTracesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListBizTracesResponse
     */
    public function listBizTracesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBizTraces',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTraces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBizTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 业务链路列表.
     *
     * @param request - ListBizTracesRequest
     *
     * @returns ListBizTracesResponse
     *
     * @param ListBizTracesRequest $request
     *
     * @return ListBizTracesResponse
     */
    public function listBizTraces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBizTracesWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出资源DigitalEmployee.
     *
     * @param request - ListDigitalEmployeesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDigitalEmployeesResponse
     *
     * @param ListDigitalEmployeesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDigitalEmployeesResponse
     */
    public function listDigitalEmployeesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDigitalEmployees',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDigitalEmployeesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出资源DigitalEmployee.
     *
     * @param request - ListDigitalEmployeesRequest
     *
     * @returns ListDigitalEmployeesResponse
     *
     * @param ListDigitalEmployeesRequest $request
     *
     * @return ListDigitalEmployeesResponse
     */
    public function listDigitalEmployees($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDigitalEmployeesWithOptions($request, $headers, $runtime);
    }

    /**
     * Query Access Center Policy List Information.
     *
     * @remarks
     * Query integration list
     *
     * @param tmpReq - ListIntegrationPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPoliciesResponse
     *
     * @param ListIntegrationPoliciesRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListIntegrationPoliciesResponse
     */
    public function listIntegrationPoliciesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListIntegrationPoliciesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->bindResourceId) {
            @$query['bindResourceId'] = $request->bindResourceId;
        }

        if (null !== $request->entityGroupIds) {
            @$query['entityGroupIds'] = $request->entityGroupIds;
        }

        if (null !== $request->filterRegionIds) {
            @$query['filterRegionIds'] = $request->filterRegionIds;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->policyId) {
            @$query['policyId'] = $request->policyId;
        }

        if (null !== $request->policyName) {
            @$query['policyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['policyType'] = $request->policyType;
        }

        if (null !== $request->prometheusInstanceId) {
            @$query['prometheusInstanceId'] = $request->prometheusInstanceId;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicies',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Access Center Policy List Information.
     *
     * @remarks
     * Query integration list
     *
     * @param request - ListIntegrationPoliciesRequest
     *
     * @returns ListIntegrationPoliciesResponse
     *
     * @param ListIntegrationPoliciesRequest $request
     *
     * @return ListIntegrationPoliciesResponse
     */
    public function listIntegrationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * 策略addon列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyAddonsResponse
     *
     * @param string         $policyId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListIntegrationPolicyAddonsResponse
     */
    public function listIntegrationPolicyAddonsWithOptions($policyId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyAddons',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/addons',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 策略addon列表.
     *
     * @returns ListIntegrationPolicyAddonsResponse
     *
     * @param string $policyId
     *
     * @return ListIntegrationPolicyAddonsResponse
     */
    public function listIntegrationPolicyAddons($policyId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyAddonsWithOptions($policyId, $headers, $runtime);
    }

    /**
     * 获取接入中心策略的存储要求信息.
     *
     * @param request - ListIntegrationPolicyCollectorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyCollectorsResponse
     *
     * @param string                                 $policyId
     * @param ListIntegrationPolicyCollectorsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListIntegrationPolicyCollectorsResponse
     */
    public function listIntegrationPolicyCollectorsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonReleaseName) {
            @$query['addonReleaseName'] = $request->addonReleaseName;
        }

        if (null !== $request->collectorType) {
            @$query['collectorType'] = $request->collectorType;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyCollectors',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/collectors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyCollectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取接入中心策略的存储要求信息.
     *
     * @param request - ListIntegrationPolicyCollectorsRequest
     *
     * @returns ListIntegrationPolicyCollectorsResponse
     *
     * @param string                                 $policyId
     * @param ListIntegrationPolicyCollectorsRequest $request
     *
     * @return ListIntegrationPolicyCollectorsResponse
     */
    public function listIntegrationPolicyCollectors($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyCollectorsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Get storage requirement information for the access center policy.
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
     * Get storage requirement information for the access center policy.
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
     * Policy Dashboard List.
     *
     * @remarks
     * This article provides an example of querying the alarm template list. The result shows that there are 2 alarm templates in the list, which are `ECS_Template1` and `ECS_Template2`.
     *
     * @param request - ListIntegrationPolicyDashboardsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyDashboardsResponse
     *
     * @param string                                 $policyId
     * @param ListIntegrationPolicyDashboardsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListIntegrationPolicyDashboardsResponse
     */
    public function listIntegrationPolicyDashboardsWithOptions($policyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['addonName'] = $request->addonName;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        if (null !== $request->scene) {
            @$query['scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIntegrationPolicyDashboards',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/dashboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Policy Dashboard List.
     *
     * @remarks
     * This article provides an example of querying the alarm template list. The result shows that there are 2 alarm templates in the list, which are `ECS_Template1` and `ECS_Template2`.
     *
     * @param request - ListIntegrationPolicyDashboardsRequest
     *
     * @returns ListIntegrationPolicyDashboardsResponse
     *
     * @param string                                 $policyId
     * @param ListIntegrationPolicyDashboardsRequest $request
     *
     * @return ListIntegrationPolicyDashboardsResponse
     */
    public function listIntegrationPolicyDashboards($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyDashboardsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Get PodMonitor Resources of Access Center Policy.
     *
     * @remarks
     * This article provides an example to query the alarm template list. The result shows that there are 2 alarm templates in the alarm template list, which are `ECS_Template1` and `ECS_Template2`.
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
     * Get PodMonitor Resources of Access Center Policy.
     *
     * @remarks
     * This article provides an example to query the alarm template list. The result shows that there are 2 alarm templates in the alarm template list, which are `ECS_Template1` and `ECS_Template2`.
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
     * @param request - ListIntegrationPolicyServiceMonitorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntegrationPolicyServiceMonitorsResponse
     *
     * @param string                                      $policyId
     * @param ListIntegrationPolicyServiceMonitorsRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ListIntegrationPolicyServiceMonitorsResponse
     */
    public function listIntegrationPolicyServiceMonitorsWithOptions($policyId, $request, $headers, $runtime)
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
            'action' => 'ListIntegrationPolicyServiceMonitors',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/integration-policies/' . Url::percentEncode($policyId) . '/service-monitors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIntegrationPolicyServiceMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取接入中心策略的存储要求信息.
     *
     * @param request - ListIntegrationPolicyServiceMonitorsRequest
     *
     * @returns ListIntegrationPolicyServiceMonitorsResponse
     *
     * @param string                                      $policyId
     * @param ListIntegrationPolicyServiceMonitorsRequest $request
     *
     * @return ListIntegrationPolicyServiceMonitorsResponse
     */
    public function listIntegrationPolicyServiceMonitors($policyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationPolicyServiceMonitorsWithOptions($policyId, $request, $headers, $runtime);
    }

    /**
     * Get Storage Requirements Information for Access Center Policy.
     *
     * @remarks
     * During the effective period of the policy, all alarms within the application group will no longer send notifications.
     *
     * This article provides an example of creating a pause alarm notification policy `PauseNotify` for the application group `7301****`. This application group will pause alarms from `1622949300000` to `1623208500000` (Beijing Time `2021-06-06 11:15:00` to `2021-06-09 11:15:00`).
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
     * Get Storage Requirements Information for Access Center Policy.
     *
     * @remarks
     * During the effective period of the policy, all alarms within the application group will no longer send notifications.
     *
     * This article provides an example of creating a pause alarm notification policy `PauseNotify` for the application group `7301****`. This application group will pause alarms from `1622949300000` to `1623208500000` (Beijing Time `2021-06-06 11:15:00` to `2021-06-09 11:15:00`).
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
     * Get Prometheus Instance Dashboard List.
     *
     * @remarks
     * Get the list of Prometheus instance dashboards.
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
     * Get Prometheus Instance Dashboard List.
     *
     * @remarks
     * Get the list of Prometheus instance dashboards.
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
     * Get the list of Prometheus instance information.
     *
     * @remarks
     * Get the list of Prometheus instances.
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
     * Get the list of Prometheus instance information.
     *
     * @remarks
     * Get the list of Prometheus instances.
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
     * Retrieve a list of Prometheus view instance information.
     *
     * @remarks
     * Retrieve a list of Prometheus view instance information.
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
     * Retrieve a list of Prometheus view instance information.
     *
     * @remarks
     * Retrieve a list of Prometheus view instance information.
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
     * Get Prometheus Virtual Instance.
     *
     * @remarks
     * Used for creating a site monitoring task
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
     * Get Prometheus Virtual Instance.
     *
     * @remarks
     * Used for creating a site monitoring task
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
     * List Resource Services.
     *
     * @param tmpReq - ListServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param string              $workspace
     * @param ListServicesRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($workspace, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListServicesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceName) {
            @$query['serviceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['serviceType'] = $request->serviceType;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
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
     * List Resource Services.
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
     * 查标签接口.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['resourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查标签接口.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出会话.
     *
     * @param tmpReq - ListThreadsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListThreadsResponse
     *
     * @param string             $name
     * @param ListThreadsRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListThreadsResponse
     */
    public function listThreadsWithOptions($name, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListThreadsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['filter'] = $request->filterShrink;
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

        if (null !== $request->threadId) {
            @$query['threadId'] = $request->threadId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListThreads',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/threads',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListThreadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出会话.
     *
     * @param request - ListThreadsRequest
     *
     * @returns ListThreadsResponse
     *
     * @param string             $name
     * @param ListThreadsRequest $request
     *
     * @return ListThreadsResponse
     */
    public function listThreads($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listThreadsWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * Get Workspace List.
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
     * Get Workspace List.
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
     * Create Workspace.
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
     * Create Workspace.
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
     * 打标签接口.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打标签接口.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 删标签接口.
     *
     * @param tmpReq - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UntagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }

        if (null !== $tmpReq->tagKey) {
            $request->tagKeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'tagKey', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['all'] = $request->all;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['resourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeyShrink) {
            @$query['tagKey'] = $request->tagKeyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删标签接口.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Upgrade Access Component.
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
     * Upgrade Access Component.
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
     * Apply Aggregation Task Group.
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
     * Apply Aggregation Task Group.
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
     * Update Aggregation Task Group Status.
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
     * Update Aggregation Task Group Status.
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
     * 修改业务链路.
     *
     * @param request - UpdateBizTraceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBizTraceResponse
     *
     * @param string                $bizTraceId
     * @param UpdateBizTraceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateBizTraceResponse
     */
    public function updateBizTraceWithOptions($bizTraceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->advancedConfig) {
            @$body['advancedConfig'] = $request->advancedConfig;
        }

        if (null !== $request->bizTraceName) {
            @$body['bizTraceName'] = $request->bizTraceName;
        }

        if (null !== $request->ruleConfig) {
            @$body['ruleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBizTrace',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/bizTrace/' . Url::percentEncode($bizTraceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateBizTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改业务链路.
     *
     * @param request - UpdateBizTraceRequest
     *
     * @returns UpdateBizTraceResponse
     *
     * @param string                $bizTraceId
     * @param UpdateBizTraceRequest $request
     *
     * @return UpdateBizTraceResponse
     */
    public function updateBizTrace($bizTraceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBizTraceWithOptions($bizTraceId, $request, $headers, $runtime);
    }

    /**
     * 更新UpdateDigitalEmployee.
     *
     * @param request - UpdateDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param UpdateDigitalEmployeeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDigitalEmployeeResponse
     */
    public function updateDigitalEmployeeWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->defaultRule) {
            @$body['defaultRule'] = $request->defaultRule;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->knowledges) {
            @$body['knowledges'] = $request->knowledges;
        }

        if (null !== $request->roleArn) {
            @$body['roleArn'] = $request->roleArn;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDigitalEmployee',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee/' . Url::percentEncode($name) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新UpdateDigitalEmployee.
     *
     * @param request - UpdateDigitalEmployeeRequest
     *
     * @returns UpdateDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param UpdateDigitalEmployeeRequest $request
     *
     * @return UpdateDigitalEmployeeResponse
     */
    public function updateDigitalEmployee($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDigitalEmployeeWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * Update the specified policy.
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
     * Update the specified policy.
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
     * 更新通知策略.
     *
     * @param request - UpdateNotifyStrategyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNotifyStrategyResponse
     *
     * @param string                      $notifyStrategyId
     * @param UpdateNotifyStrategyRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateNotifyStrategyResponse
     */
    public function updateNotifyStrategyWithOptions($notifyStrategyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateNotifyStrategy',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/notifyStrategies/' . Url::percentEncode($notifyStrategyId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateNotifyStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新通知策略.
     *
     * @param request - UpdateNotifyStrategyRequest
     *
     * @returns UpdateNotifyStrategyResponse
     *
     * @param string                      $notifyStrategyId
     * @param UpdateNotifyStrategyRequest $request
     *
     * @return UpdateNotifyStrategyResponse
     */
    public function updateNotifyStrategy($notifyStrategyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNotifyStrategyWithOptions($notifyStrategyId, $request, $headers, $runtime);
    }

    /**
     * Update Prometheus instance information.
     *
     * @remarks
     * Update Prometheus instance information.
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
     * Update Prometheus instance information.
     *
     * @remarks
     * Update Prometheus instance information.
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
     * 更新Prom实例信息.
     *
     * @param request - UpdatePrometheusUserSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrometheusUserSettingResponse
     *
     * @param string                             $settingKey
     * @param UpdatePrometheusUserSettingRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdatePrometheusUserSettingResponse
     */
    public function updatePrometheusUserSettingWithOptions($settingKey, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->settingValue) {
            @$query['settingValue'] = $request->settingValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePrometheusUserSetting',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/prometheus-user-setting/' . Url::percentEncode($settingKey) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePrometheusUserSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Prom实例信息.
     *
     * @param request - UpdatePrometheusUserSettingRequest
     *
     * @returns UpdatePrometheusUserSettingResponse
     *
     * @param string                             $settingKey
     * @param UpdatePrometheusUserSettingRequest $request
     *
     * @return UpdatePrometheusUserSettingResponse
     */
    public function updatePrometheusUserSetting($settingKey, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePrometheusUserSettingWithOptions($settingKey, $request, $headers, $runtime);
    }

    /**
     * Update Prometheus view instance information.
     *
     * @remarks
     * Update Prometheus view instance information.
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
     * Update Prometheus view instance information.
     *
     * @remarks
     * Update Prometheus view instance information.
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
     * Update Service.
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
     * Update Service.
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
     * 更新订阅.
     *
     * @param request - UpdateSubscriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param string                    $subscriptionId
     * @param UpdateSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscriptionWithOptions($subscriptionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspace) {
            @$query['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateSubscription',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/subscriptions/' . Url::percentEncode($subscriptionId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新订阅.
     *
     * @param request - UpdateSubscriptionRequest
     *
     * @returns UpdateSubscriptionResponse
     *
     * @param string                    $subscriptionId
     * @param UpdateSubscriptionRequest $request
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscription($subscriptionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSubscriptionWithOptions($subscriptionId, $request, $headers, $runtime);
    }

    /**
     * 更新会话.
     *
     * @param request - UpdateThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param UpdateThreadRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateThreadResponse
     */
    public function updateThreadWithOptions($name, $threadId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateThread',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新会话.
     *
     * @param request - UpdateThreadRequest
     *
     * @returns UpdateThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param UpdateThreadRequest $request
     *
     * @return UpdateThreadResponse
     */
    public function updateThread($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateThreadWithOptions($name, $threadId, $request, $headers, $runtime);
    }

    /**
     * Update Umodel configuration information.
     *
     * @remarks
     * Update Umodel configuration information
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
     * Update Umodel configuration information.
     *
     * @remarks
     * Update Umodel configuration information
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
     * 更新Umodel配置信息.
     *
     * @param request - UpsertUmodelCommonSchemaRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpsertUmodelCommonSchemaRefResponse
     *
     * @param string                             $workspace
     * @param UpsertUmodelCommonSchemaRefRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpsertUmodelCommonSchemaRefResponse
     */
    public function upsertUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->group) {
            @$query['group'] = $request->group;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpsertUmodelCommonSchemaRef',
            'version' => '2024-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/workspace/' . Url::percentEncode($workspace) . '/umodel/common-schema-ref',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpsertUmodelCommonSchemaRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Umodel配置信息.
     *
     * @param request - UpsertUmodelCommonSchemaRefRequest
     *
     * @returns UpsertUmodelCommonSchemaRefResponse
     *
     * @param string                             $workspace
     * @param UpsertUmodelCommonSchemaRefRequest $request
     *
     * @return UpsertUmodelCommonSchemaRefResponse
     */
    public function upsertUmodelCommonSchemaRef($workspace, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upsertUmodelCommonSchemaRefWithOptions($workspace, $request, $headers, $runtime);
    }

    /**
     * Write Umodel Elements.
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
     * Write Umodel Elements.
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
