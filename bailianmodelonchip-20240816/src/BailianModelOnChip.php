<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\DeviceRegisterRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\DeviceRegisterResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetTokenRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetTokenResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BailianModelOnChip extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailianmodelonchip', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 设备注册.
     *
     * @param request - DeviceRegisterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeviceRegisterResponse
     *
     * @param DeviceRegisterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeviceRegisterResponse
     */
    public function deviceRegisterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->nonce) {
            @$body['nonce'] = $request->nonce;
        }

        if (null !== $request->requestTime) {
            @$body['requestTime'] = $request->requestTime;
        }

        if (null !== $request->signature) {
            @$body['signature'] = $request->signature;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeviceRegister',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/register',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeviceRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备注册.
     *
     * @param request - DeviceRegisterRequest
     *
     * @returns DeviceRegisterResponse
     *
     * @param DeviceRegisterRequest $request
     *
     * @return DeviceRegisterResponse
     */
    public function deviceRegister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deviceRegisterWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取网关校验Token.
     *
     * @param request - GetTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->nonce) {
            @$body['nonce'] = $request->nonce;
        }

        if (null !== $request->requestTime) {
            @$body['requestTime'] = $request->requestTime;
        }

        if (null !== $request->signature) {
            @$body['signature'] = $request->signature;
        }

        if (null !== $request->tokenKey) {
            @$body['tokenKey'] = $request->tokenKey;
        }

        if (null !== $request->tokenType) {
            @$body['tokenType'] = $request->tokenType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/auth/v1/token/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取网关校验Token.
     *
     * @param request - GetTokenRequest
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }
}
