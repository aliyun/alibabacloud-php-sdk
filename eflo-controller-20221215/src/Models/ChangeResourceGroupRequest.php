<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description System-defined parameter. Value: **ChangeResourceGroup**.
     *
     * This parameter is required.
     *
     * @example rg-aekzyqdwnfabx6q
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description $.parameters[1].schema.example
     *
     * This parameter is required.
     *
     * @example i118099391667548921125
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Resource Group Change
     *
     * This parameter is required.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description $.parameters[3].schema.enumValueTitles
     *
     * @example Node
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
