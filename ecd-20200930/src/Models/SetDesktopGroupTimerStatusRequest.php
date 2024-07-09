<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetDesktopGroupTimerStatusRequest extends Model
{
    /**
     * @description The ID of the cloud computer pool.
     *
     * This parameter is required.
     * @example dg-fgxsniu6at****
     *
     * @var string
     */
    public $desktopGroupId;

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
     * @description The status of the scheduled task.
     *
     * Valid values:
     *
     *   1: enabled
     *   2: disabled
     *   3: deleted
     *   100: unknown
     *
     * @example 1
     *
     * @var int
     */
    public $status;

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
        'desktopGroupId' => 'DesktopGroupId',
        'regionId'       => 'RegionId',
        'status'         => 'Status',
        'timerType'      => 'TimerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timerType) {
            $res['TimerType'] = $this->timerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDesktopGroupTimerStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimerType'])) {
            $model->timerType = $map['TimerType'];
        }

        return $model;
    }
}
