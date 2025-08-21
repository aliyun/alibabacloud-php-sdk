<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberResponseBody\result\userListToAuthLogin;

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
        if (\is_array($this->userListToAuthLogin)) {
            Model::validateArray($this->userListToAuthLogin);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userListToAuthLogin) {
            if (\is_array($this->userListToAuthLogin)) {
                $res['UserListToAuthLogin'] = [];
                $n1 = 0;
                foreach ($this->userListToAuthLogin as $item1) {
                    $res['UserListToAuthLogin'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['UserListToAuthLogin'])) {
            if (!empty($map['UserListToAuthLogin'])) {
                $model->userListToAuthLogin = [];
                $n1 = 0;
                foreach ($map['UserListToAuthLogin'] as $item1) {
                    $model->userListToAuthLogin[$n1] = userListToAuthLogin::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
