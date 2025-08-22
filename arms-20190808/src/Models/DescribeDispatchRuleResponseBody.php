<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule;

class DescribeDispatchRuleResponseBody extends Model
{
    /**
     * @var dispatchRule
     */
    public $dispatchRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dispatchRule' => 'DispatchRule',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dispatchRule) {
            $this->dispatchRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dispatchRule) {
            $res['DispatchRule'] = null !== $this->dispatchRule ? $this->dispatchRule->toArray($noStream) : $this->dispatchRule;
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
        if (isset($map['DispatchRule'])) {
            $model->dispatchRule = dispatchRule::fromMap($map['DispatchRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
