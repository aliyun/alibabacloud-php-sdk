<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponseBody\items;

use AlibabaCloud\Tea\Model;

class multiZone extends Model
{
    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vSwitchIds' => 'VSwitchIds',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
