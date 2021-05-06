<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticDailyPlanResponseBody;

use AlibabaCloud\Tea\Model;

class elasticDailyPlanList extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $day;

    /**
     * @var string
     */
    public $resourcePoolName;

    /**
     * @var string
     */
    public $startTs;

    /**
     * @var string
     */
    public $planEndTs;

    /**
     * @var string
     */
    public $planStartTs;

    /**
     * @var int
     */
    public $elasticNodeNum;

    /**
     * @var string
     */
    public $endTs;

    /**
     * @var string
     */
    public $planName;
    protected $_name = [
        'status'           => 'Status',
        'day'              => 'Day',
        'resourcePoolName' => 'ResourcePoolName',
        'startTs'          => 'StartTs',
        'planEndTs'        => 'PlanEndTs',
        'planStartTs'      => 'PlanStartTs',
        'elasticNodeNum'   => 'ElasticNodeNum',
        'endTs'            => 'EndTs',
        'planName'         => 'PlanName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->resourcePoolName) {
            $res['ResourcePoolName'] = $this->resourcePoolName;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->planEndTs) {
            $res['PlanEndTs'] = $this->planEndTs;
        }
        if (null !== $this->planStartTs) {
            $res['PlanStartTs'] = $this->planStartTs;
        }
        if (null !== $this->elasticNodeNum) {
            $res['ElasticNodeNum'] = $this->elasticNodeNum;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['ResourcePoolName'])) {
            $model->resourcePoolName = $map['ResourcePoolName'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['PlanEndTs'])) {
            $model->planEndTs = $map['PlanEndTs'];
        }
        if (isset($map['PlanStartTs'])) {
            $model->planStartTs = $map['PlanStartTs'];
        }
        if (isset($map['ElasticNodeNum'])) {
            $model->elasticNodeNum = $map['ElasticNodeNum'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        return $model;
    }
}
