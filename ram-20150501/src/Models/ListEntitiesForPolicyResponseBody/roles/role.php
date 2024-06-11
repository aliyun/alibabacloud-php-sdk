<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\roles;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role.
     *
     * @example acs:ram::123456789012****:role/ECSAdmin
     *
     * @var string
     */
    public $arn;

    /**
     * @description The time when the policy was attached to the RAM user.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $attachDate;

    /**
     * @description The description of the RAM role.
     *
     * @example ECS administrator
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the RAM role.
     *
     * @example 122748924538****
     *
     * @var string
     */
    public $roleId;

    /**
     * @description The name of the RAM role.
     *
     * @example ECSAdmin
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'arn'         => 'Arn',
        'attachDate'  => 'AttachDate',
        'description' => 'Description',
        'roleId'      => 'RoleId',
        'roleName'    => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return role
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
