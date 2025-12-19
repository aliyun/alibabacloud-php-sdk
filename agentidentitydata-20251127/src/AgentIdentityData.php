<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\AssumeRoleForWorkloadIdentityRequest;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\AssumeRoleForWorkloadIdentityResponse;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\CompleteResourceTokenAuthRequest;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\CompleteResourceTokenAuthResponse;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\CompleteResourceTokenAuthShrinkRequest;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetResourceAPIKeyRequest;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetResourceAPIKeyResponse;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetResourceOAuth2TokenRequest;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetResourceOAuth2TokenResponse;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetResourceOAuth2TokenShrinkRequest;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetWorkloadAccessTokenForJWTRequest;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetWorkloadAccessTokenForJWTResponse;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetWorkloadAccessTokenForUserIdRequest;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetWorkloadAccessTokenForUserIdResponse;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetWorkloadAccessTokenRequest;
use AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\GetWorkloadAccessTokenResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentIdentityData extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agentidentitydata', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取工作负载访问令牌.
     *
     * @param request - AssumeRoleForWorkloadIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssumeRoleForWorkloadIdentityResponse
     *
     * @param AssumeRoleForWorkloadIdentityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AssumeRoleForWorkloadIdentityResponse
     */
    public function assumeRoleForWorkloadIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->durationSeconds) {
            @$body['DurationSeconds'] = $request->durationSeconds;
        }

        if (null !== $request->policy) {
            @$body['Policy'] = $request->policy;
        }

        if (null !== $request->roleSessionName) {
            @$body['RoleSessionName'] = $request->roleSessionName;
        }

        if (null !== $request->workloadAccessToken) {
            @$body['WorkloadAccessToken'] = $request->workloadAccessToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssumeRoleForWorkloadIdentity',
            'version' => '2025-11-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssumeRoleForWorkloadIdentityResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取工作负载访问令牌.
     *
     * @param request - AssumeRoleForWorkloadIdentityRequest
     *
     * @returns AssumeRoleForWorkloadIdentityResponse
     *
     * @param AssumeRoleForWorkloadIdentityRequest $request
     *
     * @return AssumeRoleForWorkloadIdentityResponse
     */
    public function assumeRoleForWorkloadIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assumeRoleForWorkloadIdentityWithOptions($request, $runtime);
    }

    /**
     * 确认用户授权会话已完成.
     *
     * @param tmpReq - CompleteResourceTokenAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteResourceTokenAuthResponse
     *
     * @param CompleteResourceTokenAuthRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CompleteResourceTokenAuthResponse
     */
    public function completeResourceTokenAuthWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CompleteResourceTokenAuthShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userIdentifier) {
            $request->userIdentifierShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIdentifier, 'UserIdentifier', 'json');
        }

        $body = [];
        if (null !== $request->sessionURI) {
            @$body['SessionURI'] = $request->sessionURI;
        }

        if (null !== $request->userIdentifierShrink) {
            @$body['UserIdentifier'] = $request->userIdentifierShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompleteResourceTokenAuth',
            'version' => '2025-11-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompleteResourceTokenAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 确认用户授权会话已完成.
     *
     * @param request - CompleteResourceTokenAuthRequest
     *
     * @returns CompleteResourceTokenAuthResponse
     *
     * @param CompleteResourceTokenAuthRequest $request
     *
     * @return CompleteResourceTokenAuthResponse
     */
    public function completeResourceTokenAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeResourceTokenAuthWithOptions($request, $runtime);
    }

    /**
     * 获取下游资源的 API 密钥.
     *
     * @param request - GetResourceAPIKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceAPIKeyResponse
     *
     * @param GetResourceAPIKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetResourceAPIKeyResponse
     */
    public function getResourceAPIKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceCredentialProviderName) {
            @$body['ResourceCredentialProviderName'] = $request->resourceCredentialProviderName;
        }

        if (null !== $request->workloadAccessToken) {
            @$body['WorkloadAccessToken'] = $request->workloadAccessToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetResourceAPIKey',
            'version' => '2025-11-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceAPIKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取下游资源的 API 密钥.
     *
     * @param request - GetResourceAPIKeyRequest
     *
     * @returns GetResourceAPIKeyResponse
     *
     * @param GetResourceAPIKeyRequest $request
     *
     * @return GetResourceAPIKeyResponse
     */
    public function getResourceAPIKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceAPIKeyWithOptions($request, $runtime);
    }

    /**
     * 获取下游资源的 OAuth 2.0 访问令牌.
     *
     * @param tmpReq - GetResourceOAuth2TokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceOAuth2TokenResponse
     *
     * @param GetResourceOAuth2TokenRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return GetResourceOAuth2TokenResponse
     */
    public function getResourceOAuth2TokenWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetResourceOAuth2TokenShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customParameters) {
            $request->customParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customParameters, 'CustomParameters', 'json');
        }

        if (null !== $tmpReq->scopes) {
            $request->scopesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scopes, 'Scopes', 'json');
        }

        $body = [];
        if (null !== $request->customParametersShrink) {
            @$body['CustomParameters'] = $request->customParametersShrink;
        }

        if (null !== $request->customState) {
            @$body['CustomState'] = $request->customState;
        }

        if (null !== $request->forceAuthentication) {
            @$body['ForceAuthentication'] = $request->forceAuthentication;
        }

        if (null !== $request->OAuth2Flow) {
            @$body['OAuth2Flow'] = $request->OAuth2Flow;
        }

        if (null !== $request->resourceCredentialProviderName) {
            @$body['ResourceCredentialProviderName'] = $request->resourceCredentialProviderName;
        }

        if (null !== $request->resourceOAuth2ReturnURL) {
            @$body['ResourceOAuth2ReturnURL'] = $request->resourceOAuth2ReturnURL;
        }

        if (null !== $request->scopesShrink) {
            @$body['Scopes'] = $request->scopesShrink;
        }

        if (null !== $request->sessionURI) {
            @$body['SessionURI'] = $request->sessionURI;
        }

        if (null !== $request->workloadAccessToken) {
            @$body['WorkloadAccessToken'] = $request->workloadAccessToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetResourceOAuth2Token',
            'version' => '2025-11-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceOAuth2TokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取下游资源的 OAuth 2.0 访问令牌.
     *
     * @param request - GetResourceOAuth2TokenRequest
     *
     * @returns GetResourceOAuth2TokenResponse
     *
     * @param GetResourceOAuth2TokenRequest $request
     *
     * @return GetResourceOAuth2TokenResponse
     */
    public function getResourceOAuth2Token($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceOAuth2TokenWithOptions($request, $runtime);
    }

    /**
     * 获取工作负载访问令牌.
     *
     * @param request - GetWorkloadAccessTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkloadAccessTokenResponse
     *
     * @param GetWorkloadAccessTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetWorkloadAccessTokenResponse
     */
    public function getWorkloadAccessTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetWorkloadAccessToken',
            'version' => '2025-11-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkloadAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作负载访问令牌.
     *
     * @param request - GetWorkloadAccessTokenRequest
     *
     * @returns GetWorkloadAccessTokenResponse
     *
     * @param GetWorkloadAccessTokenRequest $request
     *
     * @return GetWorkloadAccessTokenResponse
     */
    public function getWorkloadAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkloadAccessTokenWithOptions($request, $runtime);
    }

    /**
     * 获取工作负载访问令牌.
     *
     * @param request - GetWorkloadAccessTokenForJWTRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkloadAccessTokenForJWTResponse
     *
     * @param GetWorkloadAccessTokenForJWTRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetWorkloadAccessTokenForJWTResponse
     */
    public function getWorkloadAccessTokenForJWTWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userToken) {
            @$body['UserToken'] = $request->userToken;
        }

        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetWorkloadAccessTokenForJWT',
            'version' => '2025-11-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkloadAccessTokenForJWTResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作负载访问令牌.
     *
     * @param request - GetWorkloadAccessTokenForJWTRequest
     *
     * @returns GetWorkloadAccessTokenForJWTResponse
     *
     * @param GetWorkloadAccessTokenForJWTRequest $request
     *
     * @return GetWorkloadAccessTokenForJWTResponse
     */
    public function getWorkloadAccessTokenForJWT($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkloadAccessTokenForJWTWithOptions($request, $runtime);
    }

    /**
     * 获取工作负载访问令牌.
     *
     * @param request - GetWorkloadAccessTokenForUserIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkloadAccessTokenForUserIdResponse
     *
     * @param GetWorkloadAccessTokenForUserIdRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetWorkloadAccessTokenForUserIdResponse
     */
    public function getWorkloadAccessTokenForUserIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->workloadIdentityName) {
            @$body['WorkloadIdentityName'] = $request->workloadIdentityName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetWorkloadAccessTokenForUserId',
            'version' => '2025-11-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkloadAccessTokenForUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作负载访问令牌.
     *
     * @param request - GetWorkloadAccessTokenForUserIdRequest
     *
     * @returns GetWorkloadAccessTokenForUserIdResponse
     *
     * @param GetWorkloadAccessTokenForUserIdRequest $request
     *
     * @return GetWorkloadAccessTokenForUserIdResponse
     */
    public function getWorkloadAccessTokenForUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkloadAccessTokenForUserIdWithOptions($request, $runtime);
    }
}
