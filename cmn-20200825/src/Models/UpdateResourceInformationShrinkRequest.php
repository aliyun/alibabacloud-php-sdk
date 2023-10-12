<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceInformationShrinkRequest extends Model
{
    /**
     * @description 信息
     *
     * @var string
     */
    public $informationShrink;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 资源属性
     *
     * @example 6510
     *
     * @var string
     */
    public $resourceAttribute;

    /**
     * @example resourceInformationId
     *
     * @var string
     */
    public $resourceInformationId;

    /**
     * @description 资源类型
     *
     * @example CMDB
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'informationShrink'     => 'Information',
        'instanceId'            => 'InstanceId',
        'resourceAttribute'     => 'ResourceAttribute',
        'resourceInformationId' => 'ResourceInformationId',
        'resourceType'          => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->informationShrink) {
            $res['Information'] = $this->informationShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceAttribute) {
            $res['ResourceAttribute'] = $this->resourceAttribute;
        }
        if (null !== $this->resourceInformationId) {
            $res['ResourceInformationId'] = $this->resourceInformationId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceInformationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Information'])) {
            $model->informationShrink = $map['Information'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceAttribute'])) {
            $model->resourceAttribute = $map['ResourceAttribute'];
        }
        if (isset($map['ResourceInformationId'])) {
            $model->resourceInformationId = $map['ResourceInformationId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
