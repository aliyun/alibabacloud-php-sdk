<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListUsersResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $userDisplayName;

    /**
     * @example 2323232676856745
     *
     * @var string
     */
    public $userId;

    /**
     * @example lili
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'userDisplayName' => 'UserDisplayName',
        'userId'          => 'UserId',
        'userName'        => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userDisplayName) {
            $res['UserDisplayName'] = $this->userDisplayName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['UserDisplayName'])) {
            $model->userDisplayName = $map['UserDisplayName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
