<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RefundRenderCmd extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $bizClaimType;

    /**
     * @example 4
     *
     * @var int
     */
    public $goodsStatus;

    /**
     * @example 6692****5458
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RefundRenderCmd
     */
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
