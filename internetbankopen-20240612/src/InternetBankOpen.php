<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\InternetBankOpen\V20240612;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\InvokeDataProductRequest;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\InvokeDataProductResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class InternetBankOpen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'InternetBankOpen';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('internetbankopen', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 数据产品统一调用入口.
     *
     * @param request - InvokeDataProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeDataProductResponse
     *
     * @param InvokeDataProductRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return InvokeDataProductResponse
     */
    public function invokeDataProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->productCode) {
            @$query['productCode'] = $request->productCode;
        }

        if (null !== $request->serviceParameters) {
            @$query['serviceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InvokeDataProduct',
            'version' => '2024-06-12',
            'protocol' => 'HTTPS',
            'pathname' => '/pop/api/v1/rpc',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvokeDataProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 数据产品统一调用入口.
     *
     * @param request - InvokeDataProductRequest
     *
     * @returns InvokeDataProductResponse
     *
     * @param InvokeDataProductRequest $request
     *
     * @return InvokeDataProductResponse
     */
    public function invokeDataProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokeDataProductWithOptions($request, $headers, $runtime);
    }
}
