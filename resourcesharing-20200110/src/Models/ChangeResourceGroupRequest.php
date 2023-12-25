<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the destination resource group.
     *
     * @example rg-aek2nb47ueqk***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the resource share.
     *
     * @example rs-dz3Ek1iiO***
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The region ID of the resource share.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;
    protected $_name = [
        'resourceGroupId'  => 'ResourceGroupId',
        'resourceId'       => 'ResourceId',
        'resourceRegionId' => 'ResourceRegionId',
    ];

    public function validate()
    {
    }

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

        return $model;
    }
}
