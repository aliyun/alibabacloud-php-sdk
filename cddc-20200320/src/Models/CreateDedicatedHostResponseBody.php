<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostResponseBody\dedicateHostList;

class CreateDedicatedHostResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var dedicateHostList
     */
    public $dedicateHostList;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'dedicateHostList' => 'DedicateHostList',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dedicateHostList) {
            $this->dedicateHostList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->dedicateHostList) {
            $res['DedicateHostList'] = null !== $this->dedicateHostList ? $this->dedicateHostList->toArray($noStream) : $this->dedicateHostList;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['DedicateHostList'])) {
            $model->dedicateHostList = dedicateHostList::fromMap($map['DedicateHostList']);
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
