<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class RunApplicationActionRequest extends Model
{
    /**
     * @description The name of the action. Valid values:
     *
     *   start
     *   stop
     *   config
     *   restart
     *   refresh_queues
     *   refresh_labels
     *
     * This parameter is required.
     * @example start
     *
     * @var string
     */
    public $actionName;

    /**
     * @description The number of applications in each batch.
     *
     * @example 1
     *
     * @var int
     */
    public $batchSize;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example C-C95F0A39D8FF****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The operation object.
     *
     * This parameter is required.
     * @var ComponentInstanceSelector
     */
    public $componentInstanceSelector;

    /**
     * @description The description of the execution.
     *
     * @example 运行描述
     *
     * @var string
     */
    public $description;

    /**
     * @description The execution policy. Valid values:
     *
     *   FAILED_BLOCK: The system stops the execution if the execution fails.
     *   FAILED_CONTINUE: The system continues the execution if the execution fails.
     *
     * @example FAILED_CONTINUE
     *
     * @var string
     */
    public $executeStrategy;

    /**
     * @description The interval for rolling execution. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $interval;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to enable rolling execution.
     *
     * @example true
     *
     * @var bool
     */
    public $rollingExecute;
    protected $_name = [
        'actionName'                => 'ActionName',
        'batchSize'                 => 'BatchSize',
        'clusterId'                 => 'ClusterId',
        'componentInstanceSelector' => 'ComponentInstanceSelector',
        'description'               => 'Description',
        'executeStrategy'           => 'ExecuteStrategy',
        'interval'                  => 'Interval',
        'regionId'                  => 'RegionId',
        'rollingExecute'            => 'RollingExecute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->componentInstanceSelector) {
            $res['ComponentInstanceSelector'] = null !== $this->componentInstanceSelector ? $this->componentInstanceSelector->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executeStrategy) {
            $res['ExecuteStrategy'] = $this->executeStrategy;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rollingExecute) {
            $res['RollingExecute'] = $this->rollingExecute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunApplicationActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComponentInstanceSelector'])) {
            $model->componentInstanceSelector = ComponentInstanceSelector::fromMap($map['ComponentInstanceSelector']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecuteStrategy'])) {
            $model->executeStrategy = $map['ExecuteStrategy'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RollingExecute'])) {
            $model->rollingExecute = $map['RollingExecute'];
        }

        return $model;
    }
}
