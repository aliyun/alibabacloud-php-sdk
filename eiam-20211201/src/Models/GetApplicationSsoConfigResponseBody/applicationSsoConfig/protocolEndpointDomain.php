<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig;

use AlibabaCloud\Dara\Model;

class protocolEndpointDomain extends Model
{
    /**
     * @var string
     */
    public $oauth2AuthorizationEndpoint;
    /**
     * @var string
     */
    public $oauth2DeviceAuthorizationEndpoint;
    /**
     * @var string
     */
    public $oauth2RevokeEndpoint;
    /**
     * @var string
     */
    public $oauth2TokenEndpoint;
    /**
     * @var string
     */
    public $oauth2UserinfoEndpoint;
    /**
     * @var string
     */
    public $oidcIssuer;
    /**
     * @var string
     */
    public $oidcJwksEndpoint;
    /**
     * @var string
     */
    public $oidcLogoutEndpoint;
    /**
     * @var string
     */
    public $samlMetaEndpoint;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
