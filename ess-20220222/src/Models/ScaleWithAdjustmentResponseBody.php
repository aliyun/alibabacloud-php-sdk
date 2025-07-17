<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentResponseBody\planResult;
use AlibabaCloud\Tea\Model;

class ScaleWithAdjustmentResponseBody extends Model
{
    /**
     * @description The type of the scaling activity.
     *
     * If `ActivityType` is set to `CapacityChange`, only the expected number of instances is changed during the scaling activity specified by ScalingActivityId and no scale-out is triggered.
     *
     * This parameter is applicable to only scaling groups that have an expected number of instances.
     *
     * @example CapacityChange
     *
     * @var string
     */
    public $activityType;

    /**
     * @var planResult
     */
    public $planResult;

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
        'activityType' => 'ActivityType',
        'planResult' => 'PlanResult',
        'requestId' => 'RequestId',
        'scalingActivityId' => 'ScalingActivityId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }
        if (null !== $this->planResult) {
            $res['PlanResult'] = null !== $this->planResult ? $this->planResult->toMap() : null;
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
        if (isset($map['PlanResult'])) {
            $model->planResult = planResult::fromMap($map['PlanResult']);
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
