<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricLastResponseBody extends Model
{
    /**
     * @description Queries the latest monitoring data of a metric.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
     * @example [{"timestamp":1548777660000,"userId":"123456789876****","instanceId":"i-abcdefgh12****","Minimum":93.1,"Average":99.52,"Maximum":100}]
     *
     * @var string
     */
    public $datapoints;

    /**
     * @example The specified resource is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The interval at which the monitoring data is queried.
     *
     * Unit: seconds.
     * @example xxxxxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the request.
     *
     * @example 021472A6-25E3-4094-8D00-BA4B6A5486C3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The monitoring data.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'datapoints' => 'Datapoints',
        'message'    => 'Message',
        'nextToken'  => 'NextToken',
        'period'     => 'Period',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricLastResponseBody
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
