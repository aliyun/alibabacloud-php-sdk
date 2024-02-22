<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddGatewayAuthShrinkRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The information about the resource to be authorized.
     *
     * @var string
     */
    public $authResourceListShrink;

    /**
     * @description The application ID registered with the OIDC authentication service.
     *
     * @example 23460e2fdd9bf9ad106****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The application secret registered with the OIDC authentication service.
     *
     * @example 123****
     *
     * @var string
     */
    public $clientSecret;

    /**
     * @description The domain name of the cookie. After the authentication is passed, the cookie is sent to the specified domain name to maintain the logon status. For example, if you set `Cookie-domain` to a.example.com, the cookie is sent to the domain name `a.example.com`. If you set `Cookie-domain` to .example.com, the cookie is sent to all subdomains of `example.com`.
     *
     * @example test.com
     *
     * @var string
     */
    public $cookieDomain;

    /**
     * @description The information about the custom authentication service.
     *
     * @var string
     */
    public $externalAuthZJSONShrink;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-492af9b04bb4474cae9d645be850e3d7
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description Specifies whether to enable the whitelist feature.
     *
     * @example true
     *
     * @var bool
     */
    public $isWhite;

    /**
     * @description The iss value of JWT claims, which indicates the issuer. You must make sure that the value of this parameter is the same as the iss value in the payload of JWT claims.
     *
     * @example testing@secure.istio.io
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The JWT public key. The JSON format is supported.
     *
     * @example {"keys":[{"e":"AQAB","kid":"DHFbpoIUqrY8t2zpA2qXfCmr5VO5ZEr4RzHU_-envvQ","kty":"RSA","n":"xAE7eB6qugXyCAG3yhh7pkDkT65pHymX-P7KfIupjf59vsdo91bSP9C8H07pSAGQO1MV_xFj9VswgsCg4R6otmg5PV2He95lZdHtOcU5DXIg_pbhLdKXbi66GlVeK6ABZOUW3WYtnNHD-91gVuoeJT_DwtGGcp4ignkgXfkiEm4sw-4sfb4qdt5oLbyVpmW6x9cfa7vs2WTfURiCrBoUqgBo_-4WTiULmmHSGZHOjzwa8WtrtOQGsAFjIbno85jp6MnGGGZPYZbDAa_b3y5u-YpW7ypZrvD8BgtKVjgtQgZhLAGezMt0ua3DRrWnKqTZ0BJ_EyxOGuHJrLsn00fnMQ"}]}
     *
     * @var string
     */
    public $jwks;

    /**
     * @description The URL that is used to log on to the IDaaS instance.
     *
     * @example ***
     *
     * @var string
     */
    public $loginUrl;

    /**
     * @description The name.
     *
     * @example jwt
     *
     * @var string
     */
    public $name;

    /**
     * @description The redirect URL.
     *
     * @example https://test-.com/oauth2/callback
     *
     * @var string
     */
    public $redirectUrl;

    /**
     * @description The OIDC scope.
     *
     * @var string
     */
    public $scopesListShrink;

    /**
     * @description The status.
     *
     * @example true
     *
     * @var bool
     */
    public $status;

    /**
     * @description The sub value of JWT claims, which indicates the subject. You must make sure that the value of this parameter is the same as the sub value in the payload of JWT claims. If you do not set this parameter or leave it empty, the default value, which is the value of the Issuer parameter, is used.
     *
     * @example testing@secure.istio.io
     *
     * @var string
     */
    public $sub;

    /**
     * @description The name of the parameter that is required to verify a token. By default, a token is prefixed with Bearer and stored in the authorization header. Example: `Authorization: Bearer token`.
     *
     * @example Authorization
     *
     * @var string
     */
    public $tokenName;

    /**
     * @description The name prefix of the parameter that is required to verify a token. By default, a token is prefixed with Bearer and stored in the authorization header. Example: `Authorization: Bearer token`
     *
     * @example Bearer
     *
     * @var string
     */
    public $tokenNamePrefix;

    /**
     * @description Specifies whether to enable pass-through.
     *
     * @example true
     *
     * @var bool
     */
    public $tokenPass;

    /**
     * @description The position of the parameter that is required to verify a token. By default, a token is prefixed with Bearer and stored in the authorization header. Example: `Authorization: Bearer token`.
     *
     * @example HEADER
     *
     * @var string
     */
    public $tokenPosition;

    /**
     * @description The authentication type. JSON Web Token (JWT) authentication, OpenID Connect (OIDC) authentication, Identity as a Service (IDaaS) authentication, or custom authentication are supported.
     *
     * @example JWT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'          => 'AcceptLanguage',
        'authResourceListShrink'  => 'AuthResourceList',
        'clientId'                => 'ClientId',
        'clientSecret'            => 'ClientSecret',
        'cookieDomain'            => 'CookieDomain',
        'externalAuthZJSONShrink' => 'ExternalAuthZJSON',
        'gatewayUniqueId'         => 'GatewayUniqueId',
        'isWhite'                 => 'IsWhite',
        'issuer'                  => 'Issuer',
        'jwks'                    => 'Jwks',
        'loginUrl'                => 'LoginUrl',
        'name'                    => 'Name',
        'redirectUrl'             => 'RedirectUrl',
        'scopesListShrink'        => 'ScopesList',
        'status'                  => 'Status',
        'sub'                     => 'Sub',
        'tokenName'               => 'TokenName',
        'tokenNamePrefix'         => 'TokenNamePrefix',
        'tokenPass'               => 'TokenPass',
        'tokenPosition'           => 'TokenPosition',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->authResourceListShrink) {
            $res['AuthResourceList'] = $this->authResourceListShrink;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
        }
        if (null !== $this->cookieDomain) {
            $res['CookieDomain'] = $this->cookieDomain;
        }
        if (null !== $this->externalAuthZJSONShrink) {
            $res['ExternalAuthZJSON'] = $this->externalAuthZJSONShrink;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->isWhite) {
            $res['IsWhite'] = $this->isWhite;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->jwks) {
            $res['Jwks'] = $this->jwks;
        }
        if (null !== $this->loginUrl) {
            $res['LoginUrl'] = $this->loginUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->redirectUrl) {
            $res['RedirectUrl'] = $this->redirectUrl;
        }
        if (null !== $this->scopesListShrink) {
            $res['ScopesList'] = $this->scopesListShrink;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sub) {
            $res['Sub'] = $this->sub;
        }
        if (null !== $this->tokenName) {
            $res['TokenName'] = $this->tokenName;
        }
        if (null !== $this->tokenNamePrefix) {
            $res['TokenNamePrefix'] = $this->tokenNamePrefix;
        }
        if (null !== $this->tokenPass) {
            $res['TokenPass'] = $this->tokenPass;
        }
        if (null !== $this->tokenPosition) {
            $res['TokenPosition'] = $this->tokenPosition;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGatewayAuthShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AuthResourceList'])) {
            $model->authResourceListShrink = $map['AuthResourceList'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }
        if (isset($map['CookieDomain'])) {
            $model->cookieDomain = $map['CookieDomain'];
        }
        if (isset($map['ExternalAuthZJSON'])) {
            $model->externalAuthZJSONShrink = $map['ExternalAuthZJSON'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['IsWhite'])) {
            $model->isWhite = $map['IsWhite'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Jwks'])) {
            $model->jwks = $map['Jwks'];
        }
        if (isset($map['LoginUrl'])) {
            $model->loginUrl = $map['LoginUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RedirectUrl'])) {
            $model->redirectUrl = $map['RedirectUrl'];
        }
        if (isset($map['ScopesList'])) {
            $model->scopesListShrink = $map['ScopesList'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Sub'])) {
            $model->sub = $map['Sub'];
        }
        if (isset($map['TokenName'])) {
            $model->tokenName = $map['TokenName'];
        }
        if (isset($map['TokenNamePrefix'])) {
            $model->tokenNamePrefix = $map['TokenNamePrefix'];
        }
        if (isset($map['TokenPass'])) {
            $model->tokenPass = $map['TokenPass'];
        }
        if (isset($map['TokenPosition'])) {
            $model->tokenPosition = $map['TokenPosition'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
