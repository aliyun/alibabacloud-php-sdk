<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class elasticPlan extends Model
{
    /**
     * @description Indicates whether **Proportional Default Scaling for EIUs** is enabled.
     *
     * >  You can enable Proportional Default Scaling for EIUs for only a single scaling plan of a cluster.
     * @example false
     *
     * @var bool
     */
    public $autoScale;

    /**
     * @description A CORN expression that indicates the scaling cycle and time for the scaling plan.
     *
     * @example 0 20 14 * * ?
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description The name of the scaling plan.
     *
     * @example test
     *
     * @var string
     */
    public $elasticPlanName;

    /**
     * @description Indicates whether the scaling plan was enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The end time of the scaling plan.
     *
     * >  The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2025-01-01T12:01:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the resource group.
     *
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The start time of the scaling plan.
     *
     * >  The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-01-01T12:01:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The amount of elastic resources after scaling.
     *
     * @example 32ACU
     *
     * @var string
     */
    public $targetSize;

    /**
     * @description The type of the scaling plan.
     *
     * @example EXECUTOR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoScale'         => 'AutoScale',
        'cronExpression'    => 'CronExpression',
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
     * @return elasticPlan
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
