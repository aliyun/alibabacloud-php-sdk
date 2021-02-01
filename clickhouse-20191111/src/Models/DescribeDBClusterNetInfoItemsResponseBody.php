<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsResponseBody\netInfoItems;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterNetInfoItemsResponseBody extends Model
{
    /**
     * @var netInfoItems
     */
    public $netInfoItems;

    /**
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'netInfoItems'       => 'NetInfoItems',
        'clusterNetworkType' => 'ClusterNetworkType',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netInfoItems) {
            $res['NetInfoItems'] = null !== $this->netInfoItems ? $this->netInfoItems->toMap() : null;
        }
        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
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
        if (isset($map['NetInfoItems'])) {
            $model->netInfoItems = netInfoItems::fromMap($map['NetInfoItems']);
        }
        if (isset($map['ClusterNetworkType'])) {
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
