<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryCompenInfosForOpResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $compenId;

    /**
     * @var string
     */
    public $compensationType;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $settleTime;

    /**
     * @var int
     */
    public $settleType;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'amount' => 'amount',
        'category' => 'category',
        'compenId' => 'compen_id',
        'compensationType' => 'compensation_type',
        'orderId' => 'order_id',
        'settleTime' => 'settle_time',
        'settleType' => 'settle_type',
        'ticketNo' => 'ticket_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->compenId) {
            $res['compen_id'] = $this->compenId;
        }

        if (null !== $this->compensationType) {
            $res['compensation_type'] = $this->compensationType;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->settleTime) {
            $res['settle_time'] = $this->settleTime;
        }

        if (null !== $this->settleType) {
            $res['settle_type'] = $this->settleType;
        }

        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['compen_id'])) {
            $model->compenId = $map['compen_id'];
        }

        if (isset($map['compensation_type'])) {
            $model->compensationType = $map['compensation_type'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['settle_time'])) {
            $model->settleTime = $map['settle_time'];
        }

        if (isset($map['settle_type'])) {
            $model->settleType = $map['settle_type'];
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
