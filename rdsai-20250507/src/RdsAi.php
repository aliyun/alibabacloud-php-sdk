<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceShrinkRequest;
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
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceRAGConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceRAGConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceSSLRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceSSLResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceStorageConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceStorageConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceAuthConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceAuthConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceAuthConfigShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceRAGConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceRAGConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceRAGConfigShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceSSLRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceSSLResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceStorageConfigRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceStorageConfigResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ModifyInstanceStorageConfigShrinkRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetInstancePasswordRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetInstancePasswordResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StartInstanceResponse;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StopInstanceRequest;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\StopInstanceResponse;
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
     * @param tmpReq - CreateAppInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppInstanceResponse
     *
     * @param CreateAppInstanceRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAppInstanceResponse
     */
    public function createAppInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAppInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->DBInstanceConfig) {
            $request->DBInstanceConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceConfig, 'DBInstanceConfig', 'json');
        }

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

        if (null !== $request->DBInstanceConfigShrink) {
            @$query['DBInstanceConfig'] = $request->DBInstanceConfigShrink;
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

        if (null !== $request->publicEndpointEnabled) {
            @$query['PublicEndpointEnabled'] = $request->publicEndpointEnabled;
        }

        if (null !== $request->publicNetworkAccessEnabled) {
            @$query['PublicNetworkAccessEnabled'] = $request->publicNetworkAccessEnabled;
        }

        if (null !== $request->RAGEnabled) {
            @$query['RAGEnabled'] = $request->RAGEnabled;
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
     * 查看实例RAG配置.
     *
     * @param request - DescribeInstanceRAGConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceRAGConfigResponse
     *
     * @param DescribeInstanceRAGConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceRAGConfigResponse
     */
    public function describeInstanceRAGConfigWithOptions($request, $runtime)
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
            'action' => 'DescribeInstanceRAGConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceRAGConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看实例RAG配置.
     *
     * @param request - DescribeInstanceRAGConfigRequest
     *
     * @returns DescribeInstanceRAGConfigResponse
     *
     * @param DescribeInstanceRAGConfigRequest $request
     *
     * @return DescribeInstanceRAGConfigResponse
     */
    public function describeInstanceRAGConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRAGConfigWithOptions($request, $runtime);
    }

    /**
     * 查看实例SSL配置.
     *
     * @param request - DescribeInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSSLResponse
     *
     * @param DescribeInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceSSLResponse
     */
    public function describeInstanceSSLWithOptions($request, $runtime)
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
            'action' => 'DescribeInstanceSSL',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看实例SSL配置.
     *
     * @param request - DescribeInstanceSSLRequest
     *
     * @returns DescribeInstanceSSLResponse
     *
     * @param DescribeInstanceSSLRequest $request
     *
     * @return DescribeInstanceSSLResponse
     */
    public function describeInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * 查看实例存储配置.
     *
     * @param request - DescribeInstanceStorageConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceStorageConfigResponse
     *
     * @param DescribeInstanceStorageConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceStorageConfigResponse
     */
    public function describeInstanceStorageConfigWithOptions($request, $runtime)
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
            'action' => 'DescribeInstanceStorageConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceStorageConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看实例存储配置.
     *
     * @param request - DescribeInstanceStorageConfigRequest
     *
     * @returns DescribeInstanceStorageConfigResponse
     *
     * @param DescribeInstanceStorageConfigRequest $request
     *
     * @return DescribeInstanceStorageConfigResponse
     */
    public function describeInstanceStorageConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStorageConfigWithOptions($request, $runtime);
    }

    /**
     * 修改Supabase Auth相关配置.
     *
     * @param tmpReq - ModifyInstanceAuthConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAuthConfigResponse
     *
     * @param ModifyInstanceAuthConfigRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceAuthConfigResponse
     */
    public function modifyInstanceAuthConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceAuthConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configList) {
            $request->configListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }

        $query = [];
        if (null !== $request->configListShrink) {
            @$query['ConfigList'] = $request->configListShrink;
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
            'action' => 'ModifyInstanceAuthConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改Supabase Auth相关配置.
     *
     * @param request - ModifyInstanceAuthConfigRequest
     *
     * @returns ModifyInstanceAuthConfigResponse
     *
     * @param ModifyInstanceAuthConfigRequest $request
     *
     * @return ModifyInstanceAuthConfigResponse
     */
    public function modifyInstanceAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAuthConfigWithOptions($request, $runtime);
    }

    /**
     * 修改实例RAG配置.
     *
     * @param request - ModifyInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->configValue) {
            @$query['ConfigValue'] = $request->configValue;
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
            'action' => 'ModifyInstanceConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例RAG配置.
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

        return $this->modifyInstanceConfigWithOptions($request, $runtime);
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

    /**
     * 修改实例RAG配置.
     *
     * @param tmpReq - ModifyInstanceRAGConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceRAGConfigResponse
     *
     * @param ModifyInstanceRAGConfigRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceRAGConfigResponse
     */
    public function modifyInstanceRAGConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceRAGConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configList) {
            $request->configListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configListShrink) {
            @$query['ConfigList'] = $request->configListShrink;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceRAGConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceRAGConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例RAG配置.
     *
     * @param request - ModifyInstanceRAGConfigRequest
     *
     * @returns ModifyInstanceRAGConfigResponse
     *
     * @param ModifyInstanceRAGConfigRequest $request
     *
     * @return ModifyInstanceRAGConfigResponse
     */
    public function modifyInstanceRAGConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceRAGConfigWithOptions($request, $runtime);
    }

    /**
     * 修改实例SSL配置.
     *
     * @param request - ModifyInstanceSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceSSLResponse
     *
     * @param ModifyInstanceSSLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->CAType) {
            @$query['CAType'] = $request->CAType;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->SSLEnabled) {
            @$query['SSLEnabled'] = $request->SSLEnabled;
        }

        if (null !== $request->serverCert) {
            @$query['ServerCert'] = $request->serverCert;
        }

        if (null !== $request->serverKey) {
            @$query['ServerKey'] = $request->serverKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceSSL',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例SSL配置.
     *
     * @param request - ModifyInstanceSSLRequest
     *
     * @returns ModifyInstanceSSLResponse
     *
     * @param ModifyInstanceSSLRequest $request
     *
     * @return ModifyInstanceSSLResponse
     */
    public function modifyInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * 修改实例存储配置.
     *
     * @param tmpReq - ModifyInstanceStorageConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceStorageConfigResponse
     *
     * @param ModifyInstanceStorageConfigRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyInstanceStorageConfigResponse
     */
    public function modifyInstanceStorageConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceStorageConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configList) {
            $request->configListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configList, 'ConfigList', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configListShrink) {
            @$query['ConfigList'] = $request->configListShrink;
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
            'action' => 'ModifyInstanceStorageConfig',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceStorageConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例存储配置.
     *
     * @param request - ModifyInstanceStorageConfigRequest
     *
     * @returns ModifyInstanceStorageConfigResponse
     *
     * @param ModifyInstanceStorageConfigRequest $request
     *
     * @return ModifyInstanceStorageConfigResponse
     */
    public function modifyInstanceStorageConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceStorageConfigWithOptions($request, $runtime);
    }

    /**
     * 重置实例密码
     *
     * @param request - ResetInstancePasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetInstancePasswordResponse
     *
     * @param ResetInstancePasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ResetInstancePasswordResponse
     */
    public function resetInstancePasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dashboardPassword) {
            @$query['DashboardPassword'] = $request->dashboardPassword;
        }

        if (null !== $request->databasePassword) {
            @$query['DatabasePassword'] = $request->databasePassword;
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
            'action' => 'ResetInstancePassword',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetInstancePasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重置实例密码
     *
     * @param request - ResetInstancePasswordRequest
     *
     * @returns ResetInstancePasswordResponse
     *
     * @param ResetInstancePasswordRequest $request
     *
     * @return ResetInstancePasswordResponse
     */
    public function resetInstancePassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetInstancePasswordWithOptions($request, $runtime);
    }

    /**
     * 重启实例.
     *
     * @param request - RestartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
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
            'action' => 'RestartInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重启实例.
     *
     * @param request - RestartInstanceRequest
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * 启动实例.
     *
     * @param request - StartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
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
            'action' => 'StartInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动实例.
     *
     * @param request - StartInstanceRequest
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * 暂停实例.
     *
     * @param request - StopInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
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
            'action' => 'StopInstance',
            'version' => '2025-05-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 暂停实例.
     *
     * @param request - StopInstanceRequest
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }
}
