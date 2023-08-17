<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterNetInfoResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterNetInfoResponseBody extends Model
{
    /**
     * @description The network type of the cluster.
     *
     * @example VPC
     *
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @description The network information of the cluster.
     *
     * @var items
     */
    public $items;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
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
     * @return DescribeDBClusterNetInfoResponseBody
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
