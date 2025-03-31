<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody\items;

class DescribeClusterNetInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @var items
     */
    public $items;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterNetworkType' => 'ClusterNetworkType',
        'items' => 'Items',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->items) {
            $this->items->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
        }

        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toArray($noStream) : $this->items;
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

        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
