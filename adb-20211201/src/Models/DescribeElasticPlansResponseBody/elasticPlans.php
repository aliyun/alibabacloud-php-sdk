<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlansResponseBody;

use AlibabaCloud\Dara\Model;

class elasticPlans extends Model
{
    /**
     * @var bool
     */
    public $autoScale;
    /**
     * @var string
     */
    public $elasticPlanName;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $nextScheduleTime;
    /**
     * @var string
     */
    public $resourceGroupName;
    /**
     * @var string
     */
    public $targetSize;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
