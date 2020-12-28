<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\privateIpSets\associatedPublicIp;
use AlibabaCloud\Tea\Model;

class privateIpSets extends Model
{
    /**
     * @var associatedPublicIp
     */
    public $associatedPublicIp;

    /**
     * @var bool
     */
    public $primary;

    /**
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'associatedPublicIp' => 'AssociatedPublicIp',
        'primary'            => 'Primary',
        'privateIpAddress'   => 'PrivateIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedPublicIp) {
            $res['AssociatedPublicIp'] = null !== $this->associatedPublicIp ? $this->associatedPublicIp->toMap() : null;
        }
        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateIpSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedPublicIp'])) {
            $model->associatedPublicIp = associatedPublicIp::fromMap($map['AssociatedPublicIp']);
        }
        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
