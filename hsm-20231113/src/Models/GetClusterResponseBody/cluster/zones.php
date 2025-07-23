<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponseBody\cluster;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-uf61s651p69bdgmki****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

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
     * @return zones
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
