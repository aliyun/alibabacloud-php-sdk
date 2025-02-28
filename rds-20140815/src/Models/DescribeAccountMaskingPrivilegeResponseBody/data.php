<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountMaskingPrivilegeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountMaskingPrivilegeResponseBody\data\userPrivilege;

class data extends Model
{
    /**
     * @var userPrivilege[]
     */
    public $userPrivilege;
    protected $_name = [
        'userPrivilege' => 'UserPrivilege',
    ];

    public function validate()
    {
        if (\is_array($this->userPrivilege)) {
            Model::validateArray($this->userPrivilege);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userPrivilege) {
            if (\is_array($this->userPrivilege)) {
                $res['UserPrivilege'] = [];
                $n1                   = 0;
                foreach ($this->userPrivilege as $item1) {
                    $res['UserPrivilege'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserPrivilege'])) {
            if (!empty($map['UserPrivilege'])) {
                $model->userPrivilege = [];
                $n1                   = 0;
                foreach ($map['UserPrivilege'] as $item1) {
                    $model->userPrivilege[$n1++] = userPrivilege::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
