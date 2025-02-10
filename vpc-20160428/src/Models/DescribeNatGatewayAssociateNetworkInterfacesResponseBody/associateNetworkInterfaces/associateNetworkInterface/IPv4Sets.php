<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface\IPv4Sets\IPv4Set;

class IPv4Sets extends Model
{
    /**
     * @var IPv4Set[]
     */
    public $IPv4Set;
    protected $_name = [
        'IPv4Set' => 'IPv4Set',
    ];

    public function validate()
    {
        if (\is_array($this->IPv4Set)) {
            Model::validateArray($this->IPv4Set);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPv4Set) {
            if (\is_array($this->IPv4Set)) {
                $res['IPv4Set'] = [];
                $n1             = 0;
                foreach ($this->IPv4Set as $item1) {
                    $res['IPv4Set'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IPv4Set'])) {
            if (!empty($map['IPv4Set'])) {
                $model->IPv4Set = [];
                $n1             = 0;
                foreach ($map['IPv4Set'] as $item1) {
                    $model->IPv4Set[$n1++] = IPv4Set::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
