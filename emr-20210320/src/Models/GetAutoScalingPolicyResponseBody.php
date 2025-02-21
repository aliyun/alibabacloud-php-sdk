<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyResponseBody\scalingPolicy;

class GetAutoScalingPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var scalingPolicy
     */
    public $scalingPolicy;
    protected $_name = [
        'requestId'     => 'RequestId',
        'scalingPolicy' => 'ScalingPolicy',
    ];

    public function validate()
    {
        if (null !== $this->scalingPolicy) {
            $this->scalingPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scalingPolicy) {
            $res['ScalingPolicy'] = null !== $this->scalingPolicy ? $this->scalingPolicy->toArray($noStream) : $this->scalingPolicy;
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

        if (isset($map['ScalingPolicy'])) {
            $model->scalingPolicy = scalingPolicy::fromMap($map['ScalingPolicy']);
        }

        return $model;
    }
}
