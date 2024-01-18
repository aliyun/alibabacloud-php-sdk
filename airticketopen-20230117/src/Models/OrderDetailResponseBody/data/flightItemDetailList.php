<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList\flightPrice;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList\flightSegmentCabinRelation;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList\passenger;
use AlibabaCloud\Tea\Model;

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
     * @example HO
     *
     * @var string
     */
    public $ticketAirLine;

    /**
     * @var string[]
     */
    public $ticketNos;
    protected $_name = [
        'bPnrList'                   => 'b_pnr_list',
        'cPnrList'                   => 'c_pnr_list',
        'flightPrice'                => 'flight_price',
        'flightSegmentCabinRelation' => 'flight_segment_cabin_relation',
        'passenger'                  => 'passenger',
        'ticketAirLine'              => 'ticket_air_line',
        'ticketNos'                  => 'ticket_nos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bPnrList) {
            $res['b_pnr_list'] = $this->bPnrList;
        }
        if (null !== $this->cPnrList) {
            $res['c_pnr_list'] = $this->cPnrList;
        }
        if (null !== $this->flightPrice) {
            $res['flight_price'] = null !== $this->flightPrice ? $this->flightPrice->toMap() : null;
        }
        if (null !== $this->flightSegmentCabinRelation) {
            $res['flight_segment_cabin_relation'] = [];
            if (null !== $this->flightSegmentCabinRelation && \is_array($this->flightSegmentCabinRelation)) {
                $n = 0;
                foreach ($this->flightSegmentCabinRelation as $item) {
                    $res['flight_segment_cabin_relation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toMap() : null;
        }
        if (null !== $this->ticketAirLine) {
            $res['ticket_air_line'] = $this->ticketAirLine;
        }
        if (null !== $this->ticketNos) {
            $res['ticket_nos'] = $this->ticketNos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightItemDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['b_pnr_list'])) {
            if (!empty($map['b_pnr_list'])) {
                $model->bPnrList = $map['b_pnr_list'];
            }
        }
        if (isset($map['c_pnr_list'])) {
            if (!empty($map['c_pnr_list'])) {
                $model->cPnrList = $map['c_pnr_list'];
            }
        }
        if (isset($map['flight_price'])) {
            $model->flightPrice = flightPrice::fromMap($map['flight_price']);
        }
        if (isset($map['flight_segment_cabin_relation'])) {
            if (!empty($map['flight_segment_cabin_relation'])) {
                $model->flightSegmentCabinRelation = [];
                $n                                 = 0;
                foreach ($map['flight_segment_cabin_relation'] as $item) {
                    $model->flightSegmentCabinRelation[$n++] = null !== $item ? flightSegmentCabinRelation::fromMap($item) : $item;
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
                $model->ticketNos = $map['ticket_nos'];
            }
        }

        return $model;
    }
}
