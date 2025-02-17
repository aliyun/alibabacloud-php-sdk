<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RefundRenderCmd extends Model
{
    /**
     * @var int
     */
    public $bizClaimType;
    /**
     * @var int
     */
    public $goodsStatus;
    /**
     * @var string
     */
    public $orderLineId;
    protected $_name = [
        'bizClaimType' => 'bizClaimType',
        'goodsStatus'  => 'goodsStatus',
        'orderLineId'  => 'orderLineId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizClaimType) {
            $res['bizClaimType'] = $this->bizClaimType;
        }

        if (null !== $this->goodsStatus) {
            $res['goodsStatus'] = $this->goodsStatus;
        }

        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
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
        if (isset($map['bizClaimType'])) {
            $model->bizClaimType = $map['bizClaimType'];
        }

        if (isset($map['goodsStatus'])) {
            $model->goodsStatus = $map['goodsStatus'];
        }

        if (isset($map['orderLineId'])) {
            $model->orderLineId = $map['orderLineId'];
        }

        return $model;
    }
}
