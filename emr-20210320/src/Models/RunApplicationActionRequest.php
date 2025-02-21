<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class RunApplicationActionRequest extends Model
{
    /**
     * @var string
     */
    public $actionName;
    /**
     * @var int
     */
    public $batchSize;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var ComponentInstanceSelector
     */
    public $componentInstanceSelector;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $executeStrategy;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        if (null !== $this->componentInstanceSelector) {
            $this->componentInstanceSelector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ComponentInstanceSelector'] = null !== $this->componentInstanceSelector ? $this->componentInstanceSelector->toArray($noStream) : $this->componentInstanceSelector;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
