<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceStatResponseBody\appDeviceStats;

use AlibabaCloud\Tea\Model;

class appDeviceStat extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @example iOS
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example 2016-07-28T16:00:00Z
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'count'      => 'Count',
        'deviceType' => 'DeviceType',
        'time'       => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appDeviceStat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
