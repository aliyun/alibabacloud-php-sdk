<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class RevokeMemberProjectRolesShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 105149
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $roleCodesShrink;

    /**
     * @description This parameter is required.
     *
     * @example 123422344899
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'projectId'       => 'ProjectId',
        'roleCodesShrink' => 'RoleCodes',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->roleCodesShrink) {
            $res['RoleCodes'] = $this->roleCodesShrink;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeMemberProjectRolesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RoleCodes'])) {
            $model->roleCodesShrink = $map['RoleCodes'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
