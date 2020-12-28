<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetSentinelAppSumMetricResponseBody\metricData;
use AlibabaCloud\Tea\Model;

class GetSentinelAppSumMetricResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var metricData
     */
    public $metricData;
    protected $_name = [
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'code'       => 'Code',
        'success'    => 'Success',
        'metricData' => 'MetricData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->metricData) {
            $res['MetricData'] = null !== $this->metricData ? $this->metricData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSentinelAppSumMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['MetricData'])) {
            $model->metricData = metricData::fromMap($map['MetricData']);
        }

        return $model;
    }
}
