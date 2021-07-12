<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindParentPlatformDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $parentPlatformId;

    /**
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'error'            => 'Error',
        'parentPlatformId' => 'ParentPlatformId',
        'deviceId'         => 'DeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
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
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
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
