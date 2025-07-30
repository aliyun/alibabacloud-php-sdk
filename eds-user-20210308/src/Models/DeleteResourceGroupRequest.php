<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DeleteResourceGroupRequest extends Model
{
    /**
     * @description >  The ID of the resource group that you want to delete.
     *
     *   If you also specify ResourceGroupIds, both parameters take effect.
     *
     * @example rg-aj01tck67a0szp***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description >  The IDs of the resource groups that you want to delete.
     *
     *   If you also specify ResourceGroupId, both parameters take effect.
     *
     * @var string[]
     */
    public $resourceGroupIds;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'resourceGroupIds' => 'ResourceGroupIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = $map['ResourceGroupIds'];
            }
        }

        return $model;
    }
}
