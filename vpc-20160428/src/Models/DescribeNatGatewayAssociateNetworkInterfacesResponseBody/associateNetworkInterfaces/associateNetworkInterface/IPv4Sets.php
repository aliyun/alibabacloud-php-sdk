<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface\IPv4Sets\IPv4Set;
use AlibabaCloud\Tea\Model;

class IPv4Sets extends Model
{
    /**
     * @var IPv4Set[]
     */
    public $IPv4Set;
    protected $_name = [
        'IPv4Set' => 'IPv4Set',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPv4Set) {
            $res['IPv4Set'] = [];
            if (null !== $this->IPv4Set && \is_array($this->IPv4Set)) {
                $n = 0;
                foreach ($this->IPv4Set as $item) {
                    $res['IPv4Set'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IPv4Sets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPv4Set'])) {
            if (!empty($map['IPv4Set'])) {
                $model->IPv4Set = [];
                $n = 0;
                foreach ($map['IPv4Set'] as $item) {
                    $model->IPv4Set[$n++] = null !== $item ? IPv4Set::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
