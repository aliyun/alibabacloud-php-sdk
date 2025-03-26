<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses\ipv6Address;

class ipv6Addresses extends Model
{
    /**
     * @var ipv6Address[]
     */
    public $ipv6Address;
    protected $_name = [
        'ipv6Address' => 'Ipv6Address',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6Address)) {
            Model::validateArray($this->ipv6Address);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Address) {
            if (\is_array($this->ipv6Address)) {
                $res['Ipv6Address'] = [];
                $n1 = 0;
                foreach ($this->ipv6Address as $item1) {
                    $res['Ipv6Address'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = [];
                $n1 = 0;
                foreach ($map['Ipv6Address'] as $item1) {
                    $model->ipv6Address[$n1++] = ipv6Address::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
