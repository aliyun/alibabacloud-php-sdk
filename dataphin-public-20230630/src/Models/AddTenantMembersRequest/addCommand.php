<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersRequest\addCommand\userList;

class addCommand extends Model
{
    /**
     * @var userList[]
     */
    public $userList;
    protected $_name = [
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
        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['UserList'] = [];
                $n1 = 0;
                foreach ($this->userList as $item1) {
                    $res['UserList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n1 = 0;
                foreach ($map['UserList'] as $item1) {
                    $model->userList[$n1++] = userList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
