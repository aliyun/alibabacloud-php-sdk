<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewayInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dg-nmz841r7b681****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description This parameter is required.
     *
     * @example dg-node-QeH6VfT8GRnPrYWX****
     *
     * @var string
     */
    public $gatewayInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'gatewayId'         => 'GatewayId',
        'gatewayInstanceId' => 'GatewayInstanceId',
        'regionId'          => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewayInstanceRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
