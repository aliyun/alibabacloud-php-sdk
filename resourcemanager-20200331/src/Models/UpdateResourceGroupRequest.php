<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceGroupRequest extends Model
{
    /**
     * @description The display name of the resource group.
     *
     * The name must be 1 to 50 characters in length.
     * @example project
     *
     * @var string
     */
    public $newDisplayName;

    /**
     * @description The ID of the resource group.
     *
     * You can call the [ListResourceGroups](~~158855~~) operation to obtain the ID.
     * @example rg-9gLOoK****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'newDisplayName'  => 'NewDisplayName',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
