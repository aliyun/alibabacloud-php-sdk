<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason\roleUsages;

class reason extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var roleUsages
     */
    public $roleUsages;
    protected $_name = [
        'message' => 'Message',
        'roleUsages' => 'RoleUsages',
    ];

    public function validate()
    {
        if (null !== $this->roleUsages) {
            $this->roleUsages->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->roleUsages) {
            $res['RoleUsages'] = null !== $this->roleUsages ? $this->roleUsages->toArray($noStream) : $this->roleUsages;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RoleUsages'])) {
            $model->roleUsages = roleUsages::fromMap($map['RoleUsages']);
        }

        return $model;
    }
}
