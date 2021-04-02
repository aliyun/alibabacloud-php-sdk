<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersForGroupResponse\users;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $joinDate;
    protected $_name = [
        'userId'            => 'UserId',
        'displayName'       => 'DisplayName',
        'userPrincipalName' => 'UserPrincipalName',
        'joinDate'          => 'JoinDate',
    ];

    public function validate()
    {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('userPrincipalName', $this->userPrincipalName, true);
        Model::validateRequired('joinDate', $this->joinDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->joinDate) {
            $res['JoinDate'] = $this->joinDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['JoinDate'])) {
            $model->joinDate = $map['JoinDate'];
        }

        return $model;
    }
}
