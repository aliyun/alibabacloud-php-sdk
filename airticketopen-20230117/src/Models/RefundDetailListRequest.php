<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class RefundDetailListRequest extends Model
{
    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $refundCreateBeginTime;

    /**
     * @var int
     */
    public $refundCreateEndTime;
    protected $_name = [
        'orderNum' => 'order_num',
        'pageIndex' => 'page_index',
        'pageSize' => 'page_size',
        'refundCreateBeginTime' => 'refund_create_begin_time',
        'refundCreateEndTime' => 'refund_create_end_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        if (null !== $this->pageIndex) {
            $res['page_index'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->refundCreateBeginTime) {
            $res['refund_create_begin_time'] = $this->refundCreateBeginTime;
        }

        if (null !== $this->refundCreateEndTime) {
            $res['refund_create_end_time'] = $this->refundCreateEndTime;
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
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        if (isset($map['page_index'])) {
            $model->pageIndex = $map['page_index'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['refund_create_begin_time'])) {
            $model->refundCreateBeginTime = $map['refund_create_begin_time'];
        }

        if (isset($map['refund_create_end_time'])) {
            $model->refundCreateEndTime = $map['refund_create_end_time'];
        }

        return $model;
    }
}
