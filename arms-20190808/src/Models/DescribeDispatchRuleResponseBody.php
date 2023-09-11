<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule;
use AlibabaCloud\Tea\Model;

class DescribeDispatchRuleResponseBody extends Model
{
    /**
     * @description The struct returned.
     *
     * @var dispatchRule
     */
    public $dispatchRule;

    /**
     * @description The ID of the request.
     *
     * @example 34ED024E-9E31-434A-9E4E-D9D15C3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dispatchRule' => 'DispatchRule',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dispatchRule) {
            $res['DispatchRule'] = null !== $this->dispatchRule ? $this->dispatchRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DispatchRule'])) {
            $model->dispatchRule = dispatchRule::fromMap($map['DispatchRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
