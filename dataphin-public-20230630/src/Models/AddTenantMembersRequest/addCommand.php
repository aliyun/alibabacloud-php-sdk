<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersRequest\addCommand\userList;
use AlibabaCloud\Tea\Model;

class addCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'userList' => 'UserList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return addCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
