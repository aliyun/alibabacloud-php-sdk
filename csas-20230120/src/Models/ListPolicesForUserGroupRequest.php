<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPolicesForUserGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $userGroupIds;
    protected $_name = [
        'userGroupIds' => 'UserGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicesForUserGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = $map['UserGroupIds'];
            }
        }

        return $model;
    }
}
