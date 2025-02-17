<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignIpv6AddressesResponseBody\ipv6PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignIpv6AddressesResponseBody\ipv6Sets;

class AssignIpv6AddressesResponseBody extends Model
{
    /**
     * @var ipv6PrefixSets
     */
    public $ipv6PrefixSets;
    /**
     * @var ipv6Sets
     */
    public $ipv6Sets;
    /**
     * @var string
     */
    public $networkInterfaceId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipv6PrefixSets'     => 'Ipv6PrefixSets',
        'ipv6Sets'           => 'Ipv6Sets',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ipv6PrefixSets) {
            $this->ipv6PrefixSets->validate();
        }
        if (null !== $this->ipv6Sets) {
            $this->ipv6Sets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6PrefixSets) {
            $res['Ipv6PrefixSets'] = null !== $this->ipv6PrefixSets ? $this->ipv6PrefixSets->toArray($noStream) : $this->ipv6PrefixSets;
        }

        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toArray($noStream) : $this->ipv6Sets;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Ipv6PrefixSets'])) {
            $model->ipv6PrefixSets = ipv6PrefixSets::fromMap($map['Ipv6PrefixSets']);
        }

        if (isset($map['Ipv6Sets'])) {
            $model->ipv6Sets = ipv6Sets::fromMap($map['Ipv6Sets']);
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
