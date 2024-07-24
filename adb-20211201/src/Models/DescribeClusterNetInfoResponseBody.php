<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeClusterNetInfoResponseBody extends Model
{
    /**
     * @description The network type of the cluster. Only the Virtual Private Cloud (VPC) network type is supported. **VPC** is returned.
     *
     * @example VPC
     *
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @description The queried network information about the cluster.
     *
     * @var items
     */
    public $items;

    /**
     * @description The request ID.
     *
     * @example 69A29B65-CD0C-52B1-BE42-8B454569747F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterNetworkType' => 'ClusterNetworkType',
        'items'              => 'Items',
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
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterNetInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterNetworkType'])) {
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
