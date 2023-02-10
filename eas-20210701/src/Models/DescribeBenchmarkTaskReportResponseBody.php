<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeBenchmarkTaskReportResponseBody extends Model
{
    /**
     * @example {
     * }
     * @var mixed
     */
    public $data;

    /**
     * @example http://eas-benchmark.oss-cn-chengdu.aliyuncs.com/summary/benchmark-larec-test-015d-10007.html
     *
     * @var string
     */
    public $reportUrl;

    /**
     * @example 40325405-579C-4D82********
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'reportUrl' => 'ReportUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
