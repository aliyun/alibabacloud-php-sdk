<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class SetGatewayADInfoRequest extends Model
{
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
     * @example 12****
     *
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example 12.12.x.x
     *
     * @var string
     */
    public $serverIp;

    /**
     * @example ale****
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'gatewayId'     => 'GatewayId',
        'isEnabled'     => 'IsEnabled',
        'password'      => 'Password',
        'securityToken' => 'SecurityToken',
        'serverIp'      => 'ServerIp',
        'username'      => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetGatewayADInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
