<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlansResponseBody;

use AlibabaCloud\Tea\Model;

class elasticPlans extends Model
{
    /**
     * @description Indicates whether **Proportional Default Scaling for EIUs** is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $autoScale;

    /**
     * @description The name of the scaling plan.
     *
     * @example test
     *
     * @var string
     */
    public $elasticPlanName;

    /**
     * @description Indicates whether the scaling plan was immediately enabled after the plan is created. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The time when the next scheduling is performed.
     *
     * > The time is in the yyyy-MM-ddTHH:mm:ssZ format.
     * @example 2022-01-01T12:01:00Z
     *
     * @var string
     */
    public $nextScheduleTime;

    /**
     * @description The name of the resource group.
     *
     * > You can call the [DescribeDBResourceGroup](https://help.aliyun.com/document_detail/459446.html) operation to query the name of a resource group within a cluster.
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The amount of elastic resources after scaling.
     *
     * @example 32ACU
     *
     * @var string
     */
    public $targetSize;

    /**
     * @description The type of the scaling plan. Valid values:
     *
     *   EXECUTOR: interactive resource group.
     *   WORKER: EIU.
     *
     * @example EXECUTOR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoScale'         => 'AutoScale',
        'elasticPlanName'   => 'ElasticPlanName',
        'enabled'           => 'Enabled',
        'nextScheduleTime'  => 'NextScheduleTime',
        'resourceGroupName' => 'ResourceGroupName',
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
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->nextScheduleTime) {
            $res['NextScheduleTime'] = $this->nextScheduleTime;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
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
     * @return elasticPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoScale'])) {
            $model->autoScale = $map['AutoScale'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['NextScheduleTime'])) {
            $model->nextScheduleTime = $map['NextScheduleTime'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
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
