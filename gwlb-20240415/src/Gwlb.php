<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Gwlb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds backend servers to the server group of a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *AddServersToServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1.  You can call the ListServerGroups operation to query the status of the server group.
     * *   If the server group is in the **Configuring** state, the server group is being modified.
     * *   If the server group is in the **Available** state, the server group is running.
     * 2.  You can call the ListServerGroupServers operation to query the status of the backend server.
     * *   If the backend server is in the **Adding** state, the backend server is being added to the server group.
     * *   If the backend server is in the **Available** state, the server is running.
     *
     * @param request - AddServersToServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddServersToServerGroupResponse
     *
     * @param AddServersToServerGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddServersToServerGroupResponse
     */
    public function addServersToServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->servers) {
            @$bodyFlat['Servers'] = $request->servers;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddServersToServerGroup',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddServersToServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds backend servers to the server group of a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *AddServersToServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1.  You can call the ListServerGroups operation to query the status of the server group.
     * *   If the server group is in the **Configuring** state, the server group is being modified.
     * *   If the server group is in the **Available** state, the server group is running.
     * 2.  You can call the ListServerGroupServers operation to query the status of the backend server.
     * *   If the backend server is in the **Adding** state, the backend server is being added to the server group.
     * *   If the backend server is in the **Available** state, the server is running.
     *
     * @param request - AddServersToServerGroupRequest
     *
     * @returns AddServersToServerGroupResponse
     *
     * @param AddServersToServerGroupRequest $request
     *
     * @return AddServersToServerGroupResponse
     */
    public function addServersToServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServersToServerGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a listener for a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *CreateListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the **GetListenerAttribute** operation to query the status of the task.
     * *   If the listener is in the **Provisioning** state, the listener is being created.
     * *   If the listener is in the **Running** state, the listener is running.
     *
     * @param request - CreateListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateListenerResponse
     *
     * @param CreateListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateListenerResponse
     */
    public function createListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerDescription) {
            @$body['ListenerDescription'] = $request->listenerDescription;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateListener',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a listener for a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *CreateListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the **GetListenerAttribute** operation to query the status of the task.
     * *   If the listener is in the **Provisioning** state, the listener is being created.
     * *   If the listener is in the **Running** state, the listener is running.
     *
     * @param request - CreateListenerRequest
     *
     * @returns CreateListenerResponse
     *
     * @param CreateListenerRequest $request
     *
     * @return CreateListenerResponse
     */
    public function createListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListenerWithOptions($request, $runtime);
    }

    /**
     * Creates a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *Make sure that you fully understand the billing methods and [pricing](https://help.aliyun.com/document_detail/2806160.html) of GWLB before calling this operation**.
     * *   When you create a GWLB instance, the service-linked role AliyunServiceRoleForGwlb is automatically created.
     * *   CreateLoadBalancer is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the GetLoadBalancerAttribute operation to query the status of a GWLB instance.
     *     *   If the GWLB instance is in the Provisioning state, the GWLB instance is being created.
     *     *   If the GWLB instance is in the Active state, the GWLB instance is created.
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
        $body = [];
        if (null !== $request->addressIpVersion) {
            @$body['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerName) {
            @$body['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneMappings) {
            @$bodyFlat['ZoneMappings'] = $request->zoneMappings;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancer',
            'version' => '2024-04-15',
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
     * Creates a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *Make sure that you fully understand the billing methods and [pricing](https://help.aliyun.com/document_detail/2806160.html) of GWLB before calling this operation**.
     * *   When you create a GWLB instance, the service-linked role AliyunServiceRoleForGwlb is automatically created.
     * *   CreateLoadBalancer is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the GetLoadBalancerAttribute operation to query the status of a GWLB instance.
     *     *   If the GWLB instance is in the Provisioning state, the GWLB instance is being created.
     *     *   If the GWLB instance is in the Active state, the GWLB instance is created.
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
     * Creates a server group for a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the ListServerGroups operation to query the status of the task.
     * *   If the server group is in the **Creating** state, it indicates that the server group is being created.
     * *   If the server group is in the **Available** state, it indicates that the server group is created.
     *
     * @param request - CreateServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServerGroupResponse
     *
     * @param CreateServerGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateServerGroupResponse
     */
    public function createServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $bodyFlat = [];
        if (null !== $request->connectionDrainConfig) {
            @$bodyFlat['ConnectionDrainConfig'] = $request->connectionDrainConfig;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->healthCheckConfig) {
            @$bodyFlat['HealthCheckConfig'] = $request->healthCheckConfig;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scheduler) {
            @$body['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverFailoverMode) {
            @$body['ServerFailoverMode'] = $request->serverFailoverMode;
        }

        if (null !== $request->serverGroupName) {
            @$body['ServerGroupName'] = $request->serverGroupName;
        }

        if (null !== $request->serverGroupType) {
            @$body['ServerGroupType'] = $request->serverGroupType;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServerGroup',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a server group for a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *CreateServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the ListServerGroups operation to query the status of the task.
     * *   If the server group is in the **Creating** state, it indicates that the server group is being created.
     * *   If the server group is in the **Available** state, it indicates that the server group is created.
     *
     * @param request - CreateServerGroupRequest
     *
     * @returns CreateServerGroupResponse
     *
     * @param CreateServerGroupRequest $request
     *
     * @return CreateServerGroupResponse
     */
    public function createServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a listener from a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *DeleteListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the **GetListenerAttribute** operation to query the status of the task.
     * *   If the listener is in the **Deleting** state, the listener is being deleted.
     * *   If the listener cannot be found, the listener is deleted.
     *
     * @param request - DeleteListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteListenerResponse
     *
     * @param DeleteListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteListener',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a listener from a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *DeleteListener** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the **GetListenerAttribute** operation to query the status of the task.
     * *   If the listener is in the **Deleting** state, the listener is being deleted.
     * *   If the listener cannot be found, the listener is deleted.
     *
     * @param request - DeleteListenerRequest
     *
     * @returns DeleteListenerResponse
     *
     * @param DeleteListenerRequest $request
     *
     * @return DeleteListenerResponse
     */
    public function deleteListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListenerWithOptions($request, $runtime);
    }

    /**
     * Deletes a Gateway Load Balancer (GWLB) instance.
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
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteLoadBalancer',
            'version' => '2024-04-15',
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
     * Deletes a Gateway Load Balancer (GWLB) instance.
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
     * Deletes a server group from a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * You can delete server groups that are not associated with listeners.
     *
     * @param request - DeleteServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServerGroupResponse
     *
     * @param DeleteServerGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteServerGroupResponse
     */
    public function deleteServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteServerGroup',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a server group from a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * You can delete server groups that are not associated with listeners.
     *
     * @param request - DeleteServerGroupRequest
     *
     * @returns DeleteServerGroupResponse
     *
     * @param DeleteServerGroupRequest $request
     *
     * @return DeleteServerGroupResponse
     */
    public function deleteServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the most recent region list of Gateway Load Balancer (GWLB).
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
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2024-04-15',
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
     * Queries the most recent region list of Gateway Load Balancer (GWLB).
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
     * Queries the most recent zone list of Gateway Load Balancer (GWLB).
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the most recent zone list of Gateway Load Balancer (GWLB).
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Gateway Load Balancer (GWLB) listener.
     *
     * @param request - GetListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetListenerAttributeResponse
     *
     * @param GetListenerAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetListenerAttributeResponse
     */
    public function getListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetListenerAttribute',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a Gateway Load Balancer (GWLB) listener.
     *
     * @param request - GetListenerAttributeRequest
     *
     * @returns GetListenerAttributeResponse
     *
     * @param GetListenerAttributeRequest $request
     *
     * @return GetListenerAttributeResponse
     */
    public function getListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the health check status of a Gateway Load Balancer (GWLB) listener.
     *
     * @param request - GetListenerHealthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetListenerHealthStatusResponse
     *
     * @param GetListenerHealthStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetListenerHealthStatusResponse
     */
    public function getListenerHealthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->filter) {
            @$bodyFlat['Filter'] = $request->filter;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetListenerHealthStatus',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetListenerHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the health check status of a Gateway Load Balancer (GWLB) listener.
     *
     * @param request - GetListenerHealthStatusRequest
     *
     * @returns GetListenerHealthStatusResponse
     *
     * @param GetListenerHealthStatusRequest $request
     *
     * @return GetListenerHealthStatusResponse
     */
    public function getListenerHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListenerHealthStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a Gateway Load Balancer (GWLB) instance.
     *
     * @param request - GetLoadBalancerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoadBalancerAttributeResponse
     *
     * @param GetLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLoadBalancerAttribute',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a Gateway Load Balancer (GWLB) instance.
     *
     * @param request - GetLoadBalancerAttributeRequest
     *
     * @returns GetLoadBalancerAttributeResponse
     *
     * @param GetLoadBalancerAttributeRequest $request
     *
     * @return GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries Gateway Load Balancer (GWLB) listeners.
     *
     * @param request - ListListenersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListListenersResponse
     *
     * @param ListListenersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListListenersResponse
     */
    public function listListenersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->listenerIds) {
            @$bodyFlat['ListenerIds'] = $request->listenerIds;
        }

        if (null !== $request->loadBalancerIds) {
            @$bodyFlat['LoadBalancerIds'] = $request->loadBalancerIds;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListListeners',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Gateway Load Balancer (GWLB) listeners.
     *
     * @param request - ListListenersRequest
     *
     * @returns ListListenersResponse
     *
     * @param ListListenersRequest $request
     *
     * @return ListListenersResponse
     */
    public function listListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersWithOptions($request, $runtime);
    }

    /**
     * Queries Gateway Load Balancer (GWLB) instances.
     *
     * @param request - ListLoadBalancersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLoadBalancersResponse
     *
     * @param ListLoadBalancersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLoadBalancersResponse
     */
    public function listLoadBalancersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addressIpVersion) {
            @$body['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->loadBalancerBusinessStatus) {
            @$body['LoadBalancerBusinessStatus'] = $request->loadBalancerBusinessStatus;
        }

        $bodyFlat = [];
        if (null !== $request->loadBalancerIds) {
            @$bodyFlat['LoadBalancerIds'] = $request->loadBalancerIds;
        }

        if (null !== $request->loadBalancerNames) {
            @$bodyFlat['LoadBalancerNames'] = $request->loadBalancerNames;
        }

        if (null !== $request->loadBalancerStatus) {
            @$body['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        if (null !== $request->trafficMode) {
            @$body['TrafficMode'] = $request->trafficMode;
        }

        if (null !== $request->vpcIds) {
            @$bodyFlat['VpcIds'] = $request->vpcIds;
        }

        if (null !== $request->zoneIds) {
            @$bodyFlat['ZoneIds'] = $request->zoneIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLoadBalancers',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Gateway Load Balancer (GWLB) instances.
     *
     * @param request - ListLoadBalancersRequest
     *
     * @returns ListLoadBalancersResponse
     *
     * @param ListLoadBalancersRequest $request
     *
     * @return ListLoadBalancersResponse
     */
    public function listLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * Queries the server groups of a Gateway Load Balancer (GWLB) instance.
     *
     * @param request - ListServerGroupServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServerGroupServersResponse
     *
     * @param ListServerGroupServersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListServerGroupServersResponse
     */
    public function listServerGroupServersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->serverIds) {
            @$bodyFlat['ServerIds'] = $request->serverIds;
        }

        if (null !== $request->serverIps) {
            @$bodyFlat['ServerIps'] = $request->serverIps;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListServerGroupServers',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServerGroupServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the server groups of a Gateway Load Balancer (GWLB) instance.
     *
     * @param request - ListServerGroupServersRequest
     *
     * @returns ListServerGroupServersResponse
     *
     * @param ListServerGroupServersRequest $request
     *
     * @return ListServerGroupServersResponse
     */
    public function listServerGroupServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupServersWithOptions($request, $runtime);
    }

    /**
     * Queries the server groups of a Gateway Load Balancer (GWLB) instance.
     *
     * @param request - ListServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServerGroupsResponse
     *
     * @param ListServerGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListServerGroupsResponse
     */
    public function listServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->serverGroupIds) {
            @$bodyFlat['ServerGroupIds'] = $request->serverGroupIds;
        }

        if (null !== $request->serverGroupNames) {
            @$bodyFlat['ServerGroupNames'] = $request->serverGroupNames;
        }

        if (null !== $request->serverGroupType) {
            @$body['ServerGroupType'] = $request->serverGroupType;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListServerGroups',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the server groups of a Gateway Load Balancer (GWLB) instance.
     *
     * @param request - ListServerGroupsRequest
     *
     * @returns ListServerGroupsResponse
     *
     * @param ListServerGroupsRequest $request
     *
     * @return ListServerGroupsResponse
     */
    public function listServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags of resources.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $bodyFlat = [];
        if (null !== $request->resourceId) {
            @$bodyFlat['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of resources.
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

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group to which a specified cloud resource belongs.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->newResourceGroupId) {
            @$body['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group to which a specified cloud resource belongs.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Removes backend servers from the server group of a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *RemoveServersFromServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1.  You can call the ListServerGroups operation to query the status of a server group.
     *     *   If the server group is in the **Configuring** state, the server group is being modified.
     *     *   If the server group is in the **Available** state, the server group is running.
     * 2.  You can call the ListServerGroupServers operation to query the status of a backend server.
     *     *   If the backend server is in the **Removing** state, the backend server is being removed from the server group.
     *     *   If the backend server cannot be found, the backend server is no longer in the server group.
     * >
     * *   If connection draining id enabled (**ConnectionDrainEnabled** set to true) for the server group of the backend server, the backend server that you remove enters the **Removing** state before entering the **Draining** state. When the connection draining timeout period (**ConnectionDrainTimeout**) ends, the backend server is removed from the server group.
     * *   You can add the backend server to the server group again before the connection draining timeout period ends. In this case, the status of the backend server changes from **Draining** to **Adding**. After the backend server is added to the server group, the backend server enters the **Available** state.
     *
     * @param request - RemoveServersFromServerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveServersFromServerGroupResponse
     *
     * @param RemoveServersFromServerGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->servers) {
            @$bodyFlat['Servers'] = $request->servers;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveServersFromServerGroup',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveServersFromServerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes backend servers from the server group of a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *RemoveServersFromServerGroup** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background.
     * 1.  You can call the ListServerGroups operation to query the status of a server group.
     *     *   If the server group is in the **Configuring** state, the server group is being modified.
     *     *   If the server group is in the **Available** state, the server group is running.
     * 2.  You can call the ListServerGroupServers operation to query the status of a backend server.
     *     *   If the backend server is in the **Removing** state, the backend server is being removed from the server group.
     *     *   If the backend server cannot be found, the backend server is no longer in the server group.
     * >
     * *   If connection draining id enabled (**ConnectionDrainEnabled** set to true) for the server group of the backend server, the backend server that you remove enters the **Removing** state before entering the **Draining** state. When the connection draining timeout period (**ConnectionDrainTimeout**) ends, the backend server is removed from the server group.
     * *   You can add the backend server to the server group again before the connection draining timeout period ends. In this case, the status of the backend server changes from **Draining** to **Adding**. After the backend server is added to the server group, the backend server enters the **Available** state.
     *
     * @param request - RemoveServersFromServerGroupRequest
     *
     * @returns RemoveServersFromServerGroupResponse
     *
     * @param RemoveServersFromServerGroupRequest $request
     *
     * @return RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeServersFromServerGroupWithOptions($request, $runtime);
    }

    /**
     * Creates and adds tags to resources.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        $bodyFlat = [];
        if (null !== $request->resourceId) {
            @$bodyFlat['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and adds tags to resources.
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

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Removes tags from resources.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->all) {
            @$body['All'] = $request->all;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        $bodyFlat = [];
        if (null !== $request->resourceId) {
            @$bodyFlat['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$bodyFlat['TagKey'] = $request->tagKey;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resources.
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

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates the configurations of a Gateway Load Balancer (GWLB) listener.
     *
     * @remarks
     * *UpdateListenerAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the **GetListenerAttribute** operation to query the status of a listener.
     * *   If the listener is in the **Configuring** state, the listener is being modified.
     * *   If the listener is in the **Running** state, the listener is modified.
     *
     * @param request - UpdateListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateListenerAttributeResponse
     *
     * @param UpdateListenerAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateListenerAttributeResponse
     */
    public function updateListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->listenerDescription) {
            @$body['ListenerDescription'] = $request->listenerDescription;
        }

        if (null !== $request->listenerId) {
            @$body['ListenerId'] = $request->listenerId;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateListenerAttribute',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of a Gateway Load Balancer (GWLB) listener.
     *
     * @remarks
     * *UpdateListenerAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the **GetListenerAttribute** operation to query the status of a listener.
     * *   If the listener is in the **Configuring** state, the listener is being modified.
     * *   If the listener is in the **Running** state, the listener is modified.
     *
     * @param request - UpdateListenerAttributeRequest
     *
     * @returns UpdateListenerAttributeResponse
     *
     * @param UpdateListenerAttributeRequest $request
     *
     * @return UpdateListenerAttributeResponse
     */
    public function updateListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates the attributes of a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     *   UpdateLoadBalancerAttribute is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the GetLoadBalancerAttribute operation to query the status of the GWLB instance.
     *     *   If the GWLB instance is in the Configuring state, the GWLB instance is being modified.
     *     *   If the GWLB instance is in the Active state, the GWLB instance is modified.
     *
     * @param request - UpdateLoadBalancerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoadBalancerAttributeResponse
     *
     * @param UpdateLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerName) {
            @$body['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->trafficMode) {
            @$body['TrafficMode'] = $request->trafficMode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerAttribute',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     *   UpdateLoadBalancerAttribute is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the GetLoadBalancerAttribute operation to query the status of the GWLB instance.
     *     *   If the GWLB instance is in the Configuring state, the GWLB instance is being modified.
     *     *   If the GWLB instance is in the Active state, the GWLB instance is modified.
     *
     * @param request - UpdateLoadBalancerAttributeRequest
     *
     * @returns UpdateLoadBalancerAttributeResponse
     *
     * @param UpdateLoadBalancerAttributeRequest $request
     *
     * @return UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates the zones of a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *Make sure that you fully understand the billing methods and [pricing](https://help.aliyun.com/document_detail/2806160.html) of GWLB before calling this operation**.
     * UpdateLoadBalancerZones is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the GetLoadBalancerAttribute operation to query the status of the GWLB instance.
     * *  If the GWLB instance is in the Configuring state, the GWLB instance is being modified.
     * *   If the GWLB instance is in the Active state, the GWLB instance is modified.
     * >  Before you call this operation, make sure that all zone parameters, including the current zones and the zones that you want to add, are specified. If you do not specify the current zones, the current zones are deleted. You can call the GetLoadBalancerAttribute operation to query the current zones of a GWLB instance.
     *
     * @param request - UpdateLoadBalancerZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoadBalancerZonesResponse
     *
     * @param UpdateLoadBalancerZonesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->loadBalancerId) {
            @$body['LoadBalancerId'] = $request->loadBalancerId;
        }

        $bodyFlat = [];
        if (null !== $request->zoneMappings) {
            @$bodyFlat['ZoneMappings'] = $request->zoneMappings;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancerZones',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLoadBalancerZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the zones of a Gateway Load Balancer (GWLB) instance.
     *
     * @remarks
     * *Make sure that you fully understand the billing methods and [pricing](https://help.aliyun.com/document_detail/2806160.html) of GWLB before calling this operation**.
     * UpdateLoadBalancerZones is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the GetLoadBalancerAttribute operation to query the status of the GWLB instance.
     * *  If the GWLB instance is in the Configuring state, the GWLB instance is being modified.
     * *   If the GWLB instance is in the Active state, the GWLB instance is modified.
     * >  Before you call this operation, make sure that all zone parameters, including the current zones and the zones that you want to add, are specified. If you do not specify the current zones, the current zones are deleted. You can call the GetLoadBalancerAttribute operation to query the current zones of a GWLB instance.
     *
     * @param request - UpdateLoadBalancerZonesRequest
     *
     * @returns UpdateLoadBalancerZonesResponse
     *
     * @param UpdateLoadBalancerZonesRequest $request
     *
     * @return UpdateLoadBalancerZonesResponse
     */
    public function updateLoadBalancerZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerZonesWithOptions($request, $runtime);
    }

    /**
     * Updates the attributes of a server group.
     *
     * @remarks
     * *UpdateServerGroupAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the ListServerGroups operation to query the status of the task.
     * *   If the server group is in the **Configuring** state, the configuration of the server group is being modified.
     * *   If the server group is in the **Available** state, the configuration of the server group is modified.
     *
     * @param request - UpdateServerGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServerGroupAttributeResponse
     *
     * @param UpdateServerGroupAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        $bodyFlat = [];
        if (null !== $request->connectionDrainConfig) {
            @$bodyFlat['ConnectionDrainConfig'] = $request->connectionDrainConfig;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->healthCheckConfig) {
            @$bodyFlat['HealthCheckConfig'] = $request->healthCheckConfig;
        }

        if (null !== $request->scheduler) {
            @$body['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverFailoverMode) {
            @$body['ServerFailoverMode'] = $request->serverFailoverMode;
        }

        if (null !== $request->serverGroupId) {
            @$body['ServerGroupId'] = $request->serverGroupId;
        }

        if (null !== $request->serverGroupName) {
            @$body['ServerGroupName'] = $request->serverGroupName;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServerGroupAttribute',
            'version' => '2024-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateServerGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of a server group.
     *
     * @remarks
     * *UpdateServerGroupAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the ListServerGroups operation to query the status of the task.
     * *   If the server group is in the **Configuring** state, the configuration of the server group is being modified.
     * *   If the server group is in the **Available** state, the configuration of the server group is modified.
     *
     * @param request - UpdateServerGroupAttributeRequest
     *
     * @returns UpdateServerGroupAttributeResponse
     *
     * @param UpdateServerGroupAttributeRequest $request
     *
     * @return UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServerGroupAttributeWithOptions($request, $runtime);
    }
}
