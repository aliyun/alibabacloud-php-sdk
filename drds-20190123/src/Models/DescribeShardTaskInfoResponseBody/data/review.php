<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class review extends Model
{
    /**
     * @description Indicates the number of remaining days before the tasks expire.
     *
     * @example 0
     *
     * @var int
     */
    public $expired;

    /**
     * @description Indicates the progress of the tasks.
     *
     * @example 0
     *
     * @var int
     */
    public $progress;

    /**
     * @description Indicates the start time when the tasks are performed.
     *
     * @example 2019-09-16 15:12:53
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Indicates the number of tasks.
     *
     * @example 5
     *
     * @var int
     */
    public $total;

    /**
     * @description Indicates the number of transactions processed by the database per second.
     *
     * @example 10
     *
     * @var int
     */
    public $tps;
    protected $_name = [
        'expired'   => 'Expired',
        'progress'  => 'Progress',
        'startTime' => 'StartTime',
        'total'     => 'Total',
        'tps'       => 'Tps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return review
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }

        return $model;
    }
}
