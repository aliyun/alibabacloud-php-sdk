<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\AddServersToServerGroupRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\AddServersToServerGroupResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateListenerRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateListenerResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateLoadBalancerRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateLoadBalancerResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateServerGroupRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateServerGroupResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DeleteListenerRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DeleteListenerResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DeleteLoadBalancerRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DeleteLoadBalancerResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DeleteServerGroupRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DeleteServerGroupResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerAttributeRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerAttributeResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListListenersRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListListenersResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListLoadBalancersRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListLoadBalancersResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupServersRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupServersResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\RemoveServersFromServerGroupRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\RemoveServersFromServerGroupResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateListenerAttributeRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateListenerAttributeResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateLoadBalancerZonesRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateLoadBalancerZonesResponse;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateServerGroupAttributeRequest;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateServerGroupAttributeResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Gwlb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gwlb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 服务器组中添加后端服务器
     *  *
     * @param AddServersToServerGroupRequest $request AddServersToServerGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddServersToServerGroupResponse AddServersToServerGroupResponse
     */
    public function addServersToServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->servers)) {
            $bodyFlat['Servers'] = $request->servers;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddServersToServerGroup',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddServersToServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 服务器组中添加后端服务器
     *  *
     * @param AddServersToServerGroupRequest $request AddServersToServerGroupRequest
     *
     * @return AddServersToServerGroupResponse AddServersToServerGroupResponse
     */
    public function addServersToServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServersToServerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建监听
     *  *
     * @param CreateListenerRequest $request CreateListenerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateListenerResponse CreateListenerResponse
     */
    public function createListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerDescription)) {
            $body['ListenerDescription'] = $request->listenerDescription;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateListener',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建监听
     *  *
     * @param CreateListenerRequest $request CreateListenerRequest
     *
     * @return CreateListenerResponse CreateListenerResponse
     */
    public function createListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListenerWithOptions($request, $runtime);
    }

    /**
     * @summary 创建负载均衡实例
     *  *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addressIpVersion)) {
            $body['AddressIpVersion'] = $request->addressIpVersion;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $body['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneMappings)) {
            $bodyFlat['ZoneMappings'] = $request->zoneMappings;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancer',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建负载均衡实例
     *  *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @summary 创建服务器组
     *  *
     * @param CreateServerGroupRequest $request CreateServerGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServerGroupResponse CreateServerGroupResponse
     */
    public function createServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->connectionDrainConfig)) {
            $bodyFlat['ConnectionDrainConfig'] = $request->connectionDrainConfig;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $bodyFlat['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $body['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverGroupName)) {
            $body['ServerGroupName'] = $request->serverGroupName;
        }
        if (!Utils::isUnset($request->serverGroupType)) {
            $body['ServerGroupType'] = $request->serverGroupType;
        }
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServerGroup',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建服务器组
     *  *
     * @param CreateServerGroupRequest $request CreateServerGroupRequest
     *
     * @return CreateServerGroupResponse CreateServerGroupResponse
     */
    public function createServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 删除监听
     *  *
     * @param DeleteListenerRequest $request DeleteListenerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteListenerResponse DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteListener',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除监听
     *  *
     * @param DeleteListenerRequest $request DeleteListenerRequest
     *
     * @return DeleteListenerResponse DeleteListenerResponse
     */
    public function deleteListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListenerWithOptions($request, $runtime);
    }

    /**
     * @summary 删除负载均衡实例
     *  *
     * @param DeleteLoadBalancerRequest $request DeleteLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoadBalancerResponse DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoadBalancer',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除负载均衡实例
     *  *
     * @param DeleteLoadBalancerRequest $request DeleteLoadBalancerRequest
     *
     * @return DeleteLoadBalancerResponse DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @summary 删除服务器组
     *  *
     * @param DeleteServerGroupRequest $request DeleteServerGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteServerGroupResponse DeleteServerGroupResponse
     */
    public function deleteServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteServerGroup',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除服务器组
     *  *
     * @param DeleteServerGroupRequest $request DeleteServerGroupRequest
     *
     * @return DeleteServerGroupResponse DeleteServerGroupResponse
     */
    public function deleteServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 查询地域
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询地域
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询可用区
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询可用区
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询监听详细信息
     *  *
     * @param GetListenerAttributeRequest $request GetListenerAttributeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetListenerAttributeResponse GetListenerAttributeResponse
     */
    public function getListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetListenerAttribute',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询监听详细信息
     *  *
     * @param GetListenerAttributeRequest $request GetListenerAttributeRequest
     *
     * @return GetListenerAttributeResponse GetListenerAttributeResponse
     */
    public function getListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 查询监听健康检查状态
     *  *
     * @param GetListenerHealthStatusRequest $request GetListenerHealthStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetListenerHealthStatusResponse GetListenerHealthStatusResponse
     */
    public function getListenerHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->filter)) {
            $bodyFlat['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->skip)) {
            $body['Skip'] = $request->skip;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetListenerHealthStatus',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetListenerHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询监听健康检查状态
     *  *
     * @param GetListenerHealthStatusRequest $request GetListenerHealthStatusRequest
     *
     * @return GetListenerHealthStatusResponse GetListenerHealthStatusResponse
     */
    public function getListenerHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListenerHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 查询负载均衡实例详细信息
     *  *
     * @param GetLoadBalancerAttributeRequest $request GetLoadBalancerAttributeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLoadBalancerAttributeResponse GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLoadBalancerAttribute',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询负载均衡实例详细信息
     *  *
     * @param GetLoadBalancerAttributeRequest $request GetLoadBalancerAttributeRequest
     *
     * @return GetLoadBalancerAttributeResponse GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 查询监听列表
     *  *
     * @param ListListenersRequest $request ListListenersRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListenersResponse ListListenersResponse
     */
    public function listListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->listenerIds)) {
            $bodyFlat['ListenerIds'] = $request->listenerIds;
        }
        if (!Utils::isUnset($request->loadBalancerIds)) {
            $bodyFlat['LoadBalancerIds'] = $request->loadBalancerIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->skip)) {
            $body['Skip'] = $request->skip;
        }
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListListeners',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询监听列表
     *  *
     * @param ListListenersRequest $request ListListenersRequest
     *
     * @return ListListenersResponse ListListenersResponse
     */
    public function listListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询负载均衡实例列表
     *  *
     * @param ListLoadBalancersRequest $request ListLoadBalancersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLoadBalancersResponse ListLoadBalancersResponse
     */
    public function listLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addressIpVersion)) {
            $body['AddressIpVersion'] = $request->addressIpVersion;
        }
        if (!Utils::isUnset($request->loadBalancerBusinessStatus)) {
            $body['LoadBalancerBusinessStatus'] = $request->loadBalancerBusinessStatus;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->loadBalancerIds)) {
            $bodyFlat['LoadBalancerIds'] = $request->loadBalancerIds;
        }
        if (!Utils::isUnset($request->loadBalancerNames)) {
            $bodyFlat['LoadBalancerNames'] = $request->loadBalancerNames;
        }
        if (!Utils::isUnset($request->loadBalancerStatus)) {
            $body['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->skip)) {
            $body['Skip'] = $request->skip;
        }
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcIds)) {
            $bodyFlat['VpcIds'] = $request->vpcIds;
        }
        if (!Utils::isUnset($request->zoneIds)) {
            $bodyFlat['ZoneIds'] = $request->zoneIds;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListLoadBalancers',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询负载均衡实例列表
     *  *
     * @param ListLoadBalancersRequest $request ListLoadBalancersRequest
     *
     * @return ListLoadBalancersResponse ListLoadBalancersResponse
     */
    public function listLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询服务器组中的服务器列表
     *  *
     * @param ListServerGroupServersRequest $request ListServerGroupServersRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServerGroupServersResponse ListServerGroupServersResponse
     */
    public function listServerGroupServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->serverIds)) {
            $bodyFlat['ServerIds'] = $request->serverIds;
        }
        if (!Utils::isUnset($request->serverIps)) {
            $bodyFlat['ServerIps'] = $request->serverIps;
        }
        if (!Utils::isUnset($request->skip)) {
            $body['Skip'] = $request->skip;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServerGroupServers',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServerGroupServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询服务器组中的服务器列表
     *  *
     * @param ListServerGroupServersRequest $request ListServerGroupServersRequest
     *
     * @return ListServerGroupServersResponse ListServerGroupServersResponse
     */
    public function listServerGroupServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupServersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询服务器组列表
     *  *
     * @param ListServerGroupsRequest $request ListServerGroupsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServerGroupsResponse ListServerGroupsResponse
     */
    public function listServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->serverGroupIds)) {
            $bodyFlat['ServerGroupIds'] = $request->serverGroupIds;
        }
        if (!Utils::isUnset($request->serverGroupNames)) {
            $bodyFlat['ServerGroupNames'] = $request->serverGroupNames;
        }
        if (!Utils::isUnset($request->serverGroupType)) {
            $body['ServerGroupType'] = $request->serverGroupType;
        }
        if (!Utils::isUnset($request->skip)) {
            $body['Skip'] = $request->skip;
        }
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServerGroups',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询服务器组列表
     *  *
     * @param ListServerGroupsRequest $request ListServerGroupsRequest
     *
     * @return ListServerGroupsResponse ListServerGroupsResponse
     */
    public function listServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资源标签
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->resourceId)) {
            $bodyFlat['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询资源标签
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 迁移资源组
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $body['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 迁移资源组
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 服务器组中删除后端服务器
     *  *
     * @param RemoveServersFromServerGroupRequest $request RemoveServersFromServerGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveServersFromServerGroupResponse RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->servers)) {
            $bodyFlat['Servers'] = $request->servers;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveServersFromServerGroup',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveServersFromServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 服务器组中删除后端服务器
     *  *
     * @param RemoveServersFromServerGroupRequest $request RemoveServersFromServerGroupRequest
     *
     * @return RemoveServersFromServerGroupResponse RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeServersFromServerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 添加资源标签
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->resourceId)) {
            $bodyFlat['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加资源标签
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除资源标签
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->all)) {
            $body['All'] = $request->all;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->resourceId)) {
            $bodyFlat['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $bodyFlat['TagKey'] = $request->tagKey;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除资源标签
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 更新监听属性
     *  *
     * @param UpdateListenerAttributeRequest $request UpdateListenerAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateListenerAttributeResponse UpdateListenerAttributeResponse
     */
    public function updateListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->listenerDescription)) {
            $body['ListenerDescription'] = $request->listenerDescription;
        }
        if (!Utils::isUnset($request->listenerId)) {
            $body['ListenerId'] = $request->listenerId;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateListenerAttribute',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新监听属性
     *  *
     * @param UpdateListenerAttributeRequest $request UpdateListenerAttributeRequest
     *
     * @return UpdateListenerAttributeResponse UpdateListenerAttributeResponse
     */
    public function updateListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 更新负载均衡实例属性
     *  *
     * @param UpdateLoadBalancerAttributeRequest $request UpdateLoadBalancerAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerAttributeResponse UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $body['LoadBalancerName'] = $request->loadBalancerName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerAttribute',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新负载均衡实例属性
     *  *
     * @param UpdateLoadBalancerAttributeRequest $request UpdateLoadBalancerAttributeRequest
     *
     * @return UpdateLoadBalancerAttributeResponse UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 更新负载均衡实例可用区
     *  *
     * @param UpdateLoadBalancerZonesRequest $request UpdateLoadBalancerZonesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerZonesResponse UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $body['LoadBalancerId'] = $request->loadBalancerId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->zoneMappings)) {
            $bodyFlat['ZoneMappings'] = $request->zoneMappings;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLoadBalancerZones',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLoadBalancerZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新负载均衡实例可用区
     *  *
     * @param UpdateLoadBalancerZonesRequest $request UpdateLoadBalancerZonesRequest
     *
     * @return UpdateLoadBalancerZonesResponse UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerZonesWithOptions($request, $runtime);
    }

    /**
     * @summary 更新服务器组属性
     *  *
     * @param UpdateServerGroupAttributeRequest $request UpdateServerGroupAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServerGroupAttributeResponse UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->connectionDrainConfig)) {
            $bodyFlat['ConnectionDrainConfig'] = $request->connectionDrainConfig;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->healthCheckConfig)) {
            $bodyFlat['HealthCheckConfig'] = $request->healthCheckConfig;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $body['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverGroupId)) {
            $body['ServerGroupId'] = $request->serverGroupId;
        }
        if (!Utils::isUnset($request->serverGroupName)) {
            $body['ServerGroupName'] = $request->serverGroupName;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServerGroupAttribute',
            'version'     => '2024-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新服务器组属性
     *  *
     * @param UpdateServerGroupAttributeRequest $request UpdateServerGroupAttributeRequest
     *
     * @return UpdateServerGroupAttributeResponse UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServerGroupAttributeWithOptions($request, $runtime);
    }
}
