<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceAlarmRequest extends Model
{
    /**
     * @var int
     */
    public $alarm;

    /**
     * @var int
     */
    public $channelId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $objectType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $subAlarm;
    protected $_name = [
        'alarm'      => 'Alarm',
        'channelId'  => 'ChannelId',
        'endTime'    => 'EndTime',
        'expire'     => 'Expire',
        'id'         => 'Id',
        'objectType' => 'ObjectType',
        'ownerId'    => 'OwnerId',
        'startTime'  => 'StartTime',
        'subAlarm'   => 'SubAlarm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarm) {
            $res['Alarm'] = $this->alarm;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subAlarm) {
            $res['SubAlarm'] = $this->subAlarm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarm'])) {
            $model->alarm = $map['Alarm'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubAlarm'])) {
            $model->subAlarm = $map['SubAlarm'];
        }

        return $model;
    }
}
