<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Consolecs\V20160406;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Consolecs\V20160406\Models\GetOpenApiListRequest;
use AlibabaCloud\SDK\Consolecs\V20160406\Models\GetOpenApiListResponse;
use AlibabaCloud\SDK\Consolecs\V20160406\Models\ListConsoleProductResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Consolecs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('consolecs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - GetOpenApiListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOpenApiListResponse
     *
     * @param GetOpenApiListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetOpenApiListResponse
     */
    public function getOpenApiListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOpenApiList',
            'version' => '2016-04-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOpenApiListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetOpenApiListRequest
     *
     * @returns GetOpenApiListResponse
     *
     * @param GetOpenApiListRequest $request
     *
     * @return GetOpenApiListResponse
     */
    public function getOpenApiList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOpenApiListWithOptions($request, $runtime);
    }

    /**
     * @param request - ListConsoleProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsoleProductResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListConsoleProductResponse
     */
    public function listConsoleProductWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListConsoleProduct',
            'version' => '2016-04-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConsoleProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns ListConsoleProductResponse
     *
     * @return ListConsoleProductResponse
     */
    public function listConsoleProduct()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConsoleProductWithOptions($runtime);
    }
}
