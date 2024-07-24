<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateTimingSyntheticTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $availableAssertionsShrink;

    /**
     * @description The general settings.
     *
     * @var string
     */
    public $commonSettingShrink;

    /**
     * @var string
     */
    public $customPeriodShrink;

    /**
     * @description This parameter is required.
     *
     * @example 5m
     *
     * @var string
     */
    public $frequency;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $monitorCategory;

    /**
     * @description The monitoring configurations.
     *
     * This parameter is required.
     * @var string
     */
    public $monitorConfShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $monitorsShrink;

    /**
     * @description The name of the task.
     *
     * This parameter is required.
     * @example demo-test
     *
     * @var string
     */
    public $name;

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
     * @example xxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The type of the task. Valid values:
     *
     * This parameter is required.
     * @example 4
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'availableAssertionsShrink' => 'AvailableAssertions',
        'commonSettingShrink'       => 'CommonSetting',
        'customPeriodShrink'        => 'CustomPeriod',
        'frequency'                 => 'Frequency',
        'monitorCategory'           => 'MonitorCategory',
        'monitorConfShrink'         => 'MonitorConf',
        'monitorsShrink'            => 'Monitors',
        'name'                      => 'Name',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'tagsShrink'                => 'Tags',
        'taskType'                  => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateTimingSyntheticTaskShrinkRequest
     */
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
