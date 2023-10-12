<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceValuesRequest extends Model
{
    /**
     * @example model
     *
     * @var string
     */
    public $attributeGroup;

    /**
     * @example vendor
     *
     * @var string
     */
    public $attributeKeyword;

    /**
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @example 网络形态
     *
     * @var string
     */
    public $deviceFormName;

    /**
     * @description 实例ID
     *
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'attributeGroup'   => 'AttributeGroup',
        'attributeKeyword' => 'AttributeKeyword',
        'deviceFormId'     => 'DeviceFormId',
        'deviceFormName'   => 'DeviceFormName',
        'instanceId'       => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeGroup) {
            $res['AttributeGroup'] = $this->attributeGroup;
        }
        if (null !== $this->attributeKeyword) {
            $res['AttributeKeyword'] = $this->attributeKeyword;
        }
        if (null !== $this->deviceFormId) {
            $res['DeviceFormId'] = $this->deviceFormId;
        }
        if (null !== $this->deviceFormName) {
            $res['DeviceFormName'] = $this->deviceFormName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceValuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeGroup'])) {
            $model->attributeGroup = $map['AttributeGroup'];
        }
        if (isset($map['AttributeKeyword'])) {
            $model->attributeKeyword = $map['AttributeKeyword'];
        }
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['DeviceFormName'])) {
            $model->deviceFormName = $map['DeviceFormName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
