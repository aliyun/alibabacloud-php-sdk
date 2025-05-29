<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindParentPlatformDevicesResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $parentPlatformId;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'error' => 'Error',
        'parentPlatformId' => 'ParentPlatformId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
