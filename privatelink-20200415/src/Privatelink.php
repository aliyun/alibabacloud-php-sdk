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
use AlibabaCloud\SDK\Privatelink\V20200415\Models\EnableVpcEndpointConnectionRequest;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\EnableVpcEndpointConnectionResponse;
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
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $query['ServiceId']   = $request->serviceId;
        $query['UserId']      = $request->userId;
        $req                  = new OpenApiRequest([
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
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['EndpointId']  = $request->endpointId;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $query['VSwitchId']   = $request->vSwitchId;
        $query['ZoneId']      = $request->zoneId;
        $query['ip']          = $request->ip;
        $req                  = new OpenApiRequest([
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
        $query                 = [];
        $query['ClientToken']  = $request->clientToken;
        $query['DryRun']       = $request->dryRun;
        $query['RegionId']     = $request->regionId;
        $query['RegionId']     = $request->regionId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['ServiceId']    = $request->serviceId;
        $req                   = new OpenApiRequest([
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
        $query                    = [];
        $query['ClientToken']     = $request->clientToken;
        $query['DryRun']          = $request->dryRun;
        $query['EndpointId']      = $request->endpointId;
        $query['RegionId']        = $request->regionId;
        $query['RegionId']        = $request->regionId;
        $query['SecurityGroupId'] = $request->securityGroupId;
        $req                      = new OpenApiRequest([
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
        $query                              = [];
        $query['ClientToken']               = $request->clientToken;
        $query['DryRun']                    = $request->dryRun;
        $query['EndpointDescription']       = $request->endpointDescription;
        $query['EndpointName']              = $request->endpointName;
        $query['EndpointType']              = $request->endpointType;
        $query['ProtectedEnabled']          = $request->protectedEnabled;
        $query['RegionId']                  = $request->regionId;
        $query['RegionId']                  = $request->regionId;
        $query['SecurityGroupId']           = $request->securityGroupId;
        $query['ServiceId']                 = $request->serviceId;
        $query['ServiceName']               = $request->serviceName;
        $query['VpcId']                     = $request->vpcId;
        $query['Zone']                      = $request->zone;
        $query['ZonePrivateIpAddressCount'] = $request->zonePrivateIpAddressCount;
        $req                                = new OpenApiRequest([
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
        $query                        = [];
        $query['AutoAcceptEnabled']   = $request->autoAcceptEnabled;
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['Payer']               = $request->payer;
        $query['RegionId']            = $request->regionId;
        $query['RegionId']            = $request->regionId;
        $query['Resource']            = $request->resource;
        $query['ServiceDescription']  = $request->serviceDescription;
        $query['ServiceResourceType'] = $request->serviceResourceType;
        $query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        $req                          = new OpenApiRequest([
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
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['EndpointId']  = $request->endpointId;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
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
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $query['ServiceId']   = $request->serviceId;
        $req                  = new OpenApiRequest([
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
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
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
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
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
        $query                 = [];
        $query['ClientToken']  = $request->clientToken;
        $query['DryRun']       = $request->dryRun;
        $query['RegionId']     = $request->regionId;
        $query['RegionId']     = $request->regionId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['ServiceId']    = $request->serviceId;
        $req                   = new OpenApiRequest([
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
        $query                    = [];
        $query['ClientToken']     = $request->clientToken;
        $query['DryRun']          = $request->dryRun;
        $query['EndpointId']      = $request->endpointId;
        $query['RegionId']        = $request->regionId;
        $query['RegionId']        = $request->regionId;
        $query['SecurityGroupId'] = $request->securityGroupId;
        $req                      = new OpenApiRequest([
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
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['EndpointId']  = $request->endpointId;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $query['ServiceId']   = $request->serviceId;
        $req                  = new OpenApiRequest([
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
     * @param EnableVpcEndpointConnectionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableVpcEndpointConnectionResponse
     */
    public function enableVpcEndpointConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['Bandwidth']   = $request->bandwidth;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['EndpointId']  = $request->endpointId;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $query['ServiceId']   = $request->serviceId;
        $req                  = new OpenApiRequest([
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
     * @param GetVpcEndpointAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVpcEndpointAttributeResponse
     */
    public function getVpcEndpointAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['EndpointId'] = $request->endpointId;
        $query['RegionId']   = $request->regionId;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
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
        $query              = [];
        $query['RegionId']  = $request->regionId;
        $query['RegionId']  = $request->regionId;
        $query['ServiceId'] = $request->serviceId;
        $req                = new OpenApiRequest([
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
        $query                     = [];
        $query['ConnectionStatus'] = $request->connectionStatus;
        $query['EndpointId']       = $request->endpointId;
        $query['EndpointOwnerId']  = $request->endpointOwnerId;
        $query['EniId']            = $request->eniId;
        $query['MaxResults']       = $request->maxResults;
        $query['NextToken']        = $request->nextToken;
        $query['RegionId']         = $request->regionId;
        $query['RegionId']         = $request->regionId;
        $query['ServiceId']        = $request->serviceId;
        $req                       = new OpenApiRequest([
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
        $query               = [];
        $query['EndpointId'] = $request->endpointId;
        $query['MaxResults'] = $request->maxResults;
        $query['NextToken']  = $request->nextToken;
        $query['RegionId']   = $request->regionId;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
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
        $query               = [];
        $query['MaxResults'] = $request->maxResults;
        $query['NextToken']  = $request->nextToken;
        $query['RegionId']   = $request->regionId;
        $query['RegionId']   = $request->regionId;
        $query['ServiceId']  = $request->serviceId;
        $req                 = new OpenApiRequest([
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
        $query               = [];
        $query['MaxResults'] = $request->maxResults;
        $query['NextToken']  = $request->nextToken;
        $query['RegionId']   = $request->regionId;
        $query['RegionId']   = $request->regionId;
        $query['ServiceId']  = $request->serviceId;
        $query['UserId']     = $request->userId;
        $req                 = new OpenApiRequest([
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
        $query                          = [];
        $query['AutoAcceptEnabled']     = $request->autoAcceptEnabled;
        $query['MaxResults']            = $request->maxResults;
        $query['NextToken']             = $request->nextToken;
        $query['RegionId']              = $request->regionId;
        $query['RegionId']              = $request->regionId;
        $query['ServiceBusinessStatus'] = $request->serviceBusinessStatus;
        $query['ServiceId']             = $request->serviceId;
        $query['ServiceName']           = $request->serviceName;
        $query['ServiceResourceType']   = $request->serviceResourceType;
        $query['ServiceStatus']         = $request->serviceStatus;
        $query['ZoneAffinityEnabled']   = $request->zoneAffinityEnabled;
        $req                            = new OpenApiRequest([
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
        $query                = [];
        $query['MaxResults']  = $request->maxResults;
        $query['NextToken']   = $request->nextToken;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $query['ServiceId']   = $request->serviceId;
        $query['ServiceName'] = $request->serviceName;
        $query['ServiceType'] = $request->serviceType;
        $req                  = new OpenApiRequest([
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
        $query               = [];
        $query['EndpointId'] = $request->endpointId;
        $query['MaxResults'] = $request->maxResults;
        $query['NextToken']  = $request->nextToken;
        $query['RegionId']   = $request->regionId;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
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
        $query                     = [];
        $query['ConnectionStatus'] = $request->connectionStatus;
        $query['EndpointId']       = $request->endpointId;
        $query['EndpointName']     = $request->endpointName;
        $query['EndpointStatus']   = $request->endpointStatus;
        $query['EndpointType']     = $request->endpointType;
        $query['MaxResults']       = $request->maxResults;
        $query['NextToken']        = $request->nextToken;
        $query['RegionId']         = $request->regionId;
        $query['RegionId']         = $request->regionId;
        $query['ServiceName']      = $request->serviceName;
        $query['VpcId']            = $request->vpcId;
        $req                       = new OpenApiRequest([
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
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
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $query['ServiceId']   = $request->serviceId;
        $query['UserId']      = $request->userId;
        $req                  = new OpenApiRequest([
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
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['EndpointId']  = $request->endpointId;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $query['ZoneId']      = $request->zoneId;
        $req                  = new OpenApiRequest([
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
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DryRun']              = $request->dryRun;
        $query['EndpointDescription'] = $request->endpointDescription;
        $query['EndpointId']          = $request->endpointId;
        $query['EndpointName']        = $request->endpointName;
        $query['RegionId']            = $request->regionId;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
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
        $query                = [];
        $query['Bandwidth']   = $request->bandwidth;
        $query['ClientToken'] = $request->clientToken;
        $query['DryRun']      = $request->dryRun;
        $query['EndpointId']  = $request->endpointId;
        $query['RegionId']    = $request->regionId;
        $query['RegionId']    = $request->regionId;
        $query['ServiceId']   = $request->serviceId;
        $req                  = new OpenApiRequest([
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
        $query                        = [];
        $query['AutoAcceptEnabled']   = $request->autoAcceptEnabled;
        $query['ClientToken']         = $request->clientToken;
        $query['ConnectBandwidth']    = $request->connectBandwidth;
        $query['DryRun']              = $request->dryRun;
        $query['RegionId']            = $request->regionId;
        $query['RegionId']            = $request->regionId;
        $query['ServiceDescription']  = $request->serviceDescription;
        $query['ServiceId']           = $request->serviceId;
        $query['ZoneAffinityEnabled'] = $request->zoneAffinityEnabled;
        $req                          = new OpenApiRequest([
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
}
