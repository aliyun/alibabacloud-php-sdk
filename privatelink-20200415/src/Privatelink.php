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
     * @param AddUserToVpcEndpointServiceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddUserToVpcEndpointServiceResponse
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
     * @param AddZoneToVpcEndpointRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddZoneToVpcEndpointResponse
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
     * @param AttachResourceToVpcEndpointServiceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return AttachResourceToVpcEndpointServiceResponse
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
     * @param AttachSecurityGroupToVpcEndpointRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AttachSecurityGroupToVpcEndpointResponse
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
     * @param CreateVpcEndpointRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVpcEndpointResponse
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
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
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
     * @param CreateVpcEndpointServiceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateVpcEndpointServiceResponse
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
        if (!Utils::isUnset($request->serviceDescription)) {
            $query['ServiceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceResourceType)) {
            $query['ServiceResourceType'] = $request->serviceResourceType;
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
     * @param DeleteVpcEndpointRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVpcEndpointResponse
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
     * @param DeleteVpcEndpointServiceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteVpcEndpointServiceResponse
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
     * @param DetachSecurityGroupFromVpcEndpointRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DetachSecurityGroupFromVpcEndpointResponse
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
     * @param DisableVpcEndpointConnectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DisableVpcEndpointConnectionResponse
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
     * @param DisableVpcEndpointZoneConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DisableVpcEndpointZoneConnectionResponse
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
     * @param EnableVpcEndpointConnectionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableVpcEndpointConnectionResponse
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
     * @param EnableVpcEndpointZoneConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return EnableVpcEndpointZoneConnectionResponse
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
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
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
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
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
     * @param RemoveUserFromVpcEndpointServiceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveUserFromVpcEndpointServiceResponse
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
     * @param RemoveZoneFromVpcEndpointRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveZoneFromVpcEndpointResponse
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
     * @param UpdateVpcEndpointAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateVpcEndpointAttributeResponse
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
     * @param UpdateVpcEndpointConnectionAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateVpcEndpointConnectionAttributeResponse
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
     * @param UpdateVpcEndpointServiceAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateVpcEndpointServiceAttributeResponse
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
     * @param UpdateVpcEndpointServiceResourceAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return UpdateVpcEndpointServiceResourceAttributeResponse
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
     * @param UpdateVpcEndpointZoneConnectionResourceAttributeRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return UpdateVpcEndpointZoneConnectionResourceAttributeResponse
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
