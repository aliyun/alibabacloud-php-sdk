<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users;

use AlibabaCloud\Dara\Model;

class groups extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
