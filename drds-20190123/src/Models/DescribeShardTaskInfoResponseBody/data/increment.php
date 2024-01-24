<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class increment extends Model
{
    /**
     * @description Indicates the latency of the incremental data synchronization.
     *
     * @example 1568617906
     *
     * @var int
     */
    public $delay;

    /**
     * @description Indicates the start time when the incremental data synchronization is performed.
     *
     * @example 2019-09-16 15:12:53
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Indicates the number of transactions processed by the database per second.
     *
     * @example 10
     *
     * @var int
     */
    public $tps;
    protected $_name = [
        'delay'     => 'Delay',
        'startTime' => 'StartTime',
        'tps'       => 'Tps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return increment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }

        return $model;
    }
}
