<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\RefreshLoginTokenRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\RefreshLoginTokenResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 身份认证查询接口
     *  *
     * @param FindIdpListByLoginIdentifierRequest $request FindIdpListByLoginIdentifierRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return FindIdpListByLoginIdentifierResponse FindIdpListByLoginIdentifierResponse
     */
    public function findIdpListByLoginIdentifierWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientChannel)) {
            $body['ClientChannel'] = $request->clientChannel;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $body['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->loginIdentifier)) {
            $body['LoginIdentifier'] = $request->loginIdentifier;
        }
        if (!Utils::isUnset($request->supportTypes)) {
            $body['SupportTypes'] = $request->supportTypes;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FindIdpListByLoginIdentifier',
            'version'     => '2021-02-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindIdpListByLoginIdentifierResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 身份认证查询接口
     *  *
     * @param FindIdpListByLoginIdentifierRequest $request FindIdpListByLoginIdentifierRequest
     *
     * @return FindIdpListByLoginIdentifierResponse FindIdpListByLoginIdentifierResponse
     */
    public function findIdpListByLoginIdentifier($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findIdpListByLoginIdentifierWithOptions($request, $runtime);
    }

    /**
     * @summary GetLoginToken
     *  *
     * @param GetLoginTokenRequest $request GetLoginTokenRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLoginTokenResponse GetLoginTokenResponse
     */
    public function getLoginTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authenticationCode)) {
            $query['AuthenticationCode'] = $request->authenticationCode;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->currentStage)) {
            $query['CurrentStage'] = $request->currentStage;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->encryptedFingerPrintData)) {
            $query['EncryptedFingerPrintData'] = $request->encryptedFingerPrintData;
        }
        if (!Utils::isUnset($request->encryptedKey)) {
            $query['EncryptedKey'] = $request->encryptedKey;
        }
        if (!Utils::isUnset($request->encryptedPassword)) {
            $query['EncryptedPassword'] = $request->encryptedPassword;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fingerPrintData)) {
            $query['FingerPrintData'] = $request->fingerPrintData;
        }
        if (!Utils::isUnset($request->idpId)) {
            $query['IdpId'] = $request->idpId;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->keepAlive)) {
            $query['KeepAlive'] = $request->keepAlive;
        }
        if (!Utils::isUnset($request->keepAliveToken)) {
            $query['KeepAliveToken'] = $request->keepAliveToken;
        }
        if (!Utils::isUnset($request->loginIdentifier)) {
            $query['LoginIdentifier'] = $request->loginIdentifier;
        }
        if (!Utils::isUnset($request->loginName)) {
            $query['LoginName'] = $request->loginName;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->newPassword)) {
            $query['NewPassword'] = $request->newPassword;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->oldPassword)) {
            $query['OldPassword'] = $request->oldPassword;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->phoneVerifyCode)) {
            $query['PhoneVerifyCode'] = $request->phoneVerifyCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->ssoExtendsCookies)) {
            $query['SsoExtendsCookies'] = $request->ssoExtendsCookies;
        }
        if (!Utils::isUnset($request->ssoSessionToken)) {
            $query['SsoSessionToken'] = $request->ssoSessionToken;
        }
        if (!Utils::isUnset($request->tokenCode)) {
            $query['TokenCode'] = $request->tokenCode;
        }
        if (!Utils::isUnset($request->umidToken)) {
            $query['UmidToken'] = $request->umidToken;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLoginToken',
            'version'     => '2021-02-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLoginTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetLoginToken
     *  *
     * @param GetLoginTokenRequest $request GetLoginTokenRequest
     *
     * @return GetLoginTokenResponse GetLoginTokenResponse
     */
    public function getLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginTokenWithOptions($request, $runtime);
    }

    /**
     * @param RefreshLoginTokenRequest $request RefreshLoginTokenRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshLoginTokenResponse RefreshLoginTokenResponse
     */
    public function refreshLoginTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginIdentifier)) {
            $query['LoginIdentifier'] = $request->loginIdentifier;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->profileRegion)) {
            $query['ProfileRegion'] = $request->profileRegion;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshLoginToken',
            'version'     => '2021-02-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshLoginTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshLoginTokenRequest $request RefreshLoginTokenRequest
     *
     * @return RefreshLoginTokenResponse RefreshLoginTokenResponse
     */
    public function refreshLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshLoginTokenWithOptions($request, $runtime);
    }
}
