<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\attachLabels;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig;

class ModifyHybridMonitorTaskRequest extends Model
{
    /**
     * @var attachLabels[]
     */
    public $attachLabels;

    /**
     * @var string
     */
    public $collectInterval;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var SLSProcessConfig
     */
    public $SLSProcessConfig;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'attachLabels' => 'AttachLabels',
        'collectInterval' => 'CollectInterval',
        'description' => 'Description',
        'regionId' => 'RegionId',
        'SLSProcessConfig' => 'SLSProcessConfig',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        if (\is_array($this->attachLabels)) {
            Model::validateArray($this->attachLabels);
        }
        if (null !== $this->SLSProcessConfig) {
            $this->SLSProcessConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachLabels) {
            if (\is_array($this->attachLabels)) {
                $res['AttachLabels'] = [];
                $n1 = 0;
                foreach ($this->attachLabels as $item1) {
                    $res['AttachLabels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->collectInterval) {
            $res['CollectInterval'] = $this->collectInterval;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->SLSProcessConfig) {
            $res['SLSProcessConfig'] = null !== $this->SLSProcessConfig ? $this->SLSProcessConfig->toArray($noStream) : $this->SLSProcessConfig;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['AttachLabels'])) {
            if (!empty($map['AttachLabels'])) {
                $model->attachLabels = [];
                $n1 = 0;
                foreach ($map['AttachLabels'] as $item1) {
                    $model->attachLabels[$n1] = attachLabels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CollectInterval'])) {
            $model->collectInterval = $map['CollectInterval'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SLSProcessConfig'])) {
            $model->SLSProcessConfig = SLSProcessConfig::fromMap($map['SLSProcessConfig']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
