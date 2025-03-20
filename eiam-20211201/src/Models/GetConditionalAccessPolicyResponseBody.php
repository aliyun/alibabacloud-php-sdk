<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetConditionalAccessPolicyResponseBody\conditionalAccessPolicy;
use AlibabaCloud\Tea\Model;

class GetConditionalAccessPolicyResponseBody extends Model
{
    /**
     * @description Details of the conditional access policy
     *
     * @var conditionalAccessPolicy
     */
    public $conditionalAccessPolicy;

    /**
     * @description Request ID.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conditionalAccessPolicy' => 'ConditionalAccessPolicy',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionalAccessPolicy) {
            $res['ConditionalAccessPolicy'] = null !== $this->conditionalAccessPolicy ? $this->conditionalAccessPolicy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConditionalAccessPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionalAccessPolicy'])) {
            $model->conditionalAccessPolicy = conditionalAccessPolicy::fromMap($map['ConditionalAccessPolicy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
