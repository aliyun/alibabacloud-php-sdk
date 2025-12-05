<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string[]
     */
    public $sampleMetricList;

    /**
     * @var mixed[]
     */
    public $samplerMap;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'sampleMetricList' => 'SampleMetricList',
        'samplerMap' => 'SamplerMap',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->sampleMetricList)) {
            Model::validateArray($this->sampleMetricList);
        }
        if (\is_array($this->samplerMap)) {
            Model::validateArray($this->samplerMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sampleMetricList)) {
                $res['SampleMetricList'] = [];
                $n1 = 0;
                foreach ($this->sampleMetricList as $item1) {
                    $res['SampleMetricList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->samplerMap) {
            if (\is_array($this->samplerMap)) {
                $res['SamplerMap'] = [];
                foreach ($this->samplerMap as $key1 => $value1) {
                    $res['SamplerMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
                $model->sampleMetricList = [];
                $n1 = 0;
                foreach ($map['SampleMetricList'] as $item1) {
                    $model->sampleMetricList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SamplerMap'])) {
            if (!empty($map['SamplerMap'])) {
                $model->samplerMap = [];
                foreach ($map['SamplerMap'] as $key1 => $value1) {
                    $model->samplerMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
