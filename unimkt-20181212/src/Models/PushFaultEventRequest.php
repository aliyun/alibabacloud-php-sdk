<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class PushFaultEventRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $faultType;

    /**
     * @var string
     */
    public $faultComment;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'channelId'    => 'ChannelId',
        'deviceSn'     => 'DeviceSn',
        'type'         => 'Type',
        'faultType'    => 'FaultType',
        'faultComment' => 'FaultComment',
        'time'         => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->faultType) {
            $res['FaultType'] = $this->faultType;
        }
        if (null !== $this->faultComment) {
            $res['FaultComment'] = $this->faultComment;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushFaultEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['FaultType'])) {
            $model->faultType = $map['FaultType'];
        }
        if (isset($map['FaultComment'])) {
            $model->faultComment = $map['FaultComment'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
