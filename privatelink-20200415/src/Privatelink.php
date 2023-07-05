<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Privatelink\V20200415\Models\CheckResourceSupportOperateRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\CheckResourceSupportOperateResponse;
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
use AlibabaCloud\SDK\Privatelink\V20200415\Models\NotifyResourceAddressFamilyRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\NotifyResourceAddressFamilyResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\OpenPrivateLinkServiceRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\OpenPrivateLinkServiceResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\RemoveUserFromVpcEndpointServiceRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\RemoveUserFromVpcEndpointServiceResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\RemoveZoneFromVpcEndpointRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\RemoveZoneFromVpcEndpointResponse;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\TagResourcesResponse;
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
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * You cannot repeatedly call the **AddUserToVpcEndpointService** operation to add the ID of an Alibaba Cloud account to a service whitelist within a specified period of time.
     *   *
     * @param AddUserToVpcEndpointServiceRequest $request AddUserToVpcEndpointServiceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserToVpcEndpointServiceResponse AddUserToVpcEndpointServiceResponse
     */
    public function addUserToVpcEndpointServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->userARN)) {
            $query['UserARN'] = $request->userARN;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserToVpcEndpointService',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserToVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot repeatedly call the **AddUserToVpcEndpointService** operation to add the ID of an Alibaba Cloud account to a service whitelist within a specified period of time.
     *   *
     * @param AddUserToVpcEndpointServiceRequest $request AddUserToVpcEndpointServiceRequest
     *
     * @return AddUserToVpcEndpointServiceResponse AddUserToVpcEndpointServiceResponse
     */
    public function addUserToVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * The request ID.
     *   *
     * @param AddZoneToVpcEndpointRequest $request AddZoneToVpcEndpointRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddZoneToVpcEndpointResponse AddZoneToVpcEndpointResponse
     */
    public function addZoneToVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['ip'] = $request->ip;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddZoneToVpcEndpoint',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddZoneToVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The request ID.
     *   *
     * @param AddZoneToVpcEndpointRequest $request AddZoneToVpcEndpointRequest
     *
     * @return AddZoneToVpcEndpointResponse AddZoneToVpcEndpointResponse
     */
    public function addZoneToVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addZoneToVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * You cannot repeatedly call the **AttachResourceToVpcEndpointService** operation to add a service resource to an endpoint service within a specified period of time.
     *   *
     * @param AttachResourceToVpcEndpointServiceRequest $request AttachResourceToVpcEndpointServiceRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachResourceToVpcEndpointServiceResponse AttachResourceToVpcEndpointServiceResponse
     */
    public function attachResourceToVpcEndpointServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachResourceToVpcEndpointService',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachResourceToVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot repeatedly call the **AttachResourceToVpcEndpointService** operation to add a service resource to an endpoint service within a specified period of time.
     *   *
     * @param AttachResourceToVpcEndpointServiceRequest $request AttachResourceToVpcEndpointServiceRequest
     *
     * @return AttachResourceToVpcEndpointServiceResponse AttachResourceToVpcEndpointServiceResponse
     */
    public function attachResourceToVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachResourceToVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * *   **AttachSecurityGroupToVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpoints](~~183558~~) operation to query the state of the endpoint.
     *   *     *   If the endpoint is in the **Pending** state, the endpoint is being associated with the security group.
     *   *     *   If the endpoint is in the **Active** state, the endpoint is associated with the security group.
     *   * *   You cannot repeatedly call the **AttachSecurityGroupToVpcEndpoint** operation to associate an endpoint with a security group within a specified period of time.
     *   *
     * @param AttachSecurityGroupToVpcEndpointRequest $request AttachSecurityGroupToVpcEndpointRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachSecurityGroupToVpcEndpointResponse AttachSecurityGroupToVpcEndpointResponse
     */
    public function attachSecurityGroupToVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachSecurityGroupToVpcEndpoint',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachSecurityGroupToVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   **AttachSecurityGroupToVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpoints](~~183558~~) operation to query the state of the endpoint.
     *   *     *   If the endpoint is in the **Pending** state, the endpoint is being associated with the security group.
     *   *     *   If the endpoint is in the **Active** state, the endpoint is associated with the security group.
     *   * *   You cannot repeatedly call the **AttachSecurityGroupToVpcEndpoint** operation to associate an endpoint with a security group within a specified period of time.
     *   *
     * @param AttachSecurityGroupToVpcEndpointRequest $request AttachSecurityGroupToVpcEndpointRequest
     *
     * @return AttachSecurityGroupToVpcEndpointResponse AttachSecurityGroupToVpcEndpointResponse
     */
    public function attachSecurityGroupToVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachSecurityGroupToVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return CheckProductOpenResponse
     */
    public function checkProductOpenWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CheckProductOpen',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckProductOpenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CheckProductOpenResponse
     */
    public function checkProductOpen()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkProductOpenWithOptions($runtime);
    }

    /**
     * @param CheckResourceSupportOperateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CheckResourceSupportOperateResponse
     */
    public function checkResourceSupportOperateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckResourceSupportOperate',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckResourceSupportOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckResourceSupportOperateRequest $request
     *
     * @return CheckResourceSupportOperateResponse
     */
    public function checkResourceSupportOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResourceSupportOperateWithOptions($request, $runtime);
    }

    /**
     * The region ID of the endpoint.
     *   * You can call the [DescribeRegions](~~120468~~) operation to query the most recent region list.
     *   *
     * @param CreateVpcEndpointRequest $request CreateVpcEndpointRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpcEndpointResponse CreateVpcEndpointResponse
     */
    public function createVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointDescription)) {
            $query['EndpointDescription'] = $request->endpointDescription;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $query['EndpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        if (!Utils::isUnset($request->protectedEnabled)) {
            $query['ProtectedEnabled'] = $request->protectedEnabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zone)) {
            $query['Zone'] = $request->zone;
        }
        if (!Utils::isUnset($request->zonePrivateIpAddressCount)) {
            $query['ZonePrivateIpAddressCount'] = $request->zonePrivateIpAddressCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcEndpoint',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The region ID of the endpoint.
     *   * You can call the [DescribeRegions](~~120468~~) operation to query the most recent region list.
     *   *
     * @param CreateVpcEndpointRequest $request CreateVpcEndpointRequest
     *
     * @return CreateVpcEndpointResponse CreateVpcEndpointResponse
     */
    public function createVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * The resource group ID.
     *   *
     * @param CreateVpcEndpointServiceRequest $request CreateVpcEndpointServiceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpcEndpointServiceResponse CreateVpcEndpointServiceResponse
     */
    public function createVpcEndpointServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoAcceptEnabled)) {
            $query['AutoAcceptEnabled'] = $request->autoAcceptEnabled;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->payer)) {
            $query['Payer'] = $request->payer;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $query['ServiceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceResourceType)) {
            $query['ServiceResourceType'] = $request->serviceResourceType;
        }
        if (!Utils::isUnset($request->serviceSupportIPv6)) {
            $query['ServiceSupportIPv6'] = $request->serviceSupportIPv6;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneAffinityEnabled)) {
            $query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcEndpointService',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The resource group ID.
     *   *
     * @param CreateVpcEndpointServiceRequest $request CreateVpcEndpointServiceRequest
     *
     * @return CreateVpcEndpointServiceResponse CreateVpcEndpointServiceResponse
     */
    public function createVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * **DeleteVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](~~183568~~) operation to check whether the endpoint is deleted.
     *   * *   If the endpoint is in the **Deleting** state, the endpoint is being deleted.
     *   * *   If the endpoint cannot be queried, the endpoint is deleted.
     *   *
     * @param DeleteVpcEndpointRequest $request DeleteVpcEndpointRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcEndpointResponse DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcEndpoint',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **DeleteVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](~~183568~~) operation to check whether the endpoint is deleted.
     *   * *   If the endpoint is in the **Deleting** state, the endpoint is being deleted.
     *   * *   If the endpoint cannot be queried, the endpoint is deleted.
     *   *
     * @param DeleteVpcEndpointRequest $request DeleteVpcEndpointRequest
     *
     * @return DeleteVpcEndpointResponse DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * *   **DeleteVpcEndpointService** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](~~183542~~) operation to check whether the endpoint service is deleted.
     *   *     *   If the endpoint service is in the **Deleting** state, the endpoint service is being deleted.
     *   *     *   If the endpoint service cannot be queried, the endpoint service is deleted.
     *   * *   You cannot repeatedly call the **DeleteVpcEndpointService** operation to delete an endpoint service that belongs to an Alibaba Cloud account within a specified period of time.
     *   *
     * @param DeleteVpcEndpointServiceRequest $request DeleteVpcEndpointServiceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcEndpointServiceResponse DeleteVpcEndpointServiceResponse
     */
    public function deleteVpcEndpointServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcEndpointService',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   **DeleteVpcEndpointService** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](~~183542~~) operation to check whether the endpoint service is deleted.
     *   *     *   If the endpoint service is in the **Deleting** state, the endpoint service is being deleted.
     *   *     *   If the endpoint service cannot be queried, the endpoint service is deleted.
     *   * *   You cannot repeatedly call the **DeleteVpcEndpointService** operation to delete an endpoint service that belongs to an Alibaba Cloud account within a specified period of time.
     *   *
     * @param DeleteVpcEndpointServiceRequest $request DeleteVpcEndpointServiceRequest
     *
     * @return DeleteVpcEndpointServiceResponse DeleteVpcEndpointServiceResponse
     */
    public function deleteVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-04-15',
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
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2020-04-15',
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
     * @param DetachResourceFromVpcEndpointServiceRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DetachResourceFromVpcEndpointServiceResponse
     */
    public function detachResourceFromVpcEndpointServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachResourceFromVpcEndpointService',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachResourceFromVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 671231.
     *   *
     * @param DetachSecurityGroupFromVpcEndpointRequest $request DetachSecurityGroupFromVpcEndpointRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachSecurityGroupFromVpcEndpointResponse DetachSecurityGroupFromVpcEndpointResponse
     */
    public function detachSecurityGroupFromVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachSecurityGroupFromVpcEndpoint',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachSecurityGroupFromVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 671231.
     *   *
     * @param DetachSecurityGroupFromVpcEndpointRequest $request DetachSecurityGroupFromVpcEndpointRequest
     *
     * @return DetachSecurityGroupFromVpcEndpointResponse DetachSecurityGroupFromVpcEndpointResponse
     */
    public function detachSecurityGroupFromVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachSecurityGroupFromVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * *   **DisableVpcEndpointConnection** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](~~183568~~) operation to query the state of the endpoint connection.
     *   *     *   If the endpoint connection is in the **Disconnecting** state, the endpoint is being disconnected from the endpoint service.
     *   *     *   If the endpoint connection is in the **Disconnected** state, the endpoint is disconnected from the endpoint service.
     *   * *   You cannot repeatedly call the **DisableVpcEndpointConnection** operation to allow an endpoint service to reject a connection request from an endpoint within a specified period of time.
     *   *
     * @param DisableVpcEndpointConnectionRequest $request DisableVpcEndpointConnectionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableVpcEndpointConnectionResponse DisableVpcEndpointConnectionResponse
     */
    public function disableVpcEndpointConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableVpcEndpointConnection',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableVpcEndpointConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   **DisableVpcEndpointConnection** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](~~183568~~) operation to query the state of the endpoint connection.
     *   *     *   If the endpoint connection is in the **Disconnecting** state, the endpoint is being disconnected from the endpoint service.
     *   *     *   If the endpoint connection is in the **Disconnected** state, the endpoint is disconnected from the endpoint service.
     *   * *   You cannot repeatedly call the **DisableVpcEndpointConnection** operation to allow an endpoint service to reject a connection request from an endpoint within a specified period of time.
     *   *
     * @param DisableVpcEndpointConnectionRequest $request DisableVpcEndpointConnectionRequest
     *
     * @return DisableVpcEndpointConnectionResponse DisableVpcEndpointConnectionResponse
     */
    public function disableVpcEndpointConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVpcEndpointConnectionWithOptions($request, $runtime);
    }

    /**
     * Specifies whether to only precheck the request. Valid values:
     *   * *   **true**: only prechecks the API request without performing the operation. The system checks whether your AccessKey pair is valid, whether the Resource Access Management (RAM) user is authorized, and whether required parameters are set. If the request fails to pass the precheck, an error code is returned. If the request passes the check, the `DryRunOperation` error code is returned.
     *   * *   **false** (default): sends the request. If the request passes the precheck, a 2xx HTTP status code is returned and the operation is performed.
     *   *
     * @param DisableVpcEndpointZoneConnectionRequest $request DisableVpcEndpointZoneConnectionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableVpcEndpointZoneConnectionResponse DisableVpcEndpointZoneConnectionResponse
     */
    public function disableVpcEndpointZoneConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replacedResource)) {
            $query['ReplacedResource'] = $request->replacedResource;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableVpcEndpointZoneConnection',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableVpcEndpointZoneConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies whether to only precheck the request. Valid values:
     *   * *   **true**: only prechecks the API request without performing the operation. The system checks whether your AccessKey pair is valid, whether the Resource Access Management (RAM) user is authorized, and whether required parameters are set. If the request fails to pass the precheck, an error code is returned. If the request passes the check, the `DryRunOperation` error code is returned.
     *   * *   **false** (default): sends the request. If the request passes the precheck, a 2xx HTTP status code is returned and the operation is performed.
     *   *
     * @param DisableVpcEndpointZoneConnectionRequest $request DisableVpcEndpointZoneConnectionRequest
     *
     * @return DisableVpcEndpointZoneConnectionResponse DisableVpcEndpointZoneConnectionResponse
     */
    public function disableVpcEndpointZoneConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableVpcEndpointZoneConnectionWithOptions($request, $runtime);
    }

    /**
     * *   **EnableVpcEndpointConnection** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](~~183568~~) operation to query the state of the endpoint connection.
     *   *     *   If the state is **Connecting**, the endpoint connection is being established.
     *   *     *   If the state is **Connected**, the endpoint connection is established.
     *   * *   You cannot repeatedly call the **EnableVpcEndpointConnection** operation to allow an endpoint service of an Alibaba Cloud account to accept a connection request from an endpoint within a specified period of time.
     *   *
     * @param EnableVpcEndpointConnectionRequest $request EnableVpcEndpointConnectionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableVpcEndpointConnectionResponse EnableVpcEndpointConnectionResponse
     */
    public function enableVpcEndpointConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableVpcEndpointConnection',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableVpcEndpointConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   **EnableVpcEndpointConnection** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointAttribute](~~183568~~) operation to query the state of the endpoint connection.
     *   *     *   If the state is **Connecting**, the endpoint connection is being established.
     *   *     *   If the state is **Connected**, the endpoint connection is established.
     *   * *   You cannot repeatedly call the **EnableVpcEndpointConnection** operation to allow an endpoint service of an Alibaba Cloud account to accept a connection request from an endpoint within a specified period of time.
     *   *
     * @param EnableVpcEndpointConnectionRequest $request EnableVpcEndpointConnectionRequest
     *
     * @return EnableVpcEndpointConnectionResponse EnableVpcEndpointConnectionResponse
     */
    public function enableVpcEndpointConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableVpcEndpointConnectionWithOptions($request, $runtime);
    }

    /**
     * *   You can call this operation only when the state of the endpoint is **Connected** and the state of the associated zone is **Disconnected**.
     *   * *   **EnableVpcEndpointZoneConnection** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](~~183560~~) operation to check whether the endpoint service accepts a connection request from the endpoint in the associated zone.
     *   *     *   If the zone is in the **Connecting** state, the endpoint service is accepting the connection request from the endpoint.
     *   *     *   If the zone is in the **Connected** state, the endpoint service has accepted the connection request from the endpoint.
     *   * *   You cannot repeatedly call the **EnableVpcEndpointZoneConnection** operation to allow an endpoint service to accept a connection request from an endpoint in the associated zone within a specified period of time.
     *   *
     * @param EnableVpcEndpointZoneConnectionRequest $request EnableVpcEndpointZoneConnectionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableVpcEndpointZoneConnectionResponse EnableVpcEndpointZoneConnectionResponse
     */
    public function enableVpcEndpointZoneConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableVpcEndpointZoneConnection',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableVpcEndpointZoneConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call this operation only when the state of the endpoint is **Connected** and the state of the associated zone is **Disconnected**.
     *   * *   **EnableVpcEndpointZoneConnection** is an asynchronous operation. After you send a request, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](~~183560~~) operation to check whether the endpoint service accepts a connection request from the endpoint in the associated zone.
     *   *     *   If the zone is in the **Connecting** state, the endpoint service is accepting the connection request from the endpoint.
     *   *     *   If the zone is in the **Connected** state, the endpoint service has accepted the connection request from the endpoint.
     *   * *   You cannot repeatedly call the **EnableVpcEndpointZoneConnection** operation to allow an endpoint service to accept a connection request from an endpoint in the associated zone within a specified period of time.
     *   *
     * @param EnableVpcEndpointZoneConnectionRequest $request EnableVpcEndpointZoneConnectionRequest
     *
     * @return EnableVpcEndpointZoneConnectionResponse EnableVpcEndpointZoneConnectionResponse
     */
    public function enableVpcEndpointZoneConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableVpcEndpointZoneConnectionWithOptions($request, $runtime);
    }

    /**
     * @param GetVpcEndpointAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVpcEndpointAttributeResponse
     */
    public function getVpcEndpointAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVpcEndpointAttribute',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVpcEndpointAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetVpcEndpointServiceAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetVpcEndpointServiceAttributeResponse
     */
    public function getVpcEndpointServiceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVpcEndpointServiceAttribute',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVpcEndpointServiceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVpcEndpointConnectionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListVpcEndpointConnectionsResponse
     */
    public function listVpcEndpointConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionId)) {
            $query['ConnectionId'] = $request->connectionId;
        }
        if (!Utils::isUnset($request->connectionStatus)) {
            $query['ConnectionStatus'] = $request->connectionStatus;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->endpointOwnerId)) {
            $query['EndpointOwnerId'] = $request->endpointOwnerId;
        }
        if (!Utils::isUnset($request->eniId)) {
            $query['EniId'] = $request->eniId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replacedResourceId)) {
            $query['ReplacedResourceId'] = $request->replacedResourceId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpointConnections',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVpcEndpointSecurityGroupsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListVpcEndpointSecurityGroupsResponse
     */
    public function listVpcEndpointSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpointSecurityGroups',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVpcEndpointServiceResourcesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListVpcEndpointServiceResourcesResponse
     */
    public function listVpcEndpointServiceResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpointServiceResources',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointServiceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVpcEndpointServiceUsersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListVpcEndpointServiceUsersResponse
     */
    public function listVpcEndpointServiceUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userListType)) {
            $query['UserListType'] = $request->userListType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpointServiceUsers',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointServiceUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVpcEndpointServicesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListVpcEndpointServicesResponse
     */
    public function listVpcEndpointServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoAcceptEnabled)) {
            $query['AutoAcceptEnabled'] = $request->autoAcceptEnabled;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->serviceBusinessStatus)) {
            $query['ServiceBusinessStatus'] = $request->serviceBusinessStatus;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceResourceType)) {
            $query['ServiceResourceType'] = $request->serviceResourceType;
        }
        if (!Utils::isUnset($request->serviceStatus)) {
            $query['ServiceStatus'] = $request->serviceStatus;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneAffinityEnabled)) {
            $query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpointServices',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVpcEndpointServicesByEndUserRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListVpcEndpointServicesByEndUserResponse
     */
    public function listVpcEndpointServicesByEndUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpointServicesByEndUser',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointServicesByEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVpcEndpointZonesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListVpcEndpointZonesResponse
     */
    public function listVpcEndpointZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpointZones',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVpcEndpointsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVpcEndpointsResponse
     */
    public function listVpcEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStatus)) {
            $query['ConnectionStatus'] = $request->connectionStatus;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $query['EndpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->endpointStatus)) {
            $query['EndpointStatus'] = $request->endpointStatus;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpoints',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * The ID of the request.
     *   *
     * @param NotifyResourceAddressFamilyRequest $request NotifyResourceAddressFamilyRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return NotifyResourceAddressFamilyResponse NotifyResourceAddressFamilyResponse
     */
    public function notifyResourceAddressFamilyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressFamily)) {
            $query['AddressFamily'] = $request->addressFamily;
        }
        if (!Utils::isUnset($request->ipv6Address)) {
            $query['Ipv6Address'] = $request->ipv6Address;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NotifyResourceAddressFamily',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NotifyResourceAddressFamilyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param NotifyResourceAddressFamilyRequest $request NotifyResourceAddressFamilyRequest
     *
     * @return NotifyResourceAddressFamilyResponse NotifyResourceAddressFamilyResponse
     */
    public function notifyResourceAddressFamily($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyResourceAddressFamilyWithOptions($request, $runtime);
    }

    /**
     * @param OpenPrivateLinkServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OpenPrivateLinkServiceResponse
     */
    public function openPrivateLinkServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenPrivateLinkService',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenPrivateLinkServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You cannot repeatedly call the **RemoveUserFromVpcEndpointService** operation to remove the ID of an Alibaba Cloud account from the whitelist of an endpoint service within a specified period of time.
     *   *
     * @param RemoveUserFromVpcEndpointServiceRequest $request RemoveUserFromVpcEndpointServiceRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserFromVpcEndpointServiceResponse RemoveUserFromVpcEndpointServiceResponse
     */
    public function removeUserFromVpcEndpointServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->userARN)) {
            $query['UserARN'] = $request->userARN;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserFromVpcEndpointService',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUserFromVpcEndpointServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot repeatedly call the **RemoveUserFromVpcEndpointService** operation to remove the ID of an Alibaba Cloud account from the whitelist of an endpoint service within a specified period of time.
     *   *
     * @param RemoveUserFromVpcEndpointServiceRequest $request RemoveUserFromVpcEndpointServiceRequest
     *
     * @return RemoveUserFromVpcEndpointServiceResponse RemoveUserFromVpcEndpointServiceResponse
     */
    public function removeUserFromVpcEndpointService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromVpcEndpointServiceWithOptions($request, $runtime);
    }

    /**
     * *   **RemoveZoneFromVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](~~183560~~) operation to check whether the zone of the endpoint is deleted.
     *   *     *   If the zone of the endpoint is in the **Deleting** state, the zone is being deleted.
     *   *     *   If the zone cannot be queried, the zone is deleted.
     *   * *   You cannot repeatedly call the **RemoveZoneFromVpcEndpoint** operation to delete a zone of an endpoint within a specified period of time.
     *   *
     * @param RemoveZoneFromVpcEndpointRequest $request RemoveZoneFromVpcEndpointRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveZoneFromVpcEndpointResponse RemoveZoneFromVpcEndpointResponse
     */
    public function removeZoneFromVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveZoneFromVpcEndpoint',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveZoneFromVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   **RemoveZoneFromVpcEndpoint** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [ListVpcEndpointZones](~~183560~~) operation to check whether the zone of the endpoint is deleted.
     *   *     *   If the zone of the endpoint is in the **Deleting** state, the zone is being deleted.
     *   *     *   If the zone cannot be queried, the zone is deleted.
     *   * *   You cannot repeatedly call the **RemoveZoneFromVpcEndpoint** operation to delete a zone of an endpoint within a specified period of time.
     *   *
     * @param RemoveZoneFromVpcEndpointRequest $request RemoveZoneFromVpcEndpointRequest
     *
     * @return RemoveZoneFromVpcEndpointResponse RemoveZoneFromVpcEndpointResponse
     */
    public function removeZoneFromVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeZoneFromVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * > You can add up to 20 tags to an instance. Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number is reached, an error message is returned.
     *   *
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
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
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
            'version'     => '2020-04-15',
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
     * > You can add up to 20 tags to an instance. Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number is reached, an error message is returned.
     *   *
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
     * You cannot repeatedly call the **UpdateVpcEndpointAttribute** operation to modify the attributes of an endpoint that belongs to an Alibaba Cloud account within a specified period of time.
     *   *
     * @param UpdateVpcEndpointAttributeRequest $request UpdateVpcEndpointAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVpcEndpointAttributeResponse UpdateVpcEndpointAttributeResponse
     */
    public function updateVpcEndpointAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointDescription)) {
            $query['EndpointDescription'] = $request->endpointDescription;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $query['EndpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVpcEndpointAttribute',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVpcEndpointAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot repeatedly call the **UpdateVpcEndpointAttribute** operation to modify the attributes of an endpoint that belongs to an Alibaba Cloud account within a specified period of time.
     *   *
     * @param UpdateVpcEndpointAttributeRequest $request UpdateVpcEndpointAttributeRequest
     *
     * @return UpdateVpcEndpointAttributeResponse UpdateVpcEndpointAttributeResponse
     */
    public function updateVpcEndpointAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointAttributeWithOptions($request, $runtime);
    }

    /**
     * The ID of the endpoint service.
     *   *
     * @param UpdateVpcEndpointConnectionAttributeRequest $request UpdateVpcEndpointConnectionAttributeRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVpcEndpointConnectionAttributeResponse UpdateVpcEndpointConnectionAttributeResponse
     */
    public function updateVpcEndpointConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVpcEndpointConnectionAttribute',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVpcEndpointConnectionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the endpoint service.
     *   *
     * @param UpdateVpcEndpointConnectionAttributeRequest $request UpdateVpcEndpointConnectionAttributeRequest
     *
     * @return UpdateVpcEndpointConnectionAttributeResponse UpdateVpcEndpointConnectionAttributeResponse
     */
    public function updateVpcEndpointConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * You cannot repeatedly call the **UpdateVpcEndpointServiceAttribute** operation to modify the attributes of an endpoint service that belongs to an Alibaba Cloud account within a specified period of time.
     *   *
     * @param UpdateVpcEndpointServiceAttributeRequest $request UpdateVpcEndpointServiceAttributeRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVpcEndpointServiceAttributeResponse UpdateVpcEndpointServiceAttributeResponse
     */
    public function updateVpcEndpointServiceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoAcceptEnabled)) {
            $query['AutoAcceptEnabled'] = $request->autoAcceptEnabled;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectBandwidth)) {
            $query['ConnectBandwidth'] = $request->connectBandwidth;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $query['ServiceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceSupportIPv6)) {
            $query['ServiceSupportIPv6'] = $request->serviceSupportIPv6;
        }
        if (!Utils::isUnset($request->zoneAffinityEnabled)) {
            $query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVpcEndpointServiceAttribute',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVpcEndpointServiceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot repeatedly call the **UpdateVpcEndpointServiceAttribute** operation to modify the attributes of an endpoint service that belongs to an Alibaba Cloud account within a specified period of time.
     *   *
     * @param UpdateVpcEndpointServiceAttributeRequest $request UpdateVpcEndpointServiceAttributeRequest
     *
     * @return UpdateVpcEndpointServiceAttributeResponse UpdateVpcEndpointServiceAttributeResponse
     */
    public function updateVpcEndpointServiceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointServiceAttributeWithOptions($request, $runtime);
    }

    /**
     * You cannot repeatedly call the **UpdateVpcEndpointServiceResourceAttribute** operation to modify the attributes of a service resource that is added to an endpoint service within a specified period of time.
     *   *
     * @param UpdateVpcEndpointServiceResourceAttributeRequest $request UpdateVpcEndpointServiceResourceAttributeRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVpcEndpointServiceResourceAttributeResponse UpdateVpcEndpointServiceResourceAttributeResponse
     */
    public function updateVpcEndpointServiceResourceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoAllocatedEnabled)) {
            $query['AutoAllocatedEnabled'] = $request->autoAllocatedEnabled;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVpcEndpointServiceResourceAttribute',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVpcEndpointServiceResourceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot repeatedly call the **UpdateVpcEndpointServiceResourceAttribute** operation to modify the attributes of a service resource that is added to an endpoint service within a specified period of time.
     *   *
     * @param UpdateVpcEndpointServiceResourceAttributeRequest $request UpdateVpcEndpointServiceResourceAttributeRequest
     *
     * @return UpdateVpcEndpointServiceResourceAttributeResponse UpdateVpcEndpointServiceResourceAttributeResponse
     */
    public function updateVpcEndpointServiceResourceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointServiceResourceAttributeWithOptions($request, $runtime);
    }

    /**
     * ### Prerequisites
     *   * By default, the feature of modifying a service resource of a zone to which an endpoint connection belongs is unavailable. To use this feature, log on to the [Quota Center console](https://quotas.console.aliyun.com/white-list-products/privatelink/quotas). Click Whitelist Quotas in the left-side navigation pane and click PrivateLink in the Networking section. On the page that appears, search for `privatelink_whitelist/svc_res_mgt_uat` and click Apply in the Actions column.
     *   * ### Usage notes
     *   * *   If the endpoint connection is in the **Disconnected** state, you can manually allocate the service resource in the zone.
     *   * *   If the endpoint connection is in the **Connected** state, you can manually migrate the service resource in the zone. In this case, the connection might be interrupted.
     *   * *   **UpdateVpcEndpointZoneConnectionResourceAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](~~469330~~) operation to check whether the service resource is modified.
     *   *     *   If the endpoint service is in the **Pending** state, the service resource is being modified.
     *   *     *   If the endpoint service is in the **Active** state, the service resource is modified.
     *   * *   You cannot repeatedly call the **UpdateVpcEndpointZoneConnectionResourceAttribute** operation to modify a service resource in the zone to which an endpoint connection belongs within a specified period of time.
     *   *
     * @param UpdateVpcEndpointZoneConnectionResourceAttributeRequest $request UpdateVpcEndpointZoneConnectionResourceAttributeRequest
     * @param RuntimeOptions                                          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVpcEndpointZoneConnectionResourceAttributeResponse UpdateVpcEndpointZoneConnectionResourceAttributeResponse
     */
    public function updateVpcEndpointZoneConnectionResourceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceAllocateMode)) {
            $query['ResourceAllocateMode'] = $request->resourceAllocateMode;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceReplaceMode)) {
            $query['ResourceReplaceMode'] = $request->resourceReplaceMode;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVpcEndpointZoneConnectionResourceAttribute',
            'version'     => '2020-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVpcEndpointZoneConnectionResourceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Prerequisites
     *   * By default, the feature of modifying a service resource of a zone to which an endpoint connection belongs is unavailable. To use this feature, log on to the [Quota Center console](https://quotas.console.aliyun.com/white-list-products/privatelink/quotas). Click Whitelist Quotas in the left-side navigation pane and click PrivateLink in the Networking section. On the page that appears, search for `privatelink_whitelist/svc_res_mgt_uat` and click Apply in the Actions column.
     *   * ### Usage notes
     *   * *   If the endpoint connection is in the **Disconnected** state, you can manually allocate the service resource in the zone.
     *   * *   If the endpoint connection is in the **Connected** state, you can manually migrate the service resource in the zone. In this case, the connection might be interrupted.
     *   * *   **UpdateVpcEndpointZoneConnectionResourceAttribute** is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the [GetVpcEndpointServiceAttribute](~~469330~~) operation to check whether the service resource is modified.
     *   *     *   If the endpoint service is in the **Pending** state, the service resource is being modified.
     *   *     *   If the endpoint service is in the **Active** state, the service resource is modified.
     *   * *   You cannot repeatedly call the **UpdateVpcEndpointZoneConnectionResourceAttribute** operation to modify a service resource in the zone to which an endpoint connection belongs within a specified period of time.
     *   *
     * @param UpdateVpcEndpointZoneConnectionResourceAttributeRequest $request UpdateVpcEndpointZoneConnectionResourceAttributeRequest
     *
     * @return UpdateVpcEndpointZoneConnectionResourceAttributeResponse UpdateVpcEndpointZoneConnectionResourceAttributeResponse
     */
    public function updateVpcEndpointZoneConnectionResourceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVpcEndpointZoneConnectionResourceAttributeWithOptions($request, $runtime);
    }
}
