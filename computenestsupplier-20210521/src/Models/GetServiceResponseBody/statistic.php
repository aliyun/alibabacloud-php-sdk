<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @var int
     */
    public $accumulativeInstanceCount;

    /**
     * @var float
     */
    public $accumulativePocAmount;

    /**
     * @var int
     */
    public $accumulativeUserCount;

    /**
     * @var float
     */
    public $averagePocAmount;

    /**
     * @var float
     */
    public $averagePocDuration;

    /**
     * @var float
     */
    public $averagePocUnitAmount;

    /**
     * @var int
     */
    public $deployedServiceInstanceCount;

    /**
     * @var int
     */
    public $deployedUserCount;

    /**
     * @var int
     */
    public $submittedUsageCount;
    protected $_name = [
        'accumulativeInstanceCount'    => 'AccumulativeInstanceCount',
        'accumulativePocAmount'        => 'AccumulativePocAmount',
        'accumulativeUserCount'        => 'AccumulativeUserCount',
        'averagePocAmount'             => 'AveragePocAmount',
        'averagePocDuration'           => 'AveragePocDuration',
        'averagePocUnitAmount'         => 'AveragePocUnitAmount',
        'deployedServiceInstanceCount' => 'DeployedServiceInstanceCount',
        'deployedUserCount'            => 'DeployedUserCount',
        'submittedUsageCount'          => 'SubmittedUsageCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accumulativeInstanceCount) {
            $res['AccumulativeInstanceCount'] = $this->accumulativeInstanceCount;
        }
        if (null !== $this->accumulativePocAmount) {
            $res['AccumulativePocAmount'] = $this->accumulativePocAmount;
        }
        if (null !== $this->accumulativeUserCount) {
            $res['AccumulativeUserCount'] = $this->accumulativeUserCount;
        }
        if (null !== $this->averagePocAmount) {
            $res['AveragePocAmount'] = $this->averagePocAmount;
        }
        if (null !== $this->averagePocDuration) {
            $res['AveragePocDuration'] = $this->averagePocDuration;
        }
        if (null !== $this->averagePocUnitAmount) {
            $res['AveragePocUnitAmount'] = $this->averagePocUnitAmount;
        }
        if (null !== $this->deployedServiceInstanceCount) {
            $res['DeployedServiceInstanceCount'] = $this->deployedServiceInstanceCount;
        }
        if (null !== $this->deployedUserCount) {
            $res['DeployedUserCount'] = $this->deployedUserCount;
        }
        if (null !== $this->submittedUsageCount) {
            $res['SubmittedUsageCount'] = $this->submittedUsageCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccumulativeInstanceCount'])) {
            $model->accumulativeInstanceCount = $map['AccumulativeInstanceCount'];
        }
        if (isset($map['AccumulativePocAmount'])) {
            $model->accumulativePocAmount = $map['AccumulativePocAmount'];
        }
        if (isset($map['AccumulativeUserCount'])) {
            $model->accumulativeUserCount = $map['AccumulativeUserCount'];
        }
        if (isset($map['AveragePocAmount'])) {
            $model->averagePocAmount = $map['AveragePocAmount'];
        }
        if (isset($map['AveragePocDuration'])) {
            $model->averagePocDuration = $map['AveragePocDuration'];
        }
        if (isset($map['AveragePocUnitAmount'])) {
            $model->averagePocUnitAmount = $map['AveragePocUnitAmount'];
        }
        if (isset($map['DeployedServiceInstanceCount'])) {
            $model->deployedServiceInstanceCount = $map['DeployedServiceInstanceCount'];
        }
        if (isset($map['DeployedUserCount'])) {
            $model->deployedUserCount = $map['DeployedUserCount'];
        }
        if (isset($map['SubmittedUsageCount'])) {
            $model->submittedUsageCount = $map['SubmittedUsageCount'];
        }

        return $model;
    }
}
