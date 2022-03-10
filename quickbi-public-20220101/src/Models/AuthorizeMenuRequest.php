<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeMenuRequest extends Model
{
    /**
     * @var int
     */
    public $authPointsValue;

    /**
     * @var string
     */
    public $dataPortalId;

    /**
     * @var string
     */
    public $menuIds;

    /**
     * @var string
     */
    public $userGroupIds;

    /**
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
