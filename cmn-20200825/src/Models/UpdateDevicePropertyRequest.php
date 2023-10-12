<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateDevicePropertyRequest extends Model
{
    /**
     * @example property-z50wex75a1lkx7vx
     *
     * @var string
     */
    public $devicePropertyId;

    /**
     * @description 实例ID
     *
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
     * @example 厂商型号
     *
     * @var string
     */
    public $propertyName;
    protected $_name = [
        'devicePropertyId' => 'DevicePropertyId',
        'instanceId'       => 'InstanceId',
        'propertyContent'  => 'PropertyContent',
        'propertyFormat'   => 'PropertyFormat',
        'propertyName'     => 'PropertyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devicePropertyId) {
            $res['DevicePropertyId'] = $this->devicePropertyId;
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
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDevicePropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DevicePropertyId'])) {
            $model->devicePropertyId = $map['DevicePropertyId'];
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
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }

        return $model;
    }
}
