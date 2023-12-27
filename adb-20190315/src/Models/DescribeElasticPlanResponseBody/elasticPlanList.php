<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanResponseBody;

use AlibabaCloud\Tea\Model;

class elasticPlanList extends Model
{
    /**
     * @description The number of nodes that are involved in the scaling plan.
     *
     *   If ElasticPlanType is set to **worker**, a value of 0 or null is returned.
     *   If ElasticPlanType is set to **executorcombineworker** or **executor**, a value greater than 0 is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $elasticNodeNum;

    /**
     * @description The type of the scaling plan. Valid values:
     *
     *   **worker**: scales only elastic I/O resources.
     *   **executor**: scales only computing resources.
     *   **executorcombineworker** (default): scales both elastic I/O resources and computing resources by proportion.
     *
     * @example worker
     *
     * @var string
     */
    public $elasticPlanType;

    /**
     * @description The resource specifications that can be scaled up by the scaling plan. Valid values:
     *
     *   8 Core 64 GB (default)
     *   16 Core 64 GB
     *   32 Core 64 GB
     *   64 Core 128 GB
     *   12 Core 96 GB
     *   24 Core 96 GB
     *   52 Core 86 GB
     *
     * @example 16 Core 64 GB
     *
     * @var string
     */
    public $elasticPlanWorkerSpec;

    /**
     * @description Indicates whether the scaling plan takes effect. Default value: true. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The end date of the scaling plan. This parameter is returned only if the end date of the scaling plan is set. The date is in the yyyy-MM-dd format.
     *
     * @example 2022-12-09
     *
     * @var string
     */
    public $endDay;

    /**
     * @description The restoration time of the scaling plan. The interval between the scale-up time and the restoration time cannot be more than 24 hours. The time is in the HH:mm:ss format.
     *
     * @example 10:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $monthlyRepeat;

    /**
     * @description The name of the scaling plan.
     *
     * @example realtime
     *
     * @var string
     */
    public $planName;

    /**
     * @description The name of the resource group.
     *
     * @example USER_DEFAULT
     *
     * @var string
     */
    public $resourcePoolName;

    /**
     * @description The start date of the scaling plan. This parameter is returned only if the start date of the scaling plan is set. The date is in the yyyy-MM-dd format.
     *
     * @example 2022-12-02
     *
     * @var string
     */
    public $startDay;

    /**
     * @description The scale-up time of the scaling plan. The time is in the HH:mm:ss format.
     *
     * @example 08:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The days of the week when the scaling plan was executed. Valid values: 0 to 6, which indicate Sunday to Saturday. Multiple values are separated by commas (,).
     *
     * @example 3,4,5,6
     *
     * @var string
     */
    public $weeklyRepeat;
    protected $_name = [
        'elasticNodeNum'        => 'ElasticNodeNum',
        'elasticPlanType'       => 'ElasticPlanType',
        'elasticPlanWorkerSpec' => 'ElasticPlanWorkerSpec',
        'enable'                => 'Enable',
        'endDay'                => 'EndDay',
        'endTime'               => 'EndTime',
        'monthlyRepeat'         => 'MonthlyRepeat',
        'planName'              => 'PlanName',
        'resourcePoolName'      => 'ResourcePoolName',
        'startDay'              => 'StartDay',
        'startTime'             => 'StartTime',
        'weeklyRepeat'          => 'WeeklyRepeat',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return elasticPlanList
     */
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
