<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateTimingSyntheticTaskShrinkRequest extends Model
{
    /**
     * @description The list of assertions.
     *
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
     * @description The custom cycle.
     *
     * @var string
     */
    public $customPeriodShrink;

    /**
     * @description The detection frequency. Valid values: 1m, 5m, 10m, 15m, 20m, 30m, 1h, 2h, 3h, 4h, 6h, 8h, 12h, and 24h.
     *
     * @example 5m
     *
     * @var string
     */
    public $frequency;

    /**
     * @description The monitoring configurations.
     *
     * @var string
     */
    public $monitorConfShrink;

    /**
     * @description The list of monitoring points.
     *
     * @var string
     */
    public $monitorsShrink;

    /**
     * @description The name of the task.
     *
     * @example AlibabaCloud DNS Task
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The list of tags.
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The ID of the synthetic monitoring task.
     *
     * @example 5308a2691f59422c8c3b7aeccxxxxxxx
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'availableAssertionsShrink' => 'AvailableAssertions',
        'commonSettingShrink'       => 'CommonSetting',
        'customPeriodShrink'        => 'CustomPeriod',
        'frequency'                 => 'Frequency',
        'monitorConfShrink'         => 'MonitorConf',
        'monitorsShrink'            => 'Monitors',
        'name'                      => 'Name',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'tagsShrink'                => 'Tags',
        'taskId'                    => 'TaskId',
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTimingSyntheticTaskShrinkRequest
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
