<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class GetJMeterSampleMetricsResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @example A8E16480-15C1-555A-922F-B736A005E52D
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $sampleMetricList;

    /**
     * @example {0:"Http Request"}
     *
     * @var mixed[]
     */
    public $samplerMap;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'sampleMetricList' => 'SampleMetricList',
        'samplerMap'       => 'SamplerMap',
        'success'          => 'Success',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sampleMetricList) {
            $res['SampleMetricList'] = $this->sampleMetricList;
        }
        if (null !== $this->samplerMap) {
            $res['SamplerMap'] = $this->samplerMap;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJMeterSampleMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SampleMetricList'])) {
            if (!empty($map['SampleMetricList'])) {
                $model->sampleMetricList = $map['SampleMetricList'];
            }
        }
        if (isset($map['SamplerMap'])) {
            $model->samplerMap = $map['SamplerMap'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
