<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2ResponseBody\module;

use AlibabaCloud\Tea\Model;

class travelerInfoDTOS extends Model
{
    /**
     * @example 2000-08-19
     *
     * @var string
     */
    public $birthDate;

    /**
     * @example 430131413423435353
     *
     * @var string
     */
    public $certNo;

    /**
     * @example 0
     *
     * @var int
     */
    public $certType;

    /**
     * @example 1
     *
     * @var int
     */
    public $gender;

    /**
     * @var string[]
     */
    public $originTicketNos;

    /**
     * @example 12172819047252004460056
     *
     * @var string
     */
    public $passengerId;

    /**
     * @var string
     */
    public $passengerName;

    /**
     * @example 0
     *
     * @var int
     */
    public $passengerType;

    /**
     * @example 17635462345
     *
     * @var string
     */
    public $phone;

    /**
     * @example 3243028
     *
     * @var int
     */
    public $pid;

    /**
     * @var string[]
     */
    public $ticketNos;
    protected $_name = [
        'birthDate'       => 'birth_date',
        'certNo'          => 'cert_no',
        'certType'        => 'cert_type',
        'gender'          => 'gender',
        'originTicketNos' => 'origin_ticket_nos',
        'passengerId'     => 'passenger_id',
        'passengerName'   => 'passenger_name',
        'passengerType'   => 'passenger_type',
        'phone'           => 'phone',
        'pid'             => 'pid',
        'ticketNos'       => 'ticket_nos',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['origin_ticket_nos'] = $this->originTicketNos;
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
            $res['ticket_nos'] = $this->ticketNos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return travelerInfoDTOS
     */
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
                $model->originTicketNos = $map['origin_ticket_nos'];
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
                $model->ticketNos = $map['ticket_nos'];
            }
        }

        return $model;
    }
}
