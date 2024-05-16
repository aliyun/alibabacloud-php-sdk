<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgUserGroupAddOrUpdateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userGroupsShrink;
    protected $_name = [
        'userGroupsShrink' => 'UserGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupsShrink) {
            $res['UserGroups'] = $this->userGroupsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgUserGroupAddOrUpdateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroups'])) {
            $model->userGroupsShrink = $map['UserGroups'];
        }

        return $model;
    }
}
