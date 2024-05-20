<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Opt\V20210730;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOpenStatusResponse;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOrderInfoRequest;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOrderInfoResponse;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOrderUsageRequest;
use AlibabaCloud\SDK\Opt\V20210730\Models\GetOrderUsageResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOpenStatusResponse GetOpenStatusResponse
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

        return GetOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetOpenStatusResponse GetOpenStatusResponse
     */
    public function getOpenStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpenStatusWithOptions($runtime);
    }

    /**
     * @param GetOrderInfoRequest $request GetOrderInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrderInfoResponse GetOrderInfoResponse
     */
    public function getOrderInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listReleased)) {
            $query['ListReleased'] = $request->listReleased;
        }
        if (!Utils::isUnset($request->relService)) {
            $query['RelService'] = $request->relService;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetOrderInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOrderInfoRequest $request GetOrderInfoRequest
     *
     * @return GetOrderInfoResponse GetOrderInfoResponse
     */
    public function getOrderInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetOrderUsageRequest $request GetOrderUsageRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrderUsageResponse GetOrderUsageResponse
     */
    public function getOrderUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->licenseKey)) {
            $query['LicenseKey'] = $request->licenseKey;
        }
        if (!Utils::isUnset($request->relService)) {
            $query['RelService'] = $request->relService;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->timeRange)) {
            $query['TimeRange'] = $request->timeRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetOrderUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOrderUsageRequest $request GetOrderUsageRequest
     *
     * @return GetOrderUsageResponse GetOrderUsageResponse
     */
    public function getOrderUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderUsageWithOptions($request, $runtime);
    }
}
