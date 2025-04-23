<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp\oidcSsoConfig\endpoints;

class oidcSsoConfig extends Model
{
    /**
     * @var int
     */
    public $accessTokenEffectiveTime;

    /**
     * @var int
     */
    public $codeEffectiveTime;

    /**
     * @var bool
     */
    public $enableAuthLogin;

    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var string[]
     */
    public $grantScopes;

    /**
     * @var string[]
     */
    public $grantTypes;

    /**
     * @var string
     */
    public $idTokenAlgorithmType;

    /**
     * @var int
     */
    public $idTokenEffectiveTime;

    /**
     * @var string[]
     */
    public $redirectUris;

    /**
     * @var int
     */
    public $refreshTokenEffective;
    protected $_name = [
        'accessTokenEffectiveTime' => 'AccessTokenEffectiveTime',
        'codeEffectiveTime' => 'CodeEffectiveTime',
        'enableAuthLogin' => 'EnableAuthLogin',
        'endpoints' => 'Endpoints',
        'grantScopes' => 'GrantScopes',
        'grantTypes' => 'GrantTypes',
        'idTokenAlgorithmType' => 'IdTokenAlgorithmType',
        'idTokenEffectiveTime' => 'IdTokenEffectiveTime',
        'redirectUris' => 'RedirectUris',
        'refreshTokenEffective' => 'RefreshTokenEffective',
    ];

    public function validate()
    {
        if (null !== $this->endpoints) {
            $this->endpoints->validate();
        }
        if (\is_array($this->grantScopes)) {
            Model::validateArray($this->grantScopes);
        }
        if (\is_array($this->grantTypes)) {
            Model::validateArray($this->grantTypes);
        }
        if (\is_array($this->redirectUris)) {
            Model::validateArray($this->redirectUris);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokenEffectiveTime) {
            $res['AccessTokenEffectiveTime'] = $this->accessTokenEffectiveTime;
        }

        if (null !== $this->codeEffectiveTime) {
            $res['CodeEffectiveTime'] = $this->codeEffectiveTime;
        }

        if (null !== $this->enableAuthLogin) {
            $res['EnableAuthLogin'] = $this->enableAuthLogin;
        }

        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toArray($noStream) : $this->endpoints;
        }

        if (null !== $this->grantScopes) {
            if (\is_array($this->grantScopes)) {
                $res['GrantScopes'] = [];
                $n1 = 0;
                foreach ($this->grantScopes as $item1) {
                    $res['GrantScopes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->grantTypes) {
            if (\is_array($this->grantTypes)) {
                $res['GrantTypes'] = [];
                $n1 = 0;
                foreach ($this->grantTypes as $item1) {
                    $res['GrantTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->idTokenAlgorithmType) {
            $res['IdTokenAlgorithmType'] = $this->idTokenAlgorithmType;
        }

        if (null !== $this->idTokenEffectiveTime) {
            $res['IdTokenEffectiveTime'] = $this->idTokenEffectiveTime;
        }

        if (null !== $this->redirectUris) {
            if (\is_array($this->redirectUris)) {
                $res['RedirectUris'] = [];
                $n1 = 0;
                foreach ($this->redirectUris as $item1) {
                    $res['RedirectUris'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->refreshTokenEffective) {
            $res['RefreshTokenEffective'] = $this->refreshTokenEffective;
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
        if (isset($map['AccessTokenEffectiveTime'])) {
            $model->accessTokenEffectiveTime = $map['AccessTokenEffectiveTime'];
        }

        if (isset($map['CodeEffectiveTime'])) {
            $model->codeEffectiveTime = $map['CodeEffectiveTime'];
        }

        if (isset($map['EnableAuthLogin'])) {
            $model->enableAuthLogin = $map['EnableAuthLogin'];
        }

        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }

        if (isset($map['GrantScopes'])) {
            if (!empty($map['GrantScopes'])) {
                $model->grantScopes = [];
                $n1 = 0;
                foreach ($map['GrantScopes'] as $item1) {
                    $model->grantScopes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GrantTypes'])) {
            if (!empty($map['GrantTypes'])) {
                $model->grantTypes = [];
                $n1 = 0;
                foreach ($map['GrantTypes'] as $item1) {
                    $model->grantTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['IdTokenAlgorithmType'])) {
            $model->idTokenAlgorithmType = $map['IdTokenAlgorithmType'];
        }

        if (isset($map['IdTokenEffectiveTime'])) {
            $model->idTokenEffectiveTime = $map['IdTokenEffectiveTime'];
        }

        if (isset($map['RedirectUris'])) {
            if (!empty($map['RedirectUris'])) {
                $model->redirectUris = [];
                $n1 = 0;
                foreach ($map['RedirectUris'] as $item1) {
                    $model->redirectUris[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RefreshTokenEffective'])) {
            $model->refreshTokenEffective = $map['RefreshTokenEffective'];
        }

        return $model;
    }
}
