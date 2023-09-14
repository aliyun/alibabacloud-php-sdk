<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyResponseBody\scalingPolicy;
use AlibabaCloud\Tea\Model;

class GetAutoScalingPolicyResponseBody extends Model
{
    /**
     * @description 请求ID。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingPolicy) {
            $res['ScalingPolicy'] = null !== $this->scalingPolicy ? $this->scalingPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAutoScalingPolicyResponseBody
     */
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
