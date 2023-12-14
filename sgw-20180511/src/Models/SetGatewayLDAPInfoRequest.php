<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class SetGatewayLDAPInfoRequest extends Model
{
    /**
     * @example dc=sgwt***,dc=local
     *
     * @var string
     */
    public $baseDN;

    /**
     * @example gw-000eg44nmxbsfwbv****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $isTls;

    /**
     * @example 123***
     *
     * @var string
     */
    public $password;

    /**
     * @example cn=admin,dc=sgwt***,dc=local
     *
     * @var string
     */
    public $rootDN;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example 47.101.59.188
     *
     * @var string
     */
    public $serverIp;
    protected $_name = [
        'baseDN'        => 'BaseDN',
        'gatewayId'     => 'GatewayId',
        'isEnabled'     => 'IsEnabled',
        'isTls'         => 'IsTls',
        'password'      => 'Password',
        'rootDN'        => 'RootDN',
        'securityToken' => 'SecurityToken',
        'serverIp'      => 'ServerIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseDN) {
            $res['BaseDN'] = $this->baseDN;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }
        if (null !== $this->isTls) {
            $res['IsTls'] = $this->isTls;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->rootDN) {
            $res['RootDN'] = $this->rootDN;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetGatewayLDAPInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseDN'])) {
            $model->baseDN = $map['BaseDN'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }
        if (isset($map['IsTls'])) {
            $model->isTls = $map['IsTls'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RootDN'])) {
            $model->rootDN = $map['RootDN'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }

        return $model;
    }
}
