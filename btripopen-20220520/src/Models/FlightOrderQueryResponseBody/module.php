<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightChangeTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightRefundTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\insuranceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\invoiceInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\orderBaseInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\passengerInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\priceInfoList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var flightChangeTicketInfoList[]
     */
    public $flightChangeTicketInfoList;

    /**
     * @var flightInfoList[]
     */
    public $flightInfoList;

    /**
     * @var flightRefundTicketInfoList[]
     */
    public $flightRefundTicketInfoList;

    /**
     * @var flightTicketInfoList[]
     */
    public $flightTicketInfoList;

    /**
     * @var insuranceInfoList[]
     */
    public $insuranceInfoList;

    /**
     * @var invoiceInfo
     */
    public $invoiceInfo;

    /**
     * @var orderBaseInfo
     */
    public $orderBaseInfo;

    /**
     * @var passengerInfoList[]
     */
    public $passengerInfoList;

    /**
     * @var priceInfoList[]
     */
    public $priceInfoList;
    protected $_name = [
        'flightChangeTicketInfoList' => 'flight_change_ticket_info_list',
        'flightInfoList'             => 'flight_info_list',
        'flightRefundTicketInfoList' => 'flight_refund_ticket_info_list',
        'flightTicketInfoList'       => 'flight_ticket_info_list',
        'insuranceInfoList'          => 'insurance_info_list',
        'invoiceInfo'                => 'invoice_info',
        'orderBaseInfo'              => 'order_base_info',
        'passengerInfoList'          => 'passenger_info_list',
        'priceInfoList'              => 'price_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightChangeTicketInfoList) {
            $res['flight_change_ticket_info_list'] = [];
            if (null !== $this->flightChangeTicketInfoList && \is_array($this->flightChangeTicketInfoList)) {
                $n = 0;
                foreach ($this->flightChangeTicketInfoList as $item) {
                    $res['flight_change_ticket_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightInfoList) {
            $res['flight_info_list'] = [];
            if (null !== $this->flightInfoList && \is_array($this->flightInfoList)) {
                $n = 0;
                foreach ($this->flightInfoList as $item) {
                    $res['flight_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightRefundTicketInfoList) {
            $res['flight_refund_ticket_info_list'] = [];
            if (null !== $this->flightRefundTicketInfoList && \is_array($this->flightRefundTicketInfoList)) {
                $n = 0;
                foreach ($this->flightRefundTicketInfoList as $item) {
                    $res['flight_refund_ticket_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightTicketInfoList) {
            $res['flight_ticket_info_list'] = [];
            if (null !== $this->flightTicketInfoList && \is_array($this->flightTicketInfoList)) {
                $n = 0;
                foreach ($this->flightTicketInfoList as $item) {
                    $res['flight_ticket_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->insuranceInfoList) {
            $res['insurance_info_list'] = [];
            if (null !== $this->insuranceInfoList && \is_array($this->insuranceInfoList)) {
                $n = 0;
                foreach ($this->insuranceInfoList as $item) {
                    $res['insurance_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invoiceInfo) {
            $res['invoice_info'] = null !== $this->invoiceInfo ? $this->invoiceInfo->toMap() : null;
        }
        if (null !== $this->orderBaseInfo) {
            $res['order_base_info'] = null !== $this->orderBaseInfo ? $this->orderBaseInfo->toMap() : null;
        }
        if (null !== $this->passengerInfoList) {
            $res['passenger_info_list'] = [];
            if (null !== $this->passengerInfoList && \is_array($this->passengerInfoList)) {
                $n = 0;
                foreach ($this->passengerInfoList as $item) {
                    $res['passenger_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->priceInfoList) {
            $res['price_info_list'] = [];
            if (null !== $this->priceInfoList && \is_array($this->priceInfoList)) {
                $n = 0;
                foreach ($this->priceInfoList as $item) {
                    $res['price_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_change_ticket_info_list'])) {
            if (!empty($map['flight_change_ticket_info_list'])) {
                $model->flightChangeTicketInfoList = [];
                $n                                 = 0;
                foreach ($map['flight_change_ticket_info_list'] as $item) {
                    $model->flightChangeTicketInfoList[$n++] = null !== $item ? flightChangeTicketInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_info_list'])) {
            if (!empty($map['flight_info_list'])) {
                $model->flightInfoList = [];
                $n                     = 0;
                foreach ($map['flight_info_list'] as $item) {
                    $model->flightInfoList[$n++] = null !== $item ? flightInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_refund_ticket_info_list'])) {
            if (!empty($map['flight_refund_ticket_info_list'])) {
                $model->flightRefundTicketInfoList = [];
                $n                                 = 0;
                foreach ($map['flight_refund_ticket_info_list'] as $item) {
                    $model->flightRefundTicketInfoList[$n++] = null !== $item ? flightRefundTicketInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_ticket_info_list'])) {
            if (!empty($map['flight_ticket_info_list'])) {
                $model->flightTicketInfoList = [];
                $n                           = 0;
                foreach ($map['flight_ticket_info_list'] as $item) {
                    $model->flightTicketInfoList[$n++] = null !== $item ? flightTicketInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['insurance_info_list'])) {
            if (!empty($map['insurance_info_list'])) {
                $model->insuranceInfoList = [];
                $n                        = 0;
                foreach ($map['insurance_info_list'] as $item) {
                    $model->insuranceInfoList[$n++] = null !== $item ? insuranceInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['invoice_info'])) {
            $model->invoiceInfo = invoiceInfo::fromMap($map['invoice_info']);
        }
        if (isset($map['order_base_info'])) {
            $model->orderBaseInfo = orderBaseInfo::fromMap($map['order_base_info']);
        }
        if (isset($map['passenger_info_list'])) {
            if (!empty($map['passenger_info_list'])) {
                $model->passengerInfoList = [];
                $n                        = 0;
                foreach ($map['passenger_info_list'] as $item) {
                    $model->passengerInfoList[$n++] = null !== $item ? passengerInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['price_info_list'])) {
            if (!empty($map['price_info_list'])) {
                $model->priceInfoList = [];
                $n                    = 0;
                foreach ($map['price_info_list'] as $item) {
                    $model->priceInfoList[$n++] = null !== $item ? priceInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
