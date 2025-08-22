<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class CreateTimingSyntheticTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $availableAssertionsShrink;

    /**
     * @var string
     */
    public $commonSettingShrink;

    /**
     * @var string
     */
    public $customPeriodShrink;

    /**
     * @var string
     */
    public $frequency;

    /**
     * @var int
     */
    public $monitorCategory;

    /**
     * @var string
     */
    public $monitorConfShrink;

    /**
     * @var string
     */
    public $monitorsShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var int
     */
    public $taskType;
    protected $_name = [
        'availableAssertionsShrink' => 'AvailableAssertions',
        'commonSettingShrink' => 'CommonSetting',
        'customPeriodShrink' => 'CustomPeriod',
        'frequency' => 'Frequency',
        'monitorCategory' => 'MonitorCategory',
        'monitorConfShrink' => 'MonitorConf',
        'monitorsShrink' => 'Monitors',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tagsShrink' => 'Tags',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableAssertionsShrink) {
            $res['AvailableAssertions'] = $this->availableAssertionsShrink;
        }

        if (null !== $this->commonSettingShrink) {
            $res['CommonSetting'] = $this->commonSettingShrink;
        }

        if (null !== $this->customPeriodShrink) {
            $res['CustomPeriod'] = $this->customPeriodShrink;
        }

        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }

        if (null !== $this->monitorCategory) {
            $res['MonitorCategory'] = $this->monitorCategory;
        }

        if (null !== $this->monitorConfShrink) {
            $res['MonitorConf'] = $this->monitorConfShrink;
        }

        if (null !== $this->monitorsShrink) {
            $res['Monitors'] = $this->monitorsShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['AvailableAssertions'])) {
            $model->availableAssertionsShrink = $map['AvailableAssertions'];
        }

        if (isset($map['CommonSetting'])) {
            $model->commonSettingShrink = $map['CommonSetting'];
        }

        if (isset($map['CustomPeriod'])) {
            $model->customPeriodShrink = $map['CustomPeriod'];
        }

        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }

        if (isset($map['MonitorCategory'])) {
            $model->monitorCategory = $map['MonitorCategory'];
        }

        if (isset($map['MonitorConf'])) {
            $model->monitorConfShrink = $map['MonitorConf'];
        }

        if (isset($map['Monitors'])) {
            $model->monitorsShrink = $map['Monitors'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
