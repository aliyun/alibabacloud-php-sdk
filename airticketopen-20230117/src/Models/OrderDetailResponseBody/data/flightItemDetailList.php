<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList\flightPrice;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList\flightSegmentCabinRelation;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList\passenger;

class flightItemDetailList extends Model
{
    /**
     * @var string[]
     */
    public $bPnrList;

    /**
     * @var string[]
     */
    public $cPnrList;

    /**
     * @var flightPrice
     */
    public $flightPrice;

    /**
     * @var flightSegmentCabinRelation[]
     */
    public $flightSegmentCabinRelation;

    /**
     * @var passenger
     */
    public $passenger;

    /**
     * @var string
     */
    public $ticketAirLine;

    /**
     * @var string[]
     */
    public $ticketNos;
    protected $_name = [
        'bPnrList' => 'b_pnr_list',
        'cPnrList' => 'c_pnr_list',
        'flightPrice' => 'flight_price',
        'flightSegmentCabinRelation' => 'flight_segment_cabin_relation',
        'passenger' => 'passenger',
        'ticketAirLine' => 'ticket_air_line',
        'ticketNos' => 'ticket_nos',
    ];

    public function validate()
    {
        if (\is_array($this->bPnrList)) {
            Model::validateArray($this->bPnrList);
        }
        if (\is_array($this->cPnrList)) {
            Model::validateArray($this->cPnrList);
        }
        if (null !== $this->flightPrice) {
            $this->flightPrice->validate();
        }
        if (\is_array($this->flightSegmentCabinRelation)) {
            Model::validateArray($this->flightSegmentCabinRelation);
        }
        if (null !== $this->passenger) {
            $this->passenger->validate();
        }
        if (\is_array($this->ticketNos)) {
            Model::validateArray($this->ticketNos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bPnrList) {
            if (\is_array($this->bPnrList)) {
                $res['b_pnr_list'] = [];
                $n1 = 0;
                foreach ($this->bPnrList as $item1) {
                    $res['b_pnr_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cPnrList) {
            if (\is_array($this->cPnrList)) {
                $res['c_pnr_list'] = [];
                $n1 = 0;
                foreach ($this->cPnrList as $item1) {
                    $res['c_pnr_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flightPrice) {
            $res['flight_price'] = null !== $this->flightPrice ? $this->flightPrice->toArray($noStream) : $this->flightPrice;
        }

        if (null !== $this->flightSegmentCabinRelation) {
            if (\is_array($this->flightSegmentCabinRelation)) {
                $res['flight_segment_cabin_relation'] = [];
                $n1 = 0;
                foreach ($this->flightSegmentCabinRelation as $item1) {
                    $res['flight_segment_cabin_relation'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toArray($noStream) : $this->passenger;
        }

        if (null !== $this->ticketAirLine) {
            $res['ticket_air_line'] = $this->ticketAirLine;
        }

        if (null !== $this->ticketNos) {
            if (\is_array($this->ticketNos)) {
                $res['ticket_nos'] = [];
                $n1 = 0;
                foreach ($this->ticketNos as $item1) {
                    $res['ticket_nos'][$n1] = $item1;
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
        if (isset($map['b_pnr_list'])) {
            if (!empty($map['b_pnr_list'])) {
                $model->bPnrList = [];
                $n1 = 0;
                foreach ($map['b_pnr_list'] as $item1) {
                    $model->bPnrList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['c_pnr_list'])) {
            if (!empty($map['c_pnr_list'])) {
                $model->cPnrList = [];
                $n1 = 0;
                foreach ($map['c_pnr_list'] as $item1) {
                    $model->cPnrList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['flight_price'])) {
            $model->flightPrice = flightPrice::fromMap($map['flight_price']);
        }

        if (isset($map['flight_segment_cabin_relation'])) {
            if (!empty($map['flight_segment_cabin_relation'])) {
                $model->flightSegmentCabinRelation = [];
                $n1 = 0;
                foreach ($map['flight_segment_cabin_relation'] as $item1) {
                    $model->flightSegmentCabinRelation[$n1] = flightSegmentCabinRelation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger'])) {
            $model->passenger = passenger::fromMap($map['passenger']);
        }

        if (isset($map['ticket_air_line'])) {
            $model->ticketAirLine = $map['ticket_air_line'];
        }

        if (isset($map['ticket_nos'])) {
            if (!empty($map['ticket_nos'])) {
                $model->ticketNos = [];
                $n1 = 0;
                foreach ($map['ticket_nos'] as $item1) {
                    $model->ticketNos[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
