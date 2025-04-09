<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\compatibleConnections;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\networkAddresses;

class DescribeShardingNetworkAddressResponseBody extends Model
{
    /**
     * @var compatibleConnections
     */
    public $compatibleConnections;

    /**
     * @var networkAddresses
     */
    public $networkAddresses;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compatibleConnections' => 'CompatibleConnections',
        'networkAddresses' => 'NetworkAddresses',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->compatibleConnections) {
            $this->compatibleConnections->validate();
        }
        if (null !== $this->networkAddresses) {
            $this->networkAddresses->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compatibleConnections) {
            $res['CompatibleConnections'] = null !== $this->compatibleConnections ? $this->compatibleConnections->toArray($noStream) : $this->compatibleConnections;
        }

        if (null !== $this->networkAddresses) {
            $res['NetworkAddresses'] = null !== $this->networkAddresses ? $this->networkAddresses->toArray($noStream) : $this->networkAddresses;
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
        if (isset($map['CompatibleConnections'])) {
            $model->compatibleConnections = compatibleConnections::fromMap($map['CompatibleConnections']);
        }

        if (isset($map['NetworkAddresses'])) {
            $model->networkAddresses = networkAddresses::fromMap($map['NetworkAddresses']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
