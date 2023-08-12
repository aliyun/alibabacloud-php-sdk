<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponseBody\orderList;

use AlibabaCloud\Tea\Model;

class orderList extends Model
{
    /**
     * @example 1661498032347
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $dedicatedHostGroupName;

    /**
     * @example ["i-t4n1tandot8j3axvwhe5"]
     *
     * @var string
     */
    public $ECSInstanceIds;

    /**
     * @example 21767077790****
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'createTimestamp'        => 'CreateTimestamp',
        'dedicatedHostGroupName' => 'DedicatedHostGroupName',
        'ECSInstanceIds'         => 'ECSInstanceIds',
        'orderId'                => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->dedicatedHostGroupName) {
            $res['DedicatedHostGroupName'] = $this->dedicatedHostGroupName;
        }
        if (null !== $this->ECSInstanceIds) {
            $res['ECSInstanceIds'] = $this->ECSInstanceIds;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DedicatedHostGroupName'])) {
            $model->dedicatedHostGroupName = $map['DedicatedHostGroupName'];
        }
        if (isset($map['ECSInstanceIds'])) {
            $model->ECSInstanceIds = $map['ECSInstanceIds'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
