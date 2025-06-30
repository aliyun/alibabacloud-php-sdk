<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TrainBillSettlementQueryRequest extends Model
{
    /**
     * @var string
     */
    public $billBatch;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $periodEnd;

    /**
     * @var string
     */
    public $periodStart;

    /**
     * @var string
     */
    public $scrollId;

    /**
     * @var bool
     */
    public $scrollMod;
    protected $_name = [
        'billBatch' => 'bill_batch',
        'orderId' => 'order_id',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
        'periodEnd' => 'period_end',
        'periodStart' => 'period_start',
        'scrollId' => 'scroll_id',
        'scrollMod' => 'scroll_mod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billBatch) {
            $res['bill_batch'] = $this->billBatch;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->periodEnd) {
            $res['period_end'] = $this->periodEnd;
        }

        if (null !== $this->periodStart) {
            $res['period_start'] = $this->periodStart;
        }

        if (null !== $this->scrollId) {
            $res['scroll_id'] = $this->scrollId;
        }

        if (null !== $this->scrollMod) {
            $res['scroll_mod'] = $this->scrollMod;
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
        if (isset($map['bill_batch'])) {
            $model->billBatch = $map['bill_batch'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['page_no'])) {
            $model->pageNo = $map['page_no'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['period_end'])) {
            $model->periodEnd = $map['period_end'];
        }

        if (isset($map['period_start'])) {
            $model->periodStart = $map['period_start'];
        }

        if (isset($map['scroll_id'])) {
            $model->scrollId = $map['scroll_id'];
        }

        if (isset($map['scroll_mod'])) {
            $model->scrollMod = $map['scroll_mod'];
        }

        return $model;
    }
}
