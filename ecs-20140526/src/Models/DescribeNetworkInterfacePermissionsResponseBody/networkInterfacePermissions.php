<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsResponseBody\networkInterfacePermissions\networkInterfacePermission;
use AlibabaCloud\Tea\Model;

class networkInterfacePermissions extends Model
{
    /**
     * @var networkInterfacePermission[]
     */
    public $networkInterfacePermission;
    protected $_name = [
        'networkInterfacePermission' => 'NetworkInterfacePermission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfacePermission) {
            $res['NetworkInterfacePermission'] = [];
            if (null !== $this->networkInterfacePermission && \is_array($this->networkInterfacePermission)) {
                $n = 0;
                foreach ($this->networkInterfacePermission as $item) {
                    $res['NetworkInterfacePermission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfacePermissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfacePermission'])) {
            if (!empty($map['NetworkInterfacePermission'])) {
                $model->networkInterfacePermission = [];
                $n                                 = 0;
                foreach ($map['NetworkInterfacePermission'] as $item) {
                    $model->networkInterfacePermission[$n++] = null !== $item ? networkInterfacePermission::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
