<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class scheduleInfo extends Model
{
    /**
     * @description The quota plan that takes effect based on the scheduling plan.
     *
     * @example planA
     *
     * @var string
     */
    public $currPlan;

    /**
     * @description The time when the current quota plan is scheduled.
     *
     * @example 0800
     *
     * @var string
     */
    public $currTime;

    /**
     * @description The next quota plan that will take effect based on the scheduling plan.
     *
     * @example planB
     *
     * @var string
     */
    public $nextPlan;

    /**
     * @description The time when the next quota plan is scheduled.
     *
     * @example 1700
     *
     * @var string
     */
    public $nextTime;

    /**
     * @description The quota plan that immediately takes effect. If the quota plan that immediately takes effect is different from the current quota plan, this parameter is not empty.
     *
     * @example planC
     *
     * @var string
     */
    public $oncePlan;

    /**
     * @description The time when the quota plan immediately takes effect.
     *
     * @example 1500
     *
     * @var string
     */
    public $onceTime;

    /**
     * @description The name of the operator.
     *
     * @example userA
     *
     * @var string
     */
    public $operatorName;

    /**
     * @description The time zone of the project.
     *
     * @example UTC+8
     *
     * @var string
     */
    public $timezone;
    protected $_name = [
        'currPlan'     => 'currPlan',
        'currTime'     => 'currTime',
        'nextPlan'     => 'nextPlan',
        'nextTime'     => 'nextTime',
        'oncePlan'     => 'oncePlan',
        'onceTime'     => 'onceTime',
        'operatorName' => 'operatorName',
        'timezone'     => 'timezone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currPlan) {
            $res['currPlan'] = $this->currPlan;
        }
        if (null !== $this->currTime) {
            $res['currTime'] = $this->currTime;
        }
        if (null !== $this->nextPlan) {
            $res['nextPlan'] = $this->nextPlan;
        }
        if (null !== $this->nextTime) {
            $res['nextTime'] = $this->nextTime;
        }
        if (null !== $this->oncePlan) {
            $res['oncePlan'] = $this->oncePlan;
        }
        if (null !== $this->onceTime) {
            $res['onceTime'] = $this->onceTime;
        }
        if (null !== $this->operatorName) {
            $res['operatorName'] = $this->operatorName;
        }
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currPlan'])) {
            $model->currPlan = $map['currPlan'];
        }
        if (isset($map['currTime'])) {
            $model->currTime = $map['currTime'];
        }
        if (isset($map['nextPlan'])) {
            $model->nextPlan = $map['nextPlan'];
        }
        if (isset($map['nextTime'])) {
            $model->nextTime = $map['nextTime'];
        }
        if (isset($map['oncePlan'])) {
            $model->oncePlan = $map['oncePlan'];
        }
        if (isset($map['onceTime'])) {
            $model->onceTime = $map['onceTime'];
        }
        if (isset($map['operatorName'])) {
            $model->operatorName = $map['operatorName'];
        }
        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        return $model;
    }
}
