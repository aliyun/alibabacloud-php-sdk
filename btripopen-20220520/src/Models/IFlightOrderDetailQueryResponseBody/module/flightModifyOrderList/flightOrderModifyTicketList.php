<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightModifyOrderList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightModifyOrderList\flightOrderModifyTicketList\cabinClass;
use AlibabaCloud\Tea\Model;

class flightOrderModifyTicketList extends Model
{
    /**
     * @var cabinClass[]
     */
    public $cabinClass;

    /**
     * @example MU5236
     *
     * @var string
     */
    public $flightNo;

    /**
     * @example 781-6605285563
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @example 0132
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'cabinClass' => 'cabin_class',
        'flightNo'   => 'flight_no',
        'ticketNo'   => 'ticket_no',
        'userId'     => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = [];
            if (null !== $this->cabinClass && \is_array($this->cabinClass)) {
                $n = 0;
                foreach ($this->cabinClass as $item) {
                    $res['cabin_class'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightOrderModifyTicketList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin_class'])) {
            if (!empty($map['cabin_class'])) {
                $model->cabinClass = [];
                $n                 = 0;
                foreach ($map['cabin_class'] as $item) {
                    $model->cabinClass[$n++] = null !== $item ? cabinClass::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
