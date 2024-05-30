<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateBaselineRequest\overtimeSettings;
use AlibabaCloud\Tea\Model;

class CreateBaselineRequest extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $alertMarginThreshold;

    /**
     * @description This parameter is required.
     *
     * @example BaselineName
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description This parameter is required.
     *
     * @example DAILY
     *
     * @var string
     */
    public $baselineType;

    /**
     * @example 210001233239,210001236482
     *
     * @var string
     */
    public $nodeIds;

    /**
     * @description This parameter is required.
     *
     * @var overtimeSettings[]
     */
    public $overtimeSettings;

    /**
     * @description This parameter is required.
     *
     * @example 1000000000001
     *
     * @var string
     */
    public $owner;

    /**
     * @description This parameter is required.
     *
     * @example 1,3,5,7,8
     *
     * @var int
     */
    public $priority;

    /**
     * @description This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'alertMarginThreshold' => 'AlertMarginThreshold',
        'baselineName'         => 'BaselineName',
        'baselineType'         => 'BaselineType',
        'nodeIds'              => 'NodeIds',
        'overtimeSettings'     => 'OvertimeSettings',
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
        if (null !== $this->alertMarginThreshold) {
            $res['AlertMarginThreshold'] = $this->alertMarginThreshold;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineType) {
            $res['BaselineType'] = $this->baselineType;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->overtimeSettings) {
            $res['OvertimeSettings'] = [];
            if (null !== $this->overtimeSettings && \is_array($this->overtimeSettings)) {
                $n = 0;
                foreach ($this->overtimeSettings as $item) {
                    $res['OvertimeSettings'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CreateBaselineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertMarginThreshold'])) {
            $model->alertMarginThreshold = $map['AlertMarginThreshold'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineType'])) {
            $model->baselineType = $map['BaselineType'];
        }
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }
        if (isset($map['OvertimeSettings'])) {
            if (!empty($map['OvertimeSettings'])) {
                $model->overtimeSettings = [];
                $n                       = 0;
                foreach ($map['OvertimeSettings'] as $item) {
                    $model->overtimeSettings[$n++] = null !== $item ? overtimeSettings::fromMap($item) : $item;
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
