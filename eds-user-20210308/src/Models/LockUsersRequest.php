<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class LockUsersRequest extends Model
{
    /**
     * @var bool
     */
    public $logoutSession;

    /**
     * @description The usernames of the convenience users that you want to lock.
     *
     * This parameter is required.
     * @example test1
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'logoutSession' => 'LogoutSession',
        'users'         => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoutSession) {
            $res['LogoutSession'] = $this->logoutSession;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LockUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoutSession'])) {
            $model->logoutSession = $map['LogoutSession'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
