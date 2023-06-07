<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeDatabaseInstanceMetricDataResponseBody extends Model
{
    /**
     * @example cpuusage&memusage
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $metricData;

    /**
     * @example MySQL_MemCpuUsage
     *
     * @var string
     */
    public $metricName;

    /**
     * @example 30637AD6-D977-4833-A54C-CC89483E****
     *
     * @var string
     */
    public $requestId;

    /**
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
