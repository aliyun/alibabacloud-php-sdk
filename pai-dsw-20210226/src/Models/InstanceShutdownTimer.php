<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class InstanceShutdownTimer extends Model
{
    /**
     * @description 定时关机修改时间
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 定时关机创建时间
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 定时关机时间
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @description 多少毫秒后定时关机（如果设定可以覆盖ScheduleTime）
     *
     * @var int
     */
    public $ttlInMillis;
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'instanceId'      => 'InstanceId',
        'scheduleTime'    => 'ScheduleTime',
        'ttlInMillis'     => 'TtlInMillis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->ttlInMillis) {
            $res['TtlInMillis'] = $this->ttlInMillis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstanceShutdownTimer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['TtlInMillis'])) {
            $model->ttlInMillis = $map['TtlInMillis'];
        }

        return $model;
    }
}
