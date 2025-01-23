<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgUserGroupAddOrUpdateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $userGroupsShrink;
    protected $_name = [
        'userGroupsShrink' => 'UserGroups',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userGroupsShrink) {
            $res['UserGroups'] = $this->userGroupsShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroups'])) {
            $model->userGroupsShrink = $map['UserGroups'];
        }

        return $model;
    }
}
