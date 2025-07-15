<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface;
use AlibabaCloud\Tea\Model;

class associateNetworkInterfaces extends Model
{
    /**
     * @var associateNetworkInterface[]
     */
    public $associateNetworkInterface;
    protected $_name = [
        'associateNetworkInterface' => 'AssociateNetworkInterface',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->associateNetworkInterface) {
            $res['AssociateNetworkInterface'] = [];
            if (null !== $this->associateNetworkInterface && \is_array($this->associateNetworkInterface)) {
                $n = 0;
                foreach ($this->associateNetworkInterface as $item) {
                    $res['AssociateNetworkInterface'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associateNetworkInterfaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateNetworkInterface'])) {
            if (!empty($map['AssociateNetworkInterface'])) {
                $model->associateNetworkInterface = [];
                $n = 0;
                foreach ($map['AssociateNetworkInterface'] as $item) {
                    $model->associateNetworkInterface[$n++] = null !== $item ? associateNetworkInterface::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
