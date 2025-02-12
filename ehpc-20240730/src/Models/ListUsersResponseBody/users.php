<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListUsersResponseBody\users\userInfo;

class users extends Model
{
    /**
     * @var userInfo[]
     */
    public $userInfo;
    protected $_name = [
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (\is_array($this->userInfo)) {
            Model::validateArray($this->userInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userInfo) {
            if (\is_array($this->userInfo)) {
                $res['UserInfo'] = [];
                $n1              = 0;
                foreach ($this->userInfo as $item1) {
                    $res['UserInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserInfo'])) {
            if (!empty($map['UserInfo'])) {
                $model->userInfo = [];
                $n1              = 0;
                foreach ($map['UserInfo'] as $item1) {
                    $model->userInfo[$n1++] = userInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
