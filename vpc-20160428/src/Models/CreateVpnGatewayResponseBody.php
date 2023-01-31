<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnGatewayResponseBody extends Model
{
    /**
     * @example MYVPN
     *
     * @var string
     */
    public $name;

    /**
     * @example 208240895400460
     *
     * @var int
     */
    public $orderId;

    /**
     * @example EB2C156A-41F8-49CC-A756-D55AFC8BFD69
     *
     * @var string
     */
    public $requestId;

    /**
     * @example vpn-uf68lxhgr7ftbqr3p****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'name'         => 'Name',
        'orderId'      => 'OrderId',
        'requestId'    => 'RequestId',
        'vpnGatewayId' => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpnGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
