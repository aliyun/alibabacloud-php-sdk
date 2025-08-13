<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthRequest\authResourceList;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthRequest\externalAuthZJSON;

class AddGatewayAuthRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $authResourceConfig;

    /**
     * @var authResourceList[]
     */
    public $authResourceList;

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
     * @var externalAuthZJSON
     */
    public $externalAuthZJSON;

    /**
     * @var string
     */
    public $gatewayUniqueId;

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
     * @var string[]
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
        'acceptLanguage' => 'AcceptLanguage',
        'authResourceConfig' => 'AuthResourceConfig',
        'authResourceList' => 'AuthResourceList',
        'authResourceMode' => 'AuthResourceMode',
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'cookieDomain' => 'CookieDomain',
        'externalAuthZJSON' => 'ExternalAuthZJSON',
        'gatewayUniqueId' => 'GatewayUniqueId',
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
        if (\is_array($this->authResourceList)) {
            Model::validateArray($this->authResourceList);
        }
        if (null !== $this->externalAuthZJSON) {
            $this->externalAuthZJSON->validate();
        }
        if (\is_array($this->scopesList)) {
            Model::validateArray($this->scopesList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->authResourceConfig) {
            $res['AuthResourceConfig'] = $this->authResourceConfig;
        }

        if (null !== $this->authResourceList) {
            if (\is_array($this->authResourceList)) {
                $res['AuthResourceList'] = [];
                $n1 = 0;
                foreach ($this->authResourceList as $item1) {
                    $res['AuthResourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->externalAuthZJSON) {
            $res['ExternalAuthZJSON'] = null !== $this->externalAuthZJSON ? $this->externalAuthZJSON->toArray($noStream) : $this->externalAuthZJSON;
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

        if (null !== $this->scopesList) {
            if (\is_array($this->scopesList)) {
                $res['ScopesList'] = [];
                $n1 = 0;
                foreach ($this->scopesList as $item1) {
                    $res['ScopesList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AuthResourceConfig'])) {
            $model->authResourceConfig = $map['AuthResourceConfig'];
        }

        if (isset($map['AuthResourceList'])) {
            if (!empty($map['AuthResourceList'])) {
                $model->authResourceList = [];
                $n1 = 0;
                foreach ($map['AuthResourceList'] as $item1) {
                    $model->authResourceList[$n1] = authResourceList::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['ExternalAuthZJSON'])) {
            $model->externalAuthZJSON = externalAuthZJSON::fromMap($map['ExternalAuthZJSON']);
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
            if (!empty($map['ScopesList'])) {
                $model->scopesList = [];
                $n1 = 0;
                foreach ($map['ScopesList'] as $item1) {
                    $model->scopesList[$n1] = $item1;
                    ++$n1;
                }
            }
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
