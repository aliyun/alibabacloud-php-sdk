<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\InnerDescribeNetworkInterfaceInGroupResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\InnerDescribeNetworkInterfaceInGroupResponseBody\networkInterfaceSets\networkInterfaceSet;
use AlibabaCloud\Tea\Model;

class networkInterfaceSets extends Model
{
    /**
     * @var networkInterfaceSet[]
     */
    public $networkInterfaceSet;
    protected $_name = [
        'networkInterfaceSet' => 'NetworkInterfaceSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceSet) {
            $res['NetworkInterfaceSet'] = [];
            if (null !== $this->networkInterfaceSet && \is_array($this->networkInterfaceSet)) {
                $n = 0;
                foreach ($this->networkInterfaceSet as $item) {
                    $res['NetworkInterfaceSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaceSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceSet'])) {
            if (!empty($map['NetworkInterfaceSet'])) {
                $model->networkInterfaceSet = [];
                $n                          = 0;
                foreach ($map['NetworkInterfaceSet'] as $item) {
                    $model->networkInterfaceSet[$n++] = null !== $item ? networkInterfaceSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
