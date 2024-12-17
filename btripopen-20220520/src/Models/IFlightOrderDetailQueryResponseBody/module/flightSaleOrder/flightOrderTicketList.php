<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightSaleOrder;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderDetailQueryResponseBody\module\flightSaleOrder\flightOrderTicketList\cabinClass;
use AlibabaCloud\Tea\Model;

class flightOrderTicketList extends Model
{
    /**
     * @var cabinClass[]
     */
    public $cabinClass;

    /**
     * @var int
     */
    public $tax;

    /**
     * @example 018-6605785754
     *
     * @var string
     */
    public $ticketNo;

    /**
     * @var int
     */
    public $ticketPrice;

    /**
     * @example 01323
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'cabinClass'  => 'cabin_class',
        'tax'         => 'tax',
        'ticketNo'    => 'ticket_no',
        'ticketPrice' => 'ticket_price',
        'userId'      => 'user_id',
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
        if (null !== $this->tax) {
            $res['tax'] = $this->tax;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightOrderTicketList
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
        if (isset($map['tax'])) {
            $model->tax = $map['tax'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
