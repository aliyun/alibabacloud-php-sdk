<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\AuthenticateRequest;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\AuthenticateResponse;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\GetDetailByOrderRequest;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\GetDetailByOrderResponse;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryAuthRequest;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryAuthResponse;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryInEffectQuthOrderRequest;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryInEffectQuthOrderResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AliyunAuth extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aliyunauth', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AuthenticateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthenticateResponse
     *
     * @param AuthenticateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AuthenticateResponse
     */
    public function authenticateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Authenticate',
            'version' => '2018-12-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthenticateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AuthenticateRequest
     *
     * @returns AuthenticateResponse
     *
     * @param AuthenticateRequest $request
     *
     * @return AuthenticateResponse
     */
    public function authenticate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authenticateWithOptions($request, $runtime);
    }

    /**
     * @param request - GetDetailByOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDetailByOrderResponse
     *
     * @param GetDetailByOrderRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDetailByOrderResponse
     */
    public function getDetailByOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptor) {
            @$query['Acceptor'] = $request->acceptor;
        }

        if (null !== $request->bizNo) {
            @$query['BizNo'] = $request->bizNo;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->checkAuthItems) {
            @$query['CheckAuthItems'] = $request->checkAuthItems;
        }

        if (null !== $request->empId) {
            @$query['EmpId'] = $request->empId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->optSource) {
            @$query['OptSource'] = $request->optSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDetailByOrder',
            'version' => '2018-12-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDetailByOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetDetailByOrderRequest
     *
     * @returns GetDetailByOrderResponse
     *
     * @param GetDetailByOrderRequest $request
     *
     * @return GetDetailByOrderResponse
     */
    public function getDetailByOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetailByOrderWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAuthResponse
     *
     * @param QueryAuthRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryAuthResponse
     */
    public function queryAuthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAuth',
            'version' => '2018-12-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAuthRequest
     *
     * @returns QueryAuthResponse
     *
     * @param QueryAuthRequest $request
     *
     * @return QueryAuthResponse
     */
    public function queryAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuthWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryInEffectQuthOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInEffectQuthOrderResponse
     *
     * @param QueryInEffectQuthOrderRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryInEffectQuthOrderResponse
     */
    public function queryInEffectQuthOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryInEffectQuthOrder',
            'version' => '2018-12-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInEffectQuthOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryInEffectQuthOrderRequest
     *
     * @returns QueryInEffectQuthOrderResponse
     *
     * @param QueryInEffectQuthOrderRequest $request
     *
     * @return QueryInEffectQuthOrderResponse
     */
    public function queryInEffectQuthOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInEffectQuthOrderWithOptions($request, $runtime);
    }
}
