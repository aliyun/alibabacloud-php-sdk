<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceChannelsResponseBody;

use AlibabaCloud\Dara\Model;

class channels extends Model
{
    /**
     * @var int
     */
    public $channelId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceStatus;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $streamStatus;
    protected $_name = [
        'channelId' => 'ChannelId',
        'deviceId' => 'DeviceId',
        'deviceStatus' => 'DeviceStatus',
        'gbId' => 'GbId',
        'name' => 'Name',
        'params' => 'Params',
        'streamId' => 'StreamId',
        'streamStatus' => 'StreamStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }

        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }

        if (null !== $this->streamStatus) {
            $res['StreamStatus'] = $this->streamStatus;
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }

        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }

        if (isset($map['StreamStatus'])) {
            $model->streamStatus = $map['StreamStatus'];
        }

        return $model;
    }
}
