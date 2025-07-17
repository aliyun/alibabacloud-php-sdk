<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedUsersForDatabaseResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @example 164882191****
     *
     * @var string
     */
    public $uid;

    /**
     * @example 51****
     *
     * @var string
     */
    public $userId;

    /**
     * @example user_test
     *
     * @var string
     */
    public $userNickName;
    protected $_name = [
        'uid' => 'Uid',
        'userId' => 'UserId',
        'userNickName' => 'UserNickName',
    ];

    public function validate() {}

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
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

        return $model;
    }
}
