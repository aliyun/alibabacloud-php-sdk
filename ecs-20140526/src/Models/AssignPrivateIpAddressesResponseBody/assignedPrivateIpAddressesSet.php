<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet\ipv4PrefixSet;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet\privateIpSet;

class assignedPrivateIpAddressesSet extends Model
{
    /**
     * @var ipv4PrefixSet
     */
    public $ipv4PrefixSet;
    /**
     * @var string
     */
    public $networkInterfaceId;
    /**
     * @var privateIpSet
     */
    public $privateIpSet;
    protected $_name = [
        'ipv4PrefixSet'      => 'Ipv4PrefixSet',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpSet'       => 'PrivateIpSet',
    ];

    public function validate()
    {
        if (null !== $this->ipv4PrefixSet) {
            $this->ipv4PrefixSet->validate();
        }
        if (null !== $this->privateIpSet) {
            $this->privateIpSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4PrefixSet) {
            $res['Ipv4PrefixSet'] = null !== $this->ipv4PrefixSet ? $this->ipv4PrefixSet->toArray($noStream) : $this->ipv4PrefixSet;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->privateIpSet) {
            $res['PrivateIpSet'] = null !== $this->privateIpSet ? $this->privateIpSet->toArray($noStream) : $this->privateIpSet;
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
        if (isset($map['Ipv4PrefixSet'])) {
            $model->ipv4PrefixSet = ipv4PrefixSet::fromMap($map['Ipv4PrefixSet']);
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['PrivateIpSet'])) {
            $model->privateIpSet = privateIpSet::fromMap($map['PrivateIpSet']);
        }

        return $model;
    }
}
