<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

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
        'ticket' => 'Ticket',
        'ticketNum' => 'TicketNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
