<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightSaleOrder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightSaleOrder\flightOrderTicketList\cabinClass;

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
     * @var string
     */
    public $ticketNo;

    /**
     * @var int
     */
    public $ticketPrice;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'cabinClass' => 'cabin_class',
        'tax' => 'tax',
        'ticketNo' => 'ticket_no',
        'ticketPrice' => 'ticket_price',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (\is_array($this->cabinClass)) {
            Model::validateArray($this->cabinClass);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cabinClass) {
            if (\is_array($this->cabinClass)) {
                $res['cabin_class'] = [];
                $n1 = 0;
                foreach ($this->cabinClass as $item1) {
                    $res['cabin_class'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin_class'])) {
            if (!empty($map['cabin_class'])) {
                $model->cabinClass = [];
                $n1 = 0;
                foreach ($map['cabin_class'] as $item1) {
                    $model->cabinClass[$n1++] = cabinClass::fromMap($item1);
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
