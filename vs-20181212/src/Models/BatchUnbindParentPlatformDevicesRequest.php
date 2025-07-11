<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class BatchUnbindParentPlatformDevicesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 348*****380-cn-qingdao
     *
     * @var string
     */
    public $deviceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example 361*****212-cn-qingdao
     *
     * @var string
     */
    public $parentPlatformId;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'ownerId' => 'OwnerId',
        'parentPlatformId' => 'ParentPlatformId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parentPlatformId) {
            $res['ParentPlatformId'] = $this->parentPlatformId;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParentPlatformId'])) {
            $model->parentPlatformId = $map['ParentPlatformId'];
        }

        return $model;
    }
}
