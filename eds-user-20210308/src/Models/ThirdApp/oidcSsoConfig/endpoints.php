<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp\oidcSsoConfig;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $authorizationEndpoint;

    /**
     * @var string
     */
    public $discoveryEndpoint;

    /**
     * @var string
     */
    public $guestAuthorizationEndpoint;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $jwksEndpoint;

    /**
     * @var string
     */
    public $logoutEndpoint;

    /**
     * @var string
     */
    public $revokeEndpoint;

    /**
     * @var string
     */
    public $tokenEndpoint;

    /**
     * @var string
     */
    public $userinfoEndpoint;
    protected $_name = [
        'authorizationEndpoint' => 'AuthorizationEndpoint',
        'discoveryEndpoint' => 'DiscoveryEndpoint',
        'guestAuthorizationEndpoint' => 'GuestAuthorizationEndpoint',
        'issuer' => 'Issuer',
        'jwksEndpoint' => 'JwksEndpoint',
        'logoutEndpoint' => 'LogoutEndpoint',
        'revokeEndpoint' => 'RevokeEndpoint',
        'tokenEndpoint' => 'TokenEndpoint',
        'userinfoEndpoint' => 'UserinfoEndpoint',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationEndpoint) {
            $res['AuthorizationEndpoint'] = $this->authorizationEndpoint;
        }
        if (null !== $this->discoveryEndpoint) {
            $res['DiscoveryEndpoint'] = $this->discoveryEndpoint;
        }
        if (null !== $this->guestAuthorizationEndpoint) {
            $res['GuestAuthorizationEndpoint'] = $this->guestAuthorizationEndpoint;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->jwksEndpoint) {
            $res['JwksEndpoint'] = $this->jwksEndpoint;
        }
        if (null !== $this->logoutEndpoint) {
            $res['LogoutEndpoint'] = $this->logoutEndpoint;
        }
        if (null !== $this->revokeEndpoint) {
            $res['RevokeEndpoint'] = $this->revokeEndpoint;
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
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationEndpoint'])) {
            $model->authorizationEndpoint = $map['AuthorizationEndpoint'];
        }
        if (isset($map['DiscoveryEndpoint'])) {
            $model->discoveryEndpoint = $map['DiscoveryEndpoint'];
        }
        if (isset($map['GuestAuthorizationEndpoint'])) {
            $model->guestAuthorizationEndpoint = $map['GuestAuthorizationEndpoint'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['JwksEndpoint'])) {
            $model->jwksEndpoint = $map['JwksEndpoint'];
        }
        if (isset($map['LogoutEndpoint'])) {
            $model->logoutEndpoint = $map['LogoutEndpoint'];
        }
        if (isset($map['RevokeEndpoint'])) {
            $model->revokeEndpoint = $map['RevokeEndpoint'];
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
