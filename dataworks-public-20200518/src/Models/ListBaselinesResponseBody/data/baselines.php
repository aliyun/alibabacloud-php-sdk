<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselinesResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselinesResponseBody\data\baselines\overTimeSettings;
use AlibabaCloud\Tea\Model;

class baselines extends Model
{
    /**
     * @description Indicates whether the alerting feature is enabled. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $alertEnabled;

    /**
     * @description The alert margin threshold for the baseline instance. Unit: minutes.
     *
     * @example 30
     *
     * @var int
     */
    public $alertMarginThreshold;

    /**
     * @description The baseline ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The name of the baseline.
     *
     * @example BaselineName
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description The type of the baseline. Valid values: DAILY and HOURLY.
     *
     * @example DAILY
     *
     * @var string
     */
    public $baselineType;

    /**
     * @description Indicates whether the baseline is enabled. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The settings of the committed completion time of the baseline.
     *
     * @var overTimeSettings[]
     */
    public $overTimeSettings;

    /**
     * @description The ID of the Alibaba Cloud account used by the baseline owner. Multiple IDs can be specified. The IDs are separated by commas (,).
     *
     * @example 952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The priority of the baseline. Valid values: {1,2,5,7,8}.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the workspace to which the baseline belongs.
     *
     * @example 9527
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'alertEnabled'         => 'AlertEnabled',
        'alertMarginThreshold' => 'AlertMarginThreshold',
        'baselineId'           => 'BaselineId',
        'baselineName'         => 'BaselineName',
        'baselineType'         => 'BaselineType',
        'enabled'              => 'Enabled',
        'overTimeSettings'     => 'OverTimeSettings',
        'owner'                => 'Owner',
        'priority'             => 'Priority',
        'projectId'            => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertEnabled) {
            $res['AlertEnabled'] = $this->alertEnabled;
        }
        if (null !== $this->alertMarginThreshold) {
            $res['AlertMarginThreshold'] = $this->alertMarginThreshold;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineType) {
            $res['BaselineType'] = $this->baselineType;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->overTimeSettings) {
            $res['OverTimeSettings'] = [];
            if (null !== $this->overTimeSettings && \is_array($this->overTimeSettings)) {
                $n = 0;
                foreach ($this->overTimeSettings as $item) {
                    $res['OverTimeSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertEnabled'])) {
            $model->alertEnabled = $map['AlertEnabled'];
        }
        if (isset($map['AlertMarginThreshold'])) {
            $model->alertMarginThreshold = $map['AlertMarginThreshold'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineType'])) {
            $model->baselineType = $map['BaselineType'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['OverTimeSettings'])) {
            if (!empty($map['OverTimeSettings'])) {
                $model->overTimeSettings = [];
                $n                       = 0;
                foreach ($map['OverTimeSettings'] as $item) {
                    $model->overTimeSettings[$n++] = null !== $item ? overTimeSettings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
