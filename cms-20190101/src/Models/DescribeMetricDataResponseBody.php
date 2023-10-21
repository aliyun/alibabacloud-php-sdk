<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricDataResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The monitoring data. The value includes the following fields:
     *
     *   `timestamp`: the timestamp when the alert was triggered.
     *   `userId`: the ID of the user for which the alert was triggered.
     *   `instanceId`: the ID of the instance for which the alert was triggered.
     *   `Minimum`, `Average`, and `Maximum`: the aggregation methods.
     *
     * @example [{\"timestamp\":1618368900000,\"Average\":95.8291666666667,\"Minimum\":65.48,\"Maximum\":100.0},{\"timestamp\":1618368960000,\"Average\":95.8683333333333,\"Minimum\":67.84,\"Maximum\":100.0}]
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
     * @description The statistical period of the monitoring data.
     *
     * Unit: seconds.
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the request.
     *
     * @example 6A5F022D-AC7C-460E-94AE-B9E75083D027
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
     * @return DescribeMetricDataResponseBody
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
