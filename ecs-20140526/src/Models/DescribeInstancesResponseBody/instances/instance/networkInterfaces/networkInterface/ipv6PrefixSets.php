<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\ipv6PrefixSets\ipv6PrefixSet;
use AlibabaCloud\Tea\Model;

class ipv6PrefixSets extends Model
{
    /**
     * @var ipv6PrefixSet[]
     */
    public $ipv6PrefixSet;
    protected $_name = [
        'ipv6PrefixSet' => 'Ipv6PrefixSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6PrefixSet) {
            $res['Ipv6PrefixSet'] = [];
            if (null !== $this->ipv6PrefixSet && \is_array($this->ipv6PrefixSet)) {
                $n = 0;
                foreach ($this->ipv6PrefixSet as $item) {
                    $res['Ipv6PrefixSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6PrefixSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6PrefixSet'])) {
            if (!empty($map['Ipv6PrefixSet'])) {
                $model->ipv6PrefixSet = [];
                $n                    = 0;
                foreach ($map['Ipv6PrefixSet'] as $item) {
                    $model->ipv6PrefixSet[$n++] = null !== $item ? ipv6PrefixSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
