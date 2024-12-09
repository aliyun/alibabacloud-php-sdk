<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 执行场景
     *  *
     * @param ExecuteSceneRequest $request ExecuteSceneRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteSceneResponse ExecuteSceneResponse
     */
    public function executeSceneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteScene',
            'version'     => 'oauth2_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/oauth2/iot/scene/execute',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 执行场景
     *  *
     * @param ExecuteSceneRequest $request ExecuteSceneRequest
     *
     * @return ExecuteSceneResponse ExecuteSceneResponse
     */
    public function executeScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeSceneWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取场景列表
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSceneListResponse GetSceneListResponse
     */
    public function getSceneListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSceneList',
            'version'     => 'oauth2_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/oauth2/iot/scene/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSceneListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取场景列表
     *  *
     * @return GetSceneListResponse GetSceneListResponse
     */
    public function getSceneList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSceneListWithOptions($headers, $runtime);
    }

    /**
     * @summary 获取
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserBasicInfoResponse GetUserBasicInfoResponse
     */
    public function getUserBasicInfoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetUserBasicInfo',
            'version'     => 'oauth2_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/oauth2/users/basic',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取
     *  *
     * @return GetUserBasicInfoResponse GetUserBasicInfoResponse
     */
    public function getUserBasicInfo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserBasicInfoWithOptions($headers, $runtime);
    }

    /**
     * @summary 获取天猫精灵用户绑定的手机号
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserPhoneResponse GetUserPhoneResponse
     */
    public function getUserPhoneWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetUserPhone',
            'version'     => 'oauth2_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/oauth2/user/profile/phone',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserPhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取天猫精灵用户绑定的手机号
     *  *
     * @return GetUserPhoneResponse GetUserPhoneResponse
     */
    public function getUserPhone()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserPhoneWithOptions($headers, $runtime);
    }

    /**
     * @summary OAuth2令牌撤销端点
     *  *
     * @param OAuth2RevocationEndpointRequest $request OAuth2RevocationEndpointRequest
     * @param OAuth2RevocationEndpointHeaders $headers OAuth2RevocationEndpointHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return OAuth2RevocationEndpointResponse OAuth2RevocationEndpointResponse
     */
    public function oAuth2RevocationEndpointWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->tokenTypeHint)) {
            $body['TokenTypeHint'] = $request->tokenTypeHint;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OAuth2RevocationEndpoint',
            'version'     => 'oauth2_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/oauth2/revoke',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OAuth2RevocationEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary OAuth2令牌撤销端点
     *  *
     * @param OAuth2RevocationEndpointRequest $request OAuth2RevocationEndpointRequest
     *
     * @return OAuth2RevocationEndpointResponse OAuth2RevocationEndpointResponse
     */
    public function oAuth2RevocationEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OAuth2RevocationEndpointHeaders([]);

        return $this->oAuth2RevocationEndpointWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary OAuth2令牌端点
     *  *
     * @param OAuth2TokenEndpointRequest $request OAuth2TokenEndpointRequest
     * @param OAuth2TokenEndpointHeaders $headers OAuth2TokenEndpointHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return OAuth2TokenEndpointResponse OAuth2TokenEndpointResponse
     */
    public function oAuth2TokenEndpointWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->grantType)) {
            $body['GrantType'] = $request->grantType;
        }
        if (!Utils::isUnset($request->redirectUri)) {
            $body['RedirectUri'] = $request->redirectUri;
        }
        if (!Utils::isUnset($request->refreshToken)) {
            $body['RefreshToken'] = $request->refreshToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OAuth2TokenEndpoint',
            'version'     => 'oauth2_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/oauth2/token',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OAuth2TokenEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary OAuth2令牌端点
     *  *
     * @param OAuth2TokenEndpointRequest $request OAuth2TokenEndpointRequest
     *
     * @return OAuth2TokenEndpointResponse OAuth2TokenEndpointResponse
     */
    public function oAuth2TokenEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OAuth2TokenEndpointHeaders([]);

        return $this->oAuth2TokenEndpointWithOptions($request, $headers, $runtime);
    }
}
