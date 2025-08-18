<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddProjectMemberRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddProjectMemberRequest\addCommand\userList;

class addCommand extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'env' => 'Env',
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
        if (null !== $this->env) {
            $res['Env'] = $this->env;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
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
