<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig;

use AlibabaCloud\Tea\Model;

class protocolEndpointDomain extends Model
{
    /**
     * @description The OAuth2.0 authorization endpoint. This parameter is returned only when the SSO protocol of the application is an OIDC protocol.
     *
     * @example https://l1seshcn.aliyunidaas.com/login/app/app_mltta64q65enci54slingvvsgq/oauth2/authorize
     *
     * @var string
     */
    public $oauth2AuthorizationEndpoint;

    /**
     * @description The OAuth2.0 device authorization endpoint. This parameter is returned only when the SSO protocol of the application is an OIDC protocol.
     *
     * @example https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/device/code
     *
     * @var string
     */
    public $oauth2DeviceAuthorizationEndpoint;

    /**
     * @description The OAuth2.0 token revocation endpoint. This parameter is returned only when the SSO protocol of the application is an OIDC protocol.
     *
     * @example https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/revoke
     *
     * @var string
     */
    public $oauth2RevokeEndpoint;

    /**
     * @description The OAuth2.0 token endpoint. This parameter is returned only when the SSO protocol of the application is an OIDC protocol.
     *
     * @example https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/token
     *
     * @var string
     */
    public $oauth2TokenEndpoint;

    /**
     * @description The OIDC UserInfo endpoint. This parameter is returned only when the SSO protocol of the application is an OIDC protocol.
     *
     * @example https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/userinfo
     *
     * @var string
     */
    public $oauth2UserinfoEndpoint;

    /**
     * @description The information about the OIDC issuer. This parameter is returned only when the SSO protocol of the application is an OIDC protocol.
     *
     * @example https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oidc
     *
     * @var string
     */
    public $oidcIssuer;

    /**
     * @description The JSON Web Key Set (JWKS) URL of the OIDC issuer. This parameter is returned only when the SSO protocol of the application is an OIDC protocol.
     *
     * @example https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oidc/jwks
     *
     * @var string
     */
    public $oidcJwksEndpoint;

    /**
     * @description The OIDC relying party (RP)-initiated logout endpoint. This parameter is returned only when the SSO protocol of the application is an OIDC protocol.
     *
     * @example https://l1seshcn.aliyunidaas.com/login/app/app_mltta64q65enci54slingvvsgq/oauth2/logout
     *
     * @var string
     */
    public $oidcLogoutEndpoint;

    /**
     * @description The metadata URL of the SAML protocol. This parameter is returned only when the SSO protocol of the application is SAML 2.0.
     *
     * @example https://l1seshcn.aliyunidaas.com/api/v2/app_mltuxdwd4lq4eer6tmtlmaxm5e/saml2/meta
     *
     * @var string
     */
    public $samlMetaEndpoint;

    /**
     * @description The request receiving URL of the SAML protocol. This parameter is returned only when the SSO protocol of the application is SAML 2.0.
     *
     * @example https://l1seshcn.aliyunidaas.com/login/app/app_mltuxdwd4lq4eer6tmtlmaxm5e/saml2/sso
     *
     * @var string
     */
    public $samlSsoEndpoint;
    protected $_name = [
        'oauth2AuthorizationEndpoint'       => 'Oauth2AuthorizationEndpoint',
        'oauth2DeviceAuthorizationEndpoint' => 'Oauth2DeviceAuthorizationEndpoint',
        'oauth2RevokeEndpoint'              => 'Oauth2RevokeEndpoint',
        'oauth2TokenEndpoint'               => 'Oauth2TokenEndpoint',
        'oauth2UserinfoEndpoint'            => 'Oauth2UserinfoEndpoint',
        'oidcIssuer'                        => 'OidcIssuer',
        'oidcJwksEndpoint'                  => 'OidcJwksEndpoint',
        'oidcLogoutEndpoint'                => 'OidcLogoutEndpoint',
        'samlMetaEndpoint'                  => 'SamlMetaEndpoint',
        'samlSsoEndpoint'                   => 'SamlSsoEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oauth2AuthorizationEndpoint) {
            $res['Oauth2AuthorizationEndpoint'] = $this->oauth2AuthorizationEndpoint;
        }
        if (null !== $this->oauth2DeviceAuthorizationEndpoint) {
            $res['Oauth2DeviceAuthorizationEndpoint'] = $this->oauth2DeviceAuthorizationEndpoint;
        }
        if (null !== $this->oauth2RevokeEndpoint) {
            $res['Oauth2RevokeEndpoint'] = $this->oauth2RevokeEndpoint;
        }
        if (null !== $this->oauth2TokenEndpoint) {
            $res['Oauth2TokenEndpoint'] = $this->oauth2TokenEndpoint;
        }
        if (null !== $this->oauth2UserinfoEndpoint) {
            $res['Oauth2UserinfoEndpoint'] = $this->oauth2UserinfoEndpoint;
        }
        if (null !== $this->oidcIssuer) {
            $res['OidcIssuer'] = $this->oidcIssuer;
        }
        if (null !== $this->oidcJwksEndpoint) {
            $res['OidcJwksEndpoint'] = $this->oidcJwksEndpoint;
        }
        if (null !== $this->oidcLogoutEndpoint) {
            $res['OidcLogoutEndpoint'] = $this->oidcLogoutEndpoint;
        }
        if (null !== $this->samlMetaEndpoint) {
            $res['SamlMetaEndpoint'] = $this->samlMetaEndpoint;
        }
        if (null !== $this->samlSsoEndpoint) {
            $res['SamlSsoEndpoint'] = $this->samlSsoEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocolEndpointDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Oauth2AuthorizationEndpoint'])) {
            $model->oauth2AuthorizationEndpoint = $map['Oauth2AuthorizationEndpoint'];
        }
        if (isset($map['Oauth2DeviceAuthorizationEndpoint'])) {
            $model->oauth2DeviceAuthorizationEndpoint = $map['Oauth2DeviceAuthorizationEndpoint'];
        }
        if (isset($map['Oauth2RevokeEndpoint'])) {
            $model->oauth2RevokeEndpoint = $map['Oauth2RevokeEndpoint'];
        }
        if (isset($map['Oauth2TokenEndpoint'])) {
            $model->oauth2TokenEndpoint = $map['Oauth2TokenEndpoint'];
        }
        if (isset($map['Oauth2UserinfoEndpoint'])) {
            $model->oauth2UserinfoEndpoint = $map['Oauth2UserinfoEndpoint'];
        }
        if (isset($map['OidcIssuer'])) {
            $model->oidcIssuer = $map['OidcIssuer'];
        }
        if (isset($map['OidcJwksEndpoint'])) {
            $model->oidcJwksEndpoint = $map['OidcJwksEndpoint'];
        }
        if (isset($map['OidcLogoutEndpoint'])) {
            $model->oidcLogoutEndpoint = $map['OidcLogoutEndpoint'];
        }
        if (isset($map['SamlMetaEndpoint'])) {
            $model->samlMetaEndpoint = $map['SamlMetaEndpoint'];
        }
        if (isset($map['SamlSsoEndpoint'])) {
            $model->samlSsoEndpoint = $map['SamlSsoEndpoint'];
        }

        return $model;
    }
}
