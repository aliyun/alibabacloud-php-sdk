<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses\ipv6Address;
use AlibabaCloud\Tea\Model;

class ipv6Addresses extends Model
{
    /**
     * @var ipv6Address[]
     */
    public $ipv6Address;
    protected $_name = [
        'ipv6Address' => 'Ipv6Address',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = [];
            if (null !== $this->ipv6Address && \is_array($this->ipv6Address)) {
                $n = 0;
                foreach ($this->ipv6Address as $item) {
                    $res['Ipv6Address'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Addresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = [];
                $n = 0;
                foreach ($map['Ipv6Address'] as $item) {
                    $model->ipv6Address[$n++] = null !== $item ? ipv6Address::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
