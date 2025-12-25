<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\CreateDefaultRoleResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeAccessControlListRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeAccessControlListResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeInstanceConfigsRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeInstanceConfigsResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesV2Request;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesV2Response;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesV2ShrinkRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ModifyInstanceConfigRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ModifyInstanceConfigResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UnTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateAccessControlListRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateAccessControlListResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdatePublicNetworkStatusRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdatePublicNetworkStatusResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Milvus extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('milvus', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 资源转组.
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
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceGroup/change',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 资源转组.
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
     * Create a service role for Milvus to access other cloud products.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDefaultRoleResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateDefaultRoleResponse
     */
    public function createDefaultRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateDefaultRole',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/user/create_default_role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDefaultRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a service role for Milvus to access other cloud products.
     *
     * @returns CreateDefaultRoleResponse
     *
     * @return CreateDefaultRoleResponse
     */
    public function createDefaultRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDefaultRoleWithOptions($headers, $runtime);
    }

    /**
     * 创建实例.
     *
     * @param request - CreateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->autoBackup) {
            @$body['autoBackup'] = $request->autoBackup;
        }

        if (null !== $request->autoRenew) {
            @$body['autoRenew'] = $request->autoRenew;
        }

        if (null !== $request->components) {
            @$body['components'] = $request->components;
        }

        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->dbAdminPassword) {
            @$body['dbAdminPassword'] = $request->dbAdminPassword;
        }

        if (null !== $request->dbVersion) {
            @$body['dbVersion'] = $request->dbVersion;
        }

        if (null !== $request->encrypted) {
            @$body['encrypted'] = $request->encrypted;
        }

        if (null !== $request->ha) {
            @$body['ha'] = $request->ha;
        }

        if (null !== $request->instanceName) {
            @$body['instanceName'] = $request->instanceName;
        }

        if (null !== $request->isMultiAzStorage) {
            @$body['isMultiAzStorage'] = $request->isMultiAzStorage;
        }

        if (null !== $request->kmsKeyId) {
            @$body['kmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->loadReplicas) {
            @$body['loadReplicas'] = $request->loadReplicas;
        }

        if (null !== $request->multiZoneMode) {
            @$body['multiZoneMode'] = $request->multiZoneMode;
        }

        if (null !== $request->paymentDuration) {
            @$body['paymentDuration'] = $request->paymentDuration;
        }

        if (null !== $request->paymentDurationUnit) {
            @$body['paymentDurationUnit'] = $request->paymentDurationUnit;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->promotionNo) {
            @$body['promotionNo'] = $request->promotionNo;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->vSwitchIds) {
            @$body['vSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->vpcId) {
            @$body['vpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$body['zoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/instance/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实例.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/instance/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Get the public IP address whitelist of a Milvus instance.
     *
     * @param request - DescribeAccessControlListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessControlListResponse
     *
     * @param DescribeAccessControlListRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAccessControlListResponse
     */
    public function describeAccessControlListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessControlList',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/milvus/describe_access_control_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the public IP address whitelist of a Milvus instance.
     *
     * @param request - DescribeAccessControlListRequest
     *
     * @returns DescribeAccessControlListResponse
     *
     * @param DescribeAccessControlListRequest $request
     *
     * @return DescribeAccessControlListResponse
     */
    public function describeAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAccessControlListWithOptions($request, $headers, $runtime);
    }

    /**
     * Get information about the custom configuration of each component of Milvus.
     *
     * @param request - DescribeInstanceConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceConfigsResponse
     *
     * @param DescribeInstanceConfigsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceConfigsResponse
     */
    public function describeInstanceConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceConfigs',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/config/describe_milvus_user_config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get information about the custom configuration of each component of Milvus.
     *
     * @param request - DescribeInstanceConfigsRequest
     *
     * @returns DescribeInstanceConfigsResponse
     *
     * @param DescribeInstanceConfigsRequest $request
     *
     * @return DescribeInstanceConfigsResponse
     */
    public function describeInstanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实例详情.
     *
     * @param request - GetInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/instance/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Get the details of an instance.
     *
     * @param request - GetInstanceDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceDetailResponse
     *
     * @param GetInstanceDetailRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetInstanceDetailResponse
     */
    public function getInstanceDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceDetail',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/detail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the details of an instance.
     *
     * @param request - GetInstanceDetailRequest
     *
     * @returns GetInstanceDetailResponse
     *
     * @param GetInstanceDetailRequest $request
     *
     * @return GetInstanceDetailResponse
     */
    public function getInstanceDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * Get the list of Milvus instances under the current account.
     *
     * @param tmpReq - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/order/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the list of Milvus instances under the current account.
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
     * 根据集群ID或者名称搜索集群.
     *
     * @param tmpReq - ListInstancesV2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesV2Response
     *
     * @param ListInstancesV2Request $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListInstancesV2Response
     */
    public function listInstancesV2WithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInstancesV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['instanceName'] = $request->instanceName;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstancesV2',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/instance/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据集群ID或者名称搜索集群.
     *
     * @param request - ListInstancesV2Request
     *
     * @returns ListInstancesV2Response
     *
     * @param ListInstancesV2Request $request
     *
     * @return ListInstancesV2Response
     */
    public function listInstancesV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesV2WithOptions($request, $headers, $runtime);
    }

    /**
     * Update the configuration parameters of each component of Milvus.
     *
     * @param request - ModifyInstanceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->reason) {
            @$query['Reason'] = $request->reason;
        }

        if (null !== $request->userConfig) {
            @$query['UserConfig'] = $request->userConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceConfig',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/config/modify_milvus_config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the configuration parameters of each component of Milvus.
     *
     * @param request - ModifyInstanceConfigRequest
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyInstanceConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * 打标.
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
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打标.
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
     * 删除标签.
     *
     * @param tmpReq - UnTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UnTagResourcesShrinkRequest([]);
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

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除标签.
     *
     * @param request - UnTagResourcesRequest
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Configure Public IP Address Whitelist.
     *
     * @param request - UpdateAccessControlListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccessControlListResponse
     *
     * @param UpdateAccessControlListRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAccessControlListResponse
     */
    public function updateAccessControlListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccessControlList',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/milvus/update_access_control_list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configure Public IP Address Whitelist.
     *
     * @param request - UpdateAccessControlListRequest
     *
     * @returns UpdateAccessControlListResponse
     *
     * @param UpdateAccessControlListRequest $request
     *
     * @return UpdateAccessControlListResponse
     */
    public function updateAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAccessControlListWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新实例.
     *
     * @param request - UpdateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->autoBackup) {
            @$body['autoBackup'] = $request->autoBackup;
        }

        if (null !== $request->components) {
            @$body['components'] = $request->components;
        }

        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->ha) {
            @$body['ha'] = $request->ha;
        }

        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$body['instanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/instance/update',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the name of an instance.
     *
     * @param request - UpdateInstanceNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param UpdateInstanceNameRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceNameWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceName',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/update_name',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of an instance.
     *
     * @param request - UpdateInstanceNameRequest
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param UpdateInstanceNameRequest $request
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceNameWithOptions($request, $headers, $runtime);
    }

    /**
     * Enable or disable Internet access for Milvus.
     *
     * @param request - UpdatePublicNetworkStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePublicNetworkStatusResponse
     *
     * @param UpdatePublicNetworkStatusRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePublicNetworkStatusResponse
     */
    public function updatePublicNetworkStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->componentType) {
            @$query['ComponentType'] = $request->componentType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->publicNetworkEnabled) {
            @$query['PublicNetworkEnabled'] = $request->publicNetworkEnabled;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePublicNetworkStatus',
            'version' => '2023-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/network/updatePublicNetworkStatus',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePublicNetworkStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enable or disable Internet access for Milvus.
     *
     * @param request - UpdatePublicNetworkStatusRequest
     *
     * @returns UpdatePublicNetworkStatusResponse
     *
     * @param UpdatePublicNetworkStatusRequest $request
     *
     * @return UpdatePublicNetworkStatusResponse
     */
    public function updatePublicNetworkStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePublicNetworkStatusWithOptions($request, $headers, $runtime);
    }
}
