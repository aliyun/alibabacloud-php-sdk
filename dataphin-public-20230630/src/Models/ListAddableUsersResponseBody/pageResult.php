<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableUsersResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableUsersResponseBody\pageResult\userList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @example 66
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'userList' => 'UserList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userList) {
            $res['UserList'] = [];
            if (null !== $this->userList && \is_array($this->userList)) {
                $n = 0;
                foreach ($this->userList as $item) {
                    $res['UserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n = 0;
                foreach ($map['UserList'] as $item) {
                    $model->userList[$n++] = null !== $item ? userList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
