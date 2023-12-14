<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ExpandGatewayNetworkBandwidthRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var int
     */
    public $newNetworkBandwidth;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'gatewayId'           => 'GatewayId',
        'newNetworkBandwidth' => 'NewNetworkBandwidth',
        'securityToken'       => 'SecurityToken',
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
        if (null !== $this->newNetworkBandwidth) {
            $res['NewNetworkBandwidth'] = $this->newNetworkBandwidth;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExpandGatewayNetworkBandwidthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['NewNetworkBandwidth'])) {
            $model->newNetworkBandwidth = $map['NewNetworkBandwidth'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
