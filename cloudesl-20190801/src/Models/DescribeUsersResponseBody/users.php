<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeUsersResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeUsersResponseBody\users\userInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userInfo) {
            $res['UserInfo'] = [];
            if (null !== $this->userInfo && \is_array($this->userInfo)) {
                $n = 0;
                foreach ($this->userInfo as $item) {
                    $res['UserInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['UserInfo'])) {
            if (!empty($map['UserInfo'])) {
                $model->userInfo = [];
                $n               = 0;
                foreach ($map['UserInfo'] as $item) {
                    $model->userInfo[$n++] = null !== $item ? userInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
