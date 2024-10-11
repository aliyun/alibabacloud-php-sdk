<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeSlowQueryTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2000
     *
     * @var int
     */
    public $avgDurationMs;

    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @example 3000
     *
     * @var int
     */
    public $maxDurationMs;

    /**
     * @example 1000
     *
     * @var int
     */
    public $minDurationMs;

    /**
     * @example 2021-02-02T08:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'avgDurationMs' => 'AvgDurationMs',
        'count'         => 'Count',
        'maxDurationMs' => 'MaxDurationMs',
        'minDurationMs' => 'MinDurationMs',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgDurationMs) {
            $res['AvgDurationMs'] = $this->avgDurationMs;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->maxDurationMs) {
            $res['MaxDurationMs'] = $this->maxDurationMs;
        }
        if (null !== $this->minDurationMs) {
            $res['MinDurationMs'] = $this->minDurationMs;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgDurationMs'])) {
            $model->avgDurationMs = $map['AvgDurationMs'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['MaxDurationMs'])) {
            $model->maxDurationMs = $map['MaxDurationMs'];
        }
        if (isset($map['MinDurationMs'])) {
            $model->minDurationMs = $map['MinDurationMs'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
