<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @example 23423
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'userId'   => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
