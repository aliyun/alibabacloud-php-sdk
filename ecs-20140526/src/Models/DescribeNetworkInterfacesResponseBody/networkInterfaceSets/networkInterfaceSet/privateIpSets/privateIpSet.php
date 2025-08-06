<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\privateIpSets;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\privateIpSets\privateIpSet\associatedPublicIp;

class privateIpSet extends Model
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
    public $privateDnsName;

    /**
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'associatedPublicIp' => 'AssociatedPublicIp',
        'primary' => 'Primary',
        'privateDnsName' => 'PrivateDnsName',
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
        if (null !== $this->associatedPublicIp) {
            $this->associatedPublicIp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedPublicIp) {
            $res['AssociatedPublicIp'] = null !== $this->associatedPublicIp ? $this->associatedPublicIp->toArray($noStream) : $this->associatedPublicIp;
        }

        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }

        if (null !== $this->privateDnsName) {
            $res['PrivateDnsName'] = $this->privateDnsName;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
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
        if (isset($map['AssociatedPublicIp'])) {
            $model->associatedPublicIp = associatedPublicIp::fromMap($map['AssociatedPublicIp']);
        }

        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        if (isset($map['PrivateDnsName'])) {
            $model->privateDnsName = $map['PrivateDnsName'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
