<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\CreateThirdAppAccessTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\CreateThirdAppAccessTokenResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\CreateThirdAppAccessTokenShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\ExpireLoginTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\ExpireLoginTokenResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetAuthCodeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetAuthCodeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetLatestThirdAppAccessTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetLatestThirdAppAccessTokenResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetLatestThirdAppAccessTokenShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetStsTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetStsTokenResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'appstream-center';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
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
     * Creates a time-limited static access token for a specified user in the current account to access a single cloud desktop.
     *
     * @remarks
     * When you call this operation, you must provide Resource and specify both ResourceType and ResourceId. Only a single cloud desktop is supported. You cannot omit Resource to authorize or query all cloud desktops.
     * AuthorizerId is the WyId of the user and cannot be replaced by a username. BusinessChannel supports Enterprise and Business. If omitted, the default value is Enterprise.
     * Before creation, the user must belong to the current calling account and have access permissions for the target cloud desktop. This operation only creates an access token. It does not create a user or add an authorization relationship between the user and the cloud desktop. Each successful call creates a new time-limited token. To obtain an existing token, call GetLatestThirdAppAccessToken and pass the same AuthorizerId and Resource.
     * The unit of Expiration is seconds. Valid values: 1 to 15552000. If omitted, the default value is 15552000, which equals 180 days. Permanent validity is not supported. Keep the returned AccessToken secure and avoid displaying the full token in logs or public content.
     *
     * @param tmpReq - CreateThirdAppAccessTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateThirdAppAccessTokenResponse
     *
     * @param CreateThirdAppAccessTokenRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateThirdAppAccessTokenResponse
     */
    public function createThirdAppAccessTokenWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateThirdAppAccessTokenShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resource) {
            $request->resourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resource, 'Resource', 'json');
        }

        $body = [];
        if (null !== $request->authorizerId) {
            @$body['AuthorizerId'] = $request->authorizerId;
        }

        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->expiration) {
            @$body['Expiration'] = $request->expiration;
        }

        if (null !== $request->resourceShrink) {
            @$body['Resource'] = $request->resourceShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateThirdAppAccessToken',
            'version' => '2021-02-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateThirdAppAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a time-limited static access token for a specified user in the current account to access a single cloud desktop.
     *
     * @remarks
     * When you call this operation, you must provide Resource and specify both ResourceType and ResourceId. Only a single cloud desktop is supported. You cannot omit Resource to authorize or query all cloud desktops.
     * AuthorizerId is the WyId of the user and cannot be replaced by a username. BusinessChannel supports Enterprise and Business. If omitted, the default value is Enterprise.
     * Before creation, the user must belong to the current calling account and have access permissions for the target cloud desktop. This operation only creates an access token. It does not create a user or add an authorization relationship between the user and the cloud desktop. Each successful call creates a new time-limited token. To obtain an existing token, call GetLatestThirdAppAccessToken and pass the same AuthorizerId and Resource.
     * The unit of Expiration is seconds. Valid values: 1 to 15552000. If omitted, the default value is 15552000, which equals 180 days. Permanent validity is not supported. Keep the returned AccessToken secure and avoid displaying the full token in logs or public content.
     *
     * @param request - CreateThirdAppAccessTokenRequest
     *
     * @returns CreateThirdAppAccessTokenResponse
     *
     * @param CreateThirdAppAccessTokenRequest $request
     *
     * @return CreateThirdAppAccessTokenResponse
     */
    public function createThirdAppAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createThirdAppAccessTokenWithOptions($request, $runtime);
    }

    /**
     * Invalidates a Wuying Workspace logon session before it naturally expires.
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
     * Invalidates a Wuying Workspace logon session before it naturally expires.
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
     * Retrieves an authorization code that contains user identity and permission information, which can be used to invoke cloud applications in integration scenarios.
     *
     * @remarks
     * Retrieves an authorization code that contains user identity and permission information, which can be used to invoke cloud applications in integration scenarios.
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
        $query = [];
        if (null !== $request->tokenType) {
            @$query['TokenType'] = $request->tokenType;
        }

        $body = [];
        if (null !== $request->accountType) {
            @$body['AccountType'] = $request->accountType;
        }

        if (null !== $request->adDomain) {
            @$body['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->adPassword) {
            @$body['AdPassword'] = $request->adPassword;
        }

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
            'query' => Utils::query($query),
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
     * Retrieves an authorization code that contains user identity and permission information, which can be used to invoke cloud applications in integration scenarios.
     *
     * @remarks
     * Retrieves an authorization code that contains user identity and permission information, which can be used to invoke cloud applications in integration scenarios.
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
     * Retrieves the current valid static access token for a specified user and a single cloud desktop under the current account, keeping the original expiration time.
     *
     * @remarks
     * You must provide Resource and specify both ResourceType and ResourceId when calling this operation. Only a single cloud desktop is supported. You cannot omit Resource to authorize or query all cloud desktops.
     * AuthorizerId is the WyId of the user and cannot be replaced by a username. BusinessChannel supports Enterprise and Business. If omitted, the default value is Enterprise.
     * The AuthorizerId and Resource in the query conditions must be consistent with those used when the token was created. This operation only returns the current valid token for the current account, user, and cloud desktop. It does not create a new token, renew the token, or restore or roll back to a historical token. If no valid token is found, the token has expired, or the corresponding cache has been cleared, AccessToken.NotFound is returned. To obtain a new token, call CreateThirdAppAccessToken.
     * Keep the returned AccessToken secure and avoid displaying the full token in logs or public content.
     *
     * @param tmpReq - GetLatestThirdAppAccessTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLatestThirdAppAccessTokenResponse
     *
     * @param GetLatestThirdAppAccessTokenRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return GetLatestThirdAppAccessTokenResponse
     */
    public function getLatestThirdAppAccessTokenWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetLatestThirdAppAccessTokenShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resource) {
            $request->resourceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resource, 'Resource', 'json');
        }

        $body = [];
        if (null !== $request->authorizerId) {
            @$body['AuthorizerId'] = $request->authorizerId;
        }

        if (null !== $request->businessChannel) {
            @$body['BusinessChannel'] = $request->businessChannel;
        }

        if (null !== $request->resourceShrink) {
            @$body['Resource'] = $request->resourceShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLatestThirdAppAccessToken',
            'version' => '2021-02-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLatestThirdAppAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the current valid static access token for a specified user and a single cloud desktop under the current account, keeping the original expiration time.
     *
     * @remarks
     * You must provide Resource and specify both ResourceType and ResourceId when calling this operation. Only a single cloud desktop is supported. You cannot omit Resource to authorize or query all cloud desktops.
     * AuthorizerId is the WyId of the user and cannot be replaced by a username. BusinessChannel supports Enterprise and Business. If omitted, the default value is Enterprise.
     * The AuthorizerId and Resource in the query conditions must be consistent with those used when the token was created. This operation only returns the current valid token for the current account, user, and cloud desktop. It does not create a new token, renew the token, or restore or roll back to a historical token. If no valid token is found, the token has expired, or the corresponding cache has been cleared, AccessToken.NotFound is returned. To obtain a new token, call CreateThirdAppAccessToken.
     * Keep the returned AccessToken secure and avoid displaying the full token in logs or public content.
     *
     * @param request - GetLatestThirdAppAccessTokenRequest
     *
     * @returns GetLatestThirdAppAccessTokenResponse
     *
     * @param GetLatestThirdAppAccessTokenRequest $request
     *
     * @return GetLatestThirdAppAccessTokenResponse
     */
    public function getLatestThirdAppAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLatestThirdAppAccessTokenWithOptions($request, $runtime);
    }

    /**
     * Retrieves a Wuying STS token (temporary identity credential).
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
     * Retrieves a Wuying STS token (temporary identity credential).
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
