<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class GetStackPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $stackPolicyBody;
    protected $_name = [
        'requestId' => 'RequestId',
        'stackPolicyBody' => 'StackPolicyBody',
    ];

    public function validate()
    {
        if (\is_array($this->stackPolicyBody)) {
            Model::validateArray($this->stackPolicyBody);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stackPolicyBody) {
            if (\is_array($this->stackPolicyBody)) {
                $res['StackPolicyBody'] = [];
                foreach ($this->stackPolicyBody as $key1 => $value1) {
                    $res['StackPolicyBody'][$key1] = $value1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StackPolicyBody'])) {
            if (!empty($map['StackPolicyBody'])) {
                $model->stackPolicyBody = [];
                foreach ($map['StackPolicyBody'] as $key1 => $value1) {
                    $model->stackPolicyBody[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
