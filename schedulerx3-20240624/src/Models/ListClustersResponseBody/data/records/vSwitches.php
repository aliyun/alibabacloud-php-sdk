<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListClustersResponseBody\data\records;

use AlibabaCloud\Tea\Model;

class vSwitches extends Model
{
    /**
     * @example vsw-8vbl54xzux86usy61r5zm
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-h
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
     * @return vSwitches
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
