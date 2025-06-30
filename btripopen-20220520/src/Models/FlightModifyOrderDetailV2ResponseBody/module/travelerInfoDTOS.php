<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2ResponseBody\module\travelerInfoDTOS\changeFee;

class travelerInfoDTOS extends Model
{
    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var int
     */
    public $certType;

    /**
     * @var changeFee
     */
    public $changeFee;

    /**
     * @var int
     */
    public $gender;

    /**
     * @var string[]
     */
    public $originTicketNos;

    /**
     * @var string
     */
    public $passengerId;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @var int
     */
    public $passengerType;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $pid;

    /**
     * @var mixed[]
     */
    public $ticketNoSegmentMap;

    /**
     * @var string[]
     */
    public $ticketNos;
    protected $_name = [
        'birthDate' => 'birth_date',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'changeFee' => 'change_fee',
        'gender' => 'gender',
        'originTicketNos' => 'origin_ticket_nos',
        'passengerId' => 'passenger_id',
        'passengerName' => 'passenger_name',
        'passengerType' => 'passenger_type',
        'phone' => 'phone',
        'pid' => 'pid',
        'ticketNoSegmentMap' => 'ticket_no_segment_map',
        'ticketNos' => 'ticket_nos',
    ];

    public function validate()
    {
        if (null !== $this->changeFee) {
            $this->changeFee->validate();
        }
        if (\is_array($this->originTicketNos)) {
            Model::validateArray($this->originTicketNos);
        }
        if (\is_array($this->ticketNoSegmentMap)) {
            Model::validateArray($this->ticketNoSegmentMap);
        }
        if (\is_array($this->ticketNos)) {
            Model::validateArray($this->ticketNos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->birthDate) {
            $res['birth_date'] = $this->birthDate;
        }

        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }

        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }

        if (null !== $this->changeFee) {
            $res['change_fee'] = null !== $this->changeFee ? $this->changeFee->toArray($noStream) : $this->changeFee;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->originTicketNos) {
            if (\is_array($this->originTicketNos)) {
                $res['origin_ticket_nos'] = [];
                $n1 = 0;
                foreach ($this->originTicketNos as $item1) {
                    $res['origin_ticket_nos'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }

        if (null !== $this->passengerType) {
            $res['passenger_type'] = $this->passengerType;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->pid) {
            $res['pid'] = $this->pid;
        }

        if (null !== $this->ticketNoSegmentMap) {
            if (\is_array($this->ticketNoSegmentMap)) {
                $res['ticket_no_segment_map'] = [];
                foreach ($this->ticketNoSegmentMap as $key1 => $value1) {
                    $res['ticket_no_segment_map'][$key1] = $value1;
                }
            }
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
        if (isset($map['birth_date'])) {
            $model->birthDate = $map['birth_date'];
        }

        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }

        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }

        if (isset($map['change_fee'])) {
            $model->changeFee = changeFee::fromMap($map['change_fee']);
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['origin_ticket_nos'])) {
            if (!empty($map['origin_ticket_nos'])) {
                $model->originTicketNos = [];
                $n1 = 0;
                foreach ($map['origin_ticket_nos'] as $item1) {
                    $model->originTicketNos[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }

        if (isset($map['passenger_type'])) {
            $model->passengerType = $map['passenger_type'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['pid'])) {
            $model->pid = $map['pid'];
        }

        if (isset($map['ticket_no_segment_map'])) {
            if (!empty($map['ticket_no_segment_map'])) {
                $model->ticketNoSegmentMap = [];
                foreach ($map['ticket_no_segment_map'] as $key1 => $value1) {
                    $model->ticketNoSegmentMap[$key1] = $value1;
                }
            }
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
