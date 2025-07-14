<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserGroupMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description ID of the user group or the user group member.
     *
     * @example 3d2c23d4-2b41-4af8-a1f5-f6390f32****
     *
     * @var string
     */
    public $id;

    /**
     * @description Indicates whether it is a user group. Possible values:
     *
     * - true: It is a user group.
     * - false: It is a user.
     *
     * @example true
     *
     * @var bool
     */
    public $isUserGroup;

    /**
     * @description Name or nickname of the user group or its member.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description ID of the parent user group.
     *
     * @example 2fe4fbd8-588f-489a-b3e1-e92c7af0****
     *
     * @var string
     */
    public $parentUserGroupId;

    /**
     * @description Name of the parent user group.
     *
     * @example test
     *
     * @var string
     */
    public $parentUserGroupName;
    protected $_name = [
        'id' => 'Id',
        'isUserGroup' => 'IsUserGroup',
        'name' => 'Name',
        'parentUserGroupId' => 'ParentUserGroupId',
        'parentUserGroupName' => 'ParentUserGroupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isUserGroup) {
            $res['IsUserGroup'] = $this->isUserGroup;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentUserGroupId) {
            $res['ParentUserGroupId'] = $this->parentUserGroupId;
        }
        if (null !== $this->parentUserGroupName) {
            $res['ParentUserGroupName'] = $this->parentUserGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsUserGroup'])) {
            $model->isUserGroup = $map['IsUserGroup'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentUserGroupId'])) {
            $model->parentUserGroupId = $map['ParentUserGroupId'];
        }
        if (isset($map['ParentUserGroupName'])) {
            $model->parentUserGroupName = $map['ParentUserGroupName'];
        }

        return $model;
    }
}
