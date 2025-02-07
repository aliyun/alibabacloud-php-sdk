<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Opt\V20210730;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOpenStatusResponse;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOrderInfoRequest;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOrderInfoResponse;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOrderUsageRequest;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOrderUsageResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Opt extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('opt', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - GetOpenStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetOpenStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetOpenStatusResponse
     */
    public function getOpenStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetOpenStatus',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOpenStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @returns GetOpenStatusResponse
     *
     * @return GetOpenStatusResponse
     */
    public function getOpenStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpenStatusWithOptions($runtime);
    }

    /**
     * 获取在线license列表.
     *
     * @param request - GetOrderInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetOrderInfoResponse
     *
     * @param GetOrderInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOrderInfoResponse
     */
    public function getOrderInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listReleased) {
            @$query['ListReleased'] = $request->listReleased;
        }

        if (null !== $request->relService) {
            @$query['RelService'] = $request->relService;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOrderInfo',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOrderInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOrderInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取在线license列表.
     *
     * @param request - GetOrderInfoRequest
     * @returns GetOrderInfoResponse
     *
     * @param GetOrderInfoRequest $request
     *
     * @return GetOrderInfoResponse
     */
    public function getOrderInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetOrderUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetOrderUsageResponse
     *
     * @param GetOrderUsageRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetOrderUsageResponse
     */
    public function getOrderUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->licenseKey) {
            @$query['LicenseKey'] = $request->licenseKey;
        }

        if (null !== $request->relService) {
            @$query['RelService'] = $request->relService;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOrderUsage',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOrderUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOrderUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetOrderUsageRequest
     * @returns GetOrderUsageResponse
     *
     * @param GetOrderUsageRequest $request
     *
     * @return GetOrderUsageResponse
     */
    public function getOrderUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderUsageWithOptions($request, $runtime);
    }
}
