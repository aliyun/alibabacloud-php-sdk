<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\ExpireLoginTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\ExpireLoginTokenResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetAuthCodeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetAuthCodeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetStsTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetStsTokenResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('appstream-center', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 登录token主动失效.
     *
     * @param request - ExpireLoginTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExpireLoginTokenResponse
     *
     * @param ExpireLoginTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExpireLoginTokenResponse
     */
    public function expireLoginTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->officeSiteId) {
            @$body['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExpireLoginToken',
            'version' => '2021-02-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExpireLoginTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 登录token主动失效.
     *
     * @param request - ExpireLoginTokenRequest
     *
     * @returns ExpireLoginTokenResponse
     *
     * @param ExpireLoginTokenRequest $request
     *
     * @return ExpireLoginTokenResponse
     */
    public function expireLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->expireLoginTokenWithOptions($request, $runtime);
    }

    /**
     * 获取授权码
     *
     * @param request - GetAuthCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuthCodeResponse
     *
     * @param GetAuthCodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAuthCodeResponse
     */
    public function getAuthCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoCreateUser) {
            @$body['AutoCreateUser'] = $request->autoCreateUser;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->externalUserId) {
            @$body['ExternalUserId'] = $request->externalUserId;
        }

        if (null !== $request->policy) {
            @$body['Policy'] = $request->policy;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAuthCode',
            'version' => '2021-02-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取授权码
     *
     * @param request - GetAuthCodeRequest
     *
     * @returns GetAuthCodeResponse
     *
     * @param GetAuthCodeRequest $request
     *
     * @return GetAuthCodeResponse
     */
    public function getAuthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthCodeWithOptions($request, $runtime);
    }

    /**
     * 获取stsToken.
     *
     * @param request - GetStsTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStsTokenResponse
     *
     * @param GetStsTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetStsTokenResponse
     */
    public function getStsTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->expiration) {
            @$body['Expiration'] = $request->expiration;
        }

        if (null !== $request->externalId) {
            @$body['ExternalId'] = $request->externalId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetStsToken',
            'version' => '2021-02-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStsTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取stsToken.
     *
     * @param request - GetStsTokenRequest
     *
     * @returns GetStsTokenResponse
     *
     * @param GetStsTokenRequest $request
     *
     * @return GetStsTokenResponse
     */
    public function getStsToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStsTokenWithOptions($request, $runtime);
    }
}
