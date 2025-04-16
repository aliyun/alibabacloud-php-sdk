<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfacePermissionResponseBody\networkInterfacePermission;

class CreateNetworkInterfacePermissionResponseBody extends Model
{
    /**
     * @var networkInterfacePermission
     */
    public $networkInterfacePermission;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkInterfacePermission' => 'NetworkInterfacePermission',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->networkInterfacePermission) {
            $this->networkInterfacePermission->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfacePermission) {
            $res['NetworkInterfacePermission'] = null !== $this->networkInterfacePermission ? $this->networkInterfacePermission->toArray($noStream) : $this->networkInterfacePermission;
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
        if (isset($map['NetworkInterfacePermission'])) {
            $model->networkInterfacePermission = networkInterfacePermission::fromMap($map['NetworkInterfacePermission']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
