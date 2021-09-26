<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\QueryKnoxUserPasswordResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\QueryKnoxUserPasswordResponseBody\userInfoList\userInfo;
use AlibabaCloud\Tea\Model;

class userInfoList extends Model
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
     * @return userInfoList
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
