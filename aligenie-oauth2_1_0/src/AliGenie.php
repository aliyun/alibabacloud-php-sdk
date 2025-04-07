<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\ExecuteSceneRequest;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\ExecuteSceneResponse;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetSceneListResponse;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetUserBasicInfoResponse;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\GetUserPhoneResponse;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\OAuth2RevocationEndpointHeaders;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\OAuth2RevocationEndpointRequest;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\OAuth2RevocationEndpointResponse;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\OAuth2TokenEndpointHeaders;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\OAuth2TokenEndpointRequest;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\OAuth2TokenEndpointResponse;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\PushDeviceNotificationRequest;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\PushDeviceNotificationResponse;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\PushDeviceNotificationShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\QueryDeviceListResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AliGenie extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aligenie', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 执行场景.
     *
     * @param request - ExecuteSceneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteSceneResponse
     *
     * @param ExecuteSceneRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ExecuteSceneResponse
     */
    public function executeSceneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteScene',
            'version' => 'oauth2_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/oauth2/iot/scene/execute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteSceneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteSceneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 执行场景.
     *
     * @param request - ExecuteSceneRequest
     *
     * @returns ExecuteSceneResponse
     *
     * @param ExecuteSceneRequest $request
     *
     * @return ExecuteSceneResponse
     */
    public function executeScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeSceneWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取场景列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSceneListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSceneListResponse
     */
    public function getSceneListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSceneList',
            'version' => 'oauth2_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/oauth2/iot/scene/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSceneListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取场景列表.
     *
     * @returns GetSceneListResponse
     *
     * @return GetSceneListResponse
     */
    public function getSceneList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSceneListWithOptions($headers, $runtime);
    }

    /**
     * 获取.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserBasicInfoResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserBasicInfoResponse
     */
    public function getUserBasicInfoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUserBasicInfo',
            'version' => 'oauth2_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/oauth2/users/basic',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserBasicInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取.
     *
     * @returns GetUserBasicInfoResponse
     *
     * @return GetUserBasicInfoResponse
     */
    public function getUserBasicInfo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserBasicInfoWithOptions($headers, $runtime);
    }

    /**
     * 获取天猫精灵用户绑定的手机号.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserPhoneResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserPhoneResponse
     */
    public function getUserPhoneWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetUserPhone',
            'version' => 'oauth2_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/oauth2/user/profile/phone',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserPhoneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserPhoneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取天猫精灵用户绑定的手机号.
     *
     * @returns GetUserPhoneResponse
     *
     * @return GetUserPhoneResponse
     */
    public function getUserPhone()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserPhoneWithOptions($headers, $runtime);
    }

    /**
     * OAuth2令牌撤销端点.
     *
     * @param request - OAuth2RevocationEndpointRequest
     * @param headers - OAuth2RevocationEndpointHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OAuth2RevocationEndpointResponse
     *
     * @param OAuth2RevocationEndpointRequest $request
     * @param OAuth2RevocationEndpointHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return OAuth2RevocationEndpointResponse
     */
    public function oAuth2RevocationEndpointWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        if (null !== $request->tokenTypeHint) {
            @$body['TokenTypeHint'] = $request->tokenTypeHint;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OAuth2RevocationEndpoint',
            'version' => 'oauth2_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/oauth2/revoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OAuth2RevocationEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OAuth2RevocationEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * OAuth2令牌撤销端点.
     *
     * @param request - OAuth2RevocationEndpointRequest
     *
     * @returns OAuth2RevocationEndpointResponse
     *
     * @param OAuth2RevocationEndpointRequest $request
     *
     * @return OAuth2RevocationEndpointResponse
     */
    public function oAuth2RevocationEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OAuth2RevocationEndpointHeaders([]);

        return $this->oAuth2RevocationEndpointWithOptions($request, $headers, $runtime);
    }

    /**
     * OAuth2令牌端点.
     *
     * @param request - OAuth2TokenEndpointRequest
     * @param headers - OAuth2TokenEndpointHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OAuth2TokenEndpointResponse
     *
     * @param OAuth2TokenEndpointRequest $request
     * @param OAuth2TokenEndpointHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return OAuth2TokenEndpointResponse
     */
    public function oAuth2TokenEndpointWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->grantType) {
            @$body['GrantType'] = $request->grantType;
        }

        if (null !== $request->redirectUri) {
            @$body['RedirectUri'] = $request->redirectUri;
        }

        if (null !== $request->refreshToken) {
            @$body['RefreshToken'] = $request->refreshToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OAuth2TokenEndpoint',
            'version' => 'oauth2_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/oauth2/token',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OAuth2TokenEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OAuth2TokenEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * OAuth2令牌端点.
     *
     * @param request - OAuth2TokenEndpointRequest
     *
     * @returns OAuth2TokenEndpointResponse
     *
     * @param OAuth2TokenEndpointRequest $request
     *
     * @return OAuth2TokenEndpointResponse
     */
    public function oAuth2TokenEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OAuth2TokenEndpointHeaders([]);

        return $this->oAuth2TokenEndpointWithOptions($request, $headers, $runtime);
    }

    /**
     * 推送设备通知.
     *
     * @param tmpReq - PushDeviceNotificationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushDeviceNotificationResponse
     *
     * @param PushDeviceNotificationRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PushDeviceNotificationResponse
     */
    public function pushDeviceNotificationWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new PushDeviceNotificationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tenantInfo) {
            $request->tenantInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantInfo, 'TenantInfo', 'json');
        }

        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->tenantInfoShrink) {
            @$body['TenantInfo'] = $request->tenantInfoShrink;
        }

        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushDeviceNotification',
            'version' => 'oauth2_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/oauth2/device/notification/push',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PushDeviceNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PushDeviceNotificationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 推送设备通知.
     *
     * @param request - PushDeviceNotificationRequest
     *
     * @returns PushDeviceNotificationResponse
     *
     * @param PushDeviceNotificationRequest $request
     *
     * @return PushDeviceNotificationResponse
     */
    public function pushDeviceNotification($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushDeviceNotificationWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询设备列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDeviceListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QueryDeviceListResponse
     */
    public function queryDeviceListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'QueryDeviceList',
            'version' => 'oauth2_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/oauth2/device/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryDeviceListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryDeviceListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询设备列表.
     *
     * @returns QueryDeviceListResponse
     *
     * @return QueryDeviceListResponse
     */
    public function queryDeviceList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDeviceListWithOptions($headers, $runtime);
    }
}
