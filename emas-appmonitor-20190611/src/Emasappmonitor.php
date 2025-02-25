<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorRequest;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Emasappmonitor extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('emas-appmonitor', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取错误事件详情.
     *
     * @param request - GetErrorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetErrorResponse
     *
     * @param GetErrorRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetErrorResponse
     */
    public function getErrorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appKey) {
            @$body['AppKey'] = $request->appKey;
        }

        if (null !== $request->bizModule) {
            @$body['BizModule'] = $request->bizModule;
        }

        if (null !== $request->clientTime) {
            @$body['ClientTime'] = $request->clientTime;
        }

        if (null !== $request->did) {
            @$body['Did'] = $request->did;
        }

        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        if (null !== $request->os) {
            @$body['Os'] = $request->os;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetError',
            'version'     => '2019-06-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetErrorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetErrorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取错误事件详情.
     *
     * @param request - GetErrorRequest
     * @returns GetErrorResponse
     *
     * @param GetErrorRequest $request
     *
     * @return GetErrorResponse
     */
    public function getError($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErrorWithOptions($request, $runtime);
    }
}
