<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryProduceDetailRequest extends Model
{
    /**
     * @var string
     */
    public $applyNo;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'applyNo' => 'ApplyNo',
        'bizId'   => 'BizId',
        'orderId' => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyNo) {
            $res['ApplyNo'] = $this->applyNo;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryProduceDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyNo'])) {
            $model->applyNo = $map['ApplyNo'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
