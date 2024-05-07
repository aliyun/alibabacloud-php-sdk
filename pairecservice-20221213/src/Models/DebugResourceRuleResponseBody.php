<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentValues) {
            $res['CurrentValues'] = $this->currentValues;
        }
        if (null !== $this->outputValues) {
            $res['OutputValues'] = $this->outputValues;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebugResourceRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentValues'])) {
            $model->currentValues = $map['CurrentValues'];
        }
        if (isset($map['OutputValues'])) {
            $model->outputValues = $map['OutputValues'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
