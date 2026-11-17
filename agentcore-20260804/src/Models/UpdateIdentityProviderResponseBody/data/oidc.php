<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderResponseBody\data;

use AlibabaCloud\Dara\Model;

class oidc extends Model
{
    /**
     * @var string
     */
    public $authorizationEndpoint;

    /**
     * @var string
     */
    public $clientAuthMethod;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $discoveryEndpoint;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $jwksUri;

    /**
     * @var bool
     */
    public $pkceRequired;

    /**
     * @var string[]
     */
    public $scopes;

    /**
     * @var string
     */
    public $ssoMappingClaim;

    /**
     * @var string
     */
    public $tokenEndpoint;

    /**
     * @var string
     */
    public $userinfoEndpoint;
    protected $_name = [
        'authorizationEndpoint' => 'authorizationEndpoint',
        'clientAuthMethod' => 'clientAuthMethod',
        'clientId' => 'clientId',
        'discoveryEndpoint' => 'discoveryEndpoint',
        'issuer' => 'issuer',
        'jwksUri' => 'jwksUri',
        'pkceRequired' => 'pkceRequired',
        'scopes' => 'scopes',
        'ssoMappingClaim' => 'ssoMappingClaim',
        'tokenEndpoint' => 'tokenEndpoint',
        'userinfoEndpoint' => 'userinfoEndpoint',
    ];

    public function validate()
    {
        if (\is_array($this->scopes)) {
            Model::validateArray($this->scopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationEndpoint) {
            $res['authorizationEndpoint'] = $this->authorizationEndpoint;
        }

        if (null !== $this->clientAuthMethod) {
            $res['clientAuthMethod'] = $this->clientAuthMethod;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->discoveryEndpoint) {
            $res['discoveryEndpoint'] = $this->discoveryEndpoint;
        }

        if (null !== $this->issuer) {
            $res['issuer'] = $this->issuer;
        }

        if (null !== $this->jwksUri) {
            $res['jwksUri'] = $this->jwksUri;
        }

        if (null !== $this->pkceRequired) {
            $res['pkceRequired'] = $this->pkceRequired;
        }

        if (null !== $this->scopes) {
            if (\is_array($this->scopes)) {
                $res['scopes'] = [];
                $n1 = 0;
                foreach ($this->scopes as $item1) {
                    $res['scopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ssoMappingClaim) {
            $res['ssoMappingClaim'] = $this->ssoMappingClaim;
        }

        if (null !== $this->tokenEndpoint) {
            $res['tokenEndpoint'] = $this->tokenEndpoint;
        }

        if (null !== $this->userinfoEndpoint) {
            $res['userinfoEndpoint'] = $this->userinfoEndpoint;
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

        if (isset($map['clientAuthMethod'])) {
            $model->clientAuthMethod = $map['clientAuthMethod'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['discoveryEndpoint'])) {
            $model->discoveryEndpoint = $map['discoveryEndpoint'];
        }

        if (isset($map['issuer'])) {
            $model->issuer = $map['issuer'];
        }

        if (isset($map['jwksUri'])) {
            $model->jwksUri = $map['jwksUri'];
        }

        if (isset($map['pkceRequired'])) {
            $model->pkceRequired = $map['pkceRequired'];
        }

        if (isset($map['scopes'])) {
            if (!empty($map['scopes'])) {
                $model->scopes = [];
                $n1 = 0;
                foreach ($map['scopes'] as $item1) {
                    $model->scopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ssoMappingClaim'])) {
            $model->ssoMappingClaim = $map['ssoMappingClaim'];
        }

        if (isset($map['tokenEndpoint'])) {
            $model->tokenEndpoint = $map['tokenEndpoint'];
        }

        if (isset($map['userinfoEndpoint'])) {
            $model->userinfoEndpoint = $map['userinfoEndpoint'];
        }

        return $model;
    }
}
