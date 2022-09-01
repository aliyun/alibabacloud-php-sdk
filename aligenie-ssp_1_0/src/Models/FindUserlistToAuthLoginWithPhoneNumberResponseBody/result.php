<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberResponseBody\result\userListToAuthLogin;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var userListToAuthLogin[]
     */
    public $userListToAuthLogin;
    protected $_name = [
        'userListToAuthLogin' => 'UserListToAuthLogin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userListToAuthLogin) {
            $res['UserListToAuthLogin'] = [];
            if (null !== $this->userListToAuthLogin && \is_array($this->userListToAuthLogin)) {
                $n = 0;
                foreach ($this->userListToAuthLogin as $item) {
                    $res['UserListToAuthLogin'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserListToAuthLogin'])) {
            if (!empty($map['UserListToAuthLogin'])) {
                $model->userListToAuthLogin = [];
                $n                          = 0;
                foreach ($map['UserListToAuthLogin'] as $item) {
                    $model->userListToAuthLogin[$n++] = null !== $item ? userListToAuthLogin::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
