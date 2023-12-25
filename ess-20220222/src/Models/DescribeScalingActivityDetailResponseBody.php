<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingActivityDetailResponseBody extends Model
{
    /**
     * @description The details about the event.
     *
     * @example new ECS instances \"i-bp16t2cgmiiymeqv****\" are created.
     *
     * @var string
     */
    public $detail;

    /**
     * @description The ID of the request.
     *
     * @example B13527BF-1FBD-4334-A512-20F5E9D3FB4D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the scaling activity.
     *
     * @example asa-bp1c9djwrgxjyk31****
     *
     * @var string
     */
    public $scalingActivityId;
    protected $_name = [
        'detail'            => 'Detail',
        'requestId'         => 'RequestId',
        'scalingActivityId' => 'ScalingActivityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingActivityId) {
            $res['ScalingActivityId'] = $this->scalingActivityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingActivityDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingActivityId'])) {
            $model->scalingActivityId = $map['ScalingActivityId'];
        }

        return $model;
    }
}
