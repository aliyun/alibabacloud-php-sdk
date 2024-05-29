<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data\externalAuthZ;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data\resourceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authResourceConfig;

    /**
     * @example 0
     *
     * @var int
     */
    public $authResourceMode;

    /**
     * @example example-app
     *
     * @var string
     */
    public $clientId;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $clientSecret;

    /**
     * @example hello.com
     *
     * @var string
     */
    public $cookieDomain;

    /**
     * @var externalAuthZ
     */
    public $externalAuthZ;

    /**
     * @example 2274
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @example gw-6f0dbd108a0249d2b675b3ef50b*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 2024-02-19T02:41:03.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-02-19T02:41:03.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1100
     *
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isWhite;

    /**
     * @example https://example.com/auth
     *
     * @var string
     */
    public $issuer;

    /**
     * @example {\\n  \\"keys\\":[\\n    {\\n      \\"kty\\": \\"RSA\\",\\n      \\"e\\": \\"AQAB\\",\\n      \\"use\\": \\"sig\\",\\n      \\"kid\\": \\"1rGufmH1YN8rqM9ZOLgo7eEST3AnL89Y-m-XGFioLoA\\",\\n      \\"alg\\": \\"RS256\\",\\n      \\"n\\": \\"rM2GIc0YTMqwNCwXnjKbW5QndkCEZgyLu3uQUnyZF7HvMTekiTvQg_39mg3dV1eaYYkYfZBogyroJBqAQXhk6VVCxlBjFVp2xstJPVWngMOOlcafwN_BKdN-EQ06O_Uu__e7gNKI3DunkNk0cNaFETE7d4meRYyTlgEzYgsrW05_ufR0BKoddL3E5JsCpUxRjH9ICbodBx0U74W6Dcci-R2EA1DBrEcboE6n90uoJs6UJNriAK_71nAsYonihU5aQFFnyPTkJHfRwHK6JlME6rn-b-rpLSpdyc6U1nOFZP2DEpz8U5FrYoLYSZIU-MQGxDhCnGc_rxl2IyP9B2qcCQ\\"\\n    }\\n  ]\\n}\\n
     *
     * @var string
     */
    public $jwks;

    /**
     * @example https://daxxxxcn.aliyunidaas.com/
     *
     * @var string
     */
    public $loginUrl;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example https://yourdomain/path
     *
     * @var string
     */
    public $redirectUrl;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @example ["openid","email"]
     *
     * @var string
     */
    public $scopesList;

    /**
     * @example false
     *
     * @var bool
     */
    public $status;

    /**
     * @example https://example.com/auth
     *
     * @var string
     */
    public $sub;

    /**
     * @example Authorization
     *
     * @var string
     */
    public $tokenName;

    /**
     * @example Bearer
     *
     * @var string
     */
    public $tokenNamePrefix;

    /**
     * @example true
     *
     * @var bool
     */
    public $tokenPass;

    /**
     * @example HEADER
     *
     * @var string
     */
    public $tokenPosition;

    /**
     * @example JWT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'authResourceConfig' => 'AuthResourceConfig',
        'authResourceMode'   => 'AuthResourceMode',
        'clientId'           => 'ClientId',
        'clientSecret'       => 'ClientSecret',
        'cookieDomain'       => 'CookieDomain',
        'externalAuthZ'      => 'ExternalAuthZ',
        'gatewayId'          => 'GatewayId',
        'gatewayUniqueId'    => 'GatewayUniqueId',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'id'                 => 'Id',
        'isWhite'            => 'IsWhite',
        'issuer'             => 'Issuer',
        'jwks'               => 'Jwks',
        'loginUrl'           => 'LoginUrl',
        'name'               => 'Name',
        'redirectUrl'        => 'RedirectUrl',
        'resourceList'       => 'ResourceList',
        'scopesList'         => 'ScopesList',
        'status'             => 'Status',
        'sub'                => 'Sub',
        'tokenName'          => 'TokenName',
        'tokenNamePrefix'    => 'TokenNamePrefix',
        'tokenPass'          => 'TokenPass',
        'tokenPosition'      => 'TokenPosition',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authResourceConfig) {
            $res['AuthResourceConfig'] = $this->authResourceConfig;
        }
        if (null !== $this->authResourceMode) {
            $res['AuthResourceMode'] = $this->authResourceMode;
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
        if (null !== $this->externalAuthZ) {
            $res['ExternalAuthZ'] = null !== $this->externalAuthZ ? $this->externalAuthZ->toMap() : null;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->resourceList) {
            $res['ResourceList'] = [];
            if (null !== $this->resourceList && \is_array($this->resourceList)) {
                $n = 0;
                foreach ($this->resourceList as $item) {
                    $res['ResourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scopesList) {
            $res['ScopesList'] = $this->scopesList;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthResourceConfig'])) {
            $model->authResourceConfig = $map['AuthResourceConfig'];
        }
        if (isset($map['AuthResourceMode'])) {
            $model->authResourceMode = $map['AuthResourceMode'];
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
        if (isset($map['ExternalAuthZ'])) {
            $model->externalAuthZ = externalAuthZ::fromMap($map['ExternalAuthZ']);
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n                   = 0;
                foreach ($map['ResourceList'] as $item) {
                    $model->resourceList[$n++] = null !== $item ? resourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScopesList'])) {
            $model->scopesList = $map['ScopesList'];
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
