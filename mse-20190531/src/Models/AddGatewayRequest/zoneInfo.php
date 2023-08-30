<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRequest;

use AlibabaCloud\Tea\Model;

class zoneInfo extends Model
{
    /**
     * @description 交换机ID。
     *
     * @example vsw-bp*****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description 可用区ID。
     *
     * @example cn-shenzhen-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vSwitchId' => 'VSwitchId',
        'zoneId'    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
