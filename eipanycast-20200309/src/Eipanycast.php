<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AllocateAnycastEipAddressRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AllocateAnycastEipAddressResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AssociateAnycastEipAddressRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AssociateAnycastEipAddressResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Creates an Anycast elastic IP address (Anycast EIP).
     *  *
     * @param AllocateAnycastEipAddressRequest $request AllocateAnycastEipAddressRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateAnycastEipAddressResponse AllocateAnycastEipAddressResponse
     */
    public function allocateAnycastEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceLocation)) {
            $query['ServiceLocation'] = $request->serviceLocation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateAnycastEipAddress',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an Anycast elastic IP address (Anycast EIP).
     *  *
     * @param AllocateAnycastEipAddressRequest $request AllocateAnycastEipAddressRequest
     *
     * @return AllocateAnycastEipAddressResponse AllocateAnycastEipAddressResponse
     */
    public function allocateAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateAnycastEipAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Associates an Anycast elastic IP address (Anycast EIP) with an endpoint.
     *  *
     * @param AssociateAnycastEipAddressRequest $request AssociateAnycastEipAddressRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateAnycastEipAddressResponse AssociateAnycastEipAddressResponse
     */
    public function associateAnycastEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anycastId)) {
            $query['AnycastId'] = $request->anycastId;
        }
        if (!Utils::isUnset($request->associationMode)) {
            $query['AssociationMode'] = $request->associationMode;
        }
        if (!Utils::isUnset($request->bindInstanceId)) {
            $query['BindInstanceId'] = $request->bindInstanceId;
        }
        if (!Utils::isUnset($request->bindInstanceRegionId)) {
            $query['BindInstanceRegionId'] = $request->bindInstanceRegionId;
        }
        if (!Utils::isUnset($request->bindInstanceType)) {
            $query['BindInstanceType'] = $request->bindInstanceType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->popLocations)) {
            $query['PopLocations'] = $request->popLocations;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateAnycastEipAddress',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates an Anycast elastic IP address (Anycast EIP) with an endpoint.
     *  *
     * @param AssociateAnycastEipAddressRequest $request AssociateAnycastEipAddressRequest
     *
     * @return AssociateAnycastEipAddressResponse AssociateAnycastEipAddressResponse
     */
    public function associateAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAnycastEipAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Anycast elastic IP addresses (Anycast EIPs) associated with specified instance IP addresses or instance IDs, including instance status, maximum bandwidth, and associated resources.
     *  *
     * @param DescribeAnycastEipAddressRequest $request DescribeAnycastEipAddressRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAnycastEipAddressResponse DescribeAnycastEipAddressResponse
     */
    public function describeAnycastEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anycastId)) {
            $query['AnycastId'] = $request->anycastId;
        }
        if (!Utils::isUnset($request->bindInstanceId)) {
            $query['BindInstanceId'] = $request->bindInstanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnycastEipAddress',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Anycast elastic IP addresses (Anycast EIPs) associated with specified instance IP addresses or instance IDs, including instance status, maximum bandwidth, and associated resources.
     *  *
     * @param DescribeAnycastEipAddressRequest $request DescribeAnycastEipAddressRequest
     *
     * @return DescribeAnycastEipAddressResponse DescribeAnycastEipAddressResponse
     */
    public function describeAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnycastEipAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the access points in an area.
     *  *
     * @param DescribeAnycastPopLocationsRequest $request DescribeAnycastPopLocationsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAnycastPopLocationsResponse DescribeAnycastPopLocationsResponse
     */
    public function describeAnycastPopLocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceLocation)) {
            $query['ServiceLocation'] = $request->serviceLocation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnycastPopLocations',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnycastPopLocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the access points in an area.
     *  *
     * @param DescribeAnycastPopLocationsRequest $request DescribeAnycastPopLocationsRequest
     *
     * @return DescribeAnycastPopLocationsResponse DescribeAnycastPopLocationsResponse
     */
    public function describeAnycastPopLocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnycastPopLocationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the regions where you can associate Anycast elastic IP addresses (Anycast EIPs) with endpoints.
     *  *
     * @param DescribeAnycastServerRegionsRequest $request DescribeAnycastServerRegionsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAnycastServerRegionsResponse DescribeAnycastServerRegionsResponse
     */
    public function describeAnycastServerRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceLocation)) {
            $query['ServiceLocation'] = $request->serviceLocation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnycastServerRegions',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnycastServerRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the regions where you can associate Anycast elastic IP addresses (Anycast EIPs) with endpoints.
     *  *
     * @param DescribeAnycastServerRegionsRequest $request DescribeAnycastServerRegionsRequest
     *
     * @return DescribeAnycastServerRegionsResponse DescribeAnycastServerRegionsResponse
     */
    public function describeAnycastServerRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnycastServerRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询指定接入区域已创建的Anycast EIP实例
     *  *
     * @param ListAnycastEipAddressesRequest $request ListAnycastEipAddressesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnycastEipAddressesResponse ListAnycastEipAddressesResponse
     */
    public function listAnycastEipAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anycastEipAddress)) {
            $query['AnycastEipAddress'] = $request->anycastEipAddress;
        }
        if (!Utils::isUnset($request->anycastId)) {
            $query['AnycastId'] = $request->anycastId;
        }
        if (!Utils::isUnset($request->anycastIds)) {
            $query['AnycastIds'] = $request->anycastIds;
        }
        if (!Utils::isUnset($request->bindInstanceIds)) {
            $query['BindInstanceIds'] = $request->bindInstanceIds;
        }
        if (!Utils::isUnset($request->businessStatus)) {
            $query['BusinessStatus'] = $request->businessStatus;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceLocation)) {
            $query['ServiceLocation'] = $request->serviceLocation;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnycastEipAddresses',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAnycastEipAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询指定接入区域已创建的Anycast EIP实例
     *  *
     * @param ListAnycastEipAddressesRequest $request ListAnycastEipAddressesRequest
     *
     * @return ListAnycastEipAddressesResponse ListAnycastEipAddressesResponse
     */
    public function listAnycastEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnycastEipAddressesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags that are added to resources.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-03-09',
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
     * @summary Queries the tags that are added to resources.
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
     * @summary Modifies the name and description of an Anycast elastic IP address (Anycast EIP).
     *  *
     * @param ModifyAnycastEipAddressAttributeRequest $request ModifyAnycastEipAddressAttributeRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAnycastEipAddressAttributeResponse ModifyAnycastEipAddressAttributeResponse
     */
    public function modifyAnycastEipAddressAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anycastId)) {
            $query['AnycastId'] = $request->anycastId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAnycastEipAddressAttribute',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAnycastEipAddressAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name and description of an Anycast elastic IP address (Anycast EIP).
     *  *
     * @param ModifyAnycastEipAddressAttributeRequest $request ModifyAnycastEipAddressAttributeRequest
     *
     * @return ModifyAnycastEipAddressAttributeResponse ModifyAnycastEipAddressAttributeResponse
     */
    public function modifyAnycastEipAddressAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAnycastEipAddressAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the maximum bandwidth of an Anycast elastic IP address (Anycast EIP).
     *  *
     * @param ModifyAnycastEipAddressSpecRequest $request ModifyAnycastEipAddressSpecRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAnycastEipAddressSpecResponse ModifyAnycastEipAddressSpecResponse
     */
    public function modifyAnycastEipAddressSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anycastId)) {
            $query['AnycastId'] = $request->anycastId;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAnycastEipAddressSpec',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAnycastEipAddressSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the maximum bandwidth of an Anycast elastic IP address (Anycast EIP).
     *  *
     * @param ModifyAnycastEipAddressSpecRequest $request ModifyAnycastEipAddressSpecRequest
     *
     * @return ModifyAnycastEipAddressSpecResponse ModifyAnycastEipAddressSpecResponse
     */
    public function modifyAnycastEipAddressSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAnycastEipAddressSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Releases an Anycast elastic IP address (Anycast EIP).
     *  *
     * @param ReleaseAnycastEipAddressRequest $request ReleaseAnycastEipAddressRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseAnycastEipAddressResponse ReleaseAnycastEipAddressResponse
     */
    public function releaseAnycastEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anycastId)) {
            $query['AnycastId'] = $request->anycastId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseAnycastEipAddress',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases an Anycast elastic IP address (Anycast EIP).
     *  *
     * @param ReleaseAnycastEipAddressRequest $request ReleaseAnycastEipAddressRequest
     *
     * @return ReleaseAnycastEipAddressResponse ReleaseAnycastEipAddressResponse
     */
    public function releaseAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseAnycastEipAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Creates and adds tags to resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-03-09',
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
     * @summary Creates and adds tags to resources.
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
     * @summary Disassociates an Anycast elastic IP address (Anycast EIP) from an endpoint.
     *  *
     * @param UnassociateAnycastEipAddressRequest $request UnassociateAnycastEipAddressRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UnassociateAnycastEipAddressResponse UnassociateAnycastEipAddressResponse
     */
    public function unassociateAnycastEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anycastId)) {
            $query['AnycastId'] = $request->anycastId;
        }
        if (!Utils::isUnset($request->bindInstanceId)) {
            $query['BindInstanceId'] = $request->bindInstanceId;
        }
        if (!Utils::isUnset($request->bindInstanceRegionId)) {
            $query['BindInstanceRegionId'] = $request->bindInstanceRegionId;
        }
        if (!Utils::isUnset($request->bindInstanceType)) {
            $query['BindInstanceType'] = $request->bindInstanceType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnassociateAnycastEipAddress',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociateAnycastEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates an Anycast elastic IP address (Anycast EIP) from an endpoint.
     *  *
     * @param UnassociateAnycastEipAddressRequest $request UnassociateAnycastEipAddressRequest
     *
     * @return UnassociateAnycastEipAddressResponse UnassociateAnycastEipAddressResponse
     */
    public function unassociateAnycastEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateAnycastEipAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from Anycast EIPs.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2020-03-09',
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
     * @summary Removes tags from Anycast EIPs.
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
     * @summary If an Anycast EIP is associated with endpoints in different regions, you can change the access points that are mapped to an endpoint. You can call UpdateAnycastEipAddressAssociations to add or delete endpoints to modify the mappings between endpoints and access points.
     *  *
     * @param UpdateAnycastEipAddressAssociationsRequest $request UpdateAnycastEipAddressAssociationsRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAnycastEipAddressAssociationsResponse UpdateAnycastEipAddressAssociationsResponse
     */
    public function updateAnycastEipAddressAssociationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->anycastId)) {
            $query['AnycastId'] = $request->anycastId;
        }
        if (!Utils::isUnset($request->associationMode)) {
            $query['AssociationMode'] = $request->associationMode;
        }
        if (!Utils::isUnset($request->bindInstanceId)) {
            $query['BindInstanceId'] = $request->bindInstanceId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->popLocationAddList)) {
            $query['PopLocationAddList'] = $request->popLocationAddList;
        }
        if (!Utils::isUnset($request->popLocationDeleteList)) {
            $query['PopLocationDeleteList'] = $request->popLocationDeleteList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAnycastEipAddressAssociations',
            'version'     => '2020-03-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAnycastEipAddressAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary If an Anycast EIP is associated with endpoints in different regions, you can change the access points that are mapped to an endpoint. You can call UpdateAnycastEipAddressAssociations to add or delete endpoints to modify the mappings between endpoints and access points.
     *  *
     * @param UpdateAnycastEipAddressAssociationsRequest $request UpdateAnycastEipAddressAssociationsRequest
     *
     * @return UpdateAnycastEipAddressAssociationsResponse UpdateAnycastEipAddressAssociationsResponse
     */
    public function updateAnycastEipAddressAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAnycastEipAddressAssociationsWithOptions($request, $runtime);
    }
}
