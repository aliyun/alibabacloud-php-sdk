<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateProjectMemberRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateProjectMemberRequest\updateCommand\userList;
use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'env' => 'Env',
        'userList' => 'UserList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
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
     * @return updateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
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
