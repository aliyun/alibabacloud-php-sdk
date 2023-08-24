<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponseBody\netInfoItems;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceNetInfoResponseBody extends Model
{
    /**
     * @description The ID of the vSwitch.
     *
     * @example CLASSIC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The network type. Valid values:
     *
     *   **CLASSIC**: The instance runs in a classic network.
     *   **VPC**: The instance runs in a virtual private cloud (VPC).
     *
     * @var netInfoItems
     */
    public $netInfoItems;

    /**
     * @description The IP address.
     *
     * @example FC77D4E1-2A7C-4F0B-A4CC-CE0B9C314B9B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceNetworkType' => 'InstanceNetworkType',
        'netInfoItems'        => 'NetInfoItems',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->netInfoItems) {
            $res['NetInfoItems'] = null !== $this->netInfoItems ? $this->netInfoItems->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceNetInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['NetInfoItems'])) {
            $model->netInfoItems = netInfoItems::fromMap($map['NetInfoItems']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
