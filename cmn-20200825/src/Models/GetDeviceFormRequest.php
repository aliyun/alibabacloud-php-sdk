<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceFormRequest extends Model
{
    /**
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'deviceFormId' => 'DeviceFormId',
        'instanceId'   => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceFormId) {
            $res['DeviceFormId'] = $this->deviceFormId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceFormRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
