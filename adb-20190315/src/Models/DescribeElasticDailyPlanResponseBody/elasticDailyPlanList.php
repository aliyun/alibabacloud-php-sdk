<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticDailyPlanResponseBody;

use AlibabaCloud\Tea\Model;

class elasticDailyPlanList extends Model
{
    /**
     * @var string
     */
    public $day;

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
    public $planEndTs;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planStartTs;

    /**
     * @var string
     */
    public $resourcePoolName;

    /**
     * @var string
     */
    public $startTs;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'day'              => 'Day',
        'elasticNodeNum'   => 'ElasticNodeNum',
        'endTs'            => 'EndTs',
        'planEndTs'        => 'PlanEndTs',
        'planName'         => 'PlanName',
        'planStartTs'      => 'PlanStartTs',
        'resourcePoolName' => 'ResourcePoolName',
        'startTs'          => 'StartTs',
        'status'           => 'Status',
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
