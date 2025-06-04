<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponseBody\orderList;

use AlibabaCloud\Dara\Model;

class orderList extends Model
{
    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $dedicatedHostGroupName;

    /**
     * @var string
     */
    public $ECSInstanceIds;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'dedicatedHostGroupName' => 'DedicatedHostGroupName',
        'ECSInstanceIds' => 'ECSInstanceIds',
        'orderId' => 'OrderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
