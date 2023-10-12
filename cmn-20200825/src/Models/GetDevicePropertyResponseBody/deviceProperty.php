<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetDevicePropertyResponseBody;

use AlibabaCloud\Tea\Model;

class deviceProperty extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $builtIn;

    /**
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @example 网络设备
     *
     * @var string
     */
    public $deviceFormName;

    /**
     * @example property-z50wex75a1lkx7vx
     *
     * @var string
     */
    public $devicePropertyId;

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
        'builtIn'          => 'BuiltIn',
        'deviceFormId'     => 'DeviceFormId',
        'deviceFormName'   => 'DeviceFormName',
        'devicePropertyId' => 'DevicePropertyId',
        'propertyContent'  => 'PropertyContent',
        'propertyFormat'   => 'PropertyFormat',
        'propertyKey'      => 'PropertyKey',
        'propertyName'     => 'PropertyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->builtIn) {
            $res['BuiltIn'] = $this->builtIn;
        }
        if (null !== $this->deviceFormId) {
            $res['DeviceFormId'] = $this->deviceFormId;
        }
        if (null !== $this->deviceFormName) {
            $res['DeviceFormName'] = $this->deviceFormName;
        }
        if (null !== $this->devicePropertyId) {
            $res['DevicePropertyId'] = $this->devicePropertyId;
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
     * @return deviceProperty
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuiltIn'])) {
            $model->builtIn = $map['BuiltIn'];
        }
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['DeviceFormName'])) {
            $model->deviceFormName = $map['DeviceFormName'];
        }
        if (isset($map['DevicePropertyId'])) {
            $model->devicePropertyId = $map['DevicePropertyId'];
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
