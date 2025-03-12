<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @description The total number of service instances that belong to the service. The service instances that are deleted are counted.
     *
     * @example 75
     *
     * @var int
     */
    public $accumulativeInstanceCount;

    /**
     * @description The total amount consumed for trial service instances. Unit: CNY.
     *
     * @example 80.35
     *
     * @var float
     */
    public $accumulativePocAmount;

    /**
     * @description The total number of users who use the service. The historical users are counted.
     *
     * @example 60
     *
     * @var int
     */
    public $accumulativeUserCount;

    /**
     * @description The average amount consumed for trial service instances per instance. Unit: CNY.
     *
     * @example 40.17
     *
     * @var float
     */
    public $averagePocAmount;

    /**
     * @description The average duration for which trial service instances are in use. Unit: Hour.
     *
     * @example 1
     *
     * @var float
     */
    public $averagePocDuration;

    /**
     * @description The average amount consumed for trial service instances per a period of time. Unit: CNY.
     *
     * @example 167.9
     *
     * @var float
     */
    public $averagePocUnitAmount;

    /**
     * @description The number of online service instances. It means the number of service instances that are successfully deployed.
     *
     * @example 20
     *
     * @var int
     */
    public $deployedServiceInstanceCount;

    /**
     * @description The number of online users. It means the number of users who successfully deployed the service instances.
     *
     * @example 10
     *
     * @var int
     */
    public $deployedUserCount;

    /**
     * @description The number of service applications that are in the Submitted state.
     *
     * @example 10
     *
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
