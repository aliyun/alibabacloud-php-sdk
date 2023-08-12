<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\availableAssertions;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\commonSetting;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\customPeriod;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitors;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateTimingSyntheticTaskRequest extends Model
{
    /**
     * @var availableAssertions[]
     */
    public $availableAssertions;

    /**
     * @var commonSetting
     */
    public $commonSetting;

    /**
     * @var customPeriod
     */
    public $customPeriod;

    /**
     * @example 5m
     *
     * @var string
     */
    public $frequency;

    /**
     * @example 1
     *
     * @var int
     */
    public $monitorCategory;

    /**
     * @var monitorConf
     */
    public $monitorConf;

    /**
     * @var monitors[]
     */
    public $monitors;

    /**
     * @example demo-test
     *
     * @var string
     */
    public $name;

    /**
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
     * @var tags[]
     */
    public $tags;

    /**
     * @example 4
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
        'tags'                => 'Tags',
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTimingSyntheticTaskRequest
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
