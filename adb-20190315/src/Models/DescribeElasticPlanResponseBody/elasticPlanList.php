<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanResponseBody;

use AlibabaCloud\Dara\Model;

class elasticPlanList extends Model
{
    /**
     * @var int
     */
    public $elasticNodeNum;

    /**
     * @var string
     */
    public $elasticPlanType;

    /**
     * @var string
     */
    public $elasticPlanWorkerSpec;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $endDay;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $monthlyRepeat;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $resourcePoolName;

    /**
     * @var string
     */
    public $startDay;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $weeklyRepeat;
    protected $_name = [
        'elasticNodeNum' => 'ElasticNodeNum',
        'elasticPlanType' => 'ElasticPlanType',
        'elasticPlanWorkerSpec' => 'ElasticPlanWorkerSpec',
        'enable' => 'Enable',
        'endDay' => 'EndDay',
        'endTime' => 'EndTime',
        'monthlyRepeat' => 'MonthlyRepeat',
        'planName' => 'PlanName',
        'resourcePoolName' => 'ResourcePoolName',
        'startDay' => 'StartDay',
        'startTime' => 'StartTime',
        'weeklyRepeat' => 'WeeklyRepeat',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticNodeNum) {
            $res['ElasticNodeNum'] = $this->elasticNodeNum;
        }

        if (null !== $this->elasticPlanType) {
            $res['ElasticPlanType'] = $this->elasticPlanType;
        }

        if (null !== $this->elasticPlanWorkerSpec) {
            $res['ElasticPlanWorkerSpec'] = $this->elasticPlanWorkerSpec;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->endDay) {
            $res['EndDay'] = $this->endDay;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->monthlyRepeat) {
            $res['MonthlyRepeat'] = $this->monthlyRepeat;
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }

        if (null !== $this->resourcePoolName) {
            $res['ResourcePoolName'] = $this->resourcePoolName;
        }

        if (null !== $this->startDay) {
            $res['StartDay'] = $this->startDay;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->weeklyRepeat) {
            $res['WeeklyRepeat'] = $this->weeklyRepeat;
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
        if (isset($map['ElasticNodeNum'])) {
            $model->elasticNodeNum = $map['ElasticNodeNum'];
        }

        if (isset($map['ElasticPlanType'])) {
            $model->elasticPlanType = $map['ElasticPlanType'];
        }

        if (isset($map['ElasticPlanWorkerSpec'])) {
            $model->elasticPlanWorkerSpec = $map['ElasticPlanWorkerSpec'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EndDay'])) {
            $model->endDay = $map['EndDay'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MonthlyRepeat'])) {
            $model->monthlyRepeat = $map['MonthlyRepeat'];
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        if (isset($map['ResourcePoolName'])) {
            $model->resourcePoolName = $map['ResourcePoolName'];
        }

        if (isset($map['StartDay'])) {
            $model->startDay = $map['StartDay'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['WeeklyRepeat'])) {
            $model->weeklyRepeat = $map['WeeklyRepeat'];
        }

        return $model;
    }
}
