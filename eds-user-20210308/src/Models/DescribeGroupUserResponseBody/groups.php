<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupUserResponseBody;

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

    /**
     * @var string
     */
    public $userCount;
    protected $_name = [
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'userCount' => 'UserCount',
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

        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
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

        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
