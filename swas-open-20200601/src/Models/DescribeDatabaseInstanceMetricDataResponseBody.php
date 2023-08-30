<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeDatabaseInstanceMetricDataResponseBody extends Model
{
    /**
     * @description The data format. Valid values:
     *
     *   cpuusage\&memusage
     *   active_session\&total_session
     *   ins_size\&data_size\&log_size\&tmp_size\&other_size
     *   io
     *
     * @example cpuusage&memusage
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @description The monitoring data.
     *
     * @example [  {     \"date"\: " 2022-09-06T04:04:00Z",\"value\":\"0.77&3.69\"  } ]
     *
     * @var string
     */
    public $metricData;

    /**
     * @description The name of the metric. Valid values:
     *
     *   MySQL_MemCpuUsage: The CPU utilization and memory usage of the instance within the entire operating system.
     *   MySQL_DetailedSpaceUsage: The total space usage, data space, log space, temporary space, and system space of the instance.
     *   MySQL_Sessions : The total number of active connections.
     *   MySQL_IOPS: The IOPS of the instance.
     *
     * @example MySQL_MemCpuUsage
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The request ID.
     *
     * @example 30637AD6-D977-4833-A54C-CC89483E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The unit of the monitoring metric.
     *
     *   %
     *   int
     *   MB
     *
     * @example %
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'dataFormat' => 'DataFormat',
        'metricData' => 'MetricData',
        'metricName' => 'MetricName',
        'requestId'  => 'RequestId',
        'unit'       => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->metricData) {
            $res['MetricData'] = $this->metricData;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatabaseInstanceMetricDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['MetricData'])) {
            $model->metricData = $map['MetricData'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
