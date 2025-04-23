<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaResponseBody\data\subQuotaInfoList;

use AlibabaCloud\Dara\Model;

class scheduleInfo extends Model
{
    /**
     * @var string
     */
    public $currPlan;

    /**
     * @var string
     */
    public $currTime;

    /**
     * @var string
     */
    public $nextPlan;

    /**
     * @var string
     */
    public $nextTime;

    /**
     * @var string
     */
    public $oncePlan;

    /**
     * @var string
     */
    public $onceTime;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'currPlan' => 'currPlan',
        'currTime' => 'currTime',
        'nextPlan' => 'nextPlan',
        'nextTime' => 'nextTime',
        'oncePlan' => 'oncePlan',
        'onceTime' => 'onceTime',
        'operatorName' => 'operatorName',
        'timezone' => 'timezone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
