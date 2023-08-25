<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyElasticPlanRequest extends Model
{
    /**
     * @description A CORN expression that specifies the scaling cycle and time for the scaling plan.
     *
     * @example 0 20 14 * * ?
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description The ID of the cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the ID of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     * @example amv-wz9509beptiz****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the scaling plan.
     *
     * >  You can call the [DescribeElasticPlans](~~601334~~) operation to query the name of a scaling plan of a specific cluster.
     * @example test
     *
     * @var string
     */
    public $elasticPlanName;

    /**
     * @description The time to end the scaling plan.
     *
     * >  Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2025-01-01T12:01:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time to start the scaling plan.
     *
     * >  Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2022-01-01T12:01:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The amount of elastic resources after scaling.
     *
     * > *   This parameter is not required only if the resource group uses **EIUs** and **Proportional Default Scaling for EIUs** is enabled.
     * > *   You can call the [DescribeElasticPlanSpecifications](~~601278~~) operation to query the specifications that are supported for scaling plans.
     * @example 32ACU
     *
     * @var string
     */
    public $targetSize;
    protected $_name = [
        'cronExpression'  => 'CronExpression',
        'DBClusterId'     => 'DBClusterId',
        'elasticPlanName' => 'ElasticPlanName',
        'endTime'         => 'EndTime',
        'startTime'       => 'StartTime',
        'targetSize'      => 'TargetSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->targetSize) {
            $res['TargetSize'] = $this->targetSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyElasticPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TargetSize'])) {
            $model->targetSize = $map['TargetSize'];
        }

        return $model;
    }
}
