<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\ClientUserLogoutRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\ClientUserLogoutResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetStsTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetStsTokenResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\RefreshLoginTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\RefreshLoginTokenResponse;
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
     * 终端用户登出.
     *
     * @param request - ClientUserLogoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClientUserLogoutResponse
     *
     * @param ClientUserLogoutRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ClientUserLogoutResponse
     */
    public function clientUserLogoutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->profileRegion) {
            @$query['ProfileRegion'] = $request->profileRegion;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClientUserLogout',
            'version' => '2021-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClientUserLogoutResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 终端用户登出.
     *
     * @param request - ClientUserLogoutRequest
     *
     * @returns ClientUserLogoutResponse
     *
     * @param ClientUserLogoutRequest $request
     *
     * @return ClientUserLogoutResponse
     */
    public function clientUserLogout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clientUserLogoutWithOptions($request, $runtime);
    }

    /**
     * 身份认证查询接口.
     *
     * @param tmpReq - FindIdpListByLoginIdentifierRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindIdpListByLoginIdentifierResponse
     *
     * @param FindIdpListByLoginIdentifierRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return FindIdpListByLoginIdentifierResponse
     */
    public function findIdpListByLoginIdentifierWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new FindIdpListByLoginIdentifierShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->availableFeatures) {
            $request->availableFeaturesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->availableFeatures, 'AvailableFeatures', 'json');
        }

        $query = [];
        if (null !== $request->availableFeaturesShrink) {
            @$query['AvailableFeatures'] = $request->availableFeaturesShrink;
        }

        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        $body = [];
        if (null !== $request->clientChannel) {
            @$body['ClientChannel'] = $request->clientChannel;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->loginIdentifier) {
            @$body['LoginIdentifier'] = $request->loginIdentifier;
        }

        if (null !== $request->supportTypes) {
            @$body['SupportTypes'] = $request->supportTypes;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FindIdpListByLoginIdentifier',
            'version' => '2021-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindIdpListByLoginIdentifierResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 身份认证查询接口.
     *
     * @param request - FindIdpListByLoginIdentifierRequest
     *
     * @returns FindIdpListByLoginIdentifierResponse
     *
     * @param FindIdpListByLoginIdentifierRequest $request
     *
     * @return FindIdpListByLoginIdentifierResponse
     */
    public function findIdpListByLoginIdentifier($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findIdpListByLoginIdentifierWithOptions($request, $runtime);
    }

    /**
     * GetLoginToken.
     *
     * @param tmpReq - GetLoginTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoginTokenResponse
     *
     * @param GetLoginTokenRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginTokenWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetLoginTokenShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->availableFeatures) {
            $request->availableFeaturesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->availableFeatures, 'AvailableFeatures', 'json');
        }

        $query = [];
        if (null !== $request->areaSite) {
            @$query['AreaSite'] = $request->areaSite;
        }

        if (null !== $request->authenticationCode) {
            @$query['AuthenticationCode'] = $request->authenticationCode;
        }

        if (null !== $request->availableFeaturesShrink) {
            @$query['AvailableFeatures'] = $request->availableFeaturesShrink;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientName) {
            @$query['ClientName'] = $request->clientName;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->currentStage) {
            @$query['CurrentStage'] = $request->currentStage;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->encryptedFingerPrintData) {
            @$query['EncryptedFingerPrintData'] = $request->encryptedFingerPrintData;
        }

        if (null !== $request->encryptedKey) {
            @$query['EncryptedKey'] = $request->encryptedKey;
        }

        if (null !== $request->encryptedPassword) {
            @$query['EncryptedPassword'] = $request->encryptedPassword;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fingerPrintData) {
            @$query['FingerPrintData'] = $request->fingerPrintData;
        }

        if (null !== $request->idpId) {
            @$query['IdpId'] = $request->idpId;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->keepAlive) {
            @$query['KeepAlive'] = $request->keepAlive;
        }

        if (null !== $request->keepAliveToken) {
            @$query['KeepAliveToken'] = $request->keepAliveToken;
        }

        if (null !== $request->loginIdentifier) {
            @$query['LoginIdentifier'] = $request->loginIdentifier;
        }

        if (null !== $request->loginName) {
            @$query['LoginName'] = $request->loginName;
        }

        if (null !== $request->mfaType) {
            @$query['MfaType'] = $request->mfaType;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->newPassword) {
            @$query['NewPassword'] = $request->newPassword;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->oldPassword) {
            @$query['OldPassword'] = $request->oldPassword;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->phoneVerifyCode) {
            @$query['PhoneVerifyCode'] = $request->phoneVerifyCode;
        }

        if (null !== $request->profileRegion) {
            @$query['ProfileRegion'] = $request->profileRegion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->ssoExtendsCookies) {
            @$query['SsoExtendsCookies'] = $request->ssoExtendsCookies;
        }

        if (null !== $request->ssoSessionToken) {
            @$query['SsoSessionToken'] = $request->ssoSessionToken;
        }

        if (null !== $request->tokenCode) {
            @$query['TokenCode'] = $request->tokenCode;
        }

        if (null !== $request->umidToken) {
            @$query['UmidToken'] = $request->umidToken;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLoginToken',
            'version' => '2021-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLoginTokenResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * GetLoginToken.
     *
     * @param request - GetLoginTokenRequest
     *
     * @returns GetLoginTokenResponse
     *
     * @param GetLoginTokenRequest $request
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginTokenWithOptions($request, $runtime);
    }

    /**
     * 获取无影StsToken.
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
        if (null !== $request->authCode) {
            @$body['AuthCode'] = $request->authCode;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetStsToken',
            'version' => '2021-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStsTokenResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取无影StsToken.
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

    /**
     * @param request - RefreshLoginTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshLoginTokenResponse
     *
     * @param RefreshLoginTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RefreshLoginTokenResponse
     */
    public function refreshLoginTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginIdentifier) {
            @$query['LoginIdentifier'] = $request->loginIdentifier;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->profileRegion) {
            @$query['ProfileRegion'] = $request->profileRegion;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshLoginToken',
            'version' => '2021-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshLoginTokenResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * @param request - RefreshLoginTokenRequest
     *
     * @returns RefreshLoginTokenResponse
     *
     * @param RefreshLoginTokenRequest $request
     *
     * @return RefreshLoginTokenResponse
     */
    public function refreshLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshLoginTokenWithOptions($request, $runtime);
    }
}
