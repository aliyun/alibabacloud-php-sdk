<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateEmbodiedAIPlatformRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateEmbodiedAIPlatformResponse;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateEmbodiedAIPlatformShrinkRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsRequest;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ADBAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('adbai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建具身智能平台.
     *
     * @param tmpReq - CreateEmbodiedAIPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEmbodiedAIPlatformResponse
     *
     * @param CreateEmbodiedAIPlatformRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateEmbodiedAIPlatformResponse
     */
    public function createEmbodiedAIPlatformWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEmbodiedAIPlatformShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rayConfig) {
            $request->rayConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rayConfig, 'RayConfig', 'json');
        }

        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->rayConfigShrink) {
            @$query['RayConfig'] = $request->rayConfigShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->webserverSpecName) {
            @$query['WebserverSpecName'] = $request->webserverSpecName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEmbodiedAIPlatform',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEmbodiedAIPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建具身智能平台.
     *
     * @param request - CreateEmbodiedAIPlatformRequest
     *
     * @returns CreateEmbodiedAIPlatformResponse
     *
     * @param CreateEmbodiedAIPlatformRequest $request
     *
     * @return CreateEmbodiedAIPlatformResponse
     */
    public function createEmbodiedAIPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEmbodiedAIPlatformWithOptions($request, $runtime);
    }

    /**
     * 查询具身智能平台.
     *
     * @param request - DescribeEmbodiedAIPlatformsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEmbodiedAIPlatformsResponse
     *
     * @param DescribeEmbodiedAIPlatformsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEmbodiedAIPlatformsResponse
     */
    public function describeEmbodiedAIPlatformsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->platformName) {
            @$query['PlatformName'] = $request->platformName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEmbodiedAIPlatforms',
            'version' => '2025-08-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEmbodiedAIPlatformsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询具身智能平台.
     *
     * @param request - DescribeEmbodiedAIPlatformsRequest
     *
     * @returns DescribeEmbodiedAIPlatformsResponse
     *
     * @param DescribeEmbodiedAIPlatformsRequest $request
     *
     * @return DescribeEmbodiedAIPlatformsResponse
     */
    public function describeEmbodiedAIPlatforms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmbodiedAIPlatformsWithOptions($request, $runtime);
    }
}
