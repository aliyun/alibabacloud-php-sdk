<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribePatternPerformanceResponseBody\performances;

use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @description The name of the performance metric value. Valid values:
     *
     *   If the value of `Key` is `AnalyticDB_PatternQueryCount`, `pattern_query_count` is returned, which indicates the number of executions of the SQL statements in association with the SQL pattern.
     *
     *   If the value of `Key` is `AnalyticDB_PatternQueryTime`, the following values are returned:
     *
     *   `average_query_time`, which indicates the average total amount of time consumed by the SQL statements in association with the SQL pattern.
     *   `max_query_time`, which indicates the maximum total amount of time consumed by the SQL statements in association with the SQL pattern.
     *
     *   If the value of `Key` is `AnalyticDB_PatternExecutionTime`, the following values are returned:
     *
     *   `average_execution_time`, which indicates the average execution duration of the SQL statements in association with the SQL pattern.
     *   `max_execution_time`, which indicates the maximum execution duration of the SQL statements in association with the SQL pattern.
     *
     *   If the value of `Key` is `AnalyticDB_PatternPeakMemory`, the following values are returned:
     *
     *   `average_peak_memory`, which indicates the average peak memory usage of the SQL statements in association with the SQL pattern.
     *   `max_peak_memory`, which indicates the maximum peak memory usage of the SQL statements in association with the SQL pattern.
     *
     *   If the value of `Key` is `AnalyticDB_PatternScanSize`, the following values are returned:
     *
     *   `average_scan_size`, which indicates the average amount of data scanned by the SQL statements in association with the SQL pattern.
     *   `max_scan_size`, which indicates the maximum amount of data scanned by the SQL statements in association with the SQL pattern.
     *
     * @example max_query_time
     *
     * @var string
     */
    public $name;

    /**
     * @description The values of the performance metric.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'name'   => 'Name',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return series
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
