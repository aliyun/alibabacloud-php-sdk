<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Location\V20150612\Models\DescribeEndpointRequest;
use AlibabaCloud\SDK\Location\V20150612\Models\DescribeEndpointResponse;
use AlibabaCloud\SDK\Location\V20150612\Models\DescribeEndpointsRequest;
use AlibabaCloud\SDK\Location\V20150612\Models\DescribeEndpointsResponse;
use AlibabaCloud\SDK\Location\V20150612\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Location\V20150612\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Location\V20150612\Models\DescribeServicesRequest;
use AlibabaCloud\SDK\Location\V20150612\Models\DescribeServicesResponse;
use AlibabaCloud\SDK\Location\V20150612\Models\ListEndpointsByIpRequest;
use AlibabaCloud\SDK\Location\V20150612\Models\ListEndpointsByIpResponse;
use AlibabaCloud\SDK\Location\V20150612\Models\ListEndpointsRequest;
use AlibabaCloud\SDK\Location\V20150612\Models\ListEndpointsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Location extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('location', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeEndpointRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeEndpointResponse
     */
    public function describeEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEndpointResponse::fromMap($this->doRPCRequest('DescribeEndpoint', '2015-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEndpointRequest $request
     *
     * @return DescribeEndpointResponse
     */
    public function describeEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEndpointsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeEndpointsResponse
     */
    public function describeEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEndpointsResponse::fromMap($this->doRPCRequest('DescribeEndpoints', '2015-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEndpointsRequest $request
     *
     * @return DescribeEndpointsResponse
     */
    public function describeEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2015-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeServicesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeServicesResponse
     */
    public function describeServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeServicesResponse::fromMap($this->doRPCRequest('DescribeServices', '2015-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeServicesRequest $request
     *
     * @return DescribeServicesResponse
     */
    public function describeServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServicesWithOptions($request, $runtime);
    }

    /**
     * @param ListEndpointsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListEndpointsResponse
     */
    public function listEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEndpointsResponse::fromMap($this->doRPCRequest('ListEndpoints', '2015-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEndpointsRequest $request
     *
     * @return ListEndpointsResponse
     */
    public function listEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEndpointsWithOptions($request, $runtime);
    }

    /**
     * @param ListEndpointsByIpRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListEndpointsByIpResponse
     */
    public function listEndpointsByIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEndpointsByIpResponse::fromMap($this->doRPCRequest('ListEndpointsByIp', '2015-06-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEndpointsByIpRequest $request
     *
     * @return ListEndpointsByIpResponse
     */
    public function listEndpointsByIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEndpointsByIpWithOptions($request, $runtime);
    }
}
