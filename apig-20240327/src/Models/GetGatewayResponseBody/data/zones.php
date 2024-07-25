<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data;

use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\zones\vSwitch;
use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var vSwitch
     */
    public $vSwitch;

    /**
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'name'    => 'name',
        'vSwitch' => 'vSwitch',
        'zoneId'  => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->vSwitch) {
            $res['vSwitch'] = null !== $this->vSwitch ? $this->vSwitch->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['vSwitch'])) {
            $model->vSwitch = vSwitch::fromMap($map['vSwitch']);
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
