<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\availableAssertions;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\commonSetting;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\customPeriod;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitors;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\tags;

class data extends Model
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
     * @var string
     */
    public $frequency;

    /**
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
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskType;
    protected $_name = [
        'availableAssertions' => 'AvailableAssertions',
        'commonSetting' => 'CommonSetting',
        'customPeriod' => 'CustomPeriod',
        'frequency' => 'Frequency',
        'monitorCategory' => 'MonitorCategory',
        'monitorConf' => 'MonitorConf',
        'monitors' => 'Monitors',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (\is_array($this->availableAssertions)) {
            Model::validateArray($this->availableAssertions);
        }
        if (null !== $this->commonSetting) {
            $this->commonSetting->validate();
        }
        if (null !== $this->customPeriod) {
            $this->customPeriod->validate();
        }
        if (null !== $this->monitorConf) {
            $this->monitorConf->validate();
        }
        if (\is_array($this->monitors)) {
            Model::validateArray($this->monitors);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableAssertions) {
            if (\is_array($this->availableAssertions)) {
                $res['AvailableAssertions'] = [];
                $n1 = 0;
                foreach ($this->availableAssertions as $item1) {
                    $res['AvailableAssertions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->commonSetting) {
            $res['CommonSetting'] = null !== $this->commonSetting ? $this->commonSetting->toArray($noStream) : $this->commonSetting;
        }

        if (null !== $this->customPeriod) {
            $res['CustomPeriod'] = null !== $this->customPeriod ? $this->customPeriod->toArray($noStream) : $this->customPeriod;
        }

        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }

        if (null !== $this->monitorCategory) {
            $res['MonitorCategory'] = $this->monitorCategory;
        }

        if (null !== $this->monitorConf) {
            $res['MonitorConf'] = null !== $this->monitorConf ? $this->monitorConf->toArray($noStream) : $this->monitorConf;
        }

        if (null !== $this->monitors) {
            if (\is_array($this->monitors)) {
                $res['Monitors'] = [];
                $n1 = 0;
                foreach ($this->monitors as $item1) {
                    $res['Monitors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAssertions'])) {
            if (!empty($map['AvailableAssertions'])) {
                $model->availableAssertions = [];
                $n1 = 0;
                foreach ($map['AvailableAssertions'] as $item1) {
                    $model->availableAssertions[$n1] = availableAssertions::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Monitors'] as $item1) {
                    $model->monitors[$n1] = monitors::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
