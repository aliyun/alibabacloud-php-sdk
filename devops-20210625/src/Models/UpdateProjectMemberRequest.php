<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectMemberRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example project.admin
     *
     * @var string
     */
    public $roleIdentifier;

    /**
     * @description This parameter is required.
     *
     * @example 5e70xxxxxxcd000xxxxe96
     *
     * @var string
     */
    public $targetIdentifier;

    /**
     * @description This parameter is required.
     *
     * @example Space
     *
     * @var string
     */
    public $targetType;

    /**
     * @description This parameter is required.
     *
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $userIdentifier;

    /**
     * @description This parameter is required.
     *
     * @example user
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'roleIdentifier'   => 'roleIdentifier',
        'targetIdentifier' => 'targetIdentifier',
        'targetType'       => 'targetType',
        'userIdentifier'   => 'userIdentifier',
        'userType'         => 'userType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleIdentifier) {
            $res['roleIdentifier'] = $this->roleIdentifier;
        }
        if (null !== $this->targetIdentifier) {
            $res['targetIdentifier'] = $this->targetIdentifier;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }
        if (null !== $this->userIdentifier) {
            $res['userIdentifier'] = $this->userIdentifier;
        }
        if (null !== $this->userType) {
            $res['userType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['roleIdentifier'])) {
            $model->roleIdentifier = $map['roleIdentifier'];
        }
        if (isset($map['targetIdentifier'])) {
            $model->targetIdentifier = $map['targetIdentifier'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }
        if (isset($map['userIdentifier'])) {
            $model->userIdentifier = $map['userIdentifier'];
        }
        if (isset($map['userType'])) {
            $model->userType = $map['userType'];
        }

        return $model;
    }
}
