<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class flightChangeTicketInfoList extends Model
{
    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $changeCabin;

    /**
     * @var string
     */
    public $changeCabinLevel;

    /**
     * @var float
     */
    public $changeFee;

    /**
     * @var string
     */
    public $changeFlightNo;

    /**
     * @var int
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $changeReason;

    /**
     * @var int
     */
    public $changeType;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $originTicketNo;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var float
     */
    public $upgradeFee;
    protected $_name = [
        'arrTime'          => 'arr_time',
        'changeCabin'      => 'change_cabin',
        'changeCabinLevel' => 'change_cabin_level',
        'changeFee'        => 'change_fee',
        'changeFlightNo'   => 'change_flight_no',
        'changeOrderId'    => 'change_order_id',
        'changeReason'     => 'change_reason',
        'changeType'       => 'change_type',
        'depTime'          => 'dep_time',
        'gmtCreate'        => 'gmt_create',
        'gmtModify'        => 'gmt_modify',
        'originTicketNo'   => 'origin_ticket_no',
        'ticketNo'         => 'ticket_no',
        'upgradeFee'       => 'upgrade_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->changeCabin) {
            $res['change_cabin'] = $this->changeCabin;
        }
        if (null !== $this->changeCabinLevel) {
            $res['change_cabin_level'] = $this->changeCabinLevel;
        }
        if (null !== $this->changeFee) {
            $res['change_fee'] = $this->changeFee;
        }
        if (null !== $this->changeFlightNo) {
            $res['change_flight_no'] = $this->changeFlightNo;
        }
        if (null !== $this->changeOrderId) {
            $res['change_order_id'] = $this->changeOrderId;
        }
        if (null !== $this->changeReason) {
            $res['change_reason'] = $this->changeReason;
        }
        if (null !== $this->changeType) {
            $res['change_type'] = $this->changeType;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmt_modify'] = $this->gmtModify;
        }
        if (null !== $this->originTicketNo) {
            $res['origin_ticket_no'] = $this->originTicketNo;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->upgradeFee) {
            $res['upgrade_fee'] = $this->upgradeFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightChangeTicketInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['change_cabin'])) {
            $model->changeCabin = $map['change_cabin'];
        }
        if (isset($map['change_cabin_level'])) {
            $model->changeCabinLevel = $map['change_cabin_level'];
        }
        if (isset($map['change_fee'])) {
            $model->changeFee = $map['change_fee'];
        }
        if (isset($map['change_flight_no'])) {
            $model->changeFlightNo = $map['change_flight_no'];
        }
        if (isset($map['change_order_id'])) {
            $model->changeOrderId = $map['change_order_id'];
        }
        if (isset($map['change_reason'])) {
            $model->changeReason = $map['change_reason'];
        }
        if (isset($map['change_type'])) {
            $model->changeType = $map['change_type'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modify'])) {
            $model->gmtModify = $map['gmt_modify'];
        }
        if (isset($map['origin_ticket_no'])) {
            $model->originTicketNo = $map['origin_ticket_no'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['upgrade_fee'])) {
            $model->upgradeFee = $map['upgrade_fee'];
        }

        return $model;
    }
}
