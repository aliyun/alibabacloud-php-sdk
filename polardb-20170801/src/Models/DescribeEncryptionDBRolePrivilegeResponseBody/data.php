<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeEncryptionDBRolePrivilegeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeEncryptionDBRolePrivilegeResponseBody\data\rolePrivilegeList;

class data extends Model
{
    /**
     * @var rolePrivilegeList[]
     */
    public $rolePrivilegeList;
    protected $_name = [
        'rolePrivilegeList' => 'RolePrivilegeList',
    ];

    public function validate()
    {
        if (\is_array($this->rolePrivilegeList)) {
            Model::validateArray($this->rolePrivilegeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rolePrivilegeList) {
            if (\is_array($this->rolePrivilegeList)) {
                $res['RolePrivilegeList'] = [];
                $n1 = 0;
                foreach ($this->rolePrivilegeList as $item1) {
                    $res['RolePrivilegeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RolePrivilegeList'])) {
            if (!empty($map['RolePrivilegeList'])) {
                $model->rolePrivilegeList = [];
                $n1 = 0;
                foreach ($map['RolePrivilegeList'] as $item1) {
                    $model->rolePrivilegeList[$n1] = rolePrivilegeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
