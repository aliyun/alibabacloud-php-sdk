<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersForGroupResponseBody\users;

use AlibabaCloud\Dara\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $joinDate;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'displayName'       => 'DisplayName',
        'joinDate'          => 'JoinDate',
        'userId'            => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->joinDate) {
            $res['JoinDate'] = $this->joinDate;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['JoinDate'])) {
            $model->joinDate = $map['JoinDate'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
