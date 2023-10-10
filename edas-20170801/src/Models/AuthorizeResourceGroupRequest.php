<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the resource group. You can call the ListResourceGroup operation to query the resource group ID. For more information, see [ListResourceGroup](~~62055~~).
     *
     * You can specify multiple resource group IDs. Separate multiple resource group IDs with semicolons (;).
     * @example 461;462
     *
     * @var string
     */
    public $resourceGroupIds;

    /**
     * @description The ID of the RAM user to be authorized.
     *
     * @example test@13333********
     *
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'resourceGroupIds' => 'ResourceGroupIds',
        'targetUserId'     => 'TargetUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupIds'])) {
            $model->resourceGroupIds = $map['ResourceGroupIds'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
