<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule;
use AlibabaCloud\Tea\Model;

class DescribeDispatchRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dispatchRule
     */
    public $dispatchRule;
    protected $_name = [
        'requestId'    => 'RequestId',
        'dispatchRule' => 'DispatchRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dispatchRule) {
            $res['DispatchRule'] = null !== $this->dispatchRule ? $this->dispatchRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDispatchRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DispatchRule'])) {
            $model->dispatchRule = dispatchRule::fromMap($map['DispatchRule']);
        }

        return $model;
    }
}
