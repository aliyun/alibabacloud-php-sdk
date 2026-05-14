<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketOidcConfig;

use AlibabaCloud\Dara\Model;

class authCodeConfig extends Model
{
    /**
     * @var string
     */
    public $authorizationEndpoint;

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
    public $issuer;

    /**
     * @var string
     */
    public $jwkSetUri;

    /**
     * @var string
     */
    public $redirectUri;

    /**
     * @var string
     */
    public $scopes;

    /**
     * @var string
     */
    public $tokenEndpoint;

    /**
     * @var string
     */
    public $userInfoEndpoint;
    protected $_name = [
        'authorizationEndpoint' => 'authorizationEndpoint',
        'clientId' => 'clientId',
        'clientSecret' => 'clientSecret',
        'issuer' => 'issuer',
        'jwkSetUri' => 'jwkSetUri',
        'redirectUri' => 'redirectUri',
        'scopes' => 'scopes',
        'tokenEndpoint' => 'tokenEndpoint',
        'userInfoEndpoint' => 'userInfoEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationEndpoint) {
            $res['authorizationEndpoint'] = $this->authorizationEndpoint;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['clientSecret'] = $this->clientSecret;
        }

        if (null !== $this->issuer) {
            $res['issuer'] = $this->issuer;
        }

        if (null !== $this->jwkSetUri) {
            $res['jwkSetUri'] = $this->jwkSetUri;
        }

        if (null !== $this->redirectUri) {
            $res['redirectUri'] = $this->redirectUri;
        }

        if (null !== $this->scopes) {
            $res['scopes'] = $this->scopes;
        }

        if (null !== $this->tokenEndpoint) {
            $res['tokenEndpoint'] = $this->tokenEndpoint;
        }

        if (null !== $this->userInfoEndpoint) {
            $res['userInfoEndpoint'] = $this->userInfoEndpoint;
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
        if (isset($map['authorizationEndpoint'])) {
            $model->authorizationEndpoint = $map['authorizationEndpoint'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['clientSecret'])) {
            $model->clientSecret = $map['clientSecret'];
        }

        if (isset($map['issuer'])) {
            $model->issuer = $map['issuer'];
        }

        if (isset($map['jwkSetUri'])) {
            $model->jwkSetUri = $map['jwkSetUri'];
        }

        if (isset($map['redirectUri'])) {
            $model->redirectUri = $map['redirectUri'];
        }

        if (isset($map['scopes'])) {
            $model->scopes = $map['scopes'];
        }

        if (isset($map['tokenEndpoint'])) {
            $model->tokenEndpoint = $map['tokenEndpoint'];
        }

        if (isset($map['userInfoEndpoint'])) {
            $model->userInfoEndpoint = $map['userInfoEndpoint'];
        }

        return $model;
    }
}
