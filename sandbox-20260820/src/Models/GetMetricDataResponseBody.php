<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class GetMetricDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var MetricData
     */
    public $metricData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'metricData' => 'metricData',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->metricData) {
            $this->metricData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->metricData) {
            $res['metricData'] = null !== $this->metricData ? $this->metricData->toArray($noStream) : $this->metricData;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['metricData'])) {
            $model->metricData = MetricData::fromMap($map['metricData']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
