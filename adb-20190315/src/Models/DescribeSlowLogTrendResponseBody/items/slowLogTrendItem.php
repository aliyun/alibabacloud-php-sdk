<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody\items;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponseBody\items\slowLogTrendItem\series;
use AlibabaCloud\Tea\Model;

class slowLogTrendItem extends Model
{
    /**
     * @description The trend of slow query logs. The value is AnalyticDB_SlowLogTrend.
     *
     * @example AnalyticDB_SlowLogTrend
     *
     * @var string
     */
    public $key;

    /**
     * @description The performance metrics.
     *
     * @var series
     */
    public $series;

    /**
     * @description The unit of performance metrics.
     *
     * @example %
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'key'    => 'Key',
        'series' => 'Series',
        'unit'   => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->series) {
            $res['Series'] = null !== $this->series ? $this->series->toMap() : null;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slowLogTrendItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Series'])) {
            $model->series = series::fromMap($map['Series']);
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
