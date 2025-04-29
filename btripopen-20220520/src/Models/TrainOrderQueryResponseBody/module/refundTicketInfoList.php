<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class refundTicketInfoList extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var float
     */
    public $refundFee;

    /**
     * @var float
     */
    public $refundServiceFee;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'gmtCreate' => 'gmt_create',
        'gmtModify' => 'gmt_modify',
        'refundFee' => 'refund_fee',
        'refundServiceFee' => 'refund_service_fee',
        'ticketNo' => 'ticket_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModify) {
            $res['gmt_modify'] = $this->gmtModify;
        }

        if (null !== $this->refundFee) {
            $res['refund_fee'] = $this->refundFee;
        }

        if (null !== $this->refundServiceFee) {
            $res['refund_service_fee'] = $this->refundServiceFee;
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
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }

        if (isset($map['gmt_modify'])) {
            $model->gmtModify = $map['gmt_modify'];
        }

        if (isset($map['refund_fee'])) {
            $model->refundFee = $map['refund_fee'];
        }

        if (isset($map['refund_service_fee'])) {
            $model->refundServiceFee = $map['refund_service_fee'];
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
