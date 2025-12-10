<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateRoleResponseBody\role;

class UpdateRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var role
     */
    public $role;
    protected $_name = [
        'requestId' => 'RequestId',
        'role' => 'Role',
    ];

    public function validate()
    {
        if (null !== $this->role) {
            $this->role->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->role) {
            $res['Role'] = null !== $this->role ? $this->role->toArray($noStream) : $this->role;
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

        if (isset($map['Role'])) {
            $model->role = role::fromMap($map['Role']);
        }

        return $model;
    }
}
