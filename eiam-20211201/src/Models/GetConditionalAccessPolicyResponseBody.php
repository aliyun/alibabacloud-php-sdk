<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetConditionalAccessPolicyResponseBody\conditionalAccessPolicy;

class GetConditionalAccessPolicyResponseBody extends Model
{
    /**
     * @var conditionalAccessPolicy
     */
    public $conditionalAccessPolicy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conditionalAccessPolicy' => 'ConditionalAccessPolicy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->conditionalAccessPolicy) {
            $this->conditionalAccessPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionalAccessPolicy) {
            $res['ConditionalAccessPolicy'] = null !== $this->conditionalAccessPolicy ? $this->conditionalAccessPolicy->toArray($noStream) : $this->conditionalAccessPolicy;
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
        if (isset($map['ConditionalAccessPolicy'])) {
            $model->conditionalAccessPolicy = conditionalAccessPolicy::fromMap($map['ConditionalAccessPolicy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
