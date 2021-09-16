<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody\data;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description 用户ID
     *
     * @var int
     */
    public $userId;

    /**
     * @description 用户名字
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'userId'   => 'userId',
        'userName' => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
