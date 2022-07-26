<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IsvUserSaveShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userListShrink;
    protected $_name = [
        'userId'         => 'user_Id',
        'userListShrink' => 'user_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['user_Id'] = $this->userId;
        }
        if (null !== $this->userListShrink) {
            $res['user_list'] = $this->userListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsvUserSaveShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['user_Id'])) {
            $model->userId = $map['user_Id'];
        }
        if (isset($map['user_list'])) {
            $model->userListShrink = $map['user_list'];
        }

        return $model;
    }
}
