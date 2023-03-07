<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest;

use AlibabaCloud\Tea\Model;

class zoneInfos extends Model
{
    /**
     * @description The ID of the vSwitch. Valid values of N: 1 to 10.
     *
     * @example vsw-bp1e47optm9g58zcu****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone to which the cluster belongs. Valid values of N: 1 to 10.
     *
     * >  Each zone ID must be unique.
     * @example cn-hangzhou-b
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
     * @return zoneInfos
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
