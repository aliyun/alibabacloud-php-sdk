<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateElasticPlanRequest extends Model
{
    /**
     * @var bool
     */
    public $autoScale;
    /**
     * @var string
     */
    public $cronExpression;
    /**
     * @var string
     */
    public $DBClusterId;
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
    public $endTime;
    /**
     * @var string
     */
    public $resourceGroupName;
    /**
     * @var string
     */
    public $startTime;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
