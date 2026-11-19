<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAccountRolesResponseBody\roles;

class DescribeAccountRolesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var roles
     */
    public $roles;
    protected $_name = [
        'requestId' => 'RequestId',
        'roles' => 'Roles',
    ];

    public function validate()
    {
        if (null !== $this->roles) {
            $this->roles->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toArray($noStream) : $this->roles;
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

        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }

        return $model;
    }
}
