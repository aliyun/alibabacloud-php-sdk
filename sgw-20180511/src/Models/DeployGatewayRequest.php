<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DeployGatewayRequest extends Model
{
    /**
     * @example Basic
     *
     * @var string
     */
    public $gatewayClass;

    /**
     * @example gw-0001xv7je3580031y***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'gatewayClass'  => 'GatewayClass',
        'gatewayId'     => 'GatewayId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayClass) {
            $res['GatewayClass'] = $this->gatewayClass;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayClass'])) {
            $model->gatewayClass = $map['GatewayClass'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
