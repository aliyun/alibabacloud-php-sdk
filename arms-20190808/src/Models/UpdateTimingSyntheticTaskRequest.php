<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\availableAssertions;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\commonSetting;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\customPeriod;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\monitorConf;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\monitors;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\tags;
use AlibabaCloud\Tea\Model;

class UpdateTimingSyntheticTaskRequest extends Model
{
    /**
     * @description The list of assertions.
     *
     * @var availableAssertions[]
     */
    public $availableAssertions;

    /**
     * @description The general settings.
     *
     * @var commonSetting
     */
    public $commonSetting;

    /**
     * @description The custom cycle.
     *
     * @var customPeriod
     */
    public $customPeriod;

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
     * @var monitorConf
     */
    public $monitorConf;

    /**
     * @description The list of monitoring points.
     *
     * @var monitors[]
     */
    public $monitors;

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
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the synthetic monitoring task.
     *
     * @example 5308a2691f59422c8c3b7aeccxxxxxxx
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'availableAssertions' => 'AvailableAssertions',
        'commonSetting'       => 'CommonSetting',
        'customPeriod'        => 'CustomPeriod',
        'frequency'           => 'Frequency',
        'monitorConf'         => 'MonitorConf',
        'monitors'            => 'Monitors',
        'name'                => 'Name',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'tags'                => 'Tags',
        'taskId'              => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAssertions) {
            $res['AvailableAssertions'] = [];
            if (null !== $this->availableAssertions && \is_array($this->availableAssertions)) {
                $n = 0;
                foreach ($this->availableAssertions as $item) {
                    $res['AvailableAssertions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->commonSetting) {
            $res['CommonSetting'] = null !== $this->commonSetting ? $this->commonSetting->toMap() : null;
        }
        if (null !== $this->customPeriod) {
            $res['CustomPeriod'] = null !== $this->customPeriod ? $this->customPeriod->toMap() : null;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->monitorConf) {
            $res['MonitorConf'] = null !== $this->monitorConf ? $this->monitorConf->toMap() : null;
        }
        if (null !== $this->monitors) {
            $res['Monitors'] = [];
            if (null !== $this->monitors && \is_array($this->monitors)) {
                $n = 0;
                foreach ($this->monitors as $item) {
                    $res['Monitors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTimingSyntheticTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAssertions'])) {
            if (!empty($map['AvailableAssertions'])) {
                $model->availableAssertions = [];
                $n                          = 0;
                foreach ($map['AvailableAssertions'] as $item) {
                    $model->availableAssertions[$n++] = null !== $item ? availableAssertions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CommonSetting'])) {
            $model->commonSetting = commonSetting::fromMap($map['CommonSetting']);
        }
        if (isset($map['CustomPeriod'])) {
            $model->customPeriod = customPeriod::fromMap($map['CustomPeriod']);
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['MonitorConf'])) {
            $model->monitorConf = monitorConf::fromMap($map['MonitorConf']);
        }
        if (isset($map['Monitors'])) {
            if (!empty($map['Monitors'])) {
                $model->monitors = [];
                $n               = 0;
                foreach ($map['Monitors'] as $item) {
                    $model->monitors[$n++] = null !== $item ? monitors::fromMap($item) : $item;
                }
            }
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
