<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightChangeTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightRefundTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\flightTicketInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\insuranceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\invoiceInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\orderBaseInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\passengerInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module\priceInfoList;

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
        'flightInfoList' => 'flight_info_list',
        'flightRefundTicketInfoList' => 'flight_refund_ticket_info_list',
        'flightTicketInfoList' => 'flight_ticket_info_list',
        'insuranceInfoList' => 'insurance_info_list',
        'invoiceInfo' => 'invoice_info',
        'orderBaseInfo' => 'order_base_info',
        'passengerInfoList' => 'passenger_info_list',
        'priceInfoList' => 'price_info_list',
    ];

    public function validate()
    {
        if (\is_array($this->flightChangeTicketInfoList)) {
            Model::validateArray($this->flightChangeTicketInfoList);
        }
        if (\is_array($this->flightInfoList)) {
            Model::validateArray($this->flightInfoList);
        }
        if (\is_array($this->flightRefundTicketInfoList)) {
            Model::validateArray($this->flightRefundTicketInfoList);
        }
        if (\is_array($this->flightTicketInfoList)) {
            Model::validateArray($this->flightTicketInfoList);
        }
        if (\is_array($this->insuranceInfoList)) {
            Model::validateArray($this->insuranceInfoList);
        }
        if (null !== $this->invoiceInfo) {
            $this->invoiceInfo->validate();
        }
        if (null !== $this->orderBaseInfo) {
            $this->orderBaseInfo->validate();
        }
        if (\is_array($this->passengerInfoList)) {
            Model::validateArray($this->passengerInfoList);
        }
        if (\is_array($this->priceInfoList)) {
            Model::validateArray($this->priceInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightChangeTicketInfoList) {
            if (\is_array($this->flightChangeTicketInfoList)) {
                $res['flight_change_ticket_info_list'] = [];
                $n1 = 0;
                foreach ($this->flightChangeTicketInfoList as $item1) {
                    $res['flight_change_ticket_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightInfoList) {
            if (\is_array($this->flightInfoList)) {
                $res['flight_info_list'] = [];
                $n1 = 0;
                foreach ($this->flightInfoList as $item1) {
                    $res['flight_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightRefundTicketInfoList) {
            if (\is_array($this->flightRefundTicketInfoList)) {
                $res['flight_refund_ticket_info_list'] = [];
                $n1 = 0;
                foreach ($this->flightRefundTicketInfoList as $item1) {
                    $res['flight_refund_ticket_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->flightTicketInfoList) {
            if (\is_array($this->flightTicketInfoList)) {
                $res['flight_ticket_info_list'] = [];
                $n1 = 0;
                foreach ($this->flightTicketInfoList as $item1) {
                    $res['flight_ticket_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->insuranceInfoList) {
            if (\is_array($this->insuranceInfoList)) {
                $res['insurance_info_list'] = [];
                $n1 = 0;
                foreach ($this->insuranceInfoList as $item1) {
                    $res['insurance_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->invoiceInfo) {
            $res['invoice_info'] = null !== $this->invoiceInfo ? $this->invoiceInfo->toArray($noStream) : $this->invoiceInfo;
        }

        if (null !== $this->orderBaseInfo) {
            $res['order_base_info'] = null !== $this->orderBaseInfo ? $this->orderBaseInfo->toArray($noStream) : $this->orderBaseInfo;
        }

        if (null !== $this->passengerInfoList) {
            if (\is_array($this->passengerInfoList)) {
                $res['passenger_info_list'] = [];
                $n1 = 0;
                foreach ($this->passengerInfoList as $item1) {
                    $res['passenger_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->priceInfoList) {
            if (\is_array($this->priceInfoList)) {
                $res['price_info_list'] = [];
                $n1 = 0;
                foreach ($this->priceInfoList as $item1) {
                    $res['price_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['flight_change_ticket_info_list'])) {
            if (!empty($map['flight_change_ticket_info_list'])) {
                $model->flightChangeTicketInfoList = [];
                $n1 = 0;
                foreach ($map['flight_change_ticket_info_list'] as $item1) {
                    $model->flightChangeTicketInfoList[$n1++] = flightChangeTicketInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_info_list'])) {
            if (!empty($map['flight_info_list'])) {
                $model->flightInfoList = [];
                $n1 = 0;
                foreach ($map['flight_info_list'] as $item1) {
                    $model->flightInfoList[$n1++] = flightInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_refund_ticket_info_list'])) {
            if (!empty($map['flight_refund_ticket_info_list'])) {
                $model->flightRefundTicketInfoList = [];
                $n1 = 0;
                foreach ($map['flight_refund_ticket_info_list'] as $item1) {
                    $model->flightRefundTicketInfoList[$n1++] = flightRefundTicketInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['flight_ticket_info_list'])) {
            if (!empty($map['flight_ticket_info_list'])) {
                $model->flightTicketInfoList = [];
                $n1 = 0;
                foreach ($map['flight_ticket_info_list'] as $item1) {
                    $model->flightTicketInfoList[$n1++] = flightTicketInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['insurance_info_list'])) {
            if (!empty($map['insurance_info_list'])) {
                $model->insuranceInfoList = [];
                $n1 = 0;
                foreach ($map['insurance_info_list'] as $item1) {
                    $model->insuranceInfoList[$n1++] = insuranceInfoList::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['passenger_info_list'] as $item1) {
                    $model->passengerInfoList[$n1++] = passengerInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['price_info_list'])) {
            if (!empty($map['price_info_list'])) {
                $model->priceInfoList = [];
                $n1 = 0;
                foreach ($map['price_info_list'] as $item1) {
                    $model->priceInfoList[$n1++] = priceInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
