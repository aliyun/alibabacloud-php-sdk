<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryUniqueDeviceStatResponseBody\appDeviceStats;

use AlibabaCloud\Tea\Model;

class appDeviceStat extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'count' => 'Count',
        'time'  => 'Time',
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
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
