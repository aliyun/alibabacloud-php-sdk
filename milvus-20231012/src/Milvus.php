<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Milvus\V20231012\Models\CreateDefaultRoleResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeAccessControlListRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeAccessControlListResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeInstanceConfigsRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\DescribeInstanceConfigsResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ModifyInstanceConfigRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ModifyInstanceConfigResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateAccessControlListRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateAccessControlListResponse;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateInstanceNameResponse;
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
