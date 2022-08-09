<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvUserSaveRequest\userList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userList) {
            $res['user_list'] = [];
            if (null !== $this->userList && \is_array($this->userList)) {
                $n = 0;
                foreach ($this->userList as $item) {
                    $res['user_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsvUserSaveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['user_list'])) {
            if (!empty($map['user_list'])) {
                $model->userList = [];
                $n               = 0;
                foreach ($map['user_list'] as $item) {
                    $model->userList[$n++] = null !== $item ? userList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
