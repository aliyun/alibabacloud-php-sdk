<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class CreateCdiBagRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $flowOutSpec;

    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'commodityCode' => 'CommodityCode',
        'flowOutSpec'   => 'FlowOutSpec',
        'orderNum'      => 'OrderNum',
        'orderType'     => 'OrderType',
        'ownerId'       => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->flowOutSpec) {
            $res['FlowOutSpec'] = $this->flowOutSpec;
        }
        if (null !== $this->orderNum) {
            $res['OrderNum'] = $this->orderNum;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCdiBagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['FlowOutSpec'])) {
            $model->flowOutSpec = $map['FlowOutSpec'];
        }
        if (isset($map['OrderNum'])) {
            $model->orderNum = $map['OrderNum'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
