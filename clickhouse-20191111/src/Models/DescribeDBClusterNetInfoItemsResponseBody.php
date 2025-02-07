<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsResponseBody\netInfoItems;

class DescribeDBClusterNetInfoItemsResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterNetworkType;
    /**
     * @var bool
     */
    public $enableSLB;
    /**
     * @var netInfoItems
     */
    public $netInfoItems;
    /**
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
        if (null !== $this->netInfoItems) {
            $this->netInfoItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
        }

        if (null !== $this->enableSLB) {
            $res['EnableSLB'] = $this->enableSLB;
        }

        if (null !== $this->netInfoItems) {
            $res['NetInfoItems'] = null !== $this->netInfoItems ? $this->netInfoItems->toArray($noStream) : $this->netInfoItems;
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
