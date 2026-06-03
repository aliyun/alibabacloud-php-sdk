<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSystemAlarmsResponseBody;

use AlibabaCloud\Dara\Model;

class alarms extends Model
{
    /**
     * @var string
     */
    public $alarmDetail;

    /**
     * @var int
     */
    public $alarmId;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $readMark;
    protected $_name = [
        'alarmDetail' => 'AlarmDetail',
        'alarmId' => 'AlarmId',
        'alarmType' => 'AlarmType',
        'createTime' => 'CreateTime',
        'readMark' => 'ReadMark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmDetail) {
            $res['AlarmDetail'] = $this->alarmDetail;
        }

        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }

        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->readMark) {
            $res['ReadMark'] = $this->readMark;
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
        if (isset($map['AlarmDetail'])) {
            $model->alarmDetail = $map['AlarmDetail'];
        }

        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }

        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ReadMark'])) {
            $model->readMark = $map['ReadMark'];
        }

        return $model;
    }
}
