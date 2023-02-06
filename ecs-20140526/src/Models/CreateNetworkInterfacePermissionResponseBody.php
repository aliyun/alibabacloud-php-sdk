<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfacePermissionResponseBody\networkInterfacePermission;
use AlibabaCloud\Tea\Model;

class CreateNetworkInterfacePermissionResponseBody extends Model
{
    /**
     * @description Details about permissions on ENIs.
     *
     * @var networkInterfacePermission
     */
    public $networkInterfacePermission;

    /**
     * @description The ID of the request.
     *
     * @example 0FCD3DEF-63D3-4605-A818-805C8BD7DB87
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkInterfacePermission' => 'NetworkInterfacePermission',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfacePermission) {
            $res['NetworkInterfacePermission'] = null !== $this->networkInterfacePermission ? $this->networkInterfacePermission->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkInterfacePermissionResponseBody
     */
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
