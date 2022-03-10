<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTicketNumRequest extends Model
{
    /**
     * @var string
     */
    public $ticket;

    /**
     * @var int
     */
    public $ticketNum;
    protected $_name = [
        'ticket'    => 'Ticket',
        'ticketNum' => 'TicketNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }
        if (null !== $this->ticketNum) {
            $res['TicketNum'] = $this->ticketNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTicketNumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }
        if (isset($map['TicketNum'])) {
            $model->ticketNum = $map['TicketNum'];
        }

        return $model;
    }
}
