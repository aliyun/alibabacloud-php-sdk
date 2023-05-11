<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserGroupRequest extends Model
{
    /**
     * @description The description of the user group.
     *
     *   Format verification: Maximum length 255
     *   Special format verification: Chinese and English digits\_ \ / | () ] \[
     *
     * @example Description
     *
     * @var string
     */
    public $userGroupDescription;

    /**
     * @description The ID of the user group.
     *
     * @example f5eeb52e-d9c2-4a8b-80e3-47ab55c2****
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @description The name of the user group.
     *
     *   Format verification: Maximum length 255
     *   Special format verification: Chinese and English digits\_ \ / | () ] \[
     *
     * @example pop0001
     *
     * @var string
     */
    public $userGroupName;
    protected $_name = [
        'userGroupDescription' => 'UserGroupDescription',
        'userGroupId'          => 'UserGroupId',
        'userGroupName'        => 'UserGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupDescription) {
            $res['UserGroupDescription'] = $this->userGroupDescription;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroupDescription'])) {
            $model->userGroupDescription = $map['UserGroupDescription'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }

        return $model;
    }
}
