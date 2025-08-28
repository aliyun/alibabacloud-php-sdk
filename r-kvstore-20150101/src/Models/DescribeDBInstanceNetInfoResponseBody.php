<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponseBody\netInfoItems;

class DescribeDBInstanceNetInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var netInfoItems
     */
    public $netInfoItems;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceNetworkType' => 'InstanceNetworkType',
        'netInfoItems' => 'NetInfoItems',
        'requestId' => 'RequestId',
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
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
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
