<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayAuthResponseBody\data\result\externalAuthZ;

class result extends Model
{
    /**
     * @var int
     */
    public $authResourceMode;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var string
     */
    public $cookieDomain;

    /**
     * @var externalAuthZ
     */
    public $externalAuthZ;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isWhite;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $jwks;

    /**
     * @var string
     */
    public $loginUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $redirectUrl;

    /**
     * @var string
     */
    public $scopesList;

    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $sub;

    /**
     * @var string
     */
    public $tokenName;

    /**
     * @var string
     */
    public $tokenNamePrefix;

    /**
     * @var bool
     */
    public $tokenPass;

    /**
     * @var string
     */
    public $tokenPosition;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'authResourceMode' => 'AuthResourceMode',
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'cookieDomain' => 'CookieDomain',
        'externalAuthZ' => 'ExternalAuthZ',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'isWhite' => 'IsWhite',
        'issuer' => 'Issuer',
        'jwks' => 'Jwks',
        'loginUrl' => 'LoginUrl',
        'name' => 'Name',
        'redirectUrl' => 'RedirectUrl',
        'scopesList' => 'ScopesList',
        'status' => 'Status',
        'sub' => 'Sub',
        'tokenName' => 'TokenName',
        'tokenNamePrefix' => 'TokenNamePrefix',
        'tokenPass' => 'TokenPass',
        'tokenPosition' => 'TokenPosition',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->externalAuthZ) {
            $this->externalAuthZ->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
            $res['ExternalAuthZ'] = null !== $this->externalAuthZ ? $this->externalAuthZ->toArray($noStream) : $this->externalAuthZ;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
