<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp\oidcSsoConfig\endpoints;
use AlibabaCloud\Tea\Model;

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
        'codeEffectiveTime'        => 'CodeEffectiveTime',
        'enableAuthLogin'          => 'EnableAuthLogin',
        'endpoints'                => 'Endpoints',
        'grantScopes'              => 'GrantScopes',
        'grantTypes'               => 'GrantTypes',
        'idTokenAlgorithmType'     => 'IdTokenAlgorithmType',
        'idTokenEffectiveTime'     => 'IdTokenEffectiveTime',
        'redirectUris'             => 'RedirectUris',
        'refreshTokenEffective'    => 'RefreshTokenEffective',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }
        if (null !== $this->grantScopes) {
            $res['GrantScopes'] = $this->grantScopes;
        }
        if (null !== $this->grantTypes) {
            $res['GrantTypes'] = $this->grantTypes;
        }
        if (null !== $this->idTokenAlgorithmType) {
            $res['IdTokenAlgorithmType'] = $this->idTokenAlgorithmType;
        }
        if (null !== $this->idTokenEffectiveTime) {
            $res['IdTokenEffectiveTime'] = $this->idTokenEffectiveTime;
        }
        if (null !== $this->redirectUris) {
            $res['RedirectUris'] = $this->redirectUris;
        }
        if (null !== $this->refreshTokenEffective) {
            $res['RefreshTokenEffective'] = $this->refreshTokenEffective;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return oidcSsoConfig
     */
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
                $model->grantScopes = $map['GrantScopes'];
            }
        }
        if (isset($map['GrantTypes'])) {
            if (!empty($map['GrantTypes'])) {
                $model->grantTypes = $map['GrantTypes'];
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
                $model->redirectUris = $map['RedirectUris'];
            }
        }
        if (isset($map['RefreshTokenEffective'])) {
            $model->refreshTokenEffective = $map['RefreshTokenEffective'];
        }

        return $model;
    }
}
