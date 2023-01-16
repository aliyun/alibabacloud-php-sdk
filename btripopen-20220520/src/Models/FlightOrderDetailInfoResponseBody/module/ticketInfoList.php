<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailInfoResponseBody\module;

use AlibabaCloud\Tea\Model;

class ticketInfoList extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $openTicketStatus;

    /**
     * @example KF0528
     *
     * @var string
     */
    public $pnrCode;

    /**
     * @example 444-000000000
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @example 1
     *
     * @var string
     */
    public $ticketStatus;
    protected $_name = [
        'openTicketStatus' => 'open_ticket_status',
        'pnrCode'          => 'pnr_code',
        'ticketNo'         => 'ticket_no',
        'ticketStatus'     => 'ticket_status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ticketInfoList
     */
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
