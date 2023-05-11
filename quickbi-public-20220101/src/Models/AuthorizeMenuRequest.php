<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeMenuRequest extends Model
{
    /**
     * @description Authorizes the permissions of the menu. Valid values:
     *
     *   1: view
     *   3: View + Export (default)
     *
     * @example 3
     *
     * @var int
     */
    public $authPointsValue;

    /**
     * @description The ID of the BI portal.
     *
     * @example 0d173abb53e84c8ca7495429163b****
     *
     * @var string
     */
    public $dataPortalId;

    /**
     * @description The menu ID of the BI portal leaf node.
     *
     *   The directory menu cannot be authorized.
     *   You can upload multiple parameters at a time. Separate multiple IDs with commas (,). The maximum number of parameters that can be modified at a time is 100.
     *
     * @example 54kqgoa****,pg1n135****
     *
     * @var string
     */
    public $menuIds;

    /**
     * @description The IDs of the user groups.
     *
     *   You can upload multiple parameters at a time. Separate multiple IDs with commas (,). The maximum number of parameters that can be modified at a time is 200.
     *   UserGroupIds and UserIds cannot be empty at the same time
     *
     * @example 34fd141d-4598-4093-8c33-8e066dcb****,3d2c23d4-2b41-4af8-a1f5-f6390f32****
     *
     * @var string
     */
    public $userGroupIds;

    /**
     * @description The IDs of the end users. The UserID of the Quick BI is used instead of the UID of Alibaba Cloud.
     *
     *   You can upload multiple parameters at a time. Separate multiple IDs with commas (,). The maximum number of parameters that can be modified at a time is 200.
     *
     * @example 204627493484****,121344444790****
     *
     * @var string
     */
    public $userIds;
    protected $_name = [
        'authPointsValue' => 'AuthPointsValue',
        'dataPortalId'    => 'DataPortalId',
        'menuIds'         => 'MenuIds',
        'userGroupIds'    => 'UserGroupIds',
        'userIds'         => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authPointsValue) {
            $res['AuthPointsValue'] = $this->authPointsValue;
        }
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
     * @return AuthorizeMenuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthPointsValue'])) {
            $model->authPointsValue = $map['AuthPointsValue'];
        }
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
