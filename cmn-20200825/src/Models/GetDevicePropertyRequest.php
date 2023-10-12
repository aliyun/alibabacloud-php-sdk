<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetDevicePropertyRequest extends Model
{
    /**
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @example property-z50wex75a1lkx7vx
     *
     * @var string
     */
    public $devicePropertyId;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example device_model
     *
     * @var string
     */
    public $propertyKey;
    protected $_name = [
        'deviceFormId'     => 'DeviceFormId',
        'devicePropertyId' => 'DevicePropertyId',
        'instanceId'       => 'InstanceId',
        'propertyKey'      => 'PropertyKey',
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
        if (null !== $this->devicePropertyId) {
            $res['DevicePropertyId'] = $this->devicePropertyId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDevicePropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['DevicePropertyId'])) {
            $model->devicePropertyId = $map['DevicePropertyId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }

        return $model;
    }
}
