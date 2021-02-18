<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Geoip\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceDataInfosRequest;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceDataInfosResponse;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceDataUrlRequest;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceDataUrlResponse;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceRequest;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceResponse;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstancesRequest;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstancesResponse;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceStatisticsRequest;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceStatisticsResponse;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeIpv4LocationRequest;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeIpv4LocationResponse;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeIpv6LocationRequest;
use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeIpv6LocationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Geoip extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('geoip', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeGeoipInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeGeoipInstanceResponse
     */
    public function describeGeoipInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGeoipInstanceResponse::fromMap($this->doRPCRequest('DescribeGeoipInstance', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGeoipInstanceRequest $request
     *
     * @return DescribeGeoipInstanceResponse
     */
    public function describeGeoipInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGeoipInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGeoipInstanceDataInfosRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGeoipInstanceDataInfosResponse
     */
    public function describeGeoipInstanceDataInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGeoipInstanceDataInfosResponse::fromMap($this->doRPCRequest('DescribeGeoipInstanceDataInfos', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGeoipInstanceDataInfosRequest $request
     *
     * @return DescribeGeoipInstanceDataInfosResponse
     */
    public function describeGeoipInstanceDataInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGeoipInstanceDataInfosWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGeoipInstanceDataUrlRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeGeoipInstanceDataUrlResponse
     */
    public function describeGeoipInstanceDataUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGeoipInstanceDataUrlResponse::fromMap($this->doRPCRequest('DescribeGeoipInstanceDataUrl', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGeoipInstanceDataUrlRequest $request
     *
     * @return DescribeGeoipInstanceDataUrlResponse
     */
    public function describeGeoipInstanceDataUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGeoipInstanceDataUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGeoipInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGeoipInstancesResponse
     */
    public function describeGeoipInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGeoipInstancesResponse::fromMap($this->doRPCRequest('DescribeGeoipInstances', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGeoipInstancesRequest $request
     *
     * @return DescribeGeoipInstancesResponse
     */
    public function describeGeoipInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGeoipInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGeoipInstanceStatisticsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeGeoipInstanceStatisticsResponse
     */
    public function describeGeoipInstanceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGeoipInstanceStatisticsResponse::fromMap($this->doRPCRequest('DescribeGeoipInstanceStatistics', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGeoipInstanceStatisticsRequest $request
     *
     * @return DescribeGeoipInstanceStatisticsResponse
     */
    public function describeGeoipInstanceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGeoipInstanceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv4LocationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeIpv4LocationResponse
     */
    public function describeIpv4LocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpv4LocationResponse::fromMap($this->doRPCRequest('DescribeIpv4Location', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIpv4LocationRequest $request
     *
     * @return DescribeIpv4LocationResponse
     */
    public function describeIpv4Location($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv4LocationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpv6LocationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeIpv6LocationResponse
     */
    public function describeIpv6LocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpv6LocationResponse::fromMap($this->doRPCRequest('DescribeIpv6Location', '2020-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIpv6LocationRequest $request
     *
     * @return DescribeIpv6LocationResponse
     */
    public function describeIpv6Location($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpv6LocationWithOptions($request, $runtime);
    }
}
