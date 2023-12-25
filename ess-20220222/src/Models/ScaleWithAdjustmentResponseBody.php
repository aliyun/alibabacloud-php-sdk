<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class ScaleWithAdjustmentResponseBody extends Model
{
    /**
     * @description 伸缩活动的类型。
     *
     * 当ActivityType为CapacityChange时，表示返回值ScalingActivityId对应伸缩活动仅修改伸缩组期望实例数，没有立刻执行扩缩。适用范围：期望实例数类型伸缩组。
     * @example CapacityChange
     *
     * @var string
     */
    public $activityType;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the scaling activity.
     *
     * @example asa-bp175o6f6ego3r2j****
     *
     * @var string
     */
    public $scalingActivityId;
    protected $_name = [
        'activityType'      => 'ActivityType',
        'requestId'         => 'RequestId',
        'scalingActivityId' => 'ScalingActivityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
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
     * @return ScaleWithAdjustmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityType'])) {
            $model->activityType = $map['ActivityType'];
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
