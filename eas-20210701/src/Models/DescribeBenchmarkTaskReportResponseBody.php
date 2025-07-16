<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeBenchmarkTaskReportResponseBody extends Model
{
    /**
     * @description If the value of ReportType is set to RAW, the details about the stress testing report are returned.
     *
     * @example {
     * "TimestampList": ["int64"],
     * "QPSList": ["float32"],
     * "RTList": [
     * {
     * "AVG": "float32",
     * "TP100": "float32",
     * "TP99": "float32",
     * "TP90": "float32",
     * "TP50": "float32",
     * "TP10": "float32"
     * }
     * ],
     * "TrafficList": [
     * {
     * "Send": "float64",
     * "Receive": "float64"
     * }
     * ],
     * "StatusCode": {
     * "200": "uint64",
     * "450": "uint64",
     * "500": "uint64"
     * },
     * "Count": "uint64",
     * "Total": "float64",
     * "MinRT": "float32",
     * "AvgRT": "float32",
     * "MaxRT": "float32",
     * "QPS": "float32",
     * "TotalSend": "float64",
     * "TotalReceive": "float64",
     * "RTDistribution": [
     * {
     * "Latency": "float32",
     * "Percentage": "int"
     * }
     * ],
     * "RTHistogram": [
     * {
     * "Count": "int",
     * "Mark": "float32",
     * "Frequency": "float32"
     * }
     * ]
     * }
     *
     * @var mixed
     */
    public $data;

    /**
     * @description If the value of ReportType is set to Report, the URL of the stress testing report is returned.
     *
     * @example http://eas-benchmark.oss-cn-chengdu.aliyuncs.com/summary/benchmark-larec-test-015d-10007.html
     *
     * @var string
     */
    public $reportUrl;

    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82********
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'reportUrl' => 'ReportUrl',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->reportUrl) {
            $res['ReportUrl'] = $this->reportUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBenchmarkTaskReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ReportUrl'])) {
            $model->reportUrl = $map['ReportUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
