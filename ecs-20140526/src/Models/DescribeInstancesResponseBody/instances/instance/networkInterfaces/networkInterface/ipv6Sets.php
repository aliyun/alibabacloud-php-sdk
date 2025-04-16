<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\ipv6Sets\ipv6Set;

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
        if (\is_array($this->ipv6Set)) {
            Model::validateArray($this->ipv6Set);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Set) {
            if (\is_array($this->ipv6Set)) {
                $res['Ipv6Set'] = [];
                $n1 = 0;
                foreach ($this->ipv6Set as $item1) {
                    $res['Ipv6Set'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv6Set'])) {
            if (!empty($map['Ipv6Set'])) {
                $model->ipv6Set = [];
                $n1 = 0;
                foreach ($map['Ipv6Set'] as $item1) {
                    $model->ipv6Set[$n1++] = ipv6Set::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
