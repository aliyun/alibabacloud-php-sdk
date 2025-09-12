<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentResponseBody\planResult;

class ScaleWithAdjustmentResponseBody extends Model
{
    /**
     * @var string
     */
    public $activityType;

    /**
     * @var planResult
     */
    public $planResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scalingActivityId;
    protected $_name = [
        'activityType' => 'ActivityType',
        'planResult' => 'PlanResult',
        'requestId' => 'RequestId',
        'scalingActivityId' => 'ScalingActivityId',
    ];

    public function validate()
    {
        if (null !== $this->planResult) {
            $this->planResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }

        if (null !== $this->planResult) {
            $res['PlanResult'] = null !== $this->planResult ? $this->planResult->toArray($noStream) : $this->planResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scalingActivityId) {
            $res['ScalingActivityId'] = $this->scalingActivityId;
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
