<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $targetUserId;

    /**
     * @var string
     */
    public $resourceGroupIds;
    protected $_name = [
        'targetUserId'     => 'TargetUserId',
        'resourceGroupIds' => 'ResourceGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
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
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }
        if (isset($map['ResourceGroupIds'])) {
            $model->resourceGroupIds = $map['ResourceGroupIds'];
        }

        return $model;
    }
}
