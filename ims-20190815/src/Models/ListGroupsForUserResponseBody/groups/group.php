<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserResponseBody\groups;

use AlibabaCloud\Dara\Model;

class group extends Model
{
    /**
     * @var string
     */
    public $comments;
    /**
     * @var string
     */
    public $displayName;
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
    public $joinDate;
    protected $_name = [
        'comments'    => 'Comments',
        'displayName' => 'DisplayName',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'joinDate'    => 'JoinDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->joinDate) {
            $res['JoinDate'] = $this->joinDate;
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['JoinDate'])) {
            $model->joinDate = $map['JoinDate'];
        }

        return $model;
    }
}
