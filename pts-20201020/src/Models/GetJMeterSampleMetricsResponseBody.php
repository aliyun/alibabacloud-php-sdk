<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class GetJMeterSampleMetricsResponseBody extends Model
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
     * @var string
     */
    public $requestId;

    /**
     * @description 采样器聚合数据列表
     *
     * @var string[]
     */
    public $sampleMetricList;

    /**
     * @description 采样器列表，可根据该列表传递需要查询的采样器
     *
     * @var mixed[]
     */
    public $samplerMap;

    /**
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
