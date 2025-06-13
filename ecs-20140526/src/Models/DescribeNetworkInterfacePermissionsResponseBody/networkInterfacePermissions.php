<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsResponseBody\networkInterfacePermissions\networkInterfacePermission;

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
        if (\is_array($this->networkInterfacePermission)) {
            Model::validateArray($this->networkInterfacePermission);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfacePermission) {
            if (\is_array($this->networkInterfacePermission)) {
                $res['NetworkInterfacePermission'] = [];
                $n1 = 0;
                foreach ($this->networkInterfacePermission as $item1) {
                    $res['NetworkInterfacePermission'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['NetworkInterfacePermission'])) {
                $model->networkInterfacePermission = [];
                $n1 = 0;
                foreach ($map['NetworkInterfacePermission'] as $item1) {
                    $model->networkInterfacePermission[$n1] = networkInterfacePermission::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
