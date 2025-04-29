<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module;

use AlibabaCloud\Dara\Model;

class ticketInfoList extends Model
{
    /**
     * @var string
     */
    public $openTicketStatus;

    /**
     * @var string
     */
    public $pnrCode;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var string
     */
    public $ticketStatus;
    protected $_name = [
        'openTicketStatus' => 'open_ticket_status',
        'pnrCode' => 'pnr_code',
        'ticketNo' => 'ticket_no',
        'ticketStatus' => 'ticket_status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openTicketStatus) {
            $res['open_ticket_status'] = $this->openTicketStatus;
        }

        if (null !== $this->pnrCode) {
            $res['pnr_code'] = $this->pnrCode;
        }

        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        if (null !== $this->ticketStatus) {
            $res['ticket_status'] = $this->ticketStatus;
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
        if (isset($map['open_ticket_status'])) {
            $model->openTicketStatus = $map['open_ticket_status'];
        }

        if (isset($map['pnr_code'])) {
            $model->pnrCode = $map['pnr_code'];
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        if (isset($map['ticket_status'])) {
            $model->ticketStatus = $map['ticket_status'];
        }

        return $model;
    }
}
