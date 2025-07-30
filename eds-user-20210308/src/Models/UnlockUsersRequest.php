<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class UnlockUsersRequest extends Model
{
    /**
     * @description The date on which the convenience users are automatically locked.
     *
     * @example 2023-03-03
     *
     * @var string
     */
    public $autoLockTime;

    /**
     * @description The usernames of the convenience users that you want to unlock.
     *
     * This parameter is required.
     *
     * @example test1
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'autoLockTime' => 'AutoLockTime',
        'users' => 'Users',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoLockTime) {
            $res['AutoLockTime'] = $this->autoLockTime;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnlockUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoLockTime'])) {
            $model->autoLockTime = $map['AutoLockTime'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
