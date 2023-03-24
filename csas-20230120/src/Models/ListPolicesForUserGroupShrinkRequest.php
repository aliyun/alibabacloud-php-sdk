<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPolicesForUserGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $userGroupIdsShrink;
    protected $_name = [
        'userGroupIdsShrink' => 'UserGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupIdsShrink) {
            $res['UserGroupIds'] = $this->userGroupIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicesForUserGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroupIds'])) {
            $model->userGroupIdsShrink = $map['UserGroupIds'];
        }

        return $model;
    }
}
