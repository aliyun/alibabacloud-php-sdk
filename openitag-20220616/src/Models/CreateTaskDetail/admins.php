<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateTaskDetail;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\SimpleUser;
use AlibabaCloud\Tea\Model;

class admins extends Model
{
    /**
     * @var SimpleUser[]
     */
    public $users;
    protected $_name = [
        'users' => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return admins
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? SimpleUser::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
