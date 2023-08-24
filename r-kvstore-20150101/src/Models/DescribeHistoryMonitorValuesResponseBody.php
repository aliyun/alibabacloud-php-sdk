<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryMonitorValuesResponseBody extends Model
{
    /**
     * @description The monitoring data returned in the JSON format. For more information, see [Metrics](~~189831~~).
     *
     * >
     *
     *   Only metrics whose values are not 0 are returned. This improves data transmission efficiency. Metrics that are not displayed are represented by the default value of **0**.
     *
     *   The query results are aligned with the data aggregation frequency. If the specified time range to query is less than or equal to 10 minutes and the data is aggregated once every 5 seconds, query results are returned at an interval of 5 seconds. If the specified StartTime value does not coincide with a point in time for data aggregation, the system returns the latest point in time for data aggregation as the first point in time. For example, if you set the StartTime parameter to 2022-01-20T12:01:48Z, the first point in time returned is 2022-01-20T12:01:45Z.
     *
     * @example "{\"2022-11-06T00:00:00Z\":{\"memoryUsage\":\"6.67\"},\"2022-11-06T00:00:05Z\":{\"memoryUsage\":\"6.67\"},\"2022-11-06T00:00:10Z\":{\"memoryUsage\":\"6.67\"},\"2022-11-06T00:00:15Z\":{\"memoryUsage\":\"6.67\"},\"2022-11-06T00:00:20Z\":{\"memoryUsage\":\"6.67\"},\"2022-11-06T00:00:25Z\":{\"memoryUsage\":\"6.67\"}}"
     *
     * @var string
     */
    public $monitorHistory;

    /**
     * @description The ID of the request.
     *
     * @example F0997EE8-F4C2-4503-9168-85177ED7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorHistory' => 'MonitorHistory',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorHistory) {
            $res['MonitorHistory'] = $this->monitorHistory;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHistoryMonitorValuesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorHistory'])) {
            $model->monitorHistory = $map['MonitorHistory'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
