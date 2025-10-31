<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AllocateAnycastEipAddressRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AllocateAnycastEipAddressResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AssociateAnycastEipAddressRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AssociateAnycastEipAddressResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastPopLocationsRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastPopLocationsResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastServerRegionsRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastServerRegionsResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ModifyAnycastEipAddressAttributeRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ModifyAnycastEipAddressAttributeResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ModifyAnycastEipAddressSpecRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ModifyAnycastEipAddressSpecResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ReleaseAnycastEipAddressRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ReleaseAnycastEipAddressResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UnassociateAnycastEipAddressRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UnassociateAnycastEipAddressResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UpdateAnycastEipAddressAssociationsRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UpdateAnycastEipAddressAssociationsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eipanycast extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eipanycast', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates an Anycast elastic IP address (Anycast EIP).
     *
     * @param request - AllocateAnycastEipAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateAnycastEipAddressResponse
     *
     * @param AllocateAnycastEipAddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AllocateAnycastEipAddressResponse
     */
    public function allocateAnycastEipAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceLocation) {
            @$query['ServiceLocation'] = $request->serviceLocation;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateAnycastEipAddress',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Anycast elastic IP address (Anycast EIP).
     *
     * @param request - AllocateAnycastEipAddressRequest
     *
     * @returns AllocateAnycastEipAddressResponse
     *
     * @param AllocateAnycastEipAddressRequest $request
     *
     * @return AllocateAnycastEipAddressResponse
     */
    public function allocateAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateAnycastEipAddressWithOptions($request, $runtime);
    }

    /**
     * Associates an Anycast elastic IP address (Anycast EIP) with an endpoint.
     *
     * @param request - AssociateAnycastEipAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateAnycastEipAddressResponse
     *
     * @param AssociateAnycastEipAddressRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AssociateAnycastEipAddressResponse
     */
    public function associateAnycastEipAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->anycastId) {
            @$query['AnycastId'] = $request->anycastId;
        }

        if (null !== $request->associationMode) {
            @$query['AssociationMode'] = $request->associationMode;
        }

        if (null !== $request->bindInstanceId) {
            @$query['BindInstanceId'] = $request->bindInstanceId;
        }

        if (null !== $request->bindInstanceRegionId) {
            @$query['BindInstanceRegionId'] = $request->bindInstanceRegionId;
        }

        if (null !== $request->bindInstanceType) {
            @$query['BindInstanceType'] = $request->bindInstanceType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->popLocations) {
            @$query['PopLocations'] = $request->popLocations;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateAnycastEipAddress',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates an Anycast elastic IP address (Anycast EIP) with an endpoint.
     *
     * @param request - AssociateAnycastEipAddressRequest
     *
     * @returns AssociateAnycastEipAddressResponse
     *
     * @param AssociateAnycastEipAddressRequest $request
     *
     * @return AssociateAnycastEipAddressResponse
     */
    public function associateAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAnycastEipAddressWithOptions($request, $runtime);
    }

    /**
     * 修改AnycastEIp实例资源组.
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
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
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
            'version' => '2020-03-09',
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
     * 修改AnycastEIp实例资源组.
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
     * Queries Anycast elastic IP addresses (Anycast EIPs) associated with specified instance IP addresses or instance IDs, including instance status, maximum bandwidth, and associated resources.
     *
     * @param request - DescribeAnycastEipAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAnycastEipAddressResponse
     *
     * @param DescribeAnycastEipAddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAnycastEipAddressResponse
     */
    public function describeAnycastEipAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->anycastId) {
            @$query['AnycastId'] = $request->anycastId;
        }

        if (null !== $request->bindInstanceId) {
            @$query['BindInstanceId'] = $request->bindInstanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAnycastEipAddress',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Anycast elastic IP addresses (Anycast EIPs) associated with specified instance IP addresses or instance IDs, including instance status, maximum bandwidth, and associated resources.
     *
     * @param request - DescribeAnycastEipAddressRequest
     *
     * @returns DescribeAnycastEipAddressResponse
     *
     * @param DescribeAnycastEipAddressRequest $request
     *
     * @return DescribeAnycastEipAddressResponse
     */
    public function describeAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnycastEipAddressWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the access points in an area.
     *
     * @param request - DescribeAnycastPopLocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAnycastPopLocationsResponse
     *
     * @param DescribeAnycastPopLocationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAnycastPopLocationsResponse
     */
    public function describeAnycastPopLocationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceLocation) {
            @$query['ServiceLocation'] = $request->serviceLocation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAnycastPopLocations',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAnycastPopLocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the access points in an area.
     *
     * @param request - DescribeAnycastPopLocationsRequest
     *
     * @returns DescribeAnycastPopLocationsResponse
     *
     * @param DescribeAnycastPopLocationsRequest $request
     *
     * @return DescribeAnycastPopLocationsResponse
     */
    public function describeAnycastPopLocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnycastPopLocationsWithOptions($request, $runtime);
    }

    /**
     * Queries the regions where you can associate Anycast elastic IP addresses (Anycast EIPs) with endpoints.
     *
     * @param request - DescribeAnycastServerRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAnycastServerRegionsResponse
     *
     * @param DescribeAnycastServerRegionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAnycastServerRegionsResponse
     */
    public function describeAnycastServerRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceLocation) {
            @$query['ServiceLocation'] = $request->serviceLocation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAnycastServerRegions',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAnycastServerRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions where you can associate Anycast elastic IP addresses (Anycast EIPs) with endpoints.
     *
     * @param request - DescribeAnycastServerRegionsRequest
     *
     * @returns DescribeAnycastServerRegionsResponse
     *
     * @param DescribeAnycastServerRegionsRequest $request
     *
     * @return DescribeAnycastServerRegionsResponse
     */
    public function describeAnycastServerRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnycastServerRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries information about Anycast elastic IP addresses (Anycast EIPs) in an access area, including instance status, maximum bandwidth, and associated resources.
     *
     * @param request - ListAnycastEipAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnycastEipAddressesResponse
     *
     * @param ListAnycastEipAddressesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAnycastEipAddressesResponse
     */
    public function listAnycastEipAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->anycastEipAddress) {
            @$query['AnycastEipAddress'] = $request->anycastEipAddress;
        }

        if (null !== $request->anycastId) {
            @$query['AnycastId'] = $request->anycastId;
        }

        if (null !== $request->anycastIds) {
            @$query['AnycastIds'] = $request->anycastIds;
        }

        if (null !== $request->bindInstanceIds) {
            @$query['BindInstanceIds'] = $request->bindInstanceIds;
        }

        if (null !== $request->businessStatus) {
            @$query['BusinessStatus'] = $request->businessStatus;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceLocation) {
            @$query['ServiceLocation'] = $request->serviceLocation;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnycastEipAddresses',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAnycastEipAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about Anycast elastic IP addresses (Anycast EIPs) in an access area, including instance status, maximum bandwidth, and associated resources.
     *
     * @param request - ListAnycastEipAddressesRequest
     *
     * @returns ListAnycastEipAddressesResponse
     *
     * @param ListAnycastEipAddressesRequest $request
     *
     * @return ListAnycastEipAddressesResponse
     */
    public function listAnycastEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnycastEipAddressesWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to resources.
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
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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
            'version' => '2020-03-09',
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
     * Modifies the name and description of an Anycast elastic IP address (Anycast EIP).
     *
     * @param request - ModifyAnycastEipAddressAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAnycastEipAddressAttributeResponse
     *
     * @param ModifyAnycastEipAddressAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyAnycastEipAddressAttributeResponse
     */
    public function modifyAnycastEipAddressAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->anycastId) {
            @$query['AnycastId'] = $request->anycastId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAnycastEipAddressAttribute',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAnycastEipAddressAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of an Anycast elastic IP address (Anycast EIP).
     *
     * @param request - ModifyAnycastEipAddressAttributeRequest
     *
     * @returns ModifyAnycastEipAddressAttributeResponse
     *
     * @param ModifyAnycastEipAddressAttributeRequest $request
     *
     * @return ModifyAnycastEipAddressAttributeResponse
     */
    public function modifyAnycastEipAddressAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAnycastEipAddressAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the maximum bandwidth of an Anycast elastic IP address (Anycast EIP).
     *
     * @param request - ModifyAnycastEipAddressSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAnycastEipAddressSpecResponse
     *
     * @param ModifyAnycastEipAddressSpecRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyAnycastEipAddressSpecResponse
     */
    public function modifyAnycastEipAddressSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->anycastId) {
            @$query['AnycastId'] = $request->anycastId;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAnycastEipAddressSpec',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAnycastEipAddressSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the maximum bandwidth of an Anycast elastic IP address (Anycast EIP).
     *
     * @param request - ModifyAnycastEipAddressSpecRequest
     *
     * @returns ModifyAnycastEipAddressSpecResponse
     *
     * @param ModifyAnycastEipAddressSpecRequest $request
     *
     * @return ModifyAnycastEipAddressSpecResponse
     */
    public function modifyAnycastEipAddressSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAnycastEipAddressSpecWithOptions($request, $runtime);
    }

    /**
     * Releases an Anycast elastic IP address (Anycast EIP).
     *
     * @param request - ReleaseAnycastEipAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseAnycastEipAddressResponse
     *
     * @param ReleaseAnycastEipAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseAnycastEipAddressResponse
     */
    public function releaseAnycastEipAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->anycastId) {
            @$query['AnycastId'] = $request->anycastId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseAnycastEipAddress',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases an Anycast elastic IP address (Anycast EIP).
     *
     * @param request - ReleaseAnycastEipAddressRequest
     *
     * @returns ReleaseAnycastEipAddressResponse
     *
     * @param ReleaseAnycastEipAddressRequest $request
     *
     * @return ReleaseAnycastEipAddressResponse
     */
    public function releaseAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseAnycastEipAddressWithOptions($request, $runtime);
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
        $query = [];
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
            'action' => 'TagResources',
            'version' => '2020-03-09',
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
     * Disassociates an Anycast elastic IP address (Anycast EIP) from an endpoint.
     *
     * @param request - UnassociateAnycastEipAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnassociateAnycastEipAddressResponse
     *
     * @param UnassociateAnycastEipAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnassociateAnycastEipAddressResponse
     */
    public function unassociateAnycastEipAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->anycastId) {
            @$query['AnycastId'] = $request->anycastId;
        }

        if (null !== $request->bindInstanceId) {
            @$query['BindInstanceId'] = $request->bindInstanceId;
        }

        if (null !== $request->bindInstanceRegionId) {
            @$query['BindInstanceRegionId'] = $request->bindInstanceRegionId;
        }

        if (null !== $request->bindInstanceType) {
            @$query['BindInstanceType'] = $request->bindInstanceType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnassociateAnycastEipAddress',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnassociateAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates an Anycast elastic IP address (Anycast EIP) from an endpoint.
     *
     * @param request - UnassociateAnycastEipAddressRequest
     *
     * @returns UnassociateAnycastEipAddressResponse
     *
     * @param UnassociateAnycastEipAddressRequest $request
     *
     * @return UnassociateAnycastEipAddressResponse
     */
    public function unassociateAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateAnycastEipAddressWithOptions($request, $runtime);
    }

    /**
     * Removes tags from Anycast EIPs.
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
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-03-09',
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
     * Removes tags from Anycast EIPs.
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
     * If an Anycast EIP is associated with endpoints in different regions, you can change the access points that are mapped to an endpoint. You can call UpdateAnycastEipAddressAssociations to add or delete endpoints to modify the mappings between endpoints and access points.
     *
     * @param request - UpdateAnycastEipAddressAssociationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAnycastEipAddressAssociationsResponse
     *
     * @param UpdateAnycastEipAddressAssociationsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateAnycastEipAddressAssociationsResponse
     */
    public function updateAnycastEipAddressAssociationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->anycastId) {
            @$query['AnycastId'] = $request->anycastId;
        }

        if (null !== $request->associationMode) {
            @$query['AssociationMode'] = $request->associationMode;
        }

        if (null !== $request->bindInstanceId) {
            @$query['BindInstanceId'] = $request->bindInstanceId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->popLocationAddList) {
            @$query['PopLocationAddList'] = $request->popLocationAddList;
        }

        if (null !== $request->popLocationDeleteList) {
            @$query['PopLocationDeleteList'] = $request->popLocationDeleteList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAnycastEipAddressAssociations',
            'version' => '2020-03-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAnycastEipAddressAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If an Anycast EIP is associated with endpoints in different regions, you can change the access points that are mapped to an endpoint. You can call UpdateAnycastEipAddressAssociations to add or delete endpoints to modify the mappings between endpoints and access points.
     *
     * @param request - UpdateAnycastEipAddressAssociationsRequest
     *
     * @returns UpdateAnycastEipAddressAssociationsResponse
     *
     * @param UpdateAnycastEipAddressAssociationsRequest $request
     *
     * @return UpdateAnycastEipAddressAssociationsResponse
     */
    public function updateAnycastEipAddressAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAnycastEipAddressAssociationsWithOptions($request, $runtime);
    }
}
