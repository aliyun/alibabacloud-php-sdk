<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\Tea\Model;

class GetUserGatewayInstancesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dg-nmz841r7b681****
     *
     * @var string
     */
    public $gatewayId;
    protected $_name = [
        'gatewayId' => 'GatewayId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserGatewayInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        return $model;
    }
}
