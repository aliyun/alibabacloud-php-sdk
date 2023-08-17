<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticDailyPlanResponseBody;

use AlibabaCloud\Tea\Model;

class elasticDailyPlanList extends Model
{
    /**
     * @description The start date of the current-day scaling plan. The date is in the yyyy-MM-dd format.
     *
     * @example 2022-12-02
     *
     * @var string
     */
    public $day;

    /**
     * @description The number of nodes involved in the scaling plan.
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
     * @description The type of the scaling plan. Default value: executorcombineworker. Valid values:
     *
     *   **worker**: scales only elastic I/O resources.
     *   **executor**: scales only computing resources.
     *   **executorcombineworker**: scales both elastic I/O resources and computing resources by proportion.
     *
     * @example worker
     *
     * @var string
     */
    public $elasticPlanType;

    /**
     * @description The resource specifications that can be scaled up by the scaling plan. Default value: 8 Core 64 GB. Valid values:
     *
     *   8 Core 64 GB
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
     * @description The actual restoration time. The time is in the yyyy-MM-dd hh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-12-02 16:00:00
     *
     * @var string
     */
    public $endTs;

    /**
     * @description The scheduled restoration time. The time is in the yyyy-MM-dd hh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-12-02 16:00:00
     *
     * @var string
     */
    public $planEndTs;

    /**
     * @description The name of the scaling plan.
     *
     * @example realtimeplan
     *
     * @var string
     */
    public $planName;

    /**
     * @description The scheduled scale-up time. The time is in the yyyy-MM-dd hh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-12-02 15:00:00
     *
     * @var string
     */
    public $planStartTs;

    /**
     * @description The name of the resource group.
     *
     * @example test
     *
     * @var string
     */
    public $resourcePoolName;

    /**
     * @description The actual scale-up time. The time is in the yyyy-MM-dd hh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-12-02 16:00:00
     *
     * @var string
     */
    public $startTs;

    /**
     * @description The execution state of the current-day scaling plan. Multiple values are separated by commas (,). Valid values:
     *
     *   **1**: The scaling plan is not executed.
     *   **2**: The scaling plan is being executed.
     *   **3**: The scaling plan is executed.
     *   **4**: The scaling plan fails to be executed.
     *
     * @example 3
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'day'                   => 'Day',
        'elasticNodeNum'        => 'ElasticNodeNum',
        'elasticPlanType'       => 'ElasticPlanType',
        'elasticPlanWorkerSpec' => 'ElasticPlanWorkerSpec',
        'endTs'                 => 'EndTs',
        'planEndTs'             => 'PlanEndTs',
        'planName'              => 'PlanName',
        'planStartTs'           => 'PlanStartTs',
        'resourcePoolName'      => 'ResourcePoolName',
        'startTs'               => 'StartTs',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->elasticNodeNum) {
            $res['ElasticNodeNum'] = $this->elasticNodeNum;
        }
        if (null !== $this->elasticPlanType) {
            $res['ElasticPlanType'] = $this->elasticPlanType;
        }
        if (null !== $this->elasticPlanWorkerSpec) {
            $res['ElasticPlanWorkerSpec'] = $this->elasticPlanWorkerSpec;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->planEndTs) {
            $res['PlanEndTs'] = $this->planEndTs;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->planStartTs) {
            $res['PlanStartTs'] = $this->planStartTs;
        }
        if (null !== $this->resourcePoolName) {
            $res['ResourcePoolName'] = $this->resourcePoolName;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticDailyPlanList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['ElasticNodeNum'])) {
            $model->elasticNodeNum = $map['ElasticNodeNum'];
        }
        if (isset($map['ElasticPlanType'])) {
            $model->elasticPlanType = $map['ElasticPlanType'];
        }
        if (isset($map['ElasticPlanWorkerSpec'])) {
            $model->elasticPlanWorkerSpec = $map['ElasticPlanWorkerSpec'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['PlanEndTs'])) {
            $model->planEndTs = $map['PlanEndTs'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['PlanStartTs'])) {
            $model->planStartTs = $map['PlanStartTs'];
        }
        if (isset($map['ResourcePoolName'])) {
            $model->resourcePoolName = $map['ResourcePoolName'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
