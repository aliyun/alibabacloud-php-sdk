<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceSnapshotRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $snapshotConfig;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'deviceId'       => 'DeviceId',
        'streamId'       => 'StreamId',
        'mode'           => 'Mode',
        'snapshotConfig' => 'SnapshotConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->snapshotConfig) {
            $res['SnapshotConfig'] = $this->snapshotConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['SnapshotConfig'])) {
            $model->snapshotConfig = $map['SnapshotConfig'];
        }

        return $model;
    }
}
