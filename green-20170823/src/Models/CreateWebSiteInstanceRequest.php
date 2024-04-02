<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class CreateWebSiteInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $duration;

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

    /**
     * @var string
     */
    public $pricingCycle;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'duration'     => 'Duration',
        'orderNum'     => 'OrderNum',
        'orderType'    => 'OrderType',
        'ownerId'      => 'OwnerId',
        'pricingCycle' => 'PricingCycle',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWebSiteInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        return $model;
    }
}
