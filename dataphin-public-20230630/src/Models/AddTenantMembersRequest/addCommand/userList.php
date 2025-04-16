<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersRequest\addCommand;

use AlibabaCloud\Dara\Model;

class userList extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $roleList;
    protected $_name = [
        'id' => 'Id',
        'roleList' => 'RoleList',
    ];

    public function validate()
    {
        if (\is_array($this->roleList)) {
            Model::validateArray($this->roleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->roleList) {
            if (\is_array($this->roleList)) {
                $res['RoleList'] = [];
                $n1 = 0;
                foreach ($this->roleList as $item1) {
                    $res['RoleList'][$n1++] = $item1;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RoleList'])) {
            if (!empty($map['RoleList'])) {
                $model->roleList = [];
                $n1 = 0;
                foreach ($map['RoleList'] as $item1) {
                    $model->roleList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
