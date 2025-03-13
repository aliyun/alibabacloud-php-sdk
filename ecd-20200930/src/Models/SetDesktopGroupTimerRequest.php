<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetDesktopGroupTimerRequest extends Model
{
    /**
     * @description The cron expression for the scheduled task. This parameter is required when `TimerType` is set to 2, 3, or 4.
     *
     * @example 0 0 2 ? * 1-7
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description The ID of the cloud computer pool.
     *
     * This parameter is required.
     * @example dg-dbdkfmh883****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description Specifies whether to forcefully execute the scheduled task.
     *
     * @example true
     *
     * @var bool
     */
    public $force;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the disk that you want to reset.
     *
     * - resets the system disk and the user disk.
     * @example 1
     *
     * @var int
     */
    public $resetType;

    /**
     * @description The type of the scheduled task.
     *
     * Valid values:
     *
     *   1: scheduled reset
     *   2: scheduled startup
     *   3: scheduled stop
     *   4: scheduled restart
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $timerType;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'desktopGroupId' => 'DesktopGroupId',
        'force'          => 'Force',
        'regionId'       => 'RegionId',
        'resetType'      => 'ResetType',
        'timerType'      => 'TimerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->timerType) {
            $res['TimerType'] = $this->timerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDesktopGroupTimerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['TimerType'])) {
            $model->timerType = $map['TimerType'];
        }

        return $model;
    }
}
