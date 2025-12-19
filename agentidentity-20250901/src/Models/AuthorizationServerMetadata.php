<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class AuthorizationServerMetadata extends Model
{
    /**
     * @var AuthorizationRequest
     */
    public $authorizationRequest;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var PKCE
     */
    public $PKCE;

    /**
     * @var TokenReqeust
     */
    public $tokenRequest;
    protected $_name = [
        'authorizationRequest' => 'AuthorizationRequest',
        'issuer' => 'Issuer',
        'PKCE' => 'PKCE',
        'tokenRequest' => 'TokenRequest',
    ];

    public function validate()
    {
        if (null !== $this->authorizationRequest) {
            $this->authorizationRequest->validate();
        }
        if (null !== $this->PKCE) {
            $this->PKCE->validate();
        }
        if (null !== $this->tokenRequest) {
            $this->tokenRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationRequest) {
            $res['AuthorizationRequest'] = null !== $this->authorizationRequest ? $this->authorizationRequest->toArray($noStream) : $this->authorizationRequest;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->PKCE) {
            $res['PKCE'] = null !== $this->PKCE ? $this->PKCE->toArray($noStream) : $this->PKCE;
        }

        if (null !== $this->tokenRequest) {
            $res['TokenRequest'] = null !== $this->tokenRequest ? $this->tokenRequest->toArray($noStream) : $this->tokenRequest;
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
        if (isset($map['AuthorizationRequest'])) {
            $model->authorizationRequest = AuthorizationRequest::fromMap($map['AuthorizationRequest']);
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['PKCE'])) {
            $model->PKCE = PKCE::fromMap($map['PKCE']);
        }

        if (isset($map['TokenRequest'])) {
            $model->tokenRequest = TokenReqeust::fromMap($map['TokenRequest']);
        }

        return $model;
    }
}
