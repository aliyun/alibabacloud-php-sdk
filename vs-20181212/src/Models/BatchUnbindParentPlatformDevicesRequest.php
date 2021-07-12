<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class BatchUnbindParentPlatformDevicesRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $parentPlatformId;

    /**
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'ownerId'          => 'OwnerId',
        'parentPlatformId' => 'ParentPlatformId',
        'deviceId'         => 'DeviceId',
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
        if (null !== $this->parentPlatformId) {
            $res['ParentPlatformId'] = $this->parentPlatformId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUnbindParentPlatformDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParentPlatformId'])) {
            $model->parentPlatformId = $map['ParentPlatformId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        return $model;
    }
}
