<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet\ipv4PrefixSet;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet\privateIpSet;
use AlibabaCloud\Tea\Model;

class assignedPrivateIpAddressesSet extends Model
{
    /**
     * @description > This parameter is in invitational preview and is unavailable for general users.
     *
     * @var ipv4PrefixSet
     */
    public $ipv4PrefixSet;

    /**
     * @description The ENI ID.
     *
     * @example eni-bp125p95hhdhn3ot****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The private IP addresses assigned to the ENI.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4PrefixSet) {
            $res['Ipv4PrefixSet'] = null !== $this->ipv4PrefixSet ? $this->ipv4PrefixSet->toMap() : null;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->privateIpSet) {
            $res['PrivateIpSet'] = null !== $this->privateIpSet ? $this->privateIpSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assignedPrivateIpAddressesSet
     */
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
