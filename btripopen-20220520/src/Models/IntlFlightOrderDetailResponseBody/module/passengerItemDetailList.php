<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\passengerItemDetailList\ticketList;
use AlibabaCloud\Tea\Model;

class passengerItemDetailList extends Model
{
    /**
     * @example 8432002
     *
     * @var int
     */
    public $passengerId;

    /**
     * @var ticketList[]
     */
    public $ticketList;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'ticketList'  => 'ticket_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }
        if (null !== $this->ticketList) {
            $res['ticket_list'] = [];
            if (null !== $this->ticketList && \is_array($this->ticketList)) {
                $n = 0;
                foreach ($this->ticketList as $item) {
                    $res['ticket_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerItemDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }
        if (isset($map['ticket_list'])) {
            if (!empty($map['ticket_list'])) {
                $model->ticketList = [];
                $n                 = 0;
                foreach ($map['ticket_list'] as $item) {
                    $model->ticketList[$n++] = null !== $item ? ticketList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
