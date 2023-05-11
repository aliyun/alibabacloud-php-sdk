<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CancelAuthorizationMenuRequest extends Model
{
    /**
     * @example 0d173abb53e84c8ca7495429163b****
     *
     * @var string
     */
    public $dataPortalId;

    /**
     * @example 54kqgoa****,pg1n135****
     *
     * @var string
     */
    public $menuIds;

    /**
     * @example 34fd141d-4598-4093-8c33-8e066dcb****,3d2c23d4-2b41-4af8-a1f5-f6390f32****
     *
     * @var string
     */
    public $userGroupIds;

    /**
     * @example 204627493484****,121344444790****
     *
     * @var string
     */
    public $userIds;
    protected $_name = [
        'dataPortalId' => 'DataPortalId',
        'menuIds'      => 'MenuIds',
        'userGroupIds' => 'UserGroupIds',
        'userIds'      => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPortalId) {
            $res['DataPortalId'] = $this->dataPortalId;
        }
        if (null !== $this->menuIds) {
            $res['MenuIds'] = $this->menuIds;
        }
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelAuthorizationMenuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPortalId'])) {
            $model->dataPortalId = $map['DataPortalId'];
        }
        if (isset($map['MenuIds'])) {
            $model->menuIds = $map['MenuIds'];
        }
        if (isset($map['UserGroupIds'])) {
            $model->userGroupIds = $map['UserGroupIds'];
        }
        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }

        return $model;
    }
}
