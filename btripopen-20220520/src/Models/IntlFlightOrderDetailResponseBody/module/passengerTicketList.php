<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerTicketList\ticketList;

class passengerTicketList extends Model
{
    /**
     * @var int
     */
    public $passengerId;

    /**
     * @var ticketList[]
     */
    public $ticketList;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'ticketList' => 'ticket_list',
    ];

    public function validate()
    {
        if (\is_array($this->ticketList)) {
            Model::validateArray($this->ticketList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->ticketList) {
            if (\is_array($this->ticketList)) {
                $res['ticket_list'] = [];
                $n1 = 0;
                foreach ($this->ticketList as $item1) {
                    $res['ticket_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['ticket_list'])) {
            if (!empty($map['ticket_list'])) {
                $model->ticketList = [];
                $n1 = 0;
                foreach ($map['ticket_list'] as $item1) {
                    $model->ticketList[$n1] = ticketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
