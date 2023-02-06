<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignIpv6AddressesResponseBody\ipv6PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignIpv6AddressesResponseBody\ipv6Sets;
use AlibabaCloud\Tea\Model;

class AssignIpv6AddressesResponseBody extends Model
{
    /**
     * @description > 该参数正在邀测中，暂未开放使用。
     *
     * @var ipv6PrefixSets
     */
    public $ipv6PrefixSets;

    /**
     * @description The IPv6 addresses assigned to the ENI.
     *
     * @var ipv6Sets
     */
    public $ipv6Sets;

    /**
     * @description The ID of the ENI.
     *
     * @example eni-bp1iqejowblx6h8j****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6PrefixSets) {
            $res['Ipv6PrefixSets'] = null !== $this->ipv6PrefixSets ? $this->ipv6PrefixSets->toMap() : null;
        }
        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toMap() : null;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignIpv6AddressesResponseBody
     */
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
