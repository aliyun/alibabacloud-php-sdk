<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ListByUserGroupIdRequest extends Model
{
    /**
     * @var string
     */
    public $userGroupIds;
    protected $_name = [
        'userGroupIds' => 'UserGroupIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
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
        if (isset($map['UserGroupIds'])) {
            $model->userGroupIds = $map['UserGroupIds'];
        }

        return $model;
    }
}
