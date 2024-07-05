<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindParentPlatformDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example 348*****380-cn-qingdao
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example some error
     *
     * @var string
     */
    public $error;

    /**
     * @example 361*****212-cn-qingdao
     *
     * @var string
     */
    public $parentPlatformId;
    protected $_name = [
        'deviceId'         => 'DeviceId',
        'error'            => 'Error',
        'parentPlatformId' => 'ParentPlatformId',
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
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->parentPlatformId) {
            $res['ParentPlatformId'] = $this->parentPlatformId;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['ParentPlatformId'])) {
            $model->parentPlatformId = $map['ParentPlatformId'];
        }

        return $model;
    }
}
