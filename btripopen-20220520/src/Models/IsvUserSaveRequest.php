<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest\userList;

class IsvUserSaveRequest extends Model
{
    /**
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'userList' => 'user_list',
    ];

    public function validate()
    {
        if (\is_array($this->userList)) {
            Model::validateArray($this->userList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['user_list'] = [];
                $n1 = 0;
                foreach ($this->userList as $item1) {
                    $res['user_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['user_list'])) {
            if (!empty($map['user_list'])) {
                $model->userList = [];
                $n1 = 0;
                foreach ($map['user_list'] as $item1) {
                    $model->userList[$n1++] = userList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
