<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\compatibleConnections;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\networkAddresses;
use AlibabaCloud\Tea\Model;

class DescribeShardingNetworkAddressResponseBody extends Model
{
    /**
     * @description The endpoints of DynamoDB-compatible instances.
     *
     * @var compatibleConnections
     */
    public $compatibleConnections;

    /**
     * @description The endpoints of ApsaraDB for MongoDB instances.
     *
     * @var networkAddresses
     */
    public $networkAddresses;

    /**
     * @description The request ID.
     *
     * @example 18D8AAFD-6BEB-420F-8164-810CB0C0AA39
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compatibleConnections' => 'CompatibleConnections',
        'networkAddresses'      => 'NetworkAddresses',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compatibleConnections) {
            $res['CompatibleConnections'] = null !== $this->compatibleConnections ? $this->compatibleConnections->toMap() : null;
        }
        if (null !== $this->networkAddresses) {
            $res['NetworkAddresses'] = null !== $this->networkAddresses ? $this->networkAddresses->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeShardingNetworkAddressResponseBody
     */
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
