<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRolesResponseBody\roleList;

class DescribeRolesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var roleList
     */
    public $roleList;
    protected $_name = [
        'requestId' => 'RequestId',
        'roleList' => 'RoleList',
    ];

    public function validate()
    {
        if (null !== $this->roleList) {
            $this->roleList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roleList) {
            $res['RoleList'] = null !== $this->roleList ? $this->roleList->toArray($noStream) : $this->roleList;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoleList'])) {
            $model->roleList = roleList::fromMap($map['RoleList']);
        }

        return $model;
    }
}
