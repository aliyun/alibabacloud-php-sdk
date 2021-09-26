<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSystemAlarmsResponseBody;

use AlibabaCloud\Tea\Model;

class alarms extends Model
{
    /**
     * @var int
     */
    public $readMark;

    /**
     * @var string
     */
    public $alarmDetail;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var int
     */
    public $alarmId;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'readMark'    => 'ReadMark',
        'alarmDetail' => 'AlarmDetail',
        'alarmType'   => 'AlarmType',
        'alarmId'     => 'AlarmId',
        'createTime'  => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readMark) {
            $res['ReadMark'] = $this->readMark;
        }
        if (null !== $this->alarmDetail) {
            $res['AlarmDetail'] = $this->alarmDetail;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadMark'])) {
            $model->readMark = $map['ReadMark'];
        }
        if (isset($map['AlarmDetail'])) {
            $model->alarmDetail = $map['AlarmDetail'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
