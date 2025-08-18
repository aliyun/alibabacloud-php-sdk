<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableUsersResponseBody\pageResult\userList;

class pageResult extends Model
{
    /**
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['UserList'] = [];
                $n1 = 0;
                foreach ($this->userList as $item1) {
                    $res['UserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n1 = 0;
                foreach ($map['UserList'] as $item1) {
                    $model->userList[$n1] = userList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
