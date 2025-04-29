<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module;

use AlibabaCloud\Dara\Model;

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
     * @var string[]
     */
    public $ticketNos;
    protected $_name = [
        'birthDate' => 'birth_date',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'gender' => 'gender',
        'originTicketNos' => 'origin_ticket_nos',
        'passengerId' => 'passenger_id',
        'passengerName' => 'passenger_name',
        'passengerType' => 'passenger_type',
        'phone' => 'phone',
        'pid' => 'pid',
        'ticketNos' => 'ticket_nos',
    ];

    public function validate()
    {
        if (\is_array($this->originTicketNos)) {
            Model::validateArray($this->originTicketNos);
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

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->originTicketNos) {
            if (\is_array($this->originTicketNos)) {
                $res['origin_ticket_nos'] = [];
                $n1 = 0;
                foreach ($this->originTicketNos as $item1) {
                    $res['origin_ticket_nos'][$n1++] = $item1;
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

        if (null !== $this->ticketNos) {
            if (\is_array($this->ticketNos)) {
                $res['ticket_nos'] = [];
                $n1 = 0;
                foreach ($this->ticketNos as $item1) {
                    $res['ticket_nos'][$n1++] = $item1;
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

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['origin_ticket_nos'])) {
            if (!empty($map['origin_ticket_nos'])) {
                $model->originTicketNos = [];
                $n1 = 0;
                foreach ($map['origin_ticket_nos'] as $item1) {
                    $model->originTicketNos[$n1++] = $item1;
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

        if (isset($map['ticket_nos'])) {
            if (!empty($map['ticket_nos'])) {
                $model->ticketNos = [];
                $n1 = 0;
                foreach ($map['ticket_nos'] as $item1) {
                    $model->ticketNos[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
