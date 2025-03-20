<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDIJobMetricsRequest extends Model
{
    /**
     * @description The ID of the synchronization task.
     *
     * @example 11265
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The end of the time range to query.
     *
     * This parameter is required.
     *
     * @example 1712205941
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The metrics that you want to query.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $metricName;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     *
     * @example 1586509407
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'endTime' => 'EndTime',
        'metricName' => 'MetricName',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDIJobMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MetricName'])) {
            if (!empty($map['MetricName'])) {
                $model->metricName = $map['MetricName'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
