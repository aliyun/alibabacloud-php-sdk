<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsResponseBody\netInfoItems;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterNetInfoItemsResponseBody extends Model
{
    /**
     * @description The network type of the cluster. Only VPC is supported.
     *
     * @example VPC
     *
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @description Indicates whether Server Load Balancer (SLB) is activated in the VPC. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableSLB;

    /**
     * @description The network information about the cluster.
     *
     * @var netInfoItems
     */
    public $netInfoItems;

    /**
     * @description The request ID.
     *
     * @example 9A23C87D-87DF-4DA0-A50E-CB13F4F7923D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterNetworkType' => 'ClusterNetworkType',
        'enableSLB'          => 'EnableSLB',
        'netInfoItems'       => 'NetInfoItems',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
        }
        if (null !== $this->enableSLB) {
            $res['EnableSLB'] = $this->enableSLB;
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
     * @return DescribeDBClusterNetInfoItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterNetworkType'])) {
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }
        if (isset($map['EnableSLB'])) {
            $model->enableSLB = $map['EnableSLB'];
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
