<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $snapshotConfig;

    /**
     * @var string
     */
    public $streamId;
    protected $_name = [
        'deviceId'       => 'DeviceId',
        'mode'           => 'Mode',
        'ownerId'        => 'OwnerId',
        'snapshotConfig' => 'SnapshotConfig',
        'streamId'       => 'StreamId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->snapshotConfig) {
            $res['SnapshotConfig'] = $this->snapshotConfig;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SnapshotConfig'])) {
            $model->snapshotConfig = $map['SnapshotConfig'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }

        return $model;
    }
}
