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
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ModifyAnycastEipAddressAttributeRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ModifyAnycastEipAddressAttributeResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ModifyAnycastEipAddressSpecRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ModifyAnycastEipAddressSpecResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ReleaseAnycastEipAddressRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ReleaseAnycastEipAddressResponse;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UnassociateAnycastEipAddressRequest;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\UnassociateAnycastEipAddressResponse;
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
     * @param AllocateAnycastEipAddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AllocateAnycastEipAddressResponse
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
     * @param AssociateAnycastEipAddressRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AssociateAnycastEipAddressResponse
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
     * @param DescribeAnycastEipAddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAnycastEipAddressResponse
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
     * @param DescribeAnycastPopLocationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAnycastPopLocationsResponse
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
     * @param DescribeAnycastServerRegionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAnycastServerRegionsResponse
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
     * @param ListAnycastEipAddressesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAnycastEipAddressesResponse
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
        if (!Utils::isUnset($request->serviceLocation)) {
            $query['ServiceLocation'] = $request->serviceLocation;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
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
     * @param ModifyAnycastEipAddressAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyAnycastEipAddressAttributeResponse
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
     * @param ModifyAnycastEipAddressSpecRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyAnycastEipAddressSpecResponse
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
     * @param ReleaseAnycastEipAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseAnycastEipAddressResponse
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
     * @param UnassociateAnycastEipAddressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnassociateAnycastEipAddressResponse
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
     * @param UpdateAnycastEipAddressAssociationsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateAnycastEipAddressAssociationsResponse
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
