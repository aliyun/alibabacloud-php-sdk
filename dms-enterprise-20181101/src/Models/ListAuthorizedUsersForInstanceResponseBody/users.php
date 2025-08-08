<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedUsersForInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userNickName;

    /**
     * @var string
     */
    public $userRealName;
    protected $_name = [
        'uid' => 'Uid',
        'userId' => 'UserId',
        'userNickName' => 'UserNickName',
        'userRealName' => 'UserRealName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userNickName) {
            $res['UserNickName'] = $this->userNickName;
        }

        if (null !== $this->userRealName) {
            $res['UserRealName'] = $this->userRealName;
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
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserNickName'])) {
            $model->userNickName = $map['UserNickName'];
        }

        if (isset($map['UserRealName'])) {
            $model->userRealName = $map['UserRealName'];
        }

        return $model;
    }
}
