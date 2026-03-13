<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pai\V20240521;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetQuotaRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetQuotaResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupMachineGroupRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupMachineGroupResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupMachineGroupShrinkRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupRequestRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupRequestResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupShrinkRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupTotalRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetResourceGroupTotalResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetUserAliUidByInstanceIdRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetUserAliUidByInstanceIdResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetUserViewMetricsRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\GetUserViewMetricsResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListDataCacheServicesRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListDataCacheServicesResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListNodesRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListNodesResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListNodesShrinkRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListQuotasRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListQuotasResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListResourceGroupMachineGroupsRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListResourceGroupMachineGroupsResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\TagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\TagResourcesSystemTagsResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\UntagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\Pai\V20240521\Models\UntagResourcesSystemTagsResponse;
use AlibabaCloud\SDK\Pai\V20240521\Models\UntagResourcesSystemTagsShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Pai extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取Quota.
     *
     * @param request - GetQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaResponse
     *
     * @param string          $QuotaId
     * @param GetQuotaRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetQuotaResponse
     */
    public function getQuotaWithOptions($QuotaId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuota',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($QuotaId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Quota.
     *
     * @param request - GetQuotaRequest
     *
     * @returns GetQuotaResponse
     *
     * @param string          $QuotaId
     * @param GetQuotaRequest $request
     *
     * @return GetQuotaResponse
     */
    public function getQuota($QuotaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaWithOptions($QuotaId, $request, $headers, $runtime);
    }

    /**
     * get resource group by group id.
     *
     * @param tmpReq - GetResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupResponse
     *
     * @param string                  $ResourceGroupID
     * @param GetResourceGroupRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourceGroupResponse
     */
    public function getResourceGroupWithOptions($ResourceGroupID, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetResourceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->isAIWorkspaceDataEnabled) {
            @$query['IsAIWorkspaceDataEnabled'] = $request->isAIWorkspaceDataEnabled;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroup',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get resource group by group id.
     *
     * @param request - GetResourceGroupRequest
     *
     * @returns GetResourceGroupResponse
     *
     * @param string                  $ResourceGroupID
     * @param GetResourceGroupRequest $request
     *
     * @return GetResourceGroupResponse
     */
    public function getResourceGroup($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * get machine group.
     *
     * @param tmpReq - GetResourceGroupMachineGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupMachineGroupResponse
     *
     * @param string                              $MachineGroupID
     * @param string                              $ResourceGroupID
     * @param GetResourceGroupMachineGroupRequest $tmpReq
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetResourceGroupMachineGroupResponse
     */
    public function getResourceGroupMachineGroupWithOptions($MachineGroupID, $ResourceGroupID, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetResourceGroupMachineGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupMachineGroup',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '/machinegroups/' . Url::percentEncode($MachineGroupID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get machine group.
     *
     * @param request - GetResourceGroupMachineGroupRequest
     *
     * @returns GetResourceGroupMachineGroupResponse
     *
     * @param string                              $MachineGroupID
     * @param string                              $ResourceGroupID
     * @param GetResourceGroupMachineGroupRequest $request
     *
     * @return GetResourceGroupMachineGroupResponse
     */
    public function getResourceGroupMachineGroup($MachineGroupID, $ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupMachineGroupWithOptions($MachineGroupID, $ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * get resource group requested resource by resource group id.
     *
     * @param request - GetResourceGroupRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupRequestResponse
     *
     * @param GetResourceGroupRequestRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourceGroupRequestResponse
     */
    public function getResourceGroupRequestWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->podStatus) {
            @$query['PodStatus'] = $request->podStatus;
        }

        if (null !== $request->resourceGroupID) {
            @$query['ResourceGroupID'] = $request->resourceGroupID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupRequest',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/data/request',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get resource group requested resource by resource group id.
     *
     * @param request - GetResourceGroupRequestRequest
     *
     * @returns GetResourceGroupRequestResponse
     *
     * @param GetResourceGroupRequestRequest $request
     *
     * @return GetResourceGroupRequestResponse
     */
    public function getResourceGroupRequest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupRequestWithOptions($request, $headers, $runtime);
    }

    /**
     * get resource group total resource by group id.
     *
     * @param request - GetResourceGroupTotalRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupTotalResponse
     *
     * @param GetResourceGroupTotalRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceGroupTotalResponse
     */
    public function getResourceGroupTotalWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupID) {
            @$query['ResourceGroupID'] = $request->resourceGroupID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupTotal',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/data/total',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get resource group total resource by group id.
     *
     * @param request - GetResourceGroupTotalRequest
     *
     * @returns GetResourceGroupTotalResponse
     *
     * @param GetResourceGroupTotalRequest $request
     *
     * @return GetResourceGroupTotalResponse
     */
    public function getResourceGroupTotal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupTotalWithOptions($request, $headers, $runtime);
    }

    /**
     * GetUserAliUidByInstanceId.
     *
     * @param request - GetUserAliUidByInstanceIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserAliUidByInstanceIdResponse
     *
     * @param string                           $ResourceInstanceId
     * @param GetUserAliUidByInstanceIdRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetUserAliUidByInstanceIdResponse
     */
    public function getUserAliUidByInstanceIdWithOptions($ResourceInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerUid) {
            @$query['ResourceOwnerUid'] = $request->resourceOwnerUid;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserAliUidByInstanceId',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/inner/pods/' . Url::percentEncode($ResourceInstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserAliUidByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetUserAliUidByInstanceId.
     *
     * @param request - GetUserAliUidByInstanceIdRequest
     *
     * @returns GetUserAliUidByInstanceIdResponse
     *
     * @param string                           $ResourceInstanceId
     * @param GetUserAliUidByInstanceIdRequest $request
     *
     * @return GetUserAliUidByInstanceIdResponse
     */
    public function getUserAliUidByInstanceId($ResourceInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserAliUidByInstanceIdWithOptions($ResourceInstanceId, $request, $headers, $runtime);
    }

    /**
     * get user view  metrics.
     *
     * @param request - GetUserViewMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserViewMetricsResponse
     *
     * @param string                    $ResourceGroupID
     * @param GetUserViewMetricsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserViewMetricsResponse
     */
    public function getUserViewMetricsWithOptions($ResourceGroupID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
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

        if (null !== $request->timeStep) {
            @$query['TimeStep'] = $request->timeStep;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserViewMetrics',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '/usermetrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserViewMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get user view  metrics.
     *
     * @param request - GetUserViewMetricsRequest
     *
     * @returns GetUserViewMetricsResponse
     *
     * @param string                    $ResourceGroupID
     * @param GetUserViewMetricsRequest $request
     *
     * @return GetUserViewMetricsResponse
     */
    public function getUserViewMetrics($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserViewMetricsWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * ListCacheServices.
     *
     * @param request - ListDataCacheServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataCacheServicesResponse
     *
     * @param ListDataCacheServicesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataCacheServicesResponse
     */
    public function listDataCacheServicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->quotaId) {
            @$query['QuotaId'] = $request->quotaId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataCacheServices',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/caches',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataCacheServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListCacheServices.
     *
     * @param request - ListDataCacheServicesRequest
     *
     * @returns ListDataCacheServicesResponse
     *
     * @param ListDataCacheServicesRequest $request
     *
     * @return ListDataCacheServicesResponse
     */
    public function listDataCacheServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataCacheServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取资源节点列表.
     *
     * @param tmpReq - ListNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->healthCount) {
            $request->healthCountShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->healthCount, 'HealthCount', 'json');
        }

        if (null !== $tmpReq->healthRate) {
            $request->healthRateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->healthRate, 'HealthRate', 'json');
        }

        $query = [];
        if (null !== $request->acceleratorType) {
            @$query['AcceleratorType'] = $request->acceleratorType;
        }

        if (null !== $request->availabilityZone) {
            @$query['AvailabilityZone'] = $request->availabilityZone;
        }

        if (null !== $request->cliqueID) {
            @$query['CliqueID'] = $request->cliqueID;
        }

        if (null !== $request->filterByQuotaId) {
            @$query['FilterByQuotaId'] = $request->filterByQuotaId;
        }

        if (null !== $request->filterByResourceGroupIds) {
            @$query['FilterByResourceGroupIds'] = $request->filterByResourceGroupIds;
        }

        if (null !== $request->GPUType) {
            @$query['GPUType'] = $request->GPUType;
        }

        if (null !== $request->healthCountShrink) {
            @$query['HealthCount'] = $request->healthCountShrink;
        }

        if (null !== $request->healthRateShrink) {
            @$query['HealthRate'] = $request->healthRateShrink;
        }

        if (null !== $request->hyperNode) {
            @$query['HyperNode'] = $request->hyperNode;
        }

        if (null !== $request->hyperZone) {
            @$query['HyperZone'] = $request->hyperZone;
        }

        if (null !== $request->layoutMode) {
            @$query['LayoutMode'] = $request->layoutMode;
        }

        if (null !== $request->machineGroupIds) {
            @$query['MachineGroupIds'] = $request->machineGroupIds;
        }

        if (null !== $request->nodeNames) {
            @$query['NodeNames'] = $request->nodeNames;
        }

        if (null !== $request->nodeStatuses) {
            @$query['NodeStatuses'] = $request->nodeStatuses;
        }

        if (null !== $request->nodeTypes) {
            @$query['NodeTypes'] = $request->nodeTypes;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderInstanceIds) {
            @$query['OrderInstanceIds'] = $request->orderInstanceIds;
        }

        if (null !== $request->orderStatuses) {
            @$query['OrderStatuses'] = $request->orderStatuses;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->quotaId) {
            @$query['QuotaId'] = $request->quotaId;
        }

        if (null !== $request->reasonCodes) {
            @$query['ReasonCodes'] = $request->reasonCodes;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodes',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/nodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取资源节点列表.
     *
     * @param request - ListNodesRequest
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取Quota列表.
     *
     * @param request - ListQuotasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotasResponse
     *
     * @param ListQuotasRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListQuotasResponse
     */
    public function listQuotasWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->layoutMode) {
            @$query['LayoutMode'] = $request->layoutMode;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentQuotaId) {
            @$query['ParentQuotaId'] = $request->parentQuotaId;
        }

        if (null !== $request->quotaIds) {
            @$query['QuotaIds'] = $request->quotaIds;
        }

        if (null !== $request->quotaName) {
            @$query['QuotaName'] = $request->quotaName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->statuses) {
            @$query['Statuses'] = $request->statuses;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->workspaceIds) {
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }

        if (null !== $request->workspaceName) {
            @$query['WorkspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQuotas',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Quota列表.
     *
     * @param request - ListQuotasRequest
     *
     * @returns ListQuotasResponse
     *
     * @param ListQuotasRequest $request
     *
     * @return ListQuotasResponse
     */
    public function listQuotas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasWithOptions($request, $headers, $runtime);
    }

    /**
     * list machine groups.
     *
     * @param request - ListResourceGroupMachineGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceGroupMachineGroupsResponse
     *
     * @param string                                $ResourceGroupID
     * @param ListResourceGroupMachineGroupsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListResourceGroupMachineGroupsResponse
     */
    public function listResourceGroupMachineGroupsWithOptions($ResourceGroupID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creatorID) {
            @$query['CreatorID'] = $request->creatorID;
        }

        if (null !== $request->ecsSpec) {
            @$query['EcsSpec'] = $request->ecsSpec;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderInstanceId) {
            @$query['OrderInstanceId'] = $request->orderInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paymentDuration) {
            @$query['PaymentDuration'] = $request->paymentDuration;
        }

        if (null !== $request->paymentDurationUnit) {
            @$query['PaymentDurationUnit'] = $request->paymentDurationUnit;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceGroupMachineGroups',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '/machinegroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceGroupMachineGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list machine groups.
     *
     * @param request - ListResourceGroupMachineGroupsRequest
     *
     * @returns ListResourceGroupMachineGroupsResponse
     *
     * @param string                                $ResourceGroupID
     * @param ListResourceGroupMachineGroupsRequest $request
     *
     * @return ListResourceGroupMachineGroupsResponse
     */
    public function listResourceGroupMachineGroups($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceGroupMachineGroupsWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * list resource group.
     *
     * @param request - ListResourceGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceGroupsResponse
     *
     * @param ListResourceGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->computingResourceProvider) {
            @$query['ComputingResourceProvider'] = $request->computingResourceProvider;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->showAll) {
            @$query['ShowAll'] = $request->showAll;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceGroups',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list resource group.
     *
     * @param request - ListResourceGroupsRequest
     *
     * @returns ListResourceGroupsResponse
     *
     * @param ListResourceGroupsRequest $request
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 云产品查标签接口.
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
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->tagOwnerUid) {
            @$query['TagOwnerUid'] = $request->tagOwnerUid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/inner/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 云产品查标签接口.
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
     * 打系统标签接口.
     *
     * @param request - TagResourcesSystemTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesSystemTagsResponse
     *
     * @param TagResourcesSystemTagsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return TagResourcesSystemTagsResponse
     */
    public function tagResourcesSystemTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scope) {
            @$body['Scope'] = $request->scope;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->tagOwnerUid) {
            @$body['TagOwnerUid'] = $request->tagOwnerUid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResourcesSystemTags',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/inner/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesSystemTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打系统标签接口.
     *
     * @param request - TagResourcesSystemTagsRequest
     *
     * @returns TagResourcesSystemTagsResponse
     *
     * @param TagResourcesSystemTagsRequest $request
     *
     * @return TagResourcesSystemTagsResponse
     */
    public function tagResourcesSystemTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesSystemTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * 删系统标签接口.
     *
     * @param tmpReq - UntagResourcesSystemTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesSystemTagsResponse
     *
     * @param UntagResourcesSystemTagsRequest $tmpReq
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UntagResourcesSystemTagsResponse
     */
    public function untagResourcesSystemTagsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UntagResourcesSystemTagsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tagKey) {
            $request->tagKeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'TagKey', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeyShrink) {
            @$query['TagKey'] = $request->tagKeyShrink;
        }

        if (null !== $request->tagOwnerUid) {
            @$query['TagOwnerUid'] = $request->tagOwnerUid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResourcesSystemTags',
            'version' => '2024-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/inner/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesSystemTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删系统标签接口.
     *
     * @param request - UntagResourcesSystemTagsRequest
     *
     * @returns UntagResourcesSystemTagsResponse
     *
     * @param UntagResourcesSystemTagsRequest $request
     *
     * @return UntagResourcesSystemTagsResponse
     */
    public function untagResourcesSystemTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesSystemTagsWithOptions($request, $headers, $runtime);
    }
}
