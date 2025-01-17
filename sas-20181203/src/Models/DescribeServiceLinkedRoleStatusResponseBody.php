<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeServiceLinkedRoleStatusResponseBody\roleStatus;

class DescribeServiceLinkedRoleStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var roleStatus
     */
    public $roleStatus;
    protected $_name = [
        'requestId'  => 'RequestId',
        'roleStatus' => 'RoleStatus',
    ];

    public function validate()
    {
        if (null !== $this->roleStatus) {
            $this->roleStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roleStatus) {
            $res['RoleStatus'] = null !== $this->roleStatus ? $this->roleStatus->toArray($noStream) : $this->roleStatus;
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

        if (isset($map['RoleStatus'])) {
            $model->roleStatus = roleStatus::fromMap($map['RoleStatus']);
        }

        return $model;
    }
}
