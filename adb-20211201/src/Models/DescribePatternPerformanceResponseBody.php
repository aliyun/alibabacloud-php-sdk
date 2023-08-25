<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePatternPerformanceResponseBody\performances;
use AlibabaCloud\Tea\Model;

class DescribePatternPerformanceResponseBody extends Model
{
    /**
     * @description The end time of the query. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time is displayed in UTC.
     *
     * @example 2022-08-22T01:06:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the performance metric value. Valid values:
     *
     *   When the `Key` parameter is set to `AnalyticDB_PatternQueryCount`, `pattern_query_count` is returned, which indicates the number of executions of the SQL statements in association with the SQL pattern.
     *
     *   When the `Key` value is `AnalyticDB_PatternQueryTime`, the following values are returned:
     *
     *   `average_query_time`, which indicates the average total amount of time consumed by the SQL statements in association with the SQL pattern.
     *   `max_query_time`, which indicates the maximum total amount of time consumed by the SQL statements in association with the SQL pattern.
     *
     *   When the `Key` value is `AnalyticDB_PatternExecutionTime`, the following values are returned:
     *
     *   `average_execution_time`, which indicates the average execution duration of the SQL statements in association with the SQL pattern.
     *   `max_execution_time`, which indicates the maximum execution duration of the SQL statements in association with the SQL pattern.
     *
     *   When the `Key` value is `AnalyticDB_PatternPeakMemory`, the following values are returned:
     *
     *   `average_peak_memory`, which indicates the average peak memory usage of the SQL statements in association with the SQL pattern.
     *   `max_peak_memory`, which indicates the maximum peak memory usage of the SQL statements in association with the SQL pattern.
     *
     *   When the `Key` value is `AnalyticDB_PatternScanSize`, the following values are returned:
     *
     *   `average_scan_size`, which indicates the average amount of data scanned by the SQL statements in association with the SQL pattern.
     *   `max_scan_size`, which indicates the maximum amount of data scanned by the SQL statements in association with the SQL pattern.
     *
     * @var performances[]
     */
    public $performances;

    /**
     * @description The request ID.
     *
     * @example F21AF487-B8C9-57E0-8E3A-A92BC3611FB6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time of the query. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time is displayed in UTC.
     *
     * @example 2022-08-21T02:15:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'performances' => 'Performances',
        'requestId'    => 'RequestId',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->performances) {
            $res['Performances'] = [];
            if (null !== $this->performances && \is_array($this->performances)) {
                $n = 0;
                foreach ($this->performances as $item) {
                    $res['Performances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePatternPerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Performances'])) {
            if (!empty($map['Performances'])) {
                $model->performances = [];
                $n                   = 0;
                foreach ($map['Performances'] as $item) {
                    $model->performances[$n++] = null !== $item ? performances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
