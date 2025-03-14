<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserGroupMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 3d2c23d4-2b41-4af8-a1f5-f6390f32****
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isUserGroup;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 2fe4fbd8-588f-489a-b3e1-e92c7af0****
     *
     * @var string
     */
    public $parentUserGroupId;

    /**
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
