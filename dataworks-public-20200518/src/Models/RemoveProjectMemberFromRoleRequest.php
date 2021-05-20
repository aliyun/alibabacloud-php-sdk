<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RemoveProjectMemberFromRoleRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $roleCode;
    protected $_name = [
        'projectId' => 'ProjectId',
        'userId'    => 'UserId',
        'roleCode'  => 'RoleCode',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('roleCode', $this->roleCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveProjectMemberFromRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }

        return $model;
    }
}
