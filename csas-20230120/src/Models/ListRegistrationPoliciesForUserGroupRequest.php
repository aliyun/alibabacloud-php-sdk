<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListRegistrationPoliciesForUserGroupRequest extends Model
{
    /**
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
     * @return ListRegistrationPoliciesForUserGroupRequest
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
