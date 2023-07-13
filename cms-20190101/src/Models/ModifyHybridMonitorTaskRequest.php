<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\attachLabels;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig;
use AlibabaCloud\Tea\Model;

class ModifyHybridMonitorTaskRequest extends Model
{
    /**
     * @var attachLabels[]
     */
    public $attachLabels;

    /**
     * @description The value of the key that is used to filter logs imported from Log Service.
     *
     * @example 15
     *
     * @var string
     */
    public $collectInterval;

    /**
     * @description The operation that you want to perform. Set the value to **ModifyHybridMonitorTask**.
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description None.
     *
     * @var SLSProcessConfig
     */
    public $SLSProcessConfig;

    /**
     * @description The tag value of the metric.
     *
     * @example 36****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example SLS_task
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'attachLabels'     => 'AttachLabels',
        'collectInterval'  => 'CollectInterval',
        'description'      => 'Description',
        'regionId'         => 'RegionId',
        'SLSProcessConfig' => 'SLSProcessConfig',
        'taskId'           => 'TaskId',
        'taskName'         => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachLabels) {
            $res['AttachLabels'] = [];
            if (null !== $this->attachLabels && \is_array($this->attachLabels)) {
                $n = 0;
                foreach ($this->attachLabels as $item) {
                    $res['AttachLabels'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['SLSProcessConfig'] = null !== $this->SLSProcessConfig ? $this->SLSProcessConfig->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHybridMonitorTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachLabels'])) {
            if (!empty($map['AttachLabels'])) {
                $model->attachLabels = [];
                $n                   = 0;
                foreach ($map['AttachLabels'] as $item) {
                    $model->attachLabels[$n++] = null !== $item ? attachLabels::fromMap($item) : $item;
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
