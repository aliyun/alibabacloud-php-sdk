<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class RunApplicationActionRequest extends Model
{
    /**
     * @description 操作名称。取值范围：
     * 等
     * @example start
     *
     * @var string
     */
    public $actionName;

    /**
     * @description 每批数量。
     *
     * @example 1
     *
     * @var int
     */
    public $batchSize;

    /**
     * @description 集群ID。
     *
     * @example C-C95F0A39D8FF****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 组件实例选择器。
     *
     * @var ComponentInstanceSelector
     */
    public $componentInstanceSelector;

    /**
     * @description 描述。
     *
     * @example 运行描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 运行失败策略。取值范围：
     * - FAILED_CONTINUE：失败后继续。
     * @example FAILED_CONTINUE
     *
     * @var string
     */
    public $executeStrategy;

    /**
     * @description 滚动执行间隔时间。
     *
     * @example 10
     *
     * @var int
     */
    public $interval;

    /**
     * @description 区域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 是否滚动执行。
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
