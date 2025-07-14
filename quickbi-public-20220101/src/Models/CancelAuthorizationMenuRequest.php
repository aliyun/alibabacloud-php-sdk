<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CancelAuthorizationMenuRequest extends Model
{
    /**
     * @description The ID of the data portal.
     *
     * This parameter is required.
     *
     * @example 0d173abb53e84c8ca7495429163b****
     *
     * @var string
     */
    public $dataPortalId;

    /**
     * @description The leaf node menu IDs of the data portal.
     *
     * - Supports batch parameters, with IDs separated by commas (,). The maximum number for batch modification is 100.
     *
     * This parameter is required.
     *
     * @example 54kqgoa****,pg1n135****
     *
     * @var string
     */
    public $menuIds;

    /**
     * @description List of user group IDs.
     *
     * - Supports batch parameters, with IDs separated by commas (,). The maximum number for batch modification is 200.
     * - UserGroupIds and UserIds cannot both be empty.
     *
     * @example 34fd141d-4598-4093-8c33-8e066dcb****,3d2c23d4-2b41-4af8-a1f5-f6390f32****
     *
     * @var string
     */
    public $userGroupIds;

    /**
     * @description List of user IDs. These are Quick BI UserIDs, not Alibaba Cloud UIDs.
     *
     * - Supports batch parameters, with IDs separated by commas (,). The maximum number for batch modification is 200.
     *
     * @example 204627493484****,121344444790****
     *
     * @var string
     */
    public $userIds;
    protected $_name = [
        'dataPortalId' => 'DataPortalId',
        'menuIds' => 'MenuIds',
        'userGroupIds' => 'UserGroupIds',
        'userIds' => 'UserIds',
    ];

    public function validate() {}

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
