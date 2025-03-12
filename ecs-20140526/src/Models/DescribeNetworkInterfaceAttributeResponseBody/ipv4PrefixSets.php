<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\ipv4PrefixSets\ipv4PrefixSet;
use AlibabaCloud\Tea\Model;

class ipv4PrefixSets extends Model
{
    /**
     * @var ipv4PrefixSet[]
     */
    public $ipv4PrefixSet;
    protected $_name = [
        'ipv4PrefixSet' => 'Ipv4PrefixSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4PrefixSet) {
            $res['Ipv4PrefixSet'] = [];
            if (null !== $this->ipv4PrefixSet && \is_array($this->ipv4PrefixSet)) {
                $n = 0;
                foreach ($this->ipv4PrefixSet as $item) {
                    $res['Ipv4PrefixSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv4PrefixSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4PrefixSet'])) {
            if (!empty($map['Ipv4PrefixSet'])) {
                $model->ipv4PrefixSet = [];
                $n                    = 0;
                foreach ($map['Ipv4PrefixSet'] as $item) {
                    $model->ipv4PrefixSet[$n++] = null !== $item ? ipv4PrefixSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
