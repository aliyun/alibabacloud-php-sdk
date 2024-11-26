<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items;

use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\zones\vSwitch;
use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description The vSwitch.
     *
     * @var vSwitch
     */
    public $vSwitch;

    /**
     * @description The ID of the current zone.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vSwitch' => 'vSwitch',
        'zoneId'  => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['vSwitch'])) {
            $model->vSwitch = vSwitch::fromMap($map['vSwitch']);
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
