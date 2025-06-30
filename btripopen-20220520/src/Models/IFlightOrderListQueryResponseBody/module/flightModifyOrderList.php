<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightModifyOrderList\flightModifySegmentList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightModifyOrderList\flightOrderModifyTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightModifyOrderList\passengerFee;

class flightModifyOrderList extends Model
{
    /**
     * @var int
     */
    public $corpPayPrice;

    /**
     * @var flightModifySegmentList[]
     */
    public $flightModifySegmentList;

    /**
     * @var flightOrderModifyTicketList[]
     */
    public $flightOrderModifyTicketList;

    /**
     * @var int
     */
    public $modifyApplyId;

    /**
     * @var passengerFee[]
     */
    public $passengerFee;

    /**
     * @var string[]
     */
    public $passengerList;

    /**
     * @var int
     */
    public $personPayPrice;

    /**
     * @var int
     */
    public $relateModifyApplyId;

    /**
     * @var int
     */
    public $serviceFee;

    /**
     * @var int
     */
    public $totalFee;
    protected $_name = [
        'corpPayPrice' => 'corp_pay_price',
        'flightModifySegmentList' => 'flight_modify_segment_list',
        'flightOrderModifyTicketList' => 'flight_order_modify_ticket_list',
        'modifyApplyId' => 'modify_apply_id',
        'passengerFee' => 'passenger_fee',
        'passengerList' => 'passenger_list',
        'personPayPrice' => 'person_pay_price',
        'relateModifyApplyId' => 'relate_modify_apply_id',
        'serviceFee' => 'service_fee',
        'totalFee' => 'total_fee',
    ];

    public function validate()
    {
        if (\is_array($this->flightModifySegmentList)) {
            Model::validateArray($this->flightModifySegmentList);
        }
        if (\is_array($this->flightOrderModifyTicketList)) {
            Model::validateArray($this->flightOrderModifyTicketList);
        }
        if (\is_array($this->passengerFee)) {
            Model::validateArray($this->passengerFee);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpPayPrice) {
            $res['corp_pay_price'] = $this->corpPayPrice;
        }

        if (null !== $this->flightModifySegmentList) {
            if (\is_array($this->flightModifySegmentList)) {
                $res['flight_modify_segment_list'] = [];
                $n1 = 0;
                foreach ($this->flightModifySegmentList as $item1) {
                    $res['flight_modify_segment_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flightOrderModifyTicketList) {
            if (\is_array($this->flightOrderModifyTicketList)) {
                $res['flight_order_modify_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->flightOrderModifyTicketList as $item1) {
                    $res['flight_order_modify_ticket_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifyApplyId) {
            $res['modify_apply_id'] = $this->modifyApplyId;
        }

        if (null !== $this->passengerFee) {
            if (\is_array($this->passengerFee)) {
                $res['passenger_fee'] = [];
                $n1 = 0;
                foreach ($this->passengerFee as $item1) {
                    $res['passenger_fee'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerList) {
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->personPayPrice) {
            $res['person_pay_price'] = $this->personPayPrice;
        }

        if (null !== $this->relateModifyApplyId) {
            $res['relate_modify_apply_id'] = $this->relateModifyApplyId;
        }

        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }

        if (null !== $this->totalFee) {
            $res['total_fee'] = $this->totalFee;
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
        if (isset($map['corp_pay_price'])) {
            $model->corpPayPrice = $map['corp_pay_price'];
        }

        if (isset($map['flight_modify_segment_list'])) {
            if (!empty($map['flight_modify_segment_list'])) {
                $model->flightModifySegmentList = [];
                $n1 = 0;
                foreach ($map['flight_modify_segment_list'] as $item1) {
                    $model->flightModifySegmentList[$n1] = flightModifySegmentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['flight_order_modify_ticket_list'])) {
            if (!empty($map['flight_order_modify_ticket_list'])) {
                $model->flightOrderModifyTicketList = [];
                $n1 = 0;
                foreach ($map['flight_order_modify_ticket_list'] as $item1) {
                    $model->flightOrderModifyTicketList[$n1] = flightOrderModifyTicketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modify_apply_id'])) {
            $model->modifyApplyId = $map['modify_apply_id'];
        }

        if (isset($map['passenger_fee'])) {
            if (!empty($map['passenger_fee'])) {
                $model->passengerFee = [];
                $n1 = 0;
                foreach ($map['passenger_fee'] as $item1) {
                    $model->passengerFee[$n1] = passengerFee::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['person_pay_price'])) {
            $model->personPayPrice = $map['person_pay_price'];
        }

        if (isset($map['relate_modify_apply_id'])) {
            $model->relateModifyApplyId = $map['relate_modify_apply_id'];
        }

        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }

        if (isset($map['total_fee'])) {
            $model->totalFee = $map['total_fee'];
        }

        return $model;
    }
}
