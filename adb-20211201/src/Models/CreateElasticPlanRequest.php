<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateElasticPlanRequest extends Model
{
    /**
     * @description Specifies whether to enable **Proportional Default Scaling for EIUs**.
     *
     * Valid values:
     *
     *   true: enables Proportional Default Scaling for EIUs. If you enable Proportional Default Scaling, storage resources are scaled along with computing resources, and the TargetSize and CronExpression parameters are not supported.
     *
     *   false: does not enable Proportional Default Scaling for EIUs.
     *
     * > *   This parameter is required if the Type parameter is set to WORKER. This parameter is not required if the Type parameter is set to EXECUTOR.
     * > *   You can enable Proportional Default Scaling for EIUs for only a single scaling plan of a cluster.
     * @example false
     *
     * @var bool
     */
    public $autoScale;

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
     * >  You can call the [DescribeDBClusters](~~454250~~) operation to query the ID of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     * @example amv-wz9509beptiz****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the scaling plan.
     *
     * >  The name must be 2 to 30 characters in length, and can contain letters, digits, and underscores (\_). It must start with a letter.
     * @example test
     *
     * @var string
     */
    public $elasticPlanName;

    /**
     * @description Specifies whether to immediately enable the scaling plan after the scaling plan is created.
     *
     * Valid values:
     *
     *   true: immediately enables the scaling plan.
     *   false: does not immediately enable the scaling plan.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

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
     * @description The name of the resource group.
     *
     * > *   This parameter is required if you want to create a scaling plan that uses interactive resource groups. This parameter is not required if you want to create a scaling plan that uses elastic I/O units (EIUs).
     * > *   You can call the [DescribeDBResourceGroup](~~459446~~) operation to query the name of a resource group within a specific cluster.
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

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

    /**
     * @description The type of the scaling plan.
     *
     * Valid values:
     *
     *   EXECUTOR: interactive resource groups, which fall into the computing resource category.
     *   WORKER: EIUs.
     *
     * @example EXECUTOR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoScale'         => 'AutoScale',
        'cronExpression'    => 'CronExpression',
        'DBClusterId'       => 'DBClusterId',
        'elasticPlanName'   => 'ElasticPlanName',
        'enabled'           => 'Enabled',
        'endTime'           => 'EndTime',
        'resourceGroupName' => 'ResourceGroupName',
        'startTime'         => 'StartTime',
        'targetSize'        => 'TargetSize',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoScale) {
            $res['AutoScale'] = $this->autoScale;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->targetSize) {
            $res['TargetSize'] = $this->targetSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateElasticPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoScale'])) {
            $model->autoScale = $map['AutoScale'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TargetSize'])) {
            $model->targetSize = $map['TargetSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
