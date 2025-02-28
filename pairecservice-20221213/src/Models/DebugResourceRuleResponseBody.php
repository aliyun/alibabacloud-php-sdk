<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class DebugResourceRuleResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $currentValues;
    /**
     * @var mixed[]
     */
    public $outputValues;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'currentValues' => 'CurrentValues',
        'outputValues'  => 'OutputValues',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->currentValues)) {
            Model::validateArray($this->currentValues);
        }
        if (\is_array($this->outputValues)) {
            Model::validateArray($this->outputValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentValues) {
            if (\is_array($this->currentValues)) {
                $res['CurrentValues'] = [];
                foreach ($this->currentValues as $key1 => $value1) {
                    $res['CurrentValues'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->outputValues) {
            if (\is_array($this->outputValues)) {
                $res['OutputValues'] = [];
                foreach ($this->outputValues as $key1 => $value1) {
                    $res['OutputValues'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CurrentValues'])) {
            if (!empty($map['CurrentValues'])) {
                $model->currentValues = [];
                foreach ($map['CurrentValues'] as $key1 => $value1) {
                    $model->currentValues[$key1] = $value1;
                }
            }
        }

        if (isset($map['OutputValues'])) {
            if (!empty($map['OutputValues'])) {
                $model->outputValues = [];
                foreach ($map['OutputValues'] as $key1 => $value1) {
                    $model->outputValues[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
