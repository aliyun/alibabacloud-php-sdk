<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\availableAssertions;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\commonSetting;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\customPeriod;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitors;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description The detection point type. 1: PC. 2: mobile device.
     *
     * @example 1
     *
     * @var int
     */
    public $monitorCategory;

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
     * @description The ID of the resource group.
     *
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description CREATING: The task is being created. RUNNING: The task is running. PARTIAL_RUNNING: The task is partially running. STOP: The task is stopped. LIMIT_STOP: The task is stopped due to quota insufficiency. EXCEPTION: The task is abnormal. DELETE: The task is deleted. DELETE_EXCEPTION: The task failed to be deleted.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the synthetic monitoring task.
     *
     * @example 5308a2691f59422c8c3b7aeccec9cd3b
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the task. Valid values:
     *
     * ICMP TCP DNS HTTP Website speed measurement File download
     * @example 5
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'availableAssertions' => 'AvailableAssertions',
        'commonSetting'       => 'CommonSetting',
        'customPeriod'        => 'CustomPeriod',
        'frequency'           => 'Frequency',
        'monitorCategory'     => 'MonitorCategory',
        'monitorConf'         => 'MonitorConf',
        'monitors'            => 'Monitors',
        'name'                => 'Name',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'status'              => 'Status',
        'tags'                => 'Tags',
        'taskId'              => 'TaskId',
        'taskType'            => 'TaskType',
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
        if (null !== $this->monitorCategory) {
            $res['MonitorCategory'] = $this->monitorCategory;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['MonitorCategory'])) {
            $model->monitorCategory = $map['MonitorCategory'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
