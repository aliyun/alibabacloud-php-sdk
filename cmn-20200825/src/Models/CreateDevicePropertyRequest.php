<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateDevicePropertyRequest extends Model
{
    /**
     * @example a611d038-2047-4e5b-91f2-f184c295df45
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example {   "H3C": [     "H3C S6800",     "S6850-56HF"   ],   "Huawei": [     "CE6851-48S6Q"   ] }
     *
     * @var string
     */
    public $propertyContent;

    /**
     * @example JSON
     *
     * @var string
     */
    public $propertyFormat;

    /**
     * @example device_model
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @example 厂商型号
     *
     * @var string
     */
    public $propertyName;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'deviceFormId'    => 'DeviceFormId',
        'instanceId'      => 'InstanceId',
        'propertyContent' => 'PropertyContent',
        'propertyFormat'  => 'PropertyFormat',
        'propertyKey'     => 'PropertyKey',
        'propertyName'    => 'PropertyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deviceFormId) {
            $res['DeviceFormId'] = $this->deviceFormId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->propertyContent) {
            $res['PropertyContent'] = $this->propertyContent;
        }
        if (null !== $this->propertyFormat) {
            $res['PropertyFormat'] = $this->propertyFormat;
        }
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDevicePropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PropertyContent'])) {
            $model->propertyContent = $map['PropertyContent'];
        }
        if (isset($map['PropertyFormat'])) {
            $model->propertyFormat = $map['PropertyFormat'];
        }
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }

        return $model;
    }
}
