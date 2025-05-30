<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListSQLReviewOriginSQLShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $orderActionDetailShrink;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderActionDetailShrink' => 'OrderActionDetail',
        'orderId' => 'OrderId',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderActionDetailShrink) {
            $res['OrderActionDetail'] = $this->orderActionDetailShrink;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['OrderActionDetail'])) {
            $model->orderActionDetailShrink = $map['OrderActionDetail'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
