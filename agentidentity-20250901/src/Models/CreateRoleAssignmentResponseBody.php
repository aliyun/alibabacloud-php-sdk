<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateRoleAssignmentResponseBody\roleAssignment;

class CreateRoleAssignmentResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var roleAssignment
     */
    public $roleAssignment;
    protected $_name = [
        'requestId' => 'RequestId',
        'roleAssignment' => 'RoleAssignment',
    ];

    public function validate()
    {
        if (null !== $this->roleAssignment) {
            $this->roleAssignment->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roleAssignment) {
            $res['RoleAssignment'] = null !== $this->roleAssignment ? $this->roleAssignment->toArray($noStream) : $this->roleAssignment;
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

        if (isset($map['RoleAssignment'])) {
            $model->roleAssignment = roleAssignment::fromMap($map['RoleAssignment']);
        }

        return $model;
    }
}
