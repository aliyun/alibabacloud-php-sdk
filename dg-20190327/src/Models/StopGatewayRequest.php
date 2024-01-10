<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dg\V20190327\Models;

use AlibabaCloud\Tea\Model;

class StopGatewayRequest extends Model
{
    /**
     * @example dg-yhss6sdlaff****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example dg-node-123
     *
     * @var string
     */
    public $gatewayInstanceId;
    protected $_name = [
        'gatewayId'         => 'GatewayId',
        'gatewayInstanceId' => 'GatewayInstanceId',
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
        if (null !== $this->gatewayInstanceId) {
            $res['GatewayInstanceId'] = $this->gatewayInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayInstanceId'])) {
            $model->gatewayInstanceId = $map['GatewayInstanceId'];
        }

        return $model;
    }
}
