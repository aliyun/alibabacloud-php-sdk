<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\ipv6PrefixSets\ipv6PrefixSet;

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
        if (\is_array($this->ipv6PrefixSet)) {
            Model::validateArray($this->ipv6PrefixSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6PrefixSet) {
            if (\is_array($this->ipv6PrefixSet)) {
                $res['Ipv6PrefixSet'] = [];
                $n1                   = 0;
                foreach ($this->ipv6PrefixSet as $item1) {
                    $res['Ipv6PrefixSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv6PrefixSet'])) {
            if (!empty($map['Ipv6PrefixSet'])) {
                $model->ipv6PrefixSet = [];
                $n1                   = 0;
                foreach ($map['Ipv6PrefixSet'] as $item1) {
                    $model->ipv6PrefixSet[$n1++] = ipv6PrefixSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
