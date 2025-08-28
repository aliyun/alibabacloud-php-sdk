<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteAppInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteAppInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstanceAttributeRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstanceAttributeResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstancesRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstancesResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceEndpointsRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceEndpointsResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceIpWhitelistResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class RdsAi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rdsai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建应用服务实例.
     *
     * @param request - CreateAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppInstanceResponse
     *
     * @param CreateAppInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAppInstanceResponse
     */
    public function createAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
        }

        if (null !== $request->dashboardPassword) {
            @$query['DashboardPassword'] = $request->dashboardPassword;
        }

        if (null !== $request->dashboardUsername) {
            @$query['DashboardUsername'] = $request->dashboardUsername;
        }

        if (null !== $request->databasePassword) {
            @$query['DatabasePassword'] = $request->databasePassword;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->publicNetworkAccessEnabled) {
            @$query['PublicNetworkAccessEnabled'] = $request->publicNetworkAccessEnabled;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用服务实例.
     *
     * @param request - CreateAppInstanceRequest
     *
     * @returns CreateAppInstanceResponse
     *
     * @param CreateAppInstanceRequest $request
     *
     * @return CreateAppInstanceResponse
     */
    public function createAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceWithOptions($request, $runtime);
    }

    /**
     * 删除应用服务实例.
     *
     * @param request - DeleteAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppInstanceResponse
     *
     * @param DeleteAppInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAppInstanceResponse
     */
    public function deleteAppInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用服务实例.
     *
     * @param request - DeleteAppInstanceRequest
     *
     * @returns DeleteAppInstanceResponse
     *
     * @param DeleteAppInstanceRequest $request
     *
     * @return DeleteAppInstanceResponse
     */
    public function deleteAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstanceWithOptions($request, $runtime);
    }

    /**
     * 查询应用服务详情.
     *
     * @param request - DescribeAppInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppInstanceAttributeResponse
     *
     * @param DescribeAppInstanceAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAppInstanceAttributeResponse
     */
    public function describeAppInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppInstanceAttribute',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用服务详情.
     *
     * @param request - DescribeAppInstanceAttributeRequest
     *
     * @returns DescribeAppInstanceAttributeResponse
     *
     * @param DescribeAppInstanceAttributeRequest $request
     *
     * @return DescribeAppInstanceAttributeResponse
     */
    public function describeAppInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * 查询应用服务列表.
     *
     * @param request - DescribeAppInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppInstancesResponse
     *
     * @param DescribeAppInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAppInstancesResponse
     */
    public function describeAppInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->DBInstanceName) {
            @$query['DBInstanceName'] = $request->DBInstanceName;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppInstances',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用服务列表.
     *
     * @param request - DescribeAppInstancesRequest
     *
     * @returns DescribeAppInstancesResponse
     *
     * @param DescribeAppInstancesRequest $request
     *
     * @return DescribeAppInstancesResponse
     */
    public function describeAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppInstancesWithOptions($request, $runtime);
    }

    /**
     * 查看实例认证信息.
     *
     * @param request - DescribeInstanceAuthInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAuthInfoResponse
     *
     * @param DescribeInstanceAuthInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceAuthInfoResponse
     */
    public function describeInstanceAuthInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAuthInfo',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAuthInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看实例认证信息.
     *
     * @param request - DescribeInstanceAuthInfoRequest
     *
     * @returns DescribeInstanceAuthInfoResponse
     *
     * @param DescribeInstanceAuthInfoRequest $request
     *
     * @return DescribeInstanceAuthInfoResponse
     */
    public function describeInstanceAuthInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAuthInfoWithOptions($request, $runtime);
    }

    /**
     * 查看服务连接信息.
     *
     * @param request - DescribeInstanceEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceEndpointsResponse
     *
     * @param DescribeInstanceEndpointsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceEndpointsResponse
     */
    public function describeInstanceEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceEndpoints',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看服务连接信息.
     *
     * @param request - DescribeInstanceEndpointsRequest
     *
     * @returns DescribeInstanceEndpointsResponse
     *
     * @param DescribeInstanceEndpointsRequest $request
     *
     * @return DescribeInstanceEndpointsResponse
     */
    public function describeInstanceEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceEndpointsWithOptions($request, $runtime);
    }

    /**
     * 查询服务白名单.
     *
     * @param request - DescribeInstanceIpWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceIpWhitelistResponse
     *
     * @param DescribeInstanceIpWhitelistRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceIpWhitelistResponse
     */
    public function describeInstanceIpWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceIpWhitelist',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务白名单.
     *
     * @param request - DescribeInstanceIpWhitelistRequest
     *
     * @returns DescribeInstanceIpWhitelistResponse
     *
     * @param DescribeInstanceIpWhitelistRequest $request
     *
     * @return DescribeInstanceIpWhitelistResponse
     */
    public function describeInstanceIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceIpWhitelistWithOptions($request, $runtime);
    }

    /**
     * 修改服务白名单.
     *
     * @param request - ModifyInstanceIpWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceIpWhitelistResponse
     *
     * @param ModifyInstanceIpWhitelistRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyInstanceIpWhitelistResponse
     */
    public function modifyInstanceIpWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->ipWhitelist) {
            @$query['IpWhitelist'] = $request->ipWhitelist;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceIpWhitelist',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改服务白名单.
     *
     * @param request - ModifyInstanceIpWhitelistRequest
     *
     * @returns ModifyInstanceIpWhitelistResponse
     *
     * @param ModifyInstanceIpWhitelistRequest $request
     *
     * @return ModifyInstanceIpWhitelistResponse
     */
    public function modifyInstanceIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceIpWhitelistWithOptions($request, $runtime);
    }
}
