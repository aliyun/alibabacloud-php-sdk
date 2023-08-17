<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribePatternPerformanceResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribePatternPerformanceResponseBody\performances\series;
use AlibabaCloud\Tea\Model;

class performances extends Model
{
    /**
     * @description The performance metric that was queried. Valid values:
     *
     *   **AnalyticDB_PatternQueryCount**: the total number of queries executed in association with the SQL pattern.
     *   **AnalyticDB_PatternQueryTime**: the total amount of time consumed by the queries executed in association with the SQL pattern.
     *   **AnalyticDB_PatternExecutionTime**: the total execution duration of the queries executed in association with the SQL pattern.
     *   **AnalyticDB_PatternPeakMemory**: the peak memory usage of the queries executed in association with the SQL pattern.
     *   **AnalyticDB_PatternScanSize**: the amount of data scanned in the queries executed in association with the SQL pattern.
     *
     * @example AnalyticDB_PatternQueryCount
     *
     * @var string
     */
    public $key;

    /**
     * @description The queried performance metrics.
     *
     * @var series[]
     */
    public $series;

    /**
     * @description The unit of the performance metric. Valid values:
     *
     *   When the performance metric is related to the query duration (the `Key` value is `AnalyticDB_PatternQueryTime` or `AnalyticDB_PatternExecutionTime`), **ms** is returned.
     *   When the performance metric is related to the memory usage (the `Key` value is `AnalyticDB_PatternPeakMemory`), **MB** is returned.
     *   When the performance metric is related to the amount of data scanned (the `Key` value is `AnalyticDB_PatternScanSize`), **MB** is returned.
     *   When the performance metric is related to the number of queries (the `Key` value is `AnalyticDB_PatternQueryCount`), this parameter is empty.
     *
     * @example ms
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
            $res['Series'] = [];
            if (null !== $this->series && \is_array($this->series)) {
                $n = 0;
                foreach ($this->series as $item) {
                    $res['Series'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Series'])) {
            if (!empty($map['Series'])) {
                $model->series = [];
                $n             = 0;
                foreach ($map['Series'] as $item) {
                    $model->series[$n++] = null !== $item ? series::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
