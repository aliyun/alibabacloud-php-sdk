<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\oidcConfig;

use AlibabaCloud\Tea\Model;

class endpointConfig extends Model
{
    /**
     * @description oAuth2 授权端点。
     *
     * @example https://example.com/oauth/authorize
     *
     * @var string
     */
    public $authorizationEndpoint;

    /**
     * @description OIDC issuer信息。
     *
     * @example https://example.com/oauth
     *
     * @var string
     */
    public $issuer;

    /**
     * @description OIDC jwks地址。
     *
     * @example https://example.com/oauth/jwks
     *
     * @var string
     */
    public $jwksUri;

    /**
     * @description oAuth2 Token端点。
     *
     * @example https://example.com/oauth/token
     *
     * @var string
     */
    public $tokenEndpoint;

    /**
     * @description OIDC 用户信息端点。
     *
     * @example https://example.com/oauth/userinfo
     *
     * @var string
     */
    public $userinfoEndpoint;
    protected $_name = [
        'authorizationEndpoint' => 'AuthorizationEndpoint',
        'issuer'                => 'Issuer',
        'jwksUri'               => 'JwksUri',
        'tokenEndpoint'         => 'TokenEndpoint',
        'userinfoEndpoint'      => 'UserinfoEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationEndpoint) {
            $res['AuthorizationEndpoint'] = $this->authorizationEndpoint;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->jwksUri) {
            $res['JwksUri'] = $this->jwksUri;
        }
        if (null !== $this->tokenEndpoint) {
            $res['TokenEndpoint'] = $this->tokenEndpoint;
        }
        if (null !== $this->userinfoEndpoint) {
            $res['UserinfoEndpoint'] = $this->userinfoEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationEndpoint'])) {
            $model->authorizationEndpoint = $map['AuthorizationEndpoint'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['JwksUri'])) {
            $model->jwksUri = $map['JwksUri'];
        }
        if (isset($map['TokenEndpoint'])) {
            $model->tokenEndpoint = $map['TokenEndpoint'];
        }
        if (isset($map['UserinfoEndpoint'])) {
            $model->userinfoEndpoint = $map['UserinfoEndpoint'];
        }

        return $model;
    }
}
