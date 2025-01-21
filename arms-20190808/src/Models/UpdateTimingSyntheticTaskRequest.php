<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\availableAssertions;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\commonSetting;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\customPeriod;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\monitorConf;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\monitors;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\tags;

class UpdateTimingSyntheticTaskRequest extends Model
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
     * @var tags[]
     */
    public $tags;
    /**
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
                $n1                         = 0;
                foreach ($this->availableAssertions as $item1) {
                    $res['AvailableAssertions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->monitorConf) {
            $res['MonitorConf'] = null !== $this->monitorConf ? $this->monitorConf->toArray($noStream) : $this->monitorConf;
        }

        if (null !== $this->monitors) {
            if (\is_array($this->monitors)) {
                $res['Monitors'] = [];
                $n1              = 0;
                foreach ($this->monitors as $item1) {
                    $res['Monitors'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
                $n1                         = 0;
                foreach ($map['AvailableAssertions'] as $item1) {
                    $model->availableAssertions[$n1++] = availableAssertions::fromMap($item1);
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
                $n1              = 0;
                foreach ($map['Monitors'] as $item1) {
                    $model->monitors[$n1++] = monitors::fromMap($item1);
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
