<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\ipv6Sets\ipv6Set;
use AlibabaCloud\Tea\Model;

class ipv6Sets extends Model
{
    /**
     * @var ipv6Set[]
     */
    public $ipv6Set;
    protected $_name = [
        'ipv6Set' => 'Ipv6Set',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Set) {
            $res['Ipv6Set'] = [];
            if (null !== $this->ipv6Set && \is_array($this->ipv6Set)) {
                $n = 0;
                foreach ($this->ipv6Set as $item) {
                    $res['Ipv6Set'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Sets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Set'])) {
            if (!empty($map['Ipv6Set'])) {
                $model->ipv6Set = [];
                $n              = 0;
                foreach ($map['Ipv6Set'] as $item) {
                    $model->ipv6Set[$n++] = null !== $item ? ipv6Set::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
