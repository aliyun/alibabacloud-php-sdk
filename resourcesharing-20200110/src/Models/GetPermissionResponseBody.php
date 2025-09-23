<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\GetPermissionResponseBody\permission;

class GetPermissionResponseBody extends Model
{
    /**
     * @var permission
     */
    public $permission;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'permission' => 'Permission',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->permission) {
            $this->permission->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permission) {
            $res['Permission'] = null !== $this->permission ? $this->permission->toArray($noStream) : $this->permission;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Permission'])) {
            $model->permission = permission::fromMap($map['Permission']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
