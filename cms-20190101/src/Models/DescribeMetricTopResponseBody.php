<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricTopResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the request was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The monitoring data.
     *
     * @example [{\"order\":1,\"timestamp\":1620287520000,\"userId\":\"120886317861****\",\"instanceId\":\"i-j6ccf7d5fn335qpo****\",\"Average\":99.92,\"Minimum\":99.5,\"Maximum\":100.0,\"_count\":1.0},{\"order\":2,\"timestamp\":1620287520000,\"userId\":\"120886317861****\",\"instanceId\":\"i-0xii2bvf42iqvxbp****\",\"Average\":99.91,\"Minimum\":99.0,\"Maximum\":100.0,\"_count\":1.0}]
     *
     * @var string
     */
    public $datapoints;

    /**
     * @description The error message.
     *
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The statistical period of the monitoring data. Unit: seconds. Valid values: 15, 60, 900, and 3600.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The request ID.
     *
     * @example 3121AE7D-4AFF-4C25-8F1D-C8226EBB1F42
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'       => 'Code',
        'datapoints' => 'Datapoints',
        'message'    => 'Message',
        'period'     => 'Period',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->datapoints) {
            $res['Datapoints'] = $this->datapoints;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricTopResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Datapoints'])) {
            $model->datapoints = $map['Datapoints'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
