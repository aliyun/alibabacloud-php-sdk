<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface;

class associateNetworkInterfaces extends Model
{
    /**
     * @var associateNetworkInterface[]
     */
    public $associateNetworkInterface;
    protected $_name = [
        'associateNetworkInterface' => 'AssociateNetworkInterface',
    ];

    public function validate()
    {
        if (\is_array($this->associateNetworkInterface)) {
            Model::validateArray($this->associateNetworkInterface);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associateNetworkInterface) {
            if (\is_array($this->associateNetworkInterface)) {
                $res['AssociateNetworkInterface'] = [];
                $n1 = 0;
                foreach ($this->associateNetworkInterface as $item1) {
                    $res['AssociateNetworkInterface'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AssociateNetworkInterface'])) {
            if (!empty($map['AssociateNetworkInterface'])) {
                $model->associateNetworkInterface = [];
                $n1 = 0;
                foreach ($map['AssociateNetworkInterface'] as $item1) {
                    $model->associateNetworkInterface[$n1] = associateNetworkInterface::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
