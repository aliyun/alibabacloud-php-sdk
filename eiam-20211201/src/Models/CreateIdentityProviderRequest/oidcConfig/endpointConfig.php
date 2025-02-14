<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\oidcConfig;

use AlibabaCloud\Dara\Model;

class endpointConfig extends Model
{
    /**
     * @var string
     */
    public $authorizationEndpoint;
    /**
     * @var string
     */
    public $issuer;
    /**
     * @var string
     */
    public $jwksUri;
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
        'issuer'                => 'Issuer',
        'jwksUri'               => 'JwksUri',
        'tokenEndpoint'         => 'TokenEndpoint',
        'userinfoEndpoint'      => 'UserinfoEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
