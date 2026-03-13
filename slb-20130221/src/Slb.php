<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20130221;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Slb\V20130221\Models\AddBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\AddBackendServersResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\CreateLoadBalancerHTTPListenerRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\CreateLoadBalancerHTTPListenerResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\CreateLoadBalancerRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\CreateLoadBalancerResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\CreateLoadBalancerTCPListenerRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\CreateLoadBalancerTCPListenerResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\DeleteLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\DeleteLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\DeleteLoadBalancerRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\DeleteLoadBalancerResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeBackendServersResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerHTTPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerHTTPListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancersRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancersResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerTCPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerTCPListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\RemoveBackendServersRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\RemoveBackendServersResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerHTTPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerHTTPListenerAttributeResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerListenerStatusRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerListenerStatusResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerNameRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerNameResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerStatusRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerStatusResponse;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerTCPListenerAttributeRequest;
use AlibabaCloud\SDK\Slb\V20130221\Models\SetLoadBalancerTCPListenerAttributeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Slb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'slb.aliyuncs.com',
            'cn-beijing' => 'slb.aliyuncs.com',
            'cn-hangzhou' => 'slb.aliyuncs.com',
            'cn-shanghai' => 'slb.aliyuncs.com',
            'cn-shenzhen' => 'slb.aliyuncs.com',
            'cn-hongkong' => 'slb.aliyuncs.com',
            'ap-southeast-1' => 'slb.aliyuncs.com',
            'us-east-1' => 'slb.aliyuncs.com',
            'us-west-1' => 'slb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'slb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'slb.aliyuncs.com',
            'cn-north-2-gov-1' => 'slb.aliyuncs.com',
            'ap-northeast-2-pop' => 'slb.aliyuncs.com',
            'cn-beijing-finance-pop' => 'slb.aliyuncs.com',
            'cn-beijing-gov-1' => 'slb.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'slb.aliyuncs.com',
            'cn-edge-1' => 'slb.aliyuncs.com',
            'cn-fujian' => 'slb.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'slb.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'slb.aliyuncs.com',
            'cn-hangzhou-finance' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'slb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'slb.aliyuncs.com',
            'cn-hangzhou-test-306' => 'slb.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'slb.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'slb-api.cn-qingdao-nebula.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'slb.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'slb.aliyuncs.com',
            'cn-shanghai-inner' => 'slb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'slb.aliyuncs.com',
            'cn-shenzhen-inner' => 'slb.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'slb.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'slb.aliyuncs.com',
            'cn-wuhan' => 'slb.aliyuncs.com',
            'cn-yushanfang' => 'slb.aliyuncs.com',
            'cn-zhangbei' => 'slb.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'slb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'slb.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'slb.aliyuncs.com',
            'eu-west-1-oxs' => 'slb.aliyuncs.com',
            'rus-west-1-pop' => 'slb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('slb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加后端服务器.
     *
     * @param request - AddBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBackendServersResponse
     *
     * @param AddBackendServersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddBackendServersResponse
     */
    public function addBackendServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServers) {
            @$query['BackendServers'] = $request->backendServers;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddBackendServers',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加后端服务器.
     *
     * @param request - AddBackendServersRequest
     *
     * @returns AddBackendServersResponse
     *
     * @param AddBackendServersRequest $request
     *
     * @return AddBackendServersResponse
     */
    public function addBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBackendServersWithOptions($request, $runtime);
    }

    /**
     * 创建实例.
     *
     * @param request - CreateLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->isPublicAddress) {
            @$query['IsPublicAddress'] = $request->isPublicAddress;
        }

        if (null !== $request->loadBalancerMode) {
            @$query['LoadBalancerMode'] = $request->loadBalancerMode;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancer',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实例.
     *
     * @param request - CreateLoadBalancerRequest
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $request
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * 创建HTTP监听.
     *
     * @param request - CreateLoadBalancerHTTPListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerHTTPListenerResponse
     *
     * @param CreateLoadBalancerHTTPListenerRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->cookie) {
            @$query['Cookie'] = $request->cookie;
        }

        if (null !== $request->cookieTimeout) {
            @$query['CookieTimeout'] = $request->cookieTimeout;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->hostId) {
            @$query['HostId'] = $request->hostId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerStatus) {
            @$query['ListenerStatus'] = $request->listenerStatus;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->stickySession) {
            @$query['StickySession'] = $request->stickySession;
        }

        if (null !== $request->stickySessionType) {
            @$query['StickySessionType'] = $request->stickySessionType;
        }

        if (null !== $request->URI) {
            @$query['URI'] = $request->URI;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->XForwardedFor) {
            @$query['XForwardedFor'] = $request->XForwardedFor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerHTTPListener',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerHTTPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建HTTP监听.
     *
     * @param request - CreateLoadBalancerHTTPListenerRequest
     *
     * @returns CreateLoadBalancerHTTPListenerResponse
     *
     * @param CreateLoadBalancerHTTPListenerRequest $request
     *
     * @return CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPListenerWithOptions($request, $runtime);
    }

    /**
     * 创建TCP监听.
     *
     * @param request - CreateLoadBalancerTCPListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerTCPListenerResponse
     *
     * @param CreateLoadBalancerTCPListenerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->connectPort) {
            @$query['ConnectPort'] = $request->connectPort;
        }

        if (null !== $request->connectTimeout) {
            @$query['ConnectTimeout'] = $request->connectTimeout;
        }

        if (null !== $request->establishedTimeout) {
            @$query['EstablishedTimeout'] = $request->establishedTimeout;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckType) {
            @$query['HealthCheckType'] = $request->healthCheckType;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerStatus) {
            @$query['ListenerStatus'] = $request->listenerStatus;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->masterSlaveServerGroupId) {
            @$query['MasterSlaveServerGroupId'] = $request->masterSlaveServerGroupId;
        }

        if (null !== $request->maxConnection) {
            @$query['MaxConnection'] = $request->maxConnection;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->persistenceTimeout) {
            @$query['PersistenceTimeout'] = $request->persistenceTimeout;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->VServerGroupId) {
            @$query['VServerGroupId'] = $request->VServerGroupId;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerTCPListener',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerTCPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建TCP监听.
     *
     * @param request - CreateLoadBalancerTCPListenerRequest
     *
     * @returns CreateLoadBalancerTCPListenerResponse
     *
     * @param CreateLoadBalancerTCPListenerRequest $request
     *
     * @return CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerTCPListenerWithOptions($request, $runtime);
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLoadBalancerResponse
     *
     * @param DeleteLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLoadBalancer',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteLoadBalancerRequest
     *
     * @returns DeleteLoadBalancerResponse
     *
     * @param DeleteLoadBalancerRequest $request
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * 删除监听.
     *
     * @param request - DeleteLoadBalancerListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLoadBalancerListenerResponse
     *
     * @param DeleteLoadBalancerListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLoadBalancerListener',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除监听.
     *
     * @param request - DeleteLoadBalancerListenerRequest
     *
     * @returns DeleteLoadBalancerListenerResponse
     *
     * @param DeleteLoadBalancerListenerRequest $request
     *
     * @return DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * 查询后端服务器.
     *
     * @param request - DescribeBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackendServersResponse
     *
     * @param DescribeBackendServersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackendServersResponse
     */
    public function describeBackendServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackendServers',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询后端服务器.
     *
     * @param request - DescribeBackendServersRequest
     *
     * @returns DescribeBackendServersResponse
     *
     * @param DescribeBackendServersRequest $request
     *
     * @return DescribeBackendServersResponse
     */
    public function describeBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackendServersWithOptions($request, $runtime);
    }

    /**
     * 查询实例信息.
     *
     * @param request - DescribeLoadBalancerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerAttributeResponse
     *
     * @param DescribeLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerAttribute',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例信息.
     *
     * @param request - DescribeLoadBalancerAttributeRequest
     *
     * @returns DescribeLoadBalancerAttributeResponse
     *
     * @param DescribeLoadBalancerAttributeRequest $request
     *
     * @return DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * 查询HTTP监听配置.
     *
     * @param request - DescribeLoadBalancerHTTPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerHTTPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerHTTPListenerAttribute',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询HTTP监听配置.
     *
     * @param request - DescribeLoadBalancerHTTPListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerHTTPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * 查询TCP监听配置.
     *
     * @param request - DescribeLoadBalancerTCPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerTCPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerTCPListenerAttribute',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询TCP监听配置.
     *
     * @param request - DescribeLoadBalancerTCPListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerTCPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * slb实例批量查询.
     *
     * @param request - DescribeLoadBalancersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancersResponse
     *
     * @param DescribeLoadBalancersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->addressType) {
            @$query['AddressType'] = $request->addressType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->masterZoneId) {
            @$query['MasterZoneId'] = $request->masterZoneId;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serverId) {
            @$query['ServerId'] = $request->serverId;
        }

        if (null !== $request->serverIntranetAddress) {
            @$query['ServerIntranetAddress'] = $request->serverIntranetAddress;
        }

        if (null !== $request->slaveZoneId) {
            @$query['SlaveZoneId'] = $request->slaveZoneId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancers',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * slb实例批量查询.
     *
     * @param request - DescribeLoadBalancersRequest
     *
     * @returns DescribeLoadBalancersResponse
     *
     * @param DescribeLoadBalancersRequest $request
     *
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * 查询可用地域
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询可用地域
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

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * 删除默认服务器组的后端服务器.
     *
     * @param request - RemoveBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveBackendServersResponse
     *
     * @param RemoveBackendServersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveBackendServersResponse
     */
    public function removeBackendServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServers) {
            @$query['BackendServers'] = $request->backendServers;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveBackendServers',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除默认服务器组的后端服务器.
     *
     * @param request - RemoveBackendServersRequest
     *
     * @returns RemoveBackendServersResponse
     *
     * @param RemoveBackendServersRequest $request
     *
     * @return RemoveBackendServersResponse
     */
    public function removeBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBackendServersWithOptions($request, $runtime);
    }

    /**
     * 更新http监听.
     *
     * @param request - SetLoadBalancerHTTPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerHTTPListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cookie) {
            @$query['Cookie'] = $request->cookie;
        }

        if (null !== $request->cookieTimeout) {
            @$query['CookieTimeout'] = $request->cookieTimeout;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->hostId) {
            @$query['HostId'] = $request->hostId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->stickySession) {
            @$query['StickySession'] = $request->stickySession;
        }

        if (null !== $request->stickySessionType) {
            @$query['StickySessionType'] = $request->stickySessionType;
        }

        if (null !== $request->URI) {
            @$query['URI'] = $request->URI;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->XForwardedFor) {
            @$query['XForwardedFor'] = $request->XForwardedFor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerHTTPListenerAttribute',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新http监听.
     *
     * @param request - SetLoadBalancerHTTPListenerAttributeRequest
     *
     * @returns SetLoadBalancerHTTPListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * 修改监听状态
     *
     * @param request - SetLoadBalancerListenerStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerListenerStatusResponse
     *
     * @param SetLoadBalancerListenerStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetLoadBalancerListenerStatusResponse
     */
    public function setLoadBalancerListenerStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hostId) {
            @$query['HostId'] = $request->hostId;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerStatus) {
            @$query['ListenerStatus'] = $request->listenerStatus;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerListenerStatus',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerListenerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改监听状态
     *
     * @param request - SetLoadBalancerListenerStatusRequest
     *
     * @returns SetLoadBalancerListenerStatusResponse
     *
     * @param SetLoadBalancerListenerStatusRequest $request
     *
     * @return SetLoadBalancerListenerStatusResponse
     */
    public function setLoadBalancerListenerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerListenerStatusWithOptions($request, $runtime);
    }

    /**
     * 修改实例名称.
     *
     * @param request - SetLoadBalancerNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerNameResponse
     *
     * @param SetLoadBalancerNameRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetLoadBalancerNameResponse
     */
    public function setLoadBalancerNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerName',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例名称.
     *
     * @param request - SetLoadBalancerNameRequest
     *
     * @returns SetLoadBalancerNameResponse
     *
     * @param SetLoadBalancerNameRequest $request
     *
     * @return SetLoadBalancerNameResponse
     */
    public function setLoadBalancerName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerNameWithOptions($request, $runtime);
    }

    /**
     * 修改实例状态
     *
     * @param request - SetLoadBalancerStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerStatusResponse
     *
     * @param SetLoadBalancerStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerStatus) {
            @$query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->accessKeyId) {
            @$query['access_key_id'] = $request->accessKeyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerStatus',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例状态
     *
     * @param request - SetLoadBalancerStatusRequest
     *
     * @returns SetLoadBalancerStatusResponse
     *
     * @param SetLoadBalancerStatusRequest $request
     *
     * @return SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerStatusWithOptions($request, $runtime);
    }

    /**
     * 更新tcp监听.
     *
     * @param request - SetLoadBalancerTCPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerTCPListenerAttributeResponse
     *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectPort) {
            @$query['ConnectPort'] = $request->connectPort;
        }

        if (null !== $request->connectTimeout) {
            @$query['ConnectTimeout'] = $request->connectTimeout;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->hostId) {
            @$query['HostId'] = $request->hostId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->persistenceTimeout) {
            @$query['PersistenceTimeout'] = $request->persistenceTimeout;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerTCPListenerAttribute',
            'version' => '2013-02-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新tcp监听.
     *
     * @param request - SetLoadBalancerTCPListenerAttributeRequest
     *
     * @returns SetLoadBalancerTCPListenerAttributeResponse
     *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }
}
