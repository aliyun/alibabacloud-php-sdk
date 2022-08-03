<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleDeletionStatusResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason\roleUsages;
use AlibabaCloud\Tea\Model;

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
        'message'    => 'Message',
        'roleUsages' => 'RoleUsages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->roleUsages) {
            $res['RoleUsages'] = null !== $this->roleUsages ? $this->roleUsages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reason
     */
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
