<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineResponseBody\data\alertSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineResponseBody\data\overTimeSettings;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $alertEnabled;

    /**
     * @example 60
     *
     * @var int
     */
    public $alertMarginThreshold;

    /**
     * @var alertSettings[]
     */
    public $alertSettings;

    /**
     * @example 1001
     *
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @example DAILY
     *
     * @var string
     */
    public $baselineType;

    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @var int[]
     */
    public $nodeIds;

    /**
     * @var overTimeSettings[]
     */
    public $overTimeSettings;

    /**
     * @example 9527952****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'alertEnabled'         => 'AlertEnabled',
        'alertMarginThreshold' => 'AlertMarginThreshold',
        'alertSettings'        => 'AlertSettings',
        'baselineId'           => 'BaselineId',
        'baselineName'         => 'BaselineName',
        'baselineType'         => 'BaselineType',
        'enabled'              => 'Enabled',
        'nodeIds'              => 'NodeIds',
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
        if (null !== $this->alertSettings) {
            $res['AlertSettings'] = [];
            if (null !== $this->alertSettings && \is_array($this->alertSettings)) {
                $n = 0;
                foreach ($this->alertSettings as $item) {
                    $res['AlertSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
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
     * @return data
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
        if (isset($map['AlertSettings'])) {
            if (!empty($map['AlertSettings'])) {
                $model->alertSettings = [];
                $n                    = 0;
                foreach ($map['AlertSettings'] as $item) {
                    $model->alertSettings[$n++] = null !== $item ? alertSettings::fromMap($item) : $item;
                }
            }
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
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
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
