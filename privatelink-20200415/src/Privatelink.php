<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\AddUserToVpcEndpointServiceRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\AddUserToVpcEndpointServiceResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\AddZoneToVpcEndpointRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\AddZoneToVpcEndpointResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\AttachResourceToVpcEndpointServiceRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\AttachResourceToVpcEndpointServiceResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\AttachSecurityGroupToVpcEndpointRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\AttachSecurityGroupToVpcEndpointResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\CheckProductOpenResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointServiceRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointServiceResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DeleteVpcEndpointRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DeleteVpcEndpointResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DeleteVpcEndpointServiceRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DeleteVpcEndpointServiceResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DetachResourceFromVpcEndpointServiceRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DetachResourceFromVpcEndpointServiceResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DetachSecurityGroupFromVpcEndpointRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DetachSecurityGroupFromVpcEndpointResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DisableVpcEndpointConnectionRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DisableVpcEndpointConnectionResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DisableVpcEndpointZoneConnectionRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DisableVpcEndpointZoneConnectionResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\EnableVpcEndpointConnectionRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\EnableVpcEndpointConnectionResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\EnableVpcEndpointZoneConnectionRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\EnableVpcEndpointZoneConnectionResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\GetVpcEndpointAttributeRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\GetVpcEndpointAttributeResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\GetVpcEndpointServiceAttributeRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\GetVpcEndpointServiceAttributeResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointConnectionsRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointConnectionsResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointSecurityGroupsRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointSecurityGroupsResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceResourcesRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceResourcesResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesByEndUserRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesByEndUserResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceUsersRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceUsersResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointsRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointsResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointZonesRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointZonesResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\OpenPrivateLinkServiceRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\OpenPrivateLinkServiceResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\RemoveUserFromVpcEndpointServiceRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\RemoveUserFromVpcEndpointServiceResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\RemoveZoneFromVpcEndpointRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\RemoveZoneFromVpcEndpointResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointAttributeRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointAttributeResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointConnectionAttributeRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointConnectionAttributeResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointServiceAttributeRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointServiceAttributeResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointServiceResourceAttributeRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointServiceResourceAttributeResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointZoneConnectionResourceAttributeRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\UpdateVpcEndpointZoneConnectionResourceAttributeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Privatelink extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('privatelink', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds an account ID to the whitelist of an endpoint service.
     *
     * @remarks
     *   Before you add an account ID to the whitelist of an endpoint service, make sure that the endpoint service is in the **Active** state. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to query the status of the endpoint service.
     * *   You cannot repeatedly call the **AddUserToVpcEndpointService** operation to add the ID of an Alibaba Cloud account to the whitelist of an endpoint service within a specified period of time.
     *
     * @param request - AddUserToVpcEndpointServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserToVpcEndpointServiceResponse
     *
     * @param AddUserToVpcEndpointServiceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddUserToVpcEndpointServiceResponse
     */
    public function addUserToVpcEndpointServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->userARN) {
            @$query['UserARN'] = $request->userARN;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserToVpcEndpointService',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserToVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an account ID to the whitelist of an endpoint service.
     *
     * @remarks
     *   Before you add an account ID to the whitelist of an endpoint service, make sure that the endpoint service is in the **Active** state. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to query the status of the endpoint service.
     * *   You cannot repeatedly call the **AddUserToVpcEndpointService** operation to add the ID of an Alibaba Cloud account to the whitelist of an endpoint service within a specified period of time.
     *
     * @param request - AddUserToVpcEndpointServiceRequest
     *
     * @returns AddUserToVpcEndpointServiceResponse
     *
     * @param AddUserToVpcEndpointServiceRequest $request
     *
     * @return AddUserToVpcEndpointServiceResponse
     */
    public function addUserToVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * Adds a zone to an endpoint.
     *
     * @remarks
     *   **AddZoneToVpcEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](https://help.aliyun.com/document_detail/183560.html) operation to query the state of the zone.
     *     *   If the zone is in the **Creating** state, the zone is being added.
     *     *   If the zone is in the Wait state, the zone is added.
     * *   You cannot repeatedly call the **AddZoneToVpcEndpoint** operation to add a zone to an endpoint within a specified period of time.
     *
     * @param request - AddZoneToVpcEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddZoneToVpcEndpointResponse
     *
     * @param AddZoneToVpcEndpointRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddZoneToVpcEndpointResponse
     */
    public function addZoneToVpcEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->ipv6Address) {
            @$query['Ipv6Address'] = $request->ipv6Address;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->ip) {
            @$query['ip'] = $request->ip;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddZoneToVpcEndpoint',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddZoneToVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a zone to an endpoint.
     *
     * @remarks
     *   **AddZoneToVpcEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](https://help.aliyun.com/document_detail/183560.html) operation to query the state of the zone.
     *     *   If the zone is in the **Creating** state, the zone is being added.
     *     *   If the zone is in the Wait state, the zone is added.
     * *   You cannot repeatedly call the **AddZoneToVpcEndpoint** operation to add a zone to an endpoint within a specified period of time.
     *
     * @param request - AddZoneToVpcEndpointRequest
     *
     * @returns AddZoneToVpcEndpointResponse
     *
     * @param AddZoneToVpcEndpointRequest $request
     *
     * @return AddZoneToVpcEndpointResponse
     */
    public function addZoneToVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addZoneToVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * Adds a service resource to an endpoint service.
     *
     * @remarks
     *   Before you add a service resource to an endpoint service, make sure that the endpoint service is in the **Active** state. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to query the status of the endpoint service.
     * *   You cannot repeatedly call the **AttachResourceToVpcEndpointService** operation to add a service resource to an endpoint service within a specified period of time.
     *
     * @param request - AttachResourceToVpcEndpointServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachResourceToVpcEndpointServiceResponse
     *
     * @param AttachResourceToVpcEndpointServiceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return AttachResourceToVpcEndpointServiceResponse
     */
    public function attachResourceToVpcEndpointServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachResourceToVpcEndpointService',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachResourceToVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a service resource to an endpoint service.
     *
     * @remarks
     *   Before you add a service resource to an endpoint service, make sure that the endpoint service is in the **Active** state. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to query the status of the endpoint service.
     * *   You cannot repeatedly call the **AttachResourceToVpcEndpointService** operation to add a service resource to an endpoint service within a specified period of time.
     *
     * @param request - AttachResourceToVpcEndpointServiceRequest
     *
     * @returns AttachResourceToVpcEndpointServiceResponse
     *
     * @param AttachResourceToVpcEndpointServiceRequest $request
     *
     * @return AttachResourceToVpcEndpointServiceResponse
     */
    public function attachResourceToVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachResourceToVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * Associates an endpoint with a security group.
     *
     * @remarks
     *   **AttachSecurityGroupToVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpoints](https://help.aliyun.com/document_detail/183558.html) operation to query the state of the endpoint.
     *     *   If the endpoint is in the **Pending** state, the endpoint is being associated with the security group.
     *     *   If the endpoint is in the **Active** state, the endpoint is associated with the security group.
     * *   You cannot repeatedly call the **AttachSecurityGroupToVpcEndpoint** operation to associate an endpoint with a security group within a specified period of time.
     *
     * @param request - AttachSecurityGroupToVpcEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachSecurityGroupToVpcEndpointResponse
     *
     * @param AttachSecurityGroupToVpcEndpointRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AttachSecurityGroupToVpcEndpointResponse
     */
    public function attachSecurityGroupToVpcEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachSecurityGroupToVpcEndpoint',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachSecurityGroupToVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates an endpoint with a security group.
     *
     * @remarks
     *   **AttachSecurityGroupToVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpoints](https://help.aliyun.com/document_detail/183558.html) operation to query the state of the endpoint.
     *     *   If the endpoint is in the **Pending** state, the endpoint is being associated with the security group.
     *     *   If the endpoint is in the **Active** state, the endpoint is associated with the security group.
     * *   You cannot repeatedly call the **AttachSecurityGroupToVpcEndpoint** operation to associate an endpoint with a security group within a specified period of time.
     *
     * @param request - AttachSecurityGroupToVpcEndpointRequest
     *
     * @returns AttachSecurityGroupToVpcEndpointResponse
     *
     * @param AttachSecurityGroupToVpcEndpointRequest $request
     *
     * @return AttachSecurityGroupToVpcEndpointResponse
     */
    public function attachSecurityGroupToVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachSecurityGroupToVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * Modifies a resource group.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a resource group.
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

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Queries whether PrivateLink is activated.
     *
     * @param request - CheckProductOpenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckProductOpenResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return CheckProductOpenResponse
     */
    public function checkProductOpenWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CheckProductOpen',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckProductOpenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether PrivateLink is activated.
     *
     * @returns CheckProductOpenResponse
     *
     * @return CheckProductOpenResponse
     */
    public function checkProductOpen()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkProductOpenWithOptions($runtime);
    }

    /**
     * Creates an endpoint.
     *
     * @remarks
     * *CreateVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](https://help.aliyun.com/document_detail/183568.html) operation to check whether the endpoint is created.
     * *   If the endpoint is in the **Creating** state, the endpoint is being created.
     * *   If the endpoint is in the **Active** state, the endpoint is created.
     *
     * @param request - CreateVpcEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpcEndpointResponse
     *
     * @param CreateVpcEndpointRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVpcEndpointResponse
     */
    public function createVpcEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressIpVersion) {
            @$query['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointDescription) {
            @$query['EndpointDescription'] = $request->endpointDescription;
        }

        if (null !== $request->endpointName) {
            @$query['EndpointName'] = $request->endpointName;
        }

        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        if (null !== $request->policyDocument) {
            @$query['PolicyDocument'] = $request->policyDocument;
        }

        if (null !== $request->protectedEnabled) {
            @$query['ProtectedEnabled'] = $request->protectedEnabled;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zone) {
            @$query['Zone'] = $request->zone;
        }

        if (null !== $request->zoneAffinityEnabled) {
            @$query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        }

        if (null !== $request->zonePrivateIpAddressCount) {
            @$query['ZonePrivateIpAddressCount'] = $request->zonePrivateIpAddressCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVpcEndpoint',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an endpoint.
     *
     * @remarks
     * *CreateVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](https://help.aliyun.com/document_detail/183568.html) operation to check whether the endpoint is created.
     * *   If the endpoint is in the **Creating** state, the endpoint is being created.
     * *   If the endpoint is in the **Active** state, the endpoint is created.
     *
     * @param request - CreateVpcEndpointRequest
     *
     * @returns CreateVpcEndpointResponse
     *
     * @param CreateVpcEndpointRequest $request
     *
     * @return CreateVpcEndpointResponse
     */
    public function createVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * Creates an endpoint service.
     *
     * @remarks
     *   Before you create an endpoint service, make sure that you have created a Server Load Balancer (SLB) instance that supports PrivateLink. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/174064.html).
     * *   **CreateVpcEndpointService** is an asynchronous operation. After a request is sent, the system returns a request ID and an instance ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/183542.html) operation to query the status of the endpoint service.
     *     *   If the endpoint service is in the **Creating** state, the endpoint service is being created.
     *     *   If the endpoint service is in the **Active** state, the endpoint service is created.
     *
     * @param request - CreateVpcEndpointServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpcEndpointServiceResponse
     *
     * @param CreateVpcEndpointServiceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateVpcEndpointServiceResponse
     */
    public function createVpcEndpointServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressIpVersion) {
            @$query['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->autoAcceptEnabled) {
            @$query['AutoAcceptEnabled'] = $request->autoAcceptEnabled;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->payer) {
            @$query['Payer'] = $request->payer;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceDescription) {
            @$query['ServiceDescription'] = $request->serviceDescription;
        }

        if (null !== $request->serviceResourceType) {
            @$query['ServiceResourceType'] = $request->serviceResourceType;
        }

        if (null !== $request->serviceSupportIPv6) {
            @$query['ServiceSupportIPv6'] = $request->serviceSupportIPv6;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->zoneAffinityEnabled) {
            @$query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVpcEndpointService',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an endpoint service.
     *
     * @remarks
     *   Before you create an endpoint service, make sure that you have created a Server Load Balancer (SLB) instance that supports PrivateLink. For more information, see [CreateLoadBalancer](https://help.aliyun.com/document_detail/174064.html).
     * *   **CreateVpcEndpointService** is an asynchronous operation. After a request is sent, the system returns a request ID and an instance ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/183542.html) operation to query the status of the endpoint service.
     *     *   If the endpoint service is in the **Creating** state, the endpoint service is being created.
     *     *   If the endpoint service is in the **Active** state, the endpoint service is created.
     *
     * @param request - CreateVpcEndpointServiceRequest
     *
     * @returns CreateVpcEndpointServiceResponse
     *
     * @param CreateVpcEndpointServiceRequest $request
     *
     * @return CreateVpcEndpointServiceResponse
     */
    public function createVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * Deletes an endpoint.
     *
     * @remarks
     *   Before you delete an endpoint, you must delete the zones that are added to the endpoint.
     * *   **DeleteVpcEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](https://help.aliyun.com/document_detail/183568.html) operation to check whether the endpoint is deleted.
     *     *   If the endpoint is in the **Deleting** state, the endpoint is being deleted.
     *     *   If the endpoint cannot be queried, the endpoint is deleted.
     *
     * @param request - DeleteVpcEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpcEndpointResponse
     *
     * @param DeleteVpcEndpointRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVpcEndpoint',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an endpoint.
     *
     * @remarks
     *   Before you delete an endpoint, you must delete the zones that are added to the endpoint.
     * *   **DeleteVpcEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](https://help.aliyun.com/document_detail/183568.html) operation to check whether the endpoint is deleted.
     *     *   If the endpoint is in the **Deleting** state, the endpoint is being deleted.
     *     *   If the endpoint cannot be queried, the endpoint is deleted.
     *
     * @param request - DeleteVpcEndpointRequest
     *
     * @returns DeleteVpcEndpointResponse
     *
     * @param DeleteVpcEndpointRequest $request
     *
     * @return DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * Deletes an endpoint service.
     *
     * @remarks
     *   Before you delete an endpoint service, you must disconnect the endpoint from the endpoint service and remove the service resources.
     * *   **DeleteVpcEndpointService** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/183542.html) operation to check whether the endpoint service is deleted.
     *     *   If the endpoint service is in the **Deleting** state, the endpoint service is being deleted.
     *     *   If the endpoint service cannot be queried, the endpoint service is deleted.
     * *   You cannot repeatedly call the **DeleteVpcEndpointService** operation to delete an endpoint service that belongs to an Alibaba Cloud account within a specified period of time.
     *
     * @param request - DeleteVpcEndpointServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpcEndpointServiceResponse
     *
     * @param DeleteVpcEndpointServiceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteVpcEndpointServiceResponse
     */
    public function deleteVpcEndpointServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVpcEndpointService',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an endpoint service.
     *
     * @remarks
     *   Before you delete an endpoint service, you must disconnect the endpoint from the endpoint service and remove the service resources.
     * *   **DeleteVpcEndpointService** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/183542.html) operation to check whether the endpoint service is deleted.
     *     *   If the endpoint service is in the **Deleting** state, the endpoint service is being deleted.
     *     *   If the endpoint service cannot be queried, the endpoint service is deleted.
     * *   You cannot repeatedly call the **DeleteVpcEndpointService** operation to delete an endpoint service that belongs to an Alibaba Cloud account within a specified period of time.
     *
     * @param request - DeleteVpcEndpointServiceRequest
     *
     * @returns DeleteVpcEndpointServiceResponse
     *
     * @param DeleteVpcEndpointServiceRequest $request
     *
     * @return DeleteVpcEndpointServiceResponse
     */
    public function deleteVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * Queries available regions and zones.
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceResourceType) {
            @$query['ServiceResourceType'] = $request->serviceResourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-04-15',
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
     * Queries available regions and zones.
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
     * Queries a list of zones in a specified region.
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
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceResourceType) {
            @$query['ServiceResourceType'] = $request->serviceResourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2020-04-15',
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
     * Queries a list of zones in a specified region.
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
     * Removes a service resource from an endpoint service.
     *
     * @remarks
     *   Before you remove a service resource from an endpoint service, make sure that the endpoint service is in the **Active** state. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to query the status of the endpoint service.
     * *   You cannot repeatedly call the **DetachResourceFromVpcEndpointService** operation to remove a service resource from an endpoint service within a specified period of time.
     *
     * @param request - DetachResourceFromVpcEndpointServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachResourceFromVpcEndpointServiceResponse
     *
     * @param DetachResourceFromVpcEndpointServiceRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DetachResourceFromVpcEndpointServiceResponse
     */
    public function detachResourceFromVpcEndpointServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachResourceFromVpcEndpointService',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachResourceFromVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a service resource from an endpoint service.
     *
     * @remarks
     *   Before you remove a service resource from an endpoint service, make sure that the endpoint service is in the **Active** state. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to query the status of the endpoint service.
     * *   You cannot repeatedly call the **DetachResourceFromVpcEndpointService** operation to remove a service resource from an endpoint service within a specified period of time.
     *
     * @param request - DetachResourceFromVpcEndpointServiceRequest
     *
     * @returns DetachResourceFromVpcEndpointServiceResponse
     *
     * @param DetachResourceFromVpcEndpointServiceRequest $request
     *
     * @return DetachResourceFromVpcEndpointServiceResponse
     */
    public function detachResourceFromVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachResourceFromVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * Disassociates an endpoint from a security group.
     *
     * @remarks
     *   **DetachSecurityGroupFromVpcEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpoints](https://help.aliyun.com/document_detail/183558.html) to check whether the endpoint is disassociated from the security group.
     *     *   If the endpoint is in the **Pending** state, the endpoint is being disassociated from the security group.
     *     *   If you cannot query the endpoint in the security group, the endpoint is disassociated from the security group.
     * *   You cannot repeatedly call the **DetachSecurityGroupFromVpcEndpoint** operation to disassociate an endpoint from a security group within a specified period of time.
     *
     * @param request - DetachSecurityGroupFromVpcEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachSecurityGroupFromVpcEndpointResponse
     *
     * @param DetachSecurityGroupFromVpcEndpointRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DetachSecurityGroupFromVpcEndpointResponse
     */
    public function detachSecurityGroupFromVpcEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachSecurityGroupFromVpcEndpoint',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachSecurityGroupFromVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates an endpoint from a security group.
     *
     * @remarks
     *   **DetachSecurityGroupFromVpcEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpoints](https://help.aliyun.com/document_detail/183558.html) to check whether the endpoint is disassociated from the security group.
     *     *   If the endpoint is in the **Pending** state, the endpoint is being disassociated from the security group.
     *     *   If you cannot query the endpoint in the security group, the endpoint is disassociated from the security group.
     * *   You cannot repeatedly call the **DetachSecurityGroupFromVpcEndpoint** operation to disassociate an endpoint from a security group within a specified period of time.
     *
     * @param request - DetachSecurityGroupFromVpcEndpointRequest
     *
     * @returns DetachSecurityGroupFromVpcEndpointResponse
     *
     * @param DetachSecurityGroupFromVpcEndpointRequest $request
     *
     * @return DetachSecurityGroupFromVpcEndpointResponse
     */
    public function detachSecurityGroupFromVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachSecurityGroupFromVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * Rejects a connection request from an endpoint.
     *
     * @remarks
     *   **DisableVpcEndpointConnection** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](https://help.aliyun.com/document_detail/183568.html) operation to query the state of the endpoint connection.
     *     *   If the endpoint connection is in the **Disconnecting** state, the endpoint is being disconnected from the endpoint service.
     *     *   If the endpoint connection is in the **Disconnected** state, the endpoint is disconnected from the endpoint service.
     * *   You cannot repeatedly call the **DisableVpcEndpointConnection** operation to allow an endpoint service to reject a connection request from an endpoint within a specified period of time.
     *
     * @param request - DisableVpcEndpointConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableVpcEndpointConnectionResponse
     *
     * @param DisableVpcEndpointConnectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DisableVpcEndpointConnectionResponse
     */
    public function disableVpcEndpointConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableVpcEndpointConnection',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableVpcEndpointConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rejects a connection request from an endpoint.
     *
     * @remarks
     *   **DisableVpcEndpointConnection** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](https://help.aliyun.com/document_detail/183568.html) operation to query the state of the endpoint connection.
     *     *   If the endpoint connection is in the **Disconnecting** state, the endpoint is being disconnected from the endpoint service.
     *     *   If the endpoint connection is in the **Disconnected** state, the endpoint is disconnected from the endpoint service.
     * *   You cannot repeatedly call the **DisableVpcEndpointConnection** operation to allow an endpoint service to reject a connection request from an endpoint within a specified period of time.
     *
     * @param request - DisableVpcEndpointConnectionRequest
     *
     * @returns DisableVpcEndpointConnectionResponse
     *
     * @param DisableVpcEndpointConnectionRequest $request
     *
     * @return DisableVpcEndpointConnectionResponse
     */
    public function disableVpcEndpointConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVpcEndpointConnectionWithOptions($request, $runtime);
    }

    /**
     * Closes connections in an endpoint zone.
     *
     * @remarks
     *   You can call this operation only when the state of the endpoint is **Connected** and the state of the zone associated with the endpoint is **Connected** or **Migrated**.
     * *   **DisableVpcEndpointZoneConnection** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](https://help.aliyun.com/document_detail/183560.html) operation to query the status of the task.
     *     *   If the zone is in the **Disconnecting** state, the task is running.
     *     *   If the zone is in the **Disconnected** state, the task is successful.
     * *   You cannot repeatedly call the **DisableVpcEndpointZoneConnection** operation to allow an endpoint service to reject a connection request from the endpoint in the zone within a specified period of time.
     *
     * @param request - DisableVpcEndpointZoneConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableVpcEndpointZoneConnectionResponse
     *
     * @param DisableVpcEndpointZoneConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DisableVpcEndpointZoneConnectionResponse
     */
    public function disableVpcEndpointZoneConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replacedResource) {
            @$query['ReplacedResource'] = $request->replacedResource;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableVpcEndpointZoneConnection',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableVpcEndpointZoneConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Closes connections in an endpoint zone.
     *
     * @remarks
     *   You can call this operation only when the state of the endpoint is **Connected** and the state of the zone associated with the endpoint is **Connected** or **Migrated**.
     * *   **DisableVpcEndpointZoneConnection** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](https://help.aliyun.com/document_detail/183560.html) operation to query the status of the task.
     *     *   If the zone is in the **Disconnecting** state, the task is running.
     *     *   If the zone is in the **Disconnected** state, the task is successful.
     * *   You cannot repeatedly call the **DisableVpcEndpointZoneConnection** operation to allow an endpoint service to reject a connection request from the endpoint in the zone within a specified period of time.
     *
     * @param request - DisableVpcEndpointZoneConnectionRequest
     *
     * @returns DisableVpcEndpointZoneConnectionResponse
     *
     * @param DisableVpcEndpointZoneConnectionRequest $request
     *
     * @return DisableVpcEndpointZoneConnectionResponse
     */
    public function disableVpcEndpointZoneConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVpcEndpointZoneConnectionWithOptions($request, $runtime);
    }

    /**
     * Accepts connection requests from an endpoint.
     *
     * @remarks
     *   **EnableVpcEndpointConnection** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](https://help.aliyun.com/document_detail/183568.html) operation to query the state of the endpoint connection.
     *     *   If the state is **Connecting**, the endpoint connection is being established.
     *     *   If the state is **Connected**, the endpoint connection is established.
     * *   You cannot repeatedly call the **EnableVpcEndpointConnection** operation to allow an endpoint service of an Alibaba Cloud account to accept a connection request from an endpoint within a specified period of time.
     *
     * @param request - EnableVpcEndpointConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableVpcEndpointConnectionResponse
     *
     * @param EnableVpcEndpointConnectionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableVpcEndpointConnectionResponse
     */
    public function enableVpcEndpointConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableVpcEndpointConnection',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableVpcEndpointConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Accepts connection requests from an endpoint.
     *
     * @remarks
     *   **EnableVpcEndpointConnection** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](https://help.aliyun.com/document_detail/183568.html) operation to query the state of the endpoint connection.
     *     *   If the state is **Connecting**, the endpoint connection is being established.
     *     *   If the state is **Connected**, the endpoint connection is established.
     * *   You cannot repeatedly call the **EnableVpcEndpointConnection** operation to allow an endpoint service of an Alibaba Cloud account to accept a connection request from an endpoint within a specified period of time.
     *
     * @param request - EnableVpcEndpointConnectionRequest
     *
     * @returns EnableVpcEndpointConnectionResponse
     *
     * @param EnableVpcEndpointConnectionRequest $request
     *
     * @return EnableVpcEndpointConnectionResponse
     */
    public function enableVpcEndpointConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableVpcEndpointConnectionWithOptions($request, $runtime);
    }

    /**
     * Allows connections to endpoint zones.
     *
     * @remarks
     *   You can call this operation only when the state of the endpoint is **Connected** and the state of the associated zone is **Disconnected**.
     * *   **EnableVpcEndpointZoneConnection** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](https://help.aliyun.com/document_detail/183560.html) operation to check whether the endpoint service accepts a connection request from the endpoint in the associated zone.
     *     *   If the zone is in the **Connecting** state, the endpoint service is accepting the connection request from the endpoint.
     *     *   If the zone is in the **Connected** state, the endpoint service has accepted the connection request from the endpoint.
     * *   You cannot repeatedly call the **EnableVpcEndpointZoneConnection** operation to allow an endpoint service to accept a connection request from an endpoint in the associated zone within a specified period of time.
     *
     * @param request - EnableVpcEndpointZoneConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableVpcEndpointZoneConnectionResponse
     *
     * @param EnableVpcEndpointZoneConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return EnableVpcEndpointZoneConnectionResponse
     */
    public function enableVpcEndpointZoneConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableVpcEndpointZoneConnection',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableVpcEndpointZoneConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Allows connections to endpoint zones.
     *
     * @remarks
     *   You can call this operation only when the state of the endpoint is **Connected** and the state of the associated zone is **Disconnected**.
     * *   **EnableVpcEndpointZoneConnection** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](https://help.aliyun.com/document_detail/183560.html) operation to check whether the endpoint service accepts a connection request from the endpoint in the associated zone.
     *     *   If the zone is in the **Connecting** state, the endpoint service is accepting the connection request from the endpoint.
     *     *   If the zone is in the **Connected** state, the endpoint service has accepted the connection request from the endpoint.
     * *   You cannot repeatedly call the **EnableVpcEndpointZoneConnection** operation to allow an endpoint service to accept a connection request from an endpoint in the associated zone within a specified period of time.
     *
     * @param request - EnableVpcEndpointZoneConnectionRequest
     *
     * @returns EnableVpcEndpointZoneConnectionResponse
     *
     * @param EnableVpcEndpointZoneConnectionRequest $request
     *
     * @return EnableVpcEndpointZoneConnectionResponse
     */
    public function enableVpcEndpointZoneConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableVpcEndpointZoneConnectionWithOptions($request, $runtime);
    }

    /**
     * Queries the attributes of an endpoint.
     *
     * @param request - GetVpcEndpointAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVpcEndpointAttributeResponse
     *
     * @param GetVpcEndpointAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVpcEndpointAttributeResponse
     */
    public function getVpcEndpointAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVpcEndpointAttribute',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVpcEndpointAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attributes of an endpoint.
     *
     * @param request - GetVpcEndpointAttributeRequest
     *
     * @returns GetVpcEndpointAttributeResponse
     *
     * @param GetVpcEndpointAttributeRequest $request
     *
     * @return GetVpcEndpointAttributeResponse
     */
    public function getVpcEndpointAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpcEndpointAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the attributes of an endpoint service.
     *
     * @param request - GetVpcEndpointServiceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVpcEndpointServiceAttributeResponse
     *
     * @param GetVpcEndpointServiceAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetVpcEndpointServiceAttributeResponse
     */
    public function getVpcEndpointServiceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVpcEndpointServiceAttribute',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVpcEndpointServiceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attributes of an endpoint service.
     *
     * @param request - GetVpcEndpointServiceAttributeRequest
     *
     * @returns GetVpcEndpointServiceAttributeResponse
     *
     * @param GetVpcEndpointServiceAttributeRequest $request
     *
     * @return GetVpcEndpointServiceAttributeResponse
     */
    public function getVpcEndpointServiceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpcEndpointServiceAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to resources.
     *
     * @remarks
     *   You must specify **ResourceId.N** or **Tag.N** in the request to specify the object that you want to query.
     * *   **Tag.N** is a resource tag that consists of a key-value pair (Tag.N.Key and Tag.N.Value). If you specify only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you specify only **Tag.N.Value**, an error message is returned.
     * *   If you specify **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-04-15',
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
     * Queries the tags that are added to resources.
     *
     * @remarks
     *   You must specify **ResourceId.N** or **Tag.N** in the request to specify the object that you want to query.
     * *   **Tag.N** is a resource tag that consists of a key-value pair (Tag.N.Key and Tag.N.Value). If you specify only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you specify only **Tag.N.Value**, an error message is returned.
     * *   If you specify **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
     * Queries endpoint connections.
     *
     * @param request - ListVpcEndpointConnectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcEndpointConnectionsResponse
     *
     * @param ListVpcEndpointConnectionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListVpcEndpointConnectionsResponse
     */
    public function listVpcEndpointConnectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStatus) {
            @$query['ConnectionStatus'] = $request->connectionStatus;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->endpointOwnerId) {
            @$query['EndpointOwnerId'] = $request->endpointOwnerId;
        }

        if (null !== $request->eniId) {
            @$query['EniId'] = $request->eniId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replacedResourceId) {
            @$query['ReplacedResourceId'] = $request->replacedResourceId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcEndpointConnections',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcEndpointConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries endpoint connections.
     *
     * @param request - ListVpcEndpointConnectionsRequest
     *
     * @returns ListVpcEndpointConnectionsResponse
     *
     * @param ListVpcEndpointConnectionsRequest $request
     *
     * @return ListVpcEndpointConnectionsResponse
     */
    public function listVpcEndpointConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointConnectionsWithOptions($request, $runtime);
    }

    /**
     * Queries the security groups that are associated with an endpoint.
     *
     * @param request - ListVpcEndpointSecurityGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcEndpointSecurityGroupsResponse
     *
     * @param ListVpcEndpointSecurityGroupsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListVpcEndpointSecurityGroupsResponse
     */
    public function listVpcEndpointSecurityGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcEndpointSecurityGroups',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcEndpointSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the security groups that are associated with an endpoint.
     *
     * @param request - ListVpcEndpointSecurityGroupsRequest
     *
     * @returns ListVpcEndpointSecurityGroupsResponse
     *
     * @param ListVpcEndpointSecurityGroupsRequest $request
     *
     * @return ListVpcEndpointSecurityGroupsResponse
     */
    public function listVpcEndpointSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the service resources that are added to an endpoint service.
     *
     * @param request - ListVpcEndpointServiceResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcEndpointServiceResourcesResponse
     *
     * @param ListVpcEndpointServiceResourcesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListVpcEndpointServiceResourcesResponse
     */
    public function listVpcEndpointServiceResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcEndpointServiceResources',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcEndpointServiceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the service resources that are added to an endpoint service.
     *
     * @param request - ListVpcEndpointServiceResourcesRequest
     *
     * @returns ListVpcEndpointServiceResourcesResponse
     *
     * @param ListVpcEndpointServiceResourcesRequest $request
     *
     * @return ListVpcEndpointServiceResourcesResponse
     */
    public function listVpcEndpointServiceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointServiceResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the whitelist of an endpoint service.
     *
     * @param request - ListVpcEndpointServiceUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcEndpointServiceUsersResponse
     *
     * @param ListVpcEndpointServiceUsersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListVpcEndpointServiceUsersResponse
     */
    public function listVpcEndpointServiceUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userListType) {
            @$query['UserListType'] = $request->userListType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcEndpointServiceUsers',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcEndpointServiceUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the whitelist of an endpoint service.
     *
     * @param request - ListVpcEndpointServiceUsersRequest
     *
     * @returns ListVpcEndpointServiceUsersResponse
     *
     * @param ListVpcEndpointServiceUsersRequest $request
     *
     * @return ListVpcEndpointServiceUsersResponse
     */
    public function listVpcEndpointServiceUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointServiceUsersWithOptions($request, $runtime);
    }

    /**
     * Queries a list of endpoint services.
     *
     * @param request - ListVpcEndpointServicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcEndpointServicesResponse
     *
     * @param ListVpcEndpointServicesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListVpcEndpointServicesResponse
     */
    public function listVpcEndpointServicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressIpVersion) {
            @$query['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->autoAcceptEnabled) {
            @$query['AutoAcceptEnabled'] = $request->autoAcceptEnabled;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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

        if (null !== $request->serviceBusinessStatus) {
            @$query['ServiceBusinessStatus'] = $request->serviceBusinessStatus;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceResourceType) {
            @$query['ServiceResourceType'] = $request->serviceResourceType;
        }

        if (null !== $request->serviceStatus) {
            @$query['ServiceStatus'] = $request->serviceStatus;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->zoneAffinityEnabled) {
            @$query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcEndpointServices',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcEndpointServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of endpoint services.
     *
     * @param request - ListVpcEndpointServicesRequest
     *
     * @returns ListVpcEndpointServicesResponse
     *
     * @param ListVpcEndpointServicesRequest $request
     *
     * @return ListVpcEndpointServicesResponse
     */
    public function listVpcEndpointServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointServicesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of endpoint services that can be associated with the endpoint created within the current account.
     *
     * @param request - ListVpcEndpointServicesByEndUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcEndpointServicesByEndUserResponse
     *
     * @param ListVpcEndpointServicesByEndUserRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListVpcEndpointServicesByEndUserResponse
     */
    public function listVpcEndpointServicesByEndUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcEndpointServicesByEndUser',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcEndpointServicesByEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of endpoint services that can be associated with the endpoint created within the current account.
     *
     * @param request - ListVpcEndpointServicesByEndUserRequest
     *
     * @returns ListVpcEndpointServicesByEndUserResponse
     *
     * @param ListVpcEndpointServicesByEndUserRequest $request
     *
     * @return ListVpcEndpointServicesByEndUserResponse
     */
    public function listVpcEndpointServicesByEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointServicesByEndUserWithOptions($request, $runtime);
    }

    /**
     * Queries the zones of an endpoint.
     *
     * @param request - ListVpcEndpointZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcEndpointZonesResponse
     *
     * @param ListVpcEndpointZonesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListVpcEndpointZonesResponse
     */
    public function listVpcEndpointZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcEndpointZones',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcEndpointZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the zones of an endpoint.
     *
     * @param request - ListVpcEndpointZonesRequest
     *
     * @returns ListVpcEndpointZonesResponse
     *
     * @param ListVpcEndpointZonesRequest $request
     *
     * @return ListVpcEndpointZonesResponse
     */
    public function listVpcEndpointZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointZonesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of endpoints.
     *
     * @param request - ListVpcEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcEndpointsResponse
     *
     * @param ListVpcEndpointsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVpcEndpointsResponse
     */
    public function listVpcEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressIpVersion) {
            @$query['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->connectionStatus) {
            @$query['ConnectionStatus'] = $request->connectionStatus;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->endpointName) {
            @$query['EndpointName'] = $request->endpointName;
        }

        if (null !== $request->endpointStatus) {
            @$query['EndpointStatus'] = $request->endpointStatus;
        }

        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcEndpoints',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of endpoints.
     *
     * @param request - ListVpcEndpointsRequest
     *
     * @returns ListVpcEndpointsResponse
     *
     * @param ListVpcEndpointsRequest $request
     *
     * @return ListVpcEndpointsResponse
     */
    public function listVpcEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointsWithOptions($request, $runtime);
    }

    /**
     * Activates PrivateLink.
     *
     * @param request - OpenPrivateLinkServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenPrivateLinkServiceResponse
     *
     * @param OpenPrivateLinkServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OpenPrivateLinkServiceResponse
     */
    public function openPrivateLinkServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenPrivateLinkService',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenPrivateLinkServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates PrivateLink.
     *
     * @param request - OpenPrivateLinkServiceRequest
     *
     * @returns OpenPrivateLinkServiceResponse
     *
     * @param OpenPrivateLinkServiceRequest $request
     *
     * @return OpenPrivateLinkServiceResponse
     */
    public function openPrivateLinkService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openPrivateLinkServiceWithOptions($request, $runtime);
    }

    /**
     * Removes an account ID from the whitelist of an endpoint service.
     *
     * @remarks
     *   Before you remove an account ID from the whitelist of an endpoint service, make sure that the endpoint service is in the **Active** state. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to query the status of the endpoint service.
     * *   You cannot repeatedly call the **RemoveUserFromVpcEndpointService** operation to remove the ID of an Alibaba Cloud account from the whitelist of an endpoint service within a specified period of time.
     *
     * @param request - RemoveUserFromVpcEndpointServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUserFromVpcEndpointServiceResponse
     *
     * @param RemoveUserFromVpcEndpointServiceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveUserFromVpcEndpointServiceResponse
     */
    public function removeUserFromVpcEndpointServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->userARN) {
            @$query['UserARN'] = $request->userARN;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUserFromVpcEndpointService',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUserFromVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes an account ID from the whitelist of an endpoint service.
     *
     * @remarks
     *   Before you remove an account ID from the whitelist of an endpoint service, make sure that the endpoint service is in the **Active** state. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to query the status of the endpoint service.
     * *   You cannot repeatedly call the **RemoveUserFromVpcEndpointService** operation to remove the ID of an Alibaba Cloud account from the whitelist of an endpoint service within a specified period of time.
     *
     * @param request - RemoveUserFromVpcEndpointServiceRequest
     *
     * @returns RemoveUserFromVpcEndpointServiceResponse
     *
     * @param RemoveUserFromVpcEndpointServiceRequest $request
     *
     * @return RemoveUserFromVpcEndpointServiceResponse
     */
    public function removeUserFromVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * Deletes a zone of an endpoint.
     *
     * @remarks
     *   **RemoveZoneFromVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](https://help.aliyun.com/document_detail/183560.html) operation to check whether the zone of the endpoint is deleted.
     *     *   If the zone of the endpoint is in the **Deleting** state, the zone is being deleted.
     *     *   If the zone cannot be queried, the zone is deleted.
     * *   You cannot repeatedly call the **RemoveZoneFromVpcEndpoint** operation to delete a zone of an endpoint within a specified period of time.
     *
     * @param request - RemoveZoneFromVpcEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveZoneFromVpcEndpointResponse
     *
     * @param RemoveZoneFromVpcEndpointRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveZoneFromVpcEndpointResponse
     */
    public function removeZoneFromVpcEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveZoneFromVpcEndpoint',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveZoneFromVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a zone of an endpoint.
     *
     * @remarks
     *   **RemoveZoneFromVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](https://help.aliyun.com/document_detail/183560.html) operation to check whether the zone of the endpoint is deleted.
     *     *   If the zone of the endpoint is in the **Deleting** state, the zone is being deleted.
     *     *   If the zone cannot be queried, the zone is deleted.
     * *   You cannot repeatedly call the **RemoveZoneFromVpcEndpoint** operation to delete a zone of an endpoint within a specified period of time.
     *
     * @param request - RemoveZoneFromVpcEndpointRequest
     *
     * @returns RemoveZoneFromVpcEndpointResponse
     *
     * @param RemoveZoneFromVpcEndpointRequest $request
     *
     * @return RemoveZoneFromVpcEndpointResponse
     */
    public function removeZoneFromVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeZoneFromVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * Adds tags to resources. You can call this API operation to add tags to one or more endpoints or endpoint services.
     *
     * @remarks
     * > You can add up to 20 tags to an instance. Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number is reached, an error message is returned.
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

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
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
            'version' => '2020-04-15',
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
     * Adds tags to resources. You can call this API operation to add tags to one or more endpoints or endpoint services.
     *
     * @remarks
     * > You can add up to 20 tags to an instance. Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number is reached, an error message is returned.
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
     * Removes tags from one or more endpoints or endpoint services at a time.
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

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
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
            'version' => '2020-04-15',
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
     * Removes tags from one or more endpoints or endpoint services at a time.
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
     * Modifies the attributes of an endpoint.
     *
     * @remarks
     * You cannot repeatedly call the **UpdateVpcEndpointAttribute** operation to modify the attributes of an endpoint that belongs to an Alibaba Cloud account within a specified period of time.
     *
     * @param request - UpdateVpcEndpointAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVpcEndpointAttributeResponse
     *
     * @param UpdateVpcEndpointAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateVpcEndpointAttributeResponse
     */
    public function updateVpcEndpointAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressIpVersion) {
            @$query['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointDescription) {
            @$query['EndpointDescription'] = $request->endpointDescription;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->endpointName) {
            @$query['EndpointName'] = $request->endpointName;
        }

        if (null !== $request->policyDocument) {
            @$query['PolicyDocument'] = $request->policyDocument;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneAffinityEnabled) {
            @$query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVpcEndpointAttribute',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVpcEndpointAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of an endpoint.
     *
     * @remarks
     * You cannot repeatedly call the **UpdateVpcEndpointAttribute** operation to modify the attributes of an endpoint that belongs to an Alibaba Cloud account within a specified period of time.
     *
     * @param request - UpdateVpcEndpointAttributeRequest
     *
     * @returns UpdateVpcEndpointAttributeResponse
     *
     * @param UpdateVpcEndpointAttributeRequest $request
     *
     * @return UpdateVpcEndpointAttributeResponse
     */
    public function updateVpcEndpointAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of an endpoint connection.
     *
     * @remarks
     * You cannot repeatedly call the **UpdateVpcEndpointConnectionAttribute** operation to modify the bandwidth of an endpoint connection that belongs to an Alibaba Cloud account within a specified period of time.
     *
     * @param request - UpdateVpcEndpointConnectionAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVpcEndpointConnectionAttributeResponse
     *
     * @param UpdateVpcEndpointConnectionAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateVpcEndpointConnectionAttributeResponse
     */
    public function updateVpcEndpointConnectionAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVpcEndpointConnectionAttribute',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVpcEndpointConnectionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of an endpoint connection.
     *
     * @remarks
     * You cannot repeatedly call the **UpdateVpcEndpointConnectionAttribute** operation to modify the bandwidth of an endpoint connection that belongs to an Alibaba Cloud account within a specified period of time.
     *
     * @param request - UpdateVpcEndpointConnectionAttributeRequest
     *
     * @returns UpdateVpcEndpointConnectionAttributeResponse
     *
     * @param UpdateVpcEndpointConnectionAttributeRequest $request
     *
     * @return UpdateVpcEndpointConnectionAttributeResponse
     */
    public function updateVpcEndpointConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of an endpoint service.
     *
     * @remarks
     * You cannot repeatedly call the **UpdateVpcEndpointServiceAttribute** operation to modify the attributes of an endpoint service that belongs to an Alibaba Cloud account within a specified period of time.
     *
     * @param request - UpdateVpcEndpointServiceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVpcEndpointServiceAttributeResponse
     *
     * @param UpdateVpcEndpointServiceAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateVpcEndpointServiceAttributeResponse
     */
    public function updateVpcEndpointServiceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressIpVersion) {
            @$query['AddressIpVersion'] = $request->addressIpVersion;
        }

        if (null !== $request->autoAcceptEnabled) {
            @$query['AutoAcceptEnabled'] = $request->autoAcceptEnabled;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectBandwidth) {
            @$query['ConnectBandwidth'] = $request->connectBandwidth;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceDescription) {
            @$query['ServiceDescription'] = $request->serviceDescription;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->serviceSupportIPv6) {
            @$query['ServiceSupportIPv6'] = $request->serviceSupportIPv6;
        }

        if (null !== $request->zoneAffinityEnabled) {
            @$query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVpcEndpointServiceAttribute',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVpcEndpointServiceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of an endpoint service.
     *
     * @remarks
     * You cannot repeatedly call the **UpdateVpcEndpointServiceAttribute** operation to modify the attributes of an endpoint service that belongs to an Alibaba Cloud account within a specified period of time.
     *
     * @param request - UpdateVpcEndpointServiceAttributeRequest
     *
     * @returns UpdateVpcEndpointServiceAttributeResponse
     *
     * @param UpdateVpcEndpointServiceAttributeRequest $request
     *
     * @return UpdateVpcEndpointServiceAttributeResponse
     */
    public function updateVpcEndpointServiceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointServiceAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a service resource that is added to an endpoint service.
     *
     * @remarks
     * You cannot repeatedly call the **UpdateVpcEndpointServiceResourceAttribute** operation to modify the attributes of a service resource that is added to an endpoint service within a specified period of time.
     *
     * @param request - UpdateVpcEndpointServiceResourceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVpcEndpointServiceResourceAttributeResponse
     *
     * @param UpdateVpcEndpointServiceResourceAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return UpdateVpcEndpointServiceResourceAttributeResponse
     */
    public function updateVpcEndpointServiceResourceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoAllocatedEnabled) {
            @$query['AutoAllocatedEnabled'] = $request->autoAllocatedEnabled;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVpcEndpointServiceResourceAttribute',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVpcEndpointServiceResourceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a service resource that is added to an endpoint service.
     *
     * @remarks
     * You cannot repeatedly call the **UpdateVpcEndpointServiceResourceAttribute** operation to modify the attributes of a service resource that is added to an endpoint service within a specified period of time.
     *
     * @param request - UpdateVpcEndpointServiceResourceAttributeRequest
     *
     * @returns UpdateVpcEndpointServiceResourceAttributeResponse
     *
     * @param UpdateVpcEndpointServiceResourceAttributeRequest $request
     *
     * @return UpdateVpcEndpointServiceResourceAttributeResponse
     */
    public function updateVpcEndpointServiceResourceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointServiceResourceAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies a service resource of a zone to which an endpoint connection belongs.
     *
     * @remarks
     * ### Prerequisites
     * By default, the feature of modifying a service resource of a zone to which an endpoint connection belongs is unavailable. To use this feature, log on to the [Quota Center console](https://quotas.console.aliyun.com/white-list-products/privatelink/quotas). Click Whitelist Quotas in the left-side navigation pane and click PrivateLink in the Networking section. On the page that appears, search for `privatelink_whitelist/svc_res_mgt_uat` and click Apply in the Actions column.
     * ### Usage notes
     * *   If the endpoint connection is in the **Disconnected** state, you can manually allocate the service resource in the zone.
     * *   If the endpoint connection is in the **Connected** state, you can manually migrate the service resource in the zone. In this case, the connection might be interrupted.
     * *   **UpdateVpcEndpointZoneConnectionResourceAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to check whether the service resource is modified.
     *     *   If the endpoint service is in the **Pending** state, the service resource is being modified.
     *     *   If the endpoint service is in the **Active** state, the service resource is modified.
     * *   You cannot repeatedly call the **UpdateVpcEndpointZoneConnectionResourceAttribute** operation to modify a service resource in the zone to which an endpoint connection belongs within a specified period of time.
     *
     * @param request - UpdateVpcEndpointZoneConnectionResourceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVpcEndpointZoneConnectionResourceAttributeResponse
     *
     * @param UpdateVpcEndpointZoneConnectionResourceAttributeRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return UpdateVpcEndpointZoneConnectionResourceAttributeResponse
     */
    public function updateVpcEndpointZoneConnectionResourceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceAllocateMode) {
            @$query['ResourceAllocateMode'] = $request->resourceAllocateMode;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceReplaceMode) {
            @$query['ResourceReplaceMode'] = $request->resourceReplaceMode;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVpcEndpointZoneConnectionResourceAttribute',
            'version' => '2020-04-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVpcEndpointZoneConnectionResourceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a service resource of a zone to which an endpoint connection belongs.
     *
     * @remarks
     * ### Prerequisites
     * By default, the feature of modifying a service resource of a zone to which an endpoint connection belongs is unavailable. To use this feature, log on to the [Quota Center console](https://quotas.console.aliyun.com/white-list-products/privatelink/quotas). Click Whitelist Quotas in the left-side navigation pane and click PrivateLink in the Networking section. On the page that appears, search for `privatelink_whitelist/svc_res_mgt_uat` and click Apply in the Actions column.
     * ### Usage notes
     * *   If the endpoint connection is in the **Disconnected** state, you can manually allocate the service resource in the zone.
     * *   If the endpoint connection is in the **Connected** state, you can manually migrate the service resource in the zone. In this case, the connection might be interrupted.
     * *   **UpdateVpcEndpointZoneConnectionResourceAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](https://help.aliyun.com/document_detail/469330.html) operation to check whether the service resource is modified.
     *     *   If the endpoint service is in the **Pending** state, the service resource is being modified.
     *     *   If the endpoint service is in the **Active** state, the service resource is modified.
     * *   You cannot repeatedly call the **UpdateVpcEndpointZoneConnectionResourceAttribute** operation to modify a service resource in the zone to which an endpoint connection belongs within a specified period of time.
     *
     * @param request - UpdateVpcEndpointZoneConnectionResourceAttributeRequest
     *
     * @returns UpdateVpcEndpointZoneConnectionResourceAttributeResponse
     *
     * @param UpdateVpcEndpointZoneConnectionResourceAttributeRequest $request
     *
     * @return UpdateVpcEndpointZoneConnectionResourceAttributeResponse
     */
    public function updateVpcEndpointZoneConnectionResourceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointZoneConnectionResourceAttributeWithOptions($request, $runtime);
    }
}
